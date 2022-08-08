var excludeField = {
	edit: ["users_profile_pic"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			$(`#${prefix}_${key}`).val(userDetails[key]);
		}
	});
};

var onDelete = (uuid) => {
	$("#delete-confirm").data("id", uuid);
};

$(function () {
	const loadDentistDropdown = async () => {
		const dropdowns = $(".dentist-dropdown");
		const { data } = await $.ajax(
			getAjaxConfig("/general/dentist", {
				type: "GET",
			})
		);

		dropdowns.each(function () {
			$(this).html(
				data
					.map(
						({ users_id, users_fname, users_lname }) =>
							`<option value="${users_id}">Dr. ${users_fname} ${users_lname}</option>`
					)
					.join("")
			);
		});
	};

	loadDentistDropdown();
	loadBranchDropdown();
	const dataTable = $("#schedule-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/staff/schedule", {
				type: "GET",
			}),
			columns: [
				{
					data: null,
					render: function (data, type, row, meta) {
						const firstname = data.sched ? data.sched.users_fname : "";
						const lastname = data.sched ? data.sched.users_lname : "";
						return `Dr. ${firstname} ${lastname}`;
					},
				},
				{
					data: null,
					render: function (data) {
						const branchName = data.sched_branch
							? data.sched_branch.branches_name
							: "";
						return branchName;
					},
				},
				{
					data: "schedule_date",
				},
				{
					data: "schedule_start_time",
				},
				{
					data: "schedule_end_time",
				},
				{
					data: "schedule_status",
					render: function (data, type, row, meta) {
						return `<span class="badge badge-success-lighten">${data}</span>`;
					},
				},
				{
					orderable: !1,
					data: null,
					render: function (data, type, row, meta) {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop9" onclick='setValues(${JSON.stringify(
								data
							)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop10" onclick='setValues(${JSON.stringify(
								data
							)}, "edit")'> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop11" onclick='onDelete("${data.schedule_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);
	$(document).on("submit", "#add-schedule-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		let formDataObject = Object.fromEntries(formData.entries());
		try {
			const { message } = await $.ajax(
				getAjaxConfig("/staff/schedule", {
					type: "POST",
					data: JSON.stringify(formDataObject),
					contentType: "application/json",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.error(error);
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}
		$("#staticBackdrop8").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});
	$(document).on("submit", "#edit-schedule-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		const userId = formData.get("schedule_id");
		formData.delete("schedule_id");
		for (const [key, value] of formData.entries()) {
			if (typeof value == "object") {
				if (!value || value.size == 0) {
					formData.delete(key);
				}
			} else {
				if (!value) {
					formData.delete(key);
				}
			}
		}
		let formDataObject = Object.fromEntries(formData.entries());
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/staff/schedule/${userId}`, {
					type: "PUT",
					data: JSON.stringify(formDataObject),
					contentType: "application/json",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.error(error);
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}
		$("#staticBackdrop10").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});
	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/staff/schedule/${id}`, {
					type: "DELETE",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.error(error);
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop11").modal("toggle");
		dataTable.ajax.reload();
	});
});

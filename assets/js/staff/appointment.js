var excludeField = {
	edit: ["users_profile_pic"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			console.log(userDetails[key]);
			if (key == "appointments_comment") {
				if (prefix == "edit") {
					quillModify.setText(userDetails[key]);
				} else {
					quillView.setText(userDetails[key]);
				}
			} else {
				$(`#${prefix}_${key}`).val(userDetails[key]).trigger("change");
			}
		}
	});
};

var onDelete = (uuid) => {
	$("#delete-confirm").data("id", uuid);
};

var schedules = [];
$(async function () {
	loadBranchDropdown();
	const { data } = await $.ajax(
		getAjaxConfig("/staff/schedule", {
			type: "GET",
		})
	);
	schedules = data;

	const dataTable = $("#appointment-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/staff/appointment", {
				type: "GET",
			}),
			columns: [
				{
					data: "app_sched",
					render: function (data) {
						return data
							? data.sched
								? `Dr. ${data.sched.users_fname} ${data.sched.users_lname}`
								: ""
							: "";
					},
				},
				{
					data: "app_sched",
					render: function (data) {
						return data
							? `${data.schedule_date} ${data.schedule_start_time} - ${data.schedule_end_time}`
							: "";
					},
				},
				{
					data: "appointments_purpose",
				},
				{
					data: "appointments_comment",
				},
				{
					data: "appointments_success",
				},
				{
					data: "appointments_status",
					render: function (data, type, row, meta) {
						if (data == "Approved") {
							return `<span class="badge badge-success-lighten">${data}</span>`;
						} else if (data == "Pending") {
							return `<span class="badge badge-warning-lighten">${data}</span>`;
						} else {
							return `<span class="badge badge-danger-lighten">${data}</span>`;
						}
					},
				},
				{
					orderable: !1,
					data: null,
					render: function (data, type, row, meta) {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" onclick='setValues(${JSON.stringify(
								data
							)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick='setValues(${JSON.stringify(
								data
							)}, "edit")'> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" onclick='onDelete("${data.appointments_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);

	$(document).on("submit", "#add-appointment-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		// formData.append("appointments_comment", quill.getText());
		let formDataObject = Object.fromEntries(formData.entries());

		try {
			const { message } = await $.ajax(
				getAjaxConfig("/staff/appointment", {
					type: "POST",
					data: JSON.stringify(formDataObject),
					contentType: "application/json",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification(
				"error",
				"Oops! An error occurs",
				responseJSON.errors[0].message
			);
		}
		$("#staticBackdrop0").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("submit", "#edit-appointment-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		if (quillModify.getLength() > 0) {
			formData.append("appointments_comment", quillModify.getText());
		}
		const userId = formData.get("appointments_id");
		formData.delete("appointments_id");
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
				getAjaxConfig(`/staff/appointment/${userId}`, {
					type: "PUT",
					data: JSON.stringify(formDataObject),
					contentType: "application/json",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop2").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/staff/appointment/${id}`, {
					type: "DELETE",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop3").modal("toggle");
		dataTable.ajax.reload();
	});

	$(document).on("change", ".branch-dropdown", async function () {
		const selected = $(this).val();
		const scheduleDropdowns = $(".schedule-dropdown");
		scheduleDropdowns.each(function () {
			$(this).html("<option></option>");
		});

		scheduleDropdowns.each(function () {
			$(this).html(
				[
					"<option></option>",
					...schedules
						.filter((element) => element.schedule_branch === selected)
						.map(
							(element) =>
								`<option value='${element.schedule_id}'>Dr. ${element.sched.users_fname} ${element.sched.users_lname} - ${element.schedule_date} ${element.schedule_start_time} ${element.schedule_end_time}</option>`
						),
				].join("")
			);
		});
	});
});

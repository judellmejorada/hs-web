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
	const dataTable = $("#products-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/admin/user/retrieve-users", {
				type: "GET",
			}),
			columns: [
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<img src="${baseURLUserProfile}/${data.users_profile_pic}" alt="table-user" class="me-2 rounded-circle"><a href="javascript:void(0);" class="text-body fw-semibold">${data.users_fname} ${data.users_mname} ${data.users_lname}</a>`;
					},
					className: "table-user",
				},
				{
					// birth day not available
					data: "users_birthdate",
				},
				{
					data: "users_gender",
					render: function (data, type, row, meta) {
						return `<span class="fw-semibold">${data}</span>`;
					},
				},
				{
					data: "users_phone_number",
				},
				{
					data: "users_email",
				},
				{
					data: "users_status",
					render: function (data, type, row, meta) {
						return `<span class="badge badge-success-lighten">${data}</span>`;
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
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" onclick='onDelete("${data.users_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "pdf", "print"],
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, "All"],
			],
		})
	);

	$(document).on("submit", "#add-user-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		try {
			const { message } = await $.ajax(
				getAjaxConfig("/admin/user/add-users", {
					type: "POST",
					data: formData,
					contentType: false,
					processData: false,
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.error(error);
			const { responseJSON } = error;
			notification(
				"error",
				"Oops! An error occurs",
				responseJSON.errors[0].message
			);
		}
		$("#staticBackdrop0").modal("toggle");

		return false;
	});

	$(document).on("submit", "#edit-user-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		const userId = formData.get("users_id");
		formData.delete("users_id");
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
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/admin/user/${userId}`, {
					type: "PUT",
					data: formData,
					contentType: false,
					processData: false,
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.error(error);
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}
		$("#staticBackdrop2").modal("toggle");
		return false;
	});

	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/admin/user/${id}`, {
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
		$("#staticBackdrop3").modal("toggle");
	});
});

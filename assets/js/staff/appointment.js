var excludeField = {
	edit: ["users_profile_pic"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			if (key == "appointments_comment") {
				if (prefix == "edit") {
					quillModify.setText(userDetails[key]);
				} else {
					quillView.setText(userDetails[key]);
				}
			} else {
				$(`#${prefix}_${key}`).val(userDetails[key]);
			}
		}
	});
};

var onDelete = (uuid) => {
	$("#delete-confirm").data("id", uuid);
};
$(function () {
	const dataTable = $("#appointment-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/staff/appointment", {
				type: "GET",
			}),
			columns: [
				{
					data: "appointments_branch",
				},
				{
					data: "appointments_sched",
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
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> <i class="mdi mdi-square-edit-outline"></i></a>` +
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
		formData.append("appointments_comment", quill.getText());
		await $.ajax(
			getAjaxConfig("/staff/appointment", {
				type: "POST",
				data: formData,
				contentType: false,
				processData: false,
			})
		);
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
		await $.ajax(
			getAjaxConfig(`/staff/appointment/${userId}`, {
				type: "PUT",
				data: formData,
				contentType: false,
				processData: false,
			})
		);
		$("#staticBackdrop2").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		await $.ajax(
			getAjaxConfig(`/staff/appointment/${id}`, {
				type: "DELETE",
			})
		);
		$("#staticBackdrop3").modal("toggle");
		dataTable.ajax.reload();
	});
});

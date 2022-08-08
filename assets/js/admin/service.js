var excludeField = {
	edit: ["services_image"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			if (key == "services_description") {
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
	const dataTable = $("#service-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/admin/service/get-all-services", {
				type: "GET",
			}),
			columns: [
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<img src="${baseUrlServicePic}/${data.services_image}" alt="table-user" class="me-2 rounded-circle"><a href="javascript:void(0);" class="text-body fw-semibold">${data.services_name}</a>`;
					},
					className: "table-user",
				},
				{
					data: "services_description",
					render: function (data, type, row, meta) {
						return `<span>${data.substring(0, 50) + "..."}</span>`;
					},
				},
				{
					data: "services_status",
					render: function (data, type, row, meta) {
						return `<span class="badge badge-success-lighten">${data}</span>`;
					},
				},
				{
					orderable: !1,
					data: null,
					render: function (data, type, row, meta) {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop5" onclick='setValues(${JSON.stringify(
								data
							)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop6" onclick='setValues(${JSON.stringify(
								data
							)}, "edit")'> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop7" onclick='onDelete("${data.services_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);

	$(document).on("submit", "#add-service-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		formData.append("services_description", quill.getText());
		await $.ajax(
			getAjaxConfig("/admin/service/add-service", {
				type: "POST",
				data: formData,
				contentType: false,
				processData: false,
			})
		);
		$("#staticBackdrop4").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("submit", "#edit_service_form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		if (quillModify.getLength() > 0) {
			formData.append("services_description", quillModify.getText());
		}
		const userId = formData.get("services_id");
		formData.delete("services_id");
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
			getAjaxConfig(`/admin/service/${userId}`, {
				type: "PUT",
				data: formData,
				contentType: false,
				processData: false,
			})
		);
		$("#staticBackdrop6").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		await $.ajax(
			getAjaxConfig(`/admin/service/${id}`, {
				type: "DELETE",
			})
		);
		$("#staticBackdrop7").modal("toggle");
		dataTable.ajax.reload();
	});
});

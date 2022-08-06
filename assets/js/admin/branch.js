var excludeField = {
	edit: ["users_profile_pic"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			if (key == "branches_description") {
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
	const dataTable = $("#branch-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/admin/branch/get-all-branches", {
				type: "GET",
			}),
			columns: [
				{
					data: "branches_name",
					// render: function (data, type, row, meta) {
					// 	return `<img src="${baseURLUserProfile}/${data.users_profile_pic}" alt="table-user" class="me-2 rounded-circle"><a href="javascript:void(0);" class="text-body fw-semibold">${branches_name} </a>`;
					// },
					// className: "table-user",
				},
				{
					data: "branches_contact_person",
				},
				{
					data: "branches_phone_number",
				},
				{
					data: "branches_google_map",
				},
				{
					data: "branches_description",
				},
				{
					data: "branches_status",
					render: function (data, type, row, meta) {
						return `<span class="badge badge-success-lighten">${data}</span>`;
					},
				},
				{
					orderable: !1,
					data: null,
					render: function (data, type, rowm, meta) {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop13" onclick='setValues(${JSON.stringify(
								data
							)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop14" onclick='setValues(${JSON.stringify(
								data
							)}, "edit")'> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop15" onclick='onDelete("${data.branches_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);

	$(document).on("submit", "#add-branch-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		formData.append("branches_description", quill.getText());
		let formDataObject = Object.fromEntries(formData.entries());
		await $.ajax(
			getAjaxConfig("/admin/branch/add-branch", {
				type: "POST",
				data: JSON.stringify(formDataObject),
				contentType: "application/json",
			})
		);
		$("#staticBackdrop12").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("submit", "#edit-branch-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		if (quillModify.getLength() > 0) {
			formData.append("branches_description", quillModify.getText());
		}
		const userId = formData.get("branches_id");
		formData.delete("branches_id");
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
		await $.ajax(
			getAjaxConfig(`/admin/branch/${userId}`, {
				type: "PUT",
				data: JSON.stringify(formDataObject),
				contentType: "application/json",
			})
		);
		$("#staticBackdrop14").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("click", "#delete-confirm", async function (event) {
		const id = $(this).data("id");
		await $.ajax(
			getAjaxConfig(`/admin/branch/${id}`, {
				type: "DELETE",
			})
		);
		$("#staticBackdrop15").modal("toggle");
		dataTable.ajax.reload();
	});
});

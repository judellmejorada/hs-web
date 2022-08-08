var excludeField = {
	edit: ["dentists_image"],
};

var setValues = (userDetails, prefix) => {
	Object.keys(userDetails).forEach((key) => {
		if (!(excludeField[key] && excludeField.includes(key))) {
			if (key == "dentists_description") {
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
	const dataTable = $("#dentist-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/admin/dentist/retrieved-featured-dentist", {
				type: "GET",
			}),
			columns: [
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<img src="${baseUrlDentistPic}/${data.dentists_image}" alt="table-user" class="me-2 rounded-circle"><a href="javascript:void(0);" class="text-body fw-semibold">${data.dentists_fname} </a>`;
					},
					className: "table-user",
				},
				{
					// birth day not available
					data: "dentists_mname",
					// render: function (data, type, row, meta) {
					// 	return "N/A";
					// },
				},
				{
					data: "dentists_lname",
				},
				{
					data: "dentists_specialty",
				},
				{
					data: "dentists_description",
					render: function (data, type, row, meta) {
						return `<span class="text-break">${
							data.substring(0, 50) + "..."
						}</span>`;
					},
				},
				{
					data: "dentists_status",
					render: function (data, type, row, meta) {
						console.log(data);
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
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop9" onclick='setValues(${JSON.stringify(
								data
							)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop10" onclick='setValues(${JSON.stringify(
								data
							)}, "edit")'> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop11" onclick='onDelete("${data.dentists_id}")'> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);

	$(document).on("submit", "#add-dentist-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		formData.append("dentists_description", quill.getText());
		try {
			const { message } = await $.ajax(
				getAjaxConfig("/admin/dentist/add-featured-dentist", {
					type: "POST",
					data: formData,
					contentType: false,
					processData: false,
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}
		$("#staticBackdrop8").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});

	$(document).on("submit", "#edit-dentist-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		if (quillModify.getLength() > 0) {
			formData.append("dentists_description", quillModify.getText());
		}
		const userId = formData.get("dentists_id");
		formData.delete("dentists_id");
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
				getAjaxConfig(`/admin/dentist/${userId}`, {
					type: "PUT",
					data: formData,
					contentType: false,
					processData: false,
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
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
				getAjaxConfig(`/admin/dentist/${id}`, {
					type: "DELETE",
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop11").modal("toggle");
		dataTable.ajax.reload();
	});
});

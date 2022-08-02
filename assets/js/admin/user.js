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
					data: null,
					render: function (data, type, row, meta) {
						return "N/A";
					},
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
		})
	);

	$(document).on("submit", "#add-user-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		await $.ajax(
			getAjaxConfig("/admin/user/add-users", {
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
		await $.ajax(
			getAjaxConfig(`/admin/user/${userId}`, {
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
			getAjaxConfig(`/admin/user/${id}`, {
				type: "DELETE",
			})
		);
		$("#staticBackdrop3").modal("toggle");
		dataTable.ajax.reload();
	});
});

$(document).ready(function(){"use strict";$("#products-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"},info:"Showing users _START_ to _END_ of _TOTAL_",lengthMenu:'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> users'},pageLength:10,columns:[{orderable:!1,render:function(e,l,a,o){return"display"===l&&(e='<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>'),e},checkboxes:{selectRow:!0,selectAllRender:'<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>'}},{orderable:!0},{orderable:!0},{orderable:!0},{orderable:!0},{orderable:!0},{orderable:!0},{orderable:!1}],select:{style:"multi"},order:[[5,"asc"]],drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded"),$("#products-datatable_length label").addClass("form-label")}})});
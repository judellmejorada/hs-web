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
						return `<span class="badge badge-danger-lighten">${data}</span>`;
					},
				},
				{
					orderable: !1,
					data: null,
					render: function () {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);
});

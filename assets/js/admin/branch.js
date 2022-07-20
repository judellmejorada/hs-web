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
});

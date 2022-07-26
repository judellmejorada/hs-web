$(function () {
	const dataTable = $("#appointment-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/patient/appointment", {
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

	$(document).on("submit", "#add-appointment-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		await $.ajax(
			getAjaxConfig("/patient/appointment", {
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

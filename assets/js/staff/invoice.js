$(function () {
	const dataTable = $("#invoice-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/staff/invoice", {
				type: "GET",
			}),
			columns: [
				{
					data: "invoices_number",
				},
				{
					data: "invoices_issued_to",
				},
				{
					data: "invoices_description",
				},
				{
					data: "invoices_discount",
				},
				{
					data: "grand_total",
				},
				{
					data: "invoices_status",
					render: function (data, type, row, meta) {
						return `<span class="badge badge-success-lighten">${data}</span>`;
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

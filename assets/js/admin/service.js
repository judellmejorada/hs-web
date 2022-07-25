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
					// birth day not available
					data: "services_description",
					render: function (data, type, row, meta) {
						return `<span>${data.substring(0, 50) + "..."}</span>`;
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return "N/A";
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return "N/A";
					},
				},
				{
					data: "services_created_at",
				},
				{
					data: "services_status",
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
});

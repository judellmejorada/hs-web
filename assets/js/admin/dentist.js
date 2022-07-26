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
					data: "dentists_lname",
					// render: function (data, type, row, meta) {
					// 	return "N/A";
					// },
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
					data: "dentists_specialty",
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return "N/A";
					},
				},
				{
					data: "dentists_status",
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

	$(document).on("submit", "#add-dentist-form", async function (event) {
		event.preventDefault();
		let formData = new FormData(this);
		formData.append("dentists_description", quill.getText());
		await $.ajax(
			getAjaxConfig("/admin/dentist/add-featured-dentist", {
				type: "POST",
				data: formData,
				contentType: false,
				processData: false,
			})
		);
		$("#staticBackdrop8").modal("toggle");
		dataTable.ajax.reload();
		return false;
	});
});

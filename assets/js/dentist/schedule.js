$(function () {
	const dataTable = $("#schedule-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/dentist/schedule", {
				type: "GET",
			}),
			columns: [
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<img src="${baseURLUserProfile}/${data.created.users_profile_pic}" alt="table-user" class="me-2 rounded-circle"><span>${data.created.users_fname}${data.created.users_lname}</span>`;
					},
				},
				{
					// birth day not available
					data: null,
					render: function (data, type, row, meta) {
						return `<span>${data.created.users_birthdate}</span>`;
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<span>${data.created.users_gender}</span>`;
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<span>${data.created.users_phone_number}</span>`;
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						return `<span>${data.created.users_email}</span>`;
					},
				},
				{
					data: null,
					render: function (data, type, row, meta) {
						console.log(data.created.users_status);
						return data.created.users_status == "Active"
							? `<span class="badge badge-success-lighten">${data.created.users_status}</span>`
							: `<span class="badge badge-danger-lighten">${data.created.users_status}</span>`;
					},
				},
			],
		})
	);
});

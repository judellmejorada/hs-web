const baseURL = "https://happysmile-dcms.herokuapp.com/v1";
const baseURLUserProfile =
	"https://happysmile-dcms.herokuapp.com/users-profile-pic";

// type = error, warning, success, info
// title = string
// message = string

const notification = (type, title, message) => {
	return toastr[type](message, title);
};

const getLocalData = () => JSON.parse(localStorage.getItem("userData"));
const setLocalData = (userData) =>
	localStorage.setItem("userData", JSON.stringify(userData));
const getAjaxConfig = (path, config) => ({
	url: `${baseURL}${path}`,
	headers: {
		Authorization: `Bearer ${getLocalData().token}`,
	},
	...config,
});
const getDataTableConfig = ({ ajax, columns }) => ({
	ajax,
	columns: [
		{
			data: null,
			orderable: !1,
			render: function (e, l, a, o) {
				return (
					"display" === l &&
						(e =
							'<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>'),
					e
				);
			},
			checkboxes: {
				selectRow: !0,
				selectAllRender:
					'<div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div>',
			},
		},
		...columns,
	],
	select: { style: "multi" },
	order: [[5, "asc"]],
	drawCallback: function () {
		$(".dataTables_paginate > .pagination").addClass("pagination-rounded"),
			$("#products-datatable_length label").addClass("form-label");
	},
	language: {
		paginate: {
			previous: "<i class='mdi mdi-chevron-left'>",
			next: "<i class='mdi mdi-chevron-right'>",
		},
		info: "Showing services _START_ to _END_ of _TOTAL_",
		lengthMenu:
			'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> services',
	},
});

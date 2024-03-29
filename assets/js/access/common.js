const baseURL = "https://happysmile-dcms.herokuapp.com/v1";
const baseURLUserProfile =
	"https://happysmile-dcms.herokuapp.com/users-profile-pic";
const baseUrlServicePic = "https://happysmile-dcms.herokuapp.com/services";
const baseUrlDentistPic =
	"https://happysmile-dcms.herokuapp.com/featured_dentist";
const webURL = "https://happysmile-web.herokuapp.com/";

// type = error, warning, success, info
// title = string
// message = string

const notification = (type, title, message) => {
	return toastr[type](message, title);
};

var buttonCommon = {
	exportOptions: {
		format: {
			body: function (data, row, column, node) {
				// Strip $ from salary column to make it numeric
				return column === 5 ? data.replace(/[$,]/g, "") : data;
			},
		},
	},
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
	drawCallback: function () {
		$(".dataTables_paginate > .pagination").addClass("pagination-rounded"),
			$("#products-datatable_length label").addClass("form-label");
	},
	language: {
		paginate: {
			previous: "<i class='mdi mdi-chevron-left'>",
			next: "<i class='mdi mdi-chevron-right'>",
		},
		info: "Showing entries _START_ to _END_ of _TOTAL_",
		lengthMenu:
			'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> services',
	},
	dom: "Bfrtip",
	buttons: ["copy", "csv", "excel", "pdf", "print"],
	lengthMenu: [
		[10, 25, 50, -1],
		[10, 25, 50, "All"],
	],
});

const loadBranchDropdown = async () => {
	const dropdowns = $(".branch-dropdown");
	const { data } = await $.ajax(
		getAjaxConfig("/general/branches", {
			type: "GET",
		})
	);

	dropdowns.each(function () {
		$(this).html(
			[
				"<option></option>",
				...data.map(
					({ branches_id, branches_name }) =>
						`<option value="${branches_id}">${branches_name}</option>`
				),
			].join("")
		);
	});
};

function parseJwt(token) {
	var base64Url = token.split(".")[1];
	var base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
	var jsonPayload = decodeURIComponent(
		window
			.atob(base64)
			.split("")
			.map(function (c) {
				return "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2);
			})
			.join("")
	);

	return JSON.parse(jsonPayload);
}

var services = [];

const updateServicesArray = ({ id, key }, obj) => {
	services = services.map((elem) => {
		if (elem.id === id) {
			elem[key] = $(obj).val();
		}
		return elem;
	});

	const grandTotal = services
		.map((elem) => elem.inser_service_price)
		.reduce(
			(previousValue, currentValue) =>
				Number(previousValue) + Number(currentValue),
			0
		);

	const discount = $("#invoices_discount").val();

	$("#total_after_discount").val(grandTotal - discount);

	$("#grand_total").val(grandTotal);
};

$(function () {
	loadBranchDropdown();
	const dataTable = $("#invoice-datatable").DataTable(
		getDataTableConfig({
			ajax: getAjaxConfig("/admin/invoices/get-invoice", {
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
					render: function (data) {
						return `<span> ${data} &#37;</span>`;
					},
				},
				{
					data: "grand_total",
					render: function (data) {
						return `<span><b>&#x20B1;</b> ${data}</span>`;
					},
				},
				{
					data: "invoices_status",
					render: function (data, type, row, meta) {
						console.log(data);
						return data === "Paid"
							? `<span class="badge badge-success-lighten">${data}</span>`
							: `<span class="badge badge-danger-lighten">${data}</span>`;
					},
				},
				{
					orderable: !1,
					data: null,
					render: function () {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"onclick='setValues(${JSON.stringify(
								data
								)}, "view")'> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> <i class="mdi mdi-square-edit-outline"></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"> <i class="mdi mdi-delete"></i></a>`
						);
					},
				},
			],
		})
	);

	const serviceDataTable = $("#add-invoice-form").DataTable({
		data: services,
		searching: false,
		ordering: false,
		lengthChange: false,
		paging: false,
		info: false,
		columns: [
			{
				data: null,
				checkboxes: {
					selectRow: true,
					selectAll: false,
					selectCallback: function (nodes, selected) {
						const tr = $(nodes[0]).closest("tr");
						if (selected) {
							tr.addClass("selected");
						} else {
							tr.removeClass("selected");
						}
					},
				},
			},
			{
				data: null,
				render: function (data, type, row, meta) {
					const params = { id: data.id, key: "inser_service_name" };
					return `<input type="text" onchange='updateServicesArray(${JSON.stringify(
						params
					)}, this)' class="form-control" value="${
						data.inser_service_name
					}" autocomplete="off"/>`;
				},
			},
			{
				data: null,
				render: function (data, type, row, meta) {
					const params = { id: data.id, key: "inser_service_price" };
					return `<input type="number" onchange='updateServicesArray(${JSON.stringify(
						params
					)}, this)' class="form-control price" value="${
						data.inser_service_price
					}" autocomplete="off" />`;
				},
			},
		],
	});

	$(document).on("click", "#addRows", function () {
		services = services.concat({
			id: services.length + 1,
			inser_service_name: "",
			inser_service_price: "",
		});

		serviceDataTable.clear().draw();
		serviceDataTable.rows.add(services);
		serviceDataTable.columns.adjust().draw();
	});

	$(document).on("click", "#removeRows", function () {
		console.log(serviceDataTable.column().checkboxes.selected());
		const ids = serviceDataTable
			.rows(".selected")
			.data()
			.map((data) => data.id)
			.toArray();

		console.log(ids);

		services = services.filter((service) => !ids.includes(service.id));
		serviceDataTable.clear().draw();
		serviceDataTable.rows.add(services);
		serviceDataTable.columns.adjust().draw();
	});

	$(document).on("change", "#invoices_discount", function () {
		const grandTotal = services
			.map((elem) => elem.inser_service_price)
			.reduce(
				(previousValue, currentValue) =>
					Number(previousValue) + Number(currentValue),
				0
			);
		$("#total_after_discount").val(grandTotal - Number($(this).val()));
		$("#grand_total").val(grandTotal);
	});

	$(document).on("click", "#add-invoice-button", async function () {
		const reqBody = {
			invoices_branches: $("#add-branch-dropdown").val(),
			invoices_issued_to: $("#invoices_issued_to").val(),
			invoices_description: $("#appointments_comment").val(),
			invoices_services: services.map(({ id, ...obj }) => obj),
			total_after_discount: Number($("#grand_total").val()),
			invoices_discount: Number($("#invoices_discount").val()),
			grand_total: Number($("#total_after_discount").val()),
			invoices_status: "Paid",
		};
		try {
			const { message } = await $.ajax(
				getAjaxConfig("/admin/invoices/add-invoice", {
					type: "POST",
					data: reqBody,
				})
			);
			notification("success", "Sucess", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		dataTable.ajax.reload();
		$("#staticBackdrop19").modal("toggle");
	});
});

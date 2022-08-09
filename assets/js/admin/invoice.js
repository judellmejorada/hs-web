var services = [];
var editServices = [];

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

	$("#total_after_discount").val(grandTotal - Number(discount));

	$("#grand_total").val(grandTotal);
};

const updateServicesArrayForEdit = ({ id, key }, obj) => {
	editServices = editServices.map((elem) => {
		if (elem.id === id) {
			elem[key] = $(obj).val();
		}
		return elem;
	});

	const grandTotal = editServices
		.map((elem) => elem.inser_service_price)
		.reduce(
			(previousValue, currentValue) =>
				Number(previousValue) + Number(currentValue),
			0
		);

	const discount = $("#edit-discount").val();

	$("#edit-grand-total").val(grandTotal - Number(discount));

	$("#edit-subtotal").val(grandTotal);
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
					render: function (data) {
						return (
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> <i class="mdi mdi-account-outline" ></i></a>` +
							`<a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop18" onclick='populateEditForm(${JSON.stringify(
								data
							)})'> <i class="mdi mdi-square-edit-outline"></i></a>` +
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

	const editServiceDataTable = $("#edit-invoice-form").DataTable({
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
					return `<input type="text" onchange='updateServicesArrayForEdit(${JSON.stringify(
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
					return `<input type="number" onchange='updateServicesArrayForEdit(${JSON.stringify(
						params
					)}, this)' class="form-control price" value="${
						data.inser_service_price
					}" autocomplete="off" />`;
				},
			},
		],
	});

	window.populateEditForm = (data) => {
		$("#edit-appointments_comment").val(data.invoices_description);
		$("#edit-branch-dropdown").val(data.invoices_branches);
		$("#edit-issued-to").val(data.invoices_issued_to);
		$("#edit-grand-total").val(data.total_after_discount);
		$("#edit-discount").val(data.invoices_discount);
		$("#edit-subtotal").val(data.grand_total);
		$("#edit-invoice-id").val(data.id);
		editServiceDataTable.clear().draw();
		editServices = data.dump_invoice;
		editServiceDataTable.rows.add(editServices);
		editServiceDataTable.columns.adjust().draw();
	};

	$(document).on("click", "#edit-addRows", function () {
		editServices = editServices.concat({
			id: editServices.length + 1,
			inser_service_name: "",
			inser_service_price: "",
		});

		editServiceDataTable.clear().draw();
		editServiceDataTable.rows.add(editServices);
		editServiceDataTable.columns.adjust().draw();
	});

	$(document).on("click", "#edit-removeRows", function () {
		const ids = editServiceDataTable
			.rows(".selected")
			.data()
			.map((data) => data.id)
			.toArray();

		console.log(ids);

		editServices = editServices.filter((service) => !ids.includes(service.id));
		editServiceDataTable.clear().draw();
		editServiceDataTable.rows.add(editServices);
		editServiceDataTable.columns.adjust().draw();
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

	$(document).on("change", "#edit-discount", function () {
		const grandTotal = editServices
			.map((elem) => elem.inser_service_price)
			.reduce(
				(previousValue, currentValue) =>
					Number(previousValue) + Number(currentValue),
				0
			);
		$("#edit-grand-total").val(grandTotal - Number($(this).val()));
		$("#edit-subtotal").val(grandTotal);
	});

	$(document).on("click", "#add-invoice-button", async function () {
		const reqBody = {
			invoices_branches: $("#add-branch-dropdown").val(),
			invoices_issued_to: $("#invoices_issued_to").val(),
			invoices_description: $("#appointments_comment").val(),
			invoices_services: services.map(({ id, ...obj }) => obj),
			grand_total: Number($("#grand_total").val()),
			invoices_discount: Number($("#invoices_discount").val()),
			total_after_discount: Number($("#total_after_discount").val()),
			invoices_status: "Paid",
		};
		try {
			const { message } = await $.ajax(
				getAjaxConfig("/admin/invoices/add-invoice", {
					type: "POST",
					data: JSON.stringify(reqBody),
					contentType: "application/json",
				})
			);
			notification("success", "Success", message);
			dataTable.ajax.reload();
		} catch (error) {
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop16").modal("toggle");
		dataTable.ajax.reload();
	});

	$(document).on("click", "#edit-invoice-button", async function () {
		const reqBody = {
			invoices_branches: $("#edit-branch-dropdown").val(),
			invoices_issued_to: $("#edit-issued-to").val(),
			invoices_description: $("#edit-appointments_comment").val(),
			invoices_services: editServices.map((obj) => {
				if (!isNaN(obj.id)) {
					const { id, ...newObj } = obj;
					return newObj;
				}
				return obj;
			}),
			total_after_discount: Number($("#edit-grand-total").val()),
			invoices_discount: Number($("#edit-discount").val()),
			grand_total: Number($("#edit-subtotal").val()),
			invoices_status: "Paid",
		};
		try {
			const { message } = await $.ajax(
				getAjaxConfig(`/admin/invoices/${$("#edit-invoice-id").val()}`, {
					type: "PUT",
					data: JSON.stringify(reqBody),
					contentType: "application/json",
				})
			);
			notification("success", "Success", message);
			dataTable.ajax.reload();
		} catch (error) {
			console.log(error);
			const { responseJSON } = error;
			notification("error", "Oops! An error occurs", responseJSON.message);
		}

		$("#staticBackdrop18").modal("toggle");
		dataTable.ajax.reload();
	});
});

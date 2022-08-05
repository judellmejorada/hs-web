$(function () {
	const loadDentistDropdown = async () => {
		const dropdowns = $(".dentist-dropdown");
		const { data } = await $.ajax(
			getAjaxConfig("/general/dentist", {
				type: "GET",
			})
		);

		dropdowns.each(function () {
			$(this).html(
				data
					.map(
						({ user_id, user_fname, user_lname }) =>
							`<option value="${user_id}">Dr. ${user_fname} ${user_lname}</option>`
					)
					.join("")
			);
		});
	};

	const loadBranchDropdown = async () => {
		const dropdowns = $(".branch-dropdown");
		const { data } = await $.ajax(
			getAjaxConfig("/general/branches", {
				type: "GET",
			})
		);

		dropdowns.each(function () {
			$(this).html(
				data
					.map(
						({ branch_id, branch_name }) =>
							`<option value="${branch_id}">${branch_name}</option>`
					)
					.join("")
			);
		});
	};

	loadDentistDropdown();
	loadBranchDropdown();
});

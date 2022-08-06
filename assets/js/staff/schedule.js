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

	loadDentistDropdown();
	loadBranchDropdown();
});

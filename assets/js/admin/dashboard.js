$(function () {
	const loadDashboardData = async () => {
		const {
			users_count: { all, Admin, Staff, Dentist, Patient },
		} = await $.ajax(
			getAjaxConfig("/admin/user-counter", {
				type: "GET",
			})
		);
		$("#patient").text(Patient);
		$("#staff").text(Staff);
		$("#dentist").text(Dentist);
		$("#admin").text(Admin);
	};

	loadDashboardData();
});

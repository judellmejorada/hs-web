$(function () {
	//function that will be called once the file is loaded.
	// alert('Page is now loaded.');

	// $("#email").val(); // access value using id
	// $("input[name=email]").val(); // access value using name

	$("#form_id").on("submit", function (e) {
		//alert ("form is submitted");

		e.preventDefault(); // prevent page refresh

		if ($("#form_id").parsley().validate()) {
			//no validation error
			$.ajax({
				url: apiURL + "/login",
				type: "POST", // post, put, delete, get
				data: {
					users_email: $("#email").val(),
					users_password: $("#password").val(),
				},
				dataType: "json",
				success: function (data) {
					console.log("success");
					console.log(data);
					setLocalData(data);
					let session_data = "";

					session_data += "token=" + data.token;
					session_data += "&users_type=" + data.data.users_type;
					session_data += "&users_fname=" + data.data.users_fname;
					session_data += "&users_mname=" + data.data.users_mname;
					session_data += "&users_lname=" + data.data.users_lname;
					session_data += "&users_full_name=" + data.data.users_full_name;
					session_data += "&users_profile_pic=" + data.data.users_profile_pic;
					session_data += "&users_email=" + data.data.users_email;

					window.location.replace(baseURL + "./Access/oAuth?" + session_data);
				},
				error: function ({ responseJSON }) {
					console.log(responseJSON);
					notification("error","", responseJSON.message.join());
				},
			});
		}
	});
});

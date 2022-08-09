// $(function () {

// 	$("#contactUs").on("submit", function (e) {

//         e.preventDefault(); // prevent page refresh

//         Email.send({
//             Host : "smtp.gmail.com",
//             Username : "happysmile14324@gmail.com",
//             Password : "ylnegmwcptuizmrw",
//             To : 'happysmile14324@gmail.com',
//             From :  $("#fullname").val(),
//             Subject : $("#subject").val(),
//             Body : $("#comments").val(),

//         }).then(
//           toastr.success('Please check your email')
//         );
//     });
// });

$(function () {


	$("#contactUs").on("submit", function (e) {
		e.preventDefault(); // prevent page refresh

		if ($("#contactUs").parsley().validate()) {

			$.ajax({
				url: baseURL + "/home/send",
				type: "POST", // post, put, delete, get
				data: formData,
				contentType: "application/json",

        success: function () {
          window.location.replace("https://happysmile-web.herokuapp.com");
          notification("success", "We have received your email", "Please wait for our respond");
      },
				error: function ({ responseJSON }) {
					console.log(responseJSON);
					notification("error", "Oops! An error occurs", responseJSON.message.join());
				},
			});
		}
	});
});

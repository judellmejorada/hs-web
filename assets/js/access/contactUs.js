$(function () {

	$("#contactUs").on("submit", function (e) {

        e.preventDefault(); // prevent page refresh

        Email.send({
            Host : "smtp.gmail.com",
            Username : "happysmile14324@gmail.com",
            Password : "ylnegmwcptuizmrw",
            To : 'happysmile14324@gmail.com',
            From :  $("#fullname").val(),
            Subject : $("#subject").val(),
            Body : $("#comments").val(),

        }).then(
          toastr.success('Please check your email')
        );
    });
});
$(function () {
    
    //function that will be called once the file is loaded.
    // alert('Page is now loaded.');

   // $("#email").val(); // access value using id
   // $("input[name=email]").val(); // access value using name

   $("#form_id").on ("submit", function (e) {
    //alert ("form is submitted");    

        e.preventDefault(); // prevent page refresh

        if ($("#form_id").needs-validation().validate()) {
        //no validation error
        $.ajax({
            url : baseURL + "login",
            type: "POST", // post, put, delete, get
            data: {
                email : $('#users_email').val(),
                password: $('#users_password').val(),
            },
            dataType: "json",
            success: function (data) {
                console.log("success");
                console.log(data);
                localStorage.setItem('TOKEN', data.token);
            },
            error: function ({responseJSON}){
                console.log(responseJSON);
            },

            });
        }

   });

});
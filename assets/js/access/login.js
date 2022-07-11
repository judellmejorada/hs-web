$(function () {
    
    //function that will be called once the file is loaded.
    // alert('Page is now loaded.');

   // $("#email").val(); // access value using id
   // $("input[name=email]").val(); // access value using name

   $("#form_id").on ("submit", function (e) {
    //alert ("form is submitted");  

        e.preventDefault(); // prevent page refresh

        if ($("#form_id").parsley().validate()) {
        //no validation error
        $.ajax({
            url : baseURL + "login",
            type: "POST", // post, put, delete, get
            data: {
                users_email : $('#email').val(),
                users_password: $('#password').val(),
            },
            dataType: "json",
            success: function (data) {
                console.log("success");
                console.log(data);
                localStorage.setItem('TOKEN', data.token);

                let session_data = "";

                session_data += 'token' + data.token;
                session_data += 'users_type' + data.data.users_type;
                session_data += 'users_full_name' + data.data.users_full_name;
                session_data += 'users_profile_pic' + data.data.users_profile_pic;
                session_data += 'users_email' + data.data.users_email;

                window.location.replace("./Access/oAuth?" + session_data);
            },
            error: function ({ responseJSON }){
                console.log(responseJSON);
            },

            });
        }

   });

});
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
            url : baseURL + "register",
            type: "POST", // post, put, delete, get
            data: {
                users_fname : $('#fname').val(),
                users_mname: $('#mname').val(),
                users_lname: $('#lname').val(),
                users_birthdate: $('#birthdate').val(),
                users_phone : $('#phone').val(),
                users_civil_status: $('#civil_status').val(),
                users_gender : $('#gender').val(),
                users_profile_pic: $('#profile_pic').val(),
                users_email: $('#email').val(),
                users_password: $('#password').val(),
            },
            dataType: "json",
            success: function (data) {
                console.log("success");
                console.log(data);
                localStorage.setItem('TOKEN', data.token);

                let session_data = "";

                session_data += "token=" + data.token;
                session_data += "&users_id=" + data.data.users_id;
                session_data += "&users_fname=" + data.data.users_fname;
                session_data += "&users_mname=" + data.data.users_mname;
                session_data += "&users_lname=" + data.data.users_lname;
                session_data += "&users_birthdate=" + data.data.users_birthdate;
                session_data += "&users_phone=" + data.data.users_phone;
                session_data += "&users_civil_status=" + data.data.users_civil_status;
                session_data += "&users_gender=" + data.data.users_gender;
                session_data += "&users_profile_pic=" + data.data.users_profile_pic;
                session_data += "&users_email=" + data.data.users_email;
                session_data += "&users_password=" + data.data.password;

                window.location.replace("./Access/oAuth?" + session_data);
            },
            error: function ({ responseJSON }){
                console.log(responseJSON);
            },

            });
        }

   });

});
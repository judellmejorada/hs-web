$(function () {

   $("#form_id").on ("submit", function (e) {

        e.preventDefault(); // prevent page refresh
        
        //no validation error
        $.ajax({
            url : baseURL + "/register",
            type: "POST", // post, put, delete, get
            data: {
                users_fname : form.get('fname'),
                users_mname: form.get('mname'),
                users_lname: form.get('lname'),
                users_bdate: form.get('birthdate'),
                users_phone : form.get('phone'),
                users_civil_status: form.get('civil_status'),
                users_gender : form.get('gender'),
                users_profile_pic: form.get('profile_pic'),
                users_email: form.get('email'),
                users_password: form.get('password'),
            },
            dataType: "json",
            success: (result) => {
                if(result) {
    
                    // Show Success Modal
                    $('#successRegisterModal').modal('show');
    
                } else {
                    console.log('No result was found');
                }
            },
            error: function ({ responseJSON }){
                console.log(responseJSON);
            },

            }).fail(() => console.error('There was an error while registering your account.'));
        

   });

});
function onSignIn(googleUser) {

    // Useful data for your client-side scripts: 
    var profile = googleUser.getBasicProfile();
    $("#users_name_google").text(profile.getUsers_name());
    $("#users_email").text(profile.getUsers_email());
    $("#users_profile_pic").attr('src', getUsers_profile_picUrl());

    // The ID token you need to pass to your backend:
    var token = googleUser.getAuthResponse().token;
    console.log("TOKEN" + data.token);

  }

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut()
    .then(function (){
      window.location.replace("/home");
      toastr.success('You have been signed out successfully.');
  });

}
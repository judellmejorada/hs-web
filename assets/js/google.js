function onSignIn(googleUser) {

    // Useful data for your client-side scripts: 
    var profile = googleUser.getBasicProfile();
    $("#users_fname").text(profile.getUsers_fname());
    $("#users_email").text(profile.getUsers_email());
    $("#users_profile_pic").attr('src', getUsers_profile_picUrl());

    // The ID token you need to pass to your backend:
    var token = googleUser.getAuthResponse().token;
    console.log("TOKEN" + data.token);

    window.location.replace("https://www.w3schools.com/");

  }

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function (){
    alert("You have been signed out successfully.");
  });

}
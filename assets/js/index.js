function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#users_fname").text(profile.getUsers_fname());
    $("#users_email").text(profile.getUsers_email());
    $("#users_profile_pic").attr('src', getUsers_profile_picUrl());

  }

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function(){
    alert("You have been signed out successfully");
    $(".g-signin2").css('display', 'block');
    $(".data").css('display', 'none');

  });

}
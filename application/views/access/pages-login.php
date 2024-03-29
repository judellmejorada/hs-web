<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Log In | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HappySmile-DCMS" name="GROUP 4" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">
        
        <!-- App css -->
        <link href="<?php echo base_url('assets')?>/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets')?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?php echo base_url('assets')?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

        <!-- Parsley & Toastr css -->
        <link href="<?php echo base_url('assets')?>/css/parsley.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets')?>/css/toastr.css" rel="stylesheet" type="text/css"/>

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="landing">
                                    <span><img src="<?php echo base_url('assets')?>/images/logos/logo.png" alt="" height="60"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                </div>

                                <form action="#" class="needs-validation" id="form_id" novalidate="">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                                        <div class="invalid-feedback" data-parsley-required= "true" data-parsley-type = "email">
                                        </div>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <a href="recover" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required="" placeholder="Enter your password">
                                        <!-- <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div> -->
                                        
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" name="checkbox-signin" checked >
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>
                                     <!-- social-->
                                    <div class="text-center mt-4">
                                        <p class="text-muted font-16">or</p>
                                        <ul class="social-list list-inline mt-3">

                                            <li class="list-inline-item">
                                            <div id="g_id_onload" data-client_id="921736142923-g9ireci46aghfl88mc6moqkmr6ufmkfp.apps.googleusercontent.com" data-callback="onSignIn">
                                            </div>
                                                <div class="g_id_signin" data-type="standard"></div>
                                            </li>

                                        <p class="text-muted font-12" text-align:left;>By signing up, you agree to the Terms of Service and Privacy Policy, including Cookie Use.</p>
                                            
                                        </ul>
                                    </div>

                                            <div class="mb-3 mb-0 text-center">
                                                <button class="btn btn-primary" type="submit" id="submit" name="submit"> Log In </button>
                                            </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="register" class="text-muted ms-1"><b>Sign Up</b></a></p>
                            </div>
                            <div class="col-12 text-center">
                                <p class="text-muted">Just visiting? <a href="landing" class="text-muted ms-1"><b>Return to Home</b></a></p>
                            </div>
                             <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <p> Copyright &copy; 2022-<script>document.write(new Date().getFullYear())
                </script> HappySmile.com
            </p>
        </footer>

        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- custom .js -->
         <script src="<?php echo base_url('assets')?>/js/access/common.js"></script>
         <script src="<?php echo base_url('assets')?>/js/access/login.js"></script>
        
        <!-- google library, js and cdn jquery -->
        <script src="https://accounts.google.com/gsi/client" async defer></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
         
        <!-- parsley -->
        <script src="<?php echo base_url('assets')?>/js/parsley.js"></script>

        <!-- toaster js -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        <script src="<?php echo base_url('assets')?>/js/toastr.js"></script>
        <script>
            function onSignIn({ credential }) {
                const { given_name, family_name, email, sub } = parseJwt(credential);
			
                $.ajax({
                    url: baseURL + "/login",
                    type: "POST",
                    data: {
                        users_email: email,
                        users_google_id: sub
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

                        window.location.replace("/Access/oAuth?" + session_data);
                    },
                    error: function ({ responseJSON: { error } }) {
                        if(error) {
                            window.location.replace(`/register?users_email=${email}&users_fname=${given_name}&users_lname=${family_name}&users_google_id=${sub}`);
                        }
                    },
                });
        }
        </script>
       
        
    </body>
</html>

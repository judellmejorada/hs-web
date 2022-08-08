<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Register | HappySmile </title>
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

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div id= "register" class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.php">
                                    <span><img src="<?php echo base_url('assets')?>/images/logos/logo.png" alt="" height="60"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>  
                                
                                <?php if (ISSET($_SESSION['success']));?>
                                <div class ="badge badge-success-lighten"> <?php echo $_SESSION ['success'];?></div>
                                <?php echo validation_errors('<div class="badge badge-danger-lighten">', '</div>');?>
                                <form action="" method="POST" class="needs-validation" id="form_register" novalidate="" enctype="multipart/form-data">
                                    <input type="hidden" name="users_google_id" value="<?=$_GET["users_google_id"]?>">
                                    <div class="mb-3">
                                        <label for="users_fname" class="form-label">First Name</label>
                                        <input class="form-control" type="text" id="users_fname" name="users_fname" placeholder="Enter your First name" required="" value="<?=$_GET["users_fname"]?>">
                                        <div class="invalid-feedback">
                                            Please provide a First Name.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="users_mname" class="form-label">Middle Name</label>
                                        <input class="form-control" type="text" id="users_mname" name="users_mname" placeholder="Enter your Middle name">
                                        <div class="invalid-feedback">
                                            Please provide a Middle Name.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="users_lname" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" id="users_lname" name="users_lname" placeholder="Enter your Last name" required="" value="<?=$_GET["users_lname"]?>">
                                        <div class="invalid-feedback">  
                                            Please provide a Last Name.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="users_birthdate" class="form-label">Birth Date</label>
                                        <input class="form-control" type="date" id="users_birthdate" name="users_birthdate" required="">
                                            <div class="invalid-feedback">
                                                Please provide a Birth Date.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="users_phone_number">Phone Number</label>
                                            <input type="text" class="form-control" id="users_phone_number" name="users_phone_number" placeholder="Enter your Phone Number" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a Phone Number. 
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label" for="users_civil_status">Civil Status</label>
                                                <select class="form-control select2" data-toggle="select2" id="users_civil_status" name="users_civil_status" required="">
                                                    <option value=""></option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option> 
                                                    <option value="Widowed">Widowed</option>
                                                    <option value="Divorced">Divorced</option> 
                                                </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a Civil Status.  
                                                    </div>
                                            </div>
                                            </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label" for="users_gender" >Gender</label>
                                        <br>
                                    <div class="mb-3">
                                                <select class="form-control select2" data-toggle="select2" id="users_gender" name="users_gender" required="">
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option> 
                                                    <option value="Other">Other</option>
                                                    <option value="Prefer not to say">Prefer not to say</option> 
                                                </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a Gender.  
                                                    </div>
                                   
                                    </div>
                                    </div>  
                                    <div class="mb-3">
                                        <label class="form-label">Profile Image</label>
                                        <input class="form-control" type="file" name="users_profile_pic" id="users_profile_pic" required="">
                                    </div> 
                                    <div class="invalid-feedback">
                                                Please provide an Image.
                                        </div>     
                                    <div class="mb-3">
                                        <label for="users_email" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="users_email" name="users_email" placeholder="Enter your email" required="" value="<?=$_GET["users_email"]?>">
                                        <div class="invalid-feedback">
                                                Please provide an Email Address.
                                        </div>
                                    </div>
                                  

                                    <div class="mb-3">
                                        <label for="users_password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="users_password" name="users_password" class="form-control" placeholder="Enter your password" required="">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a Password.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="users_password1" class="form-label">Re-type Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="users_password1" name="users_password1" class="form-control" placeholder="Enter your password" required="">
                                            <!--<div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div> -->
                                            <div class="invalid-feedback">
                                                Please Re-type your Password.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" required="" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup" > <a href="#" class="text-muted">I accept Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit" id="submit" name="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="login" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
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
         <script src="<?php echo base_url('assets')?>/js/access/register.js"></script>

        <!-- parsley -->
        <script src="<?php echo base_url('assets')?>/js/parsley.js"></script>

        <!-- toaster js -->
        <script src="<?php echo base_url('assets')?>/js/toastr.js"></script>
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        
    </body>
</html>

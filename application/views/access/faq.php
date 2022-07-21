<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>FAQ | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HappySmile-DCMS" name="GROUP 4" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">

        <!-- App css -->
        <link href="<?php echo base_url('assets')?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets')?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?php echo base_url('assets')?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">        

    </head>

    <body class="loading" data-layout-config='{"darkMode":false}'>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="landing" class="navbar-brand me-lg-5">
                    <img src="<?php echo base_url('assets')?>/images/logos/logo-dark.png" alt="" class="logo-dark" height="50">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav me-auto align-items-center">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link " href="landing">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link " href="service">Service</a>
                        </li>
                        <li class="nav-item mx-lg-1">

                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="faq">FAQ</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    </ul>

                  <!-- right menu -->
                  <ul class="navbar-nav ms-auto align-items-center">
                      <li class="nav-item me-0">
                          <a href="login" target="" class="nav-link d-lg-none">Log in</a>
                          <a href="login" target="" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                              <i class="mdi mdi-account-edit me-2"></i>Log in
                          </a>
                      </li>
                  </ul>

                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->
 <!-- START HERO -->
 <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="mt-md-4">
                            <h7 class="text-white fw-bold mb-4 mt-3 hero-title">
                                FAQ
                            </h7>
                            <p></p>
                            
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-end mt-3 mt-md-0">
                            <img src="<?php echo base_url('assets')?>/images/logos/tooth.png" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO --> 
 <!-- START FAQ -->
 <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                            <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                            <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more 
                                <br>information please contact us.</p>

                            <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline me-1"></i> Email us your question</button>
                            <button type="button" class="btn btn-info btn-sm mt-2 ms-1"><i class="mdi mdi-twitter me-1"></i> Send us a tweet</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-5 offset-lg-1">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">How do I know when it's time to come in for a checkup?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">An average, healthy adult person typically benefits from a professional cleaning and checkup every six months. While twice daily brushing and daily flossing go a long way towards maintaining a healthy mouth, it is wise to check for plaque that has hardened into tartar, requiring professional cleaning to avoid gingivitis. <a href="../../licenses/index.htm" target="_blank">here</a>.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Do you accept insurance plan?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Yes,Our office accepts nearly all of the major insurance plans.</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">How do I schedule my next checkup ?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Simply call our office.Our front desk will be happy to help schedule your next appointment.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">What do I do if I feel dizzy after dental treatment?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Let the staff know you're feeling unsteady.Let them help you and recognise that it is temporary and you’ll recover soon.</p>
                        </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-->
        </section>
        <!-- END FAQ -->
         <!-- START FOOTER -->
         <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <img src="<?php echo base_url('assets')?>/images/logos/logo-dark.png" alt="" class="logo-dark" height="50">
                        <p class="text-muted mt-4">HappySmile brings you the best service and will give you satisfactory for your teeth.<br> Because your Smile is our Passion</p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Company</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="aboutus" class="text-muted">About Us</a></li>
                            <li class="mt-2"><a href="faq" class="text-muted">FAQ</a></li>
                            <li class="mt-2"><a href="aboutus" class="text-muted">Our Team</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Discover</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            
                            <li class="mt-2"><a href="service" class="text-muted">Our Services</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <p class="text-muted mt-4 text-center mb-0">
                              Copyright &copy; 2022-<script>document.write(new Date().getFullYear())
                            </script> HappySmile.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

    </body>

</html>
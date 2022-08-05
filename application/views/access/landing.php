﻿<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Home | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HappySmile-DCMS" name="description">
        <meta content="Coderthemes" name="author">
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
                            <a class="nav-link active" href="landing">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="service">Service</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="faq">FAQ</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    </ul>

                    <!-- right menu -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-0">
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
                            
                            <P class="mb-4 font-22 text-white">
                                WELCOME TO
                            </P>
                            <h8 class="text-white fw-bold mb-4 mt-3 hero-title">
                                HAPPY SMILE <br><br>CLINIC
                            </h8>

                            <p></p>
                            <p class="mb-4 font-16 text-white">HappySmile Dental Clinic was established in 2022.We are one of the most established 
                                and respected brands of dental care in the country. We operate a chain of modern and state-of-the art dental clinics 
                                that provide multi-specialty services to patients. Please feel free to go through our site to know more about us, 
                                our dentists, our clinics and the services we provide. Enjoy!</p>
                                <div>
                                    <span class="badge bg-danger rounded-pill">New</span>
                                    <span class="text-white-50 ms-1">New Discounts this month! Get your Appointment Today!</span>
                                </div>
                                <br>

                            <a href="login" target="" class="btn btn-success">Get Appointment <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-end mt-3 mt-md-0">
                            <img src="<?php echo base_url('assets')?>/images/logos/teeth1.png" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

        <!-- START SERVICES -->
        <section class="py-5">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-tooth"></i></h1>
                            <h2> <span class="text-primary">Service Offered</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-tablets text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">General Dentistry</h4>
                            <p class="text-muted mt-2 mb-0">General dentistry is the foundation of every dental practice.
                                It primarily involves simple and inexpensive dental procedures that promote and maintain your oral hygiene and health.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-capsule text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Cosmetic Dentistry</h4>
                            <p class="text-muted mt-2 mb-0">Cosmetic dentistry is an interdisciplinary approach in dental care that focuses on improving
                                 the appearance of your teeth and your smile by lightening, reshaping, repairing or replacing teeth.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-medkit text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Pediatric Dentistry</h4>
                            <p class="text-muted mt-2 mb-0">We treat kids too! We provide primary and 
                                comprehensive dental care for children and adolescents. We consider all patients below 18 years old as pediatric patients.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-syringe text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Orthodontics</h4>
                            <p class="text-muted mt-2 mb-0">By definition, orthodontics is the branch of dentistry that treats and corrects malocclusion or a bad bite. 
                                A malocclusion is the misalignment or incorrect relationship of the jaws and teeth.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-thermometer text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Periodontics</h4>
                            <p class="text-muted mt-2 mb-0">Periodontics is involved in the prevention, diagnosis, 
                                and treatment of periodontal diseases that affect the gums and supporting structures of the teeth (the gums, cementum, periodontal ligament and the alveolar bone).
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-prescription-bottle text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Oral Surgery</h4>
                            <p class="text-muted mt-2 mb-0">Oral Surgery focuses on the diagnosis and surgical treatment of diseases, injuries and defects of both the hard and soft tissues of the mouth and teeth.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SERVICES -->


        <!-- START DENTIST -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                <h1 class="text-primary">Trusted Dentist</h1>
                                 </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="with-indicators-preview">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="rounded mx-auto d-block img-fluid" src="<?php echo base_url('assets')?>/images/small/dentist3.jpg"  alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                    <a href="#primary-header-modal"  data-bs-toggle="modal" data-bs-target="#primary-header-modal"><h2 class="text-white" >Jurgen Spangl</h2></a>
                                                    <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-primary">
                                                                <h2 class="modal-title text-dark" id="primary-header-modalLabel">Jurgen Spangl</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4 class="mt-0">EDUCATION</h4>
                                                                <p>Texas A&M University - Central Texas</p>
                                                                <p>Master of Arts: DEntistry - Killeen, TX <br>Pre-Dentistry</p>
                                                            <hr>
                                                                <h4 class="mt-0">SKILLS</h4>
                                                                <div style="float:left;width: 50%;">
                                                                <ul>
                                                                    <li>Patient engagement</li>
                                                                    <li>Preventive Care</li>
                                                                    <li>Orthodontics understanding</li>
                                                                </ul>
                                                                </div>
                                                                <div style="float:right;width: 50%;">
                                                                <ul>
                                                                    <li>Extracting Teeth</li>
                                                                    <li>Dental Surgeries</li>
                                                                    <li>Endodontics</li>
                                                                </ul>
                                                                </div>
                                                                <hr>
                                                                <h4 class="mt-0">Work History</h4>
                                                                <p>General Dentist | Happy Smile - Manila, PH      2019-current</p>
                                                                <p>General Dentist | Dentist For You - San Francisco, TX      2015-2018</p>
                                                                <p>General Dentist | Dentek Dental - San Francisco, TX      2012-2015</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                    
                                                        <h3> CHIEF GENERAL DENTISTRY</h3>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="rounded mx-auto d-block img-fluid" src="<?php echo base_url('assets')?>/images/small/dentist2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                    <a href="#success-header-modal"  data-bs-toggle="modal" data-bs-target="#success-header-modal"><h2 class="text-white" >James Beer</h2></a>
                                                    <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-primary">
                                                                <h2 class="modal-title text-dark" id="success-header-modalLabel">James Beer</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4 class="mt-0">EDUCATION</h4>
                                                                <p>Tufts University -Medford, MA <br>Orthodontics Residency.</p>
                                                                <p>Johns Hopkins University - Baltimore, MD <br>Doctor of Dental Surgery</p>
                                                            <hr>
                                                                <h4 class="mt-0">SKILLS</h4>
                                                                <div style="float:left;width: 50%;">
                                                                <ul>
                                                                    <li>Oral Cavity Anomalies</li>
                                                                    <li>Realigning Teeth</li>
                                                                    <li>Client Rapport</li>
                                                                </ul>
                                                                </div>
                                                                <div style="float:right;width: 50%;">
                                                                <ul>
                                                                    <li>Oral Cavity Anomalies</li>
                                                                    <li>Realigning Teeth</li>
                                                                    <li>Client Rapport</li>
                                                                </ul>
                                                                </div>
                                                                <hr>
                                                                <h4 class="mt-0">Work History</h4>
                                                                <p>Orthodontist | Happy Smile - Manila, PH      2017-current</p>
                                                                <p>Orthodontist | Affinity Dental - Bangor, ME      2014-2017</p>
                                                                <p>Orthodontist | Perfect Smile - Augusta, ME      2010-2014</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                        <h3> CHIEF ORTHODONTICS DENTISTRY</h3>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="rounded mx-auto d-block img-fluid" src="<?php echo base_url('assets')?>/images/small/dentist1.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                    <a href="#info-header-modal"  data-bs-toggle="modal" data-bs-target="#info-header-modal"><h2 class="text-white" >Erika Fisher</h2></a>
                                                    <div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-primary">
                                                                <h2 class="modal-title text-dark" id="info-header-modalLabel">Erika Fisher</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4 class="mt-0">EDUCATION</h4>
                                                                <p>Doctorial Degree Advance Dentsitry -LA, CA <br>University of Southern California</p>
                                                                <p>Master's Degree Biology - Santa Barbara, CA <br>University of California Santa Barbara</p>
                                                            <hr>
                                                                <h4 class="mt-0">SKILLS</h4>
                                                                <div style="float:left;width: 50%;">
                                                                <ul>
                                                                    <li>Dentistry</li>
                                                                    <li>DDS</li>
                                                                    <li>Invisalign</li>
                                                                </ul>
                                                                </div>
                                                                <div style="float:right;width: 50%;">
                                                                <ul>
                                                                    <li>Full Range</li>
                                                                    <li>Infection Control</li>
                                                                    <li>Diagnosis</li>
                                                                </ul>
                                                                </div>
                                                                <hr>
                                                                <h4 class="mt-0">Work History</h4>
                                                                <p>Cosmetic Dentist | Happy Smile - Manila, PH      2020-current</p>
                                                                <p>Cosmetic Dentist | American Dental Group - Douglasville, GA      2016-2019</p>
                                                                <p>Cosmetic Dentist | Bright Now Dental - Invine, CA      2010-2016</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                 </div><!-- /.modal -->
                                                        <h3> CHIEF COSMETIC DENTISTRY</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                    </div> <!-- end preview-->
                                
                                    <div class="tab-pane" id="with-indicators-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
                                                    &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                        &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                    &lt;/ol&gt;
                                                    &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                        &lt;div class=&quot;carousel-item active&quot;&gt;
                                                            &lt;img class=&quot;d-block img-fluid&quot; src=&quot;<?php echo base_url('assets')?>/images/small/small-3.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;d-block img-fluid&quot; src=&quot;<?php echo base_url('assets')?>/images/small/small-2.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;d-block img-fluid&quot; src=&quot;<?php echo base_url('assets')?>/images/small/small-1.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;prev&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-bs-slide=&quot;next&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->

                            </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-->
        </section>
        <!-- END DENTIST -->

        
        <!-- START CONTACT -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Get In <span class="text-primary">Touch</span></h3>
                            <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more 
                                <br>information please contact us.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-md-4">
                    <p class="text-muted"><span class="fw-bold">Customer Support:</span><br> <span class="d-block mt-1">+63241055254</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Email Address:</span><br> <span class="d-block mt-1">happysmile@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Address:</span><br> <span class="d-block mt-1">Don Fabian St., Commonwealth,QC<br>Manila, Philippines</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 5:00PM</span></p>
                    </div>

                    <div class="col-md-8">
                        <form class="needs-validation" novalidate="" id="contactUs" name="contactUs">
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="fullname" class="form-label">Your Name</label>
                                        <input class="form-control form-control-light" type="text" required="" id="fullname" placeholder="Name">
                                        <div class="invalid-feedback">
                                            Please Enter your Name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email">
                                        <div class="invalid-feedback">
                                            Please Enter valid Email
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">Your Subject</label>
                                        <input class="form-control form-control-light" type="text" required="" id="subject" placeholder="Enter subject">
                                        <div class="invalid-feedback">
                                            Please Enter your Subject
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" required="" placeholder="Type your message here"></textarea>
                                        <div class="invalid-feedback">
                                            Please Enter your Message
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary">Send a Message <i class="mdi mdi-telegram ms-1"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('assets')?>/images/logos/logo-dark.png" alt="" class="logo-dark" height="60">
                        <p class="text-muted mt-4">HappySmile brings you the best service and satisfactory for your teeth.<br> Your Smile is our Passion</p>

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
                            <li class="mt-2"><a href="about" class="text-muted">About Us</a></li>
                            <li class="mt-2"><a href="faq" class="text-muted">FAQ</a></li>
                            <li class="mt-2"><a href="about" class="text-muted">Our Team</a></li>
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

        <!-- For email sending -->
        <script src="<?php echo base_url('assets')?>/js/vendor/smtp.js"></script>
        <script src="<?php echo base_url('assets')?>/js/access/contactUs.js"></script>

        <!-- toaster js -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        <script src="<?php echo base_url('assets')?>/js/toastr.js"></script>

    </body>

</html>
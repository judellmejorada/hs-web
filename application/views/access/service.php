<!DOCTYPE html>
<html lang="en">

    <head>
      
        <meta charset="utf-8">
        <title>Services | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HappySmile-DCMS" name="GROUP 4" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">

        <!-- App css -->
        <link href="<?php echo base_url('assets')?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets')?>/css/app.min1.css" rel="stylesheet" type="text/css" id="light-style">
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
                            <a class="nav-link active" href="service">Service</a>
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
                            <h7 class="text-white fw-bold mb-4 mt-3 hero-title">
                                SERVICES <br><br>OFFERED
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

        <!-- START SERVICES -->
        
        <!-- END SERVICES -->
         <!-- Prices -->
        <section class="py-5">
            <div class="row ml-sm-5 mr-sm-5 mt-sm-5 mt-3 mb-3">
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Teeth Cleanings</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Teeth Cleanings.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p width="70%" style="text-align:justify" id="services_description" name="services_description">This is by far the most common reason people visit the dentist. Many dentists recommend a cleaning every six months, and some recommend once a year. 
                                  Either way, it’s a very important part of oral health. Your own toothbrush will never be as efficient as the tools a dentist uses to clean your teeth.
                                  An annual or semi-annual visit for a cleaning will keep your teeth healthy, shiny, and strong. Plus, a cleaning causes very little discomfort, so no need to fret!</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Teeth Whitening</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Teeth Whitening.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">Like cleaning, whitening is a relatively discomfort-less process. Some people are sensitive to the whitening agents used, but otherwise it’s an easy procedure 
                                  that most dental offices can do. At home teeth whitening kits involve a lot of extra time and effort. You need to buy kits and spend a lot of time. At a dentistry, bleaching is quicker and safer because it is performed by professionals. 
                                  Most often, dentists use a special hydrogen peroxide gel and a special light source to whiten faster. </p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->

                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Extractions</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Extractions.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="230">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">Extractions sound scary and painful. Admittedly, they are not the most pleasant of procedures. 
                                  However, your dentist will do everything in their power to help you feel comfortable. You may need an extraction for any number of reasons. When having a tooth pulled, 
                                  you’ll likely be either unconscious or thoroughly numbed. You won’t be able to feel a thing! You may be sore afterwards, but extractions are almost always to prevent further pain.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Veneers</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Veneers.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">If your teeth are crooked or discoloured, your dentist might recommend veneers. These are very popular solutions to common tooth problems. 
                                  It’s essentially a thin covering placed over the front section of a tooth or set of teeth. They’re mainly used for correctional purposes, but they can be used for whitening, too. 
                                  The process is simple and painless for most people, and it’s easy for dentists to perform.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Fillings</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Fillings.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">Cavities are all too common and all too easy to get. For most cavities, a filling is the recommended answer. 
                                  Acids in food and inside your body can easily break down tooth enamel if overexposed. Luckily, filling most cavities is a quick procedure. You’ll likely be numbed, 
                                  which can last for a few hours after the filling is over. It usually takes about an hour to finish up, and then it’s good as new! You might feel pressure while they’re working, 
                                  but it shouldn’t be painful.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Crowns</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Crowns.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">If your cavity is a little too big for a filling, or the top part of your tooth has decayed, a crown is the solution. 
                                  These are usually two-visit procedures, but like the filling, shouldn’t be overtly painful. Your dentist will take a molding of your tooth so that a lab can craft a properly fitted crown 
                                  to cover the decayed area. Some offices have “printers” in office. They use a special x-ray and computer combination to take photos and craft a crown right then and there! 
                                  The second visit will involve fitting and securing the crown, which is usually quite fast and painless.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Root Canal</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Root Canal.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">This is one that most people dread, and for fair reasons. Root canals are usually preceded by some pretty awful tooth pain. 
                                  A root canal means the tissue inside or under your tooth is infected and inflamed. To get rid of the pain, the dentist needs to deaden the nerve and remove the tissue. Sometimes you may need to take an antibiotic before the procedure.
                                  The good thing is that you’ll be numbed before it happens, so you won’t feel any pain, just pressure. Once the procedure is over – and it can take a few hours – you’ll be numb for a while, 
                                  but hopefully pain free since the infection will be gone.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Braces/Invisalign</p>
                            <img src="<?php echo base_url('assets')?>/images/services/BracesOrInvisalign.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">Most practices are moving away from traditional braces and towards Invisalign, but they both serve the same purpose. 
                                  The goal is to straighten and correct crooked teeth, as straighter teeth are often healthier and easier to take care of. Classic braces use metal and other materials to slowly tighten teeth back into place. 
                                  Invisalign is less visible and slower acting, but still a very effective method to achieve the same goal. The procedure to have them put on can leave a little ache, but nothing too extreme.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase" id="services_name" name="services_name">Bonding</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Bonding.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%"></td>
                                <p style="text-align:justify" id="services_description" name="services_description">This is another way to repair damaged or chipped teeth. It involves a resin – a sort of plastic – that your dentists tints 
                                  to match the natural shade of your teeth. It’s less invasive than some other methods, especially for smaller imperfections. Several layers are needed to really secure the resin, and a light is used to “dry” each layer. 
                                  The spot is then polished and cleaned so it fits naturally into the tooth. It’s an easy procedure, but can take a little while.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name fw-bold text-uppercase">Dentures</p>
                            <img src="<?php echo base_url('assets')?>/images/services/Dentures.jpg" alt="" id="services_image" name="services_image" class="logo-dark" height="250">
                            <ul class="card-pricing-features">
                               <tr>
                                <td width="70%" ></td>
                                <p style="text-align:justify" id="services_description" name="services_description">Dentures are usually associated with ageing, but a lot of people may need dentures. 
                                  They are meant to replace teeth in a natural way, and they’re typically removable. Fitting for dentures is very common, and it takes a while. In the end, 
                                  it’s worth it to have a full set of working teeth again.</p>
                              </tr>
                              <tr>
                                <td></td>
                                <p style="text-align:left" width="70%" id="services_status" name="services_status">Service Status:</p>
                              </tr>
                            </ul>
                            <a href="login"><button class="btn btn-primary mt-4 mb-2 btn-rounded">Make Appointment</button></a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->

            </div>
        </section>
        <!-- END prices -->
        
        <!-- START inquiry -->
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
                        <p class="text-muted"><span class="fw-bold">Customer Support:</span><br> <span class="d-block mt-1">+1 234 56 7894</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Email Address:</span><br> <span class="d-block mt-1">info@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Address:</span><br> <span class="d-block mt-1">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                    </div>

                    <div class="col-md-8">
                        <form class="needs-validation" novalidate="">
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="fullname" class="form-label">Your Name</label>
                                        <input class="form-control form-control-light" type="text" required="" id="fullname" placeholder="Name...">
                                        <div class="invalid-feedback">
                                            Please Enter your Name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                        <div class="invalid-feedback">
                                            Please Enter valid Email
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">Service Inquiry</label>
                                        <select class="form-control select2" data-toggle="select2">
                                            <option value="GD">General Dentistry</option>
                                            <option value="CD">Cosmetic Dentistry</option> 
                                            <option value="PD">Pediatric Dentistry</option>
                                            <option value="OR">Orthodontics</option> 
                                            <option value="PE">Periodontics</option>
                                            <option value="OS">Oral Surgery</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" required="" placeholder="Type your message here..."></textarea>
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
                        <img src="<?php echo base_url('assets')?>images/logos/logo-dark.png" alt="" class="logo-dark" height="18">
                        <p class="text-muted mt-4">HappySmile makes it easier to build better websites with
                            <br> great speed. Save hundreds of hours of design
                            <br> and development by using it.</p>

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

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Discover</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Help Center</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Our Products</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Privacy</a></li>
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
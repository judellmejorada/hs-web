﻿<!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Appointment | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Happy Smile" name="Author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">

        <!-- third party css -->
        <link href="<?php echo base_url('assets')?>/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets')?>/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?php echo base_url('assets')?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets')?>/css/app.min1.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?php echo base_url('assets')?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <link href="<?php echo base_url('assets')?>/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets')?>/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

        <!-- Parsley & Toastr css -->
        <link href="<?php echo base_url('assets')?>/css/parsley.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets')?>/css/toastr.css" rel="stylesheet" type="text/css"/>

         <!-- Exportable Report css -->
         <link href="<?php echo base_url('assets')?>/css/databutton.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets')?>/css/databutton.css" rel="stylesheet" type="text/css"/>

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        
        <!-- Begin page -->

        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">


                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">HappySmile</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
                                            <li class="breadcrumb-item active">Appointment</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">APPOINTMENTS</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="javascript:void(0);" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop0"><i class="mdi mdi-plus-circle me-2"></i> Add Appointment</a>
                                                <?php include('staff-add-appointment.php')?>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="appointment-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Dentist</th>
                                                        <th>Appointment Date</th>
                                                        <th>Appointment Purpose</th>
                                                        <th>Comment</th>
                                                        <th>Success</th>
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <?php include ('staff-view-appointment.php');?>
        <?php include ('staff-modify-appointment.php');?>
        <?php include ('staff-delete-appointment.php');?>
        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/access/common.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTablesAppointment.bootstrap5.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.checkboxes.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.appointment.js"></script>
        <script src="<?php echo base_url('assets')?>/js/staff/appointment.js"></script>
        <!-- end demo js-->
        <!-- quill js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/quill.min.js"></script>
        <!-- quill Init js-->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.quilljs.js"></script>

         <!-- toaster js -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        <script src="<?php echo base_url('assets')?>/js/toastr.js"></script>

         <!-- parsley -->
         <script src="<?php echo base_url('assets')?>/js/parsley.js"></script>

    </body>
</html>

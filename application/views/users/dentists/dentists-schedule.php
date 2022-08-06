<!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Schedule | HappySmile Dental Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HappySmile-DCMS" name="GROUP 4" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dentist</a></li>
                                            <li class="breadcrumb-item active">Users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Scheduled Patients</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="schedule-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Date of Birth</th>
                                                        <th>Gender</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
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

        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/access/common.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTablesUsers.bootstrap5.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.checkboxes.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?php echo base_url('assets')?>/js/dentist/schedule.js"></script>
        <script src="<?php echo base_url('assets')?>/js/pages/demo.customers.js"></script>
        <!-- end demo js-->

    </body>
</html>

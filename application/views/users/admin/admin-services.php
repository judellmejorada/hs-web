<!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Services | HappySmile</title>
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
        <link href="<?php echo base_url('assets')?>/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets')?>/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

        <!-- Parsley & Toastr css -->
        <link href="<?php echo base_url('assets')?>/css/parsley.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets')?>/css/toastr.css" rel="stylesheet" type="text/css"/>

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Services</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">SERVICES</h4>
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
                                                <a href="javascript:void(0);" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"> <i class="mdi mdi-plus-circle me-2"></i>Add Service</a>
                                                <?php include ('admin-add-service.php');?>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dtr-inline" id="service-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th style="width: 300px;">Service Name</th>
                                                        <th>Service Description</th>
                                                        
                                                        <th style="width: 75px;">Status</th>
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

        <?php include ('admin-view-service.php');?>
        <?php include ('admin-modify-service .php');?>
        <?php include ('admin-delete-service.php');?>

        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/access/common.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTablesServices.bootstrap5.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/vendor/dataTables.checkboxes.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?php echo base_url('assets')?>/js/admin/service.js"></script>
        <script src="<?php echo base_url('assets')?>/js/pages/demo.services.js"></script>

        <!-- quill js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/quill.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/pages/demo.quilljs.js"></script>
        
        <!-- toaster js -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        <script src="<?php echo base_url('assets')?>/js/toastr.js"></script>

    </body>
</html>

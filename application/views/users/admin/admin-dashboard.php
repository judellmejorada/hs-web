<!DOCTYPE html>
    <html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Dashboard | HappySmile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Happy Smile" name="Author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">

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
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">DASHBOARD</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Patients Today</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Patients this Week</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Patients this Month</h5>
                                                <h3 class="my-2 py-1">861</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Patients this Year</h5>
                                                <h3 class="my-2 py-1">253k</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Top Performing</h4>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                        <th>Tasks</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Jeremy Young</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>187</td>
                                                        <td>154</td>
                                                        <td>49</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Thomas Krueger</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>235</td>
                                                        <td>127</td>
                                                        <td>83</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Pete Burdine</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>365</td>
                                                        <td>148</td>
                                                        <td>62</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Mary Nelson</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>753</td>
                                                        <td>159</td>
                                                        <td>258</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Kevin Grove</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>458</td>
                                                        <td>126</td>
                                                        <td>73</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col-->

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Recent Leads</h4>

                                        <div class="d-flex align-items-start">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                                <span class="font-13">richard.john@mail.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-danger-lighten float-end">Lost lead</span>
                                                <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                                <span class="font-13">margaret.evans@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">Won lead</span>
                                                <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                                <span class="font-13">bryuellen@dayrep.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                                <span class="font-13">collier@jourrapide.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                                <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                                <span class="font-13">thykauper@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="<?php echo base_url('assets')?>/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">Won lead</span>
                                                <h5 class="mt-0 mb-1">Zara Raws</h5>
                                                <span class="font-13">austin@dayrep.com</span>
                                            </div>
                                        </div>
                                           
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->  
                            
                            <div class="col-xl-4 col-lg-6">
                                <div class="card cta-box bg-primary text-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-center">
                                            <div class="w-100 overflow-hidden">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i>&nbsp;</h2>
                                                <h3 class="m-0 fw-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></h3>
                                            </div>
                                            <img class="ms-3" src="<?php echo base_url('assets')?>/images/logos/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                                <!-- Todo-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-2">Todo</h4>

                                        <div class="todoapp">
                                            <div data-simplebar="" style="max-height: 224px">
                                                <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                            </div>
                                        </div> <!-- end .todoapp-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div>
                            <!-- end col -->  
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
        </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        <!-- END wrapper -->
        
        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- Apex js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/apexcharts.min.js"></script>

        <!-- Todo js -->
        <script src="<?php echo base_url('assets')?>/js/ui/component.todo.js"></script>

        <!-- demo app -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.dashboard-crm.js"></script>

        <!-- demo js -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.toastr.js"></script>
        <!-- end demo js-->
    </body>
    
</html>

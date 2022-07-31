<!DOCTYPE html>
    <html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Calendar | HappySmile Dental Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Happy Smile" name="Author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/logos/HappySmile.ico">

        <!-- third party css -->
        <link href="<?php echo base_url('assets')?>/css/vendor/fullcalendar.min.css" rel="stylesheet" type="text/css">
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patient</a></li>
                                            <li class="breadcrumb-item active">Calendar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">CALENDAR</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="d-grid">
                                                    <button class="btn btn-lg font-16 btn-danger" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New
                                                        Event</button>
                                                </div>
                                                <div id="external-events" class="m-t-20">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the calendar
                                                    </p>
                                                    <div class="external-event bg-success-lighten text-success" data-class="bg-success">
                                                        <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>New
                                                        Theme Release
                                                    </div>
                                                    <div class="external-event bg-info-lighten text-info" data-class="bg-info">
                                                        <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>My
                                                        Event
                                                    </div>
                                                    <div class="external-event bg-warning-lighten text-warning" data-class="bg-warning">
                                                        <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Meet
                                                        manager
                                                    </div>
                                                    <div class="external-event bg-danger-lighten text-danger" data-class="bg-danger">
                                                        <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Create
                                                        New theme
                                                    </div>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-lg-9">
                                                <div class="mt-4 mt-lg-0">
                                                    <div id="calendar"></div>
                                                </div>
                                            </div> <!-- end col -->

                                        </div> <!-- end row -->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                                <div class="modal-header py-3 px-4 border-bottom-0">
                                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body px-4 pb-4 pt-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Event Name</label>
                                                                <input class="form-control" placeholder="Event Name" type="text" name="title" id="event-title" required="">
                                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Category</label>
                                                                <select class="form-select" name="category" id="event-category" required="">
                                                                    <option value="bg-danger" selected="">Danger</option>
                                                                    <option value="bg-success">Success</option>
                                                                    <option value="bg-primary">Primary</option>
                                                                    <option value="bg-info">Info</option>
                                                                    <option value="bg-dark">Dark</option>
                                                                    <option value="bg-warning">Warning</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select a valid event category</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- bundle -->
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?php echo base_url('assets')?>/js/vendor/fullcalendar.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?php echo base_url('assets')?>/js/pages/demo.calendar.js"></script>
        <!-- end demo js-->

        <script src="<?php echo base_url('assets')?>/js/google.js"></script>

    </body>

</html>
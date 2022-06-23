﻿<!DOCTYPE html>
    <html lang="en">
    
    <head>

        <meta charset="utf-8">
        <title>Invoices | HappySmile Dental Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Happy Smile" name="Author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('frontend/assets')?>/images/HappySmile.ico">

        <!-- App css -->
        <link href="<?php echo base_url('frontend/assets')?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('frontend/assets')?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?php echo base_url('frontend/assets')?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

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
                                            <li class="breadcrumb-item active">Invoices</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">INVOICES</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Invoice Logo-->
                                        <div class="clearfix">
                                            <div class="float-start mb-3">
                                                <img src="<?php echo base_url('frontend/assets')?>/images/HSBW.png" alt="" height="100">
                                            </div>
                                            <div class="float-end">
                                                <h4 class="m-0 d-print-none">Invoices</h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="float-end mt-3">
                                                    <p><b>Good Day, Happy Smile Customer!</b></p>
                                                    <p class="text-muted font-13">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Order Date: </strong> &nbsp;&nbsp;&nbsp; Jan 17, 2018</p>
                                                    <p class="font-13"><strong>Order Status: </strong> <span class="badge bg-success float-end">Paid</span></p>
                                                    <p class="font-13"><strong>Order ID: </strong> <span class="float-end">#123456</span></p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
            
                                        <div class="row mt-4">
                                            <div class="col-sm-4">
                                                <h6>Billing Address</h6>
                                                <address>
                                                    Lynne K. Higby<br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div> <!-- end col-->
            
                                            <div class="col-sm-4">
                                                <h6>Shipping Address</h6>
                                                <address>
                                                    Cooper Hobson<br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div> <!-- end col-->
            
                                            <div class="col-sm-4">
                                                <div class="text-sm-end">
                                                    <img src="<?php echo base_url('frontend/assets')?>/images/barcode.png" alt="barcode-image" class="img-fluid me-2">
                                                </div>
                                            </div> <!-- end col-->
                                        </div>    
                                        <!-- end row -->        
    
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4">
                                                        <thead>
                                                        <tr><th>#</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Cost</th>
                                                            <th class="text-end">Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b>Laptop</b> <br>
                                                                Brand Model VGN-TXN27N/B
                                                                11.1" Notebook PC
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1799.00</td>
                                                            <td class="text-end">$1799.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <b>Warranty</b> <br>
                                                                Two Year Extended Warranty -
                                                                Parts and Labor
                                                            </td>
                                                            <td>3</td>
                                                            <td>$499.00</td>
                                                            <td class="text-end">$1497.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <b>LED</b> <br>
                                                                80cm (32) HD Ready LED TV
                                                            </td>
                                                            <td>2</td>
                                                            <td>$412.00</td>
                                                            <td class="text-end">$824.00</td>
                                                        </tr>
    
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <small>
                                                        All accounts are to be paid within 7 days from receipt of
                                                        invoice. To be paid by cheque or credit card or direct payment
                                                        online. If account is not paid within 7 days the credits details
                                                        supplied as confirmation of work undertaken will be charged the
                                                        agreed quoted fee noted above.
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="float-end mt-3 mt-sm-0">
                                                    <p><b>Sub-total:</b> <span class="float-end">$4120.00</span></p>
                                                    <p><b>VAT (12.5):</b> <span class="float-end">$515.00</span></p>
                                                    <h3>$4635.00 USD</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
    
                                        <div class="d-print-none mt-4">
                                            <div class="text-end">
                                                <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                                <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                                            </div>
                                        </div>   
                                        <!-- end buttons -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
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
        <script src="<?php echo base_url('frontend/assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('frontend/assets')?>/js/app.min.js"></script>
        
    </body>
</html>

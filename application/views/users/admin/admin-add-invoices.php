﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Invoice Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="add-invoices-form" class="needs-validation" novalidate="">
            <div class="clearfix">
                                            <div class="float-start mb-3">
                                                <img src="<?php echo base_url('assets')?>/images/logos/HSBW.PNG" alt="" height="100">
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
                                                    <p class="text-muted font-13">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact us with any questions.</p>
                                                   
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                            <h4>

                                            
                                            </h4>
                                                <div class="form-group">
                                                <label for="Branch" class="form-label">Clinic Branch</label>
                                                                <select class="form-select" id="Branch" name="Branch">
                                                                    <option>Select Branch</option>
                                                                    <option>Fairview Branch</option>
                                                                    <option>SM North Branch</option>
                                                                    <option>Makati Branch</option>
                                                                </select>
                                                </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
            
                                        <div class="row mt-4">
                                            <div class="col-sm-5 offset-sm-1">  
                                            <h6>Issued To</h6>
                                                <div class="form-group  ">
                                                <input type="text" class="form-control" name="invoices_issued_to" id="invoices_issued_to" placeholder="Name" autocomplete="off">
                                                </div>      
                                            </div> <!-- end col-->

                                            
                                        <div>
                                        </div>    
                                        <!-- end row -->    
                                         <form action="#">   
                                         <div class="table-responsive" style="padding: 2rem">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" style="margin-left: 0" id="add-invoice-form">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th></th>
                                                        <th width="78%">Service</th>
                                                        <th width="20%">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-6 offset-sm-1">
                                        <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                                        <button class="btn btn-success"  id="addRows" type="button" >+ Add More</button>
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6 offset-sm-1">
                                            <br>
                                            <label for="example-textarea" class="form-label">Description</label>
                                            <textarea class="form-control" id="appointments_comment" rows="5"></textarea>
                                            <div class="invalid-feedback">
                                                    Please provide a Description.  
                                            </div>

                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <p>
                                                        All accounts are to be paid within 7 days from receipt of
                                                        invoice. To be paid by cheque or credit card or direct payment
                                                        online. If account is not paid within 7 days the credits details
                                                        supplied as confirmation of work undertaken will be charged the
                                                        agreed quoted fee noted above.
                                                    </p>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-4">
                                                <div class="float-end mt-3 mt-sm-0">
                                               
                                                        <span class="form-inline">
                                                        <div class="form-group">
                                                        <label for="Subtotal" class="form-label">Subtotal:</label>
                                                        <div class="input-group">
                                                        <input type="number" readonly="" class="form-control" id="grand_total" name="grand_total" value="">
                                                        
                                                        </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                        <label>Discount:</label>
                                                        <div class="input-group">
                                                        <input value="" type="number" class="form-control" id="invoices_discount" name="invoices_discount" placeholder="Discount">
                                                        </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                        <label>Total: </label>
                                                        <div class="input-group">
                                                        <input type="number" readonly="" class="form-control" id="total_after_discount" name="total_after_discount" value="">

                                                        </div>
                                                        </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        </form>
                                        <!-- end row-->
    
                                        <div class="d-print-none mt-4">
                                            <div class="col-sm-4 offset-7">
                                            <div class="text-end">
                                                <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                                <a href="javascript: void(0);" id="add-invoice-button" class="btn btn-info">Submit</a>
                                                <p></p>
                                            </div>
                                            </div>
                                        </div>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->



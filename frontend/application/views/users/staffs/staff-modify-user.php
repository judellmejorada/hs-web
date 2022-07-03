﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel2">Edit Invoice Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
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
                                                <div class="float-right mt-4">
                                                    <p><b>Good Day, Happy Smile Customer!</b></p>
                                                    <p class="text-muted font-13">Please find below a cost-breakdown for the recent work completed.<br>
                                                     Please make payment at your earliest convenience, <br>and do not hesitate to contact me with any questions.</p>
                                                   
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                            <h4>

                                            
                                            </h4>
                                                <div class="form-group">
                                                <label for="Branch" class="form-label">Clinic Branch</label>
                                                                <select class="form-select" id="Branch">
                                                                    <option>Fairview Branch</option>
                                                                    <option>SM North Branch</option>
                                                                    <option>Makati Branch</option>
                                                                </select>
                                                </div>
                                                <div class="form-group">
                                                <textarea class="form-control" readonly="" rows="2" name="address" id="address" placeholder="Branch Address"></textarea>
                                                </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
            
                                        <div class="row mt-4">
                                            <div class="col-sm-5 offset-sm-1">
                                            <h6>Billing Address</h6>
                                                <div class="form-group  ">
                                                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Name" autocomplete="off">
                                                </div>
                                                <div class="form-group ">
                                                <textarea class="form-control" rows="2" name="address" id="address" placeholder="Address"></textarea>
                                                </div>                
                                            </div> <!-- end col-->
            
                                            <div class="col-sm-5">
                                                <div class="col-sm-13">
                                                    <img src="<?php echo base_url('frontend/assets')?>/images/barcode.png" style="float:right" alt="barcode-image"  class="img-fluid me-2 ">
                                                </div>
                                            </div> <!-- end col-->
                                                         
                                            

                                        <div>
                                        </div>    
                                        <!-- end row -->        
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <table class="table table-bordered table-hover" style="margin-left:1rem"id="invoiceItem">
                                        <tr>
                                        <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>`
                                        <th width="38%">Service</th>
                                        <th width="15%">Price</th>
                                        <th width="15%">Total</th>
                                        </tr>
                                        <tr>
                                        <td><input class="itemRow" type="checkbox"></td>
                                        <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
                                        <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
                                        <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
                                        </tr>
                                        </table>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-6 offset-sm-1">
                                        <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                                        <button class="btn btn-success"  id="addRows" type="button" >+ Add More</button>
                                        </div>
                                        </div>
                                        
                                       
                                        <div class="row">
                                            <div class="col-sm-6 offset-sm-1">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <p>
                                                        All accounts are to be paid within 7 days from receipt of<br>
                                                        invoice. To be paid by cheque or credit card or direct payment<br>
                                                        online. If account is not paid within 7 days the credits details<br>
                                                        supplied as confirmation of work undertaken will be charged the<br>
                                                        agreed quoted fee noted above.
                                                    </p>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-4">
                                                <div class="float-end mt-3 mt-sm-0">
                                               
                                                        <span class="form-inline">
                                                        <div class="form-group">
                                                        <label for="Subtotal" class="form-label">Subtotal:  </label>
                                                        <div class="input-group">
                                                        <input type="number" readonly="" class="form-control" id="Subtotal" value="">
                                                    
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Tax Rate:  </label>
                                                        <div class="input-group">
                                                        <input type="number" readonly="" class="form-control" id="Taxrate" value="12%">
                                                        
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Discount:  </label>
                                                        <div class="input-group">
                                                        <input value="" type="number" class="form-control" name="discount" id="discount" placeholder="Discount">
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Total:  </label>
                                                        <div class="input-group">
                                                        <input type="number" readonly="" class="form-control" id="GrandTotal" value="">

                                                        </div>
                                                        </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
    
                                        <div class="d-print-none mt-4">
                                            <div class="col-sm-4 offset-7">
                                            <div class="text-end">
                                                
                                                <a href="javascript: void(0);" class="btn btn-info">Save Invoice</a>
                                                <p></p>
                                            </div>
                                            </div>
                                        </div>
                </form>
                        </div>
            </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->

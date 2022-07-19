<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel1">View Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_name">Branch</label>
                                <select class="form-select" id="branches_name" name="branches_name" placeholder="Branch" readonly="" disabled="">
                                    <option></option>
                                    <option>Commonwealth</option>
                                    <option>Quezon City</option>
                                    <option>Barbie</option>
                                    <option>Kylie</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Branch.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom01">Appointment Schedule</label>
                            <input class="form-control" type="date" id="validationCustom01" name="validationCustom01" readonly="">
                            <div class="invalid-feedback">
                                Please provide a Appointment Date.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Appointment Purpose</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Appointment Purpose" readonly="">
                                <div class="invalid-feedback">
                                    Please provide an Appointment Purpose.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Status</label>
                                <select type="text" class="form-select" id="validationCustom03" placeholder="Status" readonly="" disabled="">
                                    <option></option>
                                    <option>Approved</option>
                                    <option>Disapproved</option>
                                    <option>Pending</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Status.
                                </div>
                            </div>
                        </div>  

                        <div class="row g-2">
                                <label class="form-label" for="validationCustom04">Success</label>
                                <select class="form-select" id="validationCustom04" readonly="">
                                    <option></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose an option.
                                </div>
                        </div>

                        <div class="row g-2">
                            <label class="form-label" for="validationCustom03">Comment</label>
                            <div id="snow-editor" style="height: 300px;" readonly="" ></div>
                            <div class="invalid-feedback">
                                    Please provide a Comment.  
                            </div>
                        </div>

                        <br>
                        
                        <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Done</button>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
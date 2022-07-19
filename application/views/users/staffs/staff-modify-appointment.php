﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel2">Modify Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_name">Branch</label>
                                <select class="form-select" id="branches_name" name="branches_name" placeholder="Branch" required="">
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
                            <input class="form-control" id="validationCustom01" type="date" name="date" required="">
                            <div class="invalid-feedback">
                                Please provide a Appointment Date.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Appointment Purpose</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Appointment Purpose" required="">
                                <div class="invalid-feedback">
                                    Please provide an Appointment Purpose.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Status</label>
                                <select type="text" class="form-select" id="validationCustom03" placeholder="Status" required="">
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
                                <select class="form-select" id="validationCustom04" required="">
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
                            <div id="snow-editor" style="height: 300px;" required="" ></div>
                            <div class="invalid-feedback">
                                    Please provide a Comment.  
                            </div>
                        </div>

                        <br>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                                <label class="form-check-label form-label" for="invalidCheck">I confirm that the details that I have 
                                provided in this Personal Information are correct, <br> and that I have not deliberately withheld any relevant information. </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
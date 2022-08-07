<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel2">Modify Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="edit-appointment-form" class="needs-validation" novalidate="">
                <input type="hidden" id="edit_appointments_id" name="appointments_id">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_name">Branch</label>
                                <select class="form-select branch-dropdown" id="edit_appointments_branch" name="appointments_branch" placeholder="Branch" required="">
                                    <option></option>
                                    <option value="Commonwealth">Commonwealth</option>
                                    <option value="Quezon City">Quezon City</option>
                                    <option value="Barbie">Barbie</option>
                                    <option value="Kylie">Kylie</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Branch.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom01">Appointment Schedule</label>
                            <select class="form-select schedule-dropdown" id="validationCustom00" required="">
                                <option></option>
                                <option>Anne Hathaway - July 28, 2022 8AM</option>
                                <option>Anne Hathaway - July 28, 2022 9AM</option>
                                <option>Lora Joy - July 28, 2022 11AM</option>
                            </select>
                            <!-- <input class="form-control" id="edit_appointments_sched" type="date" name="appointments_sched" required=""> -->
                            <div class="invalid-feedback">
                                Please provide a Appointment Date.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Appointment Purpose</label>
                                <input type="text" class="form-control" id="edit_appointments_purpose" placeholder="appointments_purpose" required="">
                                <div class="invalid-feedback">
                                    Please provide an Appointment Purpose.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom03">Status</label>
                                <select type="text" class="form-select" id="edit_appointments_status"  name="appointments_status" placeholder="Status" required="">
                                    <option></option>
                                    <option value="Approved">Approved</option>
                                    <option value="Disapproved">Disapproved</option>
                                    <option value="Pending">Pending</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Status.
                                </div>
                            </div>
                        </div>  

                        <div class="row g-2">
                                <label class="form-label" for="validationCustom04">Success</label>
                                <select class="form-select" id="edit_appointments_success" name="appointments_success"required="">
                                    <option></option>
                                    <option value="Success">Yes</option>
                                    <option value="Failed">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose an option.
                                </div>
                        </div>

                        <div class="row g-2">
                            <label class="form-label" for="validationCustom03">Comment</label>
                            <div id="snow-editor-modify" style="height: 300px;" name="appointments_comment" required="" ></div>
                            <div class="invalid-feedback">
                                    Please provide a Comment.  
                            </div>
                        </div>

                        <br>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                                <label class="form-check-label form-label" for="invalidCheck">I confirm that the details that I have 
                                provided in this Appointment Information are correct, <br> and that I have not deliberately withheld any relevant information. </label>
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
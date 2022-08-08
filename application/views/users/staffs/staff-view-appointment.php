<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel1">View Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="view-appointment-form" class="needs-validation" novalidate="">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_name">Branch</label>
                                <select class="form-select branch-dropdown" id="view_appointments_branch" name="appointments_branch" placeholder="Branch" readonly="" disabled="">
                                    <option></option>
                                    <option>Commonwealth</option>
                                    <option>Quezon City</option>
                                    <option>Novaliches</option>
                                    <option>Cubao</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Branch.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="view_appointments_sched">Appointment Schedule</label>
                            <input class="form-control" type="text" id="view_appointments_sched" name="appointments_sched" readonly="">
                            <div class="invalid-feedback">
                                Please provide a Appointment Date.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="view_appointments_purpose">Appointment Purpose</label>
                                <input type="text" class="form-control" id="view_appointments_purpose" name="appointments_purpose" placeholder="Appointment Purpose" readonly="">
                                <div class="invalid-feedback">
                                    Please provide an Appointment Purpose.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="view_appointments_status">Status</label>
                                <select type="text" class="form-select" id="view_appointments_status" name="appointments_status" placeholder="Status" readonly="" disabled="">
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
                                <label class="form-label" for="view_appointments_success">Success</label>
                                <select class="form-select" id="view_appointments_success" name="appointments_success" readonly="">
                                    <option></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose an option.
                                </div>
                        </div>

                        <div class="row g-2">
                            <label class="form-label" for="appointments_comment">Comment</label>
                            <div id="snow-editor-view" style="height: 300px;" readonly="" name="appointments_comment" ></div>
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
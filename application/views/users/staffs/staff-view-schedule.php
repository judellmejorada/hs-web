<!-- Modal -->
<div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel9">View Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form  class="needs-validation" novalidate="">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="schedule_dentist">Dentist</label>
                                <select class="form-select" id="view_schedule_dentist" name="schedule_dentist" placeholder="Branch" disabled>
                                    <option></option>
                                  
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Dentist.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="schedule_branch">Branch</label>
                            <select class="form-select" id="view_schedule_branch" name="schedule_branch"  disabled>
                                <option></option>
                                <option>Commonwealth</option>
                                <option>Novaliches</option>
                                <option>Quezon City</option>
                                <option>Zabarte</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a Branch.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="col-sm-4">
                                <label class="form-label" for="schedule_date">Schedule Date</label>
                                <input type="date" class="form-control" id="view_schedule_date" name="schedule_date" placeholder="Schedule Date"disabled>
                                <div class="invalid-feedback">
                                    Please provide a Schedule Date.
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <label for="example-time" class="form-label">Start Time</label>
                                <input class="form-control" id="view_schedule_start_time" type="time" name="schedule_start_time" placeholder="Start Time" disabled>
                                <div class="invalid-feedback">
                                    Please provide a Start Time.
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <label for="example-time" class="form-label">End Time</label>
                                <input class="form-control" id="view_schedule_end_time" type="time" name="schedule_end_time" placeholder="End Time" disabled>
                                <div class="invalid-feedback">
                                    Please provide a End Time.
                                </div>
                            </div>
                        </div>  

                        <br>
                        
                        <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Done</button>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
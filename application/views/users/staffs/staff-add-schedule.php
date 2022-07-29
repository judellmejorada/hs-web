<!-- Modal -->
<div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel8">Add Schedule Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="add-appointment-form" class="needs-validation" novalidate="">
            <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="schedule_dentist">Dentist</label>
                                <select class="form-select" id="schedule_dentist" name="schedule_dentist" placeholder="Branch" required="">
                                    <option></option>
                                    <option>Dr. Stark</option>
                                    <option>Dr. McStuffins</option>
                                    <option>Dr. Quack</option>
                                    <option>Dr. Dora</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Dentist.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                            <label class="form-label" for="schedule_branch">Branch</label>
                            <select class="form-select" id="schedule_branch" name="schedule_branch" required="">
                                <option></option>
                                <option>Commonwealth</option>
                                <option>Novaliches</option>
                                <option>Quezon City</option>
                                <option>Zabarte</option>
                            </select>
                            <!-- <input class="form-control" id="validationCustom01" type="date" name="appointments_sched" required=""> -->
                            <div class="invalid-feedback">
                                Please provide a Branch.
                            </div>
                        </div>
                        </div>            
                        
                        <div class="row g-2">
                            <div class="col-sm-4">
                                <label class="form-label" for="schedule_date">Schedule Date</label>
                                <input type="date" class="form-control" id="schedule_date" name="schedule_date" placeholder="Schedule Date" required="">
                                <div class="invalid-feedback">
                                    Please provide a Schedule Date.
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <label for="example-time" class="form-label">Start Time</label>
                                <input class="form-control" id="schedule_start_time" type="time" name="schedule_start_time" placeholder="Start Time" required="">
                                <div class="invalid-feedback">
                                    Please provide a Start Time.
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <label for="example-time" class="form-label">End Time</label>
                                <input class="form-control" id="schedule_end_time" type="time" name="schedule_end_time" placeholder="End Time" required="">
                                <div class="invalid-feedback">
                                    Please provide a End Time.
                                </div>
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Add Appointment Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

                <form id="add-appointment-form" class="needs-validation" novalidate="">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom00">Branch</label>
                            <select class="form-select" id="validationCustom00" required="">
                                <option></option>
                                <option>Kendall</option>
                                <option>Nadine</option>
                                <option>Barbie</option>
                                <option>Kylie</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a Dentist.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <!-- This is from schedule available -->
                            <label class="form-label" for="validationCustom00">Available Schedule</label>
                            <select class="form-select" id="validationCustom00" required="">
                                <option></option>
                                <option>Anne Hathaway - July 28, 2022 8AM</option>
                                <option>Anne Hathaway - July 28, 2022 9AM</option>
                                <option>Lora Joy - July 28, 2022 11AM</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a Schedule.
                            </div>
                        </div>
                    </div>

                    <br>        
                    <div class="row g-2">
                        <div class="mb-3 col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Description" id="floatingTextarea" required="" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Purpose</label>
                                <div class="invalid-feedback">
                                    Please provide a purpose.  
                                </div>
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
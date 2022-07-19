<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Add Branch Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="branches_name">Branch</label>
                            <input type="text" class="form-control" id="branches_name" name="branches_name" placeholder="Branch" required="">
                            <div class="invalid-feedback">
                                Please provide a Branch.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="branches_contact_person">Contact Person</label>
                            <input type="text" class="form-control" id="branches_contact_person" name="branches_contact_person" placeholder="Contact Person" required="">
                            <div class="invalid-feedback">
                                Please provide a Contact Person.
                            </div>
                        </div>
                    </div>            
                        
                    <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="branches_phone_number" name="branches_phone_number" placeholder="Phone Number" required="">
                                    <div class="invalid-feedback">
                                        Please provide a Phone Number.  
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_google_map">Location</label>
                                <input type="text" class="form-control" id="branches_google_map" name="branches_google_map" placeholder="Location" required="">
                                    <div class="invalid-feedback">
                                        Please provide a link of your Location through Google Map. 
                                    </div>
                            </div>
                        </div>  

                        <div class="row g-2">
                            <label class="form-label" for="branches_description">Description</label>
                            <div id="snow-editor" name="branches_description" style="height: 300px;" required="" ></div>
                            <div class="invalid-feedback">
                                    Please provide a brief Description.  
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
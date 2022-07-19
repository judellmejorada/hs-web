<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Add Dentist Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_fname">First Name</label>
                            <input type="text" class="form-control" id="users_fname" name="users_fname" placeholder="First Name" required="">
                            <div class="invalid-feedback">
                                Please provide a First Name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_lname">Last Name</label>
                            <input type="text" class="form-control" id="users_lname" name="users_lname" placeholder="Last Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Last Name.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-sm-4">
                                <label class="form-label" for="users_profile_pic">Image</label>
                                <input type="file" class="form-control" id="users_profile_pic" name="users_profile_pic" required="">
                                <div class="invalid-feedback">
                                        Please provide an Image. 
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="dentists_specialty">Dentistry Specialization</label>
                            <input type="text" class="form-control" id="dentists_specialty" name="dentists_specialty" placeholder="Dentistry Specialization" required="">
                            <div class="invalid-feedback">
                                Please provide a Dentistry Specialization.
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label class="form-label" for="users_status">Status</label>
                                <select type="text" class="form-select" id="users_status" name="users_status" placeholder="Status" required="">
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
                    <br>
                    
                    <div class="row g-2">
                            <label class="form-label" for="dentists_description">Description</label>
                            <div id="snow-editor" name="dentists_description" style="height: 300px;" required="" ></div>
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
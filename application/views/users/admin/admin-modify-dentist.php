﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel10">Modify Dentist Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="edit-dentist-form" class="needs-validation" novalidate="">
                <input type="hidden" id="edit_dentists_id" name="dentists_id">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_fname">First Name</label>
                            <input type="text" class="form-control" id="edit_dentists_fname" name="dentists_fname" placeholder="First Name" required="">
                            <div class="invalid-feedback">
                                Please provide a First Name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_lname">Last Name</label>
                            <input type="text" class="form-control" id="edit_dentists_lname" name="dentists_lname" placeholder="Last Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Last Name.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-sm-4">
                                <label class="form-label" for="users_profile_pic">Image</label>
                                <input type="file" class="form-control" id="dentists_image" name="dentists_image" require>
                                <div class="invalid-feedback">
                                        Please provide an Image. 
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="dentists_specialty">Dentistry Specialization</label>
                            <input type="text" class="form-control" id="edit_dentists_specialty" name="dentists_specialty" placeholder="Dentistry Specialization" required="">
                            <div class="invalid-feedback">
                                Please provide a Dentistry Specialization.
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label class="form-label" for="dentists_status">Status</label>
                                <select type="text" class="form-select" id="edit_dentists_status" name="dentists_status" placeholder="Status">
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
                            <div id="snow-editor-modify" name="dentists_description" style="height: 300px;"></div>
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
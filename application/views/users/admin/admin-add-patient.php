<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Add User Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="add-user-form" class="needs-validation" novalidate="">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_fname">First Name</label>
                            <input type="text" class="form-control" id="users_fname" name="users_fname" placeholder="First Name" name="users_fname" required="">
                            <div class="invalid-feedback">
                                Please provide a First Name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_mname">Middle Name</label>
                            <input type="text" class="form-control" id="users_mname" name="users_mname" placeholder="Middle Name" name="users_mname" required="">
                            <div class="invalid-feedback">
                                Please provide a Middle Name.
                            </div>
                        </div>
                    </div>   
                    
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_lname">Last name</label>
                            <input type="text" class="form-control" id="users_lname" name="users_lname" placeholder="Last Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Last Name.
                            </div>
                        </div> 
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_birthdate">Birth Date</label>
                            <input class="form-control" id="users_birthdate" type="users_birthdate" name="users_birthdate" required="">
                            <div class="invalid-feedback">
                                Please provide a Birth Date.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_gender">Gender</label>
                            <select class="form-select" id="users_gender" name="users_gender" required="">
                                <option></option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Prefer not to say</option>
                                <option>Others</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a Gender.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_civil_status">Civil Status</label>
                            <select class="form-select" id="users_civil_status" name="users_civil_status" required="">
                                <option></option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Others</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a Civil Status.
                            </div>
                        </div>
                    </div>
                                                       
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="users_phone_number" name="users_phone_number" placeholder="Phone Number" required="">
                                <div class="invalid-feedback">
                                    Please provide a Phone Number. 
                                </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_email">Email</label>
                            <input type="text" class="form-control" id="users_email" name="users_email" placeholder="Email" required="">
                                <div class="invalid-feedback">
                                    Please provide a Email.  
                                </div>
                        </div>
                    </div>  

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_profile_pic">Image</label>
                            <input type="file" class="form-control" id="users_profile_pic" name="users_profile_pic" required="">
                            <div class="invalid-feedback">
                                    Please provide an Image. 
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_type">User Type</label>
                            <select class="form-select" id="users_type" name="users_type" required="">
                                <option></option>
                                <option>Admin</option>
                                <option>Staff</option>
                                <option>Dentist</option>
                                <option>Patient</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a User Type.
                            </div>
                        </div>

                    </div>
                        
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="users_password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" placeholder="Password" id="users_password" name="users_password" required="">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide your password.  
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
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
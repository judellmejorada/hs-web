<!-- Modal -->
<div class="modal" id="staticBackdrop00" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel00">My Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">
                <div class="card text-center">
                <div class="card-body">
                    <img src="<?php echo base_url('assets')?>/images/users/avatar-10.jpg" class="rounded-circle avatar-lg img-thumbnail" id="users_profile_pic" name="users_profile_pic" alt="profile-image">

                    <h4 class="mb-0 mt-2" id="users_fullname" name="users_fullname">Soeng Souy</h4>
                    <p class="text-muted font-14" id="users_type" name="users_type">Founder</p>

                    <div class="text-start mt-3">

                    <form id="add-user-form" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    <div class="row g-3">
                            <div class="col-sm-4">
                            <label class="form-label" for="users_fname">First Name</label>
                            <input type="text" class="form-control" id="users_fname" name="users_fname" placeholder="First Name" required="">
                            <div class="invalid-feedback">
                                Please provide a First Name.
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="users_mname">Middle Name</label>
                            <input type="text" class="form-control" id="users_mname" name="users_mname" placeholder="Middle Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Middle Name.
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="users_lname">Last name</label>
                            <input type="text" class="form-control" id="users_lname" name="users_lname" placeholder="Last Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Last Name.
                            </div>
                        </div>
                    </div>   
                    <br>
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_birthdate">Birth Date</label>
                            <input class="form-control" type="date" id="users_birthdate" name="users_birthdate" required="">
                            <div class="invalid-feedback">
                                Please provide a Birth Date.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_gender">Gender</label>
                            <select class="form-select" id="users_gender" name="users_gender" required="">
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                                <option value="Others">Others</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a Gender.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_civil_status">Civil Status</label>
                            <select class="form-select" id="users_civil_status" name="users_civil_status" required="">
                                <option></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Others">Others</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a Civil Status.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_email">Email</label>
                            <input type="text" class="form-control" id="users_email" name="users_email" placeholder="Email" readonly="" required="">
                                <div class="invalid-feedback">
                                    Please provide a Email.  
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
                            <label class="form-label" for="users_profile_pic">Image</label>
                            <input type="file" class="form-control" id="users_profile_pic" name="users_profile_pic" required="">
                            <div class="invalid-feedback">
                                    Please provide an Image. 
                            </div>
                        </div>
                    </div>  

                        
                        <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
                    </div>
                    
                </div> <!-- end card-body -->
            </div> <!-- end card -->
            </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
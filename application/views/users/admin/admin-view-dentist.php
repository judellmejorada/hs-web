<!-- Modal -->
<div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel9">View Dentist Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_fname">First Name</label>
                            <input type="text" class="form-control" id="view_dentists_fname" name="dentists_fname" readonly="" value="" placeholder="First Name" >
                            <div class="invalid-feedback">
                                Please provide a First Name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="users_lname">Last Name</label>
                            <input type="text" class="form-control" id="view_dentists_lname" name="dentists_lname" readonly="" value="" placeholder="Last Name">
                            <div class="invalid-feedback">
                                Please provide a Last Name.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-sm-4">
                                <label class="form-label" for="users_profile_pic">Image</label>
                                <input type="file" class="form-control" id="view_dentists_image" name="dentists_image" readonly="" value="">
                                <div class="invalid-feedback">
                                        Please provide an Image. 
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="dentists_specialty">Dentistry Specialization</label>
                            <input type="text" class="form-control" id="view_dentists_specialty" name="dentists_specialty" readonly="" value="" placeholder="Dentistry Specialization">
                            <div class="invalid-feedback">
                                Please provide a Dentistry Specialization.
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label class="form-label" for="dentists_status">Status</label>
                                <select type="text" class="form-select" id="edit_dentists_status" name="dentists_status" placeholder="Status" readonly="" disabled>
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
                            <div id="snow-editor-view" name="dentists_description" style="height: 300px;" readonly="" disabled="true"></div>
                            <div class="invalid-feedback">
                                    Please provide a brief Description.  
                            </div>
                    </div>

                    <br>
                        
                        <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
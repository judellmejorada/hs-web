<!-- Modal -->
<div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel13">View Branch Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="branches_name">Branch</label>
                            <input type="text" class="form-control" id="view_branches_name" name="branches_name" readonly="" value="Branch">
                            <div class="invalid-feedback">
                                Please provide a Branch.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="branches_contact_person">Contact Person</label>
                            <input type="text" class="form-control" id="view_branches_contact_person" name="branches_contact_person" readonly="" value="Contact Person">
                            <div class="invalid-feedback">
                                Please provide a Contact Person.
                            </div>
                        </div>
                    </div>            
                        
                    <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="view_branches_phone_number" name="branches_phone_number" readonly="" value="Phone Number">
                                    <div class="invalid-feedback">
                                        Please provide a Phone Number.  
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="branches_google_map">Location</label>
                                <input type="text" class="form-control" id="view_branches_google_map" name="branches_google_map" readonly="" value="Location">
                                    <div class="invalid-feedback">
                                        Please provide a link of your Location through Google Map. 
                                    </div>
                            </div>
                        </div>  

                        <div class="row g-2">
                            <label class="form-label" for="branches_description">Description</label>
                            <div id="snow-editor-view" name="branches_description" style="height: 300px;" readonly="" disabled="" value="Description"></div>
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
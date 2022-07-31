﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel6">Modify Service Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form id="edit_service_form" class="needs-validation" novalidate="">
            <input type="hidden" id="edit_services_id" name="services_id"/>
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label" for="services_name">Service Name</label>
                                <input type="text" class="form-control" id="edit_services_name" name="services_name" placeholder="Service Name" required="">
                                <div class="invalid-feedback">
                                    Please provide a Service Name.
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="services_image">Service Image</label>
                                <input type="file" class="form-control" id="edit_services_image" name="services_image">
                                <div class="invalid-feedback">
                                    Please provide an Service Image. 
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="services_status">Status</label>
                                <select type="text" class="form-select" id="edit_services_status" name="services_status" placeholder="Status" required="">
                                    <option value=""></option>
                                    <option value="Active">Approved</option>
                                    <option value="Disapproved">Disapproved</option>
                                    <option value="Pending">Pending</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Status.
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="row g-2">
                            <label class="form-label" for="services_description">Description</label>
                            <div id="snow-editor-modify" name="services_description" style="height: 300px;" required=""></div>
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
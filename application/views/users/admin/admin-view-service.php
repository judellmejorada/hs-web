<!-- Modal -->
<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel5">View Service Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label" for="services_name">Service Name</label>
                                <input type="text" class="form-control" id="services_name" name="services_name" readonly="" value="Service Name">
                                <div class="invalid-feedback">
                                    Please provide a Service Name.
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="services_image">Service Image</label>
                                <input type="file" class="form-control" id="services_image" name="services_image" readonly="" value="Service Image">
                                <div class="invalid-feedback">
                                    Please provide an Service Image. 
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="users_status">Status</label>
                                <select type="text" class="form-select" id="users_status" name="users_status" readonly="" disabled="true" value="Status">
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
                            <label class="form-label" for="services_description">Description</label>
                            <div id="snow-editor" style="height: 300px;" name="services_description" readonly="" disabled="true"></div>
                            <div class="invalid-feedback">
                                    Please provide a brief Description.  
                            </div>
                        </div>
                        <br>
                        
                        <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Done</button>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->
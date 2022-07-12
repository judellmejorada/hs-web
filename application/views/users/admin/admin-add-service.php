<!-- Modal -->
<div class="modal fade" id="staticBackdrop00" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel00">Add Service Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom01">Service Name</label>
                            <input type="text" class="form-control" id="validationCustom00" placeholder="Service Name" required="">
                            <div class="invalid-feedback">
                                Please provide a Service Name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                                <label class="form-label" for="validationCustom01">Service Image</label>
                                <input type="file" id="validationCustom01" class="form-control" required>
                                <div class="invalid-feedback">
                                        Please provide an Service Image. 
                                </div>
                            </div>
                    </div>
                    
                    <div class="row g-2">
                        <div id="snow-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p><br></p>
                        <p>
                            End of simple area
                        </p>
                            <div class="invalid-feedback">
                                    Please provide a brief Description.  
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
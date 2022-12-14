<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">notebook Brand Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Footer/notebook_brand_list') ?>" class="text-black"> Back to List-></a></h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="vertical-form-showcode" class="form-label text-muted">Show
                                        Code</label>
                                    <input class="form-check-input code-switcher" type="checkbox" id="vertical-form-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-muted">Example of vertical form using <code>form-control</code>
                                class. No need to specify row and col class to create vertical form.</p>
                            <div class="live-preview">
                                <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-4">
                                        <h2>notebook Brand</h2>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Heading</label>
                                            <input type="text"  value="<?php echo set_value('notebook_brand', $notebook_brand); ?>" name="notebook_brand" class="form-control" id="fullnameInput" placeholder="Enter your contact us">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Brand Name</label>
                                            <input type="text"  value="<?php echo set_value('notebook_brand_name', $notebook_brand_name); ?>" name="notebook_brand_name" class="form-control" id="fullnameInput" placeholder="Enter your phone no ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Brand Link</label>
                                            <input type="text"  value="<?php echo set_value('notebook_brand_link', $notebook_brand_link); ?>" name="notebook_brand_link" class="form-control" id="fullnameInput" placeholder="Enter your notebook no ">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>
                            <div class="d-none code-view">
                                <pre class="language-markup" style="height: 375px;">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end row-->
<?php $this->load->view('footer'); ?>










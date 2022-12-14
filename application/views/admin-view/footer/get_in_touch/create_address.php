<?php $this->load->view('header'); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 mr-4">Address Form</h4>
                            <h4 class="card-title mb-0  flex-grow-1"><a href="<?php echo base_url('admin/Footer/address_list') ?>" class="text-black"> Back to List-></a></h4>
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
                                        <h2>Address</h2>

                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Phone No</label>
                                            <input type="text"  value="<?php echo set_value('phone_no', $phone_no); ?>" name="phone_no" class="form-control" id="fullnameInput" placeholder="Enter here content about ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Address</label>
                                            <input type="text"  value="<?php echo set_value('location', $location); ?>" name="location" class="form-control" id="fullnameInput" placeholder="Enter here content about ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Gmail</label>
                                            <input type="text"  value="<?php echo set_value('gmail', $gmail); ?>" name="gmail" class="form-control" id="fullnameInput" placeholder="Enter here content about ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Facebook Icon</label>
                                            <input type="text"  value="<?php echo set_value('fb_icon', $fb_icon); ?>" name="fb_icon" class="form-control" id="fullnameInput" placeholder=" [NB: fontawesome version  5.15.4 supported] ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Facebook Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('fb_icon_link', $fb_icon_link); ?>" name="fb_icon_link" class="form-control" id="fullnameInput" placeholder="Enter here fb icon link">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Twiter Icon</label>
                                            <input type="text"  value="<?php echo set_value('twit_icon', $twit_icon); ?>" name="twit_icon" class="form-control" id="fullnameInput" placeholder="[NB: fontawesome version  5.15.4 supported] ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Twiter Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('twit_icon_link', $twit_icon_link); ?>" name="twit_icon_link" class="form-control" id="fullnameInput" placeholder="Enter here twiter icon link ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Instragram Icon</label>
                                            <input type="text"  value="<?php echo set_value('insta_icon', $insta_icon); ?>" name="insta_icon" class="form-control" id="fullnameInput" placeholder="[NB: fontawesome version  5.15.4 supported] ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Instragram Icon Link</label>
                                            <input type="text"  value="<?php echo set_value('insta_icon_link', $insta_icon_link); ?>" name="insta_icon_link" class="form-control" id="fullnameInput" placeholder="Enter your insta icon link ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="fullnameInput" class="form-label">Youtube Icon</label>
                                            <input type="text"  value="<?php echo set_value('ytube_icon', $ytube_icon); ?>" name="ytube_icon" class="form-control" id="fullnameInput" placeholder="[NB: fontawesome version 5.15.4 supported] ">
                                        </div>
                                        <div class="py-2 ">
                                            <label for="inputEmail4" class="form-label">Youtube icon link</label>
                                            <input type="text"  value="<?php echo set_value('ytube_icon_link', $ytube_icon_link); ?>" name="ytube_icon_link" class="form-control" id="inputEmail4" placeholder="Enter your youtube icon link">
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










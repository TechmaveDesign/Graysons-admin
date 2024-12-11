<?php include('header.php') ?>

<style>
    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            padding-left: 0px !important;
        }
    }
</style>

<div class="container-xxl">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
<!-- sub menu header -->
<?php include('headers/lettings-setting-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="javascript:void(0)" role="button">
                                    <h1>Marketing Settings </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="##"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                           
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                    <form action="property-details.php" method="POST">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Social Hub Settings</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Map">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Manage Statuses</span>

                                            </div>
                                        </a>
                                    </li>
                                   
                                </ul>
                                <button class="scroll-btn next" type="button">
                                    <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                </button>

                            </div>
                            <div class="nicescroll-bar">

                                <!-- add new content here start -->
                                <div class="post-list propertyTabContent">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Details">
                                        <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Social Hub Settings</h2>
                                                    <!-- <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_status">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Status
                                                        </button>
                                                    </div> -->
                                                </div>
                                                
                                            </div>

                                         
                                        </div>
                                        <div class="tab-pane fade" id="Map">
                                        <div class="fullwidthTabInner_content_container">
                                                <div class="docfilterbutton">
                                                    <h2 class="tabinnerTitle">Manage Statuses </h2>
                                                    <!-- <div class="RightTabinr_container">

                                                        <button
                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#add_enquiry_source">
                                                            <iconify-icon icon="lets-icons:add-round">
                                                            </iconify-icon> Add Enquiry Source
                                                        </button>
                                                    </div> -->
                                                </div>
                                                
                                            </div>

                                        </div>

                                      
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->


<!-- add enquiry status modal-->
<div id="add_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">

                                <div class="ModalheaderArea">
                                <h5 class="mb-4">Add Enquiry Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									
                                    </div>


									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>

                                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Action Required
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- add enquiry status modal --> 

                        <!-- view enquiry status modal-->
<div id="View_enquiry_status" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">
                                    <div class="ModalheaderArea">
                                    <h5 class="">Enquiry Status Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										
                                    </div>
									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" value="Enquiry Received" type="text"/>
													</div>
												</div>

                                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label" for="gridCheck">
                                            Action Required
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                                <div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Time to Action</label>
														<input class="form-control" value="1" type="text"/>
													</div>
												</div>

                                                

                                <div class="col-sm-12">
													<div class="form-group usedByInput">
														<label class="form-label">Used By : </label>
														<a href="all-Enquiries.php">4</a>
													</div>
												</div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="disabledcheck" >
                                            <label class="form-check-label" for="disabledcheck">
                                            Disabled
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- view enquiry status modal --> 


<!-- add enquiry source modal-->
<div id="add_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">

                                <div class="ModalheaderArea">
                                <h5 class="mb-4">Add Enquiry Source</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									
                                    </div>


									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" type="text"/>
													</div>
												</div>

                                               
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>
						<!-- add enquiry source modal --> 

 <!-- View_enquiry_source modal start -->
 <div id="View_enquiry_source" class="modal sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="enquiry-settings.php" method="post">
								<div class="modal-content">
                                    <div class="ModalheaderArea">
                                    <h5 class="">Enquiry Source Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										
                                    </div>
									<div class="modal-body">
										
										
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="form-label">Name</label>
														<input class="form-control" value="RightMove" type="text"/>
													</div>
												</div>

                                               

                                <div class="col-sm-12">
													<div class="form-group usedByInput">
														<label class="form-label">Used By : </label>
														<a href="all-Enquiries.php">0</a>
													</div>
												</div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="disabledcheck" >
                                            <label class="form-check-label" for="disabledcheck">
                                            Disabled
                                            </label>
                                        </div>

                                    </div>
                                </div>
												
											</div>
										
									</div>
									<div class="canvasFooterContainer CustomModal_footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
        </div>
     
								</div>
                                </form>
							</div>
						</div>


<?php include('footer.php') ?>

<!-- tabs scroll js start-->
<script>
    $(document).ready(function() {
        $('.next').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '+=100'
            }, 300);
        });
        $('.prev').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '-=100'
            }, 300);
        });
    });
</script>
<!-- tabs scroll js end-->

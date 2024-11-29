<?php include('header.php') ?>
<link rel="stylesheet" href="invoice-assets/css/custom.css">
	<link rel="stylesheet" href="invoice-assets/css/media-query.css">

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

            <?php// include('headers/contracts-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Generate Parking Contract </h1>
                                </a>
                            </div>
                            <div class=" ms-3">
                                <a href="contract-statuses.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                </div>

            </div>
        </div>

        <div class="taskboardapp-wrap">

            <div class="taskboardapp-content">
                <div class="taskboardapp-detail-wrap">
                    <header class="taskboard-header">
                        <ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_boards">
                                    <span class="nav-link-text">General Contract</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_team">
                                    <span class="nav-link-text badge-on-text">Property Information</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_payment">
                                    <span class="nav-link-text badge-on-text">Payment Information</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_Tenant">
                                    <span class="nav-link-text badge-on-text">Tenant Information</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_Gurantor">
                                    <span class="nav-link-text badge-on-text">Gurantor Information</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_Contract">
                                    <span class="nav-link-text badge-on-text">Preview Contract</span>
                                </a>
                            </li>
                        </ul>

                    </header>
                    <div class="taskboard-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="container-fluid">
                                <div class="contractform_mainContainer">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab_boards">
                                            <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> General
                                                    Contract</div>

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Type <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <select class="form-control select2">
                                                                            <option disabled selected value="">Please
                                                                                Select...</option>
                                                                            <option value="Student">Student</option>
                                                                            <option value="Professional">Professional
                                                                            </option>

                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Agreement Date <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input
                                                                            class="form-control customdataPicker flatpickr-input"
                                                                            value="10, july 2024" type="text" name=""
                                                                            placeholder="Select Date"
                                                                            readonly="readonly">
                                                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Contract Start Date
                                                                            <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input
                                                                            class="form-control customdataPicker flatpickr-input"
                                                                            value="10, july 2024" type="text" name=""
                                                                            placeholder="Select Date"
                                                                            readonly="readonly">
                                                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_team">
                                            <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> Property
                                                    Information</div>

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">

                                                            <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Property Address <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="1-7 Union Street">
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Property Type <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <select class="form-control select2">
                                                                            <option disabled selected value="">Please
                                                                                Select...</option>
                                                                            <option value="Building">Building</option>
                                                                            <option value="Apartment">Apartment</option>
                                                                            <option value="House">House</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <div class="form-label">
                                                                            <label>Property Information <span
                                                                                    class="requiredFields_label">*</span></label>
                                                                        </div>
                                                                        <textarea class="form-control" rows="4"
                                                                            placeholder="Write here..."></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <div class="form-label">
                                                                            <label>Property Utility Information <span
                                                                                    class="requiredFields_label">*</span></label>
                                                                        </div>
                                                                        <textarea class="form-control" rows="4"
                                                                            placeholder="Write here..."></textarea>
                                                                    </div>
                                                                </div>

                                                               
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">landlord Name <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">landlord Address <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab_payment">
                                            <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> Payment
                                                    Information</div>

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Deposite <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="170">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Rent ( per week ) <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="120">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Utility ( per week ) <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="120">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Term Length <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="120">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Installments <span class="requiredFields_label">*</span></label>
                                                                            <select class="form-control select2">
                                                                                <option disabled selected value="">Please Select...</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Installment Remaining After First Payment <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="1">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Rent Total (Full Term) 
                                                                            <span
                                                                                class="requiredFields_label">*</span>
                                                                                 <button type="button" class="infotooltipbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Term Length *  Rent per week (Automatic Calculation) ">
                                                                                <iconify-icon icon="ci:info"></iconify-icon></button>
                                                                            </label>
                                                                        <input type="text" class="form-control"
                                                                            value="1">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Rental Payments <span
                                                                                class="requiredFields_label">*</span>
                                                                                <button type="button" class="infotooltipbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Rent Total / Installments (Automatic Calculation) ">
                                                                                <iconify-icon icon="ci:info"></iconify-icon></button></label>
                                                                        <input type="text" class="form-control"
                                                                            value="0">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Utility Total (Full Term) <span
                                                                                class="requiredFields_label">*</span>
                                                                                <button type="button" class="infotooltipbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Term Length *  Utility per week (Automatic Calculation) ">
                                                                                <iconify-icon icon="ci:info"></iconify-icon></button></label>
                                                                        <input type="text" class="form-control"
                                                                            value="0">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Utility Payments <span
                                                                                class="requiredFields_label">*</span>
                                                                                <button type="button" class="infotooltipbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Utility Total / Installments (Automatic Calculation) ">
                                                                                <iconify-icon icon="ci:info"></iconify-icon></button></label>
                                                                        <input type="text" class="form-control"
                                                                            value="0">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">First Payment Date
                                                                            <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input
                                                                            class="form-control customdataPicker flatpickr-input"
                                                                            value="10, july 2024" type="text" name=""
                                                                            placeholder="Select Date"
                                                                            readonly="readonly">
                                                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Payment Reference Number
                                                                            <span
                                                                                class="requiredFields_label">*</span></label>
                                                                        <input
                                                                            class="form-control customdataPicker flatpickr-input"
                                                                            value="10, july 2024" type="text" name=""
                                                                            placeholder="Select Date"
                                                                            readonly="readonly">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Payments Dates <span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="8th day of each month">
                                                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Starting From  <span
                                                                                class="requiredFields_label">*</span>
                                                                                <button type="button" class="infotooltipbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Set to blank if using Custom Dates for payment dates field ">
                                                                                <iconify-icon icon="ci:info"></iconify-icon></button>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="Starting from the 7th of July 2024">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_Tenant">
                                            <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> Tenant
                                                    Information</div>

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                            <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Full Name<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Email Address<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Address<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant NINO<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Student No<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant University and Course<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tenant Number<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="8978566758">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab_Gurantor">
                                            <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> Gurantor
                                                    Information</div>

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                            <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Gurantor Full Name<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Gurantor Email Address<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Gurantor Address<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Gurantor Number<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                              

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab_Contract">
                                            <div class="contractfullpageform_container">

                                                <div class="formstartcontainer">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="emailtosendto_center">
                                                            <div class="row">
                                                            <div class="col-lg-12">
                                                                    <!-- <div class="form-group">
                                                                        <label class="form-label">Email to Send to<span
                                                                                class="requiredFields_label">*</span>
                                                                              </label>
                                                                        <input type="email" class="form-control"
                                                                            value="">
                                                                    </div> -->
                                                                    <div class="preview_doc_container">
                                                                        <img src="dist/img/newimages/preview-doc.png" alt="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="contractSubmit_container">
                                                                    <button id="sendBtn" type="button" class="sendBtn_common_main" data-bs-toggle="modal" data-bs-target="#previewcontract">
                                                                        <img src="dist/img/newimages/sendicon.png" alt="">
                                                                       Preview Contract
                                                                    </button>
                                                                    </div>
                                                                </div>
                                                             
                                                              

                                                            </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="canvasFooterContainer fixed-bottom_buttoncontainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter" data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div> -->
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- invoice preview  modal start-->
<div id="previewcontract" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Preview Contract</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">
                <div class="invoice_wrap car-invoice">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="car-header-img" id="invo_header">
					<div class="invoice-logo-content invoice-logo-content-car ">
						<div class="invoice-logo width-70">
							<a href="car_booking.html" class="logo-car"><img src="dist/img/newimages/logo-dark.png" alt="this is a invoice logo"></a>
						
						</div>
						<div class="invo-head-content width-30">
							<h1 class="car-txt">Contract</h1>
                            <div class="invo-head-wrap invoi-date-wrap pt-10">
								<div class="font-md color-light-black">Contract ID:</div>
								<div class="font-md-grey color-grey">#DI56789</div>
							</div>
							<div class="invo-head-wrap invoi-date-wrap ">
								<div class="font-md color-light-black">Invoice Date:</div>
								<div class="font-md-grey color-grey">15/12/2024</div>
							</div>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start -->
				<section class="agency-service-content car-invoice-content" id="car_booking">
					<div class="container">
					
						<!--Hire details start -->
						<div class="money-send-title-wrap hire-mt pt-40">
							<h2 class="d-none">Hidden</h2>
							<h3 class="font-lg color-dark-yellow transfer-title">General Contract</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Type:</span>
										<span class="font-sm">Student</span>
									</div>
									
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Contract Start Date:</span>
										<span class="font-sm">10, july 2024</span>
									</div>
								</div>
								<div class="mon-send-right-data">
                                <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Agreement Date:</span>
										<span class="font-sm">10, july 2024</span>
									</div>
									
								</div>
							</div>
						</div>
						<!--Hire details end -->
						<!--Drivers info details start -->
						<div class="money-send-title-wrap pt-40">
							<h3 class="font-lg color-dark-yellow transfer-title ">Property Information</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Property Address:</span>
										<span class="font-sm">1-7 Union Street</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">landlord Name :</span>
										<span class="font-sm">Charlie Chaplin</span>
									</div>
								</div>

                                <div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Property Type :</span>
										<span class="font-sm">Apartment</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">landlord Address :</span>
										<span class="font-sm">1-7 Union Street</span>
									</div>
								</div>
								
							</div>

                            <div class="mon-send-right-data">
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Property Information:</span>
										<span class="font-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, saepe?</span>
									</div>
								</div>

                                <div class="mon-send-right-data">
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Property Utility Information:</span>
										<span class="font-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, saepe?</span>
									</div>
								</div>

						</div>
						<!--Drivers info details end -->

                        <div class="money-send-title-wrap pt-40">
							<h3 class="font-lg color-dark-yellow transfer-title ">Payment Information</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Deposite:</span>
										<span class="font-sm">170</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Utility ( per week ) :</span>
										<span class="font-sm">C120</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Installments :</span>
										<span class="font-sm">5</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Rent Total (Full Term) :</span>
										<span class="font-sm">1</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Utility Total (Full Term) :</span>
										<span class="font-sm">0</span>
									</div>

                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">First Payment Date :</span>
										<span class="font-sm">10, july 2024</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Payments Dates :</span>
										<span class="font-sm">8th day of each month</span>
									</div>

                                    
								</div>

                                <div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Rent ( per week ) :</span>
										<span class="font-sm">120</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Term Length :</span>
										<span class="font-sm">120</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Installment Remaining After First Payment :</span>
										<span class="font-sm">1</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Rental Payments :</span>
										<span class="font-sm">0</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Utility Payments :</span>
										<span class="font-sm">0</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Payment Reference Number :</span>
										<span class="font-sm">654567656</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Starting From :</span>
										<span class="font-sm">Starting from the 7th of July 2024</span>
									</div>
								</div>
								
							</div>

                            

						</div>


                        <div class="money-send-title-wrap pt-40">
							<h3 class="font-lg color-dark-yellow transfer-title ">Tenant Information</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Full Name:</span>
										<span class="font-sm">Danial Craig</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Address :</span>
										<span class="font-sm">Lorem ipsum dolor sit amet consectetur.</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Student No :</span>
										<span class="font-sm">#ST456</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Number :</span>
										<span class="font-sm">986586786</span>
									</div>
                                   
								</div>

                                <div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant Email Address :</span>
										<span class="font-sm">Danial@gmail.com</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant NINO :</span>
										<span class="font-sm"></span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Tenant University and Course :</span>
										<span class="font-sm">Lorem, ipsum dolor.</span>
									</div>
                                   
								</div>
								
							</div>

                            

						</div>

                        <div class="money-send-title-wrap pt-40">
							<h3 class="font-lg color-dark-yellow transfer-title ">Gurantor Information</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Gurantor Full Name:</span>
										<span class="font-sm">Danial Craig</span>
									</div>
                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Gurantor Address :</span>
										<span class="font-sm">Lorem ipsum dolor sit amet consectetur.</span>
									</div>
                                    
                                   
								</div>

                                <div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Gurantor Email Address :</span>
										<span class="font-sm">danialc@jampack.com</span>
									</div>

                                    <div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Gurantor Number :</span>
										<span class="font-sm">9875768676</span>
									</div>
                                  
								</div>
								
							</div>

                            

						</div>


					</div>
					
				</section>
				<!--Invoice content end  -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content end -->
			</section>
			<!--Bottom content end here -->
		</div>
	</div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- invoice preview  modal end-->

<?php include('footer.php') ?>




	<script src="invoice-assets/js/jspdf.min.js"></script>
	<script src="invoice-assets/js/html2canvas.min.js"></script>
	<script src="invoice-assets/js/custom.js"></script>
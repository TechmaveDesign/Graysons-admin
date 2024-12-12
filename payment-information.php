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

<style>
    .generate-invoice-btn {
        display: none;
        align-items: center;
        justify-content: center;

    }

    .inpTH_custom {
        padding: 0px !important;
        background: white;
        border-radius: 0px !important;
        border: 1px solid rgb(223, 229, 238) !important;
        color: #748594;
    }

    .inpTH_custom:checked {
        border-color: rgb(248, 116, 24) !important;
    }
</style>

<div class="container-xxl">
    <!-- Page Header -->
    <!-- <div class="hk-pg-header  pt-7">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Welcome back to your Admin Panel, where every detail of your operations awaits your command.</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i
													data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes"
											value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
					
				</div> -->
    <!-- /Page Header -->

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
          
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Payment Information</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="all-rent-invoices.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                      
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>
                    <div class="contact-body">

                        

                        <div class="nicescroll-bar">
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                <div class="contractfullpageform_container">
                                                <div class="add-users-modal-body-table-header text-headline-6"> 
                                                 Tenant Payment Information
                                                </div>

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
                                                                                <option disabled  value="">Please Select...</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option selected value="7">7</option>
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
                            </div>

                           

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<?php include('footer.php') ?>


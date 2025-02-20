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
           
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Stripe Payment Details</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="stripe-rent-advance.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        <!-- <div class="ActionBtn generate-invoice-btn p-0" id="generateInvoiceBtn">
                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                            <iconify-icon icon="lucide:send"></iconify-icon> Send Invoice
                            </button>
                        
                            <div class="form-check checkboxTask">
                                <input id="checkboxSendQuickBook" checked class="form-check-input" type="checkbox" value="">
                                <label for="checkboxSendQuickBook" class="aform-check-label">Send to Quick Book</label>
                            </div>
                        </div> -->

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
                    <div class="contact-body">

                        <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                            <button class="scroll-btn prev" type="button">
                                <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                            </button>

                            <ul class="nav SubTabInvoice nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#landlordinv">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Details</span>
                                        </div>
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#TenantInv">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Tenant</span>

                                        </div>
                                    </a>
                                </li> -->

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#supplierInv">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Add Note</span>

                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <button class="scroll-btn next" type="button">
                                <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                            </button>

                        </div>

                        <div class="nicescroll-bar">

                            <div class="tab-content notpMargin_tab">
                                <div class="tab-pane fade show active" id="landlordinv">
                                  <div class="fullwidthTabInner_content_container">
                                    <div class="contact-list-view">
                                        <div class="paymentTopHead">
                                            <div class="paymentAmountCharged">
                                                <h6  class="PaymentTitle"><iconify-icon icon="material-symbols:payments-rounded"></iconify-icon> Payment</h6>
                                                <div class="amountCharged">
                                                  <h2 class="chargedAmount"><iconify-icon icon="fa:eur"></iconify-icon> 75.00 <span>eur</span></h2> <span class="statusSuccess">Succeeded <iconify-icon icon="ic:round-check"></iconify-icon></span>
                                                </div>
                                                <h6 class="charged">Charged to <span class="CustomerName">Aurelia</span></h6>
                                            </div>
                                            <div class="RefundAction">
                                                <button class="btn RefundBtn" type="button" data-bs-toggle="modal" data-bs-target="#AddHubEvent"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="timelineBox">
                                                    <h5 class="SecTitleOP">Timeline</h5>
                                                    <div class="timeline">
                                                        <div class="event">
                                                        <iconify-icon icon="ei:check"></iconify-icon>
                                                            <div>
                                                                <p>Payment succeeded</p>
                                                                <span>Feb 6, 2025, 7:13 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="event">
                                                        <iconify-icon icon="material-symbols-light:payments-outline"></iconify-icon>
                                                            <div>
                                                                <p>Payment started</p>
                                                                <span>Feb 6, 2025, 7:13 PM</span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="paymentBreakDown">
                                                    <ul class="paymentDetail">
                                                        <li>
                                                            <div class="MainPayment">
                                                                <h5>Payment breakdown</h5>
                                                                <p>Charge was received in EUR, but the funds will be transferred to you in CAD.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <p class="paymentBreakTitle">Payment amount
                                                            (€1.00 EUR = $1.45698 CAD)</p>
                                                            <p class="paymentValue">
                                                            €75.00 EUR
                                                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                                            $109.27 CAD
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="paymentBreakTitle">Stripe processing fees</p>
                                                            <p class="paymentValue">
                                                            - $4.34 CAD
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="paymentBreakTitle netTotal">Net amount</p>
                                                            <p class="paymentValue netTotal">$104.93 CAD</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="paymentMethodBox">
                                                  <h5 class="SecTitleOP">Payment method</h5>
                                                  <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="paymentMethodDetail">
                                                            <li>
                                                                <h6 class="methodTitle">ID</h6>
                                                                <h6 class="methodValue">card_1QeFanILph8cUTsEG6E2Z2z8</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Number</h6>
                                                                <h6 class="methodValue">•••• 4444</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Fingerprint</h6>
                                                                <h6 class="methodValue">LKcbtrNGlYs3xlEh</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Expires</h6>
                                                                <h6 class="methodValue">12 / 2034</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Type</h6>
                                                                <h6 class="methodValue">Mastercard credit card</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Issuer</h6>
                                                                <h6 class="methodValue">CIAGROUP</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul class="paymentMethodDetail">
                                                            <li>
                                                                <h6 class="methodTitle">Address</h6>
                                                                <h6 class="methodValue">No address</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="methodTitle">Origin</h6>
                                                                <h6 class="methodValue">United States
                                                                </h6>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="paymentDetailBox">
                                                <h5 class="SecTitleOP">Payment Detail</h5>
                                                <ul class="PaymentDetailList">
                                                    <li>
                                                        <h6>Payment ID</h6>
                                                        <div class="paymentId">
                                                            <iconify-icon icon="solar:copy-linear" id="copyIcon" style="cursor: pointer;"></iconify-icon> 
                                                            <span id="paymentText">pi_3QpVMAILph8cUTsE1VrwgDFp</span>
                                                            <span id="copiedMessage" style="display: none; color: green; margin-left: 5px;">Copied!</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <h6>Payment method</h6>
                                                        <div class="paymentMethod">
                                                        <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                                        •••• 46789
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <h6>Last updated</h6>
                                                        <div class="paymentMethod">
                                                          <p>Feb 6, 7:13 PM</p>
                                                        </div>

                                                    </li>
                                                </ul>

                                                </div>

                                                <div class="paymentDetailBox">
                                                <h5 class="SecTitleOP">Customer</h5>
                                                <ul class="PaymentDetailList">
                                                    <li>
                                                        <h6>Customer ID</h6>
                                                        <div class="paymentId">
                                                            <iconify-icon icon="solar:copy-linear" id="copyIcon" style="cursor: pointer;"></iconify-icon> 
                                                            <span id="paymentText">cus_RXKFz0qmN47Zq4</span>
                                                            <span id="copiedMessage" style="display: none; color: green; margin-left: 5px;">Copied!</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <h6>Name</h6>
                                                        <div class="paymentMethod">
                                                         <p>Aurelia</p> 
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <h6>Email</h6>
                                                        <div class="paymentMethod">
                                                          <p>Aurelia@gmail.com</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <h6>Phone</h6>
                                                        <div class="paymentMethod">
                                                          <p>865234567</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <h6>Country</h6>
                                                        <div class="paymentMethod">
                                                          <p>--</p>
                                                        </div>

                                                    </li>
                                                </ul>

                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                                
                                <div class="tab-pane fade" id="supplierInv">
                                <div class="fullwidthTabInner_content_container">
                                    <div class="contact-list-view">

                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="title title-lg mb-0"><span>All Notes</span></div>

                                            </div>

                                            <div class="comment-block">

                                                <div class="card card-border note-block">
                                                    <div class="card-body">

                                                        <div class="media align-items-center">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                        alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="noteAuthor_title">
                                                                    Martin Luther</div>
                                                                <div class="NoteTiming">
                                                                    9 Apr, 20, 7:14 AM
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="NoteDescription">@<a href="#"
                                                                class="fw-medium">Charlie
                                                                Darvin</a> Tenant was
                                                            very interested in the
                                                            property, appreciating the
                                                            layout and natural light.
                                                            They need two bedrooms, a
                                                            workspace, and a parking
                                                            spot. They have a small dog
                                                            and prefer to move in by the
                                                            end of next month. Awaiting
                                                            their decision by the end of
                                                            the week.</p>
                                                    </div>
                                                </div>
                                                <div class="card card-border note-block ">
                                                    <div class="card-body">

                                                        <div class="media align-items-center">
                                                            <div class="media-head">
                                                                <div class="avatar avatar-xs avatar-rounded">
                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                        alt="user" class="avatar-img">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="noteAuthor_title">
                                                                    Katherine Jones
                                                                </div>
                                                                <div class="NoteTiming">
                                                                    8 Apr, 20, 5:30 PM
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="NoteDescription">@<a href="#" class="fw-medium">Martin
                                                                Luther</a> Viscosity
                                                            ratio for "Appear view" link
                                                            text is 3.7:1 which is less
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="separator separator-light">
                                                </div>

                                                <div class="AddNoteEnuSection" id="AddNote">
                                                    <div class="form-group">
                                                        <label class="form-label">Note
                                                            header</label>
                                                        <input class="form-control" type="text" name=""
                                                            placeholder="Add Title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Add
                                                            Comment</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                    <div class="NoteAction_container">
                                                        <div class="sendEnquiryNote_container">
                                                            <div class="addto_todolist">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="customCheckList-todo">
                                                                    <label class="form-check-label"
                                                                        for="customCheckList-todo">
                                                                        Add to ToDo List
                                                                        <span class="done-strikethrough"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sendEnquiryNote_container setAlert_container">
                                                            <div class="addto_todolist">
                                                                <div class="form-check">
                                                                    <input type="checkbox"
                                                                        class="form-check-input setAlertInput">
                                                                    <label class="form-check-label"
                                                                        for="customCheckList-todo">
                                                                        Set As Alert
                                                                        <span class="done-strikethrough"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="Showing_departmentand_users" style="display: none;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select
                                                                        Department</label>
                                                                    <select class="form-control select2"
                                                                        id="selectDepartment">
                                                                        <option disabled selected value="">
                                                                            Please
                                                                            Select...
                                                                        </option>
                                                                        <option value="Account Department">
                                                                            Account
                                                                            Department
                                                                        </option>
                                                                        <option value="HR Department">
                                                                            HR
                                                                            Department
                                                                        </option>
                                                                        <option value="Contract Department">
                                                                            Contract
                                                                            Department
                                                                        </option>
                                                                        <option value="Lettings Department">
                                                                            Lettings
                                                                            Department
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select
                                                                        Users</label>
                                                                    <select class="form-control select2"
                                                                        id="selectUser">
                                                                        <option disabled selected value="">
                                                                            Please
                                                                            Select...
                                                                        </option>
                                                                        <option value="John Doe">
                                                                            John Doe
                                                                        </option>
                                                                        <option value="Jane Smith">
                                                                            Jane Smith
                                                                        </option>
                                                                        <option value="Alice Johnson">
                                                                            Alice
                                                                            Johnson
                                                                        </option>
                                                                        <option value="Robert Brown">
                                                                            Robert Brown
                                                                        </option>
                                                                        <option value="Michael Williams">
                                                                            Michael
                                                                            Williams
                                                                        </option>
                                                                        <option value="Emily Davis">
                                                                            Emily Davis
                                                                        </option>
                                                                        <option value="David Wilson">
                                                                            David Wilson
                                                                        </option>
                                                                        <option value="Sophia Martinez">
                                                                            Sophia
                                                                            Martinez
                                                                        </option>
                                                                        <option value="James Anderson">
                                                                            James
                                                                            Anderson
                                                                        </option>
                                                                        <option value="Olivia Taylor">
                                                                            Olivia
                                                                            Taylor
                                                                        </option>
                                                                        <option value="Chris Thomas">
                                                                            Chris Thomas
                                                                        </option>
                                                                        <option value="Emma Harris">
                                                                            Emma Harris
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="submitnote_container">
                                                        <button id="sendBtn2" type="button"
                                                            class="sendBtn_common_main addenun_noteBtn">
                                                            <iconify-icon icon="mynaui:send">
                                                            </iconify-icon>
                                                            Send Comment
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- <div class="AssignTasks_container">
                                                                                    <h2>Add Task</h2>
                                                                                </div> -->

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



<!-- add task code modal-->
<div id="AddHubEvent" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<form action="" method="post" id="wizardForm">
			<div class="modal-content">

				<div class="ModalheaderArea">
					<h5 class="mb-4">Refund payment</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>

				</div>

				<div class="modal-body">

					<div class="taskAddContainer">
						
						<div class="step" id="step1">
							<div class="wizardstep_innerContainer">
								<div class="RefundHeader">
                                    <iconify-icon icon="fe:info"></iconify-icon>
									<p> Refunds take 5-10 days to appear on a customer's statement. Stripe's fees for the original payment won't be returned, but there are no additional fees for the refund.</p>
								</div>

								<div class="row mt-4">
									<div class="col-sm-12">
										<div class="form-group">
											<label class="form-label">Refund Amount</label>
											<input class="form-control" type="text" value="£290">
										</div>
									</div>

									<div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Reason</label>
                                            <select name="" class="form-control select2" id="reasonSelect">
                                                <option value="" selected>Select a Reason</option>
                                                <option value="Duplicate">Duplicate</option>
                                                <option value="Fraudulent">Fraudulent</option>
                                                <option value="Requested by customer">Requested by customer</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="reason" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-label">Add a reason for this refund.</label>
                                            <textarea class="form-control" type="text"></textarea>
                                        </div>
                                    </div>

								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container gap-2">
                    <button type="submit" class="btn-secondary canvasSubmit_button commonCanvas_buttonFooter" style="display: inline-block;">Cancel</button>
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter" style="display: inline-block;"><iconify-icon icon="lets-icons:refund-forward"></iconify-icon> Refund</button>
                    </div>
                </div>

			</div>
		</form>
	</div>
</div>
<!-- add task modal end-->
<?php include('footer.php') ?>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sendInvoiceBtn = document.querySelector('.ActionBtn .themeBtn');
        const checkboxes = document.querySelectorAll('table input[type="checkbox"]');
        sendInvoiceBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action
            let isChecked = false;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });
            if (isChecked) {
                Swal.fire({
                    icon: 'success',
                    title: 'Invoice Sent',
                    text: 'Invoice sent to Quick Book successfully!',
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Invoice Selected',
                    text: 'First, you have to select an invoice to send.',
                });
            }
        });
    });
</script> -->

<!-- table check functionality -->
<script>
    $(document).ready(function() {
        $('.selectAll').click(function() {
            $('.row-checkbox').prop('checked', this.checked);
            toggleGenerateInvoiceButton();
        });
        $('.row-checkbox').change(function() {
            if (!this.checked) {
                $('.selectAll').prop('checked', false);
            }
            if ($('.row-checkbox:checked').length === $('.row-checkbox').length) {
                $('.selectAll').prop('checked', true);
            }
            toggleGenerateInvoiceButton();
        });

        function toggleGenerateInvoiceButton() {
            if ($('.row-checkbox:checked').length > 0) {
                $('#generateInvoiceBtn').show().css("display", "flex");
            } else {
                $('#generateInvoiceBtn').hide();
            }
        }
      
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('.voidBtn').forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default link behavior

                if (button.classList.contains('clicked')) {
                    // If the clicked class is present, show the Unvoid alert
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to unvoid this invoice?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, unvoid it!',
                        cancelButtonText: 'No, keep it'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.classList.remove('clicked'); // Remove the clicked class
                            Swal.fire(
                                'UnVoid!',
                                'The invoice has been unVoid.',
                                'success'
                            );
                        }
                    });
                } else {
                    // If the clicked class is not present, show the Void alert
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to void this invoice?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, void it!',
                        cancelButtonText: 'No, keep it'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.classList.add('clicked'); // Add the clicked class
                            Swal.fire(
                                'Void!',
                                'The invoice has been Void.',
                                'success'
                            );
                        }
                    });
                }
            });
        });
    });
</script>

<!-- input lenthy content show js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('mouseenter', function() {
            var inputValue = $(this).siblings('.refuge-collection-input').val();
            $(this).attr('data-bs-original-title', inputValue).tooltip('show');
        });
    });
</script>
<!-- input lenthy content show js end-->

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sendInvoiceBtn = document.querySelector('.ActionBtn .themeBtn');
        const checkboxes = document.querySelectorAll('table input[type="checkbox"]');

        sendInvoiceBtn.addEventListener('click', function (event) {
            event.preventDefault(); 
            let isChecked = false;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (isChecked) {
                Swal.fire({
                    title: 'Select Billing Option',
                    text: 'Who should be billed?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Bill to Landlord',
                    cancelButtonText: 'Bill to Tenant',
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'swal2-confirm btn btn-primary',
                        cancelButton: 'swal2-cancel btn btn-secondary'
                    }
                }).then(result => {
                    if (result.isConfirmed) {
                     
                        window.location.href = 'tickets-invoices.php';
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                       
                        window.location.href = 'tenant-damage-deposits.php';
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Invoice Selected',
                    text: 'First, you have to select an invoice to send.',
                });
            }
        });
    });
</script> -->

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sendInvoiceBtn = document.querySelector('.ActionBtn .themeBtn');
        const checkboxes = document.querySelectorAll('table input[type="checkbox"]');

        sendInvoiceBtn.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default action
            let isChecked = false;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (isChecked) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to approve this invoice and send the payment link to the tenant?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, approve it',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'swal2-confirm btn btn-primary',
                        cancelButton: 'swal2-cancel btn btn-secondary'
                    }
                }).then(result => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Approved',
                            text: 'The invoice has been approved, and the payment link has been sent to the tenant via mail.',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'swal2-confirm btn btn-primary'
                            }
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Invoice Selected',
                    text: 'First, you have to select an invoice to send.',
                });
            }
        });
    });
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sendInvoiceBtn = document.querySelector('.ActionBtn .themeBtn');
        const checkboxes = document.querySelectorAll('table input[type="checkbox"]');

        sendInvoiceBtn.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default action
            let isChecked = false;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (isChecked) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to generate the invoice?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, generate it',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'swal2-confirm btn btn-primary',
                        cancelButton: 'swal2-cancel btn btn-secondary'
                    }
                }).then(result => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Invoice Generated',
                            text: 'The invoice has been successfully generated.',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'swal2-confirm btn btn-primary'
                            }
                        }).then(() => {
                            // Redirect to generated-invoice.php
                            window.location.href = 'generated-invoice.php';
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Invoice Selected',
                    text: 'First, you have to select an invoice to generate.',
                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
    $('#reasonSelect').on('change', function() {
        if ($(this).val() === 'Other') {
            $('#reason').show(); // Show the reason div
        } else {
            $('#reason').hide(); // Hide the reason div
        }
    });
});

</script>

<script>
    document.getElementById("copyIcon").addEventListener("click", function () {
        const text = document.getElementById("paymentText").innerText;
        const copiedMessage = document.getElementById("copiedMessage");

        navigator.clipboard.writeText(text).then(() => {
            copiedMessage.style.display = "inline"; 
            
            setTimeout(() => {
                copiedMessage.style.display = "none";
            }, 2000); // Hide message after 2 seconds
        }).catch(err => {
            console.error("Error copying text: ", err);
        });
    });
</script>


<script>
        $(document).ready(function() {
            // Toggle the visibility of Showing_departmentand_users based on the checkbox
            $('#customCheckList-todo').change(function() {
                if ($(this).is(':checked')) {
                    $('.Showing_departmentand_users').slideDown(); // Show the section
                } else {
                    $('.Showing_departmentand_users').slideUp(); // Hide the section
                }
            });
            // Handle the Send Note button click
            $('#sendBtn2').click(function() {
                var selectedDepartment = $('#selectDepartment').val();
                var selectedUser = $('#selectUser').val();
                if (selectedDepartment && selectedUser) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Note Sent!',
                        text: `Note sent to ${selectedDepartment} and ${selectedUser}.`
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Missing Information',
                        text: 'Please select both a department and a user.'
                    });
                }
            });
        });
    </script>

    <!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  end
  -------------------------------------------------------->

    <!-- ****************************
  Note set as alert confirmation popup js start
****************************** -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.querySelector('.setAlertInput');
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    Swal.fire({
                        html: `
                    <div style="text-align: center;">
                        <div class="swalalert_custom_icon">
                            <iconify-icon icon="hugeicons:alert-01"></iconify-icon>
                        </div>
                        <h2 class="Swal_CustomTitle">Are You Sure You Want to Set This Note as an Alert?</h2>
                    </div>`,
                        showCancelButton: true,
                        confirmButtonText: 'Yes, set it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true,
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Alert Set!',
                                text: 'The note has been successfully set as an alert.',
                                icon: 'success'
                            });
                        } else if (result.isDismissed) {
                            checkbox.checked =
                                false; // Uncheck the checkbox if the user cancels
                        }
                    });
                }
            });
        });
    </script>
    <!-- ****************************
  Note set as alert confirmation popup js end
****************************** -->
<script>
        $(".department_select").select2({
            placeholder: "Select a Department"
        })
        $(".DepartmentUser_select").select2({
            placeholder: "Select a User"
        })
    </script>

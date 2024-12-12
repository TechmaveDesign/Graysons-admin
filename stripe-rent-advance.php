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
                                    <h1>Stripe (Rent Advance)</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
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
                                            <span class="nav-link-text">Received Payments</span>
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
                                            <span class="nav-link-text">Refund Payments</span>

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

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Tenant Name</th>
                                            <th>Landlord Name</th>
                                            <th>Property</th>
                                            <th>Payment Ref. No.</th>
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Description</th>
                                            <th>Amount Paid</th>
                                            <th>Stripe Fees</th>
                                            <th>Net Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Jimmy Ken</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-23456</td>
                                          <td>
                                           TXN1ABC567892
                                          </td>
                                          <td>Dec 12,2024 4:21 PM</td>
                                          <td>
                                          <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#00579f"></path><g fill="#fff" fill-rule="nonzero"><path d="M13.823 19.876H11.8l1.265-7.736h2.023zm7.334-7.546a5.036 5.036 0 0 0-1.814-.33c-1.998 0-3.405 1.053-3.414 2.56-.016 1.11 1.007 1.728 1.773 2.098.783.379 1.05.626 1.05.963-.009.518-.633.757-1.216.757-.808 0-1.24-.123-1.898-.411l-.267-.124-.283 1.737c.475.213 1.349.403 2.257.411 2.123 0 3.505-1.037 3.521-2.641.008-.881-.532-1.556-1.698-2.107-.708-.354-1.141-.593-1.141-.955.008-.33.366-.667 1.165-.667a3.471 3.471 0 0 1 1.507.297l.183.082zm2.69 4.806.807-2.165c-.008.017.167-.452.266-.74l.142.666s.383 1.852.466 2.239h-1.682zm2.497-4.996h-1.565c-.483 0-.85.14-1.058.642l-3.005 7.094h2.123l.425-1.16h2.597c.059.271.242 1.16.242 1.16h1.873zm-16.234 0-1.982 5.275-.216-1.07c-.366-1.234-1.515-2.575-2.797-3.242l1.815 6.765h2.14l3.18-7.728z"></path><path d="M6.289 12.14H3.033L3 12.297c2.54.641 4.221 2.189 4.912 4.049l-.708-3.556c-.116-.494-.474-.633-.915-.65z"></path></g></g></svg>
                                           •••• 4345
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£300</td>
                                          <td>£10</td>
                                          <td>£290</td>
                                          <td><span class="badge badge-soft-success  my-1  me-2">Succeeded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#AddHubEvent"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="Refund Payment"><span
                                                        class="icon"><span
                                                            class="feather-icon"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon></span></span></a>
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Shon
                                                            William</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-7890</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 12,2024 1:21 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 4444
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£100</td>
                                          <td>£10</td>
                                          <td>£90</td>
                                          <td><span class="badge badge-soft-success  my-1  me-2">Succeeded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#AddHubEvent"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="Refund Payment"><span
                                                        class="icon"><span
                                                            class="feather-icon"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon></span></span></a>
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Charlie
                                                            Chaplin</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-6789</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 12,2024 1:21 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 4444
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£100</td>
                                          <td>£10</td>
                                          <td>£90</td>
                                          <td><span class="badge badge-soft-success  my-1  me-2">Succeeded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#AddHubEvent"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="Refund Payment"><span
                                                        class="icon"><span
                                                            class="feather-icon"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon></span></span></a>
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Kimzo Zen</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Limo Hen</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-5678</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 13,2024 1:51 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 46789
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                          <td>£400</td>
                                          <td>£35</td>
                                          <td>£365</td>
                                          <td><span class="badge badge-soft-warning  my-1  me-2">Processing</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#AddHubEvent"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="Refund Payment"><span
                                                        class="icon"><span
                                                            class="feather-icon"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon></span></span></a>
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                      <td>
                                       <a href="view-user-details.php">
                                            <div class="media align-items-center">
                                                <div class="media-head me-2">
                                                    <div
                                                        class="avatar avatar-xs avatar-rounded">
                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                            alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <span class="d-block text-high-em">Kimzo Zen</span>
                                                </div>
                                            </div>
                                        </a>
                                      </td>
                                      <td>Keychain Highma</td>
                                      <td>
                                        <div class="LongMesage_container"
                                            style="position: relative;">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                            <div class="custom-tooltip"></div>
                                        </div>
                                      </td>
                                      <td>REF-3456</td>
                                      <td>
                                       TXN1ABC146789
                                      </td>
                                      <td>Dec 13,2024 2:51 PM</td>
                                      <td>
                                       <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                       •••• 45678
                                      </td>
                                      <td>
                                        Advance Rent
                                      </td>
                                      <td>£500</td>
                                      <td>£35</td>
                                      <td>£465</td>
                                      <td><span class="badge badge-soft-danger  my-1  me-2">Payment Failed</span></td>
                                    
                                      <td>
                                      <div class="d-flex align-items-center ActionDropdown">
                                        <div class="d-flex">

                                            <a href="#"
                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                data-bs-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-bs-original-title="View Payment Details"><span
                                                    class="icon"><span
                                                        class="feather-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path
                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3">
                                                            </circle>
                                                        </svg></span></span></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#AddHubEvent"
                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                data-bs-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-bs-original-title="Refund Payment"><span
                                                    class="icon"><span
                                                        class="feather-icon"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon></span></span></a>
                                                        <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                        </div>
                                    </div>
                                           
                                        </td>
                                    </tr>

                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                                    </div>

                                </div>

                                
                                <div class="tab-pane fade" id="supplierInv">
                                <div class="fullwidthTabInner_content_container">
                                    <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Tenant Name</th>
                                            <th>Landlord Name</th>
                                            <th>Property</th>
                                            <th>Payment Ref. No.</th>
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Description</th>
                                            <th>Amount Paid</th>
                                            <th>Stripe Fees</th>
                                            <th>Net Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Jimmy Ken</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-23456</td>
                                          <td>
                                           TXN1ABC567892
                                          </td>
                                          <td>Dec 12,2024 4:21 PM</td>
                                          <td>
                                          <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#00579f"></path><g fill="#fff" fill-rule="nonzero"><path d="M13.823 19.876H11.8l1.265-7.736h2.023zm7.334-7.546a5.036 5.036 0 0 0-1.814-.33c-1.998 0-3.405 1.053-3.414 2.56-.016 1.11 1.007 1.728 1.773 2.098.783.379 1.05.626 1.05.963-.009.518-.633.757-1.216.757-.808 0-1.24-.123-1.898-.411l-.267-.124-.283 1.737c.475.213 1.349.403 2.257.411 2.123 0 3.505-1.037 3.521-2.641.008-.881-.532-1.556-1.698-2.107-.708-.354-1.141-.593-1.141-.955.008-.33.366-.667 1.165-.667a3.471 3.471 0 0 1 1.507.297l.183.082zm2.69 4.806.807-2.165c-.008.017.167-.452.266-.74l.142.666s.383 1.852.466 2.239h-1.682zm2.497-4.996h-1.565c-.483 0-.85.14-1.058.642l-3.005 7.094h2.123l.425-1.16h2.597c.059.271.242 1.16.242 1.16h1.873zm-16.234 0-1.982 5.275-.216-1.07c-.366-1.234-1.515-2.575-2.797-3.242l1.815 6.765h2.14l3.18-7.728z"></path><path d="M6.289 12.14H3.033L3 12.297c2.54.641 4.221 2.189 4.912 4.049l-.708-3.556c-.116-.494-.474-.633-.915-.65z"></path></g></g></svg>
                                           •••• 4345
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£300</td>
                                          <td>£10</td>
                                          <td>£290</td>
                                          <td><span class="badge badge-soft-secondary  my-1  me-2">Refunded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Shon
                                                            William</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-7890</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 12,2024 1:21 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 4444
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£100</td>
                                          <td>£10</td>
                                          <td>£90</td>
                                          <td><span class="badge badge-soft-secondary  my-1  me-2">Refunded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                            
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Charlie
                                                            Chaplin</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Jhon Winny</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-6789</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 12,2024 1:21 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 4444
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                         
                                          <td>£100</td>
                                          <td>£10</td>
                                          <td>£90</td>
                                          <td><span class="badge badge-soft-secondary  my-1  me-2">Refunded</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                           
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                          <td>
                                           <a href="view-user-details.php">
                                                <div class="media align-items-center">
                                                    <div class="media-head me-2">
                                                        <div
                                                            class="avatar avatar-xs avatar-rounded">
                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                alt="user" class="avatar-img">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block text-high-em">Kimzo Zen</span>
                                                    </div>
                                                </div>
                                            </a>
                                          </td>
                                          <td>Limo Hen</td>
                                          <td>
                                            <div class="LongMesage_container"
                                                style="position: relative;">
                                                <input
                                                    class="refuge-collection-input tableLongMessage_Input"
                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                <button class="view-btn tablemessageview_btn"
                                                    type="button">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                                <div class="custom-tooltip"></div>
                                            </div>
                                          </td>
                                          <td>REF-5678</td>
                                          <td>
                                           TXN1ABC12345
                                          </td>
                                          <td>Dec 13,2024 1:51 PM</td>
                                          <td>
                                           <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                           •••• 46789
                                          </td>
                                          <td>
                                            Advance Rent
                                          </td>
                                          <td>£400</td>
                                          <td>£35</td>
                                          <td>£365</td>
                                          <td><span class="badge badge-soft-warning  my-1  me-2">Processing</span></td>
                                        
                                          <td>
                                          <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">

                                                <a href="#"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                    data-bs-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-bs-original-title="View Payment Details"><span
                                                        class="icon"><span
                                                            class="feather-icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg></span></span></a>
                                                           
                                                            <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                            </div>
                                        </div>
                                               
                                            </td>
                                        </tr>

                                        <tr>
                                      
                                      <td>
                                       <a href="view-user-details.php">
                                            <div class="media align-items-center">
                                                <div class="media-head me-2">
                                                    <div
                                                        class="avatar avatar-xs avatar-rounded">
                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                            alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <span class="d-block text-high-em">Kimzo Zen</span>
                                                </div>
                                            </div>
                                        </a>
                                      </td>
                                      <td>Keychain Highma</td>
                                      <td>
                                        <div class="LongMesage_container"
                                            style="position: relative;">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                            <div class="custom-tooltip"></div>
                                        </div>
                                      </td>
                                      <td>REF-3456</td>
                                      <td>
                                       TXN1ABC146789
                                      </td>
                                      <td>Dec 13,2024 2:51 PM</td>
                                      <td>
                                       <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg" height="20" width="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>
                                       •••• 45678
                                      </td>
                                      <td>
                                        Advance Rent
                                      </td>
                                      <td>£500</td>
                                      <td>£35</td>
                                      <td>£465</td>
                                      <td><span class="badge badge-soft-danger  my-1  me-2">Refund Failed</span></td>
                                    
                                      <td>
                                      <div class="d-flex align-items-center ActionDropdown">
                                        <div class="d-flex">

                                            <a href="#"
                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                data-bs-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-bs-original-title="View Payment Details"><span
                                                    class="icon"><span
                                                        class="feather-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path
                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3">
                                                            </circle>
                                                        </svg></span></span></a>
                                                        
                                                        <!-- <a href="#" class="refundBtn"><iconify-icon icon="tabler:credit-card-refund"></iconify-icon> Refund</a> -->

                                        </div>
                                    </div>
                                           
                                        </td>
                                    </tr>

                                      
                                       
                                    </tbody>
                                </table>
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
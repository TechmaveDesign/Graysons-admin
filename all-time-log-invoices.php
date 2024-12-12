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
                                    <h1>All Time Log Invoice</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        <div class="ActionBtn generate-invoice-btn p-0" id="generateInvoiceBtn">
                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                            <iconify-icon icon="lucide:send"></iconify-icon> Send Invoice
                            </button>
                        
                            <div class="form-check checkboxTask">
                                <input id="checkboxSendQuickBook" checked class="form-check-input" type="checkbox" value="">
                                <label for="checkboxSendQuickBook" class="aform-check-label">Send to Quick Book</label>
                            </div>
                        </div>

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
                                            <span class="nav-link-text">Active Invoices</span>
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
                                            <span class="nav-link-text">Void Invoices</span>

                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <button class="scroll-btn next" type="button">
                                <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                            </button>

                        </div>

                        <div class="nicescroll-bar">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="landlordinv">
                                    <div class="fullwidthTabInner_content_container">
                                    <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                <thead>
                                        <tr>
                                            <th>
                                            

                                                <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                            <label class="form-check-label" for="checkboxOutline1">
                                            </label>
                                        </div>

                                                
                                            </th>
                                            <th>Invoice No.</th>
                                            <th>Staff Name</th>
                                            <th>Date Range</th>
                                            <th>Total Hour</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                            <td>IN0022</td>
                                          
                                          <td>Jhon Winny</td>
                                          <td>
                                            24 June, 2024 - 24 July, 2024
                                          </td>
                                          <td>50 Min</td>
                                          <td>£22.69</td>
                                         
                                          <td>
                                          <div class="overdueStatus">
                                                  <div class="leftSideStatus">
                                                      <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                      <iconify-icon icon="simple-icons:quickbooks" class="sentIcon quickbook"></iconify-icon>
                                                      <!-- <iconify-icon icon="ic:sharp-access-time" class="sentIcon"></iconify-icon> -->
                                                  </div>
                                                  <div class="rightSideStatus">
                                                      <h6>Sent to quick book </h6>
                                                      <p>Sent 12 june, 2024</p>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0023</td>
                                                <td>Jane Doe</td>
                                                <td>15 May, 2024 - 12 June, 2024</td>
                                                <td>70 Min</td>
                                                <td>£30.50</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0024</td>
                                                <td>Michael Smith</td>
                                                <td>01 July, 2024 - 26 July, 2024</td>
                                                <td>90 Min</td>
                                                <td>£15.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <!-- <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon> -->
                                                        <iconify-icon icon="solar:bill-cross-linear" class="closedIcon unpaidIcon"></iconify-icon>
                                                       
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Unpaid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0025</td>
                                                <td>Emily Clark</td>
                                                <td>27 July, 2024 - 27 Aug, 2024</td>
                                                <td>100 Min</td>
                                                <td>£27.75</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0026</td>
                                                <td>Chris Johnson</td>
                                                <td>28 April, 2024 - 28 May, 2024</td>
                                                <td>200 Min</td>
                                                <td>£18.20</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0027</td>
                                                <td>Lisa Wong</td>
                                                <td>29 June, 2024 - 29 July, 2024</td>
                                                <td>300 Min</td>
                                                <td>£19.99</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                        <iconify-icon icon="simple-icons:quickbooks" class="sentIcon quickbook"></iconify-icon>
                                                        <!-- <iconify-icon icon="ic:sharp-access-time" class="sentIcon"></iconify-icon> -->
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Sent to quick book </h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0028</td>
                                                <td>David Brown</td>
                                                <td>30 June, 2024 - 30 July, 2024</td>
                                                <td>150 Min</td>
                                                <td>£20.45</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0029</td>
                                                <td>Sarah Green</td>
                                                <td>01 July, 2024 - 01 August, 2024</td>
                                                <td>160 Min</td>
                                                <td>£10.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                              
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
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
                                            
                                            <th>Invoice No.</th>
                                            <th>Staff Name</th>
                                            <th>Date Range</th>
                                            <th>Total Hour</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td>IN0022</td>
                                          
                                          <td>Jhon Winny</td>
                                          <td>
                                            24 June, 2024 - 24 July, 2024
                                          </td>
                                          <td>50 Miles</td>
                                          <td>£22.69</td>
                                         
                                          <td>
                                          <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                          </td>
                                          <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                       
                                                <td>IN0023</td>
                                                <td>Jane Doe</td>
                                                <td>15 May, 2024 - 12 June, 2024</td>
                                                <td>160 Min</td>
                                                <td>£30.50</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                           
                                                <td>IN0024</td>
                                                <td>Michael Smith</td>
                                                <td>01 July, 2024 - 26 July, 2024</td>
                                                <td>135 Min</td>
                                                <td>£15.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                                <td>IN0025</td>
                                                <td>Emily Clark</td>
                                                <td>27 July, 2024 - 27 Aug, 2024</td>
                                                <td>179 Min</td>
                                                <td>£27.75</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                           
                                                <td>IN0026</td>
                                                <td>Chris Johnson</td>
                                                <td>28 April, 2024 - 28 May, 2024</td>
                                                <td>58 Min</td>
                                                <td>£18.20</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                                <td>IN0027</td>
                                                <td>Lisa Wong</td>
                                                <td>29 June, 2024 - 29 July, 2024</td>
                                                <td>356 Min</td>
                                                <td>£19.99</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                                <td>IN0028</td>
                                                <td>David Brown</td>
                                                <td>30 June, 2024 - 30 July, 2024</td>
                                                <td>129 Min</td>
                                                <td>£20.45</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                                <td>IN0029</td>
                                                <td>Sarah Green</td>
                                                <td>01 July, 2024 - 01 August, 2024</td>
                                                <td>50 Min</td>
                                                <td>£10.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                        <div class="leftSideStatus">
                                                            <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                            <iconify-icon icon="pajamas:task-done"
                                                                class="closedIcon">
                                                            </iconify-icon>
                                                        </div>
                                                        <div class="rightSideStatus">
                                                            <h6>Approved & Sent to Account</h6>
                                                            <p>Sent 12 june, 2024</p>
                                                        </div>
                                                    </div>
                                                </td>
                                              
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="time-log-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                                <div class="voidBox">
                                                                <a href="#" class="voidBtn clicked"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="No need to generate invoice">
                                                                    <iconify-icon icon="tabler:ban">
                                                                    </iconify-icon> Void
                                                                </a>
                                                            </div>
                                                       
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
    <!-- /Page Body -->
</div>

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

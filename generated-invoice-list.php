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
        margin-right: 20px;
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

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
        box-shadow: none !important;
    }

    .GeneratedInvoices {
        background: #16a085 !important;
        padding: 10px 15px;
        display: flex;
        align-items: center;
    }

    .GeneratedInvoices iconify-icon {
        font-size: 18px;
        margin-right: 4px;
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
            <?php include('headers/rent-allocation-header.php') ?>
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Generated Invoice </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <div class="ActionBtn generate-invoice-btn" id="generateInvoiceBtn">
                                <button
                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                                    <iconify-icon icon="lucide:send"></iconify-icon> Send Invoice
                                </button>
                                <div class="form-check checkboxTask">
                                    <input id="checkboxSendClient" checked class="form-check-input" type="checkbox"
                                        value="">
                                    <label for="checkboxSendClient" class="align-middle form-check-label">Send to
                                        Client</label>
                                </div>

                                <div class="form-check checkboxTask">
                                    <input id="checkboxSendQuickBook" checked class="form-check-input" type="checkbox"
                                        value="">
                                    <label for="checkboxSendQuickBook" class="align-middle form-check-label">Send to
                                        Quick Book</label>
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

                            <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Generated Deposite Invoices</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#damagedeposites">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Generated Damage Deposits Invoices</span>

                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Void_invoices">
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

                            <!-- add new content here start -->
                            <div class="post-list propertyTabContent">

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Details">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="form-check">
                                                                    <input class="form-check-input selectAll"
                                                                        type="checkbox" id="selectAll">
                                                                    <label class="form-check-label"
                                                                        for="checkboxOutline1">
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th>Invoice No.</th>
                                                            <th>Type</th>
                                                            <th>Tenant Name</th>
                                                            <th>Property</th>
                                                            <th>Amount</th>
                                                            <th>Received Amount</th>
                                                            <th>Receive Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN001</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Jhon
                                                                                Winny</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
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
                                                            <td>£229.69</td>
                                                            <td>£200.69</td>
                                                            <td>24 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                                        <iconify-icon icon="mdi:file-send-outline"
                                                                            class="sentIcon book_client"></iconify-icon>
                                                                        <!-- <iconify-icon icon="ic:sharp-access-time" class="sentIcon"></iconify-icon> -->
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Sent to quick book & Client</h6>
                                                                        <p>Sent 12 june, 2024</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN002</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Dimmy
                                                                                Watson</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
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
                                                            <td>£229.69</td>
                                                            <td>£200.69</td>
                                                            <td>24 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                                        <iconify-icon icon="simple-icons:quickbooks"
                                                                            class="sentIcon quickbook"></iconify-icon>
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
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN003</a></td>
                                                            <td>Student</td>

                                                            <td class="sorting_1">
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
                                                                            <span class="d-block text-high-em">John
                                                                                milliyam</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>£429.69</td>
                                                            <td>£200.69</td>
                                                            <td>28 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="gg:check-o"
                                                                            class="PaidIcon"></iconify-icon>

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
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN004</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                            <td>£329.69</td>
                                                            <td>£250.69</td>
                                                            <td>20 June, 2024</td>

                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                                        <!-- <iconify-icon icon="pajamas:task-done" class="closedIcon">
                        </iconify-icon> -->
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>

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
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN005</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Huma
                                                                                Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>£229.69</td>
                                                            <td>£150.69</td>
                                                            <td>05 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="quill:warning-alt"
                                                                            class="warningIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Overdue 12 days</h6>
                                                                        <p>Sent 12 june, 2024</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN006</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Morgan
                                                                                Freeman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>£229.69</td>
                                                            <td>£200.69</td>
                                                            <td>24 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="quill:warning-alt"
                                                                            class="warningIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Overdue 12 days</h6>
                                                                        <p>Sent 12 june, 2024</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN007</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Tom
                                                                                Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>£279.69</td>
                                                            <td>£260.69</td>
                                                            <td>24 July, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="quill:warning-alt"
                                                                            class="warningIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Overdue 12 days</h6>
                                                                        <p>Sent 12 june, 2024</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input row-checkbox"
                                                                        type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label" for="gridCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><a href="invoice-generate.php"
                                                                    class="text-high-em">IN008</a></td>
                                                            <td>Student</td>
                                                            <td class="">
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
                                                                            <span class="d-block text-high-em">Winston
                                                                                Churchil</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>£229.69</td>
                                                            <td>£200.69</td>
                                                            <td>01 June, 2024</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="streamline:task-list"
                                                                            class="generateInvoice"></iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Invoice Generated</h6>
                                                                        <p data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="There are a total of 10 tasks, and you have generated invoices for 5 of them. Therefore, there are 5 remaining tasks for which invoices need to be generated.">
                                                                            10/5 Task</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="generated-deposite-invoice.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                                            <span class="icon"><span
                                                                                    class="feather-icon">
                                                                                    <iconify-icon
                                                                                        icon="ant-design:eye-outlined">
                                                                                    </iconify-icon>
                                                                                </span></span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="damagedeposites">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>

                                                            <th>Tenant Name</th>
                                                            <th>Property</th>
                                                            <th>Type</th>
                                                            <th>Tenancy Start Date</th>
                                                            <th>Tenancy End Date</th>
                                                            <th>Amount</th>
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
                                                                            <span class="d-block text-high-em">Charlie
                                                                                Chaplin</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£229.69</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Unpaid</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Huma
                                                                                Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£9.69</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Unpaid</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Morgan
                                                                                Freeman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£10.69</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Unpaid</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Tom
                                                                                Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£6.69</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Unpaid</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Winston
                                                                                Churchil</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£4.69</td>
                                                            <td>
                                                                <div class="overdueStatus">
                                                                    <div class="leftSideStatus">
                                                                        <iconify-icon icon="solar:bill-cross-linear"
                                                                            class="closedIcon unpaidIcon">
                                                                        </iconify-icon>
                                                                    </div>
                                                                    <div class="rightSideStatus">
                                                                        <h6>Unpaid</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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

                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="Void_invoices">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">

                                                <table class="table common-datatable nowrap w-100 ">
                                                    <thead>
                                                        <tr>

                                                            <th>Tenant Name</th>
                                                            <th>Property</th>
                                                            <th>Type</th>
                                                            <th>Tenancy Start Date</th>
                                                            <th>Tenancy End Date</th>
                                                            <th>Amount</th>
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
                                                                            <span class="d-block text-high-em">Charlie
                                                                                Chaplin</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£229.69</td>
                                                            <td>
                                                            <div class="rightSideStatus VoidStatus_TB">
                                                                        <h6><iconify-icon icon="tabler:ban" class="closedIcon unpaidIcon"></iconify-icon> Void</h6>
                                                                    </div>
                                                            </td>
                                                            <td>

                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Huma
                                                                                Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£9.69</td>
                                                            <td>
                                                            <div class="rightSideStatus VoidStatus_TB">
                                                                        <h6><iconify-icon icon="tabler:ban" class="closedIcon unpaidIcon"></iconify-icon> Void</h6>
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Morgan
                                                                                Freeman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£10.69</td>
                                                            <td>
                                                            <div class="rightSideStatus VoidStatus_TB">
                                                                        <h6><iconify-icon icon="tabler:ban" class="closedIcon unpaidIcon"></iconify-icon> Void</h6>
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Tom
                                                                                Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£6.69</td>
                                                            <td>
                                                            <div class="rightSideStatus VoidStatus_TB">
                                                                        <h6><iconify-icon icon="tabler:ban" class="closedIcon unpaidIcon"></iconify-icon> Void</h6>
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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
                                                                            <span class="d-block text-high-em">Winston
                                                                                Churchil</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>

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
                                                            <td>Student</td>
                                                            <td>23/04/2023</td>
                                                            <td>08/12/2024</td>
                                                            <td>£4.69</td>
                                                            <td>
                                                            <div class="rightSideStatus VoidStatus_TB">
                                                                        <h6><iconify-icon icon="tabler:ban" class="closedIcon unpaidIcon"></iconify-icon> Void</h6>
                                                                    </div>
                                                            </td>
                                                            <td>

                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">

                                                                        <a href="damage-deposite-invoice-details.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-bs-original-title="View damage invoice Details"><span
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

<?php include('footer.php') ?>

<script>
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
</script>

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
        $('.invoiceBtn').click(function() {
            let sendClient = $('#checkboxSendClient').is(':checked');
            let sendQuickBook = $('#checkboxSendQuickBook').is(':checked');
            let message = 'Your invoice';
            if (sendClient && sendQuickBook) {
                message += '  sent to client and QuickBook successfully';
            } else if (sendClient) {
                message += ' sent to client successfully';
            } else if (sendQuickBook) {
                message += '  sent to QuickBook successfully';
            } else {
                message += ' successfully';
            }
            Swal.fire({
                title: message,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'generated-invoice-list.php';
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
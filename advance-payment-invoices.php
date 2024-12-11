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

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
       <!-- sub menu header -->
<?php include('headers/account-header.php') ?>
            <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Advance Payment Invoices</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#raiseadvance_payment"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> RAISE ADVANCE
                                PAYMENT
                            </button>

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
                        <div class="nicescroll-bar">

                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Tenant Name</th>
                                            <th>Property</th>
                                            <th>Type</th>
                                            <th>Invoice Date</th>
                                            <th>Due Date</th>
                                            <th>Invoice Amount</th>
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
                                                            <div class="avatar avatar-xs avatar-rounded">
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
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>08/12/2024</td>
                                            <td>£229.69</td>
                                            <td class=""><span class="badge bg-success">Invoice Raised</span></td>
                                            <td>

                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="advance-payment-invoice-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Invoice"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></span></span></a>

                                                                    <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <a href="view-user-details.php">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
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
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>08/12/2024</td>
                                            <td>£9.69</td>
                                            <td class=""><span class="badge bg-success">Invoice Raised</span></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="advance-payment-invoice-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Invoice"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></span></span></a>

                                                                    <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <a href="view-user-details.php">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
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
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>08/12/2024</td>
                                            <td>£10.69</td>
                                            <td class=""><span class="badge bg-success">Invoice Raised</span></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="advance-payment-invoice-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Invoice"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></span></span></a>

                                                                    <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <a href="view-user-details.php">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
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
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>08/12/2024</td>
                                            <td>£6.69</td>
                                            <td class=""><span class="badge bg-success">Invoice Raised</span></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="advance-payment-invoice-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Invoice"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></span></span></a>

                                                                    <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <a href="view-user-details.php">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
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
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>08/12/2024</td>
                                            <td>£4.69</td>
                                            <td class=""><span class="badge bg-success">Invoice Raised</span></td>
                                            <td>

                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="advance-payment-invoice-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Invoice"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-eye">
                                                                        <path
                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg></span></span></a>

                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                class="icon"><span class="feather-icon"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></span></span></button>

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
    <!-- /Page Body -->
</div>

<!-- RAISE ADVANCE PAYMENT offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="raiseadvance_payment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="streamline:payment-cash-out-3"></iconify-icon>
            RAISE ADVANCE PAYMENT
        </div>
        <div class="closeCanvasContainer">
            <button type="button" class="canvascloseButton" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-white);"
                    data-testid="icon">
                    <path
                        d="M11.375 14.5C11.5583 14.6833 11.7667 14.775 12 14.775C12.2333 14.775 12.4417 14.6833 12.625 14.5L15.625 11.525C15.7583 11.3917 15.8207 11.2167 15.812 11C15.804 10.7833 15.7333 10.6083 15.6 10.475C15.45 10.325 15.275 10.25 15.075 10.25C14.875 10.25 14.7 10.325 14.55 10.475L12 13.025L9.425 10.45C9.29167 10.3167 9.11667 10.254 8.9 10.262C8.68333 10.2707 8.50833 10.3417 8.375 10.475C8.225 10.625 8.15 10.8 8.15 11C8.15 11.2 8.225 11.375 8.375 11.525L11.375 14.5ZM12 21.5C10.6833 21.5 9.446 21.25 8.288 20.75C7.12933 20.25 6.125 19.575 5.275 18.725C4.425 17.875 3.75 16.8707 3.25 15.712C2.75 14.554 2.5 13.3167 2.5 12C2.5 10.6833 2.75 9.44567 3.25 8.287C3.75 7.129 4.425 6.125 5.275 5.275C6.125 4.425 7.12933 3.75 8.288 3.25C9.446 2.75 10.6833 2.5 12 2.5C13.3167 2.5 14.5543 2.75 15.713 3.25C16.871 3.75 17.875 4.425 18.725 5.275C19.575 6.125 20.25 7.129 20.75 8.287C21.25 9.44567 21.5 10.6833 21.5 12C21.5 13.3167 21.25 14.554 20.75 15.712C20.25 16.8707 19.575 17.875 18.725 18.725C17.875 19.575 16.871 20.25 15.713 20.75C14.5543 21.25 13.3167 21.5 12 21.5ZM12 20C14.2167 20 16.1043 19.221 17.663 17.663C19.221 16.1043 20 14.2167 20 12C20 9.78333 19.221 7.89567 17.663 6.337C16.1043 4.779 14.2167 4 12 4C9.78333 4 7.896 4.779 6.338 6.337C4.77933 7.89567 4 9.78333 4 12C4 14.2167 4.77933 16.1043 6.338 17.663C7.896 19.221 9.78333 20 12 20Z"
                        fill="currentColor"></path>
                </svg>Close
            </button>
        </div>

    </div>
    <div class="Canvas_ct_divider"></div>
    <form class="" action="advance-payment-invoices.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Raise Advance Payment for tenant</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Select Tenant</label>
                                        <select name="user" class="form-control select2">
                                            <option value="" selected disabled>Select a User
                                            </option>
                                            <option value="user1">John Doe</option>
                                            <option value="user2">Jane Smith</option>
                                            <option value="user3">Michael Johnson</option>
                                            <option value="user4">Emily Davis</option>
                                            <option value="user5">Chris Brown</option>
                                            <option value="user6">Jessica Williams</option>
                                            <option value="user7">David Miller</option>
                                            <option value="user8">Sophia Wilson</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option value="" selected disable readonly>
                                                Select an Option</option>
                                            <option value="Westlands Dental Studio, Front Street, Lanchester">
                                                Westlands Dental Studio, Front Street,
                                                Lanchester</option>
                                            <option value="Sunset Boulevard, Los Angeles, California">
                                                Sunset Boulevard, Los Angeles, California
                                            </option>
                                            <option value="Marvel Avenue, Brooklyn, New York">
                                                Marvel Avenue, Brooklyn, New York
                                            </option>
                                            <option value="Forest Gump Road, Greenbow, Alabama">
                                                Forest Gump Road, Greenbow, Alabama</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="Type" class="form-control select2">
                                            <option value="" selected disabled>Select an
                                                Option</option>
                                            <option value="Student">Student</option>
                                            <option value="Professional">Professional
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="form-label">Invoice Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="form-label">Invoice Due Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Invoice Amount</label>
                                        <input class="form-control" placeholder="" value="" type="text">

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- RAISE ADVANCE PAYMENT offcanvas modal end -->

<?php include('footer.php') ?>

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


<!-- delete invoice -->

<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This Invoice ?</h5><p class="sweetaleart_description">Deleting a Invoice will permanently remove from this list.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Invoice',
            cancelButtonText: 'No, Keep Invoice',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                 html: `
                     <div style="text-align: center;">
                         <div class="swalalert_custom_icon">
                             <img src="dist/img/newimages/errorgif3.gif" alt="">
                         </div>
                         <h2 class="Swal_CustomTitle">Delete Invoice</h2>
                         <p>This Invoice has been deleted!
</p>
                     </div>`,
                 confirmButtonText: "Close",
                 timer: 3000,
                 timerProgressBar: true,
                 customClass: {
                     confirmButton: "my-ok-button" // Add the same or a different custom class
                 },
             });
            }
        })
    });
</script>
<!-- end -->
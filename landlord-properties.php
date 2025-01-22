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

    .innerfix_navigation {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
        left: 0px;
    }

    .hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
    }

    #edit-title-container {
        margin-top: 10px;
    }

    [contenteditable="true"] {
        padding: 2px;
    }

    [contenteditable="true"]:focus {
        outline: none;
        border-color: #007bff;
    }
</style>

<div class="container-xxl">
    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="##" role="button">
                                    <h1>Manage Properties</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="add-new-property.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block "
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block "></div>

                            <a class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                href="add-new-property.php">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add New Property
                            </a>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow">

                        </div>
                    </header>

                    <form action="view-all-property-quotations.php" method="">
                        <div class="contact-body">

                            <div class="nicescroll-bar">

                                <div class="card card-border mb-lg-4 mb-3">
                                    <div class="card-header card-header-action">
                                        <div class="media align-items-center">
                                            <div class="media-head me-2">
                                                <div class="avatar avatar-sm avatar-rounded">
                                                    <img src="dist/img/newimages/users/userdummy.png" alt="user"
                                                        class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="fw-medium text-dark"> Winston Churchil

                                                </div>
                                                <div class="fs-7"><a
                                                        href="view-user-details.php">winstonchurchil@gmail.com</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="enquiryRight_header_data TaskAction_wrapper">
                                            <div class="enquiryDate dueDate_container">
                                                <iconify-icon icon="ion:calendar-outline">
                                                </iconify-icon>
                                                <div class="duedatelabel">Last Added on : </div> Nov
                                                20, 2024
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="contact-list-view">

                                    <table class="table common-datatable nowrap w-100 ">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Property</th>
                                                <th>Flat</th>
                                                <th>Assigned Staff</th>
                                                <th>Created Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Westlands Dental Studio, Front Street, Lanchester"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
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

                                                <td>23/04/2023</td>

                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">

                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>

                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Sunset Boulevard, Los Angeles, California"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 2 ( 3 Bedroom Apartment Student )</td>
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

                                                <td>15/03/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>
                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Marvel Avenue, Brooklyn, New York"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
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

                                                <td>01/02/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>
                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Oxford Street, London, UK"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 3 ( 3 Bedroom Apartment Student )</td>
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

                                                <td>10/01/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>
                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Forest Gump Road, Greenbow, Alabama"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
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

                                                <td>05/06/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>
                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td class="">
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Central Park West, New York, NY"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>FLAT 2 ( 3 Bedroom Apartment Student )</td>
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
                                                                <span class="d-block text-high-em namelinkURl">Scarlett
                                                                    Johansson</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td>12/04/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a href="property-details.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="View Property Details"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="eye"></i></span></span></a>
                                                            <a href="tenancylead-notes.php"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Manage Notes"
                                                                href="vjavascript:void(0)"><span class="icon"><span
                                                                        class="feather-icon">
                                                                        <iconify-icon
                                                                            icon="material-symbols-light:export-notes-outline">
                                                                        </iconify-icon>
                                                                    </span></span></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->
</div>

<!-- Modal for scheduling a visit -->
<div id="schedulevisit_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Schedule a Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="taskAddContainer">

                        <div class="step" id="step1">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="carbon:ibm-event-automation"></iconify-icon>
                                    </div>
                                    <h1>Schedule a Visit for Job ID: <div class="JobId"><a href="##">CJ12345</a></div>
                                        </h2>
                                </div>

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Title</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Property Name</label>
                                            <input class="form-control" type="text"
                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"
                                                disabled readonly>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="addmorevisitSchedule_forthesame">
                                                <button type="button" class="Addmoreproperties_selectbtn">
                                                    <iconify-icon icon="si:add-fill"></iconify-icon> Add More Properties
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" id="more-properties-dropdown" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-label">All Properties</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper">
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select More Properties</span>
                                                    <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search More Properties...">
                                                        <iconify-icon icon="basil:search-outline"></iconify-icon>
                                                    </div>
                                                    <div class="sellallitemsMain">
                                                        <div class="CustomselectallContainer">
                                                            <input type="checkbox"
                                                                class="select-all-available-users form-check-input">
                                                            Select All
                                                        </div>
                                                        <div class="clDivider_full"></div>
                                                    </div>
                                                    <div class="Customdrpitems_container">
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input"> Bedroom
                                                                3 133, Flat 3 (Floor 1, No3), City View@Phoenix House
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Bedroom 2 101, Flat 7 (Floor 2, No7), Garden
                                                                View@Emerald Apartments
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Lobby 002, Flat 1 (Ground Floor, No1), Street
                                                                View@Central Plaza
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text"
                                                name="" value="01/06/2024" readonly="readonly">
                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                            </iconify-icon>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Time</label>
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                    <div class="eventSubmit_container">

                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- Modal for upload document -->
<div id="AddReport_modal" class="modal  sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Upload Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Upload Quotation Report</label>
                            <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                data-max-file-size="3MB" data-max-files="5">
                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>

<!-- Modal for upload document -->
<div id="Addquote_document_modal" class="modal  sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Upload Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Upload Document</label>
                            <input type="file" class="filepond" id="imageInput2" name="imageInput" multiple
                                data-max-file-size="3MB" data-max-files="5">
                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>

<!-- Re Quotation Modal -->
<div class="modal sm_modalCustom fade" id="requestReQuoteModal" tabindex="-1" aria-labelledby="requestReQuoteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="reQuoteForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="modal-title" id="requestReQuoteModalLabel">Re Quotation Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="quoteTitle" class="form-label">Quotation Title</label>
                        <input type="text" class="form-control" id="quoteTitle" placeholder="Enter Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="quoteMessage" class="form-label">Quotation Message</label>
                        <textarea class="form-control" id="quoteMessage" rows="4" placeholder="Enter Message"
                            required></textarea>
                    </div>

                </div>

                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            id="requotemsgSend" style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- end -->

<!--  Quotation Reject Modal -->
<div class="modal sm_modalCustom fade" id="RejectquoteModal" tabindex="-1" aria-labelledby="RejectquoteNoteLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="rejectQuoteForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="modal-title" id="RejectquoteNoteLabel">Reject Quotation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="rejectquoteMessage" class="form-label">Add Reason</label>
                        <textarea class="form-control" id="rejectquoteMessage" rows="4"
                            placeholder="Enter Message"></textarea>
                    </div>

                </div>

                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">
                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            id="rejectquotemsgSend" style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- Quotation Reject end -->

<!-- Modal for scheduling a visit -->
<div id="schedulevisit_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Schedule a Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="taskAddContainer">

                        <div class="step" id="step1">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="carbon:ibm-event-automation"></iconify-icon>
                                    </div>
                                    <h1>Schedule a Visit for Job ID: <div class="JobId"><a href="##">CJ12345</a></div>
                                        </h2>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Title</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text"
                                                name="" value="01/06/2024" readonly="readonly">
                                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                            </iconify-icon>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Visit Time</label>
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                    <div class="eventSubmit_container">

                        <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- end -->

<!-- Aadd floor modal-->
<div id="floorAdd__modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="manage-property-development.php" method="" id="addpropertyModal">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4 modaltitlewith_icon">
                        <iconify-icon icon="ph:building"></iconify-icon> Add Floors
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="AddpropertforClient_mdWrap">
                        <div class="stepheadingheader">
                            <h1>Please enter the number of floors you want to create for this Property</h2>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Enter Floor Count</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-navigation canvasFooterContainer CustomModal_footer taskadd_footer">

                    <div class="eventSubmit_container">
                        <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="floorctrate_button"
                            class="submitButton  canvasSubmit_button commonCanvas_buttonFooter"
                            style="display: inline-block;">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add floor modal end-->

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

<!-- button sybmit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission or link redirection
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
            });
        });
    });
</script>
<!-- button sybmit loader js end -->

<!-- add property unit table js -->
<script>
    function initializeUnitTable(containerId) {
        var $container = $("#" + containerId);

        function addRow(unitType, unitName, level, parentRow) {
            var table = $container.find("table tbody");
            var newRow = $("<tr></tr>");
            // Calculate dynamic padding for the tree view
            var padding = 20 * level; // Each level increases padding by 20px
            // Create the first cell with the unit type and apply dynamic padding
            var unitTypeDiv = $('<div><input type="text" class="sustomaddonInput" value="' +
                unitType + '" /></div>');
            var cell1 = $("<td></td>").append(unitTypeDiv).css("padding-left", padding + "px");
            // Create the second cell with the unit name
            var unitNameDiv = $('<div><input type="text" class="sustomaddonInput form-control" value="' +
                unitName + '" /></div>');
            var cell2 = $("<td></td>").append(unitNameDiv);
            // Create the additional fields
            var cell3 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Access Code" />');
            var cell4 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Office Key Label" />');
            var cell5 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Master Key Code" />');
            var cell6 = $("<td></td>").append(
                '<input type="text" class="sustomaddonInput form-control" placeholder="Alarm Code" />');
            // Create the action buttons cell
            var cell7 = $(`
                <td>
                    <div class="actionapndButton_container">
                        <button class="removeBtn cmntabapndBtn customtablecreation_remove" type="button">
                            <iconify-icon icon="fluent:delete-16-regular"></iconify-icon> Remove
                        </button>  
                        <button class="addBtn cmntabapndBtn customtablecreation_Add" type="button">
                            <iconify-icon icon="fluent:add-12-regular"></iconify-icon> Add Sub unit
                        </button>
                    </div>
                </td>
            `);
            // Append all cells to the new row
            newRow.append(cell1, cell2, cell3, cell4, cell5, cell6, cell7);
            // Add event listener for the remove button
            cell7.find(".removeBtn").click(function() {
                Swal.fire({
                    title: 'Confirmation',
                    text: "Are you sure you want to delete this " + unitType.toLowerCase() +
                        " and all its subunits?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var parent = $(this).closest("tr");
                        var childRows = parent.nextUntil(":not(.child)");
                        childRows.remove();
                        parent.remove();
                        Swal.fire(
                            'Deleted!',
                            'Your ' + unitType.toLowerCase() + ' has been deleted.',
                            'success'
                        );
                    }
                });
            });
            // Add event listener for the add subunit button
            cell7.find(".addBtn").click(function() {
                var parent = $(this).closest("tr");
                addRow("Sub Unit", "Sub Unit Name", level + 1, parent);
            });
            // Add the row as a child or to the main table
            if (parentRow) {
                newRow.addClass("child");
                if (!parentRow.hasClass("main-parent")) {
                    parentRow.addClass("main-parent");
                }
                parentRow.after(newRow);
            } else {
                table.append(newRow);
            }
        }
        // Add event listener for the add folder button
        $container.find(".addFolderBtn").click(function() {
            addRow("Unit Type", "Unit Name", 0);
        });
    }
    // Initialize each container
    $(document).ready(function() {
        initializeUnitTable("unitContainer1");
        initializeUnitTable("unitContainer2");
        initializeUnitTable("unitContainer3");
        initializeUnitTable("unitContainer4");
        initializeUnitTable("unitContainer5");
        initializeUnitTable("unitContainer6");
        // Add more calls for other containers as needed
    });
</script>
<!-- add property unit table js end-->

<!-- add budget fields and edit budget title js start and also have some style for this -->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        function initializeBudgetSection(section) {
            const title = section.querySelector(".budget-title");
            const editTitleIcon = section.querySelector(".edit-title-icon");
            const editTitleContainer = section.querySelector(".edit-title-container");
            const editTitleInput = section.querySelector(".edit-title-input");
            const saveTitleButton = section.querySelector(".save-title-button");
            const addFieldButton = section.querySelector(".add-field-button");
            const budgetFieldsContainer = section.querySelector(".budget-fields-container");
            editTitleIcon.addEventListener("click", function() {
                title.style.display = "none";
                editTitleContainer.style.display = "block";
                editTitleInput.value = title.textContent.trim(); 
            });
            saveTitleButton.addEventListener("click", function() {
                const newTitle = editTitleInput.value;
                title.innerHTML = `${newTitle} 
                <span class="edit-title-icon" style="cursor: pointer;">
                    <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                </span>`;
                title.style.display = "block";
                editTitleContainer.style.display = "none";
                const newEditTitleIcon = title.querySelector(".edit-title-icon");
                newEditTitleIcon.addEventListener("click", function() {
                    title.style.display = "none";
                    editTitleContainer.style.display = "block";
                    editTitleInput.value = newTitle;
                });
            });
            addFieldButton.addEventListener("click", function() {
                const newField = document.createElement("div");
                newField.className = "col-lg-3 budget-field";
                newField.innerHTML = `
                <div class="form-group">
                    <label contenteditable="true" class="form-label">New Budget</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            `;
                budgetFieldsContainer.appendChild(newField);
            });
        }
        const budgetSections = document.querySelectorAll(".AddProperty_Budget");
        budgetSections.forEach(function(section) {
            initializeBudgetSection(section);
        });
    });
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to initialize functionality for a single budget section
        function initializeBudgetSection(section) {
            const addFieldButton = section.querySelector(".add-field-button");
            const budgetFieldsContainer = section.querySelector(".budget-fields-container");
            // Add a new field
            addFieldButton.addEventListener("click", function() {
                const newField = document.createElement("div");
                newField.className = "col-lg-3 budget-field";
                newField.innerHTML = `
                <div class="form-group">
                    <label contenteditable="true" class="form-label">New Budget</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                `;
                budgetFieldsContainer.appendChild(newField);
            });
        }
        // Initialize all budget sections on the page
        const budgetSections = document.querySelectorAll(".AddProperty_Budget");
        budgetSections.forEach(function(section) {
            initializeBudgetSection(section);
        });
    });
</script>

<!-- add budget fields and edit budget title js start and also have some style for this  end -->

<!-- floor tabs custom style js start -->
<script>
    $(document).ready(function() {
        $("#floorTab .nav-link").each(function() {
            $(this).append('<span class="checkmark"><i class="bi bi-check"></i></span>');
        });
        $(".nav-link").on("shown.bs.tab", function() {
            $(".checkmark").hide();
            $(this).find(".checkmark").show();
        });
        $(".nav-link.active").find(".checkmark").show();
    });
</script>
<!-- floor tabs custom style js start end-->

<!--  floor create confirmationa lert -->
<script>
    document.getElementById('floorctrate_button').addEventListener('click', function() {
        const floorCountInput = document.querySelector('#floorAdd__modal input.form-control');
        const floorCount = floorCountInput.value.trim();
        if (floorCount && !isNaN(floorCount) && Number(floorCount) > 0) {
            Swal.fire({
                title: 'Floor Created Successfully!',
                text: `${floorCount} floor(s) created successfully.`,
                icon: 'success',
                confirmButtonText: "Close",
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: true,
                customClass: {
                    confirmButton: "my-ok-button"
                },
                willClose: () => {
                    window.location.href = 'manage-property-development.php';
                }
            });
        } else {
            Swal.fire({
                title: 'Invalid Input!',
                text: 'Please enter a valid number of floors.',
                icon: 'error',
                confirmButtonText: "Close",
                timer: 3000,
                customClass: {
                    confirmButton: "my-ok-button"
                },
                timerProgressBar: true,
                showConfirmButton: true
            });
        }
    });
</script>
<!-- floor create confirmationa lert -->

<!-- property details property type custom option selection js start -->
<script>
    $(document).ready(function() {
        $('.newPropertyTypeDiv').hide();
        $('.property-type-select').on('change', function() {
            const newPropertyTypeDiv = $(this).closest('.col-md-2').next('.newPropertyTypeDiv');
            if ($(this).val() === 'Other') {
                newPropertyTypeDiv.show();
            } else {
                newPropertyTypeDiv.hide();
            }
        });
    });
</script>
<!-- property details property type custom option selection js end -->
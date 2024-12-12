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
    /* Default style for the button */
    .buttonInfOUpdate {
        
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Disabled button style */
    .buttonInfOUpdate:disabled, .disabled-button[disabled] {
        background-color: #c0c0c052;
  color: #3f4245;
        cursor: not-allowed; /* Show 'not-allowed' cursor */
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
                                    <h1>Manage Tenancy Ending Notes </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="tenancy-renewal.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        <div class="cardRightDetail_boxContainer">
    <div class="flexcheckColumn">
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Renewing this Property
                </label>
            </div>
        </div>
    </div>
</div>

<button type="button" class="buttonInfOUpdate commonUpdateButton"
    id="MakeEnquiry_confirmation" disabled>
    <iconify-icon icon="fluent:person-support-32-regular"></iconify-icon>
    Proceed with this Renewal
</button>

                            <button type="button" class="buttonInfOUpdate commonUpdateButton  brightgreenbutton"
                                id="raiseEnquiryBtn" >
                                <iconify-icon icon="hugeicons:folder-move-to"></iconify-icon>
                                Raise Enquiry
                            </button>

                            <button type="button" class="buttonInfOUpdate commonUpdateButton navybluebtn"
                                id="movetoarchivebtn">
                                <iconify-icon icon="solar:archive-line-duotone"></iconify-icon>
                                Move to Archive
                            </button>

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="##">Import</a>
                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                    <form action="tenancy.php" method="post">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow" id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Details</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#History">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Activity History </span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Notes">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Notes</span>

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
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">

                                                                <div class="form-group">
                                                                    <label class="form-label">Tenant</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="Morgan Freeman" readonly="" disabled>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Address</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control refuge-collection-input"
                                                                            value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House, 1-7 Union Street, Sunderland"
                                                                            readonly>
                                                                        <button
                                                                            class="btn btn-outline-secondary view-btn inputadonButton"
                                                                            type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click to view">
                                                                            <i class="bi bi-eye"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Type</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="Student">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Start Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly"
                                                                        disabled>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Check-In
                                                                        Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly"
                                                                        disabled>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Check-Out
                                                                        Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">End Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly"
                                                                        disabled>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Keys Issued</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="0" readonly="readonly" disabled>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Parking Permit
                                                                        Status</label>
                                                                    <select name="" id=""
                                                                        class="form-control select2 disabledSelect">
                                                                        <option value="">
                                                                            Salect an Option</option>
                                                                        <option value="1">Not Requested</option>
                                                                        <option value="2">Requested</option>
                                                                        <option value="3">Awaiting Payment</option>
                                                                        <option value="4">Paid</option>
                                                                        <option value="5">Revoked</option>
                                                                        <option value="6">Expired</option>
                                                                        <option value="7">Payment added to rent</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Parking
                                                                        Permit</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="" readonly="readonly" disabled>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Council Tax
                                                                        Type</label>
                                                                    <select name="" id=""
                                                                        class="form-control select2 disabledSelect">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="1">Full Time Student</option>
                                                                        <option value="2">Part Time Student </option>
                                                                        <option value="3">Professional</option>
                                                                        <option value="4">Universal Credits</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Council Tax
                                                                        Status</label>
                                                                    <select name="" id=""
                                                                        class="form-control select2 disabledSelect">
                                                                        <option value="" disable readonly selected>
                                                                            Salect an Option</option>
                                                                        <option value="1">Tenant Responsible</option>
                                                                        <option value="2">Requested Exemption</option>
                                                                        <option value="3">Exemption Certificate Recieved
                                                                        </option>
                                                                        <option value="4">Exemption Provided to Council
                                                                        </option>
                                                                        <option value="5">Included in Rent</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <!-- <div class="col-lg-12">
                                                                <div class="form-group sectionStatus">
                                                                    <label for="" class="form-label">Section 21 :
                                                                    </label>
                                                                    <div class="SectionStatus"><span
                                                                            class="badge badge-soft-danger my-1  me-2">Not
                                                                            Sent</span></div>

                                                                </div>
                                                            </div> -->

                                                            <!-- <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">30 Day Letter
                                                                        Sent</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Referred to Debt
                                                                        Collector</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">County Court
                                                                        Judgement</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="savechangesformContainer">
                                                <button type="submit" class="buttonInfOUpdate">
                                                    <iconify-icon icon="fluent:save-32-regular">
                                                    </iconify-icon>
                                                    Save Changes
                                                </button>
                                            </div>

                                            <div class="card suggestedprop_card">
                                                <div class="card-body">
                                                <div id="" class="tenancylead_suggestedprop">
                                                <div class="selectedPropertyfor_tenant_section">
                                                    <h2>Suggested Properties</h2>
                                                    <div class="propertycountand_share">

                                                        <div class="flexcheckColumn">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="schedulecheck">
                                                                    <label class="form-check-label" for="schedulecheck">
                                                                        Do you want to schedule Viewing for this tenant
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="selected_property_mainContainer">
                                                    <table id="selectedDataTable" class="table common-datatable w-100">
                                                        <thead>

                                                            <tr>
                                                                <th><input type="checkbox" class="form-check-input"
                                                                        id="selectAll2">
                                                                </th>
                                                                <th>Property
                                                                    Type</th>
                                                                <th colspan="3">
                                                                    Weekly
                                                                    Pricing</th>
                                                                <th>Address</th>
                                                                <th>Area</th>
                                                                <th>Available
                                                                    Rooms</th>
                                                            </tr>
                                                            <tr class="extraTBOption_th">
                                                                <th>&nbsp;</th>
                                                                <th>&nbsp;</th>
                                                                <th>Rent</th>
                                                                <th>Council Tax
                                                                </th>
                                                                <th>Utilities
                                                                </th>
                                                                <th>&nbsp;</th>
                                                                <th>&nbsp;</th>
                                                                <th>&nbsp;</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td><input type="checkbox"
                                                                        class="rowCheckboxSelected form-check-input">
                                                                </td>
                                                                <td class="sorting_1">Apartment 2C</td>
                                                                <td class="dt-type-numeric">$200</td>
                                                                <td class="dt-type-numeric">$50</td>
                                                                <td class="dt-type-numeric">$30</td>
                                                                <td>
                                                                    <a href="property-details.php">
                                                                        <div class="LongMesage_container">
                                                                            <input
                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House, 1-7 Union Street, Sunderland">
                                                                            <button
                                                                                class="view-btn tablemessageview_btn"
                                                                                type="button" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Click to view"
                                                                                data-bs-original-title="Click to view Full Message">
                                                                                <i class="bi bi-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Liverpool</td>
                                                                <td>4/4</td>
                                                            </tr>
                                                            <tr>

                                                                <td><input type="checkbox"
                                                                        class="rowCheckboxSelected form-check-input">
                                                                </td>
                                                                <td class="sorting_1"> Apartment 3B</td>
                                                                <td class="dt-type-numeric">$200</td>
                                                                <td class="dt-type-numeric">$50</td>
                                                                <td class="dt-type-numeric">$30</td>
                                                                <td>
                                                                    <a href="property-details.php">
                                                                        <div class="LongMesage_container">
                                                                            <input
                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                value="3 and 3A - Apperley Road, Stocksfield, Northumerland">
                                                                            <button
                                                                                class="view-btn tablemessageview_btn"
                                                                                type="button" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Click to view"
                                                                                data-bs-original-title="Click to view Full Message">
                                                                                <i class="bi bi-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Bristol</td>
                                                                <td>2/2</td>
                                                            </tr>
                                                            <tr>

                                                                <td><input type="checkbox"
                                                                        class="rowCheckboxSelected form-check-input">
                                                                </td>
                                                                <td class="sorting_1">Flat 1</td>
                                                                <td class="dt-type-numeric">$200</td>
                                                                <td class="dt-type-numeric">$50</td>
                                                                <td class="dt-type-numeric">$30</td>
                                                                <td>
                                                                    <a href="property-details.php">
                                                                        <div class="LongMesage_container">
                                                                            <input
                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne">
                                                                            <button
                                                                                class="view-btn tablemessageview_btn"
                                                                                type="button" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Click to view"
                                                                                data-bs-original-title="Click to view Full Message">
                                                                                <i class="bi bi-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Manchester</td>
                                                                <td>3/3</td>
                                                            </tr>
                                                            <tr>

                                                                <td><input type="checkbox"
                                                                        class="rowCheckboxSelected form-check-input">
                                                                </td>
                                                                <td class="sorting_1"> Flat 2A</td>
                                                                <td class="dt-type-numeric">$200</td>
                                                                <td class="dt-type-numeric">$50</td>
                                                                <td class="dt-type-numeric">$30</td>
                                                                <td>
                                                                    <a href="property-details.php">
                                                                        <div class="LongMesage_container">
                                                                            <input
                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne">
                                                                            <button
                                                                                class="view-btn tablemessageview_btn"
                                                                                type="button" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Click to view"
                                                                                data-bs-original-title="Click to view Full Message">
                                                                                <i class="bi bi-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Leeds</td>
                                                                <td>2/2</td>
                                                            </tr>
                                                            <tr>

                                                                <td><input type="checkbox"
                                                                        class="rowCheckboxSelected form-check-input">
                                                                </td>
                                                                <td class="sorting_1"> Flat 5D</td>
                                                                <td class="dt-type-numeric">$200</td>
                                                                <td class="dt-type-numeric">$50</td>
                                                                <td class="dt-type-numeric">$30</td>
                                                                <td>
                                                                    <a href="property-details.php">
                                                                        <div class="LongMesage_container">
                                                                            <input
                                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                                value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation.">
                                                                            <button
                                                                                class="view-btn tablemessageview_btn"
                                                                                type="button" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                aria-label="Click to view"
                                                                                data-bs-original-title="Click to view Full Message">
                                                                                <i class="bi bi-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Sunderland</td>
                                                                <td>4/4</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                                </div>
                                            </div>

                                            
                                        </div>

                                        <div class="tab-pane fade" id="Notes">
                                            <div class="fullwidthTabInner_content_container">

                                                <div class="row">

                                                    <ul
                                                        class="nav applicant_activiti_inrTabs  nav-justified nav-light nav-tabs nav-segmented-tabs active-theme multinotesTabs ">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#General_Notes">
                                                                <span class="nav-link-text badge-on-text">General Notes
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#Medical_notes">
                                                                <span class="nav-link-text badge-on-text">Medical
                                                                    Notes</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#Emergency_notes">
                                                                <span class="nav-link-text badge-on-text">Emergency
                                                                    Notes</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content tasktab_content mt-3 nobtPadding">

                                                        <div class="tab-pane fade show active" id="General_Notes">
                                                            <div class="singlesectionTitle">
                                                                <h2>General Notes</h2>
                                                            </div>
                                                            <div class="AddNoteEnuSection">
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input customCheckList-todo"
                                                                                    id="customCheckList-todo">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Add to ToDo List
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sendEnquiryNote_container setAlert_container">
                                                                        <div class="addto_todolist">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input setAlertInput">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Set As Alert
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="Showing_departmentand_users"
                                                                    style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Department</label>
                                                                                <select
                                                                                    class="form-control select2 select-department">
                                                                                    <option disabled selected value="">
                                                                                        Please Select...</option>
                                                                                    <option value="Account Department">
                                                                                        Account Department</option>
                                                                                    <option value="HR Department">HR
                                                                                        Department</option>
                                                                                    <option value="Contract Department">
                                                                                        Contract Department</option>
                                                                                    <option value="Lettings Department">
                                                                                        Lettings Department</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Users</label>
                                                                                <select
                                                                                    class="form-control select2 select-user">
                                                                                    <option disabled selected value="">
                                                                                        Please Select...</option>
                                                                                    <option value="John Doe">John Doe
                                                                                    </option>
                                                                                    <option value="Jane Smith">Jane
                                                                                        Smith</option>
                                                                                    <option value="Alice Johnson">Alice
                                                                                        Johnson</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Due Date</label>
                                                                                <input
                                                                                    class="form-control customdataPicker"
                                                                                    type="text" name="" value=""
                                                                                    placeholder="Due Date" />
                                                                                <iconify-icon
                                                                                    icon="ion:calendar-outline"
                                                                                    class="dateinput_icon">
                                                                                </iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="submitnote_container">
                                                                <button type="button"
                                                                    class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                    Note</button>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Medical_notes">

                                                            <div class="singlesectionTitle">
                                                                <h2>Medical Notes</h2>
                                                            </div>
                                                            <div class="task-detail-body ">
                                                                <div class="row">

                                                                    <div class="contractNotes">

                                                                        <div class="comment-block">

                                                                            <div class="card card-border note-block">
                                                                                <div class="card-body">

                                                                                    <div
                                                                                        class="media align-items-center">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <div
                                                                                                class="noteAuthor_title">
                                                                                                Martin Luther</div>
                                                                                            <div class="NoteTiming">
                                                                                                9 Apr, 20, 7:14 AM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="NoteDescription">@<a
                                                                                            href="#"
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

                                                                                    <div
                                                                                        class="media align-items-center">
                                                                                        <div class="media-head">
                                                                                            <div
                                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                                    alt="user"
                                                                                                    class="avatar-img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <div
                                                                                                class="noteAuthor_title">
                                                                                                Katherine Jones
                                                                                            </div>
                                                                                            <div class="NoteTiming">
                                                                                                8 Apr, 20, 5:30 PM
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="NoteDescription">@<a
                                                                                            href="#"
                                                                                            class="fw-medium">Martin
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
                                                                                    <input class="form-control"
                                                                                        type="text" name=""
                                                                                        placeholder="Add Title">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="form-label">Add
                                                                                        Notes</label>
                                                                                    <textarea class="form-control"
                                                                                        rows="5"></textarea>
                                                                                </div>
                                                                                <div class="NoteAction_container">
                                                                                    <div
                                                                                        class="sendEnquiryNote_container">
                                                                                        <div class="addto_todolist">
                                                                                            <div class="form-check">
                                                                                                <input type="checkbox"
                                                                                                    class="form-check-input customCheckList-todo"
                                                                                                    id="customCheckList-todo">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="customCheckList-todo2">
                                                                                                    Add to ToDo List
                                                                                                    <span
                                                                                                        class="done-strikethrough"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- <div
                                                                            class="sendEnquiryNote_container setAlert_container">
                                                                            <div class="addto_todolist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input setAlertInput">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList-todo">
                                                                                        Set As Alert
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->

                                                                                </div>

                                                                                <div class="Showing_departmentand_users"
                                                                                    style="display: none;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Department</label>
                                                                                                <select
                                                                                                    class="form-control select2"
                                                                                                    id="selectDepartment2">
                                                                                                    <option disabled
                                                                                                        selected
                                                                                                        value="">
                                                                                                        Please
                                                                                                        Select...
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Account Department">
                                                                                                        Account
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="HR Department">
                                                                                                        HR
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Contract Department">
                                                                                                        Contract
                                                                                                        Department
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Lettings Department">
                                                                                                        Lettings
                                                                                                        Department
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Users</label>
                                                                                                <select
                                                                                                    class="form-control select2"
                                                                                                    id="selectUser2">
                                                                                                    <option disabled
                                                                                                        selected
                                                                                                        value="">
                                                                                                        Please
                                                                                                        Select...
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="John Doe">
                                                                                                        John Doe
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Jane Smith">
                                                                                                        Jane Smith
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Alice Johnson">
                                                                                                        Alice
                                                                                                        Johnson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Robert Brown">
                                                                                                        Robert Brown
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Michael Williams">
                                                                                                        Michael
                                                                                                        Williams
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Emily Davis">
                                                                                                        Emily Davis
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="David Wilson">
                                                                                                        David Wilson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Sophia Martinez">
                                                                                                        Sophia
                                                                                                        Martinez
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="James Anderson">
                                                                                                        James
                                                                                                        Anderson
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Olivia Taylor">
                                                                                                        Olivia
                                                                                                        Taylor
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Chris Thomas">
                                                                                                        Chris Thomas
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="Emma Harris">
                                                                                                        Emma Harris
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="form-label">Select
                                                                                                    Due
                                                                                                    Date</label>
                                                                                                <input
                                                                                                    class="form-control customdataPicker"
                                                                                                    type="text" name=""
                                                                                                    value=""
                                                                                                    placeholder="Due Date" />
                                                                                                <iconify-icon
                                                                                                    icon="ion:calendar-outline"
                                                                                                    class="dateinput_icon">
                                                                                                </iconify-icon>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="submitnote_container">
                                                                                    <button type="button"
                                                                                        class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                                        Note</button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Emergency_notes">
                                                            <div class="singlesectionTitle">
                                                                <h2>Emergency Notes</h2>
                                                            </div>
                                                            <div class="AddNoteEnuSection">
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input customCheckList-todo"
                                                                                    id="customCheckList-todo">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Add to ToDo List
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sendEnquiryNote_container setAlert_container">
                                                                        <div class="addto_todolist">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input setAlertInput">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Set As Alert
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="Showing_departmentand_users"
                                                                    style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
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
                                                                        <div class="col-md-4">
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
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select Due
                                                                                    Date</label>
                                                                                <input
                                                                                    class="form-control customdataPicker"
                                                                                    type="text" name="" value=""
                                                                                    placeholder="Due Date" />
                                                                                <iconify-icon
                                                                                    icon="ion:calendar-outline"
                                                                                    class="dateinput_icon">
                                                                                </iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="submitnote_container">
                                                                <button type="button"
                                                                    class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                    Note</button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="History">
                                            <div class="fullwidthTabInner_content_container contract_status_Contrair">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tabinnertitle_withRightAction">
                                                            <h2 class="tabinnerTitle">History Activity</h2>
                                                            <!-- <div class="cntrt_detailright_header_action">

                                                                <button type="button"
                                                                    class="AddNoteRightact_button rightactionbutton_cmnStyle"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#AddNote_modal">
                                                                    <iconify-icon icon="fluent:note-add-24-regular">
                                                                    </iconify-icon> Add Note
                                                                </button>
                                                            </div> -->
                                                        </div>
                                                        <div class="contractHistory_data">
                                                            <div class="contact-body">

                                                                <div class="contact-list-view">

                                                                    <table
                                                                        class="table common-datatable nowrap w-100 tbWithout_action">
                                                                        <thead>
                                                                            <tr>

                                                                                <th>User Name</th>
                                                                                <th>Department</th>
                                                                                <th>Activity Date & Time</th>
                                                                                <th>Activity</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Morgan
                                                                                                    Freeman</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Finance</td>
                                                                                <td>18/06/2024 12:00</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Tenant <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>
                                                                                                        changed their
                                                                                                        Bank Account
                                                                                                        Number.</p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Huma
                                                                                                    Therman</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Lettings</td>
                                                                                <td>15/03/2023 16:40</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Charlie
                                                                                                    Chaplin</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Lettings</td>
                                                                                <td>10/02/2024 15:15</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Emma
                                                                                                    Watson</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Marketing</td>
                                                                                <td>25/08/2023 09:30</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Robert
                                                                                                    Downey Jr.</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">IT Support</td>
                                                                                <td>30/01/2024 14:45</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Scarlett
                                                                                                    Johansson</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">HR</td>
                                                                                <td>22/11/2023 11:10</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to change
                                                                                                        Guranter home
                                                                                                        Address for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Chris
                                                                                                    Hemsworth</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Operations</td>
                                                                                <td>08/09/2024 13:50</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to
                                                                                                        correct Address
                                                                                                        Details for <a
                                                                                                            href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <a href="view-user-details.php">
                                                                                        <div
                                                                                            class="media align-items-center">
                                                                                            <div
                                                                                                class="media-head me-2">
                                                                                                <div
                                                                                                    class="avatar avatar-xs avatar-rounded">
                                                                                                    <img src="dist/img/newimages/users/userdummy.png"
                                                                                                        alt="user"
                                                                                                        class="avatar-img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <span
                                                                                                    class="d-block text-high-em">Jennifer
                                                                                                    Lawrence</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td class="">Sales</td>
                                                                                <td>05/07/2023 17:20</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="activity-list contractHistory_activity_data">
                                                                                        <div class="list-group-item">
                                                                                            <div class="media">

                                                                                                <div class="media-body">
                                                                                                    <p>Request to update
                                                                                                        Phone Number for
                                                                                                        <a href="#"
                                                                                                            class="link-url"><u>Rohit
                                                                                                                Jain</u></a>.
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
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
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->

<?php include('footer.php') ?>

<!-- create invoice js -->
<script src="dist/js/create-invoice-data.js"></script>

<!-- document filters show hide script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get reference to the button and the filter div
        var button = document.getElementById("toggleButton");
        var filterDiv = document.getElementById("filterDiv");
        // Add click event listener to the button
        button.addEventListener("click", function() {
            // Toggle the visibility of the filter div
            if (filterDiv.style.display === "none") {
                filterDiv.style.display = "block";
            } else {
                filterDiv.style.display = "none";
            }
        });
    });
</script>
<!-- document filters show hide script end-->

<!-- input lenthy content show js -->
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Show input value content in tooltip on view button click
        $('.view-btn').on('click', function() {
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

<!-- document upload dropify -->
<script>
    $('.Documentdropify').dropify({
        messages: {
            'default': '<span class="main-text">Drag and Drop OR Click to Upload </span>',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        },
        tpl: {
            message: '<div class="dropify-message"><span class="file-icon"></span> <p>{{ default }}</p></div>',
        }
    });
</script>
<!-- end -->

<!-- add not functionality js start -->

<!-- ****************************
  Note set as alert confirmation popup js start
****************************** -->
<script>
    $(document).ready(function() {
        // Toggle the visibility of Showing_departmentand_users based on the checkbox
        $(document).on('change', '.customCheckList-todo', function() {
            const container = $(this).closest('.AddNoteEnuSection');
            if ($(this).is(':checked')) {
                container.find('.Showing_departmentand_users').slideDown(); // Show the section
            } else {
                container.find('.Showing_departmentand_users').slideUp(); // Hide the section
            }
        });
        // Handle the Send Note button click
        $(document).on('click', '.send-note', function() {
            const container = $(this).closest('.AddNoteEnuSection');
            const selectedDepartment = container.find('.select-department').val();
            const selectedUser = container.find('.select-user').val();
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
        // Handle Set Alert confirmation
        $(document).on('change', '.setAlertInput', function() {
            const checkbox = $(this);
            if (checkbox.is(':checked')) {
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
                        checkbox.prop('checked',
                            false); // Uncheck the checkbox if the user cancels
                    }
                });
            }
        });
    });
</script>

<!--add notes functionality end -->

<!-- tenency renewal request confirmation alert  -->
<script>
    // Custom styles for the Swal buttons
    const swalCustomClasses = {
        confirmButton: 'my-custom-confirm-button', // Custom class for the confirm button
        cancelButton: 'my-custom-cancel-button' // Custom class for the cancel button
    };
    // Add event listener for the Make Enquiry button
    document.getElementById("MakeEnquiry_confirmation").addEventListener("click", function() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to proceed with this Renewal',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            customClass: swalCustomClasses
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to Enquiry-details.php on Yes
                window.location.href = 'Enquiry-details.php';
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Redirect to tenancy-renewal.php on No
                window.location.href = 'archived-tenancy-renewal.php';
            }
        });
    });
</script>
<!-- tenency renewal change request confirmation alert  end-->

<script>
    // Initialize Select2
    $('.disabledSelect').select2();
    // Disable the Select2 dropdown
    $('.disabledSelect').prop('disabled', true);
</script>


<!-- raise enquiry button , select property and checkbox select for schedule button functionality start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const raiseEnquiryButton = document.getElementById('raiseeqnuirybtn');
        const rowCheckboxes = document.querySelectorAll('.rowCheckboxSelected');
        const selectAllCheckbox = document.getElementById('selectAll2');
        // Function to get selected properties
        function getSelectedProperties() {
            const selectedProperties = [];
            rowCheckboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    const propertyName = checkbox.closest('tr').querySelector('td:nth-child(2)')
                        .textContent.trim();
                    selectedProperties.push(propertyName);
                }
            });
            return selectedProperties;
        }
        // Event listener for 'Select All' checkbox
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = selectAllCheckbox.checked;
            rowCheckboxes.forEach((checkbox) => {
                checkbox.checked = isChecked;
            });
        });
        // Event listener for 'Raise Enquiry' button
        raiseEnquiryButton.addEventListener('click', function() {
            const selectedProperties = getSelectedProperties();
            if (selectedProperties.length === 0) {
                // Show error if no property is selected
                Swal.fire({
                    icon: 'error',
                    title: 'No property selected',
                    text: 'Please select at least one property from the suggested properties.',
                });
            } else {
                // Show success message with timer and redirect
                let timerInterval;
                Swal.fire({
                    icon: 'success',
                    title: 'Redirecting to Enquiry Details...',
                    html: `
                    The following properties have been pushed for enquiry:
                    <ul>${selectedProperties.map((prop) => `<li>${prop}</li>`).join('')}</ul>
                    <br>
                    Redirecting in <b id="timer">10</b> seconds...
                    <div class="progress" style="height: 5px;">
                        <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%;"></div>
                    </div>
                `,
                    timer: 10000, // 10 seconds
                    didOpen: () => {
                        const timerElement = document.getElementById('timer');
                        const progressBar = document.getElementById('progressBar');
                        let timeLeft = 10;
                        timerInterval = setInterval(() => {
                            timeLeft--;
                            timerElement.textContent = timeLeft;
                            progressBar.style.width = `${(10 - timeLeft) * 10}%`;
                        }, 1000);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    },
                    allowOutsideClick: false,
                    showConfirmButton: false,
                }).then(() => {
                    window.location.href = 'Enquiry-details.php'; // Redirect after timer ends
                });
            }
        });
    });
</script>

<script>
    // DOM Elements
    const checkbox = document.getElementById('schedulecheck');
    const raiseEnquiryBtn = document.getElementById('raiseEnquiry');
    const propertyCheckboxes = document.querySelectorAll('.rowCheckboxSelected');

    // Function to check conditions and enable/disable the button
    function updateButtonState() {
        const isAnyPropertySelected = Array.from(propertyCheckboxes).some(cb => cb.checked);
        const isScheduleChecked = checkbox.checked;

        // Enable the button only if both conditions are met
        raiseEnquiryBtn.disabled = !(isAnyPropertySelected && isScheduleChecked);
    }

    // Add event listeners
    checkbox.addEventListener('change', updateButtonState);
    propertyCheckboxes.forEach(cb => cb.addEventListener('change', updateButtonState));
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scheduleCheck = document.getElementById("schedulecheck");
        const raiseEnquiryBtn = document.getElementById("raiseEnquiryBtn");
        const propertyCheckboxes = document.querySelectorAll(".rowCheckboxSelected");

        raiseEnquiryBtn.addEventListener("click", function () {
            // Check if any property is selected
            const isPropertySelected = Array.from(propertyCheckboxes).some(checkbox => checkbox.checked);

            if (!isPropertySelected) {
                // No property selected
                Swal.fire({
                    title: "Alert",
                    text: "Please select a property to proceed for enquiry.",
                    icon: "warning",
                    confirmButtonText: "OK",
                });
                return;
            }

            if (!scheduleCheck.checked) {
                // Properties selected, but schedule checkbox not checked
                Swal.fire({
                    title: "Alert",
                    text: "Please check the 'Do you want to schedule Viewing for this tenant' option.",
                    icon: "warning",
                    confirmButtonText: "OK",
                });
                return;
            }

            // Both property and schedule checkbox are valid
            Swal.fire({
                title: "Success",
                text: "Enquiry raised successfully!",
                icon: "success",
                timer: 5000, // 5 seconds
                timerProgressBar: true,
                confirmButtonText: "OK",
                allowOutsideClick: false,
                willClose: () => {
                    // Redirect after timer finishes
                    window.location.href = "Enquiry-details.php";
                },
            });
        });
    });
</script>

<!-- raise enquiry button , select property and checkbox select for schedule button functionality end -->

<!-- alert for the archive this renewal functionality start -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const moveToArchiveBtn = document.getElementById("movetoarchivebtn");

        moveToArchiveBtn.addEventListener("click", function () {
            Swal.fire({
                title: "Archive Confirmation",
                text: "Do you want to archive this tenancy renewal?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Archive",
                cancelButtonText: "Cancel",
                timer: 5000, // Auto close in 5 seconds
                timerProgressBar: true,
                allowOutsideClick: false,
                reverseButtons: true, // Swaps confirm and cancel button positions
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Archived!",
                        text: "Tenancy renewal has been archived successfully.",
                        icon: "success",
                        timer: 3000, // Auto close in 3 seconds
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        willClose: () => {
                            // Redirect after the success message
                            window.location.href = "archived-tenancy-renewal.php";
                        }
                    });
                }
            });
        });
    });
</script>
<!-- alert for the archive this renewal functionality end -->


<!-- proceed button inabled disabled -->
<script>
    // Get references to the checkbox and button
    const gridCheck = document.getElementById("gridCheck");
    const makeEnquiryBtn = document.getElementById("MakeEnquiry_confirmation");

    // Add an event listener to toggle the button's disabled state
    gridCheck.addEventListener("change", function () {
        makeEnquiryBtn.disabled = !this.checked;
    });
</script>
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



    .hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
        position: fixed !important;
        width: 100% !important;
        height: 70px;
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
                                    <h1>Compliance Details</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="all-compliance.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                    <form action="view-contract-details.php" method="">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow " id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul
                                    class="nav nav-tabs nav-line nav-icon autoloadTabs fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Compliance Details</span>
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#AllNotes">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">All Notes</span>

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

                                    <div class="tab-content tabContent_hiddenStyle">
                                        <div class="tab-pane fade show active" id="Details">

                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card card-border mb-lg-4 mb-3">
                                                    <div class="card-header card-header-action">
                                                        <div class="media align-items-center">
                                                            <div class="media-head me-2">
                                                                <div class="JobIdIcon">
                                                                    <iconify-icon icon="hugeicons:job-link">
                                                                    </iconify-icon>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="fw-medium text-dark">Job ID</div>
                                                                <div class="fs-7"><a
                                                                        href="view-user-details.php">CJ12345</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="cardRightDetail_boxContainer">
                                                            <div class="flexcheckColumn">

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="card-body custombodyPadding">
                                                        <div class="d-flex text-center inspectionpropert_details">
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div class="ticInfo_Item">
                                                                    <span class="d-block TicketDetails_info_title">
                                                                        Job Title</span>
                                                                    <span
                                                                        class="d-block text-capitalize ticketdetailinfo_data">
                                                                        <span
                                                                            class="badge badge-soft-success  my-1  me-2">Fire
                                                                            Alarm Installation</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div class="ticInfo_Item">
                                                                    <span class="d-block TicketDetails_info_title">
                                                                        Category</span>
                                                                    <span
                                                                        class="d-block text-capitalize ticketdetailinfo_data">
                                                                        <span
                                                                            class="badge badge-soft-success  my-1  me-2">Electrical
                                                                            Services</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 border-end CustomFlex_style">
                                                                <div class="ticInfo_Item">
                                                                    <span class="d-block TicketDetails_info_title">
                                                                        Total Vendors</span>
                                                                    <span
                                                                        class="d-block text-capitalize ticketdetailinfo_data">
                                                                        <span
                                                                            class="badge badge-soft-success  my-1  me-2">06</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="flex-1 CustomFlex_style ">
                                                                <div class="ticInfo_Item">
                                                                    <div class="d-block TicketDetails_info_title ">
                                                                        Property
                                                                    </div>
                                                                    <div
                                                                        class="d-block text-capitalize fs-7 propertyUrlStyle">
                                                                        <a href="property.php" target="_blank">Bedroom 3
                                                                            133, Flat 3 (Floor 1, No3), City
                                                                            View@Phoenix House</a></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- <div class="card">

                                                    <div class="card-body">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="2">Communal Area Inspection House
                                                                            10</option>
                                                                        <option value="7" selected>Communal Area
                                                                            Inspection House
                                                                            14</option>
                                                                        <option value="21">Communal Area Inspection
                                                                            House 18</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Start Date</label>
                                                                    <input class="form-control  customdataPicker"
                                                                        placeholder="DD/MM/YYYY" value="21, May 2024 "
                                                                        type="text" readonly="readonly">
                                                                    <iconify-icon icon="ion:calendar-outline"
                                                                        class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">End Date</label>
                                                                    <input class="form-control customdataPicker"
                                                                        placeholder="DD/MM/YYYY" value="22, May 2024 "
                                                                        type="text" readonly="readonly">
                                                                    <iconify-icon icon="ion:calendar-outline"
                                                                        class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="actionrequired">Action Required
                                                                        </option>
                                                                        <option value="stale">Stale</option>
                                                                        <option value="unset">Unset</option>
                                                                        <option value="1">Application Received</option>
                                                                        <option value="13">R2R Info Next Academic Year
                                                                        </option>
                                                                        <option value="14" selected>Rent Advance
                                                                            Received
                                                                        </option>
                                                                        <option value="15">Ready For Contract</option>
                                                                        <option value="2">Reference Check Issued
                                                                        </option>
                                                                        <option value="3">Contract Issued</option>
                                                                        <option value="4">Landlord To Sign</option>
                                                                        <option value="12">Utility Contract to be sent
                                                                        </option>
                                                                        <option value="8">Awaiting Tenancy Setup
                                                                        </option>
                                                                        <option value="11">Utility Contract Sent
                                                                        </option>
                                                                        <option value="5">R2R Information This Academic
                                                                            Year</option>
                                                                        <option value="6">Completed</option>
                                                                        <option value="7">Application Withdrawn</option>
                                                                        <option value="9">Replacement Found</option>
                                                                        <option value="10">Tenancy Cancellation</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="row">

                                                    <ul
                                                        class="nav applicant_activiti_inrTabs  nav-justified nav-light nav-tabs nav-segmented-tabs active-theme quotationInnertb_tabs ">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#All_Compliances_Quotation">
                                                                <span class="nav-link-text badge-on-text">All
                                                                    Quotation</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#Archived_Compliances_Quotation">
                                                                <span class="nav-link-text badge-on-text">Archived
                                                                    Quotation</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tasktab_content mt-3">

                                                        <div class="tab-pane fade show active"
                                                            id="All_Compliances_Quotation">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="contact-list-view">
                                                                        <table
                                                                            class="table common-datatable nowrap w-100">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Job ID</th>
                                                                                    <th>Vendor Name</th>
                                                                                    <th>Quotation Requested</th>
                                                                                    <th>Documents</th>
                                                                                    <th>Certificate / Report</th>
                                                                                    <th>Status</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a
                                                                                            href="view-compliance-details.php">CJ12345</a>
                                                                                    </td>
                                                                                    <td>ABC Electrical</td>
                                                                                    <td class="Quotationamout_data">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="£59"></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="AddQuotation_document">
                                                                                            <button type="button"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#Addquote_document_modal" class="tableAddDoc_button"><iconify-icon icon="si:add-duotone" ></iconify-icon></button>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="AddQuotation_document">
                                                                                            <button type="button"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#AddReport_modal" class="tableAddDoc_button"><iconify-icon icon="si:add-duotone" ></iconify-icon></button>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div
                                                                                            class="form-group tableselect_data">

                                                                                            <select
                                                                                                class="form-control statusSelect_withsearch ">
                                                                                                <option disabled
                                                                                                    selected value="">
                                                                                                    Please
                                                                                                    Select...
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Account Department"
                                                                                                    Selected>
                                                                                                    Accept
                                                                                                </option>
                                                                                                <option
                                                                                                    value="HR Department">
                                                                                                    Reject
                                                                                                </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">

                                                                                                <a href="##"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#schedulevisit_modal"
                                                                                                    class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="iconamoon:clock-light">
                                                                                                                </iconify-icon>
                                                                                                            </span></span><span
                                                                                                            class="btn-text">Schedule
                                                                                                            a Visit
                                                                                                        </span></span></a>

                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a
                                                                                            href="view-compliance-details.php">CJ12346</a>
                                                                                    </td>
                                                                                    <td>HydroPlumb Solutions</td>
                                                                                    <td class="Quotationamout_data">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="£120"></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="Download Document"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:file-download-broken">
                                                                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="view-quotation-report.php"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="View quotation report"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div
                                                                                            class="form-group tableselect_data">

                                                                                            <select
                                                                                                class="form-control statusSelect_withsearch ">
                                                                                                <option disabled
                                                                                                    selected value="">
                                                                                                    Please
                                                                                                    Select...
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Account Department">
                                                                                                    Accepted
                                                                                                </option>
                                                                                                <option
                                                                                                    value="HR Department"
                                                                                                    Selected>
                                                                                                    Rejected
                                                                                                </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a
                                                                                            href="view-compliance-details.php">CJ12347</a>
                                                                                    </td>
                                                                                    <td>TopBuild Contractors</td>
                                                                                    <td class="Quotationamout_data">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="£63"></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="Download Document"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:file-download-broken">
                                                                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="view-quotation-report.php"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="View quotation report"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div
                                                                                            class="form-group tableselect_data">

                                                                                            <select
                                                                                                class="form-control statusSelect_withsearch ">
                                                                                                <option disabled
                                                                                                    selected value="">
                                                                                                    Please
                                                                                                    Select...
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Account Department"
                                                                                                    Selected>
                                                                                                    Accept
                                                                                                </option>
                                                                                                <option
                                                                                                    value="HR Department">
                                                                                                    Reject
                                                                                                </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">

                                                                                                <a href="##"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#schedulevisit_modal"
                                                                                                    class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="iconamoon:clock-light">
                                                                                                                </iconify-icon>
                                                                                                            </span></span><span
                                                                                                            class="btn-text">Schedule
                                                                                                            a Visit
                                                                                                        </span></span></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td><a
                                                                                            href="view-compliance-details.php">CJ12348</a>
                                                                                    </td>
                                                                                    <td>BlueWater Plumbers</td>
                                                                                    <td class="Quotationamout_data">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="£65"></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="Download Document"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:file-download-broken">
                                                                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="view-quotation-report.php"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="View quotation report"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div
                                                                                            class="form-group tableselect_data">

                                                                                            <select
                                                                                                class="form-control statusSelect_withsearch">
                                                                                                <option disabled
                                                                                                    selected value="">
                                                                                                    Please
                                                                                                    Select...
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Account Department"
                                                                                                    Selected>
                                                                                                    Accept
                                                                                                </option>
                                                                                                <option
                                                                                                    value="HR Department">
                                                                                                    Reject
                                                                                                </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">

                                                                                                <a href="##"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#schedulevisit_modal"
                                                                                                    class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="iconamoon:clock-light">
                                                                                                                </iconify-icon>
                                                                                                            </span></span><span
                                                                                                            class="btn-text">Schedule
                                                                                                            a Visit
                                                                                                        </span></span></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Add more rows as needed -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Archived_Compliances_Quotation">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="contact-list-view">
                                                                        <table
                                                                            class="table common-datatable nowrap w-100">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Job ID</th>
                                                                                    <th>Vendor Name</th>
                                                                                    <th>Property Name</th>
                                                                                    <th>Job Title</th>
                                                                                    <th>Category</th>
                                                                                    <th>Status</th>

                                                                                    <!-- <th>Visit Date</th>
                                                <th>Work Order ID</th>
                                                <th>Completion Date</th>
                                                <th>Renewal Date</th>
                                                <th>Billing Status</th>
                                                <th>Documents</th> -->
                                                                                    <th>Actions</th>
                                                                                    <!-- Added Actions Column -->
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            <tr>
                                                                                    <td><a
                                                                                            href="view-compliance-details.php">CJ12346</a>
                                                                                    </td>
                                                                                    <td>HydroPlumb Solutions</td>
                                                                                    <td class="Quotationamout_data">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="£120"></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="Download Document"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon
                                                                                                                icon="solar:file-download-broken">
                                                                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="view-quotation-report.php"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-bs-original-title="View quotation report"><span
                                                                                                        class="icon"><span
                                                                                                            class="feather-icon">
                                                                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                                                                        </span></span></a>

                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="">
                                                                                        <div
                                                                                            class="form-group tableselect_data">

                                                                                            <select
                                                                                                class="form-control statusSelect_withsearch ">
                                                                                                <option disabled
                                                                                                    selected value="">
                                                                                                    Please
                                                                                                    Select...
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Account Department">
                                                                                                    Accepted
                                                                                                </option>
                                                                                                <option
                                                                                                    value="HR Department"
                                                                                                    Selected>
                                                                                                    Rejected
                                                                                                </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>

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

                                        <div class="tab-pane fade" id="AllNotes">
                                            <div class="contact-list-view">

                                                <div class="task-detail-body Contractstatusess_Notes">
                                                    <div class="row">

                                                        <div class="contractNotes">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="title title-lg mb-0"><span>All
                                                                        Notes</span></div>

                                                            </div>

                                                            <div class="comment-block">

                                                                <div class="card card-border note-block">
                                                                    <div class="card-body">

                                                                        <div class="media align-items-center">
                                                                            <div class="media-head">
                                                                                <div
                                                                                    class="avatar avatar-xs avatar-rounded">
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
                                                                                <div
                                                                                    class="avatar avatar-xs avatar-rounded">
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
                                                                        <p class="NoteDescription">@<a href="#"
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
                                                                        <input class="form-control" type="text" name=""
                                                                            placeholder="Add Title">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label">Add
                                                                            Notes</label>
                                                                        <textarea class="form-control"
                                                                            rows="5"></textarea>
                                                                    </div>
                                                                    <div class="NoteAction_container">
                                                                        <div class="sendEnquiryNote_container">
                                                                            <div class="addto_todolist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
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
                                                                                        <option disabled selected
                                                                                            value="">
                                                                                            Please
                                                                                            Select...
                                                                                        </option>
                                                                                        <option
                                                                                            value="Account Department">
                                                                                            Account
                                                                                            Department
                                                                                        </option>
                                                                                        <option value="HR Department">
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
                                                                                    <label class="form-label">Select
                                                                                        Users</label>
                                                                                    <select class="form-control select2"
                                                                                        id="selectUser">
                                                                                        <option disabled selected
                                                                                            value="">
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
                                                                                        <option
                                                                                            value="Michael Williams">
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

<!-- Modal for scheduling a visit -->
<div id="schedulevisit_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post" id="wizardForm">
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

<!-- Modal for upload document -->
<div id="AddReport_modal" class="modal  sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post">
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

<!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  start
  -------------------------------------------------------->

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

<!-- status change table js -->
<script>
    $(document).ready(function() {
        // Initialize the select2 plugin
        $('.statusSelect_withsearch').select2({
            placeholder: "Please Select..."
        });
        // Add a class to the select2-container when the dropdown is initialized
        $('.statusSelect_withsearch').on('select2:open', function() {
            // Use the unique ID of the select2 element to find its corresponding container
            const select2Id = $(this).attr('id');
            const select2Container = $(`#select2-${select2Id}-container`).parent();
            select2Container.addClass('custom-select2-container-class');
        });
    });
</script>

<!-- multiple video File Uploader js -->
<!-- NOTE: Dont add this code in footer section -->
<!-- filepond for videos uploader -->
<link href="dist/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="dist/customplugins/file-uploader/filepond.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="dist/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>



<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>

<!-- report upload -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput2'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->
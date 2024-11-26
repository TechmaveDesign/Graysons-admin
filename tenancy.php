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
                                    <h1>Tenancy </h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="landlord-Income Summary.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary "><iconify-icon icon="line-md:list-3" ></iconify-icon> Back</a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

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
                            <div class="fullwidthDesktopTabs MobileScrollShow">
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#Guarantor">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Guarantor</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Documents">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Tenancy Documents</span>

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

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Payment">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Payment</span>

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
                                                                    <a href="view-user-details.php">
                                                                        <input type="text" class="form-control" id=""
                                                                            value="Morgan Freeman" readonly=""> </a>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Address</label>
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="form-control refuge-collection-input"
                                                                            value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House, 1-7 Union Street, Sunderland">
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
                                                                        value="Student" readonly disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Start Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Check-In
                                                                        Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Check-Out
                                                                        Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">End Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Keys Issued</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="0">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Parking Permit
                                                                        Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" disable readonly selected>
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
                                                                        value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label"> Council Tax
                                                                        Type</label>
                                                                    <select name="" id="" class="form-control select2">
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
                                                                    <select name="" id="" class="form-control select2">
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
                                        </div>
                                        <div class="tab-pane fade" id="Guarantor">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Forename</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Surname</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Contact Number</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Alt Contact Number</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Address Line 1</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Address Line 2</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Town/City</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">County</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Postcode</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="">
                                                                </div>
                                                            </div>

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

                                        </div>

                                        <div class="tab-pane fade" id="Documents">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="docFilterContainer">
                                                    <div class="docfilterbutton">
                                                        <h2 class="tabinnerTitle">Tenancy Documents </h2>
                                                        <div class="RightTabinr_container">
                                                            <button id="toggleButton" type="button"
                                                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span
                                                                    class="icon"><span class="feather-icon"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-list">
                                                                            <line x1="8" y1="6" x2="21" y2="6">
                                                                            </line>
                                                                            <line x1="8" y1="12" x2="21" y2="12">
                                                                            </line>
                                                                            <line x1="8" y1="18" x2="21" y2="18">
                                                                            </line>
                                                                            <line x1="3" y1="6" x2="3.01" y2="6">
                                                                            </line>
                                                                            <line x1="3" y1="12" x2="3.01" y2="12">
                                                                            </line>
                                                                            <line x1="3" y1="18" x2="3.01" y2="18">
                                                                            </line>
                                                                        </svg></span></span>Filter</button>

                                                        </div>
                                                    </div>

                                                    <div class="userFilters onerowfilter" id="filterDiv"
                                                        style="display: none;">
                                                        <div class="quick-access-form-wrap nopaddingleftright">

                                                            <div class="row gx-3">
                                                                <div class="col-xxl-12">
                                                                    <div class="position-relative">

                                                                        <div class="col-lg-12">
                                                                            <div class="row gx-3">
                                                                                <div class="col-lg-3">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Document
                                                                                            Title</label>
                                                                                        <input class="form-control"
                                                                                            placeholder="Document Title"
                                                                                            value="" type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">

                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Document
                                                                                            Type</label>
                                                                                        <select name="" id=""
                                                                                            class="form-control select2">
                                                                                            <option value="" disable
                                                                                                readonly selected>
                                                                                                Document Type
                                                                                            </option>
                                                                                            <option value="Invoice">
                                                                                                Invoice</option>
                                                                                            <option value="Receipt">
                                                                                                Receipt</option>
                                                                                            <option value="Statement">
                                                                                                Statement
                                                                                            </option>

                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">

                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Select
                                                                                            Date Range</label>
                                                                                        <input class="form-control"
                                                                                            type="text" name="daterange"
                                                                                            value="Pick a Date" />
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-auto">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">&nbsp;</label>
                                                                                        <button type="button"
                                                                                            class="btn btn-block btn-primary filtersubmit_button">
                                                                                            <iconify-icon
                                                                                                icon="bi:filter">
                                                                                            </iconify-icon> Filter
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

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable  nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Title</th>
                                                                        <th>Type</th>
                                                                        <th>Extension</th>
                                                                        <th>Uploaded By</th>
                                                                        <th>Date Added</th>
                                                                        <th>Expiry Date</th>
                                                                        <th>Visibility</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            4. How to rent guide
                                                                        </td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Amusan, Shy</a>
                                                                        </td>
                                                                        <td>28/09/2023 19:47</td>
                                                                        <td>31/03/2024</td>
                                                                        <td>Everyone</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7. Introduction to Marketing</td>
                                                                        <td>Guidelines</td>
                                                                        <td>docx</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Smith, John</a>
                                                                        </td>
                                                                        <td>15/11/2023 10:22</td>
                                                                        <td>30/04/2024</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12. Project Management Essentials</td>
                                                                        <td>Procedure</td>
                                                                        <td>pptx</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Garcia, Maria</a>
                                                                        </td>
                                                                        <td>03/07/2023 14:55</td>
                                                                        <td>15/12/2023</td>
                                                                        <td>Managers</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>5. Employee Code of Conduct</td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Brown, Sarah</a>
                                                                        </td>
                                                                        <td>10/02/2023 08:33</td>
                                                                        <td>31/12/2023</td>
                                                                        <td>Employees</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>9. Cybersecurity Awareness Training</td>
                                                                        <td>Training</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Johnson, Michael</a>
                                                                        </td>
                                                                        <td>22/08/2023 16:10</td>
                                                                        <td>30/06/2024</td>
                                                                        <td>Landlord</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>8. Marketing Strategy Template</td>
                                                                        <td>Template</td>
                                                                        <td>doc</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Williams, David</a>
                                                                        </td>
                                                                        <td>19/05/2023 11:45</td>
                                                                        <td>31/12/2023</td>
                                                                        <td>Managers</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
                                                                                                </iconify-icon>
                                                                                            </span></span></a>

                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>11. Workplace Diversity Policy</td>
                                                                        <td>Policy</td>
                                                                        <td>pdf</td>
                                                                        <td>
                                                                            <a href="view-user-details.php"
                                                                                class="namelinkURl">Lee, Jennifer</a>
                                                                        </td>
                                                                        <td>07/09/2023 09:30</td>
                                                                        <td>30/06/2024</td>
                                                                        <td>Staff Only</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        href="##"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="Download Document"
                                                                                        href="view-user-details.php"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="solar:file-download-broken">
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
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Notes">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label>Write a Note</label>
                                                                <small class="text-muted">1200</small>
                                                            </div>
                                                            <textarea class="form-control" rows="8"
                                                                placeholder="Write an internal note"></textarea>
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
                                        </div>

                                        <div class="tab-pane fade" id="Payment">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="create-invoice-wrap">

                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <form class="form-inline p-3 bg-grey-light-5 rounded">
                                                                <div class="row gx-3 align-items-center">
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <label
                                                                            class="form-label mb-xl-0">Deposit :</label>
                                                                    </div>
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <input type="text" class="form-control"
                                                                            value="£560.00" readonly="" id="Deposit">
                                                                    </div>
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <label
                                                                            class="form-label mb-xl-0">Recipient :</label>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <select class="form-select select2" required="required">
                                                                        <option value="119">Balaggan, Avinash</option>
                                                                        </select>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="table-wrap mt-5">
                                                        <div class="invoice-table-wrap">
                                                            <table class="table table-bordered invoice-table">
                                                                <thead class="thead-primary">
                                                                    <tr>
                                                                        <th>Due Date</th>
                                                                        <th>Amount</th>
                                                                        <th>Received</th>
                                                                        <th>Type</th>
                                                                        <th>Invoice</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="table-row-gap">
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="w-20 rounded-top-start border-end-0 border-bottom-0">
                                                                            <input type="text" class="form-control customdataPicker flatpickr-input active" value="May, 22 2024 " readonly="readonly">
                                                                        </td>
                                                                        <td class="w-20  border-end-0 border-bottom-0"><input
                                                                                type="text" class="form-control qty"
                                                                                value="£663.00"></td>
                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                        <input type="text" class="form-control customdataPicker flatpickr-input active" value="" readonly="readonly">
                                                                      
                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                            <select class="form-select disc-type w-130p select2">
                                                                            <option value="1">Rental</option>
																	<option value="2" selected="">Utility</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="w-40  rounded-end  bg-primary-light-5 close-over position-relative"
                                                                            rowspan="2">
                                                                            <div class="viewInvoiceButton">
                                                                                <button type="button"><iconify-icon icon="teenyicons:invoice-outline"></iconify-icon> View Invoice</button>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="close-row btn-close removeinvoiceRow">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button></td>
                                                                    </tr>
                                                                  
                                                                </tbody>
                                                            </table>
                                                            <button class="d-inline-flex align-items-center add-new-row addnewPaymentButton">
                                                                <i class="ri-add-box-line me-1"></i> Add Payment
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-xxl-6 ">
                                                            <div class="table-wrap">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered subtotal-table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="rounded-top-start border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Contractual Total</td>
                                                                                <td
                                                                                    class="rounded-top-end InvSummary_amount border-bottom-0 invoisetotalprice_col bg-primary-light-5">
                                                                                    £4,983.00
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0  border-bottom-0 invoiceSummary_title">
                                                                                    Contractual Remaining</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £2,43.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Paid to Date</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £0.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"
                                                                                    class="border-end-0 border-bottom-0 invoiceSummary_title">
                                                                                    Currently Overdue</td>
                                                                                <td
                                                                                    class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                                                    £0.00</td>
                                                                            </tr>
                                                                          
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
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
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
                                <a href="property-details.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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
                                                                        Renewing
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                            <button type="button" class="buttonInfOUpdate commonUpdateButton " id="MakeEnquiry_confirmation">
                            <iconify-icon icon="fluent:person-support-32-regular"></iconify-icon>
                               Proceed this Renewal
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#Payment">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Payment</span>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#RightRent">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Right to Rent</span>

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

                                                            <div class="col-md-3">
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

                                        <div class="tab-pane fade" id="RightRent">
                                        <div class="fullwidthTabInner_content_container">
                                                            <div class="docFilterContainer">
                                                                <div class="docfilterbutton">
                                                                    <h2 class="tabinnerTitle">Right to Rent</h2>
                                                                    <div class="RightTabinr_container">
                                                                        <div class="archived">
                                                                            <a href="#" class="archivedBtn"
                                                                                id="archivedBtnTU1">
                                                                                Share Code : 115689
                                                                            </a>
                                                                        </div>
                                                                        <button
                                                                            class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                            type="button" data-bs-toggle="offcanvas"
                                                                            data-bs-target="#addDocument"
                                                                            aria-controls="offcanvasExample">
                                                                            <iconify-icon icon="lets-icons:add-round">
                                                                            </iconify-icon> Upload Document
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="contact-list-view">

                                                                        <table
                                                                            class="table common-datatable  nowrap w-100 ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="selectAllCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="selectAllCheckbox2"></label>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th>Title</th>
                                                                                    <th>Type</th>
                                                                                    <th>Extension</th>
                                                                                    <th>Uploaded By</th>
                                                                                    <th>Date Added</th>
                                                                                    <th>Expiry Date</th>
                                                                                    <th>Year</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        4. How to rent guide
                                                                                    </td>
                                                                                    <td>Property Document</td>
                                                                                    <td>pdf</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Amusan,
                                                                                            Shy</a>
                                                                                    </td>
                                                                                    <td>28/09/2023 19:47</td>
                                                                                    <td>31/03/2024</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>7. Introduction to Marketing
                                                                                    </td>
                                                                                    <td>Property Document</td>
                                                                                    <td>docx</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Smith,
                                                                                            John</a>
                                                                                    </td>
                                                                                    <td>15/11/2023 10:22</td>
                                                                                    <td>30/04/2024</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>12. Project Management
                                                                                        Essentials</td>
                                                                                    <td>Property Document</td>
                                                                                    <td>pptx</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Garcia,
                                                                                            Maria</a>
                                                                                    </td>
                                                                                    <td>03/07/2023 14:55</td>
                                                                                    <td>15/12/2023</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>5. Employee Code of Conduct</td>
                                                                                    <td>Property Document</td>
                                                                                    <td>pdf</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Brown,
                                                                                            Sarah</a>
                                                                                    </td>
                                                                                    <td>10/02/2023 08:33</td>
                                                                                    <td>31/12/2023</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>9. Cybersecurity Awareness
                                                                                        Training</td>
                                                                                    <td>Property Document</td>
                                                                                    <td>pdf</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Johnson,
                                                                                            Michael</a>
                                                                                    </td>
                                                                                    <td>22/08/2023 16:10</td>
                                                                                    <td>30/06/2024</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>8. Marketing Strategy Template
                                                                                    </td>
                                                                                    <td>Property Document</td>
                                                                                    <td>doc</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Williams,
                                                                                            David</a>
                                                                                    </td>
                                                                                    <td>19/05/2023 11:45</td>
                                                                                    <td>31/12/2023</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-check-inline">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                id="inlineCheckbox2"
                                                                                                value="unchecked">
                                                                                            <label
                                                                                                class="form-check-label"
                                                                                                for="inlineCheckbox2"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>11. Workplace Diversity Policy
                                                                                    </td>
                                                                                    <td>Property Document</td>
                                                                                    <td>pdf</td>
                                                                                    <td>
                                                                                        <a href="view-user-details.php"
                                                                                            class="namelinkURl">Lee,
                                                                                            Jennifer</a>
                                                                                    </td>
                                                                                    <td>07/09/2023 09:30</td>
                                                                                    <td>30/06/2024</td>
                                                                                    <td>2024-2025</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="d-flex align-items-center ActionDropdown">
                                                                                            <div class="d-flex">
                                                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                    href="##"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
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

                                        <div class="tab-pane fade" id="Payment">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="create-invoice-wrap">

                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <form class="form-inline p-3 bg-grey-light-5 rounded">
                                                                <div class="row gx-3 align-items-center">
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <label class="form-label mb-xl-0">Deposit
                                                                            :</label>
                                                                    </div>
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <input type="text" class="form-control"
                                                                            value="£560.00" readonly="" id="Deposit">
                                                                    </div>
                                                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                                                        <label class="form-label mb-xl-0">Recipient
                                                                            :</label>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <select class="form-select select2"
                                                                            required="required">
                                                                            <option value="119">Balaggan, Avinash
                                                                            </option>
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
                                                                            <input type="text"
                                                                                class="form-control customdataPicker flatpickr-input active"
                                                                                value="May, 22 2024 "
                                                                                readonly="readonly">
                                                                        </td>
                                                                        <td class="w-20  border-end-0 border-bottom-0">
                                                                            <input type="text" class="form-control qty"
                                                                                value="£663.00"></td>
                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                            <input type="text"
                                                                                class="form-control customdataPicker flatpickr-input active"
                                                                                value="" readonly="readonly">

                                                                        <td class="w-20 border-end-0 border-bottom-0">
                                                                            <select
                                                                                class="form-select disc-type w-130p select2">
                                                                                <option value="1">Rental</option>
                                                                                <option value="2" selected="">Utility
                                                                                </option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="w-40  rounded-end  bg-primary-light-5 close-over position-relative"
                                                                            rowspan="2">
                                                                            <div class="viewInvoiceButton">
                                                                                <button type="button">
                                                                                    <iconify-icon
                                                                                        icon="teenyicons:invoice-outline">
                                                                                    </iconify-icon> View Invoice
                                                                                </button>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="close-row btn-close removeinvoiceRow">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                            <button
                                                                class="d-inline-flex align-items-center add-new-row addnewPaymentButton">
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


<!-- add document offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addDocument"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:document-remove" width="1.2em" height="1.2em"></iconify-icon>
            Add New document
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New document</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                         
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Document Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Invoice</option>
                                            <option value="2">Statement</option>
                                            <option value="3">Receipt</option>
                                            <option value="4">Warranty</option>
                                            <option value="5">Council Tax</option>
                                            <option value="6">Building Development</option>
                                            <option value="7">Expired</option>
                                            <option value="8">Maintenance</option>
                                            <option value="9">ID</option>
                                            <option value="10">Tenancy</option>
                                            <option value="11">Qualification</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Share Code</label>
                                        <input type="text" class="form-control" id="Share Code">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Expiry Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="" readonly="readonly">
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Select Year</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">2024-2025</option>
                                            <option value="2">2025-2026</option>
                                            <option value="3">2027-2028</option>
                                            <option value="4">2029-2030</option>

                                        </select>

                                    </div>
                                </div>
                           

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Document</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add document offcanvas modal end -->
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
    document.getElementById("MakeEnquiry_confirmation").addEventListener("click", function () {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to proceed with this Renewal',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, proceed',
            cancelButtonText: 'Reject',
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
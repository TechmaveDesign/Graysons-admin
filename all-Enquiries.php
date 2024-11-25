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
                    <div class="Count_Numbers_container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_1">
                                                        <iconify-icon icon="ri:user-received-line"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Total Enquiries Received</div>
                                                <div class="NumberCountCard">1082</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_2">
                                                        <iconify-icon icon="mdi:account-convert-outline"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Enquiries Converted to Viewing</div>
                                                <div class="NumberCountCard">1014</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-border spipeline-card">
                                    <div class="card-body">

                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-logo avatar-rounded">
                                                    <span class="initial-wrap cardiconBGColor_3">
                                                        <iconify-icon icon="mdi:view-arrow-left-outline"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Viewing Converted to Sale</div>
                                                <div class="NumberCountCard">800 </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Enquiries</h1>
                                </a>

                            </div>

                        </div>
                        <div class="contact-options-wrap">
                            <div class="card-action-wrap customdropdown_menu rightAction_margin_right">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret"
                                    href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i
                                                data-feather="more-vertical"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Last 24 hour</a>
                                    <a class="dropdown-item" href="#">Past Week</a>
                                    <a class="dropdown-item" href="#">Last 30 Days</a>

                                </div>
                            </div>
                            <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button>

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm commonAddnewButton btn-primary ms-3" data-bs-toggle="modal"
                                data-bs-target="#createformModal"><span><span class="icon"><span
                                            class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></span></span><span class="btn-text">Add New Enquiry</span></span></button>

                            <!-- <button class="ApplicationFrm_button" data-bs-toggle="offcanvas"
                                data-bs-target="#ApplicationForm" aria-controls="offcanvasExample">
                                <iconify-icon icon="fluent:form-sparkle-20-regular"></iconify-icon> Application Form
                            </button> -->

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

                    <div class="fullwidthDesktopTabs MobileScrollShow">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">


                                <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#allEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">All Enquries</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-bs-toggle="tab" href="#openEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Open Enquries</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#processingEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Enquiry in Process</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup1">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Enquiry Follow up 1</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup2">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Enquiry Follow up 2</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_FinalFollowUp">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Final Follow up </span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#DeadLeads">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Dead Leads </span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_requirmentNotmet">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Requirements not met </span>

                                            </div>
                                        </a>
                                    </li>

                                    
                                   
                                </ul>
                                <button class="scroll-btn next" type="button">
                                    <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                </button>

                            </div>

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter longFiltersContainer" id="filterDiv"
                                style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Location</label>
                                                                    <select name="" id="Location"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Newcastle">Newcastle</option>
                                                                        <option value="Northumbria">Northumbria</option>
                                                                        <option value="Sunderland">Sunderland</option>
                                                                        <option value="Durham">Durham</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Apartment Type</label>
                                                                    <select name="" id="ApartmentType"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Newcastle">Newcastle</option>
                                                                        <option value="Northumbria">Northumbria</option>
                                                                        <option value="Sunderland">Sunderland</option>
                                                                        <option value="Durham">Durham</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Apartment Size</label>
                                                                    <select name="" id="ApartmentSize"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="1 bed">1 bed apartment</option>
                                                                        <option value="2 bed">2 bed apartment</option>
                                                                        <option value="3 bed">3 bed apartment</option>
                                                                        <option value="4 bed">4 bed apartment</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="Status"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Approved">Approved</option>
                                                                        <option value="Pending Further Information">
                                                                            Pending Further Information</option>
                                                                        <option value="In Processing">In Processing
                                                                        </option>
                                                                        <option value="Rejected">Rejected</option>
                                                                        <option value="Suitable Tenant Identified">
                                                                            Suitable Tenant Identified</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">

                                                                <div class="form-group">
                                                                    <label class="form-label">Date Range</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange"
                                                                        value="01/01/2018 - 01/15/2018" />
                                                                    <iconify-icon icon="ion:calendar-outline"
                                                                        class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">

                                                                <div class="form-group">
                                                                    <label class="form-label">last Updated</label>
                                                                    <input
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        type="text" name="" value="01/06/2024" />
                                                                    <iconify-icon icon="ion:calendar-outline"
                                                                        class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id="Type"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Student">Student</option>
                                                                        <option value="Professional">Professional
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Enquiry Source</label>
                                                                    <select name="" id="EnquirySource"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Website">Website</option>
                                                                        <option value="Vendor">Vendor</option>
                                                                        <option value="Email">Email</option>
                                                                        <option value="Phone">Phone</option>
                                                                    </select>
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
                            <div class="tab-content">
                            <div class="tab-pane fade show active" id="allEnquiry">
        <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-primary">Prospect Tenant</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-secondary">Pending Further Information</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-info">Suitable Tenant Identified</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-danger">Rejected</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>


    </div>
    <div class="tab-pane fade " id="openEnquiry">
        <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge ">Open Enquiry</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge">Open Enquiry</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge">Open Enquiry</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge">Open Enquiry</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge">Open Enquiry</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-openEnquiry OpenEnquiry-badge">Open Enquiry</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>


    </div>
    <div class="tab-pane fade" id="processingEnquiry">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-warning">In Processing</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>

    </div>

    <div class="tab-pane fade" id="Enquiry_followup1">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-secondary">Follow up 1</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>

    </div>

    <div class="tab-pane fade" id="Enquiry_followup2">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-primary">Follow Up 2</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>

    </div>

    <div class="tab-pane fade" id="Enquiry_FinalFollowUp">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-info finalfollowupBadge">Final Follow Up</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>

    </div>

    <div class="tab-pane fade" id="DeadLeads">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-danger Deadleads_badge">Dead Lead</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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
        </div>

    </div>

    <div class="tab-pane fade" id="Enquiry_requirmentNotmet">
    <div class="fullwidthTabInner_content_container">
            <!-- <div class="docfilterbutton">
                <h2 class="tabinnerTitle">Enquiry Statuses </h2>
            </div> -->
            <div class="card">
                <div class="card-body">
                    <div class="contact-list-view">

                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Enquiry ID</th>
                                    <th>Status</th>
                                    <th>Enquiry Date</th>
                                    <th>Tenant</th>
                                    <th>last Updated Date</th>
                                    <th>Property Enquired About</th>
                                    <th>Location</th>
                                    <th>Apartment Size</th>
                                    <th>Applicant Type</th>
                                    <th>Preferred moving date</th>
                                    <th>Weekly Budget</th>
                                    <th>Group Size</th>
                                    <th>Nationality</th>
                                    <th>Night/Day Person</th>
                                    <th>Enquiry Source</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12345</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>23/04/2023 </td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Morgan Freeman
                                        </a>
                                    </td>
                                    <td>23/04/2023 18:18</td>
                                    <td>3 BHK Apartment in Downtown</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>1 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>15/09/2024</td>
                                    <td>$60,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12346</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>15/03/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Jessica Alba
                                        </a></td>
                                    <td>15/03/2023 16:40</td>
                                    <td>2 BHK Condo in Uptown</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>3 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>20/09/2024</td>
                                    <td>$10,000</td>
                                    <td>2</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12347</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>01/02/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Chris Evans
                                        </a></td>
                                    <td>10/02/2024 15:15</td>
                                    <td>4 BHK Villa in Suburban Heights</td>
                                    <td>
                                        Sunderland
                                    </td>
                                    <td>6 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>22/10/2024</td>
                                    <td>$50,000</td>
                                    <td>4</td>
                                    <td>Mix</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="streamline:web"></iconify-icon> Website
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12348</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>10/01/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Emma Watson
                                        </a></td>
                                    <td>18/06/2024 12:00</td>
                                    <td>Luxury Penthouse in City Center</td>
                                    <td>
                                        Durham
                                    </td>
                                    <td>4 Bed Apartment</td>
                                    <td>Professional</td>
                                    <td>05/08/2024</td>
                                    <td>$20,000</td>
                                    <td>1</td>
                                    <td>UK</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="lets-icons:user"></iconify-icon> Vendor
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12349</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>05/06/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Tom Hanks
                                        </a></td>
                                    <td>26/08/2024 14:28</td>
                                    <td>2 BHK Studio Apartment in Riverside</td>
                                    <td>
                                        Northumbria
                                    </td>
                                    <td>2 Bed Apartment</td>
                                    <td>Family</td>
                                    <td>30/09/2024</td>
                                    <td>$25,000</td>
                                    <td>3</td>
                                    <td>International</td>

                                    <td>Day</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="solar:phone-outline"></iconify-icon> Phone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
                                                            </iconify-icon>
                                                        </span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Enquiry-details.php">ENQ12350</a></td>
                                    <td><span class="badge bg-Requirements Requirements_not_met_badge">Requirements not met</span></td>
                                    <td>12/04/2023</td>
                                    <td><a href="Enquiry-details.php" class="namelinkURl">
                                            <iconify-icon icon="noto:star"></iconify-icon> Scarlett Johansson
                                        </a>
                                    </td>
                                    <td>12/08/2024 15:15</td>
                                    <td>Commercial Office Space in Tech Park</td>
                                    <td>
                                        Newcastle
                                    </td>
                                    <td>5 Bed Apartment</td>
                                    <td>Student</td>
                                    <td>30/07/2024</td>
                                    <td>$250,000</td>
                                    <td>2</td>
                                    <td>Mix</td>

                                    <td>Night</td>
                                    <td>
                                        <div class="enquirySource">
                                            <iconify-icon icon="quill:mail"></iconify-icon> Email
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a href="Enquiry-details.php"
                                                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload">
                                                    <span class="icon"><span class="feather-icon">
                                                            <iconify-icon icon="ant-design:eye-outlined">
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



<!-- Add SingleIndividial_form Enquiry modal offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="SingleIndividial_form"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="akar-icons:schedule" width="1.2em" height="1.2em"></iconify-icon>
            Make an enquiry for Single Individual
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
    <form class="" action="all-Enquiries.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6"> Add Enquiry For Single Individual </div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                    src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#081626" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+31" type="text"
                                                        name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                        type="tel" name="phonenumber" pattern="\d*" value=""
                                                        placeholder=" " autocomplete="nope" required max="10"
                                                        tabindex="0" />
                                                    <small class="pn-input__error">
                                                        This is not a valid phone number
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                        class="pn-search__input search" type="search"
                                                        id="js_search-input" autocomplete="nope" />
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                    id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
                                        <div class="flexoneselectgroup selectioncontainer">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="student">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Student
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="Family" value="Family">
                                                <label class="form-check-label" for="Family">
                                                    Family
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
                                                <label class="form-check-label" for="gridRadiosp1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp2" value="gridRadiosp2">
                                                <label class="form-check-label" for="gridRadiosp2">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">Which University you are attending or going to
                                            attend?</label>
                                        <select class="form-control select2" id="universitySelect">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Northumbria">Northumbria</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="otherUniversityInput" style="display: none;">
                                        <label class="form-label">Please specify:</label>
                                        <input type="text" class="form-control" id="otherUniversityText">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred method of contact:</label>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks1">
                                                    <label class="form-check-label" for="customChecks1">Email (you may
                                                        need to check your spam/junk folder)</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
                                                    <label class="form-check-label" for="customChecks2">Phone
                                                        call</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks3">
                                                    <label class="form-check-label" for="customChecks3">Text</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks5">
                                                    <label class="form-check-label" for="customChecks4">WhatsApp</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Message</label>
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
<!-- Add SingleIndividial_form Enquiry modal end -->

<!-- Add Dual_form Enquiry modal offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Dual_form" aria-labelledby="offcanvasLabel2">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="akar-icons:schedule" width="1.2em" height="1.2em"></iconify-icon>
            Make an enquiry for Dual Occupancy
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
    <form class="" action="all-Enquiries.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6"> Add Enquiry For Dual Occupancy</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                    src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#081626" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+31" type="text"
                                                        name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                        type="tel" name="phonenumber" pattern="\d*" value=""
                                                        placeholder=" " autocomplete="nope" required max="10"
                                                        tabindex="0" />
                                                    <small class="pn-input__error">
                                                        This is not a valid phone number
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                        class="pn-search__input search" type="search"
                                                        id="js_search-input" autocomplete="nope" />
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                    id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
                                        <div class="flexoneselectgroup selectioncontainer">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="student">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Student
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="Family" value="Family">
                                                <label class="form-check-label" for="Family">
                                                    Family
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
                                                <label class="form-check-label" for="gridRadiosp1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp2" value="gridRadiosp2">
                                                <label class="form-check-label" for="gridRadiosp2">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">Which University you are attending or going to
                                            attend?</label>
                                        <select class="form-control select2" id="universitySelect">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Northumbria">Northumbria</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="otherUniversityInput" style="display: none;">
                                        <label class="form-label">Please specify:</label>
                                        <input type="text" class="form-control" id="otherUniversityText">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred method of contact:</label>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks1">
                                                    <label class="form-check-label" for="customChecks1">Email (you may
                                                        need to check your spam/junk folder)</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
                                                    <label class="form-check-label" for="customChecks2">Phone
                                                        call</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks3">
                                                    <label class="form-check-label" for="customChecks3">Text</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks5">
                                                    <label class="form-check-label" for="customChecks4">WhatsApp</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Message</label>
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
<!-- Add Dual_form Enquiry modal end -->

<!-- Add Group_form Enquiry modal offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Group_form" aria-labelledby="offcanvasLabel3">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="akar-icons:schedule" width="1.2em" height="1.2em"></iconify-icon>
            Make an enquiry for Group
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
    <form class="" action="all-Enquiries.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container ">
                <div class="add-users-modal-body-table-header text-headline-6"> Add Enquiry For Group</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                            <!-- Selected prefix -->
                                            <button class="pn-selected-prefix" aria-label="Select phonenumber prefix"
                                                id="js_trigger-dropdown" tabindex="1">
                                                <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                                    src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                                <!-- prettier-ignore -->
                                                <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#081626" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>
                                            <!-- Phone number input -->
                                            <div class="pn-input">
                                                <div class="pn-input__container">
                                                    <input class="pn-input__prefix" value="+31" type="text"
                                                        name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                                    <input class="pn-input__phonenumber" id="js_input-phonenumber"
                                                        type="tel" name="phonenumber" pattern="\d*" value=""
                                                        placeholder=" " autocomplete="nope" required max="10"
                                                        tabindex="0" />
                                                    <small class="pn-input__error">
                                                        This is not a valid phone number
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- Dropdown -->
                                            <div class="pn-dropdown" id="js_dropdown">
                                                <div class="pn-search">
                                                    <!-- prettier-ignore -->
                                                    <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="#103155" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    <input placeholder="Search for countries"
                                                        class="pn-search__input search" type="search"
                                                        id="js_search-input" autocomplete="nope" />
                                                </div>
                                                <!-- Country list -->
                                                <ul class="pn-list list" id="js_list"></ul>
                                                <div class="pn-list-item pn-list-item--no-results" style="display: none"
                                                    id="js_no-results-found">
                                                    No results found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you a student , Family or a young
                                            professional?</label>
                                        <div class="flexoneselectgroup selectioncontainer">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="student">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Student
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="Family" value="Family">
                                                <label class="form-check-label" for="Family">
                                                    Family
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="professional">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Professional
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 Guarantorselect_column">
                                    <div class="form-group">
                                        <label class="form-label">Do you have UK Home Owner Guarantor?</label>
                                        <div class="flexoneselectgroup">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp1" value="gridRadiosp1">
                                                <label class="form-check-label" for="gridRadiosp1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp2" value="gridRadiosp2">
                                                <label class="form-check-label" for="gridRadiosp2">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="professional"
                                                    id="gridRadiosp3" value="gridRadiosp3">
                                                <label class="form-check-label" for="gridRadiosp3">
                                                    Maybe
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 locationselect_colcontainer" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label">Which University you are attending or going to
                                            attend?</label>
                                        <select class="form-control select2" id="universitySelect">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Northumbria">Northumbria</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="otherUniversityInput" style="display: none;">
                                        <label class="form-label">Please specify:</label>
                                        <input type="text" class="form-control" id="otherUniversityText">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select id="" class="form-control nationality-select select2">
                                            <option disabled selected value="">Please Select...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Preferred date to start your tenancy</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">The period of weeks you are looking to rent?</label>
                                        <input type="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Your current weekly rental budget?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="£ 90.00 - £ 100.00">£ 90.00 - £ 100.00</option>
                                            <option value="£ 101.00 - £ 120.00">£ 101.00 - £ 120.00</option>
                                            <option value="£ 121.00 - £ 140.00">£ 121.00 - £ 140.00</option>
                                            <option value="£ 141.00 - £ 160.00">£ 141.00 - £ 160.00</option>
                                            <option value="£ 161.00 - £ 180.00">£ 161.00 - £ 180.00</option>
                                            <option value="£ 181.00 - £ 200.00">£ 181.00 - £ 200.00</option>
                                            <option value="£ 201.00 and above">£ 201.00 and above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Are you looking for bills inclusive or bills exclusive? </label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Bills Inclusive">Bills Inclusive</option>
                                            <option value="Bills Exclusive">Bills Exclusive</option>
                                            <option value="Bills Exclusive">Explore both options</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Are you a night or a day person?</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="Night Person">Night Person</option>
                                            <option value="Day Person">Day Person</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Group Size?</label>
                                        <select id="staffSelect" class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10+</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Enquiry Status</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="11">Enquiry Received</option>
                                            <option value="12">Information Requested</option>
                                            <option value="13">Information Sent</option>
                                            <option value="14">Viewings Requested</option>
                                            <option value="15">Viewings Booked</option>
                                            <option value="16">Awaiting Viewing Feedback</option>
                                            <option value="17">Viewing Cancelled</option>
                                            <option value="18">Viewing FTA</option>
                                            <option value="19">First Follow-up Sent</option>
                                            <option value="20">Second Follow-up Sent</option>
                                            <option value="21">Final Follow-up Sent</option>
                                            <option value="22">Tenant Applied</option>
                                            <option value="23">Application Processed</option>
                                            <option value="24">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Properties</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 10</option>
                                            <option value="2">Communal Area Inspection House 14</option>
                                            <option value="3">Communal Area Inspection House 16</option>
                                            <option value="4">Communal Area Inspection House 18</option>
                                            <option value="5">Communal Area Inspection House 2</option>
                                            <option value="6">Communal Area Inspection House 21</option>
                                            <option value="7">Communal Area Inspection House 22</option>
                                            <option value="8">Communal Area Inspection House 23</option>
                                            <option value="9">Communal Area Inspection House 24</option>
                                            <option value="10">Communal Area Inspection House 25</option>
                                            <option value="11">Communal Area Inspection House 26</option>
                                            <option value="12">Communal Area Inspection House 27</option>
                                            <option value="13">Communal Area Inspection House 28</option>
                                            <option value="14">Communal Area Inspection House 29</option>
                                            <option value="15">Communal Area Inspection House 3</option>
                                            <option value="16">Communal Area Inspection House 49</option>
                                            <option value="17">Communal Area Inspection House 52</option>
                                            <option value="18">Communal Area Inspection House 53</option>
                                            <option value="19">Communal Area Inspection House 55</option>
                                            <option value="20">Communal Area Inspection House 58</option>
                                            <option value="21">Communal Area Inspection House 6</option>
                                            <option value="22">Communal Area Inspection House 8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-group propertyMultiselect_container">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2" multiple="multiple">
                                            <option disabled value="">Please Select...</option>
                                            <option value="15 Stepney Lane, Newcastle upon Tyne">15 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="Jesmond">Jesmond</option>
                                            <option value="Ponteland">Ponteland</option>
                                            <option value="Stocksfield, Northumerland">Stocksfield, Northumerland
                                            </option>
                                            <option value="Brunswick Industrial Estate, Wideopen">Brunswick Industrial
                                                Estate, Wideopen</option>
                                            <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
                                            <option value="Newcastle">Newcastle</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="West One">West One</option>
                                            <option value="Newcastle upon tyne">Newcastle upon tyne</option>
                                            <option value="11-13 Stepney Lane, Newcastle upon Tyne">11-13 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="5-9 Stepney Lane, Newcastle upon Tyne">5-9 Stepney Lane,
                                                Newcastle upon Tyne</option>
                                            <option value="sector 63">sector 63</option>
                                            <option value="Durham">Durham</option>
                                            <option value="Gateshead">Gateshead</option>
                                            <option value="UP">UP</option>
                                            <option value="Sunderland">Sunderland</option>
                                            <option value="Newcastle Upon Tyne">Newcastle Upon Tyne</option>
                                            <option value="London">London</option>
                                            <option value="5-9 stepney lane, newcastle upon tyne">5-9 stepney lane,
                                                newcastle upon tyne</option>
                                            <option value="Bedlington">Bedlington</option>
                                            <option value="Lanchester">Lanchester</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartment Type</label>
                                        <select class="form-control select2">
                                            <option disabled selected value="">Please Select...</option>
                                            <option value="1 Bed Apartment">1 Bed Apartment</option>
                                            <option value="2 Bed Apartment">2 Bed Apartment</option>
                                            <option value="3 Bed Apartment">3 Bed Apartment</option>
                                            <option value="4 Bed Apartment">4 Bed Apartment</option>
                                            <option value="5 Bed Apartment">5 Bed Apartment</option>
                                            <option value="6 Bed Apartment">6 Bed Apartment</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred method of contact:</label>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks1">
                                                    <label class="form-check-label" for="customChecks1">Email (you may
                                                        need to check your spam/junk folder)</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks2">
                                                    <label class="form-check-label" for="customChecks2">Phone
                                                        call</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks3">
                                                    <label class="form-check-label" for="customChecks3">Text</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check form-check-sm">
                                                    <input type="checkbox" class="form-check-input" id="customChecks5">
                                                    <label class="form-check-label" for="customChecks4">WhatsApp</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Message</label>
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
<!-- Add Group_form Enquiry modal end -->


<div class="offcanvas offcanvas-start" tabindex="-1" id="Group_form" aria-labelledby="offcanvasLabel3">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel3">Group Form</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">Content for Group</div>
</div>


<!-- for selection modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="createformModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header modalheader_customStyle">
            <h5 class="modal-title" id="exampleModalLabel">
              <div class="modaltitle_icon">
                <iconify-icon icon="fluent:form-multiple-48-regular"></iconify-icon>
              </div>
              <div class="enquiryChoose_Title">
                Make an Enquiry For 
                <span class="modalTitlePara">
                  Choose the type of enquiry based on your occupancy needs: Single, Dual, or Group.
                </span>
              </div>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="selectedtype_container">
              <div class="card cardforAcFire" data-bs-toggle="offcanvas" data-bs-target="#SingleIndividial_form" aria-controls="offcanvasExample" data-form-type="single">
                <div class="card-content">
                  <div class="formtypecard_icon">
                  <iconify-icon icon="f7:person"></iconify-icon>
                  </div>
                  <h2 class="card-title">Single Individual</h2>
                  <div class="radio-container">
                    <input type="radio" id="radioAcFire" name="formType" value="acFire" />
                    <label for="radioAcFire" class="radio-label"></label>
                  </div>
                </div>
              </div>

              <div class="card CardDual" data-bs-toggle="offcanvas" data-bs-target="#Dual_form" aria-controls="offcanvasExample" data-form-type="dual">
                <div class="card-content">
                  <div class="formtypecard_icon">
                  <iconify-icon icon="fluent:dual-screen-arrow-right-24-regular"></iconify-icon>
                  </div>
                  <h2 class="card-title">Dual Occupancy</h2>
                  <div class="radio-container">
                    <input type="radio" id="radioFdic" name="formType" value="fdic" />
                    <label for="radioFdic" class="radio-label"></label>
                  </div>
                </div>
              </div>

              <div class="card CardGroupselection" data-bs-toggle="offcanvas" data-bs-target="#Group_form" aria-controls="offcanvasExample" data-form-type="group">
                <div class="card-content">
                  <div class="formtypecard_icon">
                  <iconify-icon icon="clarity:group-line"></iconify-icon>
                  </div>
                  <h2 class="card-title">Group</h2>
                  <div class="radio-container">
                    <input type="radio" id="radiogroup" name="formType" value="group" />
                    <label for="radiogroup" class="radio-label"></label>
                  </div>
                </div>
              </div>

              <input type="hidden" name="selectedFormType" id="selectedFormType" required />
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Offcanvas elements for each card -->


 

<?php include('footer.php') ?>

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->

<!-- filters show hide script -->
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
<!-- filters show hide script end-->

<!-- add enquiry form student and professional condition js  -->
<script>
    $(document).ready(function() {
        // Toggle input field based on selection in locationselect_colcontainer
        $('#universitySelect').change(function() {
            if ($(this).val() === 'Other') {
                $('#otherUniversityInput').show();
            } else {
                $('#otherUniversityInput').hide();
            }
        });
        // Toggle columns based on student/professional selection
        $('input[name="gridRadios"]').change(function() {
            if ($(this).val() === 'student') {
                $('.locationselect_colcontainer').show();
                $('.Guarantorselect_column').hide();
            } else if ($(this).val() === 'professional') {
                $('.locationselect_colcontainer').hide();
                $('.Guarantorselect_column').show();
            } else if ($(this).val() === 'Family') {
                $('.locationselect_colcontainer').hide();
                $('.Guarantorselect_column').hide();
            }
        });
    });
</script>
<!-- add enquiry form student and professional condition js  end-->

<!-- ********************************
Add Enquiry form dynamic data using Json start
***************************************** -->

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        // Fetch data from the JSON file
        $.ajax({
            url: 'nationalities.json', // Path to your JSON file
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                var $select = $('.nationality-select');
                $select.empty(); // Clear existing options
                $select.append(
                    '<option disabled selected value="">Please Select...</option>'
                ); // Add placeholder option
                // Iterate over the response data and populate options
                $.each(response, function(index, nationality) {
                    $select.append('<option value="' + nationality + '">' + nationality +
                        '</option>');
                });
                // Reinitialize Select2 to apply new options
                $('.select2').select2();
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch nationalities:', error);
            }
        });
    });
</script>
<!-- ********************************
Add Enquiry form dynamic data using Json end
***************************************** -->



<!-- property type custom option selection functionality -->
<script>
    $(document).ready(function() {
        $('#property-type').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Other') {
                $('.customproperty_add_field').show();
            } else {
                $('.customproperty_add_field').hide();
            }
        });
    });
</script>
<!-- property type custom option selection functionality end-->


<!-- **************************
 add enquiry form option selection modal js
********************************* -->
<script>
function setWordLimit(className, wordLimit) {
    var elements = document.querySelectorAll('.' + className);
    elements.forEach(function(element) {
        var text = element.innerText;
        var words = text.split(' ');

        if (words.length > wordLimit) {
            var truncatedText = words.slice(0, wordLimit).join(' ') + '...';
            element.innerText = truncatedText;
        }
    });
}
// Set the word limit for all paragraphs with class 'multine-ellipsis'
setWordLimit('multine-ellipsis', 8);
</script>


<!-- form type select js -->
<script>
$(document).ready(function() {
  // Handle card selection
  $('.selectedtype_container .card').on('click', function() {
    var formType = $(this).data('form-type');
    
    // Mark the selected card
    $('.selectedtype_container .card').removeClass('selected');
    $(this).addClass('selected');
    
    // Check the corresponding radio button
    $(this).find('input[type="radio"]').prop('checked', true);
    
    // Update the hidden input value
    $('#selectedFormType').val(formType);

    // Close the modal after selection
    $('#createformModal').modal('hide');
  });
});
</script>

<!-- button submit loader js start -->
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
  
<!-- **************************
 add enquiry form option selection modal js end
********************************* -->
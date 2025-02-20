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
            <!-- sub menu header -->
            <?php include('headers/Compliance-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">

                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Compliance</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="compliance-vendors.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button>
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#quoteOffcanvas"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Create Job
                            </button>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>

                    </header>

                    <div class="Stafflist_container_wrapepr">

                        <div class="contact-body">
                            <div class="nicescroll-bar">
                                <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                    <div class="quick-access-form-wrap nopaddingleftright">
                                        <form class="quick-access-form border">
                                            <div class="row gx-3">
                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Filter by Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="23 St Bedes Terrace">23 St Bedes
                                                                            Terrace</option>
                                                                        <option value="6 Mowbray Close">6 Mowbray Close
                                                                        </option>
                                                                        <option value="9 Mowbray Close">9 Mowbray Close
                                                                        </option>
                                                                        <option value="45 Ormonde Street">45 Ormonde
                                                                            Street</option>
                                                                        <option value="43 Fordland Place">43 Fordland
                                                                            Place</option>
                                                                        <option value="1-4 Thornhill Crescent">1-4
                                                                            Thornhill Crescent</option>
                                                                        <option value="13 Glassey Terrace">13 Glassey
                                                                            Terrace</option>
                                                                        <option value="4 Glassey Terrace">4 Glassey
                                                                            Terrace</option>
                                                                        <option value="226-228 Hylton Road">226-228
                                                                            Hylton Road</option>
                                                                        <option value="55 Arbroath Road">55 Arbroath
                                                                            Road</option>
                                                                        <option value="61 Hall Farm Road">61 Hall Farm
                                                                            Road</option>
                                                                        <option value="27 Hall Farm Road">27 Hall Farm
                                                                            Road</option>
                                                                        <option value="27 Appleby Square">27 Appleby
                                                                            Square</option>
                                                                        <option value="16 Ardrossan Road">16 Ardrossan
                                                                            Road</option>
                                                                        <option value="1 Harvest Close">1 Harvest Close
                                                                        </option>
                                                                        <option value="19 Linacre Close">19 Linacre
                                                                            Close</option>
                                                                        <option value="7 The Leazes">7 The Leazes
                                                                        </option>
                                                                        <option value="3 Valiant Way">3 Valiant Way
                                                                        </option>
                                                                        <option value="26 Manor House">26 Manor House
                                                                        </option>
                                                                        <option value="57 Forsyth Road">57 Forsyth Road
                                                                        </option>
                                                                        <option value="35 Glenthorn Road">35 Glenthorn
                                                                            Road</option>
                                                                        <option value="23 Claremont Road">23 Claremont
                                                                            Road</option>
                                                                        <option value="125 Croydon Road">125 Croydon
                                                                            Road</option>
                                                                        <option value="131 Croydon Road">131 Croydon
                                                                            Road</option>
                                                                        <option value="1-7 Union Street">1-7 Union
                                                                            Street</option>
                                                                        <option value="1 Kingswood Drive">1 Kingswood
                                                                            Drive</option>
                                                                    </select>

                                                                </div>

                                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="vendorCategory" class="form-label">Filter by Contractor
                                                            Name <span class="RequiredField_badge">*</span></label>
                                                        <select class="form-control select2">
                                                            <option value="" disabled>Select Contractor</option>
                                                            <option value="John Doe">John Doe</option>
                                                            <option value="Jane Smith">Jane Smith</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-lg-3">

                                                    <div class="form-group">
                                                        <label class="form-label">Filter by Job ID</label>
                                                        <input class="form-control" placeholder="Enter Job ID"
                                                            value="" type="text">
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="vendorCategory" class="form-label">Filter by
                                                            Category <span class="RequiredField_badge">*</span></label>
                                                        <select class="form-control  select2" required>
                                                            <option value="" disabled>Select category</option>
                                                            <option value="Electrical Services">Electrical Services
                                                            </option>
                                                            <option value="Plumbing Services">Plumbing Services</option>
                                                            <option value="Catering Services">Catering Services</option>
                                                            <option value="Cleaning Services">Cleaning Services</option>
                                                        </select>
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="contact-list-view">
                                <div class="scrollTabContainerMAin ticketsMainTabs">
                                    <!-- <button class="scroll-btn prev" type="button">
                                        <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                    </button> -->

                                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light ticketsTabs TicketBoxMain"
                                        id="scrolableTabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#allEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Quotation Requested</span>
                                                    <!-- <span class="numberCount">02</span> -->
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#ActiveEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Quotation Pending</span>
                                                    <!-- <span class="numberCount">06</span> -->
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#openEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Quotation Submitted</span>
                                                    <!-- <span class="numberCount">05</span> -->
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#processingEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Re-Quote Requested</span>
                                                    <!-- <span class="numberCount">07</span> -->
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup1">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">In Progress</span>
                                                    <!-- <span class="numberCount">05</span> -->
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup2">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Completed</span>
                                                    <!-- <span class="numberCount">10</span> -->
                                                </div>
                                            </a>
                                        </li>

                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#assignedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Assigned Tickets </span>
                                                    <span class="numberCount">06</span>

                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#CompletedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Completed Tickets </span>
                                                    <span class="numberCount">05</span>

                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ApprovedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Approved Tickets </span>
                                                    <span class="numberCount">12</span>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#CancelledTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Cancelled Tickets </span>
                                                    <span class="numberCount">12</span>

                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#MissedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Missed Appointment</span>
                                                    <span class="numberCount">08</span>

                                                </div>
                                            </a>
                                        </li>

                                        

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#archivedtickets">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Archived Tickets </span>

                                            </div>
                                        </a>
                                    </li> -->

                                    </ul>

                                    <!-- <button class="scroll-btn next" type="button">
                                        <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                    </button> -->
                                </div>

                                <div class="tab-content notpMargin_tab">
                                <div class="tab-pane fade show active" id="allEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-info">Quotation Requested</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-info">Quotation Requested</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    </div>

                                </div>
                                <div class="tab-pane fade " id="openEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-success">Quotation Submitted</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-success">Quotation Submitted</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade " id="ActiveEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-warning">Quotation Pending</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-warning">Quotation Pending</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="processingEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-info">Re-Quote Requested</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-info">Re-Quote Requested</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="Enquiry_followup1">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-review">In Progress</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-review">In Progress</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="Enquiry_followup2">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <th>Contractors</th>
                                                <th>Status</th>
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                   <div class="morethenone_properties_wrap">
                                                   <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                    <div class="avatar-group avatar-group-sm avatar-group-overlapped morethan1property"  data-bs-toggle="modal" data-bs-target="#manageScheduleModal">
                                                            <div class="avatar avatar-soft-primary avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="3+ more properties">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>

                                                 <!-- use this if vendors is multiple -->
                                                        <div class="avatar-group avatar-group-sm avatar-group-overlapped me-3">
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Katharine">
                                                                <img src="dist/img/avatar8.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Dean">
                                                                <img src="dist/img/avatar13.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-rounded" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""
                                                                data-bs-original-title="Morgan">
                                                                <img src="dist/img/avatar2.jpg" alt="user"
                                                                    class="avatar-img">
                                                            </div>
                                                            <div class="avatar avatar-soft-danger avatar-rounded"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="3 Contractors">
                                                                <span class="initial-wrap">3+</span>
                                                            </div>
                                                        </div>
                                              

                                                </td>
                                         
                                                <td><span class="badge badge-soft-success">Completed</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                       
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12346</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza"></input>
                                                            <button class="view-btn tablemessageview_btn" type="button"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Click to view"
                                                                data-bs-original-title="Click to view Full Message">
                                                                <i class="bi bi-eye"></i> Read
                                                                More
                                                            </button>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>Plumbing Repair</td>
                                                <td>Plumbing Services</td>
                                              
                                                <td>Morgan</td>
                                                <td><span class="badge badge-soft-success">Completed</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details"
                                                                href="view-compliance-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="assignedTickets">
                                    <div class="fullwidthTabInner_content_container">
                                      
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="CompletedTickets">
                                    <div class="fullwidthTabInner_content_container">
                                      
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="ApprovedTickets">
                                    <div class="fullwidthTabInner_content_container">
                                        
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="CancelledTickets">
                                    <div class="fullwidthTabInner_content_container">
                                        
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="MissedTickets">
                                    <div class="fullwidthTabInner_content_container">
                                    
                                       
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="archivedtickets">
                                    <div class="fullwidthTabInner_content_container">
                                       
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

<!-- add compliance offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="quoteOffcanvas"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="si:user-duotone"></iconify-icon>
            Create Job
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
    <form class="" action="all-compliance.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Create Job</div>

                <div class="formstartcontainer">
                    <div class="row">

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Enter the job title">
                            </div>
                        </div>

                        <div class="col-lg-3">
                        <div class="form-group">
                                            <label class="form-label">All Properties</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
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

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select select2" id="category">
                                    <option value="Electrical">Electrical</option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="HVAC">HVAC</option>
                                    <!-- Add more categories here -->
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">

<div class="form-group">
    <label class="form-label">Due Date</label>
    <input class="form-control customdataPicker flatpickr-input" type="text" name="" value="01/06/2024" readonly="readonly">
    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
</div>
</div>

                       
                        <div class="col-lg-3">
                        <div class="form-group">
                                            <label class="form-label">All Contractor</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select Contractor</span>
                                                    <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search Contractor....">
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
                                                                    class="individual-option form-check-input"> John Doe
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Jane Smith
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Alice Johnson
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                        </div>

                        </div>

                        

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label>Message/Task</label>
                                </div>
                                <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Upload Attachments</label>
                                <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
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
<!-- add compliance offcanvas modal end -->


<!-- Modal Structure -->
<div class="modal modal_schedule fade" id="manageScheduleModal" tabindex="-1" aria-labelledby="manageScheduleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="manageScheduleModalLabel">All Properties</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Form for Adding Time Schedule -->
            <form id="scheduleForm" action="checkIn.php">
                <div class="col-lg-12">
                    <ul class="PropertyList">
                        <li>
                            <div class="propertyQuote">
                                <div class="iconLocation">
                                    <iconify-icon icon="akar-icons:check-in"></iconify-icon>
                                </div>
                                <h6>Bedroom 1 101, Flat 1 (Floor 1, No1), City View@Phoenix House</h6>
                            </div>
                        </li>
                        <li>
                            <div class="propertyQuote">
                                <div class="iconLocation">
                                    <iconify-icon icon="akar-icons:check-in"></iconify-icon>
                                </div>
                                <h6>Bedroom 2 102, Flat 2 (Floor 1, No2), Garden View@Phoenix House</h6>
                            </div>
                        </li>
                        <li>
                            <div class="propertyQuote">
                                <div class="iconLocation">
                                    <iconify-icon icon="akar-icons:check-in"></iconify-icon>
                                </div>
                                <h6>Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="modal">Close</button>
            <button type="button" class="canvasSubmit_button commonCanvas_buttonFooter" id="saveScheduleBtn">
                Save & Send
            </button>
        </div> -->
    </div>
</div>
</div>
<?php include('footer.php') ?>

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

<!-- filepond video js -->
<!-- <script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script> -->
<!-- filepond video js end -->

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
<!-- filepod image uploader end-->


  <!-- custom multiple select js start -->
  <script>
   $(document).ready(function () {
    // Update the count of selected options
    function updateSelectedCount(dropdownWrapper) {
        const selectedCount = dropdownWrapper.find(".individual-option:checked").length;
        const selectedCountElement = dropdownWrapper.find(".selected-count");

        if (selectedCount === 0) {
            selectedCountElement.text("Select Location");
        } else if (selectedCount === 1) {
            selectedCountElement.text("1 selected");
        } else {
            selectedCountElement.text(`${selectedCount} selected`);
        }
    }

    // Handle Select All checkbox
    $(".select-all-available-users").on("change", function () {
        const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
        const isChecked = $(this).prop("checked");
        dropdownWrapper.find(".individual-option").prop("checked", isChecked);
        updateSelectedCount(dropdownWrapper);
    });

    // Handle individual option selection
    $(".individual-option").on("change", function () {
        const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
        const totalOptions = dropdownWrapper.find(".individual-option").length;
        const selectedOptions = dropdownWrapper.find(".individual-option:checked").length;

        // Toggle the Select All checkbox
        dropdownWrapper.find(".select-all-available-users").prop("checked", totalOptions === selectedOptions);

        updateSelectedCount(dropdownWrapper);
    });

    // Reset Filter button
    $(".reset-filter").on("click", function () {
        const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
        dropdownWrapper.find(".individual-option").prop("checked", false);
        dropdownWrapper.find(".select-all-available-users").prop("checked", false);
        updateSelectedCount(dropdownWrapper);
    });

    // Apply Filter button
    $(".apply-filter").on("click", function () {
        const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
        const selectedItems = dropdownWrapper.find(".individual-option:checked").map(function () {
            return $(this).parent().text().trim();
        }).get();
        console.log("Selected Items:", selectedItems);
    });

    // Filter search functionality
    $(".available-users-search").on("keyup", function () {
        const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
        const searchTerm = $(this).val().toLowerCase();
        const options = dropdownWrapper.find(".mainoptionContainer");

        options.filter(function () {
            $(this).toggle($(this).text().toLowerCase().includes(searchTerm));
        });

        const noDataMessage = dropdownWrapper.find(".no-data");
        noDataMessage.toggle(options.filter(":visible").length === 0);
    });
});

</script>
<!-- end -->
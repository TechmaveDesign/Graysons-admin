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
                                    <h1>All Procurement Requests</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="tickets.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>
                            <a href="procurement-request-form.php">
                                <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button">
                                    <iconify-icon icon="lets-icons:add-round">
                                    </iconify-icon> New Request
                                </button>
                            </a>
                            
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
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

                    
                        <div class="contact-body">
                            
                            <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                    <div class="quick-access-form-wrap nopaddingleftright pt-0">
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
                                <!-- add new content here start -->
                                <div class="post-list propertyTabContent">
                                <div class="scrollTabContainerMAin ticketsMainTabs">
                                    <!-- <button class="scroll-btn prev" type="button">
                                        <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                    </button> -->

                                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light ticketsTabs TicketBoxMain"
                                        id="scrolableTabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#allEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">New Request</span>
                                                    <span class="numberCount">02</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#ActiveEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Pending Request</span>
                                                    <span class="numberCount">06</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#openEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Rejected Request</span>
                                                    <span class="numberCount">05</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#processingEnquiry">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Approved Request </span>
                                                    <span class="numberCount">05</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ReqConfirmation">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Pending Confirmation</span>
                                                    <span class="numberCount">07</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- 

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup1">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Request Sent for confirmation</span>
                                                    <span class="numberCount">05</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup2">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Request Confirmation Approved</span>
                                                    <span class="numberCount">10</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#assignedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Order Placed </span>
                                                    <span class="numberCount">06</span>

                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#CompletedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Order Shipped</span>
                                                    <span class="numberCount">05</span>

                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ApprovedTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Out for Delivery</span>
                                                    <span class="numberCount">12</span>

                                                </div>
                                            </a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#CancelledTickets">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Delivered</span>
                                                    <span class="numberCount">12</span>

                                                </div>
                                            </a>
                                        </li> 

                                        <!-- <li class="nav-item">
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
                                                <th>Request ID</th>
                                                <th>Date Of Request</th>
                                                <th>Priority Level</th>
                                                <th>Category</th>
                                                <th>Item Requested</th>
                                                <th>Quantity Required</th>
                                                <th>Status</th>
                                                <th>Requestor</th>
                                                <th>Approved by</th>
                                                <th>Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR001</a></td>
                                                <td>15 March, 2025</td>
                                                <td>High</td>
                                                <td>Stationary</td>
                                                <td>Notepads</td>
                                                <td>10 Packs</td>
                                                <td><span class="badge badge-soft-info">New Request</span></td>
                                                <td>James Smith</td>
                                                <td>Sarunas</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- Edit Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR002</a></td>
                                                <td>18 March, 2025</td>
                                                <td>Medium</td>
                                                <td>Office Supplies</td>
                                                <td>Folders</td>
                                                <td>20 Packs</td>
                                                <td><span class="badge badge-soft-info">New Request</span></td>
                                                <td>Emma Johnson</td>
                                                <td>Michael</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- Edit Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR003</a></td>
                                                <td>20 March, 2025</td>
                                                <td>Low</td>
                                                <td>Stationary</td>
                                                <td>Markers</td>
                                                <td>15 Packs</td>
                                                <td><span class="badge badge-soft-info">New Request</span></td>
                                                <td>Oliver Brown</td>
                                                <td>Isabella</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- Edit Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            
                                        </tbody>
                                    </table>
                                    </div>

                                </div>
                                <div class="tab-pane fade " id="ActiveEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Request ID</th>
                                                <th>Date Of Request</th>
                                                <th>Priority Level</th>
                                                <th>Category</th>
                                                <th>Item Requested</th>
                                                <th>Quantity Required</th>
                                                <th>Status</th>
                                                <th>Requestor</th>
                                                <th>Approved by</th>
                                                <th>Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="procurement-other-department-request-detailpage.php">GPPR004</a></td>
                                            <td>22 March, 2025</td>
                                            <td>Medium</td>
                                            <td>Office Supplies</td>
                                            <td>Staplers</td>
                                            <td>5 Units</td>
                                            <td><span class="badge badge-soft-warning">Pending Request</span></td>
                                            <td>Sophia Wilson</td>
                                            <td>Lucas</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- Edit Details Button -->
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="procurement-other-department-request-detailpage.php">GPPR005</a></td>
                                            <td>25 March, 2025</td>
                                            <td>High</td>
                                            <td>Electronics</td>
                                            <td>Projectors</td>
                                            <td>2 Units</td>
                                            <td><span class="badge badge-soft-warning">Pending Request</span></td>
                                            <td>William Davis</td>
                                            <td>Amelia</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- Edit Details Button -->
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="procurement-other-department-request-detailpage.php">GPPR006</a></td>
                                            <td>28 March, 2025</td>
                                            <td>Low</td>
                                            <td>Cleaning Supplies</td>
                                            <td>Disinfectant Sprays</td>
                                            <td>10 Bottles</td>
                                            <td><span class="badge badge-soft-warning">Pending Request</span></td>
                                            <td>Lucas Miller</td>
                                            <td>Grace</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- Edit Details Button -->
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    
                                    </div>

                                </div>
                                <div class="tab-pane fade " id="openEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                        <table class="table common-datatable nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Request ID</th>
                                                    <th>Date Of Request</th>
                                                    <th>Priority Level</th>
                                                    <th>Category</th>
                                                    <th>Item Requested</th>
                                                    <th>Quantity Required</th>
                                                    <th>Status</th>
                                                    <th>Requestor</th>
                                                    <th>Approved by</th>
                                                    <th>Actions</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- Rows with Rejected Request Status -->
                                                <tr>
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR007</a></td>
                                                    <td>30 March, 2025</td>
                                                    <td>High</td>
                                                    <td>Office Supplies</td>
                                                    <td>Whiteboards</td>
                                                    <td>3 Units</td>
                                                    <td><span class="badge badge-soft-danger">Rejected Request</span></td>
                                                    <td>Charlotte Green</td>
                                                    <td>Henry</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR008</a></td>
                                                    <td>02 April, 2025</td>
                                                    <td>Medium</td>
                                                    <td>Furniture</td>
                                                    <td>Office Chairs</td>
                                                    <td>6 Units</td>
                                                    <td><span class="badge badge-soft-danger">Rejected Request</span></td>
                                                    <td>Liam Carter</td>
                                                    <td>Sophia</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR009</a></td>
                                                    <td>05 April, 2025</td>
                                                    <td>Low</td>
                                                    <td>IT Supplies</td>
                                                    <td>USB Drives</td>
                                                    <td>20 Units</td>
                                                    <td><span class="badge badge-soft-danger">Rejected Request</span></td>
                                                    <td>Olivia Scott</td>
                                                    <td>Daniel</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                               
                                <div class="tab-pane fade" id="processingEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Request ID</th>
                                                    <th>Date Of Request</th>
                                                    <th>Priority Level</th>
                                                    <th>Category</th>
                                                    <th>Item Requested</th>
                                                    <th>Quantity Required</th>
                                                    <th>Status</th>
                                                    <th>Requestor</th>
                                                    <th>Approved by</th>
                                                    <th>Actions</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- Rows with Rejected Request Status -->
                                                <tr>
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR010</a></td>
                                                    <td>08 April, 2025</td>
                                                    <td>High</td>
                                                    <td>Electronics</td>
                                                    <td>Laptops</td>
                                                    <td>4 Units</td>
                                                    <td><span class="badge badge-soft-primary">Approved Request</span></td>
                                                    <td>Emma Thompson</td>
                                                    <td>Oliver</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR011</a></td>
                                                    <td>12 April, 2025</td>
                                                    <td>Medium</td>
                                                    <td>Stationery</td>
                                                    <td>Marker Sets</td>
                                                    <td>8 Packs</td>
                                                    <td><span class="badge badge-soft-primary">Approved Request</span></td>
                                                    <td>James Brown</td>
                                                    <td>Charlotte</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                    <td><a href="procurement-other-department-request-detailpage.php">GPPR012</a></td>
                                                    <td>15 April, 2025</td>
                                                    <td>Low</td>
                                                    <td>Cleaning Supplies</td>
                                                    <td>Hand Sanitizers</td>
                                                    <td>15 Bottles</td>
                                                    <td><span class="badge badge-soft-primary">Approved Request</span></td>
                                                    <td>Mia Johnson</td>
                                                    <td>Lucas</td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <div class="d-flex">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade " id="ReqConfirmation">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Request ID</th>
                                                <th>Date Of Request</th>
                                                <th>Priority Level</th>
                                                <th>Category</th>
                                                <th>Item Requested</th>
                                                <th>Quantity Required</th>
                                                <th>Status</th>
                                                <th>Requestor</th>
                                                <th>Approved by</th>
                                                <th>Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="procurement-team-request-detail-page-confirmation.php">GPPR004</a></td>
                                            <td>22 March, 2025</td>
                                            <td>Medium</td>
                                            <td>Office Supplies</td>
                                            <td>Staplers</td>
                                            <td>5 Units</td>
                                            <td><span class="badge badge-soft-warning">Pending Confirmation</span></td>
                                            <td>Sophia Wilson</td>
                                            <td>Lucas</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-team-request-detail-page-confirmation.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- Edit Details Button -->
                                                        <!-- <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="Edit Request Details" href="procurement-request-edit.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a> -->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="procurement-team-request-detail-page-confirmation.php">GPPR005</a></td>
                                            <td>25 March, 2025</td>
                                            <td>High</td>
                                            <td>Electronics</td>
                                            <td>Projectors</td>
                                            <td>2 Units</td>
                                            <td><span class="badge badge-soft-warning">Pending Confirmation</span></td>
                                            <td>William Davis</td>
                                            <td>Amelia</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-team-request-detail-page-confirmation.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                            <td><a href="procurement-team-request-detail-page-confirmation.php">GPPR006</a></td>
                                            <td>28 March, 2025</td>
                                            <td>Low</td>
                                            <td>Cleaning Supplies</td>
                                            <td>Disinfectant Sprays</td>
                                            <td>10 Bottles</td>
                                            <td><span class="badge badge-soft-warning">Pending Confirmation</span></td>
                                            <td>Lucas Miller</td>
                                            <td>Grace</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-team-request-detail-page-confirmation.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                        <circle cx="12" cy="12" r="3"></circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    
                                    </div>

                                </div>

                                <!-- <div class="tab-pane fade" id="Enquiry_followup1">
                                    <div class="fullwidthTabInner_content_container">
                                    
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="Enquiry_followup2">
                                    <div class="fullwidthTabInner_content_container">
                                   
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

                                </div> -->

                                <div class="tab-pane fade" id="CancelledTickets">
                                    <div class="fullwidthTabInner_content_container">
                                    <table class="table common-datatable nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Request ID</th>
                                                    <th>Date Of Request</th>
                                                    <th>Priority Level</th>
                                                    <th>Category</th>
                                                    <th>Item Requested</th>
                                                    <th>Quantity Required</th>
                                                    <th>Status</th>
                                                    <th>Requestor</th>
                                                    <th>Approved by</th>
                                                    <th>Actions</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- Rows with Rejected Request Status -->
                                            <tr>
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR013</a></td>
                                                <td>18 April, 2025</td>
                                                <td>Medium</td>
                                                <td>Office Supplies</td>
                                                <td>Staplers</td>
                                                <td>5 Units</td>
                                                <td><span class="badge badge-soft-success">Delivered</span></td>
                                                <td>Ella Williams</td>
                                                <td>Thomas</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR014</a></td>
                                                <td>21 April, 2025</td>
                                                <td>High</td>
                                                <td>IT Equipment</td>
                                                <td>Wireless Keyboards</td>
                                                <td>10 Units</td>
                                                <td><span class="badge badge-soft-success">Delivered</span></td>
                                                <td>Noah Davis</td>
                                                <td>Amelia</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
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
                                                <td><a href="procurement-other-department-request-detailpage.php">GPPR015</a></td>
                                                <td>24 April, 2025</td>
                                                <td>Low</td>
                                                <td>Cleaning Supplies</td>
                                                <td>Disinfectant Sprays</td>
                                                <td>12 Cans</td>
                                                <td><span class="badge badge-soft-success">Delivered</span></td>
                                                <td>Lucas Martinez</td>
                                                <td>Grace</td>
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Request Details" href="procurement-other-department-request-detailpage.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <!-- <div class="tab-pane fade" id="MissedTickets">
                                    <div class="fullwidthTabInner_content_container">
                                    
                                       
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="archivedtickets">
                                    <div class="fullwidthTabInner_content_container">
                                       
                                    </div>

                                </div> -->

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

<!-- add material stock offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddMaterial"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="carbon:product"></iconify-icon>
            Add Material
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
    <form class="">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add Material</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Receipt No./ID <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Supplier <span
                                                class="RequiredField_badge">*</span></label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Danial Craig</option>
                                            <option value="2">Emily Blunt</option>
                                            <option value="3">John Doe</option>
                                            <option value="4">Sophia Turner</option>
                                            <option value="5">Michael Jordan</option>
                                            <option value="6">Olivia Smith</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Property <span
                                                class="RequiredField_badge">*</span></label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Name <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Qty. <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="number" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Price <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Receipts <span
                                                class="RequiredField_badge">*</span></label>
                                        <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Do you want to add material location
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="AddmaterialLocation">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="add-users-modal-body-table-header text-headline-6">Add Location
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="locationRows">
                                    <!-- Initial fields (this will be cloned when "Add More" is clicked) -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Material Location <span
                                                    class="RequiredField_badge">*</span></label>
                                            <select class="form-control select2" name="" id="">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="Stock Room">Stock Room</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Qty. <span
                                                    class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="number" name="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Doc/Shelf No.. <span
                                                    class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>

                                    <!-- Button to Add More -->
                                    <div class="col-lg-12">
                                        <div class="addSubUnitButton">
                                            <button class="btn btn-primary addFolderBtn AddpropertyUnit" type="button"
                                                id="addFolderBtn">
                                                <iconify-icon icon="ep:location"></iconify-icon> Add More
                                                <i class="bi bi-arrow-up-right-down-duotone"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="nodata" id="no_records" style="">
                                        <div class="nodataImg">
                                            <img src="dist/img/newimages/no-action-removebg-preview.png" alt="">
                                            <h6>No any data added</h6>
                                            <p>No records have been added yet.</p>
                                        </div>
                                    </div>

                                    <div class="Addedproductes_listing" id="added_products" style="display: none;">
                                        <div class="AdeddProduct_header">
                                            <div class="ReportTitle">
                                                <h3>Recent Added Products</h3>
                                                <div class="isAnswer">10/16/2020</div>
                                            </div>
                                        </div>

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="MtProduct_title">
                                                            <div class="mtprdct_lest">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="noteAuthor_title">
                                                                            John Doe</div>
                                                                        <div class="prproduct_location_property">
                                                                            Bedroom A, Apartment Apartment 2, City View
                                                                            @ Stepney
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mtprdct_right">
                                                                <div class="materialpr_name">
                                                                    <iconify-icon icon="carbon:product"></iconify-icon>
                                                                    <div class="materialprdtName_wrap"><label for=""
                                                                            class="form-label">Product Name :</label>
                                                                    </div> Ac Motor
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="surveyActionsContainer">
                                                            <div class="SurveyInnerBox">
                                                                <h6>Price: £32
                                                                </h6>
                                                                <h6>Qty: 1</h6>
                                                            </div>
                                                            <div class="LocationDetailMaterial">
                                                                <table
                                                                    class="table table-hover common_Tableall nodatatable datatable new_design_tb nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Material location</th>
                                                                            <th>Shelf no/Van Registration No.</th>
                                                                            <th>Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Stock Room</td>
                                                                            <td>12
                                                                            </td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="MtProduct_title">
                                                            <div class="mtprdct_lest">
                                                            <div class="media align-items-center">
                                                                <div class="media-head">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="noteAuthor_title">
                                                                    John Doe</div>
                                                                    <div class="prproduct_location_property">
                                                                    Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                                            <div class="mtprdct_right">
                                                            <div class="materialpr_name">
                                                            <iconify-icon icon="carbon:product"></iconify-icon>
                                                                <div class="materialprdtName_wrap"><label for="" class="form-label">Product Name :</label> </div> Ac Motor
                                                            </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                    <div class="surveyActionsContainer">
                                                            <div class="SurveyInnerBox">
                                                                <h6>Price: £32
                                                                </h6>
                                                                <h6>Qty: 1</h6>
                                                            </div>
                                                            <div class="LocationDetailMaterial">
                                                                <table
                                                                    class="table table-hover common_Tableall nodatatable datatable new_design_tb nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Material location</th>
                                                                            <th>Shelf no/Van Registration No.</th>
                                                                            <th>Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Stock Room</td>
                                                                            <td>12
                                                                            </td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

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
            <button type="button" class=" commonCanvas_buttonFooter AddmeterialProduct_submit"
                id="AddmeterialProduct_submit">Submit</button>
        </div>
    </form>
</div>
<!-- add material stock end -->

<!-- Edit material stock offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditmaterialDetails"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:document-remove" width="1.2em" height="1.2em"></iconify-icon>
            Edit Material Details
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
    <form class="material-stock.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add Material</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Receipt No./ID <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Supplier <span
                                                class="RequiredField_badge">*</span></label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Danial Craig</option>
                                            <option value="2">Emily Blunt</option>
                                            <option value="3">John Doe</option>
                                            <option value="4">Sophia Turner</option>
                                            <option value="5">Michael Jordan</option>
                                            <option value="6">Olivia Smith</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Property <span
                                                class="RequiredField_badge">*</span></label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Name <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Qty. <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="number" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Price <span
                                                class="RequiredField_badge">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Receipts <span
                                                class="RequiredField_badge">*</span></label>
                                        <input type="file" class="filepond" id="imageInput2" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Do you want to add material location
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="AddmaterialLocation">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="add-users-modal-body-table-header text-headline-6">Add Location
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="locationRows">
                                    <!-- Initial fields (this will be cloned when "Add More" is clicked) -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Material Location <span
                                                    class="RequiredField_badge">*</span></label>
                                            <select class="form-control select2" name="" id="">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="Stock Room">Stock Room</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Qty. <span
                                                    class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="number" name="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Doc/Shelf No.. <span
                                                    class="RequiredField_badge">*</span></label>
                                            <input class="form-control" type="text" name="" placeholder="">
                                        </div>
                                    </div>

                                    <!-- Button to Add More -->
                                    <div class="col-lg-12">
                                        <div class="addSubUnitButton">
                                            <button class="btn btn-primary addFolderBtn AddpropertyUnit" type="button"
                                                id="addFolderBtn">
                                                <iconify-icon icon="ep:location"></iconify-icon> Add More
                                                <i class="bi bi-arrow-up-right-down-duotone"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="Addedproductes_listing" id="added_products2">
                                        <div class="AdeddProduct_header">
                                            <div class="ReportTitle">
                                                <h3>Recent Added Products</h3>
                                                <div class="isAnswer">10/16/2020</div>
                                            </div>
                                        </div>

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="MtProduct_title">
                                                            <div class="mtprdct_lest">
                                                                <div class="media align-items-center">
                                                                    <div class="media-head">
                                                                        <div class="avatar avatar-xs avatar-rounded">
                                                                            <img src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="avatar-img">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="noteAuthor_title">
                                                                            John Doe</div>
                                                                        <div class="prproduct_location_property">
                                                                            Bedroom A, Apartment Apartment 2, City View
                                                                            @ Stepney
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mtprdct_right">
                                                                <div class="materialpr_name">
                                                                    <iconify-icon icon="carbon:product"></iconify-icon>
                                                                    <div class="materialprdtName_wrap"><label for=""
                                                                            class="form-label">Product Name :</label>
                                                                    </div> Ac Motor
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="surveyActionsContainer">
                                                            <div class="SurveyInnerBox">
                                                                <h6>Price: £32
                                                                </h6>
                                                                <h6>Qty: 1</h6>
                                                            </div>
                                                            <div class="LocationDetailMaterial">
                                                                <table
                                                                    class="table table-hover common_Tableall nodatatable datatable new_design_tb nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Material location</th>
                                                                            <th>Shelf no/Van Registration No.</th>
                                                                            <th>Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Stock Room</td>
                                                                            <td>12
                                                                            </td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="MtProduct_title">
                                                            <div class="mtprdct_lest">
                                                            <div class="media align-items-center">
                                                                <div class="media-head">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                            alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="noteAuthor_title">
                                                                    John Doe</div>
                                                                    <div class="prproduct_location_property">
                                                                    Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                                            <div class="mtprdct_right">
                                                            <div class="materialpr_name">
                                                            <iconify-icon icon="carbon:product"></iconify-icon>
                                                                <div class="materialprdtName_wrap"><label for="" class="form-label">Product Name :</label> </div> Ac Motor
                                                            </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                    <div class="surveyActionsContainer">
                                                            <div class="SurveyInnerBox">
                                                                <h6>Price: £32
                                                                </h6>
                                                                <h6>Qty: 1</h6>
                                                            </div>
                                                            <div class="LocationDetailMaterial">
                                                                <table
                                                                    class="table table-hover common_Tableall nodatatable datatable new_design_tb nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Material location</th>
                                                                            <th>Shelf no/Van Registration No.</th>
                                                                            <th>Qty</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Stock Room</td>
                                                                            <td>12
                                                                            </td>
                                                                            <td>1</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

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
            <button type="submit" class=" canvasSubmit_button commonCanvas_buttonFooter AddmeterialProduct_submit"
                id="AddmeterialProduct_submit2">Submit</button>
        </div>
    </form>
</div>
<!-- edit material stock end -->

<!-- Add Supplier offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddSupplier_modal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="si:user-duotone"></iconify-icon>
            Add Supplier
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
    <form class="material-stock.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">All New Supplier </div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Supplier Name <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Email <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Phone
                                    Number</label>
                                <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                    <!-- Selected prefix -->
                                    <button class="pn-selected-prefix" type="button"
                                        aria-label="Select phonenumber prefix" id="js_trigger-dropdown" tabindex="1">
                                        <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                            src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                        <!-- prettier-ignore -->
                                        <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#081626"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                    </button>
                                    <!-- Phone number input -->
                                    <div class="pn-input">
                                        <div class="pn-input__container">
                                            <input class="pn-input__prefix" value="+31" type="text"
                                                name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                            <input class="pn-input__phonenumber" id="js_input-phonenumber" type="tel"
                                                name="phonenumber" pattern="\d*" value="" placeholder=" "
                                                autocomplete="nope" max="10" tabindex="0" />
                                            <small class="pn-input__error">
                                                This is not a valid
                                                phone number
                                            </small>
                                        </div>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class="pn-dropdown" id="js_dropdown">
                                        <div class="pn-search">
                                            <!-- prettier-ignore -->
                                            <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="#103155"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8">
                                                </circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                            <input placeholder="Search for countries" class="pn-search__input search"
                                                type="search" id="js_search-input" autocomplete="nope" />
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

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Tin No. <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Business Registration Number <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Address Line 1 <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Address Line 2 <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Town/City <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <select class="form-control select2 countrySelect">
                                    <option disabled selected value="">Please
                                        Select...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Postcode <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class=" canvasSubmit_button commonCanvas_buttonFooter AddmeterialProduct_submit"
                id="AddmeterialProduct_submit2">Submit</button>
        </div>
    </form>
</div>
<!-- Add Supplier  end -->

<!-- Edit Supplier offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditSupplier"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="si:user-duotone"></iconify-icon>
            Edit Supplier Details
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
    <form class="material-stock.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">All New Supplier </div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Supplier Name <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Email <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Phone
                                    Number</label>
                                <div class="pn-select" id="js_pn-select" style="--prefix-length: 2">
                                    <!-- Selected prefix -->
                                    <button class="pn-selected-prefix" type="button"
                                        aria-label="Select phonenumber prefix" id="js_trigger-dropdown" tabindex="1">
                                        <img class="pn-selected-prefix__flag" id="js_selected-flag"
                                            src="https://flagpedia.net/data/flags/icon/36x27/nl.png" />
                                        <!-- prettier-ignore -->
                                        <svg class="pn-selected-prefix__icon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#081626"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                    </button>
                                    <!-- Phone number input -->
                                    <div class="pn-input">
                                        <div class="pn-input__container">
                                            <input class="pn-input__prefix" value="+31" type="text"
                                                name="phonenumber-prefix" id="js_number-prefix" tabindex="-1" />
                                            <input class="pn-input__phonenumber" id="js_input-phonenumber" type="tel"
                                                name="phonenumber" pattern="\d*" value="" placeholder=" "
                                                autocomplete="nope" max="10" tabindex="0" />
                                            <small class="pn-input__error">
                                                This is not a valid
                                                phone number
                                            </small>
                                        </div>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class="pn-dropdown" id="js_dropdown">
                                        <div class="pn-search">
                                            <!-- prettier-ignore -->
                                            <svg class="pn-search__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="#103155"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8">
                                                </circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                            <input placeholder="Search for countries" class="pn-search__input search"
                                                type="search" id="js_search-input" autocomplete="nope" />
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

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Tin No. <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Business Registration Number <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Address Line 1 <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Address Line 2 <span
                                        class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Town/City <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <select class="form-control select2 countrySelect">
                                    <option disabled selected value="">Please
                                        Select...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Postcode <span class="RequiredField_badge">*</span></label>
                                <input class="form-control" type="text" name="" placeholder="">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class=" canvasSubmit_button commonCanvas_buttonFooter AddmeterialProduct_submit"
                id="AddmeterialProduct_submit2">Submit</button>
        </div>
    </form>
</div>
<!-- Edit Supplier  end -->

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

<!-- for two time uses -->
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

<!-- add material locations js  -->
<script>
    $(document).ready(function() {
        // When the "Add More" button is clicked
        $('#addFolderBtn').on('click', function() {
            // Clone the three column divs (excluding the header and the "Add More" button)
            var newLocation = `
            <div class="row new-location-row">
                <div class="col-lg-11">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Material Location <span class="RequiredField_badge">*</span></label>
                <select class="form-control select2" name="" id="">
                    <option disabled="" selected="" value="">Please Select...</option>
                    <option value="Stock Room">Stock Room</option>
                </select>
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label">Qty. <span class="RequiredField_badge">*</span></label>
                <input class="form-control" type="number" name="" placeholder="">
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label">Doc/Shelf No.. <span class="RequiredField_badge">*</span></label>
                <input class="form-control" type="text" name="" placeholder="">
            </div>
        </div>
    </div>
</div>

                <div class="col-lg-1 flex_columnRight">
                <div class="form-group">
                <button class="btn btn-danger delete-location dltappendlocation_btn" type="button"><iconify-icon icon="fluent:delete-32-regular"></iconify-icon></button>
            </div>
           
        </div>

            </div>
        `;
            // Append the new row to the location container
            $('#locationRows').append(newLocation);
            // Reinitialize select2 on the new select elements
            $('.select2').select2();
            // Add functionality to the delete button
            $('.delete-location').on('click', function() {
                // Remove the current location row
                $(this).closest('.new-location-row').remove();
            });
        });
    });
</script>

<!-- add meterial canvas submit js -->
<script>
    document.getElementById("AddmeterialProduct_submit").addEventListener("click", function() {
        // Hide the no data div
        document.getElementById("no_records").style.display = "none";
        // Show the added products listing
        document.getElementById("added_products").style.display = "block";
    });
</script>

<!-- form country option dynamic using Json  -->
<script>
    $(document).ready(function() {
        // Initialize select2
        $('.countrySelect').select2({
            placeholder: "Please Select...",
            allowClear: true
        });
        // Fetch country data from the API
        $.ajax({
            url: 'all-countries.json', // API URL to get all countries
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                var $select = $('.countrySelect');
                $select.empty(); // Clear existing options
                $select.append(
                    '<option disabled selected value="">Please Select...</option>'
                ); // Add placeholder option
                // Iterate over the response data and populate options
                $.each(response, function(index, country) {
                    var countryName = country.name.common; // Access the common name
                    var countryCode = country.cca2; // Access the country code (2-letter)
                    // Check if countryName and countryCode are not undefined
                    if (countryName && countryCode) {
                        // Add each country as an option in the select
                        $select.append('<option value="' + countryCode + '">' +
                            countryName + '</option>');
                    }
                });
                // Reinitialize Select2 to apply new options
                $('.countrySelect').select2();
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch country data:', error);
            }
        });
    });
</script>
<!-- form country option dynamic using Json  -->

<!-- phone number with country code custom code js and css -->
<link rel="stylesheet" href="dist/customplugins/phonecountry/phone-with-country.css">
<script src="dist/customplugins/phonecountry/list.min.js"></script>
<script src="dist/customplugins/phonecountry/phone-with-country.js"></script>
<!-- phone number with country code custom code js and css end-->
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
                                                <div class="Cardcount-name">Total Stale Tickets</div>
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
                                                    <span class="initial-wrap cardiconBGColor_3">
                                                        <iconify-icon icon="mdi:view-arrow-left-outline"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="Cardcount-name">Tickets overdue</div>
                                                <div class="NumberCountCard">800 </div>

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
                                                <div class="Cardcount-name"> Emergency Tickets</div>
                                                <div class="NumberCountCard">14 </div>

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
                                    <h1>All Tickets</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#addissueModal"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add Ticket
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
                    <div class="fullwidthDesktopTabs MobileScrollShow " id="nopaddingTop">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul  class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">


                                <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#allEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">All Tickets</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-bs-toggle="tab" href="#openEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Staff Tickets</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#processingEnquiry">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Tenant Tickets</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup1">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Landlord Tickets</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Enquiry_followup2">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Emergency Tickets</span>

                                            </div>
                                        </a>
                                    </li>

                                    <!-- <li class="nav-item">
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
                                    </li> -->

                                    
                                   
                                </ul>
                                <button class="scroll-btn next" type="button">
                                    <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                </button>

                            </div>
                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                        <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Accounts</option>
                                            <option value="3">General</option>
                                            <option value="4">Complaints Ticket</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Area</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Bedroom">Bedroom</option>
                                            <option value="Kitchen">Kitchen</option>
                                            <option value="Bathroom">Bathroom</option>
                                            <option value="Living Room">Living Room</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>
                                            <option value="1170">Interior Walls</option>
                                            <option value="1171">Alarms</option>
                                            <option value="1175">Fire</option>
                                            <option value="1176">Leak</option>
                                            <option value="1177">Heating</option>
                                            <option value="1178">Exterior</option>
                                            <option value="1182">Roof</option>
                                            <option value="1183">Windows</option>
                                            <option value="1186">Doors</option>
                                            <option value="1189">Utilities &amp; Services</option>
                                            <option value="1194">Pests/Vermin</option>
                                            <option value="1198">Shared/Communal Facilities</option>
                                            <option value="1203">Other</option>
                                            <option value="1210">Boiler</option>
                                            <option value="1242">Fire Extinguisher</option>
                                            <option value="1244">Heatworx</option>
                                            <option value="1248">ILS (Ian Smith)</option>
                                            <option value="1255">Kevin (Electrician)</option>
                                            <option value="1267">Garry (Electrician)</option>
                                            <option value="1273">UK Lifts</option>
                                            <option value="1274">MacDonald Martin</option>
                                            <option value="1279">GEMS (Peter Goldwater)</option>
                                            <option value="1282">TLJ</option>
                                            <option value="1283">Kwik Flow</option>
                                            <option value="1290">Rafal Jeske</option>
                                            <option value="1295">Emergency Call Out</option>
                                            <option value="1296">Ashbrooke Audio Visual</option>
                                            <option value="1298">Computers/Printers</option>
                                            <option value="1299">Lights</option>
                                            <option value="1300">Routine Cleaning</option>
                                            <option value="1302">Property Inspection</option>
                                            <option value="1303">Portable Heaters</option>
                                            <option value="1307">Hot Water</option>
                                            <option value="1308">Service Report Recommendations</option>
                                            <option value="1309">Routine Fire Alarm Testing</option>
                                            <option value="1310">Routine Emergency Light Testing</option>
                                            <option value="1311">Legionella Test</option>
                                            <option value="1312">Fire Extinguinsher Check</option>
                                            <option value="1315">CG Plumbing and Heating</option>
                                            <option value="1316">Check Out Appointment</option>
                                            <option value="1317">Check-In Appointment</option>
                                            <option value="1318">Furniture Renewal</option>
                                            <option value="1319">Tenant Lock Out</option>
                                            <option value="1320">Air BND</option>
                                            <option value="1321">Viewing</option>
                                            <option value="1322">Welcome Letter</option>
                                            <option value="1323">Expansion Vessel Inspection</option>
                                            <option value="1324">Late Payment Charge</option>
                                            <option value="1325">Rent</option>
                                            <option value="1326">General Enquiries</option>
                                            <option value="1327">Cancellation of Tenancy Contract</option>
                                            <option value="1328">Marketing</option>
                                            <option value="1329">Emergency Call Out</option>
                                            <option value="1330">Student Exemption Certificates</option>
                                            <option value="1331">New Tenant</option>
                                            <option value="1332">Dental</option>
                                            <option value="1333">Council Tax</option>
                                            <option value="1338">Corridors</option>
                                            <option value="1339">PCC Room</option>
                                            <option value="1350">Office Time </option>
                                            <option value="1351">Staff Holidays </option>
                                            <option value="1352">Laundry Credit Cards</option>
                                            <option value="1353">Unable to Clean</option>
                                            <option value="1354">Tenancy Renewal</option>
                                            <option value="1356">Monthly Washing Machine Clean</option>
                                            <option value="1357">Order Cleaning Products</option>
                                            <option value="1359">Require Vacuum</option>
                                            <option value="1360">Post Tenancy Key Return</option>
                                            <option value="1361">Self Isolation</option>
                                            <option value="1365">Presentation Room Leazes Terraces Reservation</option>
                                            <option value="1371">PAT Testing</option>
                                            <option value="1373">Overtime Claim Back</option>
                                            <option value="1374">Sick Leave</option>
                                            <option value="1375">Guest Overnight Stay</option>
                                            <option value="1376">Green Push Button</option>
                                            <option value="1379">End of Term Departure</option>
                                            <option value="1380">Emergency On Call</option>
                                            <option value="1381">Lock Laundry room between 10-12PM</option>
                                            <option value="1382">Jopling House Communal Rooms</option>
                                            <option value="1412">Mental Wellbeing &amp; Counselling</option>
                                            <option value="1415">Order Building Materials</option>
                                            <option value="1416">Cleaning Stock List</option>
                                            <option value="1417">Laundry Coins</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Sub Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Ticket Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="General Enquiry Ticket">General Enquiry Ticket</option>
                                            <option value="Maintenance Ticket">Maintenance Ticket</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">User Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Landlord">Landlord</option>
                                            <option value="Tenant">Tenant</option>
                                            <option value="Staff">Staff</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
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

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Emergency">Emergency</option>
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Overdue">Overdue</option>
        <option value="Pending">Pending</option>

                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-2">

                                                                <div class="form-group">
                                                                    <label class="form-label">Expected Finish Date</label>
                                                                    <input class="form-control customdataPicker flatpickr-input" type="text" name="" value="01/06/2024" readonly="readonly">
                                                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
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

                                                <table class="table common-datatable  nowrap w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket ID</th>
                                                            <th>Ticket Title</th>
                                                            <th>Property</th>
                                                            <th>Area</th>
                                                            <th>Department</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Ticket Category</th>
                                                            <th>Issued By</th>
                                                            <th>User Type</th>
                                                            <th>Status</th>
                                                            <th>Raised On</th>
                                                            <th>Expected Finish Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2073</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Manchester</td>
                                                            <td>Accounts</td>
                                                            <td>Bathroom</td>
                                                            <td>Wall</td>
                                                            <td>Maintenance Ticket</td>
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
                                                            <td>Staff</td>
                                                            <td><span class="badge bg-info">Overdue</span></td>

                                                            <td>09/04/2024 17:19</td>
                                                            <td>25/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2023</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Sunderland</td>
                                                            <td>Maintenance</td>
                                                            <td>Living Room</td>
                                                            <td>Floor</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Dean Shaw</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>Tenant</td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 14:45</td>
                                                            <td>27/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2054</a></td>
                                                            <td>Deep Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bristol</td>
                                                            <td>Operations</td>
                                                            <td>Kitchen</td>
                                                            <td>Ceiling</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Tom Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>Landlord</td>
                                                            <td><span class="badge  urgentTicket_status my-1 me-2">Emergency</span></td>
                                                            <td>08/04/2024 11:30</td>
                                                            <td>29/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#1273</a></td>
                                                            <td>General Inspection</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Kitchen</td>
                                                            <td>Security</td>
                                                            <td>Lobby</td>
                                                            <td>Windows</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Huma Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>Staff</td>
                                                            <td><span class="badge bg-primary">In Progress</span></td>
                                                            <td>09/04/2024 09:15</td>
                                                            <td>23/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2543</a></td>
                                                            <td>Emergency Repair</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bedroom</td>
                                                            <td>Maintenance</td>
                                                            <td>Hallway</td>
                                                            <td>Door</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Danial Craig</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>Tenant</td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 12:00</td>
                                                            <td>26/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
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
                                <div class="tab-pane fade " id="openEnquiry">
                                    <div class="fullwidthTabInner_content_container">
                                        <!-- <div class="docfilterbutton">
                                            <h2 class="tabinnerTitle">Enquiry Statuses </h2>
                                        </div> -->
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div class="contact-list-view">

                                                <table class="table common-datatable  nowrap w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket ID</th>
                                                            <th>Ticket Title</th>
                                                            <th>Property</th>
                                                            <th>Area</th>
                                                            <th>Department</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Ticket Category</th>
                                                            <th>issued By</th>
                                                            <th>Status</th>
                                                            <th>Raised On</th>
                                                            <th>Expected Finish Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2073</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Manchester</td>
                                                            <td>Accounts</td>
                                                            <td>Bathroom</td>
                                                            <td>Wall</td>
                                                            <td>Maintenance Ticket</td>
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
                                                            <td><span class="badge bg-info">Overdue</span></td>

                                                            <td>09/04/2024 17:19</td>
                                                            <td>25/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2023</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Sunderland</td>
                                                            <td>Maintenance</td>
                                                            <td>Living Room</td>
                                                            <td>Floor</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Dean Shaw</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 14:45</td>
                                                            <td>27/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2054</a></td>
                                                            <td>Deep Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bristol</td>
                                                            <td>Operations</td>
                                                            <td>Kitchen</td>
                                                            <td>Ceiling</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Tom Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge  urgentTicket_status my-1 me-2">Emergency</span></td>
                                                            <td>08/04/2024 11:30</td>
                                                            <td>29/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#1273</a></td>
                                                            <td>General Inspection</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Kitchen</td>
                                                            <td>Security</td>
                                                            <td>Lobby</td>
                                                            <td>Windows</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Huma Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-primary">In Progress</span></td>
                                                            <td>09/04/2024 09:15</td>
                                                            <td>23/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2543</a></td>
                                                            <td>Emergency Repair</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bedroom</td>
                                                            <td>Maintenance</td>
                                                            <td>Hallway</td>
                                                            <td>Door</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Danial Craig</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 12:00</td>
                                                            <td>26/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
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
                                <div class="tab-pane fade" id="processingEnquiry">
                                <div class="fullwidthTabInner_content_container">
                                        <!-- <div class="docfilterbutton">
                                            <h2 class="tabinnerTitle">Enquiry Statuses </h2>
                                        </div> -->
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div class="contact-list-view">

                                                <table class="table common-datatable  nowrap w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket ID</th>
                                                            <th>Ticket Title</th>
                                                            <th>Property</th>
                                                            <th>Area</th>
                                                            <th>Department</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Ticket Category</th>
                                                            <th>issued By</th>
                                                            <th>Status</th>
                                                            <th>Raised On</th>
                                                            <th>Expected Finish Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2073</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Manchester</td>
                                                            <td>Accounts</td>
                                                            <td>Bathroom</td>
                                                            <td>Wall</td>
                                                            <td>Maintenance Ticket</td>
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
                                                            <td><span class="badge bg-info">Overdue</span></td>

                                                            <td>09/04/2024 17:19</td>
                                                            <td>25/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2023</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Sunderland</td>
                                                            <td>Maintenance</td>
                                                            <td>Living Room</td>
                                                            <td>Floor</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Dean Shaw</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 14:45</td>
                                                            <td>27/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2054</a></td>
                                                            <td>Deep Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bristol</td>
                                                            <td>Operations</td>
                                                            <td>Kitchen</td>
                                                            <td>Ceiling</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Tom Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge  urgentTicket_status my-1 me-2">Emergency</span></td>
                                                            <td>08/04/2024 11:30</td>
                                                            <td>29/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#1273</a></td>
                                                            <td>General Inspection</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Kitchen</td>
                                                            <td>Security</td>
                                                            <td>Lobby</td>
                                                            <td>Windows</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Huma Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-primary">In Progress</span></td>
                                                            <td>09/04/2024 09:15</td>
                                                            <td>23/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2543</a></td>
                                                            <td>Emergency Repair</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bedroom</td>
                                                            <td>Maintenance</td>
                                                            <td>Hallway</td>
                                                            <td>Door</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Danial Craig</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 12:00</td>
                                                            <td>26/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
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

                                <div class="tab-pane fade" id="Enquiry_followup1">
                                <div class="fullwidthTabInner_content_container">
                                        <!-- <div class="docfilterbutton">
                                            <h2 class="tabinnerTitle">Enquiry Statuses </h2>
                                        </div> -->
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div class="contact-list-view">

                                                <table class="table common-datatable  nowrap w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket ID</th>
                                                            <th>Ticket Title</th>
                                                            <th>Property</th>
                                                            <th>Area</th>
                                                            <th>Department</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Ticket Category</th>
                                                            <th>issued By</th>
                                                            <th>Status</th>
                                                            <th>Raised On</th>
                                                            <th>Expected Finish Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2073</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Manchester</td>
                                                            <td>Accounts</td>
                                                            <td>Bathroom</td>
                                                            <td>Wall</td>
                                                            <td>Maintenance Ticket</td>
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
                                                            <td><span class="badge bg-info">Overdue</span></td>

                                                            <td>09/04/2024 17:19</td>
                                                            <td>25/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2023</a></td>
                                                            <td>Routine Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Sunderland</td>
                                                            <td>Maintenance</td>
                                                            <td>Living Room</td>
                                                            <td>Floor</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Dean Shaw</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 14:45</td>
                                                            <td>27/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2054</a></td>
                                                            <td>Deep Cleaning</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bristol</td>
                                                            <td>Operations</td>
                                                            <td>Kitchen</td>
                                                            <td>Ceiling</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Tom Cruz</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge  urgentTicket_status my-1 me-2">Emergency</span></td>
                                                            <td>08/04/2024 11:30</td>
                                                            <td>29/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#1273</a></td>
                                                            <td>General Inspection</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Kitchen</td>
                                                            <td>Security</td>
                                                            <td>Lobby</td>
                                                            <td>Windows</td>
                                                            <td>Maintenance Ticket</td>
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
                                                                            <span class="d-block text-high-em">Huma Therman</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-primary">In Progress</span></td>
                                                            <td>09/04/2024 09:15</td>
                                                            <td>23/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                                    </iconify-icon>
                                                                                </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="view-ticket.php" class="highlightLink">#2543</a></td>
                                                            <td>Emergency Repair</td>
                                                            <td>
                                                                <div class="LongMesage_container">
                                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                                        value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
                                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="Click to view"
                                                                        data-bs-original-title="Click to view Full Message">
                                                                        <i class="bi bi-eye"></i> Read More
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>Bedroom</td>
                                                            <td>Maintenance</td>
                                                            <td>Hallway</td>
                                                            <td>Door</td>
                                                            <td>General Enquiry Ticket</td>
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
                                                                            <span class="d-block text-high-em">Danial Craig</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning my-1 me-2">Pending</span></td>
                                                            <td>09/04/2024 12:00</td>
                                                            <td>26/11/2024</td>
                                                            <td>
                                                                <div class="d-flex align-items-center ActionDropdown">
                                                                    <div class="d-flex">
                                                                        <a href="view-ticket.php"
                                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            type="button"><span class="icon"><span class="feather-icon">
                                                                                    <iconify-icon icon="teenyicons:eye-outline">
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

                                <div class="tab-pane fade" id="Enquiry_followup2">
                                <div class="fullwidthTabInner_content_container">
                                        <!-- <div class="docfilterbutton">
                                            <h2 class="tabinnerTitle">Enquiry Statuses </h2>
                                        </div> -->
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="contact-list-view">

                                                    <table class="table common-datatable  nowrap w-100 ">
                                                        <thead>
                                                            <tr>
                                                                <th>Ticket ID</th>
                                                                <th>Ticket Title</th>
                                                                <th>Property</th>
                                                                <th>Area</th>
                                                                <th>Department</th>
                                                                <th>Category</th>
                                                                <th>Sub Category</th>
                                                                <th>Ticket Category</th>
                                                                <th>Issued By</th>
                                                                <th>User Type</th>
                                                                <th>Status</th>
                                                                <th>Raised On</th>
                                                                <th>Expected Finish Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><a href="view-ticket.php" class="highlightLink">#2073</a></td>
                                                                <td>Routine Cleaning</td>
                                                                <td>
                                                                    <div class="LongMesage_container">
                                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                                            value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            aria-label="Click to view"
                                                                            data-bs-original-title="Click to view Full Message">
                                                                            <i class="bi bi-eye"></i> Read More
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>Manchester</td>
                                                                <td>Accounts</td>
                                                                <td>Bathroom</td>
                                                                <td>Wall</td>
                                                                <td>Maintenance Ticket</td>
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
                                                                <td>Staff</td>
                                                                <td><span class="badge bg-danger">Emergency</span></td>

                                                                <td>09/04/2024 17:19</td>
                                                                <td>25/11/2024</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <div class="d-flex">
                                                                            <a href="view-ticket.php"
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                type="button"><span class="icon"><span class="feather-icon">
                                                                                        <iconify-icon icon="teenyicons:eye-outline">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="view-ticket.php" class="highlightLink">#2023</a></td>
                                                                <td>Routine Cleaning</td>
                                                                <td>
                                                                    <div class="LongMesage_container">
                                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                                            value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            aria-label="Click to view"
                                                                            data-bs-original-title="Click to view Full Message">
                                                                            <i class="bi bi-eye"></i> Read More
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>Sunderland</td>
                                                                <td>Maintenance</td>
                                                                <td>Living Room</td>
                                                                <td>Floor</td>
                                                                <td>Maintenance Ticket</td>
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
                                                                                <span class="d-block text-high-em">Dean Shaw</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Tenant</td>
                                                                <td><span class="badge bg-danger">Emergency</span></td>
                                                                <td>09/04/2024 14:45</td>
                                                                <td>27/11/2024</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <div class="d-flex">
                                                                            <a href="view-ticket.php"
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                type="button"><span class="icon"><span class="feather-icon">
                                                                                        <iconify-icon icon="teenyicons:eye-outline">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><a href="view-ticket.php" class="highlightLink">#2054</a></td>
                                                                <td>Deep Cleaning</td>
                                                                <td>
                                                                    <div class="LongMesage_container">
                                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                                            value="Kitchen 206, Flat 12 (Floor 3, No12), Sea View@Oceanic Towers">
                                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            aria-label="Click to view"
                                                                            data-bs-original-title="Click to view Full Message">
                                                                            <i class="bi bi-eye"></i> Read More
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>Bristol</td>
                                                                <td>Operations</td>
                                                                <td>Kitchen</td>
                                                                <td>Ceiling</td>
                                                                <td>General Enquiry Ticket</td>
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
                                                                                <span class="d-block text-high-em">Tom Cruz</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Landlord</td>
                                                                <td><span class="badge bg-danger">Emergency</span></td>
                                                                <td>08/04/2024 11:30</td>
                                                                <td>29/11/2024</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <div class="d-flex">
                                                                            <a href="view-ticket.php"
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                type="button"><span class="icon"><span class="feather-icon">
                                                                                        <iconify-icon icon="teenyicons:eye-outline">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><a href="view-ticket.php" class="highlightLink">#1273</a></td>
                                                                <td>General Inspection</td>
                                                                <td>
                                                                    <div class="LongMesage_container">
                                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                                            value="Lobby 002, Flat 1 (Ground Floor, No1), Street View@Central Plaza">
                                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            aria-label="Click to view"
                                                                            data-bs-original-title="Click to view Full Message">
                                                                            <i class="bi bi-eye"></i> Read More
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>Kitchen</td>
                                                                <td>Security</td>
                                                                <td>Lobby</td>
                                                                <td>Windows</td>
                                                                <td>Maintenance Ticket</td>
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
                                                                                <span class="d-block text-high-em">Huma Therman</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Staff</td>
                                                                <td><span class="badge bg-danger">Emergency</span></td>
                                                                <td>09/04/2024 09:15</td>
                                                                <td>23/11/2024</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <div class="d-flex">
                                                                            <a href="view-ticket.php"
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                type="button"><span class="icon"><span class="feather-icon">
                                                                                        <iconify-icon icon="teenyicons:eye-outline">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><a href="view-ticket.php" class="highlightLink">#2543</a></td>
                                                                <td>Emergency Repair</td>
                                                                <td>
                                                                    <div class="LongMesage_container">
                                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                                            value="Hallway 305, Flat 15 (Floor 3, No15), River View@Riverside Residences">
                                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            aria-label="Click to view"
                                                                            data-bs-original-title="Click to view Full Message">
                                                                            <i class="bi bi-eye"></i> Read More
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>Bedroom</td>
                                                                <td>Maintenance</td>
                                                                <td>Hallway</td>
                                                                <td>Door</td>
                                                                <td>General Enquiry Ticket</td>
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
                                                                                <span class="d-block text-high-em">Danial Craig</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>Tenant</td>
                                                                <td><span class="badge bg-danger">Emergency</span></td>
                                                                <td>09/04/2024 12:00</td>
                                                                <td>26/11/2024</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <div class="d-flex">
                                                                            <a href="view-ticket.php"
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                type="button"><span class="icon"><span class="feather-icon">
                                                                                        <iconify-icon icon="teenyicons:eye-outline">
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

<!-- add ticket offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addissueModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="pajamas:issue-type-incident" width="1.2em" height="1.2em"></iconify-icon>
            Add Ticket
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
    <form class="" action="tickets.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Ticket</div>
                <div class="formstartcontainer">
                    <div class="row">
                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Ticket Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Accounts</option>
                                            <option value="3">General</option>
                                            <option value="4">Complaints Ticket</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Ares</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Bedroom">Bedroom</option>
                                            <option value="Kitchen">Kitchen</option>
                                            <option value="Bathroom">Bathroom</option>
                                            <option value="Living Room">Living Room</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>
                                            <option value="1170">Interior Walls</option>
                                            <option value="1171">Alarms</option>
                                            <option value="1175">Fire</option>
                                            <option value="1176">Leak</option>
                                            <option value="1177">Heating</option>
                                            <option value="1178">Exterior</option>
                                            <option value="1182">Roof</option>
                                            <option value="1183">Windows</option>
                                            <option value="1186">Doors</option>
                                            <option value="1189">Utilities &amp; Services</option>
                                            <option value="1194">Pests/Vermin</option>
                                            <option value="1198">Shared/Communal Facilities</option>
                                            <option value="1203">Other</option>
                                            <option value="1210">Boiler</option>
                                            <option value="1242">Fire Extinguisher</option>
                                            <option value="1244">Heatworx</option>
                                            <option value="1248">ILS (Ian Smith)</option>
                                            <option value="1255">Kevin (Electrician)</option>
                                            <option value="1267">Garry (Electrician)</option>
                                            <option value="1273">UK Lifts</option>
                                            <option value="1274">MacDonald Martin</option>
                                            <option value="1279">GEMS (Peter Goldwater)</option>
                                            <option value="1282">TLJ</option>
                                            <option value="1283">Kwik Flow</option>
                                            <option value="1290">Rafal Jeske</option>
                                            <option value="1295">Emergency Call Out</option>
                                            <option value="1296">Ashbrooke Audio Visual</option>
                                            <option value="1298">Computers/Printers</option>
                                            <option value="1299">Lights</option>
                                            <option value="1300">Routine Cleaning</option>
                                            <option value="1302">Property Inspection</option>
                                            <option value="1303">Portable Heaters</option>
                                            <option value="1307">Hot Water</option>
                                            <option value="1308">Service Report Recommendations</option>
                                            <option value="1309">Routine Fire Alarm Testing</option>
                                            <option value="1310">Routine Emergency Light Testing</option>
                                            <option value="1311">Legionella Test</option>
                                            <option value="1312">Fire Extinguinsher Check</option>
                                            <option value="1315">CG Plumbing and Heating</option>
                                            <option value="1316">Check Out Appointment</option>
                                            <option value="1317">Check-In Appointment</option>
                                            <option value="1318">Furniture Renewal</option>
                                            <option value="1319">Tenant Lock Out</option>
                                            <option value="1320">Air BND</option>
                                            <option value="1321">Viewing</option>
                                            <option value="1322">Welcome Letter</option>
                                            <option value="1323">Expansion Vessel Inspection</option>
                                            <option value="1324">Late Payment Charge</option>
                                            <option value="1325">Rent</option>
                                            <option value="1326">General Enquiries</option>
                                            <option value="1327">Cancellation of Tenancy Contract</option>
                                            <option value="1328">Marketing</option>
                                            <option value="1329">Emergency Call Out</option>
                                            <option value="1330">Student Exemption Certificates</option>
                                            <option value="1331">New Tenant</option>
                                            <option value="1332">Dental</option>
                                            <option value="1333">Council Tax</option>
                                            <option value="1338">Corridors</option>
                                            <option value="1339">PCC Room</option>
                                            <option value="1350">Office Time </option>
                                            <option value="1351">Staff Holidays </option>
                                            <option value="1352">Laundry Credit Cards</option>
                                            <option value="1353">Unable to Clean</option>
                                            <option value="1354">Tenancy Renewal</option>
                                            <option value="1356">Monthly Washing Machine Clean</option>
                                            <option value="1357">Order Cleaning Products</option>
                                            <option value="1359">Require Vacuum</option>
                                            <option value="1360">Post Tenancy Key Return</option>
                                            <option value="1361">Self Isolation</option>
                                            <option value="1365">Presentation Room Leazes Terraces Reservation</option>
                                            <option value="1371">PAT Testing</option>
                                            <option value="1373">Overtime Claim Back</option>
                                            <option value="1374">Sick Leave</option>
                                            <option value="1375">Guest Overnight Stay</option>
                                            <option value="1376">Green Push Button</option>
                                            <option value="1379">End of Term Departure</option>
                                            <option value="1380">Emergency On Call</option>
                                            <option value="1381">Lock Laundry room between 10-12PM</option>
                                            <option value="1382">Jopling House Communal Rooms</option>
                                            <option value="1412">Mental Wellbeing &amp; Counselling</option>
                                            <option value="1415">Order Building Materials</option>
                                            <option value="1416">Cleaning Stock List</option>
                                            <option value="1417">Laundry Coins</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sub Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Bathroom</option>
                                            <option value="1147">Bedroom</option>
                                            <option value="1151">Dining Room</option>
                                            <option value="1154">Kitchen</option>
                                            <option value="1161">Living Room</option>
                                            <option value="1165">Lighting</option>
                                            <option value="1169">Flooring</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Ticket Category</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="General Enquiry Ticket">General Enquiry Ticket</option>
                                            <option value="Maintenance Ticket">Maintenance Ticket</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">User Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Landlord">Landlord</option>
                                            <option value="Tenant">Tenant</option>
                                            <option value="Staff">Staff</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
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

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Emergency">Emergency</option>
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Overdue">Overdue</option>
        <option value="Pending">Pending</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Expected Finish Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name="" placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Description</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Images</label>
                                        <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="container">
                                            <label class="form-label">Upload Videos</label>
                                            <input type="file" class="filepondVideo" id="videoInput" name="videoInput"
                                                multiple data-max-file-size="50MB" data-max-files="10">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Request presence during maintenance?
                                            </label>
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
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit Ticket</button>
        </div>
    </form>
</div>
<!-- add issue offcanvas modal end -->

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
<script>
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
</script>
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
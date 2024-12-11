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
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Property Availability </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="all-properties.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
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

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Import</a>
                            </div>

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
                            <div class="userFilters" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Landlords</label>
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

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option
                                                                            value="Westlands Dental Studio, Front Street, Lanchester">
                                                                            Westlands Dental Studio, Front Street,
                                                                            Lanchester</option>
                                                                        <option
                                                                            value="Sunset Boulevard, Los Angeles, California">
                                                                            Sunset Boulevard, Los Angeles, California
                                                                        </option>
                                                                        <option
                                                                            value="Marvel Avenue, Brooklyn, New York">
                                                                            Marvel Avenue, Brooklyn, New York
                                                                        </option>
                                                                        <option
                                                                            value="Forest Gump Road, Greenbow, Alabama">
                                                                            Forest Gump Road, Greenbow, Alabama</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Weekly Budget</label>
                                                                    <input class="form-control" placeholder="" value=""
                                                                        type="text">

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Address</label>
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

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Area</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Sunderland">Sunderland</option>
                                                                        <option value="Bedlington">Bedlington</option>
                                                                        <option value="Newcastle upon Tyne">Newcastle
                                                                            upon Tyne</option>
                                                                        <option value="Durham">Durham</option>
                                                                        <option value="Lanchester">Lanchester</option>
                                                                        <option value="Newcastle Upon Tyne ">Newcastle
                                                                            Upon Tyne </option>
                                                                        <option value="Ponteland">Ponteland</option>
                                                                        <option value="Newcastle Upon Tyne">Newcastle
                                                                            Upon Tyne</option>
                                                                        <option value="Jesmond">Jesmond</option>
                                                                        <option value="London">London</option>
                                                                        <option value="West One">West One</option>
                                                                        <option value="Newcastle">Newcastle</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Date Range</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date" />
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label for="minBedrooms" class="form-label">Minimum
                                                                        Bedrooms:</label>
                                                                    <div class="quantity_container">
                                                                        <span class="btn btnquantity decrease"
                                                                            data-target="minBedrooms">-</span>
                                                                        <input type="number" id="minBedrooms"
                                                                            name="minBedrooms"
                                                                            class="quantity  customQuantity_input"
                                                                            value="0" min="0">
                                                                        <span class="btn btnquantity increase"
                                                                            data-target="minBedrooms">+</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label for="maxBedrooms" class="form-label">Maximum
                                                                        Bedrooms:</label>
                                                                    <div class="quantity_container">
                                                                        <span class="btn btnquantity decrease"
                                                                            data-target="maxBedrooms">-</span>
                                                                        <input type="number" id="maxBedrooms"
                                                                            name="maxBedrooms"
                                                                            class="quantity  customQuantity_input"
                                                                            value="0" min="0">
                                                                        <span class="btn btnquantity increase"
                                                                            data-target="maxBedrooms">+</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Include Enquiries</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Enquiry Received">Enquiry
                                                                            Received</option>
                                                                        <option value="Information Requested ">
                                                                            Information Requested </option>
                                                                        <option value="Information Sent">Information
                                                                            Sent</option>
                                                                        <option value="Viewings Booked">Viewings Booked
                                                                        </option>
                                                                        <option value="Viewing Cancelled">Viewing
                                                                            Cancelled</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Include Contracts</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Application Received">
                                                                            Application Received</option>
                                                                        <option value="Reference Check Issued">
                                                                            Reference Check Issued
                                                                        </option>
                                                                        <option value="Landlord To Sign">
                                                                            Landlord To Sign</option>
                                                                        <option value="Completed">
                                                                            Completed
                                                                        </option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-auto flexcheckColumn">
                                                                <div class="form-group">
                                                                    <label class="form-label">&nbsp;</label>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="customCheckList6">
                                                                        <label class="form-check-label"
                                                                            for="customCheckList6">
                                                                            Include Shared Occupancy
                                                                            <span class="done-strikethrough"></span>
                                                                        </label>

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
                            <div class="contact-list-view">

                                <!-- <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                           <th> </th>
                                            <th>Property </th>
                                            <th>Floor</th>
                                            <th>Room Type</th>
                                            <th>Size</th>
                                            <th>Apartment Comment</th>
                                            <th>Bedroom Comment</th>
                                            <th>Current Tenancy end Date</th>
                                            <th>Tenancy Start Date</th>
                                            <th>Contract Length in weeks</th>
                                            <th>Weekly Rental Price </th>
                                            <th>Council Tax Price ( If applicable )</th>
                                            <th>Utility Weekly Price</th>
                                            <th>Total Weekly Price</th>
                                            <th>Min Deposit</th>
                                            <th>Mid Deposit</th>
                                            <th>Max Deposit</th>
                                            <th>Tenant Name</th>
                                            <th>Surname</th>
                                            <th> Tenant Nationality</th>
                                            <th>Tenant Status</th>
                                            <th>New Tenant or Renewal</th>
                                            <th>Date applied</th>
                                            <th>Payment Term</th>
                                            <th>Contract status</th>
                                            <th>Reference Check Status</th>
                                            <th>Landlord Billed</th>
                                            <th>Parking</th>
                                            <th>Rental Total</th>
                                            <th>Utilities Total</th>
                                            <th>Council Tax Total</th>
                                            <th>Total Income</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="##" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Property Data">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                <iconify-icon icon="iconoir:nav-arrow-down" ></iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
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
                                            <td>3</td>
                                            <td>2-Bedroom Apartment</td>
                                            <td>1200 sqft</td>
                                            <td>Spacious and well-lit</td>
                                            <td>Master bedroom with en-suite</td>
                                            <td>2024-12-31</td>
                                            <td>2024-01-01</td>
                                            <td>52</td>
                                            <td>£500</td>
                                            <td>£30</td>
                                            <td>£50</td>
                                            <td>£580</td>
                                            <td>£1,500</td>
                                            <td>£2,000</td>
                                            <td>£2,500</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>American</td>
                                            <td>Employed</td>
                                            <td>New Tenant</td>
                                            <td>2023-11-29</td>
                                            <td>Monthly</td>
                                            <td>Active</td>
                                            <td>Completed</td>
                                            <td>Yes</td>
                                            <td>Available</td>
                                            <td>£26,000</td>
                                            <td>£2,600</td>
                                            <td>£1,560</td>
                                            <td>£30,160</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="property-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Property Details">
                                                            <span class="icon">
                                                                <span class="feather-icon"><i
                                                                        data-feather="eye"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                      
                                        </tr>
                                        
                                        
                                        

                                    </tbody>
                                </table> -->

                                <table class="table   nowrap " id="propertyData">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Property </th>
                                            <th>Floor</th>
                                            <th>Room Type</th>
                                            <th>Size</th>
                                            <th>Apartment Comment</th>
                                            <th>Bedroom Comment</th>
                                            <th>Current Tenancy end Date</th>
                                            <th>Tenancy Start Date</th>
                                            <th>Contract Length in weeks</th>
                                            <th>Weekly Rental Price </th>
                                            <th>Council Tax Price ( If applicable )</th>
                                            <th>Utility Weekly Price</th>
                                            <th>Total Weekly Price</th>
                                            <th>Min Deposit</th>
                                            <th>Mid Deposit</th>
                                            <th>Max Deposit</th>
                                            <th>Tenant Name</th>
                                            <th>Surname</th>
                                            <th> Tenant Nationality</th>
                                            <th>Tenant Status</th>
                                            <th>New Tenant or Renewal</th>
                                            <th>Date applied</th>
                                            <th>Payment Term</th>
                                            <th>Contract status</th>
                                            <th>Reference Check Status</th>
                                            <th>Landlord Billed</th>
                                            <th>Parking</th>
                                            <th>Rental Total</th>
                                            <th>Utilities Total</th>
                                            <th>Council Tax Total</th>
                                            <th>Total Income</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="main-row" data-row-id="1">

                                            <td>
                                                <a href="#" class="btn toggle-info" data-target="1">
                                                    <span class="icon">
                                                        <iconify-icon icon="iconoir:nav-arrow-down"></iconify-icon>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
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
                                            <td>3</td>
                                            <td>2-Bedroom Apartment</td>
                                            <td>1200 sqft</td>
                                            <td>Spacious and well-lit</td>
                                            <td>Master bedroom with en-suite</td>
                                            <td>2024-12-31</td>
                                            <td>2024-01-01</td>
                                            <td>52</td>
                                            <td>£500</td>
                                            <td>£30</td>
                                            <td>£50</td>
                                            <td>£580</td>
                                            <td>£1,500</td>
                                            <td>£2,000</td>
                                            <td>£2,500</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>American</td>
                                            <td>Employed</td>
                                            <td>New Tenant</td>
                                            <td>2023-11-29</td>
                                            <td>Monthly</td>
                                            <td>Active</td>
                                            <td>Completed</td>
                                            <td>Yes</td>
                                            <td>Available</td>
                                            <td>£26,000</td>
                                            <td>£2,600</td>
                                            <td>£1,560</td>
                                            <td>£30,160</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="property-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Property Details">
                                                            <span class="icon">
                                                                <span class="feather-icon"><i
                                                                        data-feather="eye"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="details-row" data-row-id="1" style="display: none;">
                                            <td colspan="33" class="detailrowoneTd" id="detailrowoneTd">
                                                <div class="details-container">
                                                    <table class="propertdetailData_table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Property </th>
                                                                <th>Floor</th>
                                                                <th>Room Type</th>
                                                                <th>Size</th>
                                                                <th>Apartment Comment</th>
                                                                <th>Bedroom Comment</th>
                                                                <th>Current Tenancy end Date</th>
                                                                <th>Tenancy Start Date</th>
                                                                <th>Contract Length in weeks</th>
                                                                <th>Weekly Rental Price </th>
                                                                <th>Council Tax Price ( If applicable )</th>
                                                                <th>Utility Weekly Price</th>
                                                                <th>Total Weekly Price</th>
                                                                <th>Min Deposit</th>
                                                                <th>Mid Deposit</th>
                                                                <th>Max Deposit</th>
                                                                <th>Tenant Name</th>
                                                                <th>Surname</th>
                                                                <th> Tenant Nationality</th>
                                                                <th>Tenant Status</th>
                                                                <th>New Tenant or Renewal</th>
                                                                <th>Date applied</th>
                                                                <th>Payment Term</th>
                                                                <th>Contract status</th>
                                                                <th>Reference Check Status</th>
                                                                <th>Landlord Billed</th>
                                                                <th>Parking</th>
                                                                <th>Rental Total</th>
                                                                <th>Utilities Total</th>
                                                                <th>Council Tax Total</th>
                                                                <th>Total Income</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <th colspan="6">Leazes Terrace, Newcastle Upon Tyne, NE1 4
                                                            </th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td>9/4/2025</td>
                                                            <td>9/12/2025</td>
                                                            <td>51 Weeks</td>
                                                            <td>£138.00 a week</td>
                                                            <td>N/A</td>
                                                            <td>£30.00 a week</td>
                                                            <td>£168.00 a week</td>
                                                            <td>£250</td>
                                                            <td>£350</td>
                                                            <td>£450</td>
                                                            <td>John</td>
                                                            <td>Doe</td>
                                                            <td>American</td>
                                                            <td>Employed</td>
                                                            <td>New Tenant</td>
                                                            <td>2023-11-29</td>
                                                            <td>Monthly</td>
                                                            <td>Active</td>
                                                            <td>Completed</td>
                                                            <td>Yes</td>
                                                            <td>Available</td>
                                                            <td>£26,000</td>
                                                            <td>£2,600</td>
                                                            <td>£1,560</td>
                                                            <td>£30,160</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr class="green">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>12 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>10 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom D</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom E</td>
                                                            <td>Second</td>

                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="main-row" data-row-id="2">
                                            <td>
                                                <a href="#" class="btn toggle-info" data-target="2">
                                                    <span class="icon">
                                                        <iconify-icon icon="iconoir:nav-arrow-down"></iconify-icon>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
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
                                            <td>3</td>
                                            <td>2-Bedroom Apartment</td>
                                            <td>1200 sqft</td>
                                            <td>Spacious and well-lit</td>
                                            <td>Master bedroom with en-suite</td>
                                            <td>2024-12-31</td>
                                            <td>2024-01-01</td>
                                            <td>52</td>
                                            <td>£500</td>
                                            <td>£30</td>
                                            <td>£50</td>
                                            <td>£580</td>
                                            <td>£1,500</td>
                                            <td>£2,000</td>
                                            <td>£2,500</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>American</td>
                                            <td>Employed</td>
                                            <td>New Tenant</td>
                                            <td>2023-11-29</td>
                                            <td>Monthly</td>
                                            <td>Active</td>
                                            <td>Completed</td>
                                            <td>Yes</td>
                                            <td>Available</td>
                                            <td>£26,000</td>
                                            <td>£2,600</td>
                                            <td>£1,560</td>
                                            <td>£30,160</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="property-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Property Details">
                                                            <span class="icon">
                                                                <span class="feather-icon"><i
                                                                        data-feather="eye"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="details-row" data-row-id="2" style="display: none;">
                                        <td colspan="33" class="detailrowoneTd" id="detailrowoneTd">
                                                <div class="details-container">
                                                    <table class="propertdetailData_table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Property </th>
                                                                <th>Floor</th>
                                                                <th>Room Type</th>
                                                                <th>Size</th>
                                                                <th>Apartment Comment</th>
                                                                <th>Bedroom Comment</th>
                                                                <th>Current Tenancy end Date</th>
                                                                <th>Tenancy Start Date</th>
                                                                <th>Contract Length in weeks</th>
                                                                <th>Weekly Rental Price </th>
                                                                <th>Council Tax Price ( If applicable )</th>
                                                                <th>Utility Weekly Price</th>
                                                                <th>Total Weekly Price</th>
                                                                <th>Min Deposit</th>
                                                                <th>Mid Deposit</th>
                                                                <th>Max Deposit</th>
                                                                <th>Tenant Name</th>
                                                                <th>Surname</th>
                                                                <th> Tenant Nationality</th>
                                                                <th>Tenant Status</th>
                                                                <th>New Tenant or Renewal</th>
                                                                <th>Date applied</th>
                                                                <th>Payment Term</th>
                                                                <th>Contract status</th>
                                                                <th>Reference Check Status</th>
                                                                <th>Landlord Billed</th>
                                                                <th>Parking</th>
                                                                <th>Rental Total</th>
                                                                <th>Utilities Total</th>
                                                                <th>Council Tax Total</th>
                                                                <th>Total Income</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <th colspan="6">Leazes Terrace, Newcastle Upon Tyne, NE1 4
                                                            </th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td>9/4/2025</td>
                                                            <td>9/12/2025</td>
                                                            <td>51 Weeks</td>
                                                            <td>£138.00 a week</td>
                                                            <td>N/A</td>
                                                            <td>£30.00 a week</td>
                                                            <td>£168.00 a week</td>
                                                            <td>£250</td>
                                                            <td>£350</td>
                                                            <td>£450</td>
                                                            <td>John</td>
                                                            <td>Doe</td>
                                                            <td>American</td>
                                                            <td>Employed</td>
                                                            <td>New Tenant</td>
                                                            <td>2023-11-29</td>
                                                            <td>Monthly</td>
                                                            <td>Active</td>
                                                            <td>Completed</td>
                                                            <td>Yes</td>
                                                            <td>Available</td>
                                                            <td>£26,000</td>
                                                            <td>£2,600</td>
                                                            <td>£1,560</td>
                                                            <td>£30,160</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr class="green">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>12 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>10 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom D</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom E</td>
                                                            <td>Second</td>

                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="main-row" data-row-id="3">
                                            <td>
                                                <a href="#" class="btn toggle-info" data-target="3">
                                                    <span class="icon">
                                                        <iconify-icon icon="iconoir:nav-arrow-down"></iconify-icon>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
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
                                            <td>3</td>
                                            <td>2-Bedroom Apartment</td>
                                            <td>1200 sqft</td>
                                            <td>Spacious and well-lit</td>
                                            <td>Master bedroom with en-suite</td>
                                            <td>2024-12-31</td>
                                            <td>2024-01-01</td>
                                            <td>52</td>
                                            <td>£500</td>
                                            <td>£30</td>
                                            <td>£50</td>
                                            <td>£580</td>
                                            <td>£1,500</td>
                                            <td>£2,000</td>
                                            <td>£2,500</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>American</td>
                                            <td>Employed</td>
                                            <td>New Tenant</td>
                                            <td>2023-11-29</td>
                                            <td>Monthly</td>
                                            <td>Active</td>
                                            <td>Completed</td>
                                            <td>Yes</td>
                                            <td>Available</td>
                                            <td>£26,000</td>
                                            <td>£2,600</td>
                                            <td>£1,560</td>
                                            <td>£30,160</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="property-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Property Details">
                                                            <span class="icon">
                                                                <span class="feather-icon"><i
                                                                        data-feather="eye"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="details-row" data-row-id="3" style="display: none;">
                                        <td colspan="33" class="detailrowoneTd" id="detailrowoneTd">
                                                <div class="details-container">
                                                    <table class="propertdetailData_table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Property </th>
                                                                <th>Floor</th>
                                                                <th>Room Type</th>
                                                                <th>Size</th>
                                                                <th>Apartment Comment</th>
                                                                <th>Bedroom Comment</th>
                                                                <th>Current Tenancy end Date</th>
                                                                <th>Tenancy Start Date</th>
                                                                <th>Contract Length in weeks</th>
                                                                <th>Weekly Rental Price </th>
                                                                <th>Council Tax Price ( If applicable )</th>
                                                                <th>Utility Weekly Price</th>
                                                                <th>Total Weekly Price</th>
                                                                <th>Min Deposit</th>
                                                                <th>Mid Deposit</th>
                                                                <th>Max Deposit</th>
                                                                <th>Tenant Name</th>
                                                                <th>Surname</th>
                                                                <th> Tenant Nationality</th>
                                                                <th>Tenant Status</th>
                                                                <th>New Tenant or Renewal</th>
                                                                <th>Date applied</th>
                                                                <th>Payment Term</th>
                                                                <th>Contract status</th>
                                                                <th>Reference Check Status</th>
                                                                <th>Landlord Billed</th>
                                                                <th>Parking</th>
                                                                <th>Rental Total</th>
                                                                <th>Utilities Total</th>
                                                                <th>Council Tax Total</th>
                                                                <th>Total Income</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <th colspan="6">Leazes Terrace, Newcastle Upon Tyne, NE1 4
                                                            </th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td>9/4/2025</td>
                                                            <td>9/12/2025</td>
                                                            <td>51 Weeks</td>
                                                            <td>£138.00 a week</td>
                                                            <td>N/A</td>
                                                            <td>£30.00 a week</td>
                                                            <td>£168.00 a week</td>
                                                            <td>£250</td>
                                                            <td>£350</td>
                                                            <td>£450</td>
                                                            <td>John</td>
                                                            <td>Doe</td>
                                                            <td>American</td>
                                                            <td>Employed</td>
                                                            <td>New Tenant</td>
                                                            <td>2023-11-29</td>
                                                            <td>Monthly</td>
                                                            <td>Active</td>
                                                            <td>Completed</td>
                                                            <td>Yes</td>
                                                            <td>Available</td>
                                                            <td>£26,000</td>
                                                            <td>£2,600</td>
                                                            <td>£1,560</td>
                                                            <td>£30,160</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Lower Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Option to put a comment about the apartment</td>
                                                            <td style="width: 7%;">
                                                                <div class="bedroomComment">Option to put comment about
                                                                    bedroom for example (apartment only suitable for
                                                                    students who are in 2nd year)</div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr class="green">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="green">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Ground</td>
                                                            <td>En-Suite Bedroom</td>
                                                            <td>12 Sqm</td>
                                                            <td>Only professionals accepted, tenants must be females
                                                            </td>
                                                            <td>Must be a female tenant</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <th colspan="3">2 LEAZES TERRACE</th>
                                                            <th colspan="30">FLAT 1 ( 3 Bedroom Apartment Student )</th>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom A</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>12 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom B</td>
                                                            <td>First</td>
                                                            <td></td>
                                                            <td>10 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom C</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom D</td>
                                                            <td>Second</td>
                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr class="yellow">
                                                            <td></td>
                                                            <td>Bedroom E</td>
                                                            <td>Second</td>

                                                            <td></td>
                                                            <td>15 Sqm</td>
                                                            <td>Must Be a full student group to apply, Apartment has 3
                                                                Bathrooms</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                    </table>
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

<!-- required js files -->

<!-- Bootstrap Input spinner JS -->
<script>
    $(document).ready(function() {
        // Increase/decrease quantity
        $(".btnquantity").on("click", function() {
            var target = $(this).data("target");
            var input = $("#" + target);
            var value = parseInt(input.val());
            var action = $(this).text();
            if (action === "+") {
                input.val(value + 1);
            } else if (action === "-") {
                if (value > 0) {
                    input.val(value - 1);
                }
            }
        });
    });

    function submitForm() {
        var minBedrooms = $("#minBedrooms").val();
        var maxBedrooms = $("#maxBedrooms").val();
        // Validate input
        if (minBedrooms === "" || maxBedrooms === "") {
            alert("Please enter both minimum and maximum bedrooms.");
            return;
        }
        if (parseInt(minBedrooms) > parseInt(maxBedrooms)) {
            alert("Minimum bedrooms cannot be greater than maximum bedrooms.");
            return;
        }
        // Process the form data (you can replace this with your own logic)
        console.log("Minimum Bedrooms:", minBedrooms);
        console.log("Maximum Bedrooms:", maxBedrooms);
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all toggle buttons
        const toggleButtons = document.querySelectorAll(".btn-toggle");
        // Attach event listeners to each button
        toggleButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Toggle active state
                button.classList.toggle("active");
                // Find the corresponding content row
                const contentRow = button.closest("tr").nextElementSibling;
                if (contentRow && contentRow.classList.contains("tr-content-body")) {
                    // Toggle row visibility
                    const isHidden = contentRow.style.display === "none" || contentRow.style
                        .display === "";
                    contentRow.style.display = isHidden ? "table-row" : "none";
                    // Update button icon
                    const icon = button.querySelector("i");
                    if (isHidden) {
                        icon.classList.remove("bi-chevron-down");
                        icon.classList.add("bi-chevron-up");
                    } else {
                        icon.classList.remove("bi-chevron-up");
                        icon.classList.add("bi-chevron-down");
                    }
                }
            });
        });
    });
</script>

<style>
    .details-row {
        background-color: #f9f9f9;
        font-size: 14px;
    }

    .details-container {
        padding: 10px;
    }

    #propertyData_wrapper .row:nth-child(2) {
        overflow-x: scroll;
    }

    #propertyData {
        width: 100% !important;
    }
</style>

<style>
    .propertdetailData_table {
        border-collapse: collapse;
    }

    .propertdetailData_table th,
    .propertdetailData_table td {
        padding: 10px;
        border: 1px solid #000;
    }
    .dt-length {
	display: block !important;
}
</style>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>


<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#propertyData').DataTable({
            "order": [], // Disable initial sorting
            "paging": true, // Enable pagination
            "columnDefs": [{
                "orderable": true,
                "targets": 0
            }],
             // Disable ordering for the first column
            "drawCallback": function(settings) {
                // Ensure extra TDs for detail rows are removed
                $('tr.details-row').each(function() {
                    // Retain only the first TD in the details-row
                    $(this).children('td').not(':first').remove();
                    // Reset colspan for the first TD
                    $(this).children('td:first').attr('colspan', 33);
                });
            }
        });

         // Add "Filter by: Show" before the length dropdown
         $('.dt-length .form-select').before('<span>Filter by: Show </span>');


        // Add search icon inside the input
        $('.dt-search input').before('<iconify-icon icon="majesticons:search-line"></iconify-icon>');
        $('.dt-search input').attr('placeholder', 'Search here...');
        $('.dt-search label').css('display', 'none');
        // Toggle functionality for additional information rows
        $('#propertyData').on('click', '.toggle-info', function(e) {
            e.preventDefault();
            // Get the parent row ID from the data attribute
            let targetRowId = $(this).data('target');
            // Find the corresponding main row and details row
            let $mainRow = $(`tr.main-row[data-row-id="${targetRowId}"]`);
            let $detailsRow = $(`tr.details-row[data-row-id="${targetRowId}"]`);
            if ($detailsRow.is(':visible')) {
                // If details row is visible, hide it
                $detailsRow.hide();
                $(this).find("iconify-icon").attr("icon", "iconoir:nav-arrow-down");
            } else {
                // Hide all other details rows
                $('.details-row').hide();
                $('.toggle-info iconify-icon').attr("icon", "iconoir:nav-arrow-down");
                // Show the current details row directly below its main row
                $detailsRow.insertAfter($mainRow).show();
                $(this).find("iconify-icon").attr("icon", "iconoir:nav-arrow-up");
            }
        });
    });
</script>
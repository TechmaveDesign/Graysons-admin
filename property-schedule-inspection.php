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
       <?php include('headers/checkin-checkout-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Schedule Inspection</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                 <a href="add-new-property.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> 
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <button id="scheduleInspectionBtn" class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 ScheduleAddBtnfor_property" type="button" data-bs-toggle="modal" data-bs-target="#property_inspection_modal">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Schedule Inspection
                            </button>

                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->
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

                    </header>

                    

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                        <div class="contact-list-view">
                        <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Property</th>
                                    <th>Total Unit</th>
                                    <th>Assigned Inspector</th>
                                    <th>Frequency</th>
                                    <th>Inspection Start From</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="LongMesage_container">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Click to view"
                                                data-bs-original-title="Click to view Full Message">
                                                <i class="bi bi-eye"></i> Read More
                                            </button>
                                        </div>
                                    </td>
                                    <td>5</td>
                                    <td>John Smith</td>
                                    <td>Weekly</td>
                                    <td>01, January 2024</td>
                                   
                                    <td><span class="badge badge-soft-info">Assigned</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                            <a href="inspection-schedules.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" >
                                               <span class="icon">
                                                    <span class="feather-icon">
                                                      <i data-feather="eye"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                     <div class="LongMesage_container">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Click to view"
                                                data-bs-original-title="Click to view Full Message">
                                                <i class="bi bi-eye"></i> Read More
                                            </button>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>Jane Doe</td>
                                    <td>Monthly</td>
                                    <td>01, February 2024</td>
                                   
                                    <td><span class="badge badge-soft-review">In Progress</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                            <a href="inspection-schedules.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" >
                                               <span class="icon">
                                                    <span class="feather-icon">
                                                      <i data-feather="eye"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                     <div class="LongMesage_container">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Click to view"
                                                data-bs-original-title="Click to view Full Message">
                                                <i class="bi bi-eye"></i> Read More
                                            </button>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>Mark Taylor</td>
                                    <td>One-Time</td>
                                    <td>15, March 2024</td>
                                   
                                    <td><span class="badge badge-soft-warning">Pending</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                            <a href="inspection-schedules.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" >
                                               <span class="icon">
                                                    <span class="feather-icon">
                                                      <i data-feather="eye"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                     <div class="LongMesage_container">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Click to view"
                                                data-bs-original-title="Click to view Full Message">
                                                <i class="bi bi-eye"></i> Read More
                                            </button>
                                        </div>
                                    </td>
                                    <td>6</td>
                                    <td>Emily White</td>
                                    <td>Bi-Weekly</td>
                                    <td>01, April 2024</td>
                                   
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                            <a href="inspection-schedules.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" >
                                               <span class="icon">
                                                    <span class="feather-icon">
                                                      <i data-feather="eye"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                     <div class="LongMesage_container">
                                            <input
                                                class="refuge-collection-input tableLongMessage_Input"
                                                value="Bedroom 2 101, Flat 7 (Floor 2, No7), Garden View@Emerald Apartments">
                                            <button class="view-btn tablemessageview_btn"
                                                type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Click to view"
                                                data-bs-original-title="Click to view Full Message">
                                                <i class="bi bi-eye"></i> Read More
                                            </button>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>Chris Brown</td>
                                    <td>Monthly</td>
                                    <td>01, May 2024</td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                            <a href="inspection-schedules.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" >
                                               <span class="icon">
                                                    <span class="feather-icon">
                                                      <i data-feather="eye"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <!-- <table class="table common-datatable nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Property</th>
                                    <th>Area</th>
                                    <th>Unit Type</th>
                                    <th>Assigned Inspector</th>
                                    <th>Frequency</th>
                                    <th>Date From</th>
                                    <th>Date To</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 Harvest Close</td>
                                    <td>Sunderland</td>
                                    <td>Flat 1</td>
                                    <td>John Smith</td>
                                    <td>Weekly</td>
                                    <td>01, January 2024</td>
                                    <td>31, January 2024</td>
                                    <td>10:00 AM</td>
                                    <td>12:00 PM</td>
                                    <td><span class="badge badge-soft-info">Assigned</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23 Rosewood Avenue</td>
                                    <td>Bristol</td>
                                    <td>Apartment 3B</td>
                                    <td>Jane Doe</td>
                                    <td>Monthly</td>
                                    <td>01, February 2024</td>
                                    <td>28, February 2024</td>
                                    <td>2:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td><span class="badge badge-soft-review">In Progress</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17 Maple Street</td>
                                    <td>Manchester</td>
                                    <td>Flat 2A</td>
                                    <td>Mark Taylor</td>
                                    <td>One-Time</td>
                                    <td>15, March 2024</td>
                                    <td>15, March 2024</td>
                                    <td>9:00 AM</td>
                                    <td>11:00 AM</td>
                                    <td><span class="badge badge-soft-warning">Pending</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>42 Elm Street</td>
                                    <td>Leeds</td>
                                    <td>House 5C</td>
                                    <td>Emily White</td>
                                    <td>Bi-Weekly</td>
                                    <td>01, April 2024</td>
                                    <td>15, April 2024</td>
                                    <td>1:00 PM</td>
                                    <td>3:00 PM</td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9 Oak Lane</td>
                                    <td>Liverpool</td>
                                    <td>Flat 5D</td>
                                    <td>Chris Brown</td>
                                    <td>Monthly</td>
                                    <td>01, May 2024</td>
                                    <td>31, May 2024</td>
                                    <td>10:30 AM</td>
                                    <td>12:30 PM</td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <div class="d-flex">
                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#Edit_property_inspection_modal">
                                                    <span class="icon">
                                                        <iconify-icon icon="fluent:edit-16-regular">
                                                        </iconify-icon>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                        </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- Schedule Inspection modal-->
<div id="property_inspection_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Schedule Inspection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="ScheduleInspection_addWrap">
                        <div class="stepheadingheader">
                            <div class="steptitleIcon">
                                <iconify-icon icon="carbon:inspection"></iconify-icon>
                            </div>
                            <h1>What property inspection are you scheduling?</h2>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Inspection Title</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Property</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" selected disable readonly>
                                            Select an Option</option>
                                        <option value="Westlands Dental Studio, Front Street, Lanchester">
                                            Westlands Dental Studio, Front Street,
                                            Lanchester</option>
                                        <option value="Sunset Boulevard, Los Angeles, California">
                                            Sunset Boulevard, Los Angeles, California
                                        </option>
                                        <option value="Marvel Avenue, Brooklyn, New York">
                                            Marvel Avenue, Brooklyn, New York
                                        </option>
                                        <option value="Forest Gump Road, Greenbow, Alabama">
                                            Forest Gump Road, Greenbow, Alabama</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Unit Type</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" selected disable readonly>
                                            Select an Option</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Annex ">Annex </option>
                                        <option value="Room">Room</option>
                                        <option value="Basement Studios">Basement
                                            Studios</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Cottage">Cottage</option>
                                        <option value="Annex Flat 1">Annex Flat 1
                                        </option>
                                        <option value="Bedroom">Bedroom</option>
                                        <option value="Annex Studio">Annex Studio
                                        </option>
                                        <option value="Bedrooms 1">Bedrooms 1</option>
                                        <option value="Bedrooms 2">Bedrooms 2</option>
                                        <option value="Bedrooms 3">Bedrooms 3</option>
                                        <option value="Bedrooms 4">Bedrooms 4</option>
                                        <option value="Bedrooms 5">Bedrooms 5</option>
                                        <option value="Bedrooms 6">Bedrooms 6</option>
                                        <option value="Bedrooms 7">Bedrooms 7</option>
                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">
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

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Assigned to Staff</label>
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
                                            <label class="form-label">Select Days</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select Days</span>
                                                    <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search More Days...">
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
                                                                    class="individual-option form-check-input"> Monday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                               Tuesday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Wednesday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Thursday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Friday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Saturday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Sunday
                                                            </div>
                                                        </div>
                                                        

                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                        </div>

                        </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">How often</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" selected disable readonly>
                                            Select an Option</option>
                                        <option value="One off">One off</option>
                                        <option value="Every day">Every day</option>
                                        <option value="Every Weekday">Every Weekday</option>
                                        <option value="Every week">Every week</option>
                                        <option value="Every month">Every month</option>
                                        <option value="Every year">Every year</option>
                                        <option value="Every Quater">Every Quater</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date From</label>
                                    <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                        value="01/06/2024" readonly="readonly">
                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                    </iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date To</label>
                                    <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                        value="01/06/2024" readonly="readonly">
                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                    </iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Time</label>
                                    <input type="text" name="time" value="" class="form-control time__pickers"
                                        id="timepicker" placeholder="Select Time" required="" readonly="">
                                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Time</label>
                                    <input type="text" name="time" value="" class="form-control time__pickers"
                                        id="timepicker" placeholder="Select Time" required="" readonly="">
                                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
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
<!-- Schedule  Inspection modal end-->

<!--Edit  Schedule Inspection modal-->
<div id="Edit_property_inspection_modal" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Edit Inspection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="ScheduleInspection_addWrap">
                        <div class="stepheadingheader">
                            <div class="steptitleIcon">
                                <iconify-icon icon="carbon:inspection"></iconify-icon>
                            </div>
                            <h1>Modify the property inspection schedule</h2>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Inspection Title</label>
                                    <input class="form-control" type="text" value="23 Rosewood Avenue">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Property</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" disable readonly>
                                            Select an Option</option>
                                        <option value="Westlands Dental Studio, Front Street, Lanchester" selected>
                                            Westlands Dental Studio, Front Street,
                                            Lanchester</option>
                                        <option value="Sunset Boulevard, Los Angeles, California">
                                            Sunset Boulevard, Los Angeles, California
                                        </option>
                                        <option value="Marvel Avenue, Brooklyn, New York">
                                            Marvel Avenue, Brooklyn, New York
                                        </option>
                                        <option value="Forest Gump Road, Greenbow, Alabama">
                                            Forest Gump Road, Greenbow, Alabama</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Unit Type</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" disable readonly>
                                            Select an Option</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Annex" selected>Annex </option>
                                        <option value="Room">Room</option>
                                        <option value="Basement Studios">Basement
                                            Studios</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Cottage">Cottage</option>
                                        <option value="Annex Flat 1">Annex Flat 1
                                        </option>
                                        <option value="Bedroom">Bedroom</option>
                                        <option value="Annex Studio">Annex Studio
                                        </option>
                                        <option value="Bedrooms 1">Bedrooms 1</option>
                                        <option value="Bedrooms 2">Bedrooms 2</option>
                                        <option value="Bedrooms 3">Bedrooms 3</option>
                                        <option value="Bedrooms 4">Bedrooms 4</option>
                                        <option value="Bedrooms 5">Bedrooms 5</option>
                                        <option value="Bedrooms 6">Bedrooms 6</option>
                                        <option value="Bedrooms 7">Bedrooms 7</option>
                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Area</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" disable readonly>
                                            Select an Option</option>
                                        <option value="Sunderland">Sunderland</option>
                                        <option value="Bedlington">Bedlington</option>
                                        <option value="Newcastle upon Tyne" selected>Newcastle
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

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Assigned to Staff</label>
                                    <select name="" id="" class="form-control select2">
                                        <option disabled="" value="">Please Select...</option>
                                        <option value="1">Danial Craig</option>
                                        <option value="2" selected>Emily Blunt</option>
                                        <option value="3">John Doe</option>
                                        <option value="4">Sophia Turner</option>
                                        <option value="5">Michael Jordan</option>
                                        <option value="6">Olivia Smith</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-6">
                        <div class="form-group">
                                            <label class="form-label">Select Days</label>
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select Days</span>
                                                    <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search More Days...">
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
                                                                    class="individual-option form-check-input"> Monday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                               Tuesday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Wednesday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Thursday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Friday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Saturday
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                Sunday
                                                            </div>
                                                        </div>
                                                        

                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                        </div>

                        </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">How often</label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="" disable readonly>
                                            Select an Option</option>
                                        <option value="One off">One off</option>
                                        <option value="Every day">Every day</option>
                                        <option value="Every Weekday">Every Weekday</option>
                                        <option value="Every week">Every week</option>
                                        <option value="Every month" selected>Every month</option>
                                        <option value="Every year">Every year</option>
                                        <option value="Every Quater">Every Quater</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date From</label>
                                    <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                        value="01/06/2024" readonly="readonly">
                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                    </iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date To</label>
                                    <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                        value="01/06/2024" readonly="readonly">
                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                    </iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Time</label>
                                    <input type="text" name="time" value="" class="form-control time__pickers"
                                        id="timepicker" placeholder="Select Time" required="" readonly="">
                                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Time</label>
                                    <input type="text" name="time" value="" class="form-control time__pickers"
                                        id="timepicker" placeholder="Select Time" required="" readonly="">
                                    <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
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
<!-- Edit Schedule  Inspection modal end-->

<?php include('footer.php') ?>

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
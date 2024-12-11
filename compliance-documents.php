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
                                    <h1>All Documents</h1>
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
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-9">
                                                <div class="row gx-3">

                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Document Name</label>
                                                            <input type="text" class="form-control" id="Title"
                                                                placeholder="Enter Document Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Type</label>
                                                            <select name="" id="" class="form-control select2">
                                                                <option value="" selected disable readonly>
                                                                    Select an Option</option>
                                                                <option value="1">Other</option>
                                                                <option value="2">Roof Safety Certificate
                                                                </option>
                                                                <option value="3">Smoke Vents Service</option>
                                                                <option value="4">Fire Extinguisher Service
                                                                </option>
                                                                <option value="5">Fire Alarm/Emergency Lights
                                                                    Service</option>
                                                                <option value="6">Network Service</option>
                                                                <option value="7">TLJ Locks Service</option>
                                                                <option value="8">Ventilation Service</option>
                                                                <option value="9">Tank/Pump Service</option>
                                                                <option value="10">Lift Service</option>
                                                                <option value="11">Cylinder Service</option>
                                                                <option value="12">Insurance</option>
                                                                <option value="13">PAT Test</option>
                                                                <option value="14">Property Inspection</option>
                                                                <option value="15">CP12</option>
                                                                <option value="16">Electrical Certificate
                                                                </option>
                                                                <option value="17">HMO Certificate</option>
                                                                <option value="18">Policy</option>
                                                                <option value="19">Fire Dampers Servicing
                                                                </option>
                                                                <option value="20">TV Licence</option>
                                                                <option value="21">Fire Risk Assessment</option>
                                                                <option value="22">Utility Contract</option>
                                                                <option value="23">Fire Safety Equipment
                                                                </option>
                                                                <option value="24">Maintenance Contract</option>
                                                                <option value="25">Dental</option>
                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Property</label>
                                                            <select name="" id="" class="form-control select2">
                                                                <option value="" selected disable readonly>
                                                                    Select an Option</option>
                                                                <option value="1">Communal Area Inspection House
                                                                    10</option>
                                                                <option value="2">Communal Area Inspection House
                                                                    14</option>
                                                                <option value="3">Communal Area Inspection House
                                                                    16</option>
                                                                <option value="4">Communal Area Inspection House
                                                                    18</option>
                                                                <option value="5">Communal Area Inspection House
                                                                    2</option>
                                                                <option value="6">Communal Area Inspection House
                                                                    21</option>
                                                                <option value="7">Communal Area Inspection House
                                                                    22</option>
                                                                <option value="8">Communal Area Inspection House
                                                                    23</option>
                                                                <option value="9">Communal Area Inspection House
                                                                    24</option>
                                                                <option value="10">Communal Area Inspection
                                                                    House 25</option>
                                                                <option value="11">Communal Area Inspection
                                                                    House 26</option>
                                                                <option value="12">Communal Area Inspection
                                                                    House 27</option>
                                                                <option value="13">Communal Area Inspection
                                                                    House 28</option>
                                                                <option value="14">Communal Area Inspection
                                                                    House 29</option>
                                                                <option value="15">Communal Area Inspection
                                                                    House 3</option>
                                                                <option value="16">Communal Area Inspection
                                                                    House 49</option>
                                                                <option value="17">Communal Area Inspection
                                                                    House 52</option>
                                                                <option value="18">Communal Area Inspection
                                                                    House 53</option>
                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Date Range</label>
                                                            <input class="form-control" type="text" name="daterange"
                                                                value="Pick a Date" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-auto flexcheckColumn">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckList6">
                                                                <label class="form-check-label" for="customCheckList6">
                                                                    Include Renewed
                                                                    <span class="done-strikethrough"></span>
                                                                </label>

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

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>Name </th>
                                            <th>Type</th>
                                            <th>Property</th>
                                            <th>Expiry Date</th>
                                            <th>Renewed</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Village Dental RayFire - Fire Alarm Certificate
                                            </td>
                                            <td>Insurance</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="pasedExpiry_date"><span
                                                    class="badge badge-soft-danger   my-1  me-2">07/05/2024</span></td>
                                            <td class="pasedExpiry_date">No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Unoccupied Property Condition
                                            </td>
                                            <td>Policy</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="3 and 3A - Apperley Road, Stocksfield, Northumerland"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="pasedExpiry_date"><span
                                                    class="badge badge-soft-danger   my-1  me-2">07/05/2024</span></td>
                                            <td class="pasedExpiry_date">No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Smartest Energy Electricity Contract
                                            </td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>01/07/2024</td>
                                            <td>No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Smartest Energy Electricity Contract</td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="West One, Asama Court,Newcastle Business Park, Newcastle upon Tyne"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>01/07/2024</td>
                                            <td>No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>City Health Clinic - Safety Inspection Report</td>
                                            <td>Insurance</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Attention all staff: Please ensure all emergency exits are clear of obstructions during the inspection period. Thank you."></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="pasedExpiry_date"><span
                                                    class="badge badge-soft-danger my-1 me-2">05/06/2024</span></td>
                                            <td class="pasedExpiry_date">No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Sunset Apartments - Fire Safety Certificate</td>
                                            <td>Insurance</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Reminder: Fire alarm testing will be conducted this Friday at 10 AM. Ensure you are aware of the nearest exits. Thank you."></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="pasedExpiry_date"><span
                                                    class="badge badge-soft-danger my-1 me-2">12/04/2024</span></td>
                                            <td class="pasedExpiry_date">Yes</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ABC Energy Gas Contract</td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="123 Main Street, Business Hub, London"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>15/08/2024</td>
                                            <td>Yes</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>XYZ Water Supply Contract</td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="789 Commerce Blvd, Industrial Area, Birmingham"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>20/09/2024</td>
                                            <td>No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Utility Power Service Contract</td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="456 Market St, Central Business District, Manchester"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>30/10/2024</td>
                                            <td>Yes</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>National Gas Supply Agreement</td>
                                            <td>Utility Contract</td>
                                            <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="1010 Avenue of the Americas, Midtown, New York"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>12/11/2024</td>
                                            <td>No</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Download Document"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="icon-park-outline:download-two">
                                                                    </iconify-icon>
                                                                </span></span></button>
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
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
                                </iconify-icon>Request for a quote
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
                                                <div class="col-lg-12">
                                                    <div class="row gx-3">

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Filter by Department</label>
                                                                <select name="" id="department_select"
                                                                    class="form-control select2">
                                                                    <option value="" selected disabled>Select a
                                                                        Department</option>
                                                                    <option value="HR">Human Resources</option>
                                                                    <option value="Account">Account</option>
                                                                    <option value="Marketing">Marketing</option>
                                                                    <option value="Property Department">Property
                                                                        Department</option>
                                                                    <option value="Operations">Operations</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Customer Support">Customer Support
                                                                    </option>
                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Filter by Roles</label>
                                                                <select name="" id="Roles_select_options"
                                                                    class="form-control select2">
                                                                    <option value="" selected disable readonly>
                                                                        Select an Option</option>
                                                                    <option value="Staff">Staff</option>
                                                                    <option value="User">User
                                                                    </option>
                                                                    <option value="Admin">Admin</option>
                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-4">

                                                            <div class="form-group">
                                                                <label class="form-label">last Updated</label>
                                                                <input
                                                                    class="form-control customdataPicker flatpickr-input"
                                                                    type="text" name="" value=""
                                                                    placeholder="Pick a Date" readonly="readonly">
                                                                <iconify-icon icon="ion:calendar-outline"
                                                                    class="dateinput_icon"></iconify-icon>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="contact-list-view">
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Property Name</th>
                                                <th>Job Title</th>
                                                <th>Category</th>
                                                <!-- <th>Status</th> -->
                                                <th>Vendors</th>
                                                <!-- <th>Visit Date</th>
                                                <th>Work Order ID</th>
                                                <th>Completion Date</th>
                                                <th>Renewal Date</th>
                                                <th>Billing Status</th>
                                                <th>Documents</th> -->
                                                <th>Actions</th> <!-- Added Actions Column -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="view-compliance-details.php">CJ12345</a></td>
                                                <td>
                                                    <a href="property-details.php">
                                                        <div class="LongMesage_container">
                                                            <input
                                                                class="refuge-collection-input tableLongMessage_Input"
                                                                value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
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
                                                <td>Fire Alarm Installation</td>
                                                <td>Electrical Services</td>
                                                <!-- <td class=""><span class="badge bg-success">Accepted</span></td> -->
                                                <td>ABC Electrical, XYZ</td>
                                                <!-- <td>2024-11-30</td>
                                                <td>WO1234</td>
                                                <td>2024-12-05</td>
                                                <td>2025-12-06</td>
                                                <td>Pending</td>
                                                <td><a href="documents/D001.pdf" target="_blank">Installation
                                                        Certificate (D001)</a></td> -->
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details" href="view-compliance-details.php">
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

                                                            <!-- <a href="##" data-bs-toggle="modal" data-bs-target="#schedulevisit_modal" class="btn btn-sm commonAddnewButton generateContarct_btn btn-primary ms-3"><span><span class="icon"><span class="feather-icon">
                                                                                <iconify-icon icon="iconamoon:clock-light">
                                                                                </iconify-icon>
                                                                            </span></span><span class="btn-text">Schedule a Visit
                                                                        </span></span></a> -->

                                                            

                                                            <!-- Delete Button -->
                                                            <!-- <button
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </button> -->
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
                                                                value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
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
                                                <!-- <td class=""><span class="badge bg-danger">Rejected</span></td> -->
                                                <td>HydroPlumb Solutions</td>
                                                <!-- <td>2024-11-25</td>
                                                <td>WO1235</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>Not Applicable</td>
                                                <td>None</td> -->
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="View compliance Details" href="view-compliance-details.php">
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

                                                            <!-- Delete Button -->
                                                            <!-- <button
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </button> -->
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
         Request Compliance Quotation 
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
                <div class="add-users-modal-body-table-header text-headline-6">Request for a quote for a job</div>

                <div class="formstartcontainer">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Enter the job title">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Property Name</label>
                                <select name="" id="propertyName" class="form-control select2">
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

                        <div class="col-lg-4">
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

                        <!-- <div class="col-lg-4">
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select select2" id="status">
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="category" class="form-label">Vendors</label>
                                <select class="form-select select2" id="vendorSelect" multiple="multiple">
                                    <option value="select-all" id="select-all-option" disabled>Select All</option>
                                    <option value="John Doe">John Doe</option>
                                    <option value="Jane Smith">Jane Smith</option>
                                    <option value="Alice Johnson">Alice Johnson</option>
                                    <option value="Bob Brown">Bob Brown</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">&nbsp;</label>
                            </div>
                            <div class="form-check form-check-sm">
                                <input type="checkbox" class="form-check-input" id="customChecks1">
                                <label class="form-check-label" for="customChecks1">Select All vendors</label>
                            </div>
                        </div>

                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Visit Date</label>
                                <input class="form-control customdataPicker flatpickr-input" id="visitDate" type="text"
                                    name="" value="" placeholder="Select visit date">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="workOrderId" class="form-label">Work Order ID</label>
                                <input type="text" class="form-control" id="workOrderId"
                                    placeholder="Enter work order ID">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="completionDate" class="form-label">Completion Date</label>
                                <input class="form-control customdataPicker flatpickr-input" id="completionDate"
                                    type="text" name="" value="" placeholder="Select visit date">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="renewalDate" class="form-label">Renewal Date</label>
                                <input class="form-control customdataPicker flatpickr-input" id="renewalDate"
                                    type="text" name="" value="" placeholder="Select visit date">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="billingStatus" class="form-label">Billing Status</label>
                                <select class="form-select select2" id="billingStatus">
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Paid">Paid</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-4">
                            <div class="form-group">
                                <label for="thirdPartyEmail" class="form-label">Third-Party Email</label>
                                <input type="email" class="form-control" id="thirdPartyEmail"
                                    placeholder="Enter third-party email to send request">
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Documents</label>
                                <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
                            </div>
                        </div> -->

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


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
   <?php include('headers/inventory-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Inspections</h1>
                                </a>
                            </div>
                            <div class=" ms-3">
<!-- 
                                <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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
                                            <div class="col-xxl-10">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="1">Communal Area Inspection House
                                                                            14</option>
                                                                        <option value="15" selected>Communal Area
                                                                            Inspection House 16</option>
                                                                        <option value="19">Communal Area Inspection
                                                                            House 22</option>

                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="1">Unknown</option>
                                                                        <option value="2">Pre Check In</option>
                                                                        <option value="4">Check In</option>
                                                                        <option value="5">Inspection</option>
                                                                        <option value="6">Check Out</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">

                                                                <div class="form-group">
                                                                    <label class="form-label">Select
                                                                        Date Range ( After / Before )</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2">
                                                <div class="row justify-content-end">

                                                    <div class="col-auto">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button type="button" class="btn btn-block btn-primary ">
                                                                <iconify-icon icon="mage:filter"></iconify-icon> Filter
                                                            </button>
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

                                            <th>Unit</th>
                                            <th>Type</th>
                                            <th>Created</th>
                                            <th>updated</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

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
                                            <td>Check In</td>
                                            <td>01/09/2018 15:01</td>

                                            <td>22/11/2018 16:25</td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Inspection Details"
                                                            href="view-inspection.php"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bedroom 2 202, Flat 5 (Floor 2, No7), Sea View@Aqua Tower"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            
                                            <td>Check In</td>
                                            <td>05/12/2019 10:30</td>
                                            <td>10/03/2020 14:45</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Inspection Details"
                                                            href="view-inspection.php">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bedroom 1 401, Flat 8 (Floor 4, No13), Mountain View@Summit Residency"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                         
                                            <td>Check In</td>
                                            <td>20/06/2021 09:15</td>
                                            <td>25/09/2021 18:00</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Inspection Details"
                                                            href="view-inspection.php">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bedroom 4 514, Flat 12 (Floor 5, No18), Park View@Green Horizon"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            
                                            <td>Check In</td>
                                            <td>03/05/2022 14:00</td>
                                            <td>08/08/2022 11:20</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Inspection Details"
                                                            href="view-inspection.php">
                                                            <span class="icon"><span class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span>
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
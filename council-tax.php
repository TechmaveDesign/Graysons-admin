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
            <?php include('headers/Tenancies-header.php') ?>
            <!-- sub menu header -->

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Council Tax</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

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
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option disabled="" selected="" value="">Please
                                                                            Select...</option>
                                                                        <option value="2">Communal Area Inspection House
                                                                            10</option>
                                                                        <option value="7">Communal Area Inspection House
                                                                            14</option>
                                                                        <option value="21">Communal Area Inspection
                                                                            House 18</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="1">Unset
                                                                        </option>
                                                                        <option value="2">Full Time Student
                                                                        </option>
                                                                        <option value="3">Part Time Student</option>
                                                                        <option value="4">Professional</option>
                                                                        <option value="5">Universal Credits
                                                                        </option>
                                                                       
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="actionrequired">Action Required
                                                                        </option>
                                                                        <option value="Requested">Requested
                                                                        </option>
                                                                        <option value="Awaiting-Payment">Awaiting
                                                                            Payment</option>
                                                                        <option value="Paid">Paid</option>
                                                                        <option value="Revoked">Revoked
                                                                        </option>
                                                                        <option value="Expired">Expired
                                                                        </option>
                                                                        <option value="Payment-added-to-rent">Payment
                                                                            added to rent
                                                                        </option>

                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Start Date</label>
                                                                    <input
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        placeholder="Select Date" value="" type="text"
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">End Date</label>
                                                                    <input
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        placeholder="Select Date" value="" type="text"
                                                                        readonly="readonly">
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
                                                            <button type="button"
                                                                class="btn btn-block btn-primary ">Filter
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

                                            <th>Name</th>
                                            <th>Property</th>
                                            <th>Tenancy Start Date</th>
                                            <th>Tenancy End Date</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Morgan Freeman</a>
                                            </td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Westlands Dental Studio, Front Street, Lanchester"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>

                                            <td>23/04/2023</td>
                                            <td>10/05/2023</td>
                                            <td>Professional</td>
                                            <td>Tenant Responsible</td>
                                           
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>

                                                <a href="view-user-details.php" class="namelinkURl">Tom Hanks</a>

                                            </td>

                                            <td class="">

                                                <a href="property-details.php">

                                                    <div class="LongMesage_container">

                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="123 Main St, Anytown USA"></input>

                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">

                                                            <i class="bi bi-eye"></i> Read More

                                                        </button>

                                                    </div>

                                                </a>

                                            </td>

                                            <td>24/04/2023</td>

                                            <td>11/05/2023</td>
                                            <td>Professional</td>
                                            <td>Exemption Provided to Council</td>

                                           

                                            <td>

                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <div class="d-flex">

                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="javascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

                                                    </div>

                                                </div>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>

                                                <a href="view-user-details.php" class="namelinkURl">Leonardo
                                                    DiCaprio</a>

                                            </td>

                                            <td class="">

                                                <a href="property-details.php">

                                                    <div class="LongMesage_container">

                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="456 Elm St, Othertown USA"></input>

                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">

                                                            <i class="bi bi-eye"></i> Read More

                                                        </button>

                                                    </div>

                                                </a>

                                            </td>

                                            <td>25/04/2023</td>

                                            <td>12/05/2023</td>
                                            <td>Full Time Student	</td>
                                            <td>Tenant Responsible</td>


                                            <td>

                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <div class="d-flex">

                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="javascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

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
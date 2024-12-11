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
                                    <h1>Tenancies Setup</h1>
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
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-label">Type</label>
                                                    <select name="" id="" class="form-control select2">
                                                        <option value="" selected disable readonly>
                                                            Select an Option</option>
                                                        <option value="1">Private</option>
                                                        <option value="2">Student</option>
                                                        <option value="4">Commercial</option>
                                                        <option value="5">Dental</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-label">Start After / Start Before Date</label>
                                                    <input class="form-control" type="text" name="daterange"
                                                        value="Pick a Date" />
                                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="form-label">End After / End Before Date</label>
                                                    <input class="form-control" type="text" name="daterange"
                                                        value="Pick a Date" />
                                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Filter By Flat</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option
                                                                            value="FLAT 1 ( 3 Bedroom Apartment Student )">
                                                                            FLAT 1 ( 3 Bedroom Apartment Student )</option>
                                                                        <option
                                                                            value="FLAT 2 ( 3 Bedroom Apartment Professionals)">
                                                                            FLAT 2 ( 3 Bedroom Apartment Professionals)
                                                                        </option>
                                                                        

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Filter By Bedroom</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option
                                                                            value="Bedroom A">
                                                                            Bedroom A</option>
                                                                        <option
                                                                            value="Bedroom B">
                                                                            Bedroom B
                                                                        </option>
                                                                        <option
                                                                            value="Bedroom C">
                                                                            Bedroom C</option>
                                                                        <option
                                                                            value="Bedroom D">
                                                                            Bedroom D
                                                                        </option>
                                                                        <option
                                                                            value="Bedroom E">
                                                                            Bedroom E
                                                                        </option>

                                                                    </select>

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

                                            <th>Tenant</th>
                                            <th>Property</th>
                                            <th>Flat</th>
                                            <th>Bedroom</th>
                                            <th>Type</th>
                                            <th>Start Date</th>
                                            <th>Check In Date</th>
                                            <th>Check Out Date</th>
                                            <th>Current Tenancy End Date</th>
                                            <th>Status</th>
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
                                            <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom A</td>
                                            <td>Student</td>
                                            <td>23/04/2023</td>
                                            <td>10/05/2023</td>
                                            <td>18/06/2023</td>
                                            <td>15/06/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
                                                                    </div>
                                                                </td>
                                            <!-- <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="tenancy.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy"
                                                            href="vjavascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><i
                                                                        data-feather="eye"></i></span></span></a>

                                                                        <a href="tenancylead-notes.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Manage Notes"
                                                            href="vjavascript:void(0)"><span class="icon"><span
                                                                    class="feather-icon"><iconify-icon icon="material-symbols-light:export-notes-outline" ></iconify-icon></span></span></a>

                                                    </div>
                                                </div>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Jessica Alba</a>
                                            </td>
                                            <td class="">
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
                                            <td>FLAT 2 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom B</td>
                                            <td>Student</td>
                                            <td>15/03/2023</td>
                                            <td>25/04/2023</td>
                                            <td>30/05/2023</td>
                                            <td>28/05/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
                                                                    </div>
                                                                </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Chris Evans</a>
                                            </td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Marvel Avenue, Brooklyn, New York"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom C</td>
                                            <td>Student</td>
                                            <td>01/02/2023</td>
                                            <td>14/03/2023</td>
                                            <td>20/04/2023</td>
                                            <td>18/04/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
                                                                    </div>
                                                                </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Emma Watson</a>
                                            </td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Oxford Street, London, UK"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>FLAT 3 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom D</td>
                                            <td>Student</td>
                                            <td>10/01/2023</td>
                                            <td>20/02/2023</td>
                                            <td>25/03/2023</td>
                                            <td>23/03/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
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
                                                            value="Forest Gump Road, Greenbow, Alabama"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>FLAT 1 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom E</td>
                                            <td>Student</td>
                                            <td>05/06/2023</td>
                                            <td>15/07/2023</td>
                                            <td>20/08/2023</td>
                                            <td>18/08/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
                                                                    </div>
                                                                </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Scarlett
                                                    Johansson</a>
                                            </td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Central Park West, New York, NY"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>FLAT 2 ( 3 Bedroom Apartment Student )</td>
                                            <td>Bedroom A</td>
                                            <td>Student</td>
                                            <td>12/04/2023</td>
                                            <td>22/05/2023</td>
                                            <td>27/06/2023</td>
                                            <td>25/06/2023</td>
                                            <td>
                                                                    <div class="prioritystatus highPriority">
                                                                        <span class="highpriority_badge custom_mr_2 dot-label1"></span>
                                                                        <span class="priorityStatus_text">Tenancy Setup is Done </span>
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
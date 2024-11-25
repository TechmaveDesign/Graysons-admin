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
            <!-- sub menu header -->

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Check In</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <button type="button" class="cmnCheckincheckout_btn" data-bs-toggle="modal"
                                data-bs-target="#manageScheduleModal"><span>Book Check In</span></button>
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

                    </header>
                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-3">
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

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Start After / Start Before
                                                                        Date</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">End After / End Before
                                                                        Date</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange" value="Pick a Date" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Debt Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="None">None</option>
                                                                        <option value="30DayLetter">30 Day Notice
                                                                        </option>
                                                                        <option value="DebtCollector">Debt Collector
                                                                        </option>
                                                                        <option value="CountyCourtJudgement">CCJ
                                                                        </option>

                                                                    </select>

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

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>Tenant</th>
                                            <th>Property</th>
                                            <th>Sub Unit</th>
                                            <th>Contract Start Date</th>
                                            <th>Check In Date</th>
                                            <th>End Date</th>
                                            <th>Actions</th>
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
                                            <td>Apartment 3B</td>

                                            <td>23/04/2023</td>
                                            <td>10/05/2023</td>
                                            <td>15/06/2023</td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-checkin-details.php"
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
                                            <td>House 5C</td>

                                            <td>15/03/2023</td>
                                            <td>25/04/2023</td>
                                            <td>28/05/2023</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="view-checkin-details.php"
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
                                            <td>Flat 2A</td>

                                            <td>01/02/2023</td>
                                            <td>14/03/2023</td>
                                            <td>18/04/2023</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="view-checkin-details.php"
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
                                            <td>Apartment 2C</td>

                                            <td>10/01/2023</td>
                                            <td>20/02/2023</td>
                                            <td>23/03/2023</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="view-checkin-details.php"
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
                                            <td>Flat 1</td>

                                            <td>05/06/2023</td>
                                            <td>15/07/2023</td>
                                            <td>18/08/2023</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="view-checkin-details.php"
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
                                            <td>Flat 5D</td>

                                            <td>12/04/2023</td>
                                            <td>22/05/2023</td>
                                            <td>25/06/2023</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a href="view-checkin-details.php"
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

<!-- Modal Structure -->
<div class="modal modal_schedule fade" id="manageScheduleModal" tabindex="-1" aria-labelledby="manageScheduleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageScheduleModalLabel">Manage Time Slots</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for Adding Time Schedule -->
                <form id="scheduleForm" action="checkIn.php">

                <div class="col-md-12">
    <div class="form-group">
        <label class="form-label">Select Tenant</label>
        <select class="form-control select2">
            <option disabled selected value="">Please Select...</option>
            <option value="Alice Johnson">Alice Johnson</option>
            <option value="Robert Williams">Robert Williams</option>
            <option value="Sophia Martinez">Sophia Martinez</option>
            <option value="James Anderson">James Anderson</option>
            <option value="Olivia Wilson">Olivia Wilson</option>
            <option value="William Harris">William Harris</option>
            <option value="Emma Clark">Emma Clark</option>
            <option value="Benjamin Lewis">Benjamin Lewis</option>
            <option value="Isabella Scott">Isabella Scott</option>
            <option value="Henry Moore">Henry Moore</option>
            <option value="Charlotte Hall">Charlotte Hall</option>
            <option value="Liam Turner">Liam Turner</option>
            <option value="Amelia Evans">Amelia Evans</option>
            <option value="Noah Baker">Noah Baker</option>
            <option value="Mia Nelson">Mia Nelson</option>
        </select>
    </div>
</div>

<div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Select Staff to Assign</label>
                            <select class="form-control select2">
                                <option disabled selected value="">Please Select...</option>
                                <option value="John Doe">John Doe</option>
                                <option value="Jane Smith">Jane Smith</option>
                                <option value="David Lee">David Lee</option>
                                <option value="Emily Clark">Emily Clark</option>
                                <option value="Michael Brown">Michael Brown</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="scheduleDate" class="form-label">Select Date</label>
                        <input type="text" class="form-control" id="scheduleDate" placeholder="Pick a date" readonly>
                    </div>

                  

                    <div class="mb-3">
                        <label for="timePicker" class="form-label">Select Time Slot</label>
                        <div class="timeselect_container">
                            <input type="text" class="form-control time__pickers" id="" placeholder="Pick a time"
                                readonly>
                            <button type="button" class="btn btn-primary" id="addTimeSlotBtn">Add Time Slot</button>
                        </div>
                    </div>

                    <div id="timeSlotList" class="mb-3">
                        <!-- Time slots will be listed here dynamically -->
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="canvasSubmit_button commonCanvas_buttonFooter" id="saveScheduleBtn">Save
                    Schedule</button>
            </div>
        </div>
    </div>
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

<!-- book checkin time slots js start -->
<script>
    $(document).ready(function() {
        // Initialize Flatpickr for date selection
        $('#scheduleDate').flatpickr({
            dateFormat: "Y-m-d",
            minDate: "today"
        });
        // Initialize Mdtimepicker for time selection
        $('.time__pickers').mdtimepicker({
            format: 'hh:mm tt' // 12-hour format with AM/PM
        });
        let selectedTimes = [];
        // Function to update time slots list in the modal
        function updateTimeSlotList() {
            $('#timeSlotList').empty();
            selectedTimes.forEach((time, index) => {
                $('#timeSlotList').append(`
                <div class="d-flex justify-content-between align-items-center time-slot-item">
                    <span>${time}</span>
                    <button type="button" class="btn btn-danger btn-sm remove-time-slot" data-index="${index}">
                        &times;
                    </button>
                </div>
            `);
            });
        }
        // Add time slot button click handler
        $('#addTimeSlotBtn').on('click', function() {
            const selectedTime = $('.time__pickers').val();
            if (selectedTime && !selectedTimes.includes(selectedTime)) {
                selectedTimes.push(selectedTime);
                updateTimeSlotList();
            } else {
                alert("Please select a valid time that hasn't already been added.");
            }
            $('.time__pickers').val(''); // Reset time input after adding
        });
        // Remove time slot button click handler
        $('#timeSlotList').on('click', '.remove-time-slot', function() {
            const index = $(this).data('index');
            selectedTimes.splice(index, 1);
            updateTimeSlotList();
        });
        // Save schedule button handler with SweetAlert2
        $('#saveScheduleBtn').on('click', function() {
            const selectedDate = $('#scheduleDate').val();
            if (!selectedDate) {
                alert("Please select a date.");
                return;
            }
            if (selectedTimes.length === 0) {
                alert("Please add at least one time slot.");
                return;
            }
            // SweetAlert confirmation
            Swal.fire({
                title: 'Schedule Saved!',
                text: `Schedule for ${selectedDate} has been saved with ${selectedTimes.length} time slots.`,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                // Reset form and close modal after confirmation
                $('#scheduleForm')[0].reset();
                selectedTimes = [];
                updateTimeSlotList();
                $('#manageScheduleModal').modal('hide');
            });
        });
    });
</script>
<!-- book checkin time slots js end -->
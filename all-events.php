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
    <!-- Page Header -->
    <!-- <div class="hk-pg-header  pt-7">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Welcome back to your Admin Panel, where every detail of your operations awaits your command.</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i
													data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes"
											value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
					
				</div> -->
    <!-- /Page Header -->

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
<!-- sub menu header -->
<?php// include('headers/event-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Events </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                            <button class="calendarButton" data-bs-toggle="offcanvas" data-bs-target="#ViewAppoinment"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="radix-icons:calendar"></iconify-icon> View Calendar
                            </button>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#AddEventModal"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add New Event
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
                        <div class=" sustomdividerLedtArrow"></div>
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
                                                        <div class="col-lg-2">
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

                                                            <div class="col-lg-2">
    <div class="form-group">
        <label class="form-label">City</label>
        <select name="city" id="city" class="form-control select2">
            <option disabled selected value="">Please Select...</option>
            <option value="New York">New York</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Chicago">Chicago</option>
            <option value="Houston">Houston</option>
            <option value="Phoenix">Phoenix</option>
            <option value="Philadelphia">Philadelphia</option>
            <option value="San Antonio">San Antonio</option>
            <option value="San Diego">San Diego</option>
            <option value="Dallas">Dallas</option>
            <option value="San Jose">San Jose</option>
        </select>
    </div>
</div>


                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="1">Inspection</option>
                                                                        <option value="2">Viewing</option>
                                                                        <option value="3">Appointment</option>
                                                                        <option value="4">Payment Due</option>
                                                                        <option value="5">Payment Overdue</option>
                                                                        <option value="6">Issue Reported</option>
                                                                        <option value="7">Custom</option>
                                                                        <option value="8">Payment Upcoming</option>
                                                                        <option value="9">Issue Updated</option>
                                                                        <option value="10">Issue Assigned</option>
                                                                        <option value="11">Tenancy Ending</option>
                                                                        <option value="12">Income Summary</option>
                                                                        <option value="13">Invoice Raised</option>
                                                                        <option value="14">Inspection Checked</option>
                                                                        <option value="15">Inspection Updated</option>
                                                                        <option value="16">Invoice Voided</option>
                                                                        <option value="17">Invoice Receipt</option>
                                                                        <option value="18">Invoice Raised</option>
                                                                        <option value="19">Invoice Voided</option>
                                                                        <option value="20">Invoice Receipt</option>
                                                                        <option value="21">Happy Birthday</option>
                                                                        <option value="22">Appointment Cancelled
                                                                        </option>
                                                                        <option value="23">Invoice Reminder</option>
                                                                        <option value="24">Invoice Reminder</option>
                                                                        <option value="25">Enquiry Received</option>
                                                                        <option value="26">Viewing Booked</option>
                                                                        <option value="27">Viewing Complete</option>
                                                                        <option value="28">Viewing Cancelled</option>
                                                                        <option value="29">Viewing Missed</option>
                                                                        <option value="30">Viewing Follow Up</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="NotAcknowledged">Not acknowledged
                                                                            by anyone</option>
                                                                        <option value="NotAllAcknowledged">Not
                                                                            acknowledged by everyone</option>
                                                                        <option value="NotAllViewed">Not viewed by
                                                                            everyone</option>
                                                                        <option value="NotViewed">Not viewed by anyone
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Date After</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Date Before </label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="May, 22 2024 " readonly="readonly">
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
                                            <th>Property</th>
                                            <th>City</th>
                                            <th>Type </th>
                                            <th>Created</th>
                                            <th>Viewed</th>
                                            <th>Acknowledged</th>
                                            <th>Date</th>
                                            <th>Recipients</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Communal Area Inspection House
                                            10</td>
                                            <td>San Jose</td>
                                            <td>Appointment
                                            </td>
                                            <td>17/11/2021 02:57</td>
                                            <td>3/3</td>
                                            <td>0/3</td>
                                            <td>18/06/2024 03:30</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House
                                            10</td>
                                            <td>Phoenix</td>
                                            <td>Appointment</td>
                                            <td>05/08/2022 14:30</td>
                                            <td>1/3</td>
                                            <td>2/3</td>
                                            <td>15/12/2024 01:50</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House
                                            10</td>
                                            <td>Dallas</td>
                                            <td>Appointment</td>
                                            <td>12/09/2023 09:45</td>
                                            <td>2/3</td>
                                            <td>1/3</td>
                                            <td>20/03/2025 12:30</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House
                                            10</td>
                                            <td>Los Angeles</td>
                                            <td>Appointment</td>
                                            <td>07/11/2024 11:00</td>
                                            <td>3/3</td>
                                            <td>0/3</td>
                                            <td>25/06/2026 4:10</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House
                                            10</td>
                                            <td>San Antonio</td>
                                            <td>Appointment</td>
                                            <td>18/02/2025 15:20</td>
                                            <td>0/3</td>
                                            <td>3/3</td>
                                            <td>30/08/2027 02:30</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House
                                            10</td>
                                            <td>Philadelphia</td>
                                            <td>Appointment</td>
                                            <td>03/06/2026 08:00</td>
                                            <td>1/3</td>
                                            <td>2/3</td>
                                            <td>10/12/2028 08:20</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Area Inspection House</td>
                                            <td>New York</td>
                                            <td>Appointment Cancelled</td>
                                            <td>05/08/2022 14:30</td>
                                            <td>1/3</td>
                                            <td>2/3</td>
                                            <td>15/12/2024 03:30</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td>Communal Area Inspection House</td>
                                            <td>Houston</td>
                                            <td>Appointment Cancelled</td>
                                            <td>12/09/2023 09:45</td>
                                            <td>2/3</td>
                                            <td>1/3</td>
                                            <td>20/03/2025 03:30</td>
                                            <td> <button type="button"
                                                    class="texticonButton_Recipients  actioncustom_common"
                                                    data-bs-toggle="offcanvas" data-bs-target="#viewRecipients"
                                                    aria-controls="offcanvasExample">
                                                    <iconify-icon icon="fluent:document-bullet-list-16-regular">
                                                    </iconify-icon> View Recipients
                                                </button></td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">

                                                    <button
                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                        data-bs-toggle="offcanvas" data-bs-target="#eventDetailModal"
                                                        aria-controls="offcanvasExample">
                                                        <span class="icon">
                                                            <span class="feather-icon">
                                                                <iconify-icon icon="quill:eye"></iconify-icon>
                                                            </span>
                                                        </span>
                                                    </button>

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

<!-- add Event offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddEventModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Add Event
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
    <form class="" action="all-events.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Event</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Communal Area Inspection House 10</option>
                                            <option value="7">Communal Area Inspection House 14</option>
                                            <option value="21">Communal Area Inspection House 18</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Viewing</option>
                                            <option value="7">Custom</option>
                                            <option value="21">Happy Birthday</option>
                                            <option value="22">Appointment Cancelled</option>
                                            <option value="25">Enquiry Received</option>
                                            <option value="26">Viewing Booked</option>
                                            <option value="27">Viewing Complete</option>
                                            <option value="28">Viewing Cancelled</option>
                                            <option value="29">Viewing Missed</option>
                                            <option value="30">Viewing Follow Up</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Short Message (Push Notifications Only)</label>
                                        <input type="text" class="form-control" id="" value="">
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Message</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check checkWithLabel">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Request Acknowledgement
                                            </label>
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
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add Event offcanvas modal end -->

<!-- view Recipients offcanvas modal-->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="viewRecipients"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="solar:user-check-line-duotone"></iconify-icon>
            View Recipients
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
    <form class="" action="property-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer offcanvasDatatable OffCanvasDatatable_form">
                <div class="formstartcontainer">
                    <div class="contact-list-view">

                        <table class="table common-datatable withoutbuttontable  nowrap w-100 ">
                            <thead>
                                <tr>

                                    <th>Recipient</th>
                                    <th>Viewed</th>
                                    <th>Acknowledged</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Danial Craig</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Emma Watson</a>
                                        </div>
                                    </td>
                                    <td>20/03/2024 06:52</td>

                                    <td>16/04/2023 02:38</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">John Doe</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Jane Smith</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 09:15</td>
                                    <td>10/05/2024 09:30</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Michael Johnson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Sophia Brown</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 11:45</td>
                                    <td>10/05/2024 12:00</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Christopher Lee</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Jessica Parker</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 14:20</td>
                                    <td>10/05/2024 14:35</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">David Brown</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Emily White</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 16:50</td>
                                    <td>10/05/2024 17:05</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Robert Smith</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Olivia Johnson</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 19:30</td>
                                    <td>10/05/2024 19:45</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">William Taylor</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Amelia Martinez</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 21:10</td>
                                    <td>10/05/2024 21:25</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">James Anderson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Ava Wilson</a>
                                        </div>
                                    </td>
                                    <td>10/05/2024 23:20</td>
                                    <td>10/05/2024 23:35</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Daniel Williams</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Ella Thompson</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 08:45</td>
                                    <td>_ _ _</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Nathan Harris</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Grace Carter</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 10:30</td>
                                    <td>_ _ _</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Sophie Baker</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Lucas Adams</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 12:15</td>
                                    <td>_ _ _</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="tableMultiname_container">
                                            <a href="view-user-details.php" class="namelinkURl">Ethan Richardson</a>
                                            <div class="spacermuultiname">,</div> <a href="view-user-details.php"
                                                class="namelinkURl">Lily Evans</a>
                                        </div>
                                    </td>
                                    <td>11/05/2024 14:00</td>
                                    <td>_ _ _</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>

        </div>
    </form>
</div>
<!-- view Recipients offcanvas modal end -->

<!--Offcanvas Wrapper-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="eventDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
            View Details
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="rightcanvas_Container">
            <div class="card card-border eventDetailCard mb-lg-4 mb-3">

                <div class="card-body">
                    <div class="d-flex text-center">
                        <div class="flex-1 border-end">
                            <div>
                                <span class="d-block apnDataPlace  text-dark mb-1">Appointment</span>
                                <span class="d-block text-capitalize fs-7">Type</span>
                            </div>
                        </div>
                        <div class="flex-1 ">
                            <div>
                                <span class="d-block apnDataPlace  text-dark mb-1">25/11/2100 18:30</span>
                                <span class="d-block text-capitalize fs-7">Event At</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <ul class="issueHistoryList eventMessageContent">
                <li><label for="shortmessage" class="form-label historyLabel">
                        <iconify-icon icon="mynaui:message-dots"></iconify-icon> Short Message :
                    </label>

                    <p>Visit: 20/09/23 09:00-09:20 Description: Routine Fire Alarm Testing</p>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="tabler:message-2-check"></iconify-icon> Message :
                    </label>

                    <p>Our professional cleaning team will arrive at the scheduled time, equipped with all necessary
                        supplies to provide you with top-quality service.</p>
                </li>

                <div class="separator separator-light"></div>

            </ul>

            <div class="requestAcknowladmnt">
                <div class="form-check checkWithLabel">
                    <input class="form-check-input" type="checkbox" id="gridCheck" checked readonly>
                    <label class="form-check-label" for="gridCheck">
                        Request Acknowledgement
                    </label>
                </div>

            </div>
        </div>
    </div>
</div>
<!--/ Offcanvas Wrapper-->

<!-- appoinment calendar view form offcanvas -->
<div class="offcanvas offcanvas-bottom calendar_offcanvasStyle" tabindex="-1" id="ViewAppoinment"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="radix-icons:calendar"></iconify-icon>
            Appointments Calendar
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
    <form class="calendarForm" action="view-ticket.php" method="post">
        <div class="offcanvas-body">
            <div class="addingForm_Container fullwidthcanvas_container">

                <div class="formstartcontainer">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="userFilters calendar_Filters onerowfilter" id="filterDiv">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-9">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Visitor</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Properties, Graysons</option>
                                                                        <option value="2">Ghai, Akash</option>
                                                                        <option value="3">Dwernicka, Ewa</option>
                                                                        <option value="4">Jeske, Rafal</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Property</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Communal Area Inspection House
                                                                            10</option>
                                                                        <option value="2">Communal Area Inspection House
                                                                            18</option>
                                                                        <option value="3">Communal Area Inspection House
                                                                            22</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Issue Type</label>
                                                                    <select name="" id="" class="form-control select2"
                                                                        multiple="multiple"
                                                                        data-placeholder="Select an Option">

                                                                        <option value="1">Bathroom > Sink</option>
                                                                        <option value="2">Bedroom</option>
                                                                        <option value="3">Bedroom > Wardrobe</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Users</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="user">User</option>
                                                                        <option value="issuetype_property">Issue Type -
                                                                            Property</option>
                                                                        <option value="property_issuetype">Property -
                                                                            Issue Type</option>
                                                                        <option value="issue">Issue</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#addissueModal"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add Appointmentment
                                                            </button>
                                                        </div>

                                                    </div>
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
                        </div>

                        <div class="col-lg-12">
                            <div class="calendarapp-wrap">

                                <div class="calendarapp-content">
                                    <div id="calendar"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </form>
</div>
<!-- appoinment calendar view offcanvas modal end -->

<!-- add issue offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addissueModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="pajamas:issue-type-incident" width="1.2em" height="1.2em"></iconify-icon>
            Add Appoinment
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
    <form class="" action="all-events.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Appoinment</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Visible to Tenants</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">None</option>
                                            <option value="2">Room Tenant</option>
                                            <option value="3">Unit Tenants</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
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

                                <div class="col-md-4">
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

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Comment</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
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

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add issue offcanvas modal end -->

<!-- Calendar Drawer -->
<div class="hk-drawer calendar-drawer drawer-right">
    <div>
        <div class="drawer-header">
            <div class="drawer-header-action">
                <a href="#" id="edit_event"
                    class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                        class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                <a href="#" id="del_event"
                    class="btn btn-sm btn-icon btn-flush-secondary btn-rounded flush-soft-hover"><span
                        class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>

                <button type="button" class="drawer-close btn-close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        <div class="drawer-body">
            <div data-simplebar class="nicescroll-bar">
                <div class="drawer-content-wrap">
                    <div class="event-head mb-4">
                        <span class="badge badge-violet badge-indicator badge-indicator-xl flex-shrink-0 me-2"></span>
                        <div>
                            <div class="event-name">Graysons Team Meet</div>
                            <span>Event</span>
                        </div>
                    </div>
                    <ul class="event-detail">
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="calendar"></i></span></span>
                            Aug 18,2020 - Aug 19, 2020
                        </li>
                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="clock"></i></span></span>
                            8:40 AM - 5:40 PM
                        </li>

                        <li>
                            <span class="ev-icon-wrap"><span class="feather-icon"><i
                                        data-feather="eye"></i></span></span>
                            Visible to Room Tenant
                        </li>

                    </ul>

                    <ul class="issueHistoryList eventMessageContent">

                        <li class="flexListITem">
                            <label for="message" class="form-label historyLabel">
                                <iconify-icon icon="fluent:scan-type-24-filled"></iconify-icon> Type :
                            </label>

                            <div class="tipmePeriod">
                                <p class="dateofmileage">Bedroom</p>
                            </div>
                        </li>

                        <li><label for="message" class="form-label historyLabel">
                                <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon> Date :
                            </label>

                            <div class="tipmePeriod">
                                <p class="dateofmileage">20/01/2021 14:57</p>
                            </div>
                        </li>

                        <li><label for="message" class="form-label historyLabel">
                                <iconify-icon icon="tabler:message-2-check"></iconify-icon> Comment :
                            </label>

                            <div class="logcomment">
                                <p>Please contact us at [Contact Number] or [Contact Email] to arrange a new date and
                                    time that
                                    is convenient for you. We apologize for any inconvenience this may cause and
                                    appreciate your
                                    understanding.</p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="d-none">
        <div class="drawer-header">
            <div class="drawer-header-action">
                <button type="button" class="drawer-edit-close btn-close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        <div class="drawer-body">
            <div data-simplebar class="nicescroll-bar">
                <div class="drawer-content-wrap">
                    <div class="event-head mb-4">
                        <span class="badge badge-violet badge-indicator badge-indicator-xl flex-shrink-0 me-2"></span>
                        <div>
                            <div class="event-name" contenteditable="true">Graysons Team Meet</div>
                            <div class="form-group mt-2 mb-0">
                                <div class="form-check form-check-inline ps-0">
                                    <div class="form-check">
                                        <input type="radio" id="event_1" name="eventSelect" class="form-check-input"
                                            checked="">
                                        <label class="form-check-label" for="event_1">Event</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="calendar"></i></span></span>
                                    <input class="form-control form-wth-icon" name="datetimes"
                                        value="Aug 18,2020 - Aug 19, 2020">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-affix-wrapper">
                                    <span class="input-prefix"><span class="feather-icon"><i
                                                data-feather="clock"></i></span></span>
                                    <input type="text" name="time" value="" class="form-control time__pickers"
                                        id="timepicker" placeholder="Select Time" required="" readonly="">
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group color-picker">
                                <div class="input-group-text colorpicker-input-addon"
                                    style="background-color: rgb(0, 155, 132);">
                                    <input type="color"></div>
                                <input type="text" class="form-control colorpicker-value" value="#009B84">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Visible to Tenants</label>
                            <select name="" id="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="1">None</option>
                                <option value="2">Room Tenant</option>
                                <option value="3">Unit Tenants</option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Type</label>
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

                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Comment</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>

                        <div class="form-group">
                            <div class="card-body">
                                <label class="form-label">Upload Image</label>

                                <div class="documentuploadContainer">
                                    <input type="file" class="Documentdropify" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check checkWithLabel">
                                <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                <label class="form-check-label" for="gridCheck">
                                    Request presence during maintenance?
                                </label>
                            </div>

                        </div>

                        <div class="drawer-footer d-flex justify-content-end">
                            <button class="btn btn-primary drawer-edit-close">save</button>
                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>

</div>

<!-- /Calendar Drawer -->

<?php include('footer.php') ?>

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

<!-- Fullcalendar JS -->
<script src="vendors/fullcalendar/index.global.min.js"></script>
<script src="vendors/%40fullcalendar/bootstrap5/index.global.min.js"></script>
<script src="dist/js/fullcalendar-init.js"></script>
<!-- Bootstrap Notify JS -->
<script src="dist/js/bootstrap-notify.min.js"></script>
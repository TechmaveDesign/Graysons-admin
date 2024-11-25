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
<?php include('headers/hrheader.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Time Logs</h1>
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

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Import</a>
                            </div>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#AddTimeLog"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add Time Log
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
                                            <div class="col-xxl-8">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">User</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="">Gowthorpe, Jason</option>
                                                                        <option value="">Properties, Graysons</option>
                                                                        <option value="">Ghai, Akash</option>
                                                                        <option value="">Dwernicka, Ewa
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

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
                                                                    <label class="form-label">Start Date</label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="" placeholder="Select Date"
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">End Date </label>
                                                                    <input type="text"
                                                                        class="form-control customdataPicker flatpickr-input"
                                                                        value="" placeholder="Select Date"
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4">
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-6 flexcheckColumn">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckList6">
                                                                <label class="form-check-label" for="customCheckList6">
                                                                    Include Deleted
                                                                    <span class="done-strikethrough"></span>
                                                                </label>

                                                            </div>
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
                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>User </th>
                                            <th>Property</th>
                                            <th>Issue</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Duration</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Danial Craig</a>
                                            </td>
                                            <td>
                                                <a href="property-details.php" class="namelinkURl">Bedroom 3 133, Flat
                                                    3 (Floor 1, No3), City View@Phoenix
                                                    House</a>
                                            </td>
                                            <td><a href="view-ticket.php" target="_blank">Bedroom > Other :
                                                    113820</a></td>
                                            <td>17/05/2024 02:57</td>
                                            <td>19/05/2024 16:00</td>
                                            <td>00:45</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#Edittimelog"
                                                            aria-controls="offcanvasExample"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#logDetailModal"
                                                            aria-controls="offcanvasExample">
                                                            <span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Jennifer
                                                    Lawrence</a>
                                            </td>
                                            <td>
                                                <a href="property-details.php" class="namelinkURl">Bedroom 2 204, Flat 7
                                                    (Floor 2, No14), Skyline Apartments</a>
                                            </td>
                                            <td><a href="view-ticket.php" target="_blank">Bathroom > Leak :
                                                    214597</a></td>
                                            <td>16/05/2024 11:30</td>
                                            <td>18/05/2024 09:00</td>
                                            <td>01:30</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#Edittimelog"
                                                            aria-controls="offcanvasExample"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#logDetailModal"
                                                            aria-controls="offcanvasExample">
                                                            <span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Michael B.
                                                    Jordan</a>
                                            </td>
                                            <td>
                                                <a href="property-details.php" class="namelinkURl">Living Room 105, Flat
                                                    9 (Floor 1, No5), Riverside Towers</a>
                                            </td>
                                            <td><a href="view-ticket.php" target="_blank">Living Room >
                                                    Electrical : 315430</a></td>
                                            <td>15/05/2024 14:15</td>
                                            <td>17/05/2024 18:45</td>
                                            <td>02:30</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#Edittimelog"
                                                            aria-controls="offcanvasExample"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="offcanvas"
                                                            data-bs-target="#logDetailModal"
                                                            aria-controls="offcanvasExample">
                                                            <span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span></span>
                                                        </button>
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

<!-- add time log offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddTimeLog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Add Time Log
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
    <form class="" action="time-logs.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Time Log</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-12">
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

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                        </div>
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

<!-- edit time log offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Edittimelog"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="material-symbols:event-upcoming-outline" width="1.2em" height="1.2em"></iconify-icon>
            Edit Time Log
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
    <form class="" action="time-logs.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Time Log</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="2">Communal Area Inspection House 10</option>
                                            <option value="7" selected>Communal Area Inspection House 14</option>
                                            <option value="21">Communal Area Inspection House 18</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly" value="08/05/2024">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="3:04 PM"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required="" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="select Date" readonly="readonly" value="10/05/2024">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="4:04 PM"
                                                class="form-control time__pickers" id="timepicker"
                                                placeholder="Select Time" required="" readonly="">
                                        </div>
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

<!--Offcanvas Wrapper-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="logDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
            View Log Details
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="rightcanvas_Container">
            <div class="card card-border eventDetailCard mb-lg-4 mb-3">
                <div class="card-header card-header-action">
                    <div class="media align-items-center">
                        <div class="media-head me-2">
                            <div class="avatar avatar-sm avatar-rounded">
                                <img src="dist/img/newimages/users/userdummy.png" alt="user" class="avatar-img">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="fw-medium text-dark">Reported By ( User )</div>
                            <div class="fs-7"><a href="view-user-details.php">Clews,
                                    Abbie</a> @ 16/04/2024 16:30</div>
                        </div>
                    </div>

                </div>

            </div>

            <ul class="issueHistoryList eventMessageContent">
                <li><label for="shortmessage" class="form-label historyLabel">
                        <iconify-icon icon="tabler:building"></iconify-icon> Property :
                    </label>

                    <a href="property-details.php">Graysons Properties Ltd, Newcastle Upon Tyne </a>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="mdi:git-issue"></iconify-icon> issue :
                    </label>

                    <div class="tipmePeriod">
                        <a href="view-ticket.php" target="_blank">Bedroom > Other</a>
                    </div>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon> Period :
                    </label>

                    <div class="tipmePeriod">
                        <p>16/04/2024 13:30 - 16/04/2024 21:30</p>
                    </div>
                </li>

                <li><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="tabler:message-2-check"></iconify-icon> Comment :
                    </label>

                    <div class="logcomment">
                        <p>Please contact us at [Contact Number] or [Contact Email] to arrange a new date and time that
                            is convenient for you. We apologize for any inconvenience this may cause and appreciate your
                            understanding.</p>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>
<!--/ Offcanvas Wrapper-->

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
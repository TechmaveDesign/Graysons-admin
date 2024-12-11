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
                                    <h1>Parking Tenancies </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#AddParkingTenancyModal"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add New Parking Tenancy
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
                                                                    <select name="city" id="city"
                                                                        class="form-control select2">
                                                                        <option disabled selected value="">Please
                                                                            Select...</option>
                                                                        <option value="New York">New York</option>
                                                                        <option value="Los Angeles">Los Angeles</option>
                                                                        <option value="Chicago">Chicago</option>
                                                                        <option value="Houston">Houston</option>
                                                                        <option value="Phoenix">Phoenix</option>
                                                                        <option value="Philadelphia">Philadelphia
                                                                        </option>
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

                                            <th>Property </th>
                                            <th>Tenancy Start Date</th>
                                            <th>Tenancy End Date</th>
                                            <th>Outstanding Payments</th>
                                            <th>Details</th>
                                            <th>Payment Plan Type</th>
                                            <th>Monthly Payment</th>
                                            <th>Total Installments</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                09/04/2024 17:19
                                            </td>
                                            <td>28/09/2023 19:47</td>
                                            <td>0</td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bay 34, Reg number: YA14ZPM"></input>
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
                                            <td>Monthly</td>
                                            <td>£546</td>
                                            <td>5</td>
                                            <td><span class="badge badge-soft-success  my-1  me-2">Payment
                                                    added to rent</span>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy Details"
                                                            href="parking-tenency-details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="majesticons:eye-line">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                09/04/2024 17:19
                                            </td>
                                            <td>28/09/2023 19:47</td>
                                            <td>0</td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bay 34, Reg number: YA14ZPM"></input>
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
                                            <td>Monthly</td>
                                            <td>£546</td>
                                            <td>5</td>
                                            <td><span class="badge badge-soft-success  my-1  me-2">Payment
                                                    added to rent</span>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy Details"
                                                            href="parking-tenency-details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="majesticons:eye-line">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                09/04/2024 17:19
                                            </td>
                                            <td>28/09/2023 19:47</td>
                                            <td>0</td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bay 34, Reg number: YA14ZPM"></input>
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
                                            <td>Monthly</td>
                                            <td>£546</td>
                                            <td>5</td>
                                            <td><span class="badge badge-soft-success  my-1  me-2">Payment
                                                    added to rent</span>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy Details"
                                                            href="parking-tenency-details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="majesticons:eye-line">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                09/04/2024 17:19
                                            </td>
                                            <td>28/09/2023 19:47</td>
                                            <td>0</td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bay 34, Reg number: YA14ZPM"></input>
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
                                            <td>Monthly</td>
                                            <td>£546</td>
                                            <td>5</td>
                                            <td><span class="badge badge-soft-success  my-1  me-2">Payment
                                                    added to rent</span>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy Details"
                                                            href="parking-tenency-details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="majesticons:eye-line">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                09/04/2024 17:19
                                            </td>
                                            <td>28/09/2023 19:47</td>
                                            <td>0</td>
                                            <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Bay 34, Reg number: YA14ZPM"></input>
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
                                            <td>Monthly</td>
                                            <td>£546</td>
                                            <td>5</td>
                                            <td><span class="badge badge-soft-success  my-1  me-2">Payment
                                                    added to rent</span>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Tenancy Details"
                                                            href="parking-tenency-details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="majesticons:eye-line">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
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
<!-- Add Parking Tenancy offcanvas form modal-->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddParkingTenancyModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="mdi:car-brake-parking"></iconify-icon>
            Add Parking Tenancy
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
    <form class="" action="view-user-details.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Parking Tenancy</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label class="form-label"> Date of Agreemant</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control" id="Title" value="Dean Shaw" readonly
                                            disabled>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Property Address</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Communal Area Inspection House 14</option>
                                            <option value="15" selected>Communal Area Inspection House 16</option>
                                            <option value="19">Communal Area Inspection House 22</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Private</option>
                                            <option value="2">Student</option>
                                            <option value="4">Commercial</option>
                                            <option value="5">Dental</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Car Number</label>
                                        <input type="text" class="form-control" id="Title" value="">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Licence Number</label>
                                        <input type="text" class="form-control" id="Title" value="">
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label class="form-label">Licence Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Rental Amount</label>
                                        <input type="text" class="form-control" id="Title" value="">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Installments</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="4">3</option>
                                            <option value="4">4</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label class="form-label">Date of Inatallments</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Bay Number</label>
                                        <input type="text" class="form-control" id="Title" value="">
                                    </div>

                                </div>

                                

                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label class="form-label">Tenancy Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label class="form-label">Tenancy End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01/06/2024" readonly="readonly">
                                        <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <label for="" class="form-label">&nbsp;</label>
                                        <div class="form-check">
                                            <input class="form-check-input guranterCheckbox" type="checkbox"
                                                id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Guarantor Required
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Guarantor_Container idrequiredChecked">
                                <div class="row">
                                    <h2>Guarantor Details</h2>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Guarantor Forename</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Guarantor Surname</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Guarantor Email</label>
                                            <input type="email" class="form-control" id="">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label"> Guarantor Contact Number</label>
                                            <input type="phone" class="form-control" id="">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="addressline1" class="form-label">Guarantor Address Line
                                                1</label>
                                            <input type="text" class="form-control" id="addressline1">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="addressline2" class="form-label"> Guarantor Address Line
                                                2</label>
                                            <input type="text" class="form-control" id="addressline2">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Town/City" class="form-label">Guarantor Town/City</label>
                                            <input type="text" class="form-control" id="Town/City">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="County" class="form-label">Guarantor County</label>
                                            <input type="text" class="form-control" id="County">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Postcode" class="form-label">Guarantor Postcode</label>
                                            <input type="text" class="form-control" id="Postcode">
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="proccedPlan_button_container">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <button id="paymentAdded_sucess" type="button" class="btn btn-primary">
                                            <iconify-icon icon="fluent-mdl2:generate"></iconify-icon> Generate Payment
                                            Plan
                                        </button>
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
<!-- Add Parking Tenancy  offcanvas modal end -->

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

<!-- tenancy tab guranter fields hide show based on guranter required check -->
<script>
    $(document).ready(function() {
        $(".Guarantor_Container ").hide();
        $('.guranterCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('.Guarantor_Container').show();
            } else {
                $('.Guarantor_Container').hide();
            }
        });
    });
</script>
<!-- tenancy tab guranter fields hide show based on guranter required check end -->
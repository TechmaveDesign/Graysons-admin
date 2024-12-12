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

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  mb-0">
                                    <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View User Details</li>
                                </ol>
                            </nav>
                            <div class=" ms-3">
                                <a href="users.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                            <div class="RegistrationDetails">
                                <div class="RegisteredItems">
                                    <h2>Registered:</h2>
                                    <div class="registeredDatetime"><span
                                            class="badge badge-soft-success my-1  me-2">05/04/2024 17:45</span></div>
                                </div>

                                <div class="RegisteredItems">
                                    <h2>Last Login:</h2>
                                    <div class="registeredDatetime"><span
                                            class="badge badge-soft-success my-1  me-2">05/04/2024 17:45</span> </div>
                                </div>

                                <div class="RegisteredItems">
                                    <h2>Registered Devices:</h2>
                                    <div class="registeredDatetime"><span
                                            class="badge badge-soft-success my-1  me-2">0</span></div>
                                </div>

                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="sustomdividerLedtArrow"></div>
                    </header>
                    <form action="view-user-details.php">
                        <div class="contact-body contact-detail-body">
                            <div data-simplebar class="nicescroll-bar">
                                <div class="d-flex flex-xxl-nowrap flex-wrap">
                                    <div class="col-lg-3 px-0">
                                        <div class="contact-info leftuserbasic_info">

                                            <div class="text-center mt-5">
                                                <div class="dropify-circle edit-img">
                                                    <input type="file" class="dropify-1"
                                                        data-default-file="dist/img/newimages/users/userdummy.png" />
                                                </div>
                                                <div class="cp-name text-truncate mt-3">Mendaline Shane</div>
                                                <p>mendalineshane@gmail.com</p>
                                                <div class="rating rating-yellow my-rating-4" data-rating="3"></div>
                                                <ul class="hk-list hk-list-sm justify-content-center mt-2">
                                                    <li>
                                                        <a class="btn btn-icon btn-soft-primary btn-rounded"
                                                            href="#"><span class="icon"><span class="feather-icon"><i
                                                                        data-feather="mail"></i></span></span></a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-icon btn-soft-success btn-rounded"
                                                            href="#"><span class="icon"><span class="feather-icon"><i
                                                                        data-feather="phone"></i></span></span></a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="sperarationProfile_heading">Details</div>
                                                    <button class="btn btn-xs btn-icon btn-rounded btn-light"
                                                        type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Edit"><span class="icon"
                                                            data-bs-toggle="modal" data-bs-target="#editInfo"><span
                                                                class="feather-icon"><i
                                                                    data-feather="edit-2"></i></span></span></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-fields-container">
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Title</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input" value="Mr.">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Forename</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="rohit"></div>
                                                            </div>
                                                        </div>
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Middle Names</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Surname</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="Jain"></div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Email: (Verified)</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="rohit@techmavesoftware.com"></div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Contact Number</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="+917959754829"></div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Alt Contact Number</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Address Line 1</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="456 Ocean View, Coral City, Aquanis">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Address Line 2</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="456 Ocean View, Coral City, Aquanis">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name"> Town/City</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="Breezyville"></div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">County</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="Zephyria"></div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Postcode</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;"><input type="text"
                                                                        placeholder="" class="r-user-input"
                                                                        value="ZP12345"></div>
                                                            </div>
                                                        </div>

                                                        <div class="requestverification_button">
                                                            <button type="button" class="buttonRequest_verify">Request
                                                                Email Verification</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="separator-full"></div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="sperarationProfile_heading">More Info</div>
                                                    <button class="btn btn-xs btn-icon btn-rounded btn-light"
                                                        type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Edit"><span class="icon"
                                                            data-bs-toggle="modal" data-bs-target="#moreContact"><span
                                                                class="feather-icon"><i
                                                                    data-feather="edit-2"></i></span></span></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-fields-container">
                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Date of Birth</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;">

                                                                    <input class="r-user-input customdataPicker "
                                                                        type="text" name="" value="10/24/1984" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="user-custom-field">
                                                            <div class="custom-field-name">Appointment Colour:</div>
                                                            <div class="custom-field-value">
                                                                <div style="display: inline-block;">
                                                                    <div
                                                                        class="input-group color-picker customcolorpickerbox">
                                                                        <div
                                                                            class="input-group-text colorpicker-input-addon customcolorpickerBox">
                                                                            <input type="color"></div>
                                                                        <input type="text"
                                                                            class="r-user-inputcolorpicker-value"
                                                                            value="#009B84" />
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="flexcheckColumn">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="customCheckList6">
                                                                    <label class="form-check-label"
                                                                        for="customCheckList6">
                                                                        Has Special Needs (See notes for details)
                                                                        <span class="done-strikethrough"></span>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="basicdetailSubmitSecion">
                                                            <button type="submit" class="buttonInfOUpdate">
                                                                <iconify-icon icon="fluent:save-32-regular">
                                                                </iconify-icon>
                                                                Save Changes
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-9 px-0">
                                        <div class="contact-more-info">

                                            <div class="scrollTabContainerMAin">
                                                <button class="scroll-btn prev" type="button">
                                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                                </button>
                                                <ul class="nav nav-tabs nav-line nav-icon nav-light customuserviewTabs"
                                                    id="scrolableTabs">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                            href="#Documents">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="clipboard"></i></span></span>
                                                            <span class="nav-link-text">Documents</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#NewContact">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="user-plus"></i></span></span>
                                                            <span class="nav-link-text">New Contact</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Contracts">
                                                            <span class="nav-icon-wrap"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:contract-outline">
                                                                    </iconify-icon>
                                                                </span></span>
                                                            <span class="nav-link-text">Contracts</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Tenancies">
                                                            <span class="nav-icon-wrap"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:tenancy-outline">
                                                                    </iconify-icon>
                                                                </span></span>
                                                            <span class="nav-link-text">Tenancies</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#ParkingTenancies">
                                                            <span class="nav-icon-wrap"><span class="feather-icon">
                                                                    <iconify-icon icon="mdi:car-brake-parking">
                                                                    </iconify-icon>
                                                                </span></span>
                                                            <span class="nav-link-text">Parking Tenancies</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Invoices">
                                                            <span class="nav-icon-wrap"><span class="feather-icon">
                                                                    <iconify-icon icon="hugeicons:invoice-01">
                                                                    </iconify-icon>
                                                                </span></span>
                                                            <span class="nav-link-text">Invoices</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#notes">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="edit-3"></i></span></span>
                                                            <span class="nav-link-text">Notes</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#ExtendedDetails">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="shuffle"></i></span></span>
                                                            <span class="nav-link-text">Extended Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Events">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="calendar"></i></span></span>
                                                            <span class="nav-link-text">Events</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Roles">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="user"></i></span></span>
                                                            <span class="nav-link-text">Roles</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#Notifications">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="bell"></i></span></span>
                                                            <span class="nav-link-text">Notifications Settings</span>
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#password">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="lock"></i></span></span>
                                                            <span class="nav-link-text">Password</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <button class="scroll-btn next" type="button">
                                                    <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                                                </button>
                                            </div>

                                            <div class="tab-content usertabsContent">

                                                <div class="tab-pane fade show active" id="Documents">

                                                    <div class="docFilterContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Documents </h2>
                                                            <div class="RightTabinr_container">
                                                                <button id="toggleButton" type="button"
                                                                    class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span
                                                                        class="icon"><span class="feather-icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-list">
                                                                                <line x1="8" y1="6" x2="21" y2="6">
                                                                                </line>
                                                                                <line x1="8" y1="12" x2="21" y2="12">
                                                                                </line>
                                                                                <line x1="8" y1="18" x2="21" y2="18">
                                                                                </line>
                                                                                <line x1="3" y1="6" x2="3.01" y2="6">
                                                                                </line>
                                                                                <line x1="3" y1="12" x2="3.01" y2="12">
                                                                                </line>
                                                                                <line x1="3" y1="18" x2="3.01" y2="18">
                                                                                </line>
                                                                            </svg></span></span>Filter</button>
                                                                <button
                                                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                    type="button" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#addDocument"
                                                                    aria-controls="offcanvasExample">
                                                                    <iconify-icon icon="lets-icons:add-round">
                                                                    </iconify-icon> Add Document
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="userFilters onerowfilter" id="filterDiv"
                                                            style="display: none;">
                                                            <div class="quick-access-form-wrap nopaddingleftright">

                                                                <div class="row gx-3">
                                                                    <div class="col-xxl-12">
                                                                        <div class="position-relative">

                                                                            <div class="col-lg-12">
                                                                                <div class="row gx-3">
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Document
                                                                                                Title</label>
                                                                                            <input class="form-control"
                                                                                                placeholder="Document Title"
                                                                                                value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Document
                                                                                                Type</label>
                                                                                            <select name="" id=""
                                                                                                class="form-control select2">
                                                                                                <option value="" disable
                                                                                                    readonly selected>
                                                                                                    Document Type
                                                                                                </option>
                                                                                                <option value="Invoice">
                                                                                                    Invoice</option>
                                                                                                <option value="Receipt">
                                                                                                    Receipt</option>
                                                                                                <option
                                                                                                    value="Statement">
                                                                                                    Statement
                                                                                                </option>

                                                                                            </select>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Select
                                                                                                Date Range</label>
                                                                                            <input class="form-control"
                                                                                                type="text"
                                                                                                name="daterange"
                                                                                                value="Pick a Date" />
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-12">
                                                                        <div class="filtertwoGroupsEnd">
                                                                            <div class="form-group">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="customCheckList6">
                                                                                    <label class="form-check-label"
                                                                                        for="customCheckList6">
                                                                                        Hide Generated
                                                                                        <span
                                                                                            class="done-strikethrough"></span>
                                                                                    </label>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button type="button"
                                                                                    class="btn btn-block btn-primary filtersubmit_button">Filter
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mainuserFilesds_tabpaneContainer">

                                                        <div class="contact-list-view mt-4 topborderstyle">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Title</th>
                                                                        <th>Format</th>
                                                                        <th>Type</th>
                                                                        <th>Date</th>
                                                                        <th>Download</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            Incoice
                                                                        </td>
                                                                        <td>
                                                                            PDF
                                                                        </td>
                                                                        <td>
                                                                            ID
                                                                        </td>
                                                                        <td>
                                                                            2024-05-07 09:39
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                data-bs-toggle="offcanvas"
                                                                                data-bs-target="#EditDocumentModal"
                                                                                aria-controls="offcanvasExample">
                                                                                <span class="icon"><span
                                                                                        class="feather-icon"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="feather feather-edit-2">
                                                                                            <path
                                                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                            </path>
                                                                                        </svg></span></span>
                                                                            </a>
                                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0"
                                                                                href="javascript:void(0);"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""
                                                                                data-bs-original-title="Download"><span
                                                                                    class="icon"><span
                                                                                        class="feather-icon">
                                                                                        <iconify-icon
                                                                                            icon="mage:file-download">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>
                                                                            <button
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover docDeleteButton"
                                                                                type="button"><span class="icon"><span
                                                                                        class="feather-icon"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="feather feather-trash">
                                                                                            <polyline
                                                                                                points="3 6 5 6 21 6">
                                                                                            </polyline>
                                                                                            <path
                                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                            </path>
                                                                                        </svg></span></span></button>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            New Document
                                                                        </td>
                                                                        <td>
                                                                            Doc
                                                                        </td>
                                                                        <td>
                                                                            Invoice
                                                                        </td>
                                                                        <td>
                                                                            2024-05-07 09:39
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                data-bs-toggle="offcanvas"
                                                                                data-bs-target="#EditDocumentModal"
                                                                                aria-controls="offcanvasExample">
                                                                                <span class="icon"><span
                                                                                        class="feather-icon"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="feather feather-edit-2">
                                                                                            <path
                                                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                            </path>
                                                                                        </svg></span></span>
                                                                            </a>
                                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0"
                                                                                href="javascript:void(0);"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""
                                                                                data-bs-original-title="Download"><span
                                                                                    class="icon"><span
                                                                                        class="feather-icon">
                                                                                        <iconify-icon
                                                                                            icon="mage:file-download">
                                                                                        </iconify-icon>
                                                                                    </span></span></a>

                                                                            <button
                                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover docDeleteButton"
                                                                                type="button"><span class="icon"><span
                                                                                        class="feather-icon"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="feather feather-trash">
                                                                                            <polyline
                                                                                                points="3 6 5 6 21 6">
                                                                                            </polyline>
                                                                                            <path
                                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                            </path>
                                                                                        </svg></span></span></button>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="tab-pane fade " id="Contracts">

                                                    <div
                                                        class="fullwidthDesktopTabs MobileScrollShow innerUserContract_tabs">

                                                        <div class="usercontracttab_contrainer">
                                                            <ul
                                                                class="nav nav-tabs nav-line nav-icon autoloadTabs fullwidthCustom_tabsUL nav-light">

                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                                        href="#allinner_contract">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="nav-link-text">All
                                                                                Contracts</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#Addint_note_contaract">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="nav-link-text">Add Note</span>

                                                                        </div>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#ActivityLogs_usercontract">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="nav-link-text">Activity
                                                                                Logs</span>

                                                                        </div>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                            <div class="addContractNote_URL">
                                                                <a href="contract-statuses.php">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:contract-edit-sharp">
                                                                    </iconify-icon>View All Contracts
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="nicescroll-bar">

                                                        <!-- add new content here start -->
                                                        <div class="post-list propertyTabContent">

                                                            <div class="tab-content tabContent_hiddenStyle">
                                                                <div class="tab-pane fade show active"
                                                                    id="allinner_contract">
                                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                                        <div class="docfilterbutton">
                                                                            <h2 class="tabinnerTitle">All Contracts</h2>
                                                                            <div class="RightTabinr_container">

                                                                                <button
                                                                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                                    type="button"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    data-bs-target="#AddContractModal"
                                                                                    aria-controls="offcanvasExample">
                                                                                    <iconify-icon
                                                                                        icon="lets-icons:add-round">
                                                                                    </iconify-icon> Add Contract
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="contact-list-view mt-4 topborderstyle">

                                                                            <table
                                                                                class="table common-datatable nowrap w-100 ">
                                                                                <thead>
                                                                                    <tr>

                                                                                        <th>Property </th>
                                                                                        <th>Start</th>
                                                                                        <th>End</th>
                                                                                        <th>Status</th>
                                                                                        <th>Created</th>
                                                                                        <th>Updated</th>
                                                                                        <th>Changed By</th>
                                                                                        <th>Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div
                                                                                                class="LongMesage_container">
                                                                                                <input
                                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                                                <button
                                                                                                    class="view-btn tablemessageview_btn"
                                                                                                    type="button"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-placement="top"
                                                                                                    aria-label="Click to view"
                                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                                    <i
                                                                                                        class="bi bi-eye"></i>
                                                                                                    Read More
                                                                                                </button>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            09/04/2024 17:19
                                                                                        </td>
                                                                                        <td>28/09/2023 19:47</td>
                                                                                        <td>
                                                                                            <span
                                                                                                class="badge bg-warning"
                                                                                                id="pendingtenancy_action"
                                                                                                style="cursor: pointer;">Pending
                                                                                                Tenancy</span>
                                                                                        </td>

                                                                                        <td></td>
                                                                                        <td>18/05/2020 23:25</td>
                                                                                        <td>Unknown @ 2020-10-04 17:55
                                                                                        </td>
                                                                                        <td>
                                                                                            <div
                                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                                <div class="d-flex">
                                                                                                    <button
                                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                        type="button"
                                                                                                        data-bs-toggle="offcanvas"
                                                                                                        data-bs-target="#EditContractModal"
                                                                                                        aria-controls="offcanvasExample"><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="fluent:edit-16-regular">
                                                                                                                </iconify-icon>
                                                                                                            </span></span></button>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div
                                                                                                class="LongMesage_container">
                                                                                                <input
                                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                                    value="Living Room 205, Flat 5 (Floor 2, No5), Garden View@Maple Heights">
                                                                                                <button
                                                                                                    class="view-btn tablemessageview_btn"
                                                                                                    type="button"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-placement="top"
                                                                                                    aria-label="Click to view"
                                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                                    <i
                                                                                                        class="bi bi-eye"></i>
                                                                                                    Read More
                                                                                                </button>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            09/04/2024 17:19
                                                                                        </td>
                                                                                        <td>28/09/2023 19:47</td>
                                                                                        <td><span
                                                                                                class="badge bg-success">Completed</span>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>19/05/2020 23:25</td>
                                                                                        <td>Unknown @ 2020-10-04 17:55
                                                                                        </td>
                                                                                        <td>
                                                                                            <div
                                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                                <div class="d-flex">
                                                                                                    <button
                                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                        type="button"
                                                                                                        data-bs-toggle="offcanvas"
                                                                                                        data-bs-target="#EditContractModal"
                                                                                                        aria-controls="offcanvasExample"><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="fluent:edit-16-regular">
                                                                                                                </iconify-icon>
                                                                                                            </span></span></button>

                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div
                                                                                                class="LongMesage_container">
                                                                                                <input
                                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                                    value="Kitchen 102, Flat 2 (Floor 1, No2), City View@Riverdale Apartments">
                                                                                                <button
                                                                                                    class="view-btn tablemessageview_btn"
                                                                                                    type="button"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-placement="top"
                                                                                                    aria-label="Click to view"
                                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                                    <i
                                                                                                        class="bi bi-eye"></i>
                                                                                                    Read More
                                                                                                </button>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            09/04/2024 17:19
                                                                                        </td>
                                                                                        <td>28/09/2023 19:47</td>
                                                                                        <td><span
                                                                                                class="badge bg-success">Completed</span>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>16/05/2020 23:25</td>
                                                                                        <td>Unknown @ 2020-10-04 17:55
                                                                                        </td>
                                                                                        <td>
                                                                                            <div
                                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                                <div class="d-flex">
                                                                                                    <button
                                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                                        type="button"
                                                                                                        data-bs-toggle="offcanvas"
                                                                                                        data-bs-target="#EditContractModal"
                                                                                                        aria-controls="offcanvasExample"><span
                                                                                                            class="icon"><span
                                                                                                                class="feather-icon">
                                                                                                                <iconify-icon
                                                                                                                    icon="fluent:edit-16-regular">
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
                                                                <div class="tab-pane fade" id="Addint_note_contaract">
                                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                                        <div class="docfilterbutton">
                                                                            <h2 class="tabinnerTitle">Add Note</h2>

                                                                        </div>

                                                                        <div class="AddNoteEnuSection" id="AddNote1">
    <div class="form-group">
        <label class="form-label">Note header</label>
        <input class="form-control note-title" type="text" placeholder="Add Title">
    </div>

    <div class="form-group">
        <label class="form-label">Add Comment</label>
        <textarea class="form-control note-comment" rows="5"></textarea>
    </div>
    
    <div class="NoteAction_container">
        <div class="sendEnquiryNote_container">
            <div class="addto_todolist">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input customCheckList-todo">
                    <label class="form-check-label">Add to ToDo List <span class="done-strikethrough"></span></label>
                </div>
            </div>
        </div>
        <div class="sendEnquiryNote_container setAlert_container">
            <div class="addto_todolist">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input setAlertInput">
                    <label class="form-check-label">Set As Alert <span class="done-strikethrough"></span></label>
                </div>
            </div>
        </div>
        
    </div>

    <div class="Showing_departmentand_users" style="display: none;">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Select Department</label>
                    <select class="form-control select2 select-department">
                        <option disabled selected value="">Please Select...</option>
                        <option value="Account Department">Account Department</option>
                        <option value="HR Department">HR Department</option>
                        <option value="Contract Department">Contract Department</option>
                        <option value="Lettings Department">Lettings Department</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Select Users</label>
                    <select class="form-control select2 select-user">
                        <option disabled selected value="">Please Select...</option>
                        <option value="John Doe">John Doe</option>
                        <option value="Jane Smith">Jane Smith</option>
                        <option value="Alice Johnson">Alice Johnson</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-label">Select Due Date</label>
    <input class="form-control customdataPicker" type="text" name="" value="" placeholder="Due Date" />
    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
    </iconify-icon>
</div>
                </div>
        </div>
    </div>

</div>

                                                                    </div>
                                                                    <div class="savechangesformContainer">
                                                                    <button type="button" class="sendBtn_common_main addenun_noteBtn send-note">Send Note</button>
                                                                    </div>

                                                                </div>

                                                                <div class="tab-pane fade"
                                                                    id="ActivityLogs_usercontract">
                                                                    <div class="docfilterbutton">
                                                                        <h2 class="tabinnerTitle">History of Activity
                                                                        </h2>
                                                                    </div>
                                                                    <div class="collapse-simple">
                                                                        <div class="card">

                                                                            <div id=""
                                                                                class="main_contractActiviti_container">
                                                                                <div class="card-body">
                                                                                    <ul
                                                                                        class="activity-list list-group list-group-flush">
                                                                                        <li class="list-group-item">
                                                                                            <div class="media">
                                                                                                <div class="media-head">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <p><span
                                                                                                            class="text-dark">Hencework</span>
                                                                                                        Changed Status
                                                                                                        to - <span
                                                                                                            class="contractStatus_data_activity"><u>Completed</u></span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Oct 15, 2021,
                                                                                                        12:34 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <div class="media">
                                                                                                <div class="media-head">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <p><span
                                                                                                            class="text-dark">Hencework</span>
                                                                                                        Changed Status
                                                                                                        to - <span
                                                                                                            class="contractStatus_data_activity"><u>Completed</u></span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Sep 16, 2021,
                                                                                                        4:54 PM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <div class="media">
                                                                                                <div class="media-head">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <p><span
                                                                                                            class="text-dark">Hencework</span>
                                                                                                        Changed Status
                                                                                                        to - <span
                                                                                                            class="contractStatus_data_activity"><u>Completed</u></span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Sep 10, 2021,
                                                                                                        10:13 AM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <div class="media">
                                                                                                <div class="media-head">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <p><span
                                                                                                            class="text-dark">Hencework</span>
                                                                                                        Changed Status
                                                                                                        to - <span
                                                                                                            class="contractStatus_data_activity"><u>Completed</u></span>
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="last-activity-time">
                                                                                                        Sep 10, 2021,
                                                                                                        10:13 AM</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade " id="Tenancies">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">All Tenancies</h2>
                                                            <div class="RightTabinr_container">

                                                                <button
                                                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                    type="button" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#AddTenancyModal"
                                                                    aria-controls="offcanvasExample">
                                                                    <iconify-icon icon="lets-icons:add-round">
                                                                    </iconify-icon> Add New Tenancy
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="contact-list-view mt-4 topborderstyle">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Property </th>
                                                                        <th>Type</th>
                                                                        <th>Start Date</th>
                                                                        <th>End Date</th>
                                                                        <th>Outstanding Payments</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="LongMesage_container">
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            Student
                                                                        </td>

                                                                        <td>
                                                                            09/04/2024 17:19
                                                                        </td>
                                                                        <td>28/09/2023 19:47</td>
                                                                        <td>0</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Tenancy Details"
                                                                                        href="tenancy.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
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
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Living Room 205, Flat 5 (Floor 2, No5), Garden View@Maple Heights">
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Student
                                                                        </td>
                                                                        <td>
                                                                            09/04/2024 17:19
                                                                        </td>
                                                                        <td>28/09/2023 19:47</td>
                                                                        <td>0</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Tenancy Details"
                                                                                        href="tenancy.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
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
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Kitchen 102, Flat 2 (Floor 1, No2), City View@Riverdale Apartments">
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    aria-label="Click to view"
                                                                                    data-bs-original-title="Click to view Full Message">
                                                                                    <i class="bi bi-eye"></i> Read More
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Student
                                                                        </td>
                                                                        <td>
                                                                            09/04/2024 17:19
                                                                        </td>
                                                                        <td>28/09/2023 19:47</td>
                                                                        <td>0</td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Tenancy Details"
                                                                                        href="tenancy.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
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
                                                <div class="tab-pane fade " id="ParkingTenancies">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">All Parking Tenancies</h2>
                                                            <div class="RightTabinr_container">

                                                                <button
                                                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                    type="button" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#AddParkingTenancyModal"
                                                                    aria-controls="offcanvasExample">
                                                                    <iconify-icon icon="lets-icons:add-round">
                                                                    </iconify-icon> Add New Parking Tenancy
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="contact-list-view mt-4 topborderstyle">

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
                                                                                <input
                                                                                    class="refuge-collection-input tableLongMessage_Input"
                                                                                    value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                                                <button
                                                                                    class="view-btn tablemessageview_btn"
                                                                                    type="button"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
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
                                                                                    <input
                                                                                        class="refuge-collection-input tableLongMessage_Input"
                                                                                        value="Bay 34, Reg number: YA14ZPM"></input>
                                                                                    <button
                                                                                        class="view-btn tablemessageview_btn"
                                                                                        type="button"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
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
                                                                        <td><span
                                                                                class="badge badge-soft-success  my-1  me-2">Payment
                                                                                added to rent</span>
                                                                        </td>

                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Tenancy Details"
                                                                                        href="parking-tenency-details.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
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
                                                <div class="tab-pane fade " id="Invoices">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">All Invoices</h2>
                                                            <div class="RightTabinr_container">

                                                                <div class="outstanding_balance">
                                                                    <div class="RegisteredItems">
                                                                        <h2>Outstanding Balance:</h2>
                                                                        <div class="registeredDatetime"><span
                                                                                class="badge badge-soft-success my-1  me-2">
                                                                                £0.00</span></div>
                                                                    </div>
                                                                </div>
                                                                <button
                                                                    class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                    type="button" data-bs-toggle="offcanvas"
                                                                    data-bs-target="#CreateInvoiceModal"
                                                                    aria-controls="offcanvasExample">
                                                                    <iconify-icon icon="lets-icons:add-round">
                                                                    </iconify-icon> Add New Invoice
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="contact-list-view mt-4 topborderstyle">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Invoice No</th>
                                                                        <th>Related To</th>
                                                                        <th>Date Raised</th>
                                                                        <th>Due Date</th>
                                                                        <th>Total</th>
                                                                        <th>Status</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>1308</td>
                                                                        <td><a class="tablelink"
                                                                                href="view-ticket.php">Issue</a>
                                                                        </td>
                                                                        <td>28/08/2018</td>
                                                                        <td>01/09/2018</td>
                                                                        <td>£38.00</td>
                                                                        <td>Void</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Invoice"
                                                                                        href="invoice.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                        </span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>1073</td>
                                                                        <td>
                                                                            <a href="view-ticket.php">Issue</a>
                                                                        </td>
                                                                        <td>15/06/2018</td>
                                                                        <td>15/06/2018</td>
                                                                        <td>£60.00</td>
                                                                        <td>Void</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-bs-original-title="View Invoice"
                                                                                        href="invoice.php">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="majesticons:eye-line">
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

                                                <div class="tab-pane fade " id="notes">

                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="addContractNote_URL">
                                                                <a href="Enquiry-details.php#AddNote">
                                                                    <iconify-icon icon="hugeicons:note-01">
                                                                    </iconify-icon> Add Contract Note
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="mainuserFilesds_tabpaneContainer">
                                                                <div class="docfilterbutton">
                                                                    <h2 class="tabinnerTitle">Add New Note</h2>

                                                                </div>

                                                                <div class="AddNoteEnuSection" id="AddNote1">
    <div class="form-group">
        <label class="form-label">Note header</label>
        <input class="form-control note-title" type="text" placeholder="Add Title">
    </div>

    <div class="form-group">
        <label class="form-label">Add Comment</label>
        <textarea class="form-control note-comment" rows="5"></textarea>
    </div>
    
    <div class="NoteAction_container">
        <div class="sendEnquiryNote_container">
            <div class="addto_todolist">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input customCheckList-todo">
                    <label class="form-check-label">Add to ToDo List <span class="done-strikethrough"></span></label>
                </div>
            </div>
        </div>
        <div class="sendEnquiryNote_container setAlert_container">
            <div class="addto_todolist">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input setAlertInput">
                    <label class="form-check-label">Set As Alert <span class="done-strikethrough"></span></label>
                </div>
            </div>
        </div>
        
    </div>

    <div class="Showing_departmentand_users" style="display: none;">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Select Department</label>
                    <select class="form-control select2 select-department">
                        <option disabled selected value="">Please Select...</option>
                        <option value="Account Department">Account Department</option>
                        <option value="HR Department">HR Department</option>
                        <option value="Contract Department">Contract Department</option>
                        <option value="Lettings Department">Lettings Department</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Select Users</label>
                    <select class="form-control select2 select-user">
                        <option disabled selected value="">Please Select...</option>
                        <option value="John Doe">John Doe</option>
                        <option value="Jane Smith">Jane Smith</option>
                        <option value="Alice Johnson">Alice Johnson</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-label">Select Due Date</label>
    <input class="form-control customdataPicker" type="text" name="" value="" placeholder="Due Date" />
    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
    </iconify-icon>
</div>
                </div>
        </div>
    </div>

</div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="savechangesformContainer">
                                                    <button type="button" class="sendBtn_common_main addenun_noteBtn send-note">Send Note</button>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade " id="ExtendedDetails">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Extended Details</h2>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-header fieldsDevider_card">
                                                                    <div class="fieldsSector_title">Nationality Info :
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Nationality</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Nationality">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Passport" class="form-label">Passport
                                                                        No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Passport">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Insurance" class="form-label">National
                                                                        Insurance No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Insurance">
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-header fieldsDevider_card">
                                                                    <div class="fieldsSector_title">Educational Info :
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="SEducationalurname"
                                                                        class="form-label">Educational Institute</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Educational">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Course"
                                                                        class="form-label">Course</label>
                                                                    <input type="text" class="form-control" id="Course">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Studentid" class="form-label"> Student
                                                                        ID</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Studentid">
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-header fieldsDevider_card">
                                                                    <div class="fieldsSector_title">Bank Info :</div>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="bankacount" class="form-label"> Bank
                                                                        Account
                                                                        No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="bankacount">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="bankshortcode" class="form-label"> Bank
                                                                        Sort
                                                                        Code</label>
                                                                    <input type="text" class="form-control"
                                                                        id="bankshortcode">
                                                                </div>

                                                            </div>

                                                            <div class="savechangesformContainer">
                                                                <button Type="submit" class="buttonInfOUpdate">
                                                                    <iconify-icon icon="fluent:save-32-regular">
                                                                    </iconify-icon>
                                                                    Save Changes
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade " id="Events">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Events</h2>

                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#addeventmodal"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add Event
                                                            </button>
                                                        </div>

                                                        <div class="contact-list-view mt-4 topborderstyle">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Type</th>
                                                                        <th>Message</th>
                                                                        <th>Status</th>
                                                                        <th>Created</th>
                                                                        <th>Expires</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <!-- Type -->
                                                                            Viewing
                                                                        </td>
                                                                        <td>
                                                                            <!-- Message -->
                                                                            Schedule your viewing appointment today!
                                                                        </td>
                                                                        <td>
                                                                            <!-- Status -->
                                                                            <span
                                                                                class="badge badge-soft-success  my-1  me-2">Active</span>
                                                                        </td>
                                                                        <td>
                                                                            <!-- Created -->
                                                                            13 Jan, 2020
                                                                        </td>
                                                                        <td>
                                                                            <!-- Expires -->
                                                                            13 Jan, 2022
                                                                        </td>
                                                                        <td>
                                                                            <!-- Actions -->
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editeventmodal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="edit-2"></i></span></span>
                                                                                    </a>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash"></i></span></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!-- Type -->
                                                                            Happy Birthday
                                                                        </td>
                                                                        <td>
                                                                            <!-- Message -->
                                                                            Wishing you a fantastic birthday
                                                                            celebration!
                                                                        </td>
                                                                        <td>
                                                                            <!-- Status -->
                                                                            <span
                                                                                class="badge badge-soft-danger  my-1  me-2">Inactive</span>
                                                                        </td>
                                                                        <td>
                                                                            <!-- Created -->
                                                                            20 Mar, 2022
                                                                        </td>
                                                                        <td>
                                                                            <!-- Expires -->
                                                                            20 Mar, 2024
                                                                        </td>
                                                                        <td>
                                                                            <!-- Actions -->
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#Editeventmodal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="edit-2"></i></span></span>
                                                                                    </a>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                                                        <span class="icon"><span
                                                                                                class="feather-icon"><i
                                                                                                    data-feather="trash"></i></span></span>
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

                                                <div class="tab-pane fade " id="Roles">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Manage Role</h2>

                                                        </div>

                                                        <ul id="todo_list" class="advance-list customtRoleListStyle">
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Tenant
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">
                                                                                Bookkeeper </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Maintenance
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Landlord
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Deactivated
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Merchant
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                            <li class="advance-list-item single-task-list active-todo">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="customCheckTodo1">
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Admin
                                                                            </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                        </ul>

                                                        <div class="savechangesformContainer">
                                                            <button type="submit" class="buttonInfOUpdate">
                                                                <iconify-icon icon="fluent:save-32-regular">
                                                                </iconify-icon>
                                                                Save Changes
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade " id="Notifications">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Notification Settings</h2>

                                                        </div>

                                                        <div class="notificationEditContainer">
                                                            <ul id="todo_list " class="advance-list notificationList">
                                                                <li
                                                                    class="advance-list-item single-task-list active-todo">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">

                                                                            <div>

                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Inspection
                                                                                </span>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">

                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="pushToggle" checked>
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="pushToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>

                                                                                    <div class="switch">

                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="emailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="emailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Viewing
                                                                                    (Current Tenant)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="viewingToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="viewingToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="viewingEmailToggle"
                                                                                                checked>
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="viewingEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Maintenance</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="maintenanceToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="maintenanceToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="maintenanceEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="maintenanceEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Payment
                                                                                    Due</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentDueToggle"
                                                                                                checked>
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentDueToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentDueEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentDueEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Payment
                                                                                    Overdue</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentOverdueToggle"
                                                                                                checked>
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentOverdueToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentOverdueEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentOverdueEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Issue
                                                                                    Reported</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueReportedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueReportedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueReportedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueReportedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Custom</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="customToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="customToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="customEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="customEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Payment
                                                                                    Upcoming</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentUpcomingToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentUpcomingToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="paymentUpcomingEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="paymentUpcomingEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Issue
                                                                                    Updated</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueUpdatedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueUpdatedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueUpdatedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueUpdatedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Issue
                                                                                    Assigned</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueAssignedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueAssignedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="issueAssignedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="issueAssignedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Tenancy
                                                                                    Ending</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="tenancyEndingToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="tenancyEndingToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="tenancyEndingEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="tenancyEndingEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Income
                                                                                    Summary</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="incomeSummaryToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="incomeSummaryToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="incomeSummaryEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="incomeSummaryEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Raised</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceRaisedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceRaisedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceRaisedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceRaisedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Inspection
                                                                                    Checked</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="inspectionCheckedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="inspectionCheckedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="inspectionCheckedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="inspectionCheckedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Inspection
                                                                                    Updated</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="inspectionUpdatedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="inspectionUpdatedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="inspectionUpdatedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="inspectionUpdatedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Voided</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceVoidedToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceVoidedToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceVoidedEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceVoidedEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Receipt</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReceiptToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReceiptToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReceiptEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReceiptEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Raised (Graystones)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceRaisedGraystonesToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceRaisedGraystonesToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceRaisedGraystonesEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceRaisedGraystonesEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Voided (Graystones)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceVoidedGraystonesToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceVoidedGraystonesToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceVoidedGraystonesEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceVoidedGraystonesEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Receipt (Graystones)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReceiptGraystonesToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReceiptGraystonesToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReceiptGraystonesEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReceiptGraystonesEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Happy
                                                                                    Birthday</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="happyBirthdayToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="happyBirthdayToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="happyBirthdayEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="happyBirthdayEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Maintenance
                                                                                    Cancelled</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="maintenanceCancelledToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="maintenanceCancelledToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="maintenanceCancelledEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="maintenanceCancelledEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Reminder</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReminderToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReminderToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReminderEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReminderEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">Invoice
                                                                                    Reminder (Graystones)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReminderGraystonesToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReminderGraystonesToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="invoiceReminderGraystonesEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="invoiceReminderGraystonesEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <span
                                                                                    class="todo-text text-dark text-truncate">None</span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex flex-shrink-0 align-items-center ms-3">
                                                                            <span
                                                                                class="todo-time d-lg-inline-block d-none text-primary me-3">
                                                                                <div class="switchesContainer">
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label for="noneToggle">Push
                                                                                            Notifications</label>
                                                                                    </div>
                                                                                    <div class="switch">
                                                                                        <label class="switch">
                                                                                            <input type="checkbox"
                                                                                                id="noneEmailToggle">
                                                                                            <span class="slider"></span>
                                                                                        </label>
                                                                                        <label
                                                                                            for="noneEmailToggle">Email</label>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="savechangesformContainer">
                                                            <button type="submit" class="buttonInfOUpdate">
                                                                <iconify-icon icon="fluent:save-32-regular">
                                                                </iconify-icon>
                                                                Save Changes
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade " id="NewContact">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Add New Contact</h2>
                                                            <button
                                                                class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                type="button" data-bs-toggle="offcanvas"
                                                                data-bs-target="#AddNewContact"
                                                                aria-controls="offcanvasExample">
                                                                <iconify-icon icon="lets-icons:add-round">
                                                                </iconify-icon> Add New Contact
                                                            </button>
                                                        </div>

                                                        <div class="newContactCardContainer">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <div class="headersmlTitle">New Contact</div> <span
                                                                        class="badge  badge-sm badge-outline badge-success badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
                                                                                class="badge-dot ri-checkbox-blank-circle-fill"></i>1</span></span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Title</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Title" value="Mr.">
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="firstname"
                                                                                    class="form-label">First
                                                                                    Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="firstname" value="Mendaline ">
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Middle"
                                                                                    class="form-label">Middle
                                                                                    Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Middle" value="">
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Surname"
                                                                                    class="form-label">Surname</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Surname" value="Shane">
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Email"
                                                                                    class="form-label">Email</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="Email"
                                                                                    value="mendaline@jampack.com">
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Contact" class="form-label">
                                                                                    Contact Number</label>
                                                                                <input type="phone" class="form-control"
                                                                                    id="Contact" value="+145 52 5463">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Contact" class="form-label">
                                                                                    Alt Contact Number</label>
                                                                                <input type="phone" class="form-control"
                                                                                    id="Contact" value="+145 52 5463">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Date of
                                                                                    Birth</label>
                                                                                <input
                                                                                    class="form-control customdataPicker flatpickr-input"
                                                                                    type="text" name="" placeholder=""
                                                                                    readonly="readonly"
                                                                                    value="May , 22 1992">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="addressline1"
                                                                                    class="form-label"> Address Line
                                                                                    1</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="addressline1"
                                                                                    value="456 Ocean View, Coral City, Aquanis">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="addressline2"
                                                                                    class="form-label"> Address Line
                                                                                    2</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="addressline2"
                                                                                    value="456 Ocean View, Coral City, Aquanis">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Town/City"
                                                                                    class="form-label">
                                                                                    Town/City</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Town/City" value="Breezyville">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="County" class="form-label">
                                                                                    County</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="County" value="Zephyria">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="Postcode"
                                                                                    class="form-label"> Postcode</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Postcode" value="ZP12345">
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" id="gridCheck">
                                                                                    <label class="form-check-label"
                                                                                        for="gridCheck">
                                                                                        Has Special Needs (See notes for
                                                                                        details)
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Appointment
                                                                                    Colour:</label>
                                                                                <div class="input-group color-picker">
                                                                                    <div class="input-group-text colorpicker-input-addon"
                                                                                        style="background-color: rgb(0, 155, 132);">
                                                                                        <input type="color"></div>
                                                                                    <input type="text"
                                                                                        class="form-control colorpicker-value"
                                                                                        value="#009B84">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="savechangesformContainer">
                                                        <button Type="submit" class="buttonInfOUpdate">
                                                            <iconify-icon icon="fluent:save-32-regular"></iconify-icon>
                                                            Save Changes
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade " id="password">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Manage Password</h2>
                                                            <div class="managepassword_action_right">
                                                            
                                                        <div class="lastpasswordChangeDate">
                                                                <iconify-icon icon="iconamoon:lock-light">
                                                                </iconify-icon> Last Changed: <div
                                                                    class="dateShowlastchanged"><span
                                                                        class="badge badge-sm badge-soft-success ms-1">
                                                                        Mar , 18 2024
                                                                    </span></div>
                                                            </div>
                                                            <button Type="button" class="buttonInfOUpdate commonUpdateButton" id="requesttemprary_Pass">
                                                            <iconify-icon icon="carbon:intent-request-scale-in"></iconify-icon>
                                                            Request Temporary Password
                                                        </button>
                                                        <button Type="button" class="buttonInfOUpdate commonUpdateButton " id="requestchange_Pass">
                                                            <iconify-icon icon="carbon:intent-request-scale-in"></iconify-icon>
                                                            Request Change Password
                                                        </button>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Old Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="Nationality" value="********">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">

                                                                <div
                                                                    class="form-group password_inputs password-container">
                                                                    <label for="Passport" class="form-label">New
                                                                        Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="password-input"
                                                                        placeholder="Enter your password">
                                                                    <span id="toggle-password"
                                                                        class="toggle-password"><i
                                                                            class="far fa-eye"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group password_inputs">
                                                                    <label for="Insurance" class="form-label">Confirm
                                                                        Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="password-input2"
                                                                        placeholder="Enter your password">
                                                                    <span id="toggle-password2"
                                                                        class="toggle-password"><i
                                                                            class="far fa-eye"></i></span>
                                                                </div>
                                                            </div>

                                                        </div> -->
                                                    </div>
                                                    <!-- <div class="savechangesformContainer">
                                                        <button Type="submit" class="buttonInfOUpdate">
                                                            <iconify-icon icon="fluent:save-32-regular"></iconify-icon>
                                                            Change Password
                                                        </button>
                                                    </div> -->

                                                    <div class="MutiUserAuthntication_container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Use Multi-Factor Authentication
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="QrCodeUser_description">
                                                                    <p>Please download the Google Authenticator app <br>
                                                                        Then scan or tap the QR Code below to access
                                                                        your
                                                                        MFA code</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="QrContainer_verify">
                                                                    <div style="text-align:center">
                                                                        <a id="mfaLink"
                                                                            href="otpauth://totp/Graysons%20Properties:avisingh?secret=G4ZGMYLGMQ2DAM3FMZSDSYLBGM4TCZDCMVRWMOLDMZQWMMBXGU3DQY3GGVSGKMBS&amp;issuer=Graysons%20Properties"
                                                                            style="display: inline-block;">
                                                                            <div style="margin:auto;">
                                                                                <div
                                                                                    style="padding:10px; background-color:white; margin:auto;">
                                                                                    <div id="mfaQR"
                                                                                        title="otpauth://totp/Graysons%20Properties:avisingh?secret=G4ZGMYLGMQ2DAM3FMZSDSYLBGM4TCZDCMVRWMOLDMZQWMMBXGU3DQY3GGVSGKMBS&amp;issuer=Graysons%20Properties">
                                                                                        <canvas width="256" height="256"
                                                                                            style="display: none;"></canvas><img
                                                                                            alt="Scan me!"
                                                                                            style="display: block;"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAgAElEQVR4Xu3d7XbjOA4E0J33f+jdaJweq22Jl2VQdnoHc878aZD4KBSKlOI4f/3nP//579f/b/nvv/8dh/rrr79+y+Nxvewq4nH/aL1iK9bq/YqX2vdYVPui2Opban+Mp/wf1494IF/ikPpe9S+sU/s2cS0AB6ipkQJ69X7FS+0tAMeIVQdUfa/6T/us9S0AJwipkQJ29X7FS+0tAC0AGwK/CYDUqUKybW/qX1fDaj7p/v16DXi11vSauxIr+dI1WLmv3p9iPeq7aq9w5u+Bu/gxV/k9xm8BEGIv3hBSUmoo5E/ESsqUL+XaAnCOdoqt+p709UiAWgBSBL/X9w1gHjhhJU/av3JINKDKVXb5l13+Ze8bgBCatK8mpU5VkXwlceRLufYN4P/kBrC60SLxI2yKn/ob+U99aUgmdWR6meJVsJJv9aWKXSoYq+ONmpAKvbBcbReBlP/wEUCk+nTjUiK0ABzTRaRsAbgjIKzebW8BEAID+75ZqZio0YW0DrcqnsR6VJ98twC0AEzxWdeN6pDpxjGV5G5RC8ANjBaAc+aknBaWq+3ivPL/UY8AKTgqXoJREQDF1oms3HTqKr78j2pXH5TbTxN65bu3r85dfVBuGmDxQPtbAL4RTBsv4FsAhND5tTodmvlIxzeeFoCTIaiSePVJkuYjIvUN4IaQTgmJY9pnnXrqWzrwSTzVmvg6ylP+hWU6A+pt3wD6BtACsJtUDWgLwEB+pTY/zb4vRcpazV2nlvynp6LqUT5X2lVraq/kmuKUCoQEI621mu/j/o/eANLrThWs5EdhGrg0d5FUtSkfEU3x32lXram9knt1oNLYKW+EheJrfwvAN4IigoCUvdqoFoA7AtVTOLn5pbirzy0AO4RWg6Eh7BuA6Pkee9on8aSStYT/Xy0AFWC3vVc27si/mjVqtk4V1VIlUro/7Y3qS05FDXA1N2Gtx50kv2TtFlc4prmntaTYyv+P/nVgFauhSZpbbaxyqYiTcJixq74WgBsC6qNwbAEIrvgzxB2tSZvVN4A5xFfiOhNRQl0duqTvae06YZX76v3CO/opgJzJXlXD1H/llFWjVIuIU8lNOMzYVV/fAPoGMMOj0ppU6dOhq/iv7N1A+ZP3/8m5V7H/6bWXBm5i80e/FfidAy6i/HQiXJnflb6F+6ftP732iRkuLWkB+IbvpxPhyvyu9P3pAVf8n157abonNrcAtAD80Y8vGnDZ//UC8AXA2/4ykN546kXZhKD9tkQv5kala69yWU0sxVO+SZvf/Wim2oSleDOqp4pbFSvVfrX9rxaAY4hFDDVGpE3tiqd8WwDuCO6xqOLWAiBmDuxV8BW64l97FTsdcBFJ8ZRvC0ALwBGH+gZwMlkaKA1kC8DxwG3/mmIrLPsRQGw8tw8FQI3SqaL9Srva+OSdQ1qL1it2ul9YVbEe+U9zTXNRn2UXNhKI0f60ljSW/Kv2tDdPvBy9A0iTE+mrjboyHwG5+oqueClWwib1t1+f5prmkpI89Z8O5X791bHkP8Um7XPfAL4RE8lbAOapJVJrIIV16l/x+gbw4nNwOjTzFLqtlPqljR0RJ61F63UbSvcLu+pQ9CPAMQJVXNVn+dcMyD95s83Zr0UKlg4cgz/8rXStT+2qZ/TjoBTY1Y2s+hNWaX3yVzlFkz5tcXRDUK77/cIhjZX2Lcn16FDUfh1Epa8EE3hKTmBpv+wJsdJGC1iJpeIJG9WWYqP1FXu1FtWa8rAF4N7NFoBvLDSQGoCrSZ4KivJNh0b++gZwQyDlgXCt8lIHVQtAC4A4WLanQyHSy66E+wbw4g0gvYqpUaldp6DULtmv3NJYiq0hWb1/70991UCltwlhKywUT/739WitclFfhJ3saX7q5ZP9K4Hpl4Cx84eXfNX9Kdhq3ohIAr4F4I6ABlJYiRfVvlf6LA6luWngq1gJyxaAHcIVYqhRarQadfX+vgHcEJDQtwAMBiYFT6SXPVVbNa8F4IZoinvaB4llGl83DvGyHwHuCEQvAQW8Ti0RoUosxR8RQ6SpiInyOrKn+WiIRnbtVV+Ezer9K/2ltSu2OK54qT3l1mOvWgC+EUwHLiVCtVEpMZJ65Fu1tgCcdzfpw8xtrHoItwCcPNKkjdJQpAP/7pNj9KMwDXQqGMJK8YRlJZ/K3qOBfXcfhY3y6RtA3wDidwCrh6YF4D6mwvajNwApudQmVSuBIX/JfgErkmq/sNF+xV+JRbXPCe5HeWt/1b6PmfpSH1Ps1Df1Xfkrn+gGIGcpOCo+LU75jcCsDqD2CxvtFxGuxDLN7eq+yb/sLQB3BFoAvrFISS6x0UDqnYMEQ/6VXyIoKTbJAPYNYNxJ9SnF+mn9V/jpTwKKVD+JtFsuCTgpyVMshE01vgQhwSKtTWImEite6j+pVWurfdF+9U3YKX9iuxcAJbO6GCWf2jVkAkP1j+xpo5SraleulV6lA6dcqvYUi6T2tNbE91a3eCFOpvtTrKO/DJQWXyW5Gq98BJ72J2BWY6VEVG6V2lbnolxlFw80RIlwK1aKq3ih3NP9wvJpJvsGkEJ2vF6NEnFWD53irRyKNQiee9FQaohW1priKl4o93R/2ou+AaSInaxXo0ScFoAWgA2BVOyq9P3tW4FF4k+r1TvBWR1LAqBGru5Nko/EKX3U03phod4kdtWW2tPchYVqqc5kC8BJx1Lgq43X/haAO0LqTWJPB1y+1UcJb5pPC4AQf9FebbQak6bVAtACsCEgHqS87RtA3wCoRTqV0mus1ishkTyxq7bUnuYuLFSLDhoJxqV/GSgtTuDJrmJHYL77aiZsVKvsIs7eXiV5Euso77Rvwk69HGGnXNKBEzbVPpbz+Urwn08CClgFUzEimvbLrua1ABxfo9WXCq5bRA1k6l88VbwWgDsCfQP4xkKkWT0kIrHETnadPH0DOEZQYqRDsMqT1H+6/okXfQO4QdgCcHw72P5VQ5GITT8CbB+9mf9P2F4qADql0qFR2fKn/cpXYO3tUvI0l3R9dehU696/SJb2JcVO64WFak2wV6wqFkkurxxM8h/dADRQAkNgrmzc6pNFpBTQVbuw09AK2xaA4w6luKvP8qf9V8/Y8B1AC8AdATVCjUztIk4LwDmilV6luKuv8qf9qiX1P7wBlJ2FfwlIxcteHYLRlV8nqHKrimfVv/JfeQPQbSm1K3dhU4mXcmp1rqotjaeZvvSDQFUwBUbqf6SmAkpKrFxFSu2XPc2/BeAY0ZRT6UDqYFCf03jiRQvAN6ICqgXgnJoSt9SeklxDlQx1svYIkZQn4p0EQfHkvwWgBYC/gpqSTEMkewuAxv5uT3vzJJZf/zD9nYBqnOzzZd1WVotL443WKxfFkhLLv05Rxa/YlbsGNt2f5irsRv6Um3ynfUnjrV7fApCy63u9iCC3aSPTa63iV+zKvQVg3YmcHqLp+haAFyehBWAeuCop5yPN3RT7BnCOQPR3AdRY2Vc3Nj2Z0vj79S0A8+it5oEiV3ojDsn3H/8I8FXg6W8DCvhPX1NT8JN6RIzE19Fawa742q/eJPmvjiV/qj3JPV1bzS0Vv3T98npaAI4hvZqEq4kmYlTqUa6p2MhfJVfhIHs1t3Sg0/XKX+9jnnrVAtACIFJpKFoA7gikA52uV69aAFKETtZffQppqBRf+9OhHMG2Opb8qfZFLT50U80tHeh0fVo76/ly+PI7ADp/+N0AqdPqZ/qESGpEalejPlnrlpt6N8o/wVU4HNnT3FZimdZW5cWn40V/GEQDnJ46VfBErgTcNJcq6ar7U6zT3rUAiF03e8qb1X1LefS4vgXguyNpI1Pg1fj01JM/0bcSLxFW5dE3gLXfEKS+tgCcMLIFYH5UWwDuWKW8WS3c6UFUEgCpiygk4ghM+Zc98Z+snXmmThuVEkX5jnpX7UvKC8VTH9PHmRH2V/clzTWtXTwRL6JHgLTRSk7gXE2UkX8Bp9xVe4qlsFC+LQDHp3YLQPBTgJS0GgINkUifqqWGZO8vWds3gOwHSVf3Vbzb97YFoAXgUEdaANY952ogUyHXwaF4LQB3hKIvBNENIFV2DZnsIkKi7lq72q7cExIfDVDSi2pftT+tJcn9FfFI893HuJoH4oXix1h/gfHP/U3ACzjtrxYn/xKM5Dk49aXGpLmnjdT60aBU+6r9yk1YvzLklXpHe9M+V2vTfmHPfFsAbu0mUOE3HqtxEsN0aLS+MhBV8VJuKVZVQdDQtACcICDgRBSRPh3Cqr8rr3YpqVNs0/UtAHcEhN2/SgC+ij19hSugNPAaAvnXyVEVgOTHgDp1hEWaa3V9sr/ap1S4q/FW8iLlYDW2eLTav3g5/ByAwJHzn9ToDVjlswdftaeNSgbyiCRJ7ul++RYWLQDnYy3sJAjpjKW8bAF48XEnBboF4PwKLgFZPST7eJ8e0NW1pbxsAWgB4M1IQ6IBrtpXD0kLwB3R4ecA0quhris6Ba9sdPoIkOaakly1aui0v5JP2nedOmktyl21y37lu5+01kquR5yWv6dejX4MmBKhBWD+mqtGVYmkIUqGQL5aAM77rj7Lrpkq86QFQC242QW0hkSNTG8cyrqSTyr8LQAtAH8jcDXJ5T8lrvztid0CME9yiU9VvLRf9uT2k/oST+RPYrr8oNgOt19O0wFSsgJDREkGNAX28VRXLqq12hjFl131J6RfHUu8EnbigXiW9k5YVg4G+VYtwkL+n7BoAbhBkpJejVAjRUoNTdX/iMQpFtVaWgBev12lA98CsENgP0Qp6VsAzqknLFPs0vUaCvnT/r4BnCCkxq8+KZJGHa1tAbihcvVtQ/77BvBDbgAaKDVS9qr/1UTZC1aau67gVTFMsUrFdb9euVZPzCq2aX5JPK2Vvdon7Rf21fxK3wmYNkbFpsWsXF/1VRnAba8aLfGrxF/dR+WqWtWLqn10hV+NhQ4KzUQVK/rfboBa9Mu+EnhdyWeGQvkkRKz6qgzgTK2qpRJ/NemVa5XU6pXsLQB3BPoG8I1FQppti5RdQ6WBlSivjK9cNbBprvKnXlTtLQA7AfgCc/oGkDZOxKgOgfyrtNE7APlOsUjXp9ikQzGqT4LwbmwUTzeOEZYJR2bySP1pfZUH2v/bLwOpwCqJq/61/0oiCEjFrmKX7q8McWXvhkM117TPwr4FYHfiP3y1XQvANzZXK3E6FKsFJ6mvBeB8YCROwvnd2IpHLQAtAE+cfjdJJY4aur4B3BFIBSh6CahGpM+hIpqIoWKV78i/fCs3xa6Qdtur/JL4aR/SPie5HK1NsRY2Sd9/OjY64cWzFoATdlZI9Arh03han+Tw00neAjDfTWH1JN7bYTLvfrwyPRlS4knN0jqSkyBV2jQXDbSwSuPt18t31V7JbdsrUqe8SPperV37q9ikvGwB2CGWECEFOm1sC8A5Yi0A82wSVkMB+CQJj5ReNwopv9RXYO39p7mkuaXrlU9ir+KUxJp5xk95qPEY5adYqfCnWCQcVJ2bXfGf6tk/AggMEWUmwdEa+RdYKl72UW6Vva80RvFW2t+Nu4Yq5aF41wIwuF21AIg+N7sGTl7S/Vq/0t4CoO7d7Z88hGayFC/6BrBDQM3sR4AbAsJJpEtP9HS9BqNvAIMbwBc4L/95cBFDjXm0i0jV9dqfPJ6kvtJT9t1YJI8/1Su89r+TN+KwxEi1pH1Ma9d65T/8wyAiucBTclX/VXAFzj4/1SpfLQCDU+jh8+nv5E21ry0AabcG69OBTtdLcPoGcIxAVdxEEQ2h9qc82K9XbNXeAqDuBPZKI7cwamYLQNCM3VINgW43ipr2TX2UvxaAO4JL/zioiCK1FFHeaZcYqVYNhezCqho/ue0IC/Wluj8deGGT1L46dtp38aCKfQvACYIirUimRsuuxlfjJ0MgLKok1P7VQ5jUvjp22nfxQNipdy0ALQBPCIikumKnQyMSp/4kji0A/QhAzkk5RbJ0iKr+dFLI/35/mrvAFJba3wKwG9jwJybCPvp1YDmr2t9NhNFJpoHRkKS1pOtXnsLqWzqA6fpqfImf8kmwT3GXb9Uuu2pTvi0Ak48AIpkEQ0RI7WpsQoyrSSb/sqsW9SbdX3lESPuo2mVXbeJJC0ALQPx7DqtJWfXXAnBHIMUyegkoNUlPQV2jFa+qtonSp8BKmUXaNJ7WJ72p4q5c1DflqvyS/VqrXJWL9qfxNTOK98S7r384/UagtJGri6mCmw7hfr2ATnMTNtV46pXij2pPSaVc5E+5Cvtkv9YqV+Wi/Wl88UTxWgAmERLQaePV6Go8DZ3itwBMEuNhWcqDyqG07RVP0ir6EeAEMQGdNl4DWI3XAnD+HDx63FJfNFApD36cAHwBMP3rwAKjalczNCR6rk7AV2OVa5rLauyUfyWealds7Vdu8q/9+/gpp+T7031X/KeDogXguKUiWUpi+UuJJTG7Mp5qV2ztFxbyr/0tAHeEou8DELBVu4iRqrWIMopX2XuEg/ytxu7KeGmfJFZp7dXaWgBaAP5GoAUgHb3b+haAedyqYqVIaS+eHgG2fv4Kkr5Iqp7IiqeTI42v5yOBvbcrdzVmZS5J3me9fsXH2R6RXthcvX9Uq3Kr4pTWlq5PefXbTwFSUqcDqPVpsfKnZileQpRP5qI6j+xXEl24KvbV+5O+voLtaE9aW7q+BSDomMBNiNICcEdLuLYAnDNLh7BuxS0ALQBTCGgIp5ycLGoBOEcvxSZdHwvA/seAadN16qXJa73yS9UzeaaX8ip3DZz2V2tPsEnWKq/NLn8pNlqfDIFyU99n6t+v0cwod9UuHj3V2wJwg7xKhBR4NTollvKXvSKGylWxU1JrfYKtcmsBGHRXapYOhdZXiTbaXyWCchdptb9ae1JfslZ5zYhrio3WtwCcd6VvACfYpKSvrk9IesWQjQQnrU35yZ8GWgeN4q+sVbmmuchfWrsOkqdebLdfJf3LvjpZDUE1nsDb20VSYXT1fmGh/Cp2kUq+U2y0PrWLZ8o/uTmmvoRt2vfUX+kbgQRsNXntTwZcV1GRSo29er+wUH4Vu0gl3yk2Wp/axVPl3wLwjYBIqIEU0Ol+rU/sIpVyv3q/sFd+FXsLwDl61b4I29R/6q9vACfiJiAfKdECMD8kwlZYpva+AdwRiN4BXK4++I7ztNHJiZ8OsLCoklr5XEli3Q7Uh6tzF/bCZrRfnJFv1S7/4o16U7VH3wikYCqmSqQUzCSe1oqEV9eeElG9SuzCRkNQzV3Yy38LwHm3WwAmHwFEwhaA82umBlRiJOzlvwWgBeBvBCo/DxYJWwBaADYEdFuSXWK42j78RiCRPlVeDUl6lVwJRpqbctXjirCT/3T/yJ9qT0mbrk/7WOVlGu/K9SlWWi9sHnvdAvDdXQ2BSLC6MS0A54iL5FVxVK9X2sUb8aB60LQAtAAMH41mrrUpSasD1AJwR7AFoMqmFoAWgEUcesXNx28A23uLX4mnyaTKL/+psuuqp3j7/Vqb2tPcPr0+Ia/6pFMptSs35TPan+aiWFf7W41F9J2AafDVYCh+Gq8FQIge268egvR9jPJpAThHoAXgG5v0hJfYfPpE11CkQzYSy7RWYZfmplpbAFoA/kZg5ecAROJ0KD69PrkLaOCETWpXbsqnBWBSAAR09ZlfJFd8ndKr81M+e7tOLeWekljxhEWlNtUi36o1rU3xVmIhDqs25arahb3iP30O4Cuh6S8EEZBSdoEncFT86vyUTwvADQGRVn2p8iLp07ZWQ5L4Szkv38JSM6DaWgB2HRBYalYLQAtAC8BuClIwpHY6ObS/qpYtAMcDLlyFm4RXfZV/2RVf+0fCX/Wt2oW94j/dAL42/PMIoAGWXVe5NDkVK4FQPqNGp7FFGvkTNpVajnIbxVOfRdK0L6rtSuxS3JVrtXbxKO2N6os+CqzgAofJPHxBiBqfgp0QN42txsmfsBG2ip9gpT4nOG5xq7VdiV2aW9qHqn/Fq2LTAnAyOQK2OnAaMvlPh7AF4I7AHrvqgKoPVf8tADsEqmBr/x7sFoA7GlUs0iGQOMqeiGeamwYyEVrleWRX7bI/5T96B/BKglcOkfJJibpfL3EQUbQ/zV1ES/PReuVXsQubNDf5U65J3+VLAx8PJB6DxYs03+EjQOosBaPqvxovIYJIupKUryi/iKH8V/di70/YpLnJn2pJ+i5fKQdVa1Uw0nxbAL4RE6nSxqWNSP2vXp/mm6yvYitxS3LZ1rYA3BFrAWgBSOcnXt8CcIdstXALWzXrNwHgYnyPv/ar+KrSV94BKHddzdSIK3Pbcld+o/qUu7Cp1lbJ/aj2JN809ruxUi2yqzctAELw5IYgYNNnQ61XmimR9/7eTWph986DIsXt3Vip77IL6xYAIdgCQIREMolbOoQrb4pp7BYA0uF8wTuVfeZqmOQjoogY1SER7MqvHwGOn8NT3NRn9SnlgfzJrnjDG4CKlXPZq8mv9p9ci9PYWi+7TlFhOTo1EyFM46wW4lfiJzeGKhapoCS5HdWe5vuYXwvACaOq4qeBFVHS+Olg7P2nJKrEWkHiNH4yZFUs1Fflrr6LV6n/FoAWgPiXdUSyZOC2tdWhW5lPNZcWgF030mut1E3grlRP+Upr03rZhU1lCKqkV+wUS/mr2kf5VLEQR5W7sKryYPgIoOAiaWrXSbG6GSPw0trT3OVfxBAWFeKle9Na0tyFhexXxhPH0wFNsVftqb/ok4AqPrWnQ6Ti5a8F4BjBmDThB8KuHMijiq6MJ463AOwQqBJLjZQg6KTa+0/WHsVVrfKvWoSF4o/8p3vTWtLchYXsV8ZrAQgGvEosNVJEEFFbAG4IVvukPqiP6pP8V0/dxP+/WgBSoAVs2niBL/son8reza/2p/YqdsnQJWtnalXuq+NVsH23+KXxhKX80f4F3umXgiq4Gqn9LQB3hFIshZ387fcna1sAtr+mN/9fRZxmonDA9T2bLQA3mNUoNUP7U7vitQCci6eGYo9tsvbocUl9Wt33x3jKn/YWgBaAvgHM38QkvHpM1kBKUJYLwHb4nQUVMZRMWoziCfwr1XZ141LshE3qb78+9Z32Nc2tmo94kuRfzUW1p5wVD2V/yqcFYI4OKbBzXu+rRNqUiPLXAjDXoRR3eRWPrra3AKhDJ3Y15kW3/2zTwKZElL8WgLmOpbjLq3h0tf1JACrvAPS8k4JxtT/ls3IoVjcyyX1mbULsRExmYmuNrsXpfl3D5W9kT3A88iOepLmlvYo+CqxkUjCU7Gp/yr8F4Bgh9SnBdWZtC8AMSmt61QJwgnUqPjplRGrZX6fE8c6kvhaAc/QTHPsG8ICAiJWCK3/JEKWxWwASdMdrq2Ko3v1JPElRTWvbPtZ0+mNABa8CfXWjlf8erGotipXalU/qbyRQq2PpuTYlqXgi+2Pto3rT3NI+pLmm/tP1LQDfiGkIriZGQtK0ybp6qvY0XgvA/CPDu3n1dBD0DeAGiYbg3Y1SPulQ9g3gjkDfAO5Y9A2gbwAUv1Rs+gbwB90A9p8DGJ0SMyRITy0RJc0njb/3n+Yyg8dojeLpxqFaK/7lW7Urdz3uKHfFl73y7kfP8LKr9pTzqb8n/y0AN0iuJp0aezVxEv8tALsrsn6dNrSnA1sVU4phC0ALQEpKkqr4nYFXi3HfAHYC1wLQAtACcC5pEqPUnmL9o24AyTVSp8SRXf51NU3B2ueQxk5jyX+Kl7CQv9EpWCW1YmsIUmzlL81nv76Kxco+bXmt9hf9ZaDVJFbjBL6eq5PGqzbZFau6X1gp/ggr5SZ7Glu1tADMv4NIsX/EtgXgG0GRXHY1orpfQ6P4LQApQrf1OoQkVqtP7NX+WgBaAPh9iKvFS2KmodIoV4fkX/sIIOCrwEpN1dg0P61XvJF99VCk2ApL1b6Pl6w9wkS56FEtrV3+KgLz7r4Ku9Secjr6deDVjUr9pUTV+hSs/fp3E0WkT/NpATjufoqjOCSOpwO+Or8WAHXwxL66ESJKC8B5oyT0Sa+StTPUUV9bAGZQ/F6zstFB2MOl7yZKC0ALwIbAat5FLwErz1YzA7e6uER9FTu1XzmwVzyHz/Tn1xrhmvja1krY5S/tTTVe8ihYxSrNNY3XAvDdzSqJBHx61ZPYpgKj9RqyEemTvTPilfqr9i6N1wIwOTQpsGpk1d9oCBQ7tWvg5K8FYL7bwlL2+UjPK+VbB4Ni9w1ACA3sAn/lx2GTWFvKIk4LwHzjhaXs85H+DwVg4+KvsqokrgC57V19TZZ6jur9SbnMYKMbx0hQhNNqMRK2VR4lWEgcNBOrc5W/5b1qATiGXCRVI0Ss1UOVkP7xBqJaVucqbDUEqX1Un/rUArBD++rGyb+IqmYmRP5JufQNIB3539e3AJzj99t3AkrtNBS1NvUjwAi/FPtELLU2Ec4ZsUprWc2rvT8dGpqJam7p/uW9+irwn3cAcp6CJX8psVKw0mtxhRhprdVaRMx35rM6F/lLsasIToqjZiTNvbpe+ZQ+Cixgq+BVi28BWI3gsT8N7Kd5IJ4mNy8hqoHT/tV25dMCcIK4gJN9dSPT21I6dJV8WwDu6H2aF+LJIy9aAFoAKrP/994WgP8TASgzIXTwzlNKqUm5RXL5l13XVNn1uJPkX42lWoV1eooltSk32VdzNs1dvUntw98FEBhV+2owK/mIlGmj0lzSxikf+Uuee9NYql1YtwCcI6i+pvYWgG+sRUoNgUgve9o45SN/LQDqyLF99aGlPqY3O/V9+A7gNUhe37UazNcz8Wfz00aluaSNUz7y1wKQdui2fjVn1cfLBeArwD+fA3gNkvldOmWvvvqNmqdGaKBkTxup9VWs9vmqL7LPM+C2Uv5kT2sfrU8H+mqeiEeyizdP2LYAHJMyBhJ/Iy71p/XpEIyGSgMnewvAHQEN6NV28aYF4IStVyt72hitbwG4I5AK1H593wD6EeDwWqoBFKdgpjYAAAOESURBVOmqgqL4LQAtAEePU+LN8AYg0qZXPV13lKziaQi1f29PfVWxSk+epJajtUm+aW7CTnaJWcqTNN4I2wS3zY84L7v6nO7X+ui3AZWcGiUwVxMvyTcljWpR7LRW+ZM9yTfNTdjJ3gKg7t3tGuh0BlsAvhFbTVK1NB0y+ZO9BUAIHdsT3PoG8IBhVa3UsnRok6ueBjQlhpRZtVbtSb6qXSe2+i7/yjXdr/UJL9SHtHbVKt5oP/P5CnD6nYApcBpIJZsWq/zSeGru3q7Yia9X1qq2K/NbHbvKG9U68n917Fd6m+xRLzRTw0cAAVs9CVQo1evhZ+/KR/ESe4pN4ntmrRp/ZX6rY189hC0Ad0Y98qIFYGbaDtZcOWAzKa0ewpmYv9asjt0CkKD/+1r1om8Ar2M73NkCcA5Pik0LwOsk/aMFoHrFF2wi1n6/gFSuykVKXH18UX6joVTtaW1pratrl789FglHjnAQdqkYCmvlq3yeevP1Dx97CVghrYDa7AKrBeCGQEqaGez3a9IhSPOR/8o7ANWqXJWb/Cdi9kovP/oOoAXgvP0ilk7ZleKXklS5yV+19mRoEpz6BoDOCcyqXcRJGq+1InFKUvlL85E/YZ3cflLclZv8pdjqlO0bwDniP+oGIGJUh6RKzJVDI9KmWHxyvQZWNz3lnu5P1qsPiZC+44YgrFMsWwCE2Il9dSNeTONHbBMWyUAeFZTuT9a3APygl4Apm0U8+VPzR/s/GVt1vdsuLJKBbAEYd09Yq/c/6oNAlQHcCl0NhsDrR4BjhNSHFoDBMzg+zXr1Y++P/m1AESsZ2G1tQsRUnPSsqFqUW5qPiJP8LHx1bepbFSu969n7r+Ka1qI+y5/yTXvVAnCCuIBOBmzmtiJipPkk+cWkKX7/oUjeAvD6jSHu5XaT/hVOwKtxifKueNa7Mp904FLgU6zSfFoA7giMxLWKqzhY5YV4kvT56CDqG0DfAPiJySqJ0yHTQaTbkoamHwF24ri/AUjNqva0sYonYib7RdJqLOUiu+IL29FQrPatAVStqT2tPfEvsZE9xSKtRbzlDaEF4AaRgNSQJKR6Za3iV4iz2ndK+lfw2O9Ja0/iacBlT7FIaxFvWwAG3U6ughqShFSvrFX8CnFW+05J/woeLQBzB1cLQAvAIQKVHwOmA5ueUqn/VPwS/zrhZU/FMK0lxfbR//8AW9WwhzSkmNsAAAAASUVORK5CYII=">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
        </div>
    </div>
    <!-- /Page Body -->
</div>

<!-- add new contact offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddNewContact"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New Contact
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
                <div class="add-users-modal-body-table-header text-headline-6">Add New Contact</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Middle" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="Middle">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="Surname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Alt Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input class="form-control customdataPicker" type="text" name=""
                                            placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Address Line 1</label>
                                        <input type="text" class="form-control" id="addressline1">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline2" class="form-label"> Address Line 2</label>
                                        <input type="text" class="form-control" id="addressline2">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Town/City" class="form-label"> Town/City</label>
                                        <input type="text" class="form-control" id="Town/City">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="County" class="form-label"> County</label>
                                        <input type="text" class="form-control" id="County">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Postcode" class="form-label"> Postcode</label>
                                        <input type="text" class="form-control" id="Postcode">
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label">Appointment
                                            Colour</label>
                                        <div class="input-group color-picker">
                                            <div class="input-group-text colorpicker-input-addon"
                                                style="background-color: rgb(0, 155, 132);">
                                                <input type="color"></div>
                                            <input type="text" class="form-control colorpicker-value" value="#009B84">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Has Special Needs (See notes for details):
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
<!-- add new contact offcanvas modal end -->

<!-- add document offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addDocument"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New document
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

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New document</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Document Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Invoice</option>
                                            <option value="2">Statement</option>
                                            <option value="3">Receipt</option>
                                            <option value="4">Warranty</option>
                                            <option value="5">Council Tax</option>
                                            <option value="6">Building Development</option>
                                            <option value="7">Expired</option>
                                            <option value="8">Maintenance</option>
                                            <option value="9">ID</option>
                                            <option value="10">Tenancy</option>
                                            <option value="11">Qualification</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Document</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
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
<!-- add document offcanvas modal end -->

<!-- edit document offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditDocumentModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit Document
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

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Document</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Document Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Invoice</option>
                                            <option value="2">Statement</option>
                                            <option value="3">Receipt</option>
                                            <option value="4">Warranty</option>
                                            <option value="5">Council Tax</option>
                                            <option value="6">Building Development</option>
                                            <option value="7">Expired</option>
                                            <option value="8">Maintenance</option>
                                            <option value="9">ID</option>
                                            <option value="10">Tenancy</option>
                                            <option value="11">Qualification</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Document</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
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
<!-- edit document offcanvas modal end -->

<!-- add event offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addeventmodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New Event
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

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Event</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Event Type</label>
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

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Short Message (Push Notifications Only)</label>
                                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="5" placeholder=""></textarea>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Request Acknowledgement
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Send SMS Message
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" />
                                            </div>
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
<!-- add event offcanvas modal end -->

<!-- edit event offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Editeventmodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit Event
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

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit this Event</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Event Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" value="">Please Select...</option>
                                            <option value="2">Viewing</option>
                                            <option value="7">Custom</option>
                                            <option value="21" selected="">Happy Birthday</option>
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
                                        <label class="form-label">Short Message (Push Notifications Only)</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="">Schedule your viewing appointment today! </textarea>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="5"
                                            placeholder="">Schedule your viewing appointment today! </textarea>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label" for="gridCheck">
                                                Request Acknowledgement
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Send SMS Message
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify "
                                                    data-default-file="dist/img/gallery/mock5.jpg" />
                                            </div>
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
<!-- edit event offcanvas modal end -->

<!-- Add Contract  form offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddContractModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Contract
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

    <form class="" action="view-user-details.php" method="post">
        <div class="offcanvas-body">
            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Contract </div>

                <div class="formstartcontainer">

                    <div class="row gx-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Property</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Communal Area Inspection House 14</option>
                                    <option value="15">Communal Area Inspection House 16</option>
                                    <option value="19">Communal Area Inspection House 22</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Application Received</option>
                                    <option value="2">Reference Check Issued</option>
                                    <option value="3">Contract Issued</option>
                                    <option value="4">Landlord To Sign</option>
                                    <option value="5">R2R Information This Academic Year</option>
                                    <option value="6">Completed</option>
                                    <option value="7">Application Withdrawn</option>
                                    <option value="8">Awaiting Tenancy Setup</option>
                                    <option value="9">Replacement Found</option>
                                    <option value="10">Tenancy Cancellation</option>
                                    <option value="11">Utility Contract Sent</option>
                                    <option value="12">Utility Contract to be sent</option>
                                    <option value="13">R2R Info Next Academic Year</option>
                                    <option value="14">Rent Advance Received</option>
                                    <option value="15">Ready For Contract</option>

                                </select>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input class="form-control customdataPicker flatpickr-input" placeholder="Select Date"
                                    name="" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">End Date</label>
                                <input class="form-control customdataPicker flatpickr-input" placeholder="Select Date"
                                    name="" type="text" />
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Discard</button>
            <button id="add_event" type="submit"
                class="canvasSubmit_button commonCanvas_buttonFooter fc-addEventButton-button">Add</button>

        </div>
    </form>
</div>
<!-- Add Contract offcanvas modal end -->

<!-- Edit Contract  form offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditContractModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit Contract
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

    <form class="" action="view-user-details.php" method="post">
        <div class="offcanvas-body">
            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Contract </div>

                <div class="formstartcontainer">

                    <div class="row gx-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Property</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Communal Area Inspection House 14</option>
                                    <option value="15" selected>Communal Area Inspection House 16</option>
                                    <option value="19">Communal Area Inspection House 22</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Application Received</option>
                                    <option value="2">Reference Check Issued</option>
                                    <option value="3" selected>Contract Issued</option>
                                    <option value="4">Landlord To Sign</option>
                                    <option value="5">R2R Information This Academic Year</option>
                                    <option value="6">Completed</option>
                                    <option value="7">Application Withdrawn</option>
                                    <option value="8">Awaiting Tenancy Setup</option>
                                    <option value="9">Replacement Found</option>
                                    <option value="10">Tenancy Cancellation</option>
                                    <option value="11">Utility Contract Sent</option>
                                    <option value="12">Utility Contract to be sent</option>
                                    <option value="13">R2R Info Next Academic Year</option>
                                    <option value="14">Rent Advance Received</option>
                                    <option value="15">Ready For Contract</option>

                                </select>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input class="form-control customdataPicker flatpickr-input" Value="20, May 2024 "
                                    name="" type="text" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">End Date</label>
                                <input class="form-control customdataPicker flatpickr-input" Value="18, May 2024 "
                                    name="" type="text" />
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Discard</button>
            <button id="add_event" type="submit"
                class="canvasSubmit_button commonCanvas_buttonFooter fc-addEventButton-button">Add</button>

        </div>
    </form>
</div>
<!-- Edit Contract offcanvas modal end -->

<!-- Add Tenancy offcanvas form modal-->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddTenancyModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Tenancy
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
                <div class="add-users-modal-body-table-header text-headline-6">Add New Tenancy</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">User</label>
                                        <input type="text" class="form-control" id="Title" value="Dean Shaw" readonly
                                            disabled>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Property</label>
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
                                        <label for="" class="form-label">Start Date</label>
                                        <input type="text" class="form-control customdataPicker flatpickr-input"
                                            placeholder="Start Date" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">End Date</label>
                                        <input type="text" class="form-control customdataPicker flatpickr-input"
                                            placeholder="End Date" readonly="readonly">
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

                            <div class="paymentPlanDeposite_container">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Deposit</label>
                                            <input type="text" class="form-control" id="" value="£0">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Payment Plan Type</label>
                                            <select name="" id="paymentFrequency" class="form-control select2">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="weekly">Weekly</option>
                                                <option value="custom">Custom</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="monthyPayment_opt payment_opt ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Monthly Rental Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Monthly Utility Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Payment Date</label>
                                                <select name="" id="" class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="9th">9th</option>
                                                    <option value="10th">10th</option>
                                                    <option value="11th">11th</option>
                                                    <option value="12th">12th</option>
                                                    <option value="13th">13th</option>
                                                    <option value="14th">14th</option>
                                                    <option value="15th">15th</option>
                                                    <option value="16th">16th</option>
                                                    <option value="17th">17th</option>
                                                    <option value="18th">18th</option>
                                                    <option value="19th">19th</option>
                                                    <option value="20th">20th</option>
                                                    <option value="21st">21st</option>
                                                    <option value="22nd">22nd</option>
                                                    <option value="23rd">23rd</option>
                                                    <option value="24th">24th</option>
                                                    <option value="25th">25th</option>
                                                    <option value="26th">26th</option>
                                                    <option value="27th">27th</option>
                                                    <option value="28th">28th</option>
                                                    <option value="29th">29th</option>
                                                    <option value="30th">30th</option>
                                                    <option value="31st">31st</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="WeeklyPayment_opt payment_opt ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Weekly Rental Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Weekly Utility Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Payment Day</label>
                                                <select name="" id="" class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="0">Sunday</option>
                                                </select>

                                            </div>
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
<!-- Add Tenancy  offcanvas modal end -->


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

                            <div class="paymentPlanDeposite_container">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Deposit</label>
                                            <input type="text" class="form-control" id="" value="£0">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Payment Plan Type</label>
                                            <select name="" id="paymentFrequencyfor_permit" class="form-control select2">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="weekly">Weekly</option>
                                                <option value="custom">Custom</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="monthyPayment_opt payment_opt ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Monthly Rental Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Monthly Utility Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Payment Date</label>
                                                <select name="" id="" class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="9th">9th</option>
                                                    <option value="10th">10th</option>
                                                    <option value="11th">11th</option>
                                                    <option value="12th">12th</option>
                                                    <option value="13th">13th</option>
                                                    <option value="14th">14th</option>
                                                    <option value="15th">15th</option>
                                                    <option value="16th">16th</option>
                                                    <option value="17th">17th</option>
                                                    <option value="18th">18th</option>
                                                    <option value="19th">19th</option>
                                                    <option value="20th">20th</option>
                                                    <option value="21st">21st</option>
                                                    <option value="22nd">22nd</option>
                                                    <option value="23rd">23rd</option>
                                                    <option value="24th">24th</option>
                                                    <option value="25th">25th</option>
                                                    <option value="26th">26th</option>
                                                    <option value="27th">27th</option>
                                                    <option value="28th">28th</option>
                                                    <option value="29th">29th</option>
                                                    <option value="30th">30th</option>
                                                    <option value="31st">31st</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="WeeklyPayment_opt payment_opt ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Weekly Rental Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Weekly Utility Payment</label>
                                                <input type="text" class="form-control" id="" value="£0">
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Payment Day</label>
                                                <select name="" id="" class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="0">Sunday</option>
                                                </select>

                                            </div>
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

<!-- create new Invoice offcanvas form modal-->
<div class="offcanvas offcanvas-bottom height90Canvas custombottm_offcanvasStyle" tabindex="-1" id="CreateInvoiceModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Invoice
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
    <form class="" action="view-user-details.php" method="post">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6"> Add New Invoice</div>

                <div class="formstartcontainer">
                    <div class="create-invoice-wrap">

                        <div class="row">
                            <div class="col-sm">
                                <div class="row gx-3 align-items-center">
                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                        <label class="form-label mb-xl-0">Select Template :</label>
                                    </div>
                                    <div class="col-xl-3">
                                        <select class="form-select select2" required="required">
                                            <option value="0">Select Template</option>
                                            <option value="1">Graysons Properties</option>
                                            <option value="2">Graystones Developments</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                        <label class="form-label mb-xl-0">Recipient :</label>
                                    </div>
                                    <div class="col-xl-3">
                                        <select class="form-select select2" required="required">
                                            <option value="119">Balaggan, Avinash</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-auto mb-xl-0 mb-2">
                                        <label class="form-label mb-xl-0">Due Date :</label>
                                    </div>
                                    <div class="col-xl-3">
                                        <input type="text" class="form-control customdataPicker flatpickr-input"
                                            value="May, 22 2024 " readonly="readonly">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="table-wrap mt-5">
                            <div class="invoice-table-wrap">
                                <table class="table table-bordered invoice-table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>Quantity</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-row-gap">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="w-20 rounded-top-start border-end-0 border-bottom-0">
                                                <div class="quantity_container">
                                                    <span class="btn btnquantity decrease" onclick="updateQty(this)"
                                                        data-target="minBedrooms">-</span>
                                                    <input type="number" id="minBedrooms" name="minBedrooms"
                                                        class="quantity customQuantity_input minBedrooms" value="0"
                                                        min="0">
                                                    <span class="btn btnquantity increase" onclick="updateQty(this)"
                                                        data-target="minBedrooms">+</span>
                                                </div>
                                            </td>
                                            <td class="w-40  border-end-0 border-bottom-0">
                                                <input type="text" class="form-control" value=""></td>

                                            <td class="w-20 border-end-0 border-bottom-0">
                                                <select class="form-select disc-type w-130p select2">
                                                    <option value="1">Cleaning</option>
                                                    <option value="2">Repairs and Maintenance</option>
                                                    <option value="4">Tenant Application Fees</option>
                                                    <option value="5">Tenant Find Fees</option>
                                                    <option value="7">Emergency Call Out</option>
                                                    <option value="8">Management Services</option>
                                                    <option value="9">Rent Advance</option>
                                                    <option value="10">Property Holding Deposit</option>
                                                    <option value="11">Out of Office Hours Check In</option>
                                                    <option value="12">Out of Office Hours Check Out</option>
                                                    <option value="13">Serviced Apartment Management Fee</option>
                                                    <option value="14">Tenant Damages Charge to Landlord</option>
                                                    <option value="15">Landlord Parking Permit Fee</option>
                                                    <option value="16">Tenant Deposit Deduction Charge</option>
                                                    <option value="17">Administration Charge</option>
                                                    <option value="18">Lost Keys/Key Card</option>
                                                    <option value="19">Outstanding Rent</option>
                                                    <option value="20">reduced VAT</option>
                                                    <option value="22">Landlord Utility Charge (Charge for above fair
                                                        usage)</option>
                                                    <option value="23">Inventory Completion</option>
                                                    <option value="24">Council Tax</option>
                                                    <option value="25">Items Purchased for Landlord</option>
                                                    <option value="26">Reference Fee</option>
                                                    <option value="27">Lost/ Laundry Card</option>
                                                    <option value="28">Laundry Card Top Up</option>
                                                    <option value="29">Utility Contribution</option>
                                                    <option value="30">london elite</option>
                                                    <option value="31">Breach of Tenancy</option>
                                                </select>
                                            </td>
                                            <td class="w-40   rounded-end  bg-primary-light-5 close-over position-relative"
                                                rowspan="2">
                                                <input type="text" class="form-control" value="">
                                                <button type="button" class="close-row btn-close removeinvoiceRow">
                                                    <span aria-hidden="true">×</span>
                                                </button></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <button class="d-inline-flex align-items-center add-new-row addnewPaymentButton">
                                    <i class="ri-add-box-line me-1"></i> Add More item
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-xxl-6 ">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-bordered subtotal-table">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        class="rounded-top-start border-end-0 border-bottom-0 invoiceSummary_title">
                                                        Sub Total</td>
                                                    <td
                                                        class="rounded-top-end InvSummary_amount border-bottom-0 invoisetotalprice_col bg-primary-light-5">
                                                        £4,983.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-end-0  border-bottom-0 invoiceSummary_title">
                                                        VAT</td>
                                                    <td class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                        £2,43.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-end-0 border-bottom-0 invoiceSummary_title">
                                                        Total </td>
                                                    <td class="border-bottom-0 InvSummary_amount  bg-primary-light-5">
                                                        £0.00</td>
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
        </div>

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- create new Invoice  offcanvas modal end -->

<?php include('footer.php') ?>

<!-- create invoice js -->
<script src="dist/js/create-user-invoice-data.js"></script>

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

<!-- event Delete alert -->
<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This Event ?</h5><p class="sweetaleart_description">Deleting a Event will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Event',
            cancelButtonText: 'No, Keep Event',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This Event has been deleted!</h5></div>',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        actions: 'justify-content-start w-100',
                    },
                    buttonsStyling: false,
                })
            }
        })
    });
</script>
<!-- event Delete alert end-->

<!-- document Delete alert -->
<script>
    $(document).on("click", '.docDeleteButton', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This Document ?</h5><p class="sweetaleart_description">Deleting a Document will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Document',
            cancelButtonText: 'No, Keep Document',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This Document has been deleted!</h5></div>',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        actions: 'justify-content-start w-100',
                    },
                    buttonsStyling: false,
                })
            }
        })
    });
</script>
<!-- document Delete alert end-->

<!-- tabs scroll js start-->
<script>
    $(document).ready(function() {
        $('.next').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '+=100'
            }, 300);
        });
        $('.prev').click(function() {
            $('.nav-tabs').animate({
                scrollLeft: '-=100'
            }, 300);
        });
    });
</script>
<!-- tabs scroll js end-->

<!-- passwordinput hide show 1 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password-input');
        const togglePassword = document.getElementById('toggle-password');
        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.innerHTML = '<i class="far fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                togglePassword.innerHTML = '<i class="far fa-eye"></i>';
            }
        });
    });
</script>
<!-- passwordinput hide show 1 end -->

<!-- passwordinput hide show 2 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password-input2');
        const togglePassword = document.getElementById('toggle-password2');
        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.innerHTML = '<i class="far fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                togglePassword.innerHTML = '<i class="far fa-eye"></i>';
            }
        });
    });
</script>
<!-- passwordinput hide show 2 end-->

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

<!-- add tenancy  modal form payment options hide show based on selected payment plan type -->
<script>
    $(document).ready(function() {
        // Hide both payment options by default
        $('.payment_opt').hide();
        $('#paymentFrequency').on('change', function() {
            var selectedValue = $(this).val();
            $('.payment_opt').hide(); // Hide all payment options
            if (selectedValue === 'monthly') {
                $('.monthyPayment_opt').show();
            } else if (selectedValue === 'weekly') {
                $('.WeeklyPayment_opt').show();
            }
        });
    });
</script>
<!-- add tenancy  modal form payment options hide show based on selected payment plan type end-->

<!-- parking permit weekmonth payment js -->
<script>
    $(document).ready(function() {
        // Hide both payment options by default
        $('.payment_opt').hide();
        $('#paymentFrequencyfor_permit').on('change', function() {
            var selectedValue = $(this).val();
            $('.payment_opt').hide(); // Hide all payment options
            if (selectedValue === 'monthly') {
                $('.monthyPayment_opt').show();
            } else if (selectedValue === 'weekly') {
                $('.WeeklyPayment_opt').show();
            }
        });
    });
</script>


<!-- add tenancy modal payment plan alert message  -->
<script>
    $(document).on("click", '#paymentAdded_sucess', function(e) {
        let timerInterval
        Swal.fire({
            title: 'Payment Plan ADded Successfully!',
            timer: 2000,
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                    const content = Swal.getContent()
                    if (content) {
                        const b = content.querySelector('b')
                        if (b) {
                            b.textContent = Swal.getTimerLeft()
                        }
                    }
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    });
</script>
<!-- add tenancy modal payment plan alert message end -->

<!-- increase decreas number for add invoice modal custom jquery start -->
<script>
    function updateQty(that) {
        let input = $(that).siblings('input');
        let value = parseInt(input.val());
        let action = $(that).text();
        if (action === "+") {
            input.val(value + 1);
        } else if (action === "-") {
            if (value > 0) {
                input.val(value - 1);
            }
        }
    }
</script>
<!-- increase decreas number for add invoice modal custom jquery end -->

<!-- for contract tab status action -->
<script>
    document.getElementById('pendingtenancy_action').addEventListener('click', function() {
        Swal.fire({
            title: 'Review and Approve',
            text: "Please review all the details before approving.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Approve',
            cancelButtonText: 'Cancel',
            input: 'checkbox',
            inputPlaceholder: 'I have reviewed all the details',
            inputValidator: (result) => {
                return !result && 'You need to confirm that you reviewed all the details!'
            },
            customClass: {
                popup: 'Review-and-Approve' // Add your custom class here
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('pendingtenancy_action').textContent = 'Approved';
                document.getElementById('pendingtenancy_action').classList.remove('bg-warning');
                document.getElementById('pendingtenancy_action').classList.add('bg-success');
                Swal.fire(
                    'Approved!',
                    'The tenancy has been approved.',
                    'success'
                );
            }
        });
    });
</script>
<!-- for contract tab status action end-->


<!-- add notes js start -->

<script>
    $(document).ready(function () {
    // Toggle the visibility of Showing_departmentand_users based on the checkbox
    $(document).on('change', '.customCheckList-todo', function () {
        const container = $(this).closest('.AddNoteEnuSection');
        if ($(this).is(':checked')) {
            container.find('.Showing_departmentand_users').slideDown(); // Show the section
        } else {
            container.find('.Showing_departmentand_users').slideUp(); // Hide the section
        }
    });

    // Handle the Send Note button click
    $(document).on('click', '.send-note', function () {
        const container = $(this).closest('.AddNoteEnuSection');
        const selectedDepartment = container.find('.select-department').val();
        const selectedUser = container.find('.select-user').val();
        
        if (selectedDepartment && selectedUser) {
            Swal.fire({
                icon: 'success',
                title: 'Note Sent!',
                text: `Note sent to ${selectedDepartment} and ${selectedUser}.`
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Missing Information',
                text: 'Please select both a department and a user.'
            });
        }
    });

    // Handle Set Alert confirmation
    $(document).on('change', '.setAlertInput', function () {
        const checkbox = $(this);
        if (checkbox.is(':checked')) {
            Swal.fire({
                html: `
                    <div style="text-align: center;">
                        <div class="swalalert_custom_icon">
                            <iconify-icon icon="hugeicons:alert-01"></iconify-icon>
                        </div>
                        <h2 class="Swal_CustomTitle">Are You Sure You Want to Set This Note as an Alert?</h2>
                    </div>`,
                showCancelButton: true,
                confirmButtonText: 'Yes, set it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Alert Set!',
                        text: 'The note has been successfully set as an alert.',
                        icon: 'success'
                    });
                } else if (result.isDismissed) {
                    checkbox.prop('checked', false); // Uncheck the checkbox if the user cancels
                }
            });
        }
    });
});

</script>
<!-- add notes functionality end -->


<!-- password change request confirmation alert  -->
<script>
    // Custom styles for the Swal buttons
    const swalCustomClasses = {
        confirmButton: 'my-custom-confirm-button', // Custom class for the confirm button
        cancelButton: 'my-custom-cancel-button'   // Custom class for the cancel button
    };

    const swalOkCustomClass = {
        confirmButton: 'my-ok-button' // Custom class for the OK button in confirmation
    };

    // Request Temporary Password
    document.getElementById("requesttemprary_Pass").addEventListener("click", function () {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to request a temporary password? An email will be sent with further instructions.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, request it!',
            cancelButtonText: 'Cancel',
            customClass: swalCustomClasses
        }).then((result) => {
            if (result.isConfirmed) {
                // Simulate sending a request
                setTimeout(() => {
                    Swal.fire({
                        title: 'Request Sent!',
                        text: 'A temporary password request has been sent for approval. You will receive an email shortly.',
                        icon: 'success',
                        timer: 3000,
                timerProgressBar: true,
                        confirmButtonText: 'Close',
                        customClass: swalOkCustomClass
                    });
                }, 1000);
            }
        });
    });

    // Request Change Password
    document.getElementById("requestchange_Pass").addEventListener("click", function () {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to request a password change? An email will be sent with further instructions.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, request it!',
            cancelButtonText: 'Cancel',
            customClass: swalCustomClasses
        }).then((result) => {
            if (result.isConfirmed) {
                // Simulate sending a request
                setTimeout(() => {
                    Swal.fire({
                        title: 'Request Sent!',
                        text: 'A password change request has been sent for approval. You will receive an email shortly.',
                        icon: 'success',
                        timer: 3000,
                timerProgressBar: true,
                        confirmButtonText: 'Close',
                        customClass: swalOkCustomClass
                    });
                }, 1000);
            }
        });
    });
</script>
<!-- password change request confirmation alert  end-->
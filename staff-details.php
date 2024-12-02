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
                                    <li class="breadcrumb-item"><a href="all-staff.php">All Staff</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Staff Details</li>
                                </ol>
                            </nav>
                            <div class=" ms-3">
                                <a href="all-staff.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                                                <ul class="nav nav-tabs nav-line nav-icon nav-light customuserviewTabs"
                                                    id="scrolableTabs_sort">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                            href="#Documents">
                                                            <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="clipboard"></i></span></span>
                                                            <span class="nav-link-text">Documents</span>
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
                                                                        <input class="form-control note-title"
                                                                            type="text" placeholder="Add Title">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label">Add Comment</label>
                                                                        <textarea class="form-control note-comment"
                                                                            rows="5"></textarea>
                                                                    </div>

                                                                    <div class="NoteAction_container">
                                                                        <div class="sendEnquiryNote_container">
                                                                            <div class="addto_todolist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input customCheckList-todo">
                                                                                    <label class="form-check-label">Add
                                                                                        to ToDo List <span
                                                                                            class="done-strikethrough"></span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="sendEnquiryNote_container setAlert_container">
                                                                            <div class="addto_todolist">
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input setAlertInput">
                                                                                    <label class="form-check-label">Set
                                                                                        As Alert <span
                                                                                            class="done-strikethrough"></span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="Showing_departmentand_users"
                                                                        style="display: none;">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Select
                                                                                        Department</label>
                                                                                    <select
                                                                                        class="form-control select2 select-department">
                                                                                        <option disabled selected
                                                                                            value="">Please Select...
                                                                                        </option>
                                                                                        <option
                                                                                            value="Account Department">
                                                                                            Account Department</option>
                                                                                        <option value="HR Department">HR
                                                                                            Department</option>
                                                                                        <option
                                                                                            value="Contract Department">
                                                                                            Contract Department</option>
                                                                                        <option
                                                                                            value="Lettings Department">
                                                                                            Lettings Department</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Select
                                                                                        Users</label>
                                                                                    <select
                                                                                        class="form-control select2 select-user">
                                                                                        <option disabled selected
                                                                                            value="">Please Select...
                                                                                        </option>
                                                                                        <option value="John Doe">John
                                                                                            Doe</option>
                                                                                        <option value="Jane Smith">Jane
                                                                                            Smith</option>
                                                                                        <option value="Alice Johnson">
                                                                                            Alice Johnson</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Select Due
                                                                                        Date</label>
                                                                                    <input
                                                                                        class="form-control customdataPicker"
                                                                                        type="text" name="" value=""
                                                                                        placeholder="Due Date" />
                                                                                    <iconify-icon
                                                                                        icon="ion:calendar-outline"
                                                                                        class="dateinput_icon">
                                                                                    </iconify-icon>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="savechangesformContainer">
                                                                    <button type="button"
                                                                        class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                        Note</button>
                                                                </div>
                                                            </div>
                                                        </div>

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
                                                                                id="customCheckTodo1" checked>
                                                                            <label class="form-check-label"
                                                                                for="customCheckTodo1"></label>
                                                                        </div>
                                                                        <div>

                                                                            <span
                                                                                class="todo-text text-dark text-truncate">Staff
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

                                                <div class="tab-pane fade " id="password">

                                                    <div class="mainuserFilesds_tabpaneContainer">
                                                        <div class="docfilterbutton">
                                                            <h2 class="tabinnerTitle">Manage Password</h2>
                                                            <div class="lastpasswordChangeDate">
                                                                <iconify-icon icon="iconamoon:lock-light">
                                                                </iconify-icon> Last Changed: <div
                                                                    class="dateShowlastchanged"><span
                                                                        class="badge badge-sm badge-soft-success ms-1">
                                                                        Mar , 18 2024
                                                                    </span></div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

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

                                                        </div>
                                                    </div>
                                                    <div class="savechangesformContainer">
                                                        <button Type="submit" class="buttonInfOUpdate">
                                                            <iconify-icon icon="fluent:save-32-regular"></iconify-icon>
                                                            Change Password
                                                        </button>
                                                    </div>

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
                                                                                            src="data:image/png;base64,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">
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

<!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  start
  -------------------------------------------------------->

<script>
    $(document).ready(function() {
        // Toggle the visibility of Showing_departmentand_users based on the checkbox
        $(document).on('change', '.customCheckList-todo', function() {
            const container = $(this).closest('.AddNoteEnuSection');
            if ($(this).is(':checked')) {
                container.find('.Showing_departmentand_users').slideDown(); // Show the section
            } else {
                container.find('.Showing_departmentand_users').slideUp(); // Hide the section
            }
        });
        // Handle the Send Note button click
        $(document).on('click', '.send-note', function() {
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
        $(document).on('change', '.setAlertInput', function() {
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
                        checkbox.prop('checked',
                            false); // Uncheck the checkbox if the user cancels
                    }
                });
            }
        });
    });
</script>

<!-- --------------------------------------------------------- 
 assign note task to department from the left side under note js Functionality to 
  hide the assign selection option  end
  -------------------------------------------------------->
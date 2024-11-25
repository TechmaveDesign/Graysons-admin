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

    .select2-container--open .select2-dropdown--below {
        z-index: 10000;
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
                                    <h1>Approval Board</h1>
                                </a>

                            </div>

                        </div>
                        <div class="contact-options-wrap">
                            <!-- <div class="search-container CustomSearch_container">
                                <input type="text" id="searchInput" class="form-control"
                                    placeholder="Search by Card ID, Date, or User Name">
                                <iconify-icon icon="cil:search"></iconify-icon>
                            </div> -->
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
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Department</label>
                                                                    <select name="department" id="department_select"
                                                                        class="form-control">
                                                                        <option value="" selected disabled>Select a
                                                                            Department</option>
                                                                        <option value="HR">Human Resources</option>
                                                                        <option value="Finance">Finance</option>
                                                                        <option value="IT">Information Technology
                                                                        </option>
                                                                        <option value="Marketing">Marketing</option>
                                                                        <option value="Sales">Sales</option>
                                                                        <option value="Operations">Operations</option>
                                                                        <option value="Legal">Legal</option>
                                                                        <option value="Customer Support">Customer
                                                                            Support</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Users</label>
                                                                    <select name="user" id="DepartmentUser_select"
                                                                        class="form-control">
                                                                        <option value="" selected disabled>Select a User
                                                                        </option>
                                                                        <option value="user1">John Doe</option>
                                                                        <option value="user2">Jane Smith</option>
                                                                        <option value="user3">Michael Johnson</option>
                                                                        <option value="user4">Emily Davis</option>
                                                                        <option value="user5">Chris Brown</option>
                                                                        <option value="user6">Jessica Williams</option>
                                                                        <option value="user7">David Miller</option>
                                                                        <option value="user8">Sophia Wilson</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Ticket ID</label>
                                                                    <input class="form-control" placeholder="" value=""
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="" id="Status"
                                                                        class="form-control select2">
                                                                        <option value="" selected disabled>Select an
                                                                            Option</option>
                                                                        <option value="Pending">Pending</option>
                                                                        <option value="Completed">
                                                                            Completed</option>
                                                                        <option value="In Processing">In Processing
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Date Range</label>
                                                                    <input class="form-control" type="text"
                                                                        name="daterange"
                                                                        value="01/01/2018 - 01/15/2018" />
                                                                    <iconify-icon icon="ion:calendar-outline"
                                                                        class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-md-2">

																<div class="form-group">
																	<label class="form-label">Due Date</label>
																	<input
																		class="form-control customdataPicker flatpickr-input"
																		type="text" name="" value="01/06/2024" />
																	<iconify-icon icon="ion:calendar-outline"
																		class="dateinput_icon"></iconify-icon>
																</div>
															</div> -->

                                                            <!-- <div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Assigned Users</label>
																	<select name="user" id="DepartmentUser_select"
																		class="form-control">
																		<option value="" selected disabled>Select a User
																		</option>
																		<option value="user1">John Doe</option>
																		<option value="user2">Jane Smith</option>
																		<option value="user3">Michael Johnson</option>
																		<option value="user4">Emily Davis</option>
																		<option value="user5">Chris Brown</option>
																		<option value="user6">Jessica Williams</option>
																		<option value="user7">David Miller</option>
																		<option value="user8">Sophia Wilson</option>
																	</select>
																</div>
															</div>

															<div class="col-lg-2">
																<div class="form-group">
																	<label class="form-label">Task Category</label>
																	<select name="" id="EnquirySource"
																		class="form-control select2">
																		<option value="" selected disabled>Select an
																			Option</option>
																		<option value="Enquiries">Enquiries</option>
																		<option value="Contract Management">Contract
																			Management</option>

																	</select>
																</div>
															</div> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="contact-list-view">

                                <div class="ApprovalBoards_tabs">

                                <div class="manage_approvalBoard">
                                            <div class="row">

                                                <div class="card-list">
                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#54523</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3> Danial Craig
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#14322</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3> Morgan Freeman
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44323</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3> Huma Therman
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44324</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3>
                                                                                    Dean Shaw
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44324</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 12 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3>
                                                                                    Winston Churchil
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44324</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 12 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3>
                                                                                    Winston Churchil
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44324</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 12 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3>
                                                                                    Winston Churchil
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card approval_board">
                                                        <div class="card-header">
                                                            <div class="approvalHeader_title">
                                                                <div class="circleIcon_cmn">
                                                                    <iconify-icon
                                                                        icon="material-symbols-light:approval-outline-sharp">
                                                                    </iconify-icon>
                                                                </div><span class="card_id">#44324</span>
                                                            </div>
                                                            <div class="LabelnTitle">
                                                                <h4 class="aprvl_cardDate"> 12 Sep , 2024 15:20
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="Ticket_apr_info margined45_bottom">
                                                                <div class="Approval_inner_column">
                                                                    <a href="view-user-details.php">
                                                                        <div class="userName_container">
                                                                            <div class="ImageOfUser"><img
                                                                                    src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user"
                                                                                    class="aprcard_userimage"></div>
                                                                            <div class="LabelnTitle">
                                                                                <label>User Name</label>
                                                                                <h3>
                                                                                    Winston Churchil
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Department</label>
                                                                        <h3>Lettings Department</h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                                <div class="Approval_inner_column">
                                                                    <div class="LabelnTitle">
                                                                        <label>Note</label>
                                                                        <p class="description_Ticket_approval"
                                                                            data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                            Please review the mileage incurred during
                                                                            this
                                                                            timeframe and provide your approval at your
                                                                            earliest
                                                                            convenience.
                                                                        </p>
                                                                        <a href="#" class="read-more">Read More</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-footer approvalFooter_action">
                                                            <button class="decline_btn">
                                                                <iconify-icon icon="bitcoin-icons:cross-filled">
                                                                </iconify-icon>
                                                                Decline
                                                            </button>
                                                            <a href="approval-details.php" class="approval_details">
                                                                <iconify-icon icon="proicons:eye"></iconify-icon>
                                                                View Details
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                    <!-- <ul class="nav nav-tabs nav-line nav-icon nav-light customuserviewTabs">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#NewApproval">
                                                <span class="nav-icon-wrap"><span class="feather-icon"><i
                                                            data-feather="clipboard"></i></span></span>
                                                <span class="nav-link-text">New Approval Requests</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ApprovedRequests">
                                                <span class="nav-icon-wrap"><span class="feather-icon">
                                                        <iconify-icon icon="lucide:stamp"></iconify-icon>
                                                    </span></span>
                                                <span class="nav-link-text">Approved Requests</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#declineRequests">
                                                <span class="nav-icon-wrap"><span class="feather-icon">
                                                        <iconify-icon icon="tabler:rubber-stamp-off"></iconify-icon>
                                                    </span></span>
                                                <span class="nav-link-text">Decline Requests</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-content usertabsContent " id="approvaltabContent">

                                    <div class="tab-pane fade show active" id="NewApproval">
                                        
                                    </div>

                                    <div class="tab-pane fade " id="ApprovedRequests">
                                        <div class="manage_approvalBoard">
                                            <div class="card-list">
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#54523</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Danial Craig
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="approved_status_board">Approved</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#14322</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Morgan Freeman
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="approved_status_board">Approved</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#44323</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Huma Therman
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="approved_status_board">Approved</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#44324</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3>
                                                                                Dean Shaw
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="approved_status_board">Approved</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade " id="declineRequests">
                                        <div class="manage_approvalBoard">
                                            <div class="card-list">
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#54523</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Danial Craig
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="Decline_status_board">Decline</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#14322</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Morgan Freeman
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="Decline_status_board">Decline</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="card approval_board">
                                                    <div class="card-header">
                                                        <div class="approvalHeader_title">
                                                            <div class="circleIcon_cmn">
                                                                <iconify-icon
                                                                    icon="material-symbols-light:approval-outline-sharp">
                                                                </iconify-icon>
                                                            </div><span class="card_id">#44323</span>
                                                        </div>
                                                        <div class="LabelnTitle">
                                                            <h4 class="aprvl_cardDate"> 15 Sep , 2024 15:20
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="Ticket_apr_info margined45_bottom">
                                                            <div class="Approval_inner_column">
                                                                <a href="view-user-details.php">
                                                                    <div class="userName_container">
                                                                        <div class="ImageOfUser"><img
                                                                                src="dist/img/newimages/users/userdummy.png"
                                                                                alt="user" class="aprcard_userimage">
                                                                        </div>
                                                                        <div class="LabelnTitle">
                                                                            <label>User Name</label>
                                                                            <h3> Huma Therman
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Department</label>
                                                                    <h3>Lettings Department</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="Ticket_apr_info ticket_description aprinr_bdr_top aprcrdto_padding">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Note</label>
                                                                    <p class="description_Ticket_approval"
                                                                        data-full-text="Please review the mileage incurred during this timeframe and provide your approval at your earliest convenience. ">
                                                                        Please review the mileage incurred during this
                                                                        timeframe and provide your approval at your
                                                                        earliest
                                                                        convenience.
                                                                    </p>
                                                                    <a href="#" class="read-more">Read More</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="Ticket_apr_info apr65_margintp aprcrdto_padding aprinr_bdr_top">
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Approved Date</label>
                                                                    <h3 class="ApprovedDate"> 15 Sep , 2024 </h3>
                                                                </div>
                                                            </div>
                                                            <div class="Approval_inner_column">
                                                                <div class="LabelnTitle">
                                                                    <label>Status</label>
                                                                    <h3 class="Decline_status_board">Decline</h3>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div> -->

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

<script>
    $("#department_select").select2({
        placeholder: "Select a Department"
    })
    $("#DepartmentUser_select").select2({
        placeholder: "Select a User"
    })
</script>

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

<script>
    document.querySelector('.approve_btn').addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to approve this appointment?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Approved!',
                    'The appointment has been approved.',
                    'success'
                )
            }
        })
    });
    document.querySelector('.decline_btn').addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to decline this appointment?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, decline it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Declined!',
                    'The appointment has been declined.',
                    'success'
                )
            }
        })
    });
</script>

<!-- approval card ticker description word limit  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const descriptions = document.querySelectorAll('.description_Ticket_approval');
        descriptions.forEach(function(description) {
            const fullText = description.getAttribute('data-full-text');
            const words = fullText.split(' ');
            const truncatedText = words.slice(0, 10).join(' ');
            // Initially set truncated text
            description.innerHTML = truncatedText + '...';
            const readMoreLink = description.nextElementSibling;
            readMoreLink.style.display = 'inline';
            readMoreLink.addEventListener('click', function(event) {
                event.preventDefault();
                if (readMoreLink.textContent === 'Read More') {
                    // Expand to full text
                    description.innerHTML = fullText;
                    readMoreLink.textContent = 'Read Less';
                } else {
                    // Collapse to truncated text
                    description.innerHTML = truncatedText + '...';
                    readMoreLink.textContent = 'Read More';
                }
            });
            description.addEventListener('mouseenter', function() {
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.innerText = fullText;
                document.body.appendChild(tooltip);
                description.addEventListener('mousemove', function(e) {
                    tooltip.style.left = e.pageX + 'px';
                    tooltip.style.top = e.pageY + 'px';
                });
            });
            description.addEventListener('mouseleave', function() {
                const tooltip = document.querySelector('.tooltip');
                if (tooltip) {
                    tooltip.remove();
                }
            });
        });
    });
</script>
<!-- approval card ticker description word limit end -->

<!-- approval card search functionality start -->
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchQuery = this.value.toLowerCase();
        const cards = document.querySelectorAll('.card.approval_board');
        const cardContainer = document.querySelector('.card-list'); // Parent container
        // If search query is empty, reset all cards to be visible in their original order
        if (searchQuery === '') {
            cards.forEach(function(card) {
                card.style.display = ''; // Make all cards visible
            });
            return; // Stop further execution if the search input is empty
        }
        const matchingCards = [];
        // Loop through each card and determine if it matches the search query
        cards.forEach(function(card) {
            const cardID = card.querySelector('.card_id').textContent.toLowerCase();
            const cardDate = card.querySelector('.aprvl_cardDate').textContent.toLowerCase();
            const userName = card.querySelector('.userName_container h3').textContent.toLowerCase();
            // Check if card matches search query (by ID, Date, or Username)
            if (cardID.includes(searchQuery) || cardDate.includes(searchQuery) || userName.includes(
                    searchQuery)) {
                matchingCards.push(card);
            } else {
                card.style.display = 'none'; // Hide non-matching cards
            }
        });
        // Show matching cards
        matchingCards.forEach(function(card) {
            card.style.display = ''; // Ensure matching cards are visible
            cardContainer.appendChild(card); // Move matching cards to the top
        });
    });
</script>
<!-- approval card search functionality end -->
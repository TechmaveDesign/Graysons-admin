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
<?php include('headers/hrheader.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">

                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Staff</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
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

                            <button class="btn btn-sm commonAddnewButton btn-primary ms-3" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasBottom" aria-controls="offcanvasExample"><span><span
                                        class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></span></span><span class="btn-text">Add new
                                        Staff</span></span></button>

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

                    <div class="Stafflist_container_wrapepr">
                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

<li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#AllStaffTab">
        <div class="d-flex align-items-center">
            <span class="nav-link-text">All Staff</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link " data-bs-toggle="tab" href="#ArchivedStaff">
        <div class="d-flex align-items-center">
            <span class="nav-link-text">Archived Staff</span>
        </div>
    </a>
</li>

</ul>

<div class="contact-body">
<div class="nicescroll-bar">
<div class="userFilters onerowfilter" id="filterDiv" style="display: none;">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                        <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Filter by  Department</label>
                                                                    <select name="" id="department_select" class="form-control select2">
                                                                    <option value="" selected disabled>Select a Department</option>
                        <option value="HR">Human Resources</option>
                        <option value="Account">Account</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Property Department">Property Department</option>
                        <option value="Operations">Operations</option>
                        <option value="Legal">Legal</option>
                        <option value="Customer Support">Customer Support</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Filter by Roles</label>
                                                                    <select name="" id="Roles_select_options"  class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Staff">Staff</option>
                                                                        <option value="User">User
                                                                        </option>
                                                                        <option value="Admin">Admin</option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label class="form-label">last Updated</label>
                                                                    <input class="form-control customdataPicker flatpickr-input" type="text" name="" value="" placeholder="Pick a Date" readonly="readonly">
                                                                    <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="AllStaffTab">
            <div class="contact-list-view">

                <table class="table common-datatable nowrap w-100 ">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Roles</th>
                            <th>Department</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Morgan
                                                Freeman</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">morgan@jampack.com</td>
                            <td>+145 52 5689</td>

                            <td>Staff</td>
                            <td>Account</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Huma
                                                Therman</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">huma@clariesup.au</td>
                            <td>+234 48 2365</td>

                            <td>Staff</td>
                            <td>Lettings</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Charlie
                                                Chaplin</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">charlie@leernoca.monster</td>
                            <td>+741 56 7896</td>

                            <td>Staff</td>
                            <td>HR</td>
                            <td>13 Jan, 2019</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Winston
                                                Churchil</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">winston@worthniza.ga</td>
                            <td>+145 52 5463</td>
                            <td>Staff</td>
                            <td>Account</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Tom Cruz</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">tomcz@jampack.com</td>
                            <td>+145 52 5463</td>
                            <td>Staff</td>
                            <td>Property Department</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Dean Shaw</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">dean-shaw@poww.me</td>
                            <td>+145 52 5463</td>
                            <td>Staff</td>
                            <td>Lettings</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"
                                            id="del-button"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Danial
                                                Craig</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">danialc@jampack.com</td>
                            <td>+145 52 5463</td>
                            <td>Staff</td>
                            <td>Lettings</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button "><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <div class="tab-pane fade" id="ArchivedStaff">
            <div class="contact-list-view">

                <table class="table common-datatable nowrap w-100 ">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Roles</th>
                            <th>Department</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Morgan
                                                Freeman</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">morgan@jampack.com</td>
                            <td>+145 52 5689</td>

                            <td>Staff</td>
                            <td>Account</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Huma
                                                Therman</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">huma@clariesup.au</td>
                            <td>+234 48 2365</td>

                            <td>Staff</td>
                            <td>Lettings</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Charlie
                                                Chaplin</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">charlie@leernoca.monster</td>
                            <td>+741 56 7896</td>

                            <td>Staff</td>
                            <td>HR</td>
                            <td>13 Jan, 2019</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <a href="staff-details.php">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="dist/img/newimages/users/userdummy.png"
                                                    alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block text-high-em">Winston
                                                Churchil</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="">winston@worthniza.ga</td>
                            <td>+145 52 5463</td>
                            <td>Staff</td>
                            <td>Account</td>
                            <td>13 Jan, 2020</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <div class="d-flex">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                            data-bs-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="View User Details"
                                            href="staff-details.php"><span class="icon"><span
                                                    class="feather-icon"><i
                                                        data-feather="eye"></i></span></span></a>

                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="trash"></i></span></span></button>
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

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New Staff
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
    <form class="" action="all-staff.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Staff to System</div>

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

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
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
<!-- add user offcanvas modal end -->

<?php include('footer.php') ?>

<!-- active inactive user status sitcher js -->
<script>
    const switchToggles = document.querySelectorAll(".switchToggle");
    const switchStatuses = document.querySelectorAll(".switchStatus");
    switchToggles.forEach((toggle, index) => {
        toggle.addEventListener("change", function() {
            if (this.checked) {
                switchStatuses[index].textContent = "Active";
                // Perform action for active state
            } else {
                switchStatuses[index].textContent = "Inactive";
                // Perform action for inactive state
            }
        });
    });
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


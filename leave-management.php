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
                                    <h1>Leave Management</h1>
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

                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#AddTimeLog"
                                aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> New Time Off Entry
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

                                                        <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Danial Craig</option>
        <option value="2">Emily Blunt</option>
        <option value="3">John Doe</option>
        <option value="4">Sophia Turner</option>
        <option value="5">Michael Jordan</option>
        <option value="6">Olivia Smith</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Time Off Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Annual Leave</option>
                        <option value="2">Unpaid Leave</option>
                        <option value="3">Sick Leave</option>
                        <option value="4">Maternity Leave</option>
                        <option value="5">Parental Leave</option>
                        <option value="6">Compassionate Leave</option>
                        <option value="7">Emergency Leave</option>
                        <option value="8">Haj Leave</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Account</option>
                        <option value="2">Compliances Ticket </option>
                        <option value="3">General</option>
                        <option value="4">Maintenance</option>
                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Time Off From</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Time Off To</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
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
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>

                                            <th>User Name</th>
                                            <th>Department</th>
                                            <th>Apply Date</th>
                                            <th>Time Off Requests</th>
                                            <th>Status</th>
                                            <th>Requested days</th>
                                            <th>Time Off From</th>
                                            <th>Time Off To</th>
                                            <th>Time Off Type</th>
                                            <th>Remarks</th>
                                            <th>Leaves taken</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Danial Craig</a>
                                            </td>
                                            <td>
                                                Account
                                            </td>
                                            <td>15-07-2024</td>
                                            <td>
                                                <button class="btn btn-success approve-btn">Approve</button>
                                                <button class="btn btn-danger reject-btn">Reject</button>
                                            </td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                      
                                            <td>1</td>
                                            <td>17-07-2024</td>
                                            <td>21-07-2024 </td>
                                            <td>Sick</td>
                                            <td>
                                                <a href="##">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Urgent family matters requiring immediate attention.">
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>12</td>
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

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Emily Blunt</a>
    </td>
    <td>
    Compliances Ticket
    </td>
    <td>22-06-2024</td>
    <td>
        <button class="btn btn-success approve-btn">Approve</button>
        <button class="btn btn-danger reject-btn">Reject</button>
    </td>
    <td><span class="badge bg-warning">Pending</span></td>

    <td>2</td>
    <td>24-06-2024</td>
    <td>29-06-2024</td>
    <td>Personal</td>
    <td>
        <a href="##">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input" value="Attending a family wedding.">
                <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </a>
    </td>
    <td>17</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#Edittimelog" aria-controls="offcanvasExample"><span class="icon"><span class="feather-icon">
                            <iconify-icon icon="fluent:edit-16-regular">
                            </iconify-icon>
                        </span></span></button>
            </div>
        </div>
    </td>
</tr>
<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">John Doe</a>
    </td>
    <td>
    General
    </td>
    <td>10-03-2024</td>
    <td>
        <button class="btn btn-success approve-btn">Approve</button>
        <button class="btn btn-danger reject-btn">Reject</button>
    </td>
    <td><span class="badge bg-danger">Rejected</span></td>

    <td>3</td>
    <td>15-03-2024</td>
    <td>22-03-2024</td>
    <td>Vacation</td>
    <td>
        <a href="##">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input" value="Planned vacation with family.">
                <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </a>
    </td>
    <td>6</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#Edittimelog" aria-controls="offcanvasExample"><span class="icon"><span class="feather-icon">
                            <iconify-icon icon="fluent:edit-16-regular">
                            </iconify-icon>
                        </span></span></button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Sophia Turner</a>
    </td>
    <td>
    Maintenance
    </td>
    <td>05-11-2024</td>
    <td>
        <button class="btn btn-success approve-btn">Approve</button>
        <button class="btn btn-danger reject-btn">Reject</button>
    </td>
    <td><span class="badge bg-success">Approved</span></td>
   
    <td>1</td>
    <td>10-11-2024</td>
    <td>14-11-2024</td>
    <td>Medical</td>
    <td>
        <a href="##">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input" value="Doctor advised rest due to illness.">
                <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </a>
    </td>
    <td>22</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#Edittimelog" aria-controls="offcanvasExample"><span class="icon"><span class="feather-icon">
                            <iconify-icon icon="fluent:edit-16-regular">
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
             New Time Off Entry
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
    <form class="" action="leave-management.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Time Off Entry</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">User ID</label>
                                        <input class="form-control" type="text" name=""
                                            placeholder="Enter User ID" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Danial Craig</option>
        <option value="2">Emily Blunt</option>
        <option value="3">John Doe</option>
        <option value="4">Sophia Turner</option>
        <option value="5">Michael Jordan</option>
        <option value="6">Olivia Smith</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Annual Leave</option>
                        <option value="2">Unpaid Leave</option>
                        <option value="3">Sick Leave</option>
                        <option value="4">Maternity Leave</option>
                        <option value="5">Parental Leave</option>
                        <option value="6">Compassionate Leave</option>
                        <option value="7">Emergency Leave</option>
                        <option value="8">Haj Leave</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Account</option>
                        <option value="2">Compliances Ticket </option>
                        <option value="3">General</option>
                        <option value="4">Maintenance</option>
                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off From</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off To</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Remarks</label>
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
            Edit Time Off Details
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
    <form class="" action="leave-management.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Time Off</div>
                <div class="formstartcontainer">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">User ID</label>
                                        <input class="form-control" type="text" name=""
                                            placeholder="Enter User ID" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1">Danial Craig</option>
        <option value="2">Emily Blunt</option>
        <option value="3">John Doe</option>
        <option value="4">Sophia Turner</option>
        <option value="5">Michael Jordan</option>
        <option value="6">Olivia Smith</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off Type</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Annual Leave</option>
                        <option value="2">Unpaid Leave</option>
                        <option value="3">Sick Leave</option>
                        <option value="4">Maternity Leave</option>
                        <option value="5">Parental Leave</option>
                        <option value="6">Compassionate Leave</option>
                        <option value="7">Emergency Leave</option>
                        <option value="8">Haj Leave</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            
                        <option value="1">Account</option>
                        <option value="2">Compliances Ticket </option>
                        <option value="3">General</option>
                        <option value="4">Maintenance</option>
                                        </select>

                                    </div>
                                </div>

                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off From</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Time Off To</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Remarks</label>
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

<!-- leave approve reject js  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.approve-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to approve this Time Off request.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, approve it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Approved!',
                            'The Time Off request has been approved.',
                            'success'
                        )
                    }
                })
            });
        });
        document.querySelectorAll('.reject-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to reject this Time Off request.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, reject it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Rejected!',
                            'The Time Off request has been rejected.',
                            'success'
                        )
                    }
                })
            });
        });
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
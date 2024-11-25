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
    .select2-container {
	width: 100% !important;
	z-index: 2000;
}
</style>

<div class="container-xxl">
    <!-- Page Header -->
    <div class="hk-pg-header eventhubHeader">
        <div class="d-flex">
            <div class="d-flex flex-wrap justify-content-between flex-1">
                <div class="mb-lg-0 mb-2 me-8">
                    <h1 class="pg-title">Welcome to Social Hub</h1>
                    <p>Manage and organize all your events seamlessly from this Social Hub.</p>
                </div>

            </div>
        </div>

    </div>
    <!-- /Page Header -->

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Social Hub</h1>
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
                                data-bs-toggle="modal" data-bs-target="#AddHubEvent">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add Social Event
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
                                            <div class="col-xxl-9">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event Name</label>
                                                                    <select name="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Annual Tech Conference">Annual Tech Conference</option>
                                                                        <option value="Design Thinking Workshop">Design Thinking Workshop
                                                                        </option>
                                                                        <option value="Marketing Summit">Marketing Summit</option>
                                                                        <option value="Startup Workshop"> Startup Workshop
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Location</label>
                                                                    <select name=""  class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Convention Center, City">Convention Center, City</option>
                                                                        <option value="Design Hub, City">Design Hub, City
                                                                        </option>
                                                                        <option value="Expo Center, Capital">Expo Center, Capital</option>
                                                                        <option value="Hotel Grand, Metropolis"> Hotel Grand, Metropolis
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Date</label>
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
                                            <div class="col-xxl-3">
                                                <div class="row justify-content-end">

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
                                            <th>Event ID</th>
                                            <th>Event Name</th>
                                            <th>Start Date & Time</th>
                                            <th>End Date & Time</th>
                                            <th>Location</th>
                                            <th>Organizer</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Annual Tech Conference</td>
                                            

                                            <td>2024-09-15 09:00</td>
                                            <td>2024-09-15 17:00</td>
                                            <td>Convention Center, City</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-secondary">Draft</span></td>
                                         
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                                <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Startup Workshop</td>
                                           
                                            <td>2024-08-20 10:00</td>
                                            <td>2024-08-20 16:00</td>
                                            <td>Community Hall, Town</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-warning">Approval Needed</span></td>
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button>
                                                                <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Marketing Summit</td>
                                           
                                            <td>2024-10-05 09:00</td>
                                            <td>2024-10-05 15:00</td>
                                            <td>Hotel Grand, Metropolis</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Design Thinking Workshop</td>
                                            
                                            <td>2024-11-12 10:00</td>
                                            <td>2024-11-12 14:00</td>
                                            <td>Design Hub, City</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-warning">Approval Needed</span></td>
                                          
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Health & Wellness Expo</td>
                                           
                                            <td>2024-12-03 09:00</td>
                                            <td>2024-12-03 17:00</td>
                                            <td>Expo Center, Capital</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-info">Upcoming</span></td>
                                       
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Wellness Expo</td>
                                           
                                            <td>2024-12-03 09:00</td>
                                            <td>2024-12-03 17:00</td>
                                            <td>Expo Center, Capital</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bgadpastevent">Past Event</span></td>
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Wellness</td>
                                           
                                            <td>2024-12-03 09:00</td>
                                            <td>2024-12-03 17:00</td>
                                            <td>Expo Center, Capital</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bgadjustment">Adjustment Needed</span></td>
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Design Thinking Workshop</td>
                                            
                                            <td>2024-11-12 10:00</td>
                                            <td>2024-11-12 14:00</td>
                                            <td>Design Hub, City</td>
                                            <td>Graysons Properties</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                          
                                            <td>2024-07-19</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="Event-Details.php">
                                                            <span class="icon">
                                                                <span class="feather-icon">
                                                                    <iconify-icon icon="teenyicons:eye-outline">
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

<!-- add source code modal-->
<div id="AddHubEvent" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="post" id="wizardForm">
            <div class="modal-content">

                <div class="ModalheaderArea">
                    <h5 class="mb-4">Create Social Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="wizard customstepWizard">
                        <div class="step-indicator">
                            <div class="step-line active" id="stepLine1"></div>
                            <div class="step-line" id="stepLine2"></div>
                            <div class="step-line" id="stepLine3"></div>
                        </div>
                        <div class="step" id="step1">
                           <div class="wizardstep_innerContainer">
                            <div class="stepheadingheader">
                                <div class="steptitleIcon"><iconify-icon icon="carbon:ibm-event-automation"></iconify-icon></div>
                                <h1>What's your event about?</h2>
                            </div>
                           
                           

                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <label class="form-label">Event Title</label>
                                       <input class="form-control" type="text">
                                   </div>
                               </div>

                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <label class="form-label">Event Organizer</label>
                                       <input class="form-control" type="text" value="Graysons Properties">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <label class="form-label">Contact Number</label>
                                       <input class="form-control" type="text">
                                   </div>
                               </div>

                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <label class="form-label">Event Type</label>
                                       <input class="form-control" type="text">
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
                               
                                <div class="form-navigation stepnavigation_first canvasFooterContainer CustomModal_footer">
                                    <button type="button"
                                        class="backButton canvascancel_button commonCanvas_buttonFooter"
                                        style="display: none;">Back</button>
                                    <button type="button"
                                        class="nextButton canvasSubmit_button commonCanvas_buttonFooter">Next</button>
                                    <button type="submit"
                                        class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                                        style="display: none;">Submit</button>
                                </div>
                       
                        </div>
                        <div class="step" id="step2" style="display: none;">
                        <div class="wizardstep_innerContainer">
                            <div class="stepheadingheader">
                                <div class="steptitleIcon"><iconify-icon icon="mynaui:pin"></iconify-icon></div>
                                <h1>When and where will it take place?</h2>
                            </div>
                           
                           

                           <div class="row">
                           <div class="col-md-12">
                                    <div class="form-group inputwith_Icon">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name="" placeholder="Select Date" readonly="readonly">
                                        <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group inputwith_Icon">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name="" placeholder="Select Date" readonly="readonly">
                                        <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group inputwith_Icon">
                                        <label class="form-label">Start Time</label>
                                        <input type="text" name="time" value="" class="form-control time__pickers" id="timepicker" placeholder="Select Time" required="" readonly="">
                                            <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group inputwith_Icon">
                                        <label class="form-label">Event Location</label>
                                        <input class="form-control" type="text" name="" placeholder="" readonly="readonly">
                                        <iconify-icon icon="ep:location"></iconify-icon>
                                    </div>
                                </div>

                              

                               <div class="col-lg-12">
                               <div class="form-group">
                                   <div class="form-label-group">
                                       <label>Additional Notes</label>
                                   </div>
                                   <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                               </div>
                           </div>


                           </div>
                           </div>
                            <div class="form-navigation canvasFooterContainer CustomModal_footer">
                                <button type="button"
                                    class="backButton">Back</button>
                                <button type="button"
                                    class="nextButton canvasSubmit_button commonCanvas_buttonFooter">Next</button>
                                <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter"
                                    style="display: none;">Submit</button>
                            </div>
                        </div>
                        <div class="step" id="step3" style="display: none;">
                        <div class="wizardstep_innerContainer">
                            <div class="stepheadingheader">
                                <div class="steptitleIcon"><iconify-icon icon="clarity:picture-line"></iconify-icon></div>
                                <h1>Please Upload Event Picture</h2>
                            </div>
                           
                           <div class="row">
                           <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Attachments <span
                                                    class="requiredFields_label">*</span></label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify" multiple />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                           </div>
                           </div>
                            <div class="form-navigation canvasFooterContainer CustomModal_footer">
                                <button type="button"
                                    class="backButton">Back</button>

                                    <div class="eventSubmit_container">
                                    <div class="form-group">
                                            <div class="form-check checkWithLabel">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Save Draft
                                                </label>
                                            </div>

                                        </div>
                                <button type="submit"
                                    class="submitButton canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- add event modal end-->

<!-- Edit source code modal-->
<div id="EditHubEvent" class="modal customwizard_formStyle sm_modalCustom fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="" method="post" id="wizardForm3">
            <div class="modal-content">
                <div class="ModalheaderArea">
                    <h5 class="mb-4">Edit Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="wizard customstepWizard">
                        <div class="step-indicator">
                            <div class="step-line active" id="stepLine1Edit"></div>
                            <div class="step-line" id="stepLine2Edit"></div>
                            <div class="step-line" id="stepLine3Edit"></div>
                        </div>

                        <!-- Step 1 -->
                        <div class="step" id="step1Edit">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="carbon:ibm-event-automation"></iconify-icon>
                                    </div>
                                    <h1>What's your event about?</h1>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Event Title</label>
                                            <input class="form-control" type="text" id="eventTitleEdit">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Event Organizer</label>
                                            <input class="form-control" type="text" id="eventOrganizerEdit" value="Graysons Properties">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number</label>
                                            <input class="form-control" type="text" id="contactNumberEdit">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Event Type</label>
                                            <input class="form-control" type="text" id="eventTypeEdit">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label>Remarks</label>
                                            </div>
                                            <textarea class="form-control" rows="4" placeholder="Write here..." id="remarksEdit"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-navigation stepnavigation_first canvasFooterContainer CustomModal_footer">
                                <button type="button" class="backButton canvascancel_button commonCanvas_buttonFooter" style="display: none;">Back</button>
                                <button type="button" class="nextButton canvasSubmit_button commonCanvas_buttonFooter">Next</button>
                                <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter" style="display: none;">Submit</button>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step" id="step2Edit" style="display: none;">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="mynaui:pin"></iconify-icon>
                                    </div>
                                    <h1>When and where will it take place?</h1>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group inputwith_Icon">
                                            <label class="form-label">Start Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text" id="startDateEdit" placeholder="Select Date" readonly>
                                            <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group inputwith_Icon">
                                            <label class="form-label">End Date</label>
                                            <input class="form-control customdataPicker flatpickr-input" type="text" id="endDateEdit" placeholder="Select Date" readonly>
                                            <iconify-icon icon="fluent:calendar-ltr-32-regular"></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group inputwith_Icon">
                                            <label class="form-label">Start Time</label>
                                            <div class="form-group form-icon bookingtimeinp">
                                                <input type="text" class="form-control time__pickers" id="startTimeEdit" placeholder="Select Time" required readonly>
                                                <iconify-icon icon="hugeicons:time-quarter"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group inputwith_Icon">
                                            <label class="form-label">Event Location</label>
                                            <input class="form-control" type="text" id="eventLocationEdit" placeholder="" readonly>
                                            <iconify-icon icon="ep:location"></iconify-icon>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label>Additional Notes</label>
                                            </div>
                                            <textarea class="form-control" rows="4" placeholder="Write here..." id="additionalNotesEdit"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-navigation canvasFooterContainer CustomModal_footer">
                                <button type="button" class="backButton">Back</button>
                                <button type="button" class="nextButton canvasSubmit_button commonCanvas_buttonFooter">Next</button>
                                <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter" style="display: none;">Submit</button>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step" id="step3Edit" style="display: none;">
                            <div class="wizardstep_innerContainer">
                                <div class="stepheadingheader">
                                    <div class="steptitleIcon">
                                        <iconify-icon icon="clarity:picture-line"></iconify-icon>
                                    </div>
                                    <h1>Please Upload Event Picture</h1>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="card-body">
                                                <label class="form-label">Upload Attachments <span class="requiredFields_label">*</span></label>
                                                <div class="documentuploadContainer">
                                                    <input type="file" class="Documentdropify" id="eventPictureEdit" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Attachments</label>
                                        <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                            data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                </div>

                                    <div class="col-md-12">
                                        <div class="form-group modalselect2">
                                            <label class="form-label">Mark Event As</label>
                                            <select id="eventStatusEdit" class="form-control select2">
                                                <option disabled selected value="">Please Select...</option>
                                                <option value="2" selected>Active</option>
                                                <option value="7">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-navigation canvasFooterContainer CustomModal_footer">
                                <button type="button" class="backButton">Back</button>
                                <button type="submit" class="submitButton canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- edit event modal end-->


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


<!-- wizard form step js start -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentStep = 1; // Track the current step

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.step').forEach((element) => {
                element.style.display = 'none';
            });
            // Show the current step
            document.getElementById('step' + step).style.display = 'block';
            // Update step indicator
            document.querySelectorAll('.step-line').forEach((element, index) => {
                if (index < step) {
                    element.classList.add('active');
                } else {
                    element.classList.remove('active');
                }
            });
            // Show/Hide navigation buttons based on the current step
            document.querySelectorAll('.backButton').forEach((btn) => {
                btn.style.display = (step > 1) ? 'inline-block' : 'none';
            });
            document.querySelectorAll('.nextButton').forEach((btn) => {
                btn.style.display = (step < 3) ? 'inline-block' : 'none';
            });
            document.querySelectorAll('.submitButton').forEach((btn) => {
                btn.style.display = (step === 3) ? 'inline-block' : 'none';
            });
        }

        function nextStep() {
            if (currentStep < 3) { // Ensure it does not exceed the number of steps
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) { // Ensure it does not go below the first step
                currentStep--;
                showStep(currentStep);
            }
        }

        // Initialize the form to show the first step
        showStep(currentStep);

        // Add event listeners to buttons
        document.querySelectorAll('.nextButton').forEach((btn) => {
            btn.addEventListener('click', nextStep);
        });
        document.querySelectorAll('.backButton').forEach((btn) => {
            btn.addEventListener('click', prevStep);
        });

        // Handle form submission
        document.querySelectorAll('.submitButton').forEach((btn) => {
            btn.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent actual form submission
                const eventName = document.querySelector('#step1 input').value; // Get the event name from the first step
                Swal.fire({
                    title: 'Success!',
                    text: `The event "${eventName}" has been created successfully.`,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload(); // Refresh the page
                    }
                });
            });
        });
    });
</script>
<!-- wizard form step js end -->

<!-- event Edit Wizard js start -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentStepEdit = 1; // Track the current step for edit form

        function showStepEdit(step) {
            // Hide all steps
            document.querySelectorAll('#wizardForm3 .step').forEach((element) => {
                element.style.display = 'none';
            });
            // Show the current step
            document.getElementById('step' + step + 'Edit').style.display = 'block';
            // Update step indicator
            document.querySelectorAll('#wizardForm3 .step-line').forEach((element, index) => {
                if (index < step) {
                    element.classList.add('active');
                } else {
                    element.classList.remove('active');
                }
            });
            // Show/Hide navigation buttons based on the current step
            document.querySelectorAll('#wizardForm3 .backButton').forEach((btn) => {
                btn.style.display = (step > 1) ? 'inline-block' : 'none';
            });
            document.querySelectorAll('#wizardForm3 .nextButton').forEach((btn) => {
                btn.style.display = (step < 3) ? 'inline-block' : 'none';
            });
            document.querySelectorAll('#wizardForm3 .submitButton').forEach((btn) => {
                btn.style.display = (step === 3) ? 'inline-block' : 'none';
            });
        }

        function nextStepEdit() {
            if (currentStepEdit < 3) { // Ensure it does not exceed the number of steps
                currentStepEdit++;
                showStepEdit(currentStepEdit);
            }
        }

        function prevStepEdit() {
            if (currentStepEdit > 1) { // Ensure it does not go below the first step
                currentStepEdit--;
                showStepEdit(currentStepEdit);
            }
        }

        // Initialize the form to show the first step
        showStepEdit(currentStepEdit);

        // Add event listeners to buttons
        document.querySelectorAll('#wizardForm3 .nextButton').forEach((btn) => {
            btn.addEventListener('click', nextStepEdit);
        });
        document.querySelectorAll('#wizardForm3 .backButton').forEach((btn) => {
            btn.addEventListener('click', prevStepEdit);
        });

        // Handle form submission
        document.querySelectorAll('#wizardForm3 .submitButton').forEach((btn) => {
            btn.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent actual form submission
                const eventName = document.getElementById('eventTitleEdit').value; // Get the event name
                Swal.fire({
                    title: 'Success!',
                    text: `The event "${eventName}" edited successfully`,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.reload(); // Refresh the page after the alert is closed
                });
            });
        });
    });
</script>
<!-- event Edit Wizard js end -->


<!-- multiple video File Uploader js -->
<!-- NOTE: Dont add this code in footer section -->
<!-- filepond for videos uploader -->
<link href="dist/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="dist/customplugins/file-uploader/filepond.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="dist/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="dist/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepond video js -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script>
<!-- filepond video js end -->

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*'],
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->
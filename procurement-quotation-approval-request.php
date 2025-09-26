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



.hk-wrapper[data-layout="vertical"][data-layout-style="default"] .canvasFooterContainer {
    position: fixed !important;
    width: 100% !important;
    height: 70px;
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
                            <a class="contactapp-title link-dark" href="##" role="button">
                                <h1>Procurement Request Details</h1>
                            </a>

                        </div>
                        <div class=" ms-3">
                            <a href="procurement-request.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                            </a>

                        </div>
                    </div>
                    <div class="contact-options-wrap">
                      
                            <div class="enquiryRight_header_data TaskAction_wrapper ">
                                <div class="enquiryDate">
                                    <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                                    <div class="duedatelabel">Request Date : </div> 15 March, 2025 15:20
                                </div>
                               <!-- <a href="procurement-shortlisted-supplier-add.php">
                                    <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button">
                                        <iconify-icon icon="lets-icons:add-round">
                                        </iconify-icon> Add Shortlisted Supplier
                                    </button>
                               </a> 
                               
                                    <button class="btn btn-sm addiconiButton SendForConfirmationBtn btn-primary ms-3" type="button" id="SendConfirmation">
                                    <iconify-icon icon="mynaui:send"></iconify-icon>
                                    Send For Confirmation
                                    </button> -->
                               
                                <!-- <div class="enquiryID_container">
                                    <div class="EnquiryID">Approval Status</div>
                                    <div class="IDButton approval_status_update">
                                        <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn">Approval Pending</button>
                                    </div>
                                </div> -->
                                <div class="ActionBtn generate-invoice-btn p-0" id="generateInvoiceBtn">
                                    
                                <!-- <button class="CreateCst_button" >
                                        <iconify-icon icon="icon-park-outline:check"></iconify-icon>
                                        Confirm
                                    </button> -->
                                    <button class="ApproveButton"  id="ConfirmBtn">
                                        <iconify-icon icon="icon-park-outline:check"></iconify-icon>
                                        Approved
                                    </button>
                                </div>
                                

                            </div>
                        <a id="refreshButton"
                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block "
                            href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                            data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                        data-feather="refresh-cw"></i></span></span></a>
                        <div class="v-separator d-lg-block "></div>

                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title=""
                            data-bs-original-title="Collapse">
                            <span class="icon">
                                <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                            </span>
                        </a>

                    </div>
                    <div class=" sustomdividerLedtArrow">

                    </div>
                </header>

                <form action="view-contract-details.php" method="">
                    <div class="contact-body">
                        <div class="fullwidthDesktopTabs MobileScrollShow " id="nopaddingTop">
                            <button class="scroll-btn prev" type="button">
                                <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                            </button>

                            <ul
                                class="nav nav-tabs nav-line nav-icon autoloadTabs fullwidthCustom_tabsUL nav-light">

                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#Details">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Request Details</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#shortlistedSuppliers">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Shortlisted Suppliers</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#AllNotes">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">All Notes</span>

                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#History">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Activity Log </span>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <button class="scroll-btn next" type="button">
                                <iconify-icon icon="tabler:arrow-right"></iconify-icon>
                            </button>

                        </div>
                        <div class="nicescroll-bar">

                            <!-- add new content here start -->
                            <div class="post-list propertyTabContent">

                                <div class="tab-content tabContent_hiddenStyle nobtPadding">
                                    <div class="tab-pane fade show active" id="Details">

                                        <div class="fullwidthTabInner_content_container">
                                            <div class="card card-border mb-lg-4 mb-3">
                                                <div class="card-header card-header-action">
                                                    <div class="media align-items-center">
                                                        <div class="media-head me-2">
                                                            <div class="JobIdIcon">
                                                                <iconify-icon icon="hugeicons:job-link">
                                                                </iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="fw-medium text-dark">Request ID</div>
                                                            <div class="fs-7"><a
                                                                    href="#">GPPR013</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="cardRightDetail_boxContainer">
                                                        <div class="flexcheckColumn">
                                                            <span
                                                                class="badge rounded-pill bg-outline-info">New Request</span>
                                                            <!-- <span class="badge rounded-pill bg-outline-warning">Pending</span> -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-body custombodyPadding">
                                                    <div class="d-flex text-center inspectionpropert_details">
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Requester's Name</span>
                                                                <span 
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">James Smith</span></span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Email Address</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">jamessmith@gmail.com</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                               Contact No.</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">81567856942</span></span>
                                                            </div>
                                                        </div> -->
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Department</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">Lettings</span></span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                Request Date</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">15 March, 2025</span></span>
                                                            </div>
                                                        </div> -->
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                    Priority Level</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">High</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                   Due Date</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">25 March, 2025</span></span>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <div class="flex-1 border-end CustomFlex_style">
                                                            <div class="ticInfo_Item">
                                                                <span class="d-block TicketDetails_info_title">
                                                                   Approved By</span>
                                                                <span
                                                                    class="d-block text-capitalize ticketdetailinfo_data">
                                                                    <span
                                                                        class="badge badge-soft-success  my-1  me-2">Sarunas</span></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="contact-list-view">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6>Item Details</h6>
                                                    </div>
                                                    <div class="card-body RequestDetail">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="ReportData_fields ">
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Item Name :
                                                            </div>
                                                            <div class="userenuData">Notepad</div>
                                                        </div>
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Item Category
                                                                :</div>
                                                            <div class="userenuData">Stationary</div>
                                                        </div>
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Quantity Required :</div>
                                                            <div class="userenuData">10 Packs</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Estimated Budget :</div>
                                                            <div class="userenuData">$300</div>
                                                        </div>
                                                       
                                                        </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                            
                                                        <div class="OtherDetailsjob">
                                                            <h6 class="TitleSD">Item Description</h6>
                                                            <p class="valueSD">
                                                                A notepad is a versatile writing accessory designed for recording notes, making lists, brainstorming ideas, or jotting down quick reminders. Typically composed of multiple sheets of paper bound together, notepads are available in various sizes, styles, and formats to cater to different needs.
                                                            </p>
                                                        </div>
                                                        <div class="OtherDetailsjob">
                                                            <h6 class="TitleSD">Purpose/Justification</h6>
                                                            <p class="valueSD">
                                                            The notepad is requested to support daily administrative tasks, including note-taking during meetings, organizing to-do lists, recording important information, and brainstorming ideas. It will help enhance productivity by providing a convenient and accessible way to capture thoughts and details quickly. Additionally, it can serve as a backup for documenting critical information in situations where digital devices are unavailable or impractical. The notepad will also aid in maintaining organized records and improving focus during discussions.
                                                            </p>
                                                        </div>

                                                            </div>
                                                            <div class="col-lg-12">
                                                                <ul class="files">
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/notepad1.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Driver Photo </h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/notepad2.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Driver’s License</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/images.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Government ID Proof</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/images.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Government ID Proof</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/notepad1.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Driver Photo </h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/notepad2.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Driver’s License</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/images.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Government ID Proof</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                    <li class="file-box">
                                                                    <div class="file-top">  <img src="dist/img/newimages/images.png" alt=""> </div>
                                                                    <div class="file-bottom">
                                                                        <!-- <h6>Government ID Proof</h6> -->
                                                                        <p>2023/04/25, 12:00 PM</p>
                                                                    </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6>Technical Specifications</h6>
                                                    </div>
                                                    <div class="card-body RequestDetail">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="ReportData_fields ">
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Brand Preference :
                                                            </div>
                                                            <div class="userenuData">Classmate</div>
                                                        </div>
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Model/Part Number
                                                                :</div>
                                                            <div class="userenuData">0112365489</div>
                                                        </div>
                                                        <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Alternative Options :</div>
                                                            <div class="userenuData">N/A</div>
                                                        </div>

                                                      
                                                       
                                                        </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                            
                                                        <div class="OtherDetailsjob">
                                                            <h6 class="TitleSD">Technical Specifications</h6>
                                                            <p class="valueSD">
                                                                A notepad is a versatile writing accessory designed for recording notes, making lists, brainstorming ideas, or jotting down quick reminders. Typically composed of multiple sheets of paper bound together, notepads are available in various sizes, styles, and formats to cater to different needs.
                                                            </p>
                                                        </div>
                                                       

                                                            </div>
                                                         
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                               
                                                

                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="shortlistedSuppliers">
                                        <div class="fullwidthTabInner_content_container">
                                            <div class="contact-list-view">
                                            <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input selectAll"
                                                            type="checkbox" id="selectAll">
                                                        <label class="form-check-label" for="checkboxOutline1">
                                                        </label>
                                                    </div>
                                                </th>
                                               
                                                <th>Supplier Name</th>
                                                <th>Email Address</th>
                                                <th>Contact No.</th>
                                                <th>Item Requested</th>
                                                <th>Quantity Required</th>
                                                <th>Requestor Confirmation</th>
                                                <th>Director Approval</th>
                                                <th>Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input row-checkbox"
                                                            type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                        </label>
                                                    </div>
                                                </td>
                                               
                                                <td>Greesh Stationary</td>
                                                <td>greesh@gmail.com</td>
                                                <td>98653248967</td>
                                                <td>Notepads</td>
                                                <td>10 Packs</td>
                                                <td><span class="badge badge-soft-success">Confirmed</span></td>
                                                <td>
                                                    <span class="badge bg-outline-info pendingbadge badgecustomstyle">
                                                    <span class="badge-label">Approved</span>
                                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                                    </span>
                                                </td>
                                             
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Details" href="procurement-shortlisted-supplier-view.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" href="procurement-shortlisted-supplier-edit.php" aria-label="Edit Request Details" data-bs-original-title="Edit Supplier & Item Details">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input row-checkbox"
                                                            type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                        </label>
                                                    </div>
                                                </td>
                                               
                                                <td>James Stationary</td>
                                                <td>James@gmail.com</td>
                                                <td>98653248967</td>
                                                <td>Notepads</td>
                                                <td>10 Packs</td>
                                                <td><span class="badge badge-soft-success">Confirmed</span></td>
                                                <td>
                                                   
                                                </td>
                                             
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Details" href="procurement-shortlisted-supplier-view.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" href="procurement-shortlisted-supplier-edit.php" aria-label="Edit Request Details" data-bs-original-title="Edit Supplier & Item Details">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input row-checkbox"
                                                            type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                        </label>
                                                    </div>
                                                </td>
                                            
                                                <td>Kelly Stationary</td>
                                                <td>kelly@gmail.com</td>
                                                <td>98653248967</td>
                                                <td>Notepads</td>
                                                <td>10 Packs</td>
                                                <td></td>
                                                <td>
                                                   
                                                </td>
                                             
                                                <td>
                                                    <div class="d-flex align-items-center ActionDropdown">
                                                        <div class="d-flex">
                                                            <!-- View Details Button -->
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Details" href="procurement-shortlisted-supplier-view.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                            <circle cx="12" cy="12" r="3"></circle>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" href="procurement-shortlisted-supplier-edit.php" aria-label="Edit Request Details" data-bs-original-title="Edit Supplier & Item Details">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            
                                        </tbody>
                                    </table>  

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="History">
                                        <div class="fullwidthTabInner_content_container contract_status_Contrair">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- <div class="tabinnertitle_withRightAction">
                                                        <h2 class="tabinnerTitle">Activity </h2>
                                                        <div class="cntrt_detailright_header_action">

                                                            <button type="button"
                                                                class="AddNoteRightact_button rightactionbutton_cmnStyle"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#AddNote_modal">
                                                                <iconify-icon icon="fluent:note-add-24-regular">
                                                                </iconify-icon> Add Note
                                                            </button>
                                                        </div>
                                                    </div> -->
                                                    <div class="contractHistory_data">
                                                        <div class="contact-body">
                                                            <div class="contact-list-view">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h6>Activity Log</h6>
                                                                </div>
                                                                <div class="card-body">
                                                                    <table
                                                                            class="table common-datatable nowrap w-100 tbWithout_action">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>User Name</th>
                                                                                    <th>Activity Date & Time</th>
                                                                                    <th>Activity</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>

                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Morgan
                                                                                                        Freeman</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>18/06/2024 12:00</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Tenant <a href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>
                                                                                                            changed their
                                                                                                            Bank Account
                                                                                                            Number.</p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Huma
                                                                                                        Therman</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>15/03/2023 16:40</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to change
                                                                                                            Guranter home
                                                                                                            Address for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Charlie
                                                                                                        Chaplin</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>10/02/2024 15:15</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to change
                                                                                                            Guranter home
                                                                                                            Address for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Emma
                                                                                                        Watson</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>25/08/2023 09:30</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to change
                                                                                                            Guranter home
                                                                                                            Address for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Robert
                                                                                                        Downey Jr.</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                
                                                                                    <td>30/01/2024 14:45</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to change
                                                                                                            Guranter home
                                                                                                            Address for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Scarlett
                                                                                                        Johansson</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>22/11/2023 11:10</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to change
                                                                                                            Guranter home
                                                                                                            Address for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Chris
                                                                                                        Hemsworth</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                
                                                                                    <td>08/09/2024 13:50</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to
                                                                                                            correct Address
                                                                                                            Details for <a
                                                                                                                href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="view-user-details.php">
                                                                                            <div
                                                                                                class="media align-items-center">
                                                                                                <div class="media-head me-2">
                                                                                                    <div
                                                                                                        class="avatar avatar-xs avatar-rounded">
                                                                                                        <img src="dist/img/newimages/users/userdummy.png"
                                                                                                            alt="user"
                                                                                                            class="avatar-img">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="media-body">
                                                                                                    <span
                                                                                                        class="d-block text-high-em">Jennifer
                                                                                                        Lawrence</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </td>
                                                                                    
                                                                                    <td>05/07/2023 17:20</td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="activity-list contractHistory_activity_data">
                                                                                            <div class="list-group-item">
                                                                                                <div class="media">

                                                                                                    <div class="media-body">
                                                                                                        <p>Request to update
                                                                                                            Phone Number for
                                                                                                            <a href="#"
                                                                                                                class="link-url"><u>Rohit
                                                                                                                    Jain</u></a>.
                                                                                                        </p>
                                                                                                        <div
                                                                                                            class="last-activity-time">
                                                                                                            Oct 15, 2021,
                                                                                                            12:34 PM</div>
                                                                                                    </div>
                                                                                                </div>
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

                                    <div class="tab-pane fade" id="AllNotes">
                                        <div class="contact-list-view">

                                            <div class="task-detail-body Contractstatusess_Notes">
                                                <div class="row">

                                                    <div class="contractNotes">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                            <div class="title title-lg mb-0"><span>All
                                                                    Notes</span></div>

                                                        </div>

                                                        <div class="comment-block">

                                                            <div class="card card-border note-block">
                                                                <div class="card-body">

                                                                    <div class="media align-items-center">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="noteAuthor_title">
                                                                                Martin Luther</div>
                                                                            <div class="NoteTiming">
                                                                                9 Apr, 20, 7:14 AM
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="NoteDescription">@<a href="#"
                                                                            class="fw-medium">Charlie
                                                                            Darvin</a> Tenant was
                                                                        very interested in the
                                                                        property, appreciating the
                                                                        layout and natural light.
                                                                        They need two bedrooms, a
                                                                        workspace, and a parking
                                                                        spot. They have a small dog
                                                                        and prefer to move in by the
                                                                        end of next month. Awaiting
                                                                        their decision by the end of
                                                                        the week.</p>
                                                                </div>
                                                            </div>
                                                            <div class="card card-border note-block ">
                                                                <div class="card-body">

                                                                    <div class="media align-items-center">
                                                                        <div class="media-head">
                                                                            <div
                                                                                class="avatar avatar-xs avatar-rounded">
                                                                                <img src="dist/img/newimages/users/userdummy.png"
                                                                                    alt="user" class="avatar-img">
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="noteAuthor_title">
                                                                                Katherine Jones
                                                                            </div>
                                                                            <div class="NoteTiming">
                                                                                8 Apr, 20, 5:30 PM
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="NoteDescription">@<a href="#"
                                                                            class="fw-medium">Martin
                                                                            Luther</a> Viscosity
                                                                        ratio for "Appear view" link
                                                                        text is 3.7:1 which is less
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="separator separator-light">
                                                            </div>

                                                            <div class="AddNoteEnuSection" id="AddNote">
                                                                <div class="form-group">
                                                                    <label class="form-label">Note
                                                                        header</label>
                                                                    <input class="form-control" type="text" name=""
                                                                        placeholder="Add Title">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label">Add
                                                                        Notes</label>
                                                                    <textarea class="form-control"
                                                                        rows="5"></textarea>
                                                                </div>
                                                                <div class="NoteAction_container">
                                                                    <div class="sendEnquiryNote_container">
                                                                        <div class="addto_todolist">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="customCheckList-todo">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Add to ToDo List
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="sendEnquiryNote_container setAlert_container">
                                                                        <div class="addto_todolist">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input setAlertInput">
                                                                                <label class="form-check-label"
                                                                                    for="customCheckList-todo">
                                                                                    Set As Alert
                                                                                    <span
                                                                                        class="done-strikethrough"></span>
                                                                                </label>
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
                                                                                <select class="form-control select2"
                                                                                    id="selectDepartment">
                                                                                    <option disabled selected
                                                                                        value="">
                                                                                        Please
                                                                                        Select...
                                                                                    </option>
                                                                                    <option
                                                                                        value="Account Department">
                                                                                        Account
                                                                                        Department
                                                                                    </option>
                                                                                    <option value="HR Department">
                                                                                        HR
                                                                                        Department
                                                                                    </option>
                                                                                    <option
                                                                                        value="Contract Department">
                                                                                        Contract
                                                                                        Department
                                                                                    </option>
                                                                                    <option
                                                                                        value="Lettings Department">
                                                                                        Lettings
                                                                                        Department
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Select
                                                                                    Users</label>
                                                                                <select class="form-control select2"
                                                                                    id="selectUser">
                                                                                    <option disabled selected
                                                                                        value="">
                                                                                        Please
                                                                                        Select...
                                                                                    </option>
                                                                                    <option value="John Doe">
                                                                                        John Doe
                                                                                    </option>
                                                                                    <option value="Jane Smith">
                                                                                        Jane Smith
                                                                                    </option>
                                                                                    <option value="Alice Johnson">
                                                                                        Alice
                                                                                        Johnson
                                                                                    </option>
                                                                                    <option value="Robert Brown">
                                                                                        Robert Brown
                                                                                    </option>
                                                                                    <option
                                                                                        value="Michael Williams">
                                                                                        Michael
                                                                                        Williams
                                                                                    </option>
                                                                                    <option value="Emily Davis">
                                                                                        Emily Davis
                                                                                    </option>
                                                                                    <option value="David Wilson">
                                                                                        David Wilson
                                                                                    </option>
                                                                                    <option value="Sophia Martinez">
                                                                                        Sophia
                                                                                        Martinez
                                                                                    </option>
                                                                                    <option value="James Anderson">
                                                                                        James
                                                                                        Anderson
                                                                                    </option>
                                                                                    <option value="Olivia Taylor">
                                                                                        Olivia
                                                                                        Taylor
                                                                                    </option>
                                                                                    <option value="Chris Thomas">
                                                                                        Chris Thomas
                                                                                    </option>
                                                                                    <option value="Emma Harris">
                                                                                        Emma Harris
                                                                                    </option>
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
                                                                <div class="submitnote_container">
                                                                    <button type="button"
                                                                        class="sendBtn_common_main addenun_noteBtn send-note">Send
                                                                        Note</button>
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
</div>
<!-- /Page Body -->

</div>
<!-- Modal Structure -->
<div class="modal modal_schedule fade" id="manageScheduleModal" tabindex="-1" aria-labelledby="manageScheduleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="manageScheduleModalLabel">Request for a quote <span
                    class="subparaVen">Please select the contractor for quote</span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Form for Adding Time Schedule -->
            <form id="scheduleForm" action="#">
                <div class="col-lg-12">
                    <ul class="user-list">
                        <li class="user-item" data-user="1">
                            <div class="user-info">
                                <div class="user-avatar">MB</div>
                                <div class="user-details">
                                    <span class="name">Mary Baker</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="2">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #FFD700;">KS</div>
                                <div class="user-details">
                                    <span class="name">Kelly Smith</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="3">
                            <div class="user-info">
                                <div class="user-avatar">MB</div>
                                <div class="user-details">
                                    <span class="name">Mary Baker</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="4">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #D32F2F;">SG</div>
                                <div class="user-details">
                                    <span class="name">Sarah Green</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="5">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #D32F2F;">SG</div>
                                <div class="user-details">
                                    <span class="name">Sarah Green</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="6">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #1976D2;">DJ</div>
                                <div class="user-details">
                                    <span class="name">David Johnson</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>


                        <li class="user-item" data-user="4">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #D32F2F;">SG</div>
                                <div class="user-details">
                                    <span class="name">Sarah Green</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="5">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #D32F2F;">SG</div>
                                <div class="user-details">
                                    <span class="name">Sarah Green</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                        <li class="user-item" data-user="6">
                            <div class="user-info">
                                <div class="user-avatar" style="background-color: #1976D2;">DJ</div>
                                <div class="user-details">
                                    <span class="name">David Johnson</span>
                                    <span class="task">Door Repair</span>
                                </div>
                            </div>
                            <label>
                                <input type="checkbox" class="user-checkbox">
                                <span class="custom-checkbox"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="modal">Close</button>
            <button type="button" class="canvasSubmit_button commonCanvas_buttonFooter" id="saveScheduleBtn">
                Save & Send
            </button>
        </div>
    </div>
</div>
</div>



<?php include('footer.php') ?>

<!-- input lenthy content show js -->
<script>
$(document).ready(function () {
    // Initialize Bootstrap Tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    // Show input value content in tooltip on view button click
    $('.view-btn').on('mouseenter', function () {
        var inputValue = $(this).siblings('.refuge-collection-input').val();
        $(this).attr('data-bs-original-title', inputValue).tooltip('show');
    });
});
</script>
<!-- input lenthy content show js end-->

<!-- tabs scroll js start-->
<script>
$(document).ready(function () {
    $('.next').click(function () {
        $('.nav-tabs').animate({
            scrollLeft: '+=100'
        }, 300);
    });
    $('.prev').click(function () {
        $('.nav-tabs').animate({
            scrollLeft: '-=100'
        }, 300);
    });
});
</script>
<!-- tabs scroll js end-->

<!-- button sybmit loader js start -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btnContinueProcess').forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default form submission or link redirection
            // Show loading dots
            button.classList.add('btn-loading');
            button.insertAdjacentHTML('beforeend', `
    <div class="loading-dots">
        <span></span><span></span><span></span>
    </div>
    `);
        });
    });
});
</script>
<!-- button sybmit loader js end -->

<!-- --------------------------------------------------------- 
assign note task to department from the left side under note js Functionality to 
hide the assign selection option  start
-------------------------------------------------------->

<script>
$(document).ready(function () {
    // Toggle the visibility of Showing_departmentand_users based on the checkbox
    $('#customCheckList-todo').change(function () {
        if ($(this).is(':checked')) {
            $('.Showing_departmentand_users').slideDown(); // Show the section
        } else {
            $('.Showing_departmentand_users').slideUp(); // Hide the section
        }
    });
    // Handle the Send Note button click
    $('#sendBtn2').click(function () {
        var selectedDepartment = $('#selectDepartment').val();
        var selectedUser = $('#selectUser').val();
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
});
</script>

<!-- --------------------------------------------------------- 
assign note task to department from the left side under note js Functionality to 
hide the assign selection option  end
-------------------------------------------------------->

<!-- ****************************
Note set as alert confirmation popup js start
****************************** -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.querySelector('.setAlertInput');
    checkbox.addEventListener('change', function () {
        if (this.checked) {
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
                    checkbox.checked =
                        false; // Uncheck the checkbox if the user cancels
                }
            });
        }
    });
});
</script>
<!-- ****************************
Note set as alert confirmation popup js end
****************************** -->

<!-- status change table js -->
<script>
$(document).ready(function () {
    // Initialize the select2 plugin
    $('.statusSelect_withsearch').select2({
        placeholder: "Please Select..."
    });
    // Add a class to the select2-container when the dropdown is initialized
    $('.statusSelect_withsearch').on('select2:open', function () {
        // Use the unique ID of the select2 element to find its corresponding container
        const select2Id = $(this).attr('id');
        const select2Container = $(`#select2-${select2Id}-container`).parent();
        select2Container.addClass('custom-select2-container-class');
    });
});
</script>

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

<!-- report upload -->
<script>
// Register the plugins
FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType
);
// Turn all file input elements into ponds
FilePond.create(document.querySelector('#imageInput2'), {
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

<!-- request re quote js start -->
<script>
$(document).ready(function () {
    // Attach change event listener to all selects with the class
    $(".statusSelect_withsearch").on("change", function () {
        const selectedValue = $(this).val();
        // Check if the selected value is "Request Re Quote"
        if (selectedValue === "Request Re Quote") {
            // Show Bootstrap modal
            const modal = new bootstrap.Modal($("#requestReQuoteModal"));
            modal.show();
            // Reset the modal form on each open
            $("#reQuoteForm")[0].reset();
            // Handle form submission
            $("#submitQuote").off("click").on("click", function () {
                const title = $("#quoteTitle").val().trim();
                const message = $("#quoteMessage").val().trim();
                if (title && message) {
                    alert(`Title: ${title}\nMessage: ${message}`);
                    modal.hide(); // Hide modal after form submission
                } else {
                    alert("Please fill in both fields before submitting.");
                }
            });
        }
    });
});
</script>
<!-- request re quote js start -->

<!-- re Quote submitalrt message -->
<script>
$(document).ready(function () {
    // Handle Submit button click
    $("#requotemsgSend").on("click", function (e) {
        e.preventDefault(); // Prevent the default form submission
        // Validate the form fields (optional)
        const title = $("#quoteTitle").val().trim();
        const message = $("#quoteMessage").val().trim();
        if (title && message) {
            // Close the modal
            $("#requestReQuoteModal").modal("hide");
            // Show SweetAlert2 confirmation with a custom class on the OK button
            Swal.fire({
                html: `
                <div style="text-align: center;">
                    <div class="swalalert_custom_icon">
                        <img src="dist/img/newimages/successgif.gif" alt="">
                        
                    </div>
                    <h2 class="Swal_CustomTitle">Re Quotation Request Sent</h2>
                    <p>Your request has been sent successfully!</p>
                </div>`,
                confirmButtonText: "Close",
                timer: 3000,
                timerProgressBar: true,
                customClass: {
                    confirmButton: "my-ok-button" // Add your custom class here
                },
            });
        } else {
            // Show an error alert if fields are empty
            Swal.fire({
                html: `
                <div style="text-align: center;">
                    <div class="swalalert_custom_icon">
                        <img src="dist/img/newimages/errorgif3.gif" alt="">
                    </div>
                    <h2 class="Swal_CustomTitle">Form Incomplete</h2>
                    <p>Please fill in both the title and message fields before submitting.</p>
                </div>`,
                confirmButtonText: "Close",
                timer: 3000,
                timerProgressBar: true,
                customClass: {
                    confirmButton: "my-ok-button" // Add the same or a different custom class
                },
            });
        }
    });
});
</script>
<!-- end -->
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<script>
$(document).ready(function () {
    $('.user-item').on('click', function (e) {
        // Ignore clicks directly on the checkbox
        if (!$(e.target).is('.user-checkbox')) {
            const checkbox = $(this).find('.user-checkbox');
            checkbox.prop('checked', !checkbox.prop('checked'));
        }
        $(this).toggleClass('checked', $(this).find('.user-checkbox').prop('checked'));
    });
});
</script>
<script>
document.getElementById('saveScheduleBtn').addEventListener('click', function () {
    Swal.fire({
        icon: 'success',
        title: 'Quote Request Sent Successfully',
        text: 'The quote request has been sent successfully to the selected contractors.',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            // Dismiss the modal
            $('#manageScheduleModal').modal('hide');
        }
    });
});
</script>

<!-- <script>
     $(document).ready(function () {
        // Initialize Select2 with a placeholder
        $('#visibility').select2({
            placeholder: 'Select visibility',
            allowClear: true // Allows clearing the selection
        });
    });
</script> -->




<!-- table check functionality -->
<script>
    $(document).ready(function() {
        $('.selectAll').click(function() {
            $('.row-checkbox').prop('checked', this.checked);
            toggleGenerateInvoiceButton();
        });
        $('.row-checkbox').change(function() {
            if (!this.checked) {
                $('.selectAll').prop('checked', false);
            }
            if ($('.row-checkbox:checked').length === $('.row-checkbox').length) {
                $('.selectAll').prop('checked', true);
            }
            toggleGenerateInvoiceButton();
        });

        function toggleGenerateInvoiceButton() {
            if ($('.row-checkbox:checked').length > 0) {
                $('#generateInvoiceBtn').show().css("display", "flex");
            } else {
                $('#generateInvoiceBtn').hide();
            }
        }
      
    });
</script>
<script>
    document.getElementById('ConfirmBtn').addEventListener('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Approved Successfully!',
            text: 'The selected supplier has been approvedd for the purchase of the item.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6'
        });
    });
</script>
<!-- <script>
    document.getElementById("SendConfirmation").addEventListener("click", function () {
        Swal.fire({
            icon: "success",
            title: "Request Sent Successfully!",
            text: "The request has been sent to the requestor and department director for confirmation and approval.",
            confirmButtonText: "OK",
            confirmButtonColor: "#3085d6"
        }).then(() => {
            // Disable the button after the alert
            document.getElementById("SendConfirmation").disabled = true;
        });
    });
</script> -->
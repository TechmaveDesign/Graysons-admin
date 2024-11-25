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

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  mb-0">
                                    <li class="breadcrumb-item"><a href="merchants.php">
                                            <h4>Merchant</h4>
                                        </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Merchant Details</li>
                                </ol>
                            </nav>
                            <div class=" ms-3">
                                <a href="merchants.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="##">Import</a>
                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="##" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class=" sustomdividerLedtArrow"></div>
                    </header>

                    <form action="merchant-details.php" method="post">
                        <div class="contact-body">
                            <div class="fullwidthDesktopTabs MobileScrollShow">
                                <button class="scroll-btn prev" type="button">
                                    <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                </button>

                                <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#MerchantDetails">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Merchant Details</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Offers">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Offers</span>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#offices">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">Merchant Offices Locations</span>

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

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="MerchantDetails">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id=""
                                                                        value="Graysons Properties">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Email
                                                                        Address</label>
                                                                    <input type="email" class="form-control" id=""
                                                                        value="Graysonsltd@gmail.com">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Phone
                                                                        Number</label>
                                                                    <input type="phone" class="form-control" id=""
                                                                        value="+202 - 89867586787">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Website URL</label>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <iconify-icon icon="streamline:web">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <input type="text" class="form-control">

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Facebook
                                                                        URL</label>
                                                                    <div class="input-group mb-3 facebookinp">
                                                                        <span class="input-group-text">
                                                                            <iconify-icon icon="uit:facebook-f">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <input type="text" class="form-control">

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Twitter URL</label>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <iconify-icon icon="pajamas:twitter">
                                                                            </iconify-icon>
                                                                        </span>
                                                                        <input type="text" class="form-control">

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Company
                                                                        Registration No</label>
                                                                    <input type="text" class="form-control numeric-only"
                                                                        id="" value="9089786787">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Upload Banner
                                                                        Image</label>

                                                                    <div class="documentuploadContainer">
                                                                        <input type="file" class="Documentdropify"
                                                                            data-default-file="dist/img/newimages/logo-dark.png" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="savechangesformContainer">
                                                <button type="submit" class="buttonInfOUpdate">
                                                    <iconify-icon icon="fluent:save-32-regular">
                                                    </iconify-icon>
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Offers">
                                            <div class="fullwidthTabInner_content_container">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="docFilterContainer">
                                                            <div class="docfilterbutton">
                                                                <h2 class="tabinnerTitle">Merchant Offers </h2>
                                                                <div class="RightTabinr_container">

                                                                    <button
                                                                        class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                        type="button" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#AddOfferModal"
                                                                        aria-controls="offcanvasExample">
                                                                        <iconify-icon icon="lets-icons:add-round">
                                                                        </iconify-icon> Add New Offer
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Title</th>
                                                                        <th>Start Date</th>
                                                                        <th>End Date</th>
                                                                        <th>Redemptions</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Spring Sale - 10% off</td>
                                                                        <td>01, March 2024</td>
                                                                        <td>31, March 2024</td>
                                                                        <td>GSP897</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">
                                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#EditOfferModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <iconify-icon
                                                                                                icon="fluent:edit-16-regular">
                                                                                            </iconify-icon>
                                                                                        </span>
                                                                                    </a>
                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#offerDetailModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="feather feather-eye">
                                                                                                    <path
                                                                                                        d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                                    </path>
                                                                                                    <circle cx="12"
                                                                                                        cy="12" r="3">
                                                                                                    </circle>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </span>
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

                                        <div class="tab-pane fade" id="offices">
                                            <div class="fullwidthTabInner_content_container">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="docFilterContainer">
                                                            <div class="docfilterbutton">
                                                                <h2 class="tabinnerTitle">Merchant Offices </h2>
                                                                <div class="RightTabinr_container">

                                                                    <button
                                                                        class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3"
                                                                        type="button" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#AddlocationModal"
                                                                        aria-controls="offcanvasExample">
                                                                        <iconify-icon icon="lets-icons:add-round">
                                                                        </iconify-icon> Add New Location
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="contact-list-view">

                                                            <table class="table common-datatable nowrap w-100 ">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Address Line 1</th>
                                                                        <th>Address Line 2</th>
                                                                        <th>Address Line 3</th>
                                                                        <th>City</th>
                                                                        <th>County</th>
                                                                        <th>Postcode</th>
                                                                        <th>Phone</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>West One</td>
                                                                        <td>Asama Court</td>
                                                                        <td>Newcastle Business Park</td>
                                                                        <td>Newcastle Upon Tyne</td>
                                                                        <td>Tyne & Wear</td>
                                                                        <td>NE4 7YD</td>
                                                                        <td>01912600680</td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex align-items-center ActionDropdown">
                                                                                <div class="d-flex">

                                                                                    <button type="button"
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                                        data-bs-toggle="offcanvas"
                                                                                        data-bs-target="#viewandeditlocationModal"
                                                                                        aria-controls="offcanvasExample">
                                                                                        <span class="icon">
                                                                                            <span class="feather-icon">
                                                                                                <iconify-icon
                                                                                                    icon="ant-design:eye-outlined">
                                                                                                </iconify-icon>
                                                                                            </span>
                                                                                    </button>
                                                                                    <button
                                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"><span
                                                                                            class="icon"><span
                                                                                                class="feather-icon"><iconify-icon icon="fluent:delete-32-regular" ></iconify-icon></span></span></button>

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

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Body -->

<!-- add offer offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddOfferModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ic:outline-local-offer" width="1.2em" height="1.2em"></iconify-icon>
            Add Offer
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
    <form class="" action="merchant-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Offer</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Offer Title</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Offer Title..">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Redemption Code</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Redemption Code..">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" placeholder="Select Time" required="" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                            <label>Description</label>
                                        </div>
                                        <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Banner Image</label>

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
<!-- add offer offcanvas modal end -->

<!-- Edit offer offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="EditOfferModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ic:outline-local-offer" width="1.2em" height="1.2em"></iconify-icon>
            Edit Offer
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
    <form class="" action="merchant-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">
                <div class="add-users-modal-body-table-header text-headline-6">Edit This Offer</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Offer Title</label>
                                        <input type="text" class="form-control" id="" value="Spring Sale - 10% off"
                                            placeholder="Enter Offer Title..">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Redemption Code</label>
                                        <input type="text" class="form-control" id="" value="GSP897"
                                            placeholder="Enter Redemption Code..">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Start Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="01, March 2024" placeholder="Select Date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">Start Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" value="5:16 PM" placeholder="Select Time" required=""
                                                readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">End Date</label>
                                        <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                            value="30, May 2024" placeholder="Select Date" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Time Picker Input Field -->

                                    <div class="form-group">
                                        <label class="form-label">End Time</label>
                                        <div class="form-group form-icon bookingtimeinp">
                                            <input type="text" name="time" value="" class="form-control time__pickers"
                                                id="timepicker" value="3:30 PM" placeholder="Select Time" required=""
                                                readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label>Description</label>
                                        </div>
                                        <textarea class="form-control" rows="4"
                                            placeholder="Write here...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, voluptate illo. Suscipit quaerat non ut maxime natus sit, eius facilis.</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <label class="form-label">Upload Banner Image</label>

                                            <div class="documentuploadContainer">
                                                <input type="file" class="Documentdropify"
                                                    data-default-file="dist/img/newimages/sale.jpg" />
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
<!-- Edit offer offcanvas modal end -->

<!--view offer modal start-->
<div class="offcanvas rightOffcanvas offcanvas-end" tabindex="-1" id="offerDetailModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="ic:outline-local-offer" width="1.2em" height="1.2em"></iconify-icon>
            Offer Details
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
                            <div class="fw-medium text-dark">Merchant</div>
                            <div class="fs-7">Graystones Developments Ltd</div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="MileageContainer_ghtF">
                <h4 class="">Banner images</h4>
                <div class="multiImageSlider  form-group">

                    <div class="card galleryImage">
                        <div class="card-body">
                            <a class="" data-fancybox="gallery" href="dist/img/newimages/sale.jpg">
                                <img src="dist/img/newimages/sale.jpg" alt="Image 1">
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <ul class="issueHistoryList eventMessageContent">

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="pajamas:title"></iconify-icon>Title :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage"> Winter Discount - 5% off</p>
                    </div>
                </li>

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon>Start Date & Time :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage">20/01/2021 14:57</p>
                    </div>
                </li class="flexListITem">

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="fluent-mdl2:date-time-2"></iconify-icon>End Date & Time :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage">20/01/2021 14:57</p>
                    </div>
                </li>

                <li class="flexListITem"><label for="message" class="form-label historyLabel">
                        <iconify-icon icon="ri:discount-percent-line"></iconify-icon>Redemption Code :
                    </label>

                    <div class="tipmePeriod">
                        <p class="dateofmileage"> GSP897</p>
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
<!-- view offer modal-->

<!-- add location offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="AddlocationModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:my-location-loop" width="1.2em" height="1.2em"></iconify-icon>
            Add Location
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
    <form class="" action="merchant-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New Location</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Address Line 1">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Address Line 2">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 3</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Address Line 3">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">City</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter City Name">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">County</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter County Name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Postcode</label>
                                        <input type="text" class="form-control" id="" value=""
                                            placeholder="Enter Postcode ">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id="" value=""
                                            placeholder="Enter Phone No..">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="offieOpeningTiming">
                        <h2 style="text-align:center;">
                            <iconify-icon icon="svg-spinners:clock"></iconify-icon> Office Time Schedule
                        </h2>

                        <table class="table scheduleTable table-bordered">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Open Time</th>
                                    <th>Close Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Daytd">Monday</td>
                                    <td><input type="text" name="monday-open" class="form-control time__pickers"
                                            id="monday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="monday-close" class="form-control time__pickers"
                                            id="monday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Tuesday</td>
                                    <td><input type="text" name="tuesday-open" class="form-control time__pickers"
                                            id="tuesday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="tuesday-close" class="form-control time__pickers"
                                            id="tuesday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Wednesday</td>
                                    <td><input type="text" name="wednesday-open" class="form-control time__pickers"
                                            id="wednesday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="wednesday-close" class="form-control time__pickers"
                                            id="wednesday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Thursday</td>
                                    <td><input type="text" name="thursday-open" class="form-control time__pickers"
                                            id="thursday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="thursday-close" class="form-control time__pickers"
                                            id="thursday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Friday</td>
                                    <td><input type="text" name="friday-open" class="form-control time__pickers"
                                            id="friday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="friday-close" class="form-control time__pickers"
                                            id="friday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Saturday</td>
                                    <td><input type="text" name="saturday-open" class="form-control time__pickers"
                                            id="saturday-open" placeholder="Select Time" required="" readonly=""></td>
                                    <td><input type="text" name="saturday-close" class="form-control time__pickers"
                                            id="saturday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Sunday</td>
                                    <td><input type="text" name="sunday-open" class="form-control time__pickers"
                                            id="sunday-open" placeholder="Select Time" readonly=""></td>
                                    <td><input type="text" name="sunday-close" class="form-control time__pickers"
                                            id="sunday-close" placeholder="Select Time" readonly=""></td>
                                </tr>
                            </tbody>
                        </table>
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </form>
</div>
<!-- add location offcanvas modal end -->

<!-- view location offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="viewandeditlocationModal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <iconify-icon icon="line-md:my-location-loop" width="1.2em" height="1.2em"></iconify-icon>
            View Details
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
    <form class="" action="merchant-details.php" method="POST">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Location And Opening Hours Details</div>
                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" id="" value="West One"
                                            placeholder="Enter Address Line 1">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" id="" value="Asama Court"
                                            placeholder="Enter Address Line 2">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Address Line 3</label>
                                        <input type="text" class="form-control" id="" value="Newcastle Business Park 	"
                                            placeholder="Enter Address Line 3">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">City</label>
                                        <input type="text" class="form-control" id="" value="Newcastle Upon Tyne"
                                            placeholder="Enter City Name">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">County</label>
                                        <input type="text" class="form-control" id="" value="Tyne & Wear"
                                            placeholder="Enter County Name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Postcode</label>
                                        <input type="text" class="form-control" id="" value="NE4 7YD"
                                            placeholder="Enter Postcode ">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id="" value="01912600680"
                                            placeholder="Enter Phone No..">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="offieOpeningTiming">
                        <div class="add-users-modal-body-table-header text-headline-6">
                            <iconify-icon icon="svg-spinners:clock"></iconify-icon> Office Time Schedule
                        </div>

                        <table class="table scheduleTable table-bordered">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Open Time</th>
                                    <th>Close Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Daytd">Monday</td>
                                    <td><input type="text" name="monday-open" class="form-control time__pickers"
                                            id="monday-open" value="09:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="monday-close" class="form-control time__pickers"
                                            id="monday-close" value="17:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Tuesday</td>
                                    <td><input type="text" name="tuesday-open" class="form-control time__pickers"
                                            id="tuesday-open" value="09:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="tuesday-close" class="form-control time__pickers"
                                            id="tuesday-close" value="17:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Wednesday</td>
                                    <td><input type="text" name="wednesday-open" class="form-control time__pickers"
                                            id="wednesday-open" value="09:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="wednesday-close" class="form-control time__pickers"
                                            id="wednesday-close" value="17:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Thursday</td>
                                    <td><input type="text" name="thursday-open" class="form-control time__pickers"
                                            id="thursday-open" value="09:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="thursday-close" class="form-control time__pickers"
                                            id="thursday-close" value="17:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Friday</td>
                                    <td><input type="text" name="friday-open" class="form-control time__pickers"
                                            id="friday-open" value="09:00" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="friday-close" class="form-control time__pickers"
                                            id="friday-close" value="16:30" placeholder="Select Time" required=""
                                            readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Saturday</td>
                                    <td><input type="text" name="saturday-open" class="form-control time__pickers"
                                            id="saturday-open" value="" placeholder="Select Time" required=""
                                            readonly=""></td>
                                    <td><input type="text" name="saturday-close" class="form-control time__pickers"
                                            id="saturday-close" placeholder="Select Time" required="" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="Daytd">Sunday</td>
                                    <td><input type="text" name="sunday-open" class="form-control time__pickers"
                                            id="sunday-open" value="" placeholder="Select Time" readonly=""></td>
                                    <td><input type="text" name="sunday-close" class="form-control time__pickers"
                                            id="sunday-close" placeholder="Select Time" readonly=""></td>
                                </tr>
                            </tbody>
                        </table>
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

        <div class="canvasFooterContainer">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save Details</button>
        </div>
    </form>
</div>
<!-- view location offcanvas modal end -->

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

<!-- merchant location Delete alert -->
<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This Location ?</h5><p class="sweetaleart_description">Deleting a Location will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete Location',
            cancelButtonText: 'No, Keep Location',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This Location has been deleted!</h5></div>',
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
<!-- merchant location Delete alert end-->
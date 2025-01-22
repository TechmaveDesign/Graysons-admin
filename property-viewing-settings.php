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
<?php include('headers/lettings-setting-header.php') ?>
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Property Viewing Settings</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                 <a href="application-form.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> 
                            </div>
                        </div>
                        <div class="contact-options-wrap">
                        <button id="AddInspectionTimings" class="btn btn-sm addiconiButton commonAddnewButton AddInspection_timings__property btn-primary ms-3" data-bs-toggle="offcanvas" data-bs-target="#addinventorymodal" aria-controls="offcanvasExample">
                                <iconify-icon icon="lets-icons:add-round"></iconify-icon> Add Inspection Times
                            </button>

                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->
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

                    </header>

                    

                    <div class="contact-body">
                        <div class="nicescroll-bar">
                        
                        <div class="contact-list-view">
                                            <table class="table common-datatable nowrap w-100 ">
                                                <thead>
                                                    <tr>

                                                        <th>Address </th>
                                                        <th>Area</th>
                                                        <th>Unit Type</th>
                                                        <th>Unit Name</th>
                                                        <th>Inspection Duration</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1 Harvest Close
                                                        </td>
                                                        <td>Sunderland</td>
                                                        <td>Flat 1</td>
                                                        <td>11</td>
                                                        <td>45 min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">

                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"
                                                                        href="property-details.php"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23 Rosewood Avenue</td>
                                                        <td>Bristol</td>
                                                        <td>Apartment 3B</td>
                                                        <td>8</td>
                                                        <td>1h 35min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17 Maple Street</td>
                                                        <td>Manchester</td>
                                                        <td>Flat 2A</td>
                                                        <td>5</td>
                                                        <td>25min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>42 Elm Street</td>
                                                        <td>Leeds</td>
                                                        <td>House 5C</td>
                                                        <td>12</td>
                                                        <td>60min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9 Oak Lane</td>
                                                        <td>Liverpool</td>
                                                        <td>Flat 5D</td>
                                                        <td>9</td>
                                                        <td>55min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>31 Willow Crescent</td>
                                                        <td>Newcastle</td>
                                                        <td>Apartment 2C</td>
                                                        <td>7</td>
                                                        <td>20min</td>
                                                        <td>
                                                            <div class="d-flex align-items-center ActionDropdown">
                                                                <div class="d-flex">
                                                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                        href="#" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#Editinventorymodal"
                                                                        aria-controls="offcanvasExample">
                                                                        <span class="icon">
                                                                            <iconify-icon icon="fluent:edit-16-regular">
                                                                            </iconify-icon>
                                                                        </span>
                                                                    </a>
                                                                    <a href="property-details.php"
                                                                        class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                                        data-bs-toggle="tooltip" data-placement="top"
                                                                        title=""
                                                                        data-bs-original-title="View Property Details"><span
                                                                            class="icon"><span class="feather-icon"><i
                                                                                    data-feather="eye"></i></span></span></a>
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

<!-- Add inspection timings Modal start -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addinventorymodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Inspection Timings
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
    <form class="" action="add-inspection-timings.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Property </label>
                                <select name="" id="" class="form-control select2">
                                    <option value="" selected disable readonly>
                                        Select an Option</option>
                                    <option value="23 St Bedes Terrace">23 St Bedes
                                        Terrace</option>
                                    <option value="6 Mowbray Close">6 Mowbray Close
                                    </option>
                                    <option value="9 Mowbray Close">9 Mowbray Close
                                    </option>
                                    <option value="45 Ormonde Street">45 Ormonde
                                        Street</option>
                                    <option value="43 Fordland Place">43 Fordland
                                        Place</option>
                                    <option value="1-4 Thornhill Crescent">1-4
                                        Thornhill Crescent</option>
                                    <option value="13 Glassey Terrace">13 Glassey
                                        Terrace</option>
                                    <option value="4 Glassey Terrace">4 Glassey
                                        Terrace</option>
                                    <option value="226-228 Hylton Road">226-228
                                        Hylton Road</option>
                                    <option value="55 Arbroath Road">55 Arbroath
                                        Road</option>
                                    <option value="61 Hall Farm Road">61 Hall Farm
                                        Road</option>
                                    <option value="27 Hall Farm Road">27 Hall Farm
                                        Road</option>
                                    <option value="27 Appleby Square">27 Appleby
                                        Square</option>
                                    <option value="16 Ardrossan Road">16 Ardrossan
                                        Road</option>
                                    <option value="1 Harvest Close">1 Harvest Close
                                    </option>
                                    <option value="19 Linacre Close">19 Linacre
                                        Close</option>
                                    <option value="7 The Leazes">7 The Leazes
                                    </option>
                                    <option value="3 Valiant Way">3 Valiant Way
                                    </option>
                                    <option value="26 Manor House">26 Manor House
                                    </option>
                                    <option value="57 Forsyth Road">57 Forsyth Road
                                    </option>
                                    <option value="35 Glenthorn Road">35 Glenthorn
                                        Road</option>
                                    <option value="23 Claremont Road">23 Claremont
                                        Road</option>
                                    <option value="125 Croydon Road">125 Croydon
                                        Road</option>
                                    <option value="131 Croydon Road">131 Croydon
                                        Road</option>
                                    <option value="1-7 Union Street">1-7 Union
                                        Street</option>
                                    <option value="1 Kingswood Drive">1 Kingswood
                                        Drive</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div id="UnitTimeContainer">
                                <div class="UnitTimeBox">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Property Unit Name</label>
                                                <select name="" class="form-control select2">
                                                    <option value="" selected disable readonly>Select an Option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Time Duration (in min)</label>
                                                <input type="text" name="time" value=""
                                                    class="form-control" id=""
                                                    placeholder="Time Duration" required="">
                                                <iconify-icon icon="lucide:clock-2" class="dateinput_icon">
                                                </iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Add more button -->
                        <div class="col-lg-12">
                            <div class="addMoreInven_btn">
                                <button type="button" class="btnaddMoreicon badge badge-soft-success"
                                    id="addMoreButton">
                                    <iconify-icon icon="material-symbols-light:library-add-outline"></iconify-icon> Add
                                    More
                                </button>
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
<!-- Add inspection timings modal end -->

<!-- Edit inspection timings offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="Editinventorymodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit Inspection Timings
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
    <form class="" action="add-inspection-timings.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Property </label>
                                <select name="" id="" class="form-control select2">
                                    <option value="" selected disable readonly>
                                        Select an Option</option>
                                    <option value="23 St Bedes Terrace">23 St Bedes
                                        Terrace</option>
                                    <option value="6 Mowbray Close">6 Mowbray Close
                                    </option>
                                    <option value="9 Mowbray Close">9 Mowbray Close
                                    </option>
                                    <option value="45 Ormonde Street">45 Ormonde
                                        Street</option>
                                    <option value="43 Fordland Place">43 Fordland
                                        Place</option>
                                    <option value="1-4 Thornhill Crescent">1-4
                                        Thornhill Crescent</option>
                                    <option value="13 Glassey Terrace">13 Glassey
                                        Terrace</option>
                                    <option value="4 Glassey Terrace">4 Glassey
                                        Terrace</option>
                                    <option value="226-228 Hylton Road">226-228
                                        Hylton Road</option>
                                    <option value="55 Arbroath Road">55 Arbroath
                                        Road</option>
                                    <option value="61 Hall Farm Road">61 Hall Farm
                                        Road</option>
                                    <option value="27 Hall Farm Road">27 Hall Farm
                                        Road</option>
                                    <option value="27 Appleby Square">27 Appleby
                                        Square</option>
                                    <option value="16 Ardrossan Road">16 Ardrossan
                                        Road</option>
                                    <option value="1 Harvest Close">1 Harvest Close
                                    </option>
                                    <option value="19 Linacre Close">19 Linacre
                                        Close</option>
                                    <option value="7 The Leazes">7 The Leazes
                                    </option>
                                    <option value="3 Valiant Way">3 Valiant Way
                                    </option>
                                    <option value="26 Manor House">26 Manor House
                                    </option>
                                    <option value="57 Forsyth Road">57 Forsyth Road
                                    </option>
                                    <option value="35 Glenthorn Road">35 Glenthorn
                                        Road</option>
                                    <option value="23 Claremont Road">23 Claremont
                                        Road</option>
                                    <option value="125 Croydon Road">125 Croydon
                                        Road</option>
                                    <option value="131 Croydon Road">131 Croydon
                                        Road</option>
                                    <option value="1-7 Union Street">1-7 Union
                                        Street</option>
                                    <option value="1 Kingswood Drive">1 Kingswood
                                        Drive</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div id="EditUnitTimeContainer">
                                <!-- Default UnitTimeBox 1 -->
                                <div class="UnitTimeBox" id="UnitTimeBox_1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Property Unit Name</label>
                                                <select name="" class="form-control select2">
                                                    <option value="" selected disable readonly>Select an Option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Time Duration (in min)</label>
                                                <input type="text" name="time" value="45"
                                                    class="form-control" placeholder="Time Duration"
                                                    required="" readonly="">
                                                <iconify-icon icon="lucide:clock-2" class="dateinput_icon">
                                                </iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger removeTime">
                                        <iconify-icon icon="fluent:delete-16-regular"></iconify-icon>
                                    </button>
                                </div>

                                <!-- Default UnitTimeBox 2 -->
                                <div class="UnitTimeBox" id="UnitTimeBox_2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Property Unit Name</label>
                                                <select name="" class="form-control select2">
                                                    <option value="" selected disable readonly>Select an Option</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Time Duration (in min)</label>
                                                <input type="text" name="time" value="60"
                                                    class="form-control " placeholder="Time Duration"
                                                    required="" readonly="">
                                                <iconify-icon icon="lucide:clock-2" class="dateinput_icon">
                                                </iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger removeTime">
                                        <iconify-icon icon="fluent:delete-16-regular"></iconify-icon>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Add more button -->
                        <div class="col-lg-12">
                            <div class="addMoreInven_btn">
                                <button type="button" class="btnaddMoreicon badge badge-soft-success"
                                    id="addEditMoreButton">
                                    <iconify-icon icon="material-symbols-light:library-add-outline"></iconify-icon> Add
                                    More
                                </button>
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
<!-- Edit inspection timings  modal end -->

<?php include('footer.php') ?>



<!-- schedule add button show only when schedule tab is active -->
<script>
    // for schedule inspection tab
    $(document).ready(function() {
        // Monitor changes for active class on the <li> element
        $('a[href="#ScheduleInspection"]').on('shown.bs.tab', function() {
            // Remove the 'hidden' class to show the button when the tab is active
            $("#scheduleInspectionBtn").removeClass("hidden");
            $("#AddInspectionTimings").addClass("hidden");
        });
        $('a[href="#ScheduleInspection"]').on('hidden.bs.tab', function() {
            // Add the 'hidden' class to hide the button when the tab is inactive
            $("#scheduleInspectionBtn").addClass("hidden");
            $("#AddInspectionTimings").addClass("hidden");
        });
    });
    // for schedule inspection tab end 
</script>

<script>
    // for Add timing Inspection Timings
    $(document).ready(function() {
        // Monitor changes for active class on the <li> element
        $('a[href="#AddTimings_inspections"]').on('shown.bs.tab', function() {
            // Remove the 'hidden' class to show the button when the tab is active
            $("#AddInspectionTimings").removeClass("hidden");
        });
        $('a[href="#AddTimings_inspections"]').on('hidden.bs.tab', function() {
            // Add the 'hidden' class to hide the button when the tab is inactive
            $("#AddInspectionTimings").addClass("hidden");
        });
    });
</script>
<!-- Add timing add button show only when schedule tab is active end-->


<!-- Add inspection timings js Start -->
<script>
    $(document).ready(function() {
        // Initialize Select2 for existing elements
        $(".select2").select2();
        // Initialize mdtimepicker for existing elements
        $(".time__pickers").mdtimepicker();
        // Add more UnitTimeBox
        $("#addMoreButton").click(function() {
            const newUnitTimeBox = `
            <div class="UnitTimeBox">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Property Unit Name</label>
                            <select name="" class="form-control select2">
                                <option value="" selected disable readonly>Select an Option</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Time Duration (in min)</label>
                            <input type="text" name="time" value="" class="form-control" placeholder="Time Duration" required="">
                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-danger removeTime">
                     <iconify-icon icon="fluent:delete-16-regular"></iconify-icon>
                </button>
            </div>`;
            // Append the new UnitTimeBox
            $("#UnitTimeContainer").append(newUnitTimeBox);
            // Reinitialize Select2 for new elements
            $(".select2").select2();
            // Reinitialize mdtimepicker for new elements
            $(".time__pickers").mdtimepicker();
        });
        // Remove UnitTimeBox
        $(document).on("click", ".removeTime", function() {
            $(this).closest(".UnitTimeBox").remove();
        });
    });
</script>
<!-- Add inspection timings js End -->

<!-- Edit inspection timings js start -->
<script>
    $(document).ready(function() {
        // Initialize Select2 for default and new elements
        $("#EditUnitTimeContainer .select2").select2();
        // Initialize mdtimepicker for default and new elements
        $("#EditUnitTimeContainer .time__pickers").mdtimepicker();
        // Add more UnitTimeBox for editing
        $("#addEditMoreButton").click(function() {
            // Generate a unique ID for the new UnitTimeBox
            const uniqueId = `UnitTimeBox_${Date.now()}`;
            const newUnitTimeBox = `
            <div class="UnitTimeBox" id="${uniqueId}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Property Unit Name</label>
                            <select name="" class="form-control select2">
                                <option value="" selected disable readonly>Select an Option</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Time Duration (in min)</label>
                            <input type="text" name="time" value="" class="form-control" placeholder=" Time Duration" required="">
                            <iconify-icon icon="lucide:clock-2" class="dateinput_icon"></iconify-icon>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-danger removeTime">
                      <iconify-icon icon="fluent:delete-16-regular"></iconify-icon>
                </button>
            </div>`;
            // Append the new UnitTimeBox
            $("#EditUnitTimeContainer").append(newUnitTimeBox);
            // Reinitialize Select2 for the new elements
            $(`#${uniqueId} .select2`).select2();
            // Reinitialize mdtimepicker for the new elements
            $(`#${uniqueId} .time__pickers`).mdtimepicker();
        });
        // Remove UnitTimeBox
        $(document).on("click", "#EditUnitTimeContainer .removeTime", function() {
            $(this).closest(".UnitTimeBox").remove();
        });
    });
</script>
<!-- Edit inspection timings js end -->


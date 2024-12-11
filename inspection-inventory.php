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
  <?php include('headers/checkin-checkout-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Inventories Templates</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
<!-- 
                                <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm commonAddnewButton btn-primary ms-3" data-bs-toggle="offcanvas"
                                data-bs-target="#addinventorymodal" aria-controls="offcanvasExample"><span><span
                                        class="icon"><span class="feather-icon">
                                            <iconify-icon icon="fluent:add-24-filled"></iconify-icon>
                                        </span></span><span class="btn-text">Add Inventory Template</span></span></button>

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

                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                             <th>Property</th>
                                             <th>Sub Unit</th>
                                             <th>Location</th>
                                             <th>Item Name</th>
                                            <th>No. of Items</th>
                                            <th>No. of Properties</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Westlands Dental Studio, Front Street, Lanchester"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>Apartment 3B</td>
                                           <td>Bedroom</td>
                                           <td>Tiles - Wall/Floor </td>
                                            <td>15</td>
                                            <td>12</td>
                                            <td>Checked - Functional</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Sunset Boulevard, Los Angeles, California"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>House 5C</td>
                                            <td>Kitchen</td>
                                            <td>WESTLANDS DENTAL STUDIO</td>
                                            <td>20</td>
                                            <td>18</td>
                                            <td>Checked - No Leaks</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Marvel Avenue, Brooklyn, New York"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>Flat 2A</td>
                                            <td>Kitchen</td>
                                            <td>Paint - Interior</td>
                                            <td>25</td>
                                            <td>22</td>
                                            <td>Checked - Working</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Oxford Street, London, UK"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>Apartment 2C</td>
                                            <td>Kitchen</td>
                                            <td>Light Fixture</td>
                                            <td>30</td>
                                            <td>28</td>
                                            <td>Checked - Working</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Forest Gump Road, Greenbow, Alabama"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>Flat 1</td>
                                            <td>Bathroom</td>
                                            <td>Faucet</td>
                                            <td>35</td>
                                            <td>32</td>
                                            <td>Checked - Working</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
                                        <td class="">
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Central Park West, New York, NY"></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>Flat 5D</td>
                                            <td>Living Room</td>
                                            <td>Doorknob</td>
                                            <td>40</td>
                                            <td>38</td>
                                            <td>Checked - Working</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View inventory Details"
                                                            href="view-inventory-details.php"><span class="icon"><span
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
    <!-- /Page Body -->
</div>

<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="addinventorymodal"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
        <iconify-icon icon="material-symbols:inventory"></iconify-icon>
            Add Inventory Template
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
    <form class="" action="inspection-inventory.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Property <span
                                                class="RequiredField_badge">*</span></label>
                                        <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="1141">Communal Area Inspection House 10</option>
                                            <option value="1147">Communal Area Inspection House 8</option>
                                            <option value="1151">Bedroom A, Apartment Apartment 2, City View @ Stepney
                                                Lane, Dulcie House, 11-13 Stepney Lane, Newcastle upon Tyne </option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Area</label>
                                                                    <select name="" id="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="Sunderland">Sunderland</option>
                                                                        <option value="Bedlington">Bedlington</option>
                                                                        <option value="Newcastle upon Tyne">Newcastle
                                                                            upon Tyne</option>
                                                                        <option value="Durham">Durham</option>
                                                                        <option value="Lanchester">Lanchester</option>
                                                                        <option value="Newcastle Upon Tyne ">Newcastle
                                                                            Upon Tyne </option>
                                                                        <option value="Ponteland">Ponteland</option>
                                                                        <option value="Newcastle Upon Tyne">Newcastle
                                                                            Upon Tyne</option>
                                                                        <option value="Jesmond">Jesmond</option>
                                                                        <option value="London">London</option>
                                                                        <option value="West One">West One</option>
                                                                        <option value="Newcastle">Newcastle</option>
                                                                    </select>

                                                                </div>

                                                            </div>
                        <div class="col-lg-12 original-column">
                        

                            <div class="adinventoryfields_container" id="originalInventoryContainer">
                                <div class="row inventoryRow">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Item Name</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">Description</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Middle" class="form-label">Location</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Middle" class="form-label">Quantity</label>
                                            <input type="number" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Email" class="form-label">Checks</label>
                                            <input type="email" class="form-control">
                                        </div>

                                    </div>
                                    <!-- <div class="col-auto">
                                        <div class="form-group">
                                            <label for="Name" class="form-label">&nbsp;</label>
                                            <div class="form-check checkWithLabel">
                                                <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                                <label class="form-check-label" for="gridCheck">
                                                    Full
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="Name" class="form-label">&nbsp;</label>
                                            <div class="form-check checkWithLabel">
                                                <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                                <label class="form-check-label" for="gridCheck">
                                                    Incremental
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="Name" class="form-label">&nbsp;</label>
                                            <div class="form-check checkWithLabel">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Shared
                                                </label>
                                            </div>

                                        </div>

                                    </div> -->

                                </div>
                            </div>

                        </div>

                        <!-- Add more button -->
<div class="col-lg-12">
    <div class="addMoreInven_btn">
        <button type="button" class="btnaddMoreicon badge badge-soft-success" id="addMoreButton">
            <iconify-icon icon="material-symbols-light:library-add-outline"></iconify-icon> Add More
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
<!-- add user offcanvas modal end -->

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

<!-- inventory Delete alert -->
<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This inventory ?</h5><p class="sweetaleart_description">Deleting a inventory will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete inventory',
            cancelButtonText: 'No, Keep inventory',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">This inventory has been deleted!</h5></div>',
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
<!-- inventory Delete alert end-->

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Add more button click event
    document.getElementById("addMoreButton").addEventListener("click", function() {
        // Clone the original inventory container
        var originalContainer = document.getElementById("originalInventoryContainer");
        var clonedContainer = originalContainer.cloneNode(true);
        
        // Clear inputs in the cloned container
        var clonedInputs = clonedContainer.querySelectorAll("input");
        clonedInputs.forEach(function(input) {
            input.value = "";
        });
        
        // Add delete button to the cloned container
        var deleteButton = document.createElement("button");
        deleteButton.type = "button";
        deleteButton.className = "btn badge badge-soft-danger delete-btn";
        
        // Container for delete text and icon
        var deleteContent = document.createElement("div");
        deleteContent.style.display = "flex";
        deleteContent.style.flexDirection = "column";
        deleteContent.style.alignItems = "center";
        
        // Add iconify-icon to the container
        var deleteIcon = document.createElement("iconify-icon");
        deleteIcon.setAttribute("icon", "fluent:delete-24-regular");
        deleteIcon.setAttribute("width", "1.2em");
        deleteIcon.setAttribute("height", "1.2em");
        deleteContent.appendChild(deleteIcon);
        
        // Add text to the container
        var deleteText = document.createElement("span");
        deleteText.textContent = "Delete";
        deleteContent.appendChild(deleteText);
        
        // Append delete content to delete button
        deleteButton.appendChild(deleteContent);
        
        deleteButton.addEventListener("click", function() {
            // Remove the cloned container when delete button is clicked
            clonedContainer.remove();
        });
        clonedContainer.appendChild(deleteButton);
        
        // Append the cloned container after the original one
        originalContainer.parentNode.insertBefore(clonedContainer, originalContainer.nextSibling);
    });
});
</script>
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
<?php include('headers/inventory-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Inventories</h1>
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
                                        </span></span><span class="btn-text">Add Inventory</span></span></button>

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

                                            <th>Name</th>
                                            <th>No. of Items</th>
                                            <th>No. of Properties</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" WESTLANDS DENTAL STUDIO">

                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>15</td>
                                            <td>12</td>
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
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" DOWNTOWN HEALTH CLINIC">
                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>20</td>
                                            <td>18</td>
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
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" CITY MEDICAL CENTER">
                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>25</td>
                                            <td>22</td>
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
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" GREEN VALLEY CLINIC">
                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>30</td>
                                            <td>28</td>
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
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" RIVERSIDE HOSPITAL">
                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>35</td>
                                            <td>32</td>
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
                                            <td>
                                                <div class="LongMesage_container">
                                                    <input class=" refuge-collection-input  tableLongMessage_Input"
                                                        value=" HILLSIDE HEALTH CENTER">
                                                    </input>
                                                    <button class="view-btn tablemessageview_btn" type="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Click to view"
                                                        data-bs-original-title="Click to view Full Message">
                                                        <i class="bi bi-eye"></i> Read More
                                                    </button>
                                                </div>
                                            </td>
                                            <td>40</td>
                                            <td>38</td>
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
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add Inventory
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
    <form class="" action="inventories.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container smallformcontainer">

                <div class="formstartcontainer mt-5">
                    <div class="row">
                        <div class="col-lg-12 original-column">
                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>

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
                                    <div class="col-auto">
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

                                    </div>

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
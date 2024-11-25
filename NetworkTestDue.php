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
<?php include('headers/due-report-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Network Test Due</h1>
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
                                            <th>Due Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                                <a href="property-details.php">
                                                    <div class="LongMesage_container">
                                                        <input class="refuge-collection-input tableLongMessage_Input"
                                                            value="Attention all tenants: The maintenance crew will be performing routine inspections tomorrow. Please ensure that your units are accessible. Thank you for your cooperation."></input>
                                                        <button class="view-btn tablemessageview_btn" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Click to view"
                                                            data-bs-original-title="Click to view Full Message">
                                                            <i class="bi bi-eye"></i> Read More
                                                        </button>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>NaN/NaN/NaN</td>
                                           
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="property-details.php"
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="View Property"><span
                                                                class="icon"><span class="feather-icon">
                                                                <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                                                                </span></span></a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
    <td>
        <a href="property-details.php">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input"
                    value="Important notice: Water supply will be interrupted for maintenance on Friday from 8 AM to 12 PM. Plan accordingly."></input>
                <button class="view-btn tablemessageview_btn" type="button"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Click to view"
                    data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i> Read More
                </button>
            </div>
        </a>
    </td>
    <td>05/22/2024</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a href="property-details.php"
                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                    data-bs-toggle="tooltip" data-placement="top" title=""
                    data-bs-original-title="View Property"><span
                        class="icon"><span class="feather-icon">
                        <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                        </span></span></a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="property-details.php">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input"
                    value="Reminder: Rent is due by the end of this week. Late fees will apply after the deadline."></input>
                <button class="view-btn tablemessageview_btn" type="button"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Click to view"
                    data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i> Read More
                </button>
            </div>
        </a>
    </td>
    <td>05/23/2024</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a href="property-details.php"
                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                    data-bs-toggle="tooltip" data-placement="top" title=""
                    data-bs-original-title="View Property"><span
                        class="icon"><span class="feather-icon">
                        <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                        </span></span></a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="property-details.php">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input"
                    value="Community event: Join us for a barbecue in the common area this Saturday at 4 PM. All residents are welcome!"></input>
                <button class="view-btn tablemessageview_btn" type="button"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Click to view"
                    data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i> Read More
                </button>
            </div>
        </a>
    </td>
    <td>05/24/2024</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a href="property-details.php"
                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                    data-bs-toggle="tooltip" data-placement="top" title=""
                    data-bs-original-title="View Property"><span
                        class="icon"><span class="feather-icon">
                        <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                        </span></span></a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="property-details.php">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input"
                    value="Notice: The gym will be closed for renovations starting next Monday. We apologize for the inconvenience."></input>
                <button class="view-btn tablemessageview_btn" type="button"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Click to view"
                    data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i> Read More
                </button>
            </div>
        </a>
    </td>
    <td>05/25/2024</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a href="property-details.php"
                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                    data-bs-toggle="tooltip" data-placement="top" title=""
                    data-bs-original-title="View Property"><span
                        class="icon"><span class="feather-icon">
                        <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                        </span></span></a>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="property-details.php">
            <div class="LongMesage_container">
                <input class="refuge-collection-input tableLongMessage_Input"
                    value="Safety reminder: Please ensure all doors and windows are locked when leaving your unit. Report any suspicious activity to management."></input>
                <button class="view-btn tablemessageview_btn" type="button"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Click to view"
                    data-bs-original-title="Click to view Full Message">
                    <i class="bi bi-eye"></i> Read More
                </button>
            </div>
        </a>
    </td>
    <td>05/26/2024</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <a href="property-details.php"
                    class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover btndocDownload"
                    data-bs-toggle="tooltip" data-placement="top" title=""
                    data-bs-original-title="View Property"><span
                        class="icon"><span class="feather-icon">
                        <iconify-icon icon="ant-design:eye-outlined"></iconify-icon>
                        </span></span></a>
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
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
    <!-- <div class="hk-pg-header eventhubHeader">
        <div class="d-flex">
            <div class="d-flex flex-wrap justify-content-between flex-1">
                <div class="mb-lg-0 mb-2 me-8">
                    <h1 class="pg-title">Welcome to Social Hub</h1>
                    <p>Manage and organize all your events seamlessly from this Social Hub.</p>
                </div>

            </div>
        </div>

    </div> -->
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
                                    <h1>Manage Policy</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <!-- <button id="toggleButton" type="button"
                                class="btn  btn-flush-dark flush-soft-hover fIlterCmnButton"><span class="icon"><span
                                        class="feather-icon"><i data-feather="list"></i></span></span>Filter</button> -->
                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                          <a href="add-disclaimer.php" id="addDisclaimer">
                          <button class="btn btn-sm commonBtn btn-primary ms-3" type="button">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Create Disclaimer
                            </button>
                          </a>  

                          <a href="add-term-condition.php" id="addTermCondition">
                          <button class="btn btn-sm commonBtn btn-primary ms-3" type="button">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add Term & Condition
                            </button>
                          </a>
                            
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

                    <ul class="nav nav-tabs nav-line nav-icon fullwidthCustom_tabsUL nav-light">

                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#AddPropertytb">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text">Disclaimer</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#AddDevelopmenttb">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text">Term & Condition</span>
                                </div>
                            </a>
                        </li>

                    </ul>


                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            <div class="contact-list-view">

                            <div class="tab-content notpMargin_tab">
                                <div class="tab-pane fade show active" id="AddPropertytb">
                                    <div class="contact-list-view">
                                       <h3 class="SecTitleDisclaimer">All Disclaimer</h3>
                                       
                                        <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Disclaimer Title</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Disclaimer 1</a></td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, mollitia?</td>
                                            <td>2024-09-15</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <!-- <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button> -->
                                                                <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="edit-disclaimer.php">
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

                                <div class="tab-pane fade" id="AddDevelopmenttb">
                                <div class="contact-list-view">
                                    <h3 class="SecTitleDisclaimer">All Term & Condition</h3>
                                    <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Title 1</a></td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, mollitia?</td>
                                            <td>2024-09-15</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <!-- <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button> -->
                                                                <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="edit-term-condition.php">
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
                                            <td><a href="#">Title 1</a></td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, mollitia?</td>
                                            <td>2024-09-15</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <!-- <button
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            type="button" data-bs-toggle="modal" data-bs-target="#EditHubEvent"><span class="icon"><span
                                                                    class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></button> -->
                                                                <a
                                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                            href="edit-term-condition.php">
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

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>




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






<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initially show only the relevant button
        document.getElementById("addDisclaimer").style.display = "inline-flex";
        document.getElementById("addTermCondition").style.display = "none";

        // Listen for Bootstrap's tab change event
        var tabLinks = document.querySelectorAll('.nav-link');

        tabLinks.forEach(function (tab) {
            tab.addEventListener("click", function (event) {
                setTimeout(() => { // Timeout ensures tab transition has completed
                    var activeTab = document.querySelector(".nav-link.active").getAttribute("href");

                    if (activeTab === "#AddPropertytb") {
                        document.getElementById("addDisclaimer").style.display = "inline-block";
                        document.getElementById("addTermCondition").style.display = "none";
                    } else if (activeTab === "#AddDevelopmenttb") {
                        document.getElementById("addDisclaimer").style.display = "none";
                        document.getElementById("addTermCondition").style.display = "inline-block";
                    }
                }, 50); // Small delay to ensure Bootstrap processes the tab change
            });
        });
    });
</script>
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
                                    <h1>Inventory Item Check Statuses </h1>
                                </a>

                            </div>

                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <button class="btn btn-sm commonAddnewButton btn-primary ms-3" data-bs-toggle="modal"
                                data-bs-target="#checkstatusadd_modal"><span><span class="icon"><span
                                            class="feather-icon">
                                            <iconify-icon icon="fluent:add-24-filled"></iconify-icon>
                                        </span></span><span class="btn-text">Add Inventory Status
                                    </span></span></button>

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

                                <table class="table nameeditableTB common-datatable nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                               <div class="nameeditContainer">
                                               <span class="name-text">Checked - Working</span>
                                                <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                               </div>
                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck"
                                                        checked="">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <div class="nameeditContainer">
                                               <span class="name-text">Checked - Working</span>
                                               <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                               </div>
                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1"
                                                        checked="">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <div class="nameeditContainer">
                                               <span class="name-text">Checked - Pending</span>
                                               <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                            </div>

                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2"
                                                        checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <div class="nameeditContainer">
                                               <span class="name-text">Unchecked - In Progress</span>
                                               <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                            </div>

                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                    <label class="form-check-label" for="gridCheck3">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <div class="nameeditContainer">
                                               <span class="name-text">Unchecked - Not Started</span>
                                               <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                            </div>

                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                                                    <label class="form-check-label" for="gridCheck4">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            <div class="nameeditContainer">
                                               <span class="name-text">Checked - Completed</span>
                                               <a class="edit-btn btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#"><span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:edit-28-regular"></iconify-icon></span></span></a>
                                                <button class="btn btn-sm btn-success btnNameSave save-btn"
                                                    style="display: none;"><iconify-icon icon="fluent:save-20-regular"></iconify-icon> Save</button>
                                            </div>

                                            </td>
                                            <td>
                                                <div class="form-check checkWithLabel">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck5"
                                                        checked="">
                                                    <label class="form-check-label" for="gridCheck5">
                                                        Disabled
                                                    </label>
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

<!-- add inventory check status modal start -->
<div class="modal fade" id="checkstatusadd_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered mw-400p" role="document">
        <div class="modal-content">
            <div class="modal-header smModalHeader header-wth-bg-inv">
                <h5 class="modal-title">Add Inventory Check Status </h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="m-3" action="inventory_item_check_statuses.php" role="search">
                <div class="modal-body p-0">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Name" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="Name">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-right mdmodal_FTborder">
                    <button type="submit" class="canvasSubmit_button smModalButton">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- add inventory check status modal end -->

<?php include('footer.php') ?>

<!-- edit table name column data script -->

<script>
        $(document).ready(function() {
            var activeTd;

            $('.edit-btn').click(function() {
                if (activeTd) {
                    hideInput(activeTd);
                }
                var $td = $(this).closest('td');
                var $span = $td.find('.name-text');
                var currentText = $span.text();
                $span.hide();
                $td.find('.edit-btn').hide();
                $td.append('<input type="text" class="form-control name-input" value="' + currentText + '">');
                $td.find('.save-btn').css('display', 'flex');
                activeTd = $td;
                $(document).on('click', handleOutsideClick);
            });

            $('.save-btn').click(function() {
                var $td = $(this).closest('td');
                hideInput($td);
                activeTd = null;
                $(document).off('click', handleOutsideClick);
            });

            function handleOutsideClick(event) {
                if (activeTd && !$(event.target).closest(activeTd).length && !$(event.target).is('.edit-btn')) {
                    hideInput(activeTd);
                    activeTd = null;
                    $(document).off('click', handleOutsideClick);
                }
            }

            function hideInput($td) {
                var $input = $td.find('.name-input');
                var newText = $input.val();
                $td.find('.name-text').text(newText).show();
                $input.remove();
                $td.find('.save-btn').css('display', 'none');
                $td.find('.edit-btn').css('display', 'inline-block');
            }
        });
    </script>
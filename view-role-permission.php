<?php include('header.php') ?>
<link rel="stylesheet" href="dist/css/role-permission.css">

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
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Edit Role & Permission</h1>
                                </a>
                            </div>
                            <div class=" ms-3">
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

                            <form action="role-permission.php">
                                <div class="contact-list-view RolePermission_container">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Role Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Role Name</label>
                                                        <input type="text" class="form-control" id="" value="">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <select name="" id="" class="form-control select2">
                                                            <option disabled="" selected="" value="">Please Select...
                                                            </option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="UserpermissionTitle">
                                        User Permission
                                    </h2>

                                    <div class="col-lg-12 mb-5">
                                        <div class="accordion rolePermission" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        <h6>Dashboard Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Dashboard</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline1"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline1"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Tiles</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline2"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline2"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Dashboard Todo Module</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline8"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline8"
                                                                                class="align-middle">
                                                                                Edit
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline3"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline3"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>New Enquiries </h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline4"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline4"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <h6>Users Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Staff User Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list ">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Staff User </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline4"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline4"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Staff Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Download
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Staff Invoices </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Download Invoice
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Add to ToDo List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Set As Alert
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Notification Settings</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Settings
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Manage Password</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Request Temporary Password
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Request Change Password
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- staff user permissions end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Tenant Users Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Users </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline4"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline4"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Download
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contracts</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Contract
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Contract
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Contract Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Add to ToDo List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Set As Alert
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Contract Activity Log
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancies</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Tenancy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Tenancy
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Parking Tenancies</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Parking Tenancy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Parking Tenancy Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Invoices</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Invoice
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Invoice Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Download Invoice
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Add Contract Note button
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Add to ToDo List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Set As Alert
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Extended Details Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details Only
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Events</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Delete Event
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Notification Settings</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change Settings
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Manage Password</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Request Temporary Password
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Request Change Password
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- tenenat user permisions end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Landlord Users Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Landlord User </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline4"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline4"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Landlord Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Download
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancies</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Tenancy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Tenancy
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenanat History</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Tenanat Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Events</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Delete Event
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Landlord Invoices</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Invoice
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Invoice Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Download Invoice
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Landlord Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Add Contract Note button
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Add to ToDo List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Set As Alert
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- landlord user permisions end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Contractor Users Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contractor User </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline4"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline4"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contractor Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Download
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contractor Invoices</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Invoice
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View Invoice Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Download Invoice
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Landlord Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Add Contract Note button
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Add to ToDo List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Note Set As Alert
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- Contractor user permisions end -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <h6>Lettings Department Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2> Enquiry & Viewing</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry & Viewing</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Enquiry
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Tenant Enquiry Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Enquiry
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenant Viewing Records </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Make Lead Tenant Permission
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    No Longer Interested Permission
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Active Viewing</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Past Viewing</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Suggested Properties Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Show Suggested Properties
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Viewed History Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Show Viewed History
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Manage Status</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>General Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add to ToDo List Checkbox
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Set As Alert Checkbox
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Show under Viewing Notes Checkbox
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Only View General Notes
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Medical Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Medical Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add to ToDo List Checkbox
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Emergency Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Emergency Notes
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Questionnaire</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Questionnaire
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5> Appointment History Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Appointment History
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>History Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View History
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry Activity</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Enquiry Activity
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Available Properties</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Available Properties
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Available Properties
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View All Available Properties Button
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry Calendar</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Calendar Button
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Schedule Viewing</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Schedule Viewing
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Schedule Viewing
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5> Enquiry Status Dropdown</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Status Dropdown
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Hide Status Dropdown
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- lettings Enquiry user permisions end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2> Lettings Calendar</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Calendar</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Calendar
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- calendar module end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Lettings Admin </h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Applications Received</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Applications
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Applications
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contract Statuses</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Contract Details
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Generate Contract
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Application Form Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity History
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change Contract Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Parking License agreement</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Contract Details
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Generate Contract
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Parking Tenancy Details</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Gurantor Details</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancy Documents</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Documents
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Download Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add to ToDo List Checkbox
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Set As Alert Checkbox
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Payments</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Payment
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Invoice
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2> Lettings Settings <iconify-icon
                                                                        icon="ep:d-arrow-right"></iconify-icon> Enquiry
                                                                    Settings</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list ">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry Settings </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline18"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline18"
                                                                                    class="align-middle">
                                                                                    Edit Settings
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline19"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline19"
                                                                                    class="align-middle">
                                                                                    View Settings
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list ">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry Statuses</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline30"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline30"
                                                                                    class="align-middle">
                                                                                    Add Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline30"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline30"
                                                                                    class="align-middle">
                                                                                    View Status
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list ">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Enquiry Sources</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline30"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline30"
                                                                                    class="align-middle">
                                                                                    Add Sources
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline30"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline30"
                                                                                    class="align-middle">
                                                                                    View Sources
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                            <!-- enquiry settings permissions end -->
                                                        </div>

                                                        <div class="permissioninner_title">
                                                            <h2> Lettings Settings <iconify-icon
                                                                    icon="ep:d-arrow-right"></iconify-icon> Contract
                                                                Settings</h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Contract Settings </h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Edit Settings
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                View Settings
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="permissioninner_title">
                                                            <h2>Lettings Settings <iconify-icon icon="ep:d-arrow-right">
                                                                </iconify-icon> Marketing Settings</h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list ">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Social Hub Settings </h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Edit Settings
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                View Settings
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list ">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Manage Statuses</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Add Status
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                View Status
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="permissioninner_title">
                                                            <h2>Lettings Settings <iconify-icon icon="ep:d-arrow-right">
                                                                </iconify-icon> Application Form </h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Application Form Settings </h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Edit Form
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                View Form
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                        <div class="permissioninner_title">
                                                            <h2>Lettings Settings <iconify-icon icon="ep:d-arrow-right">
                                                                </iconify-icon> Property Viewing Settings</h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Inspection Times</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Add Inspection Times
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                Edit Inspection Times
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline19"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline19"
                                                                                class="align-middle">
                                                                                View Inspection Times
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                        <div class="permissioninner_title">
                                                            <h2>Property Availability </h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Property Availability</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View Property Availability
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                        <div class="permissioninner_title">
                                                            <h2>Tenancy Renewals</h2>
                                                        </div>
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Renewals Details</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Edit Renewal Details
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Gurantor Details</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Edit
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Tenancy Documents</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Download
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Payments</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Add
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Right to Rent</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Upload Documents
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                Download Documents
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Activity History</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline18"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline18"
                                                                                class="align-middle">
                                                                                View History
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>General Notes</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add Note
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add to ToDo List Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Set As Alert Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                View Notes
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Medical Notes</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add Note
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add to ToDo List Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Set As Alert Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                View Notes
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Emergency Notes</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add Note
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Add to ToDo List Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Set As Alert Checkbox
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Renewing Tenancy</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Show Renewing Tenancy Checkbox
                                                                            </label>
                                                                        </div>
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                Show Proceed this Renewal
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list width-100">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Archived Tenancy Renewals</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline7"
                                                                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                type="checkbox" value="">
                                                                            <label for="checkboxOutline7"
                                                                                class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Tenancies Setup</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancies Setup</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenancies Setup
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Tenancies Setup module end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Marketing <iconify-icon icon="ep:d-arrow-right">
                                                                    </iconify-icon>Social Hub</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Social Hub</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Social Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Social Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Social Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Permission for Approve Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Request Adjustment Button
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Publish Event
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Draft Events</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Social Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Social Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Permission for Approve Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Request Adjustment Button
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Publish Event
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Marketing <iconify-icon icon="ep:d-arrow-right">
                                                                    </iconify-icon>All Offers</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Offers</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Offers
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Offers
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Offers
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Marketing <iconify-icon icon="ep:d-arrow-right">
                                                                    </iconify-icon>Website Management</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Website Management</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Content
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Content
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Content
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- Marketing module end -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        <h6>HR Hub</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>HR Hub Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Time Logs</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Time Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Time Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Time Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Time Log Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Mileage Logs </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Mileage Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Mileage Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Mileage Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Mileage Log Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Leave Management</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Approve Leaves
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Reject Leaves
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Leave Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Add Time Off
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Edit Time Off
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Leave Comments
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Staff</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Staff
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Staff
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Staff Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Archived Staff</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Staff Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Delete Staff from Archived
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        <h6>Manage Property Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Tickets Module</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tickets Dashboard Tiles Cards</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tickets Number Tile Cards
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tickets</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Ticket
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Ticket Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Ticket Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Ticket Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Assign to Other Staff
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Ticket Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Change Ticket Category
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Manage Task Slots</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Book Slot
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Create Slots
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Sent Slots
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Assign Staff For Confirmed Slot
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View task List
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    View Task History
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline3"
                                                                                    class="align-middle">
                                                                                    Comment Visibility Dropdown
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Task Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add task
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Create Quotation Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Raise Deposite Invoice
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Send Quotation
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Material</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Material
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Material
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Material
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Inventory Request Tab</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inventory Request
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Purchase Material Request</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inventory Request
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change status for Purchase Material
                                                                                    Request
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Complated Tasks</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Complated Tasks
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change Complated Tasks status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Task Comment Visibility
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Mileage Logs</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Mileage Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Mileage Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Mileage Log
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Time Log </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Time Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Time Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Time Log
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Expenses</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Expenses
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Expenses
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Expenses
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Expenses
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Ticket All History List</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View History
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Tenancy Dashboard</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Dashboard Tiles Cards</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tile Cards
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>New Tenancies</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View New Tenancies Table
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View New Tenancies Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Todo List</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Todo task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Edit Todo task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    View task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline8"
                                                                                    class="align-middle">
                                                                                    Delete task
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Tenancies</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancies</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenancies Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenancies Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Deposits</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Deposits Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Deposits Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Overdue Payments</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Overdue Payments Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Overdue Payments Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Overdue Payments Inactive</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Overdue Payments Inactive Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Overdue Payments Inactive
                                                                                    Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tenancies Ending</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenancies Ending Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenancies Ending Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Parking Permits</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Parking Permits Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Parking Permits Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Council Tax</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Council Tax Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Council Tax Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Outstanding Section 21s</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Outstanding Section 21s Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Outstanding Section 21s Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- tenancies end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All Events</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Events</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Events
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Events
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Events
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Event Calandar
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- end -->
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Parking Tenancies </h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Parking Tenancies </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Parking Tenancy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Parking Tenancy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Parking Tenancy Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Inspections</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Pre Check In</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Book Pre Check In
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Pre Check In Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Check In</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Book Check In
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Check In Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Inepections</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inepections
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Check Out</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Book Check Out
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Book Check Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Schedule Inspection</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Schedule Inspection
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Inspection
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inspection Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inspection Activity
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Notes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Inspection Timings</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Inspection Timings
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Inspection Timings
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Inventories Templates</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Inventory Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Inventory Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inventory Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Inventory Template
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Cleaning Rotas</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Cleaning Rota</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Cleaning Rota
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Cleaning Rota
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        <h6>Compliance</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All Compliance</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Compliance</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Create Job
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Compliance Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Request for a quote
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change Quotation Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Schedule a Visit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Notes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Certificate / Report</h5>
                                                                        </div>
                                                                        <div class="prmission">

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Certificate / Report
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Notes
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All Contractors</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Contractors</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Contractors
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Contractors
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Contractors
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Compliance Documents</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Documents</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Documents
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Download Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        <h6>Precurement Module</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading11">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                        aria-expanded="false" aria-controls="collapse11">
                                                        <h6>Account Module</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse11" class="accordion-collapse collapse"
                                                    aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        <h6>All Properties Module</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All Properties</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Properties</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Properties Table
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Archived Properties Table
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Properties Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Property Archived Action
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Add New Property</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Basic Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Property Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Budgets
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Compliances
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Documents
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Floor's
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Property Units
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Add New Development</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New Development
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Basic Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Budgets
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Compliances
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Documents
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Development Floor's
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Development Units
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Details tabs Permissions</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Property Details</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Property Map</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Map
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Inspections List</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inspections
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Inspection Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Documents</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Property Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Upload Documents
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Archive Documents Action
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Download Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Compliance Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Upload Documents
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Archive Documents Action
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Download Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Warranty Documents </h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Upload Documents
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Archive Documents Action
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Download Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Archived Documents</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Documents
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Notes</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Notes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Note
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Units</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Units</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Units
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Unit
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Floor's</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Floor
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Floor's
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Tenants</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Active Tenanats</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tenanat
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Tanency Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Historic Tenants</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Historic Tenants
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Historic Tenant Details
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Events</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Events</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Event
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Recipients
                                                                                </label>
                                                                            </div>

                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Event
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Tickets</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Tickets</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Ticket
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Ticket
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Ticket
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Communications</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Communications</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Only
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Send Message
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Property Preferred Contractors</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Preferred Contractors</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Contract
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Contract
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Contract
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Secure Codes Tab</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Secure Codes</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Visible Tab
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Secure Code
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Secure Code
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading12">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                        aria-expanded="false" aria-controls="collapse12">
                                                        <h6>Common Calendar Module</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse12" class="accordion-collapse collapse"
                                                    aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Calendar</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Calendar
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Calendar Event
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading13">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                        aria-expanded="false" aria-controls="collapse13">
                                                        <h6>Daily Tasks</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse13" class="accordion-collapse collapse"
                                                    aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All tasks</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add New task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit task
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View task Details
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Task Details</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Comments
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Note
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Assign to Other
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Change task Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Inable Request Date Change
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading14">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse14"
                                                        aria-expanded="false" aria-controls="collapse14">
                                                        <h6>Approval Board</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse14" class="accordion-collapse collapse"
                                                    aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Board</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Approvals cards
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Approval Details
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Notes
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Inable Approve Action
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading15">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse15"
                                                        aria-expanded="false" aria-controls="collapse15">
                                                        <h6>System Activity Logs</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse15" class="accordion-collapse collapse"
                                                    aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Activity Logs</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Activity Log
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Incomplete appointment
                                                                                </label>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading16">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse16"
                                                        aria-expanded="false" aria-controls="collapse16">
                                                        <h6>System Configration</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse16" class="accordion-collapse collapse"
                                                    aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Templates</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Add Templates
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Templates
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Templates
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Delete Templates
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading17">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse17"
                                                        aria-expanded="false" aria-controls="collapse17">
                                                        <h6>Communication Center</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse17" class="accordion-collapse collapse"
                                                    aria-labelledby="heading17" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Chat</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Only
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Send Message
                                                                                </label>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading18">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse18"
                                                        aria-expanded="false" aria-controls="collapse18">
                                                        <h6>Role & Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse18" class="accordion-collapse collapse"
                                                    aria-labelledby="heading18" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Role & Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Role & Permission
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Create Role & Permission
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Role & Permission
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading19">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse19"
                                                        aria-expanded="false" aria-controls="collapse19">
                                                        <h6>Reports</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse19" class="accordion-collapse collapse"
                                                    aria-labelledby="heading19" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Reports</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading20">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse20"
                                                        aria-expanded="false" aria-controls="collapse20">
                                                        <h6>Manage Policy</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse20" class="accordion-collapse collapse"
                                                    aria-labelledby="heading20" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Disclaimer</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   Add Disclaimer
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Disclaimer
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Disclaimer
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li
                                                                    class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Term & Condition</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                   Add Term & Condition
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    Edit Term & Condition
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7"
                                                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800"
                                                                                    type="checkbox" value="">
                                                                                <label for="checkboxOutline7"
                                                                                    class="align-middle">
                                                                                    View Term & Condition
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="canvasFooterContainer">
                                            <a href="role-permission.php"
                                                class="canvascancel_button commonCanvas_buttonFooter">Cancel</a>
                                            <button type="submit"
                                                class="canvasSubmit_button commonCanvas_buttonFooter">Save</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>

<?php include('footer.php') ?>
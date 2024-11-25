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
    <!-- Page Header -->
    <!-- <div class="hk-pg-header  pt-7">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Welcome back to your Admin Panel, where every detail of your operations awaits your command.</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i
													data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes"
											value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
					
				</div> -->
    <!-- /Page Header -->

    <!-- Page Body -->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">
     <!-- sub menu header -->
     <?php include('headers/user-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Unverified Emails </h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                            <!-- <a href="index.php"
                                    class="btn btn-sm cmnbackbtn btn-outline-secondary "><iconify-icon icon="line-md:list-3" ></iconify-icon> Back</a> -->

                            </div>
                        </div>
                        <div class="contact-options-wrap">

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Import</a>
                            </div>

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
                                            <th>Email Address</th>
                                            <th>Last Requested</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="view-user-details.php" class="namelinkURl">Morgan Freeman</a>
                                            </td>
                                            <td class="">morgan@jampack.com</td>
                                            <td>13 Jan, 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <button
                                                            class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                                                            id="buttonWihtext"><span
                                                                class="icon">
                                                                <iconify-icon icon="fluent:branch-request-16-regular">
                                                                </iconify-icon> Request Verification
                                                            </span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Emma Watson</a>
    </td>
    <td class="">emma@example.com</td>
    <td>25 Mar, 2023</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
                    </span>
                </button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Leonardo DiCaprio</a>
    </td>
    <td class="">leo@example.com</td>
    <td>8 Aug, 2022</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
                    </span>
                </button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Jennifer Lawrence</a>
    </td>
    <td class="">jen@example.com</td>
    <td>17 Nov, 2023</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
                    </span>
                </button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Tom Hanks</a>
    </td>
    <td class="">tom@example.com</td>
    <td>30 Sep, 2022</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
                    </span>
                </button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Scarlett Johansson</a>
    </td>
    <td class="">scarlett@example.com</td>
    <td>5 May, 2023</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
                    </span>
                </button>
            </div>
        </div>
    </td>
</tr>

<tr>
    <td>
        <a href="view-user-details.php" class="namelinkURl">Chris Hemsworth</a>
    </td>
    <td class="">chris@example.com</td>
    <td>20 Oct, 2022</td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <div class="d-flex">
                <button class="btn btn-icon  btn-flush-dark btn-rounded flush-soft-hover "
                    id="buttonWihtext">
                    <span class="icon">
                        <iconify-icon icon="fluent:branch-request-16-regular">
                        </iconify-icon> Request Verification
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
        </div>
    </div>
    <!-- /Page Body -->
</div>

<?php include('footer.php') ?>
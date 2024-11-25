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
                                    <h1>Landlords </h1>
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
                                            <th>Properties</th>
                                            <th>Tenants</th>
                                            <th>Last Statement</th>
                                            <th>Processed Payments</th>
                                            <th>Overdue Payments</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <a href="##" class="namelinkURl">Properties, Ellite</a>
                                            </td>

                                            <td>385</td>
                                            <td>49</td>
                                            <td>07/05/2024 17:22</td>
                                            <td>0 (£0.00)</td>
                                            <td>6 (£2646.20)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>

                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>

                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Villa Sunshine</a>
                                            </td>
                                            <td>700</td>
                                            <td>90</td>
                                            <td>08/05/2024 11:30</td>
                                            <td>0 (£0.00)</td>
                                            <td>15 (£6300.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Lakeview Cottage</a>
                                            </td>
                                            <td>450</td>
                                            <td>60</td>
                                            <td>08/05/2024 14:15</td>
                                            <td>0 (£0.00)</td>
                                            <td>8 (£3600.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Mountain Retreat</a>
                                            </td>
                                            <td>600</td>
                                            <td>80</td>
                                            <td>08/05/2024 16:50</td>
                                            <td>0 (£0.00)</td>
                                            <td>12 (£5400.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Beachfront Bungalow</a>
                                            </td>
                                            <td>550</td>
                                            <td>70</td>
                                            <td>08/05/2024 19:20</td>
                                            <td>0 (£0.00)</td>
                                            <td>10 (£3850.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Forest Cabin</a>
                                            </td>
                                            <td>400</td>
                                            <td>55</td>
                                            <td>08/05/2024 21:40</td>
                                            <td>0 (£0.00)</td>
                                            <td>7 (£2800.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Seaside Villa</a>
                                            </td>
                                            <td>800</td>
                                            <td>100</td>
                                            <td>08/06/2024 10:00</td>
                                            <td>0 (£0.00)</td>
                                            <td>20 (£8000.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Riverside Retreat</a>
                                            </td>
                                            <td>650</td>
                                            <td>85</td>
                                            <td>08/06/2024 12:30</td>
                                            <td>0 (£0.00)</td>
                                            <td>14 (£9100.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Mountain View Chalet</a>
                                            </td>
                                            <td>700</td>
                                            <td>95</td>
                                            <td>08/06/2024 15:00</td>
                                            <td>0 (£0.00)</td>
                                            <td>16 (£6650.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Urban Loft</a>
                                            </td>
                                            <td>500</td>
                                            <td>75</td>
                                            <td>08/06/2024 17:30</td>
                                            <td>0 (£0.00)</td>
                                            <td>12 (£6000.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Cozy Cabin</a>
                                            </td>
                                            <td>450</td>
                                            <td>60</td>
                                            <td>08/06/2024 20:00</td>
                                            <td>0 (£0.00)</td>
                                            <td>9 (£4050.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="##" class="namelinkURl">Luxury Penthouse</a>
                                            </td>
                                            <td>900</td>
                                            <td>120</td>
                                            <td>08/06/2024 22:30</td>
                                            <td>0 (£0.00)</td>
                                            <td>18 (£10800.00)</td>
                                            <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Generate Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon
                                                                        icon="streamline:ai-generate-portrait-image-spark">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Preview Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fontisto:preview">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover "
                                                            data-bs-toggle="tooltip" data-placement="top" title=""
                                                            data-bs-original-title="Send Statement" href="##"><span
                                                                class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="streamline:send-email">
                                                                    </iconify-icon>
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

<!-- add user offcanvas -->
<div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Add New User
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
    <form class="" action="users.php">
        <div class="offcanvas-body">

            <div class="addingForm_Container">
                <div class="add-users-modal-body-table-header text-headline-6">Add New User to System</div>

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Middle" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="Middle">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="Surname">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Alt Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input class="form-control customdataPicker" type="text" name=""
                                            placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Address Line 1</label>
                                        <input type="text" class="form-control" id="addressline1">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline2" class="form-label"> Address Line 2</label>
                                        <input type="text" class="form-control" id="addressline2">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Town/City" class="form-label"> Town/City</label>
                                        <input type="text" class="form-control" id="Town/City">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="County" class="form-label"> County</label>
                                        <input type="text" class="form-control" id="County">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Postcode" class="form-label"> Postcode</label>
                                        <input type="text" class="form-control" id="Postcode">
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="RoleAddContiner">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Assign Role</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="RolesListContainer">
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Tenant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Bookkeeper
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Maintenance
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Landlord
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Superuser
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Merchant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Admin
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
<!-- add user offcanvas modal end -->

<!-- edit user offcanvas -->
<!-- <div class="offcanvas offcanvas-bottom custombottm_offcanvasStyle" tabindex="-1" id="edituserCanvas"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header custom-canvas-header">
        <div class="canvas-header-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="ct-icon" style="min-width: 20px; min-height: 20px; color: var(--ct-gray-6);" data-testid="icon">
                <path
                    d="M7.3 22.5C6.8 22.5 6.375 22.325 6.025 21.975C5.675 21.625 5.5 21.2 5.5 20.7V3.3C5.5 2.8 5.675 2.375 6.025 2.025C6.375 1.675 6.8 1.5 7.3 1.5H16.7C17.2 1.5 17.625 1.675 17.975 2.025C18.325 2.375 18.5 2.8 18.5 3.3V20.7C18.5 21.2 18.325 21.625 17.975 21.975C17.625 22.325 17.2 22.5 16.7 22.5H7.3ZM7 18.25H17V5.75H7V18.25ZM7 19.75V20.7C7 20.7667 7.03333 20.8333 7.1 20.9C7.16667 20.9667 7.23333 21 7.3 21H16.7C16.7667 21 16.8333 20.9667 16.9 20.9C16.9667 20.8333 17 20.7667 17 20.7V19.75H7ZM7 4.25H17V3.3C17 3.23333 16.9667 3.16667 16.9 3.1C16.8333 3.03333 16.7667 3 16.7 3H7.3C7.23333 3 7.16667 3.03333 7.1 3.1C7.03333 3.16667 7 3.23333 7 3.3V4.25ZM7 3V4.25V3ZM7 21V19.75V21Z"
                    fill="currentColor"></path>
            </svg>
            Edit this User
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
    <form class="" action="users.php">
        <div class="offcanvas-body">
            <div class="add-users-modal-body-table-header text-headline-6">Edit this User Details</div>

            <div class="addingForm_Container">

                <div class="formstartcontainer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Title" value="Charlie ">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" value="Charlie">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Middle" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="Middle">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="Surname" value="Craig">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email"
                                            value="charlie@leernoca.monster">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact" value="9896758687">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contact" class="form-label"> Alt Contact Number</label>
                                        <input type="phone" class="form-control" id="Contact" value="9896758687">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input class="form-control customdataPicker" type="text" name="" placeholder=""
                                            value="May , 08 2024" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline1" class="form-label"> Address Line 1</label>
                                        <input type="text" class="form-control" id="addressline1"
                                            value="123 Main Street Anytown, USA">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="addressline2" class="form-label"> Address Line 2</label>
                                        <input type="text" class="form-control" id="addressline2"
                                            value="456 Elm Avenue Somewhere City">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Town/City" class="form-label"> Town/City</label>
                                        <input type="text" class="form-control" id="Town/City" value="Oak Avenue">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="County" class="form-label"> County</label>
                                        <input type="text" class="form-control" id="County" value="America">
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Postcode" class="form-label"> Postcode</label>
                                        <input type="text" class="form-control" id="Postcode" value="62701">
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="RoleAddContiner">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Assign Role</h2>
                                    </div>

                                    <div class="card-body">
                                        <div class="RolesListContainer">
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3" checked><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Tenant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Bookkeeper
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Maintenance
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3" checked><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Landlord
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Superuser
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Merchant
                                            </div>
                                            <div class="dropdown-item flexdropItem">
                                                <div class="d-flex align-items-center">
                                                    <span class="form-check mb-0"><input type="checkbox"
                                                            class="form-check-input " id="chk_sel_3"><label
                                                            class="form-check-label"
                                                            for="chk_sel_3"></label></span><span
                                                        class="contact-star"></span>
                                                </div>
                                                Admin
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
</div> -->
<!-- edit user offcanvas modal end -->

<!-- active inactive user status sitcher js -->
<script>
    const switchToggles = document.querySelectorAll(".switchToggle");
    const switchStatuses = document.querySelectorAll(".switchStatus");
    switchToggles.forEach((toggle, index) => {
        toggle.addEventListener("change", function() {
            if (this.checked) {
                switchStatuses[index].textContent = "Active";
                // Perform action for active state
            } else {
                switchStatuses[index].textContent = "Inactive";
                // Perform action for inactive state
            }
        });
    });
</script>

<!-- filters show hide script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get reference to the button and the filter div
        var button = document.getElementById("toggleButton");
        var filterDiv = document.getElementById("filterDiv");
        // Add click event listener to the button
        button.addEventListener("click", function() {
            // Toggle the visibility of the filter div
            if (filterDiv.style.display === "none") {
                filterDiv.style.display = "block";
            } else {
                filterDiv.style.display = "none";
            }
        });
    });
</script>
<!-- filters show hide script end-->

<!-- user Delete alert -->
<script>
    $(document).on("click", '.del-button', function(e) {
        Swal.fire({
            html: '<div class="mb-3"><i class="ri-delete-bin-6-line fs-5 text-danger"></i></div><h5 class="text-danger">Delete This User ?</h5><p class="sweetaleart_description">Deleting a User will permanently remove from your Admin Panel.</p>',
            customClass: {
                confirmButton: 'btn btn-outline-secondary text-danger',
                cancelButton: 'btn btn-outline-secondary text-gray',
                container: 'swal2-has-bg',
                actions: 'w-100'
            },
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: 'Yes, Delete User',
            cancelButtonText: 'No, Keep User',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    html: '<div class="d-flex align-items-center"><i class="ri-delete-bin-5-fill me-2 fs-3 text-danger"></i><h5 class="text-danger mb-0">Your file has been deleted!</h5></div>',
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
<!-- user Delete alert end-->
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

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Edit Templates</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <a href="email-templates.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a>
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

                            <a class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" href="email-templates.php">
                                <iconify-icon icon="fluent:save-32-regular"></iconify-icon> Save Changes
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
                    <div class="contact-body">
                        <div class="nicescroll-bar">
                            
                            <div class="contact-list-view">

                            <div class="TempEditorContainer">
                                <div class="card">
                                    <div class="card-body">
                                    <textarea id="editor">
        <div class="canvas">
            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                style="table-layout:fixed;"
                id="bodyTable">
                <tbody>
                    <tr>
                        <td align="center" valign="top"
                            style="padding-right:10px;padding-left:10px;"
                            id="bodyCell">

                            <table border="0" cellpadding="0"
                                cellspacing="0" style="max-width:600px;"
                                width="100%" class="wrapperBody">
                                <tbody>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0"
                                                cellpadding="0"
                                                cellspacing="0"
                                                style="background-color:#FFFFFF;border-color:#E5E5E5; border-style:solid; border-width:0 1px 1px 1px;"
                                                width="100%"
                                                class="tableCard">

                                                <tbody>
                                                    <tr>
                                                        <td height="3"
                                                            style="background-color:#003CE5;font-size:1px;line-height:3px;"
                                                            class="topBorder">
                                                            &nbsp;
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-bottom: 20px;"
                                                            class="imgHero">
                                                            <div class="logoiMage"
                                                                style="text-align:left; margin-top:20px; margin-left:20px;">
                                                                <img src="dist/img/newimages/logo-dark.png" class="emailteamp_lightlogo"
                                                                    alt=""
                                                                    width="100"
                                                                    border="0"
                                                                    style="width:100%; max-width:75px;height:auto; display:block;">

                                                                   
                                                            </div>
                                                            <a href="#"
                                                                target="_blank"
                                                                style="text-decoration:none;">
                                                                <img src="dist/img/newimages/user-welcome.png"
                                                                    width="600"
                                                                    alt=""
                                                                    border="0"
                                                                    style="width:100%; max-width:300px; height:auto; display:block;">
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;"
                                                            class="mainTitle">
                                                            <h2 class="text"
                                                                style="color:#000000; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:22px; line-height: 30px !important; font-weight:500; font-style:normal; letter-spacing:normal; line-height:36px; text-transform:none; text-align:center; padding:0; margin:0">
                                                                Welcome to
                                                                Graysons
                                                                Properties!
                                                            </h2>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;"
                                                            class="subTitle">
                                                            <h4 class="text"
                                                                style="color:#999999; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:16px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:24px; text-transform:none; text-align:center; padding:0; margin:0">
                                                                Getting
                                                                Started With
                                                                Graysons
                                                                Properties
                                                            </h4>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-left:20px;padding-right:20px;"
                                                            class="containtTable ui-sortable">

                                                            <table
                                                                border="0"
                                                                cellpadding="0"
                                                                cellspacing="0"
                                                                width="100%"
                                                                class="tableTitleDescription">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center"
                                                                            valign="top"
                                                                            style="padding-bottom:10px;"
                                                                            class="mediumTitle">
                                                                            <p class="text"
                                                                                style="color:#000000; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:18px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:26px; text-transform:none; text-align:center; padding:0; margin:0">
                                                                                Explore
                                                                                our
                                                                                trending
                                                                                Category
                                                                            </p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td align="center"
                                                                            valign="top"
                                                                            style="padding-bottom:20px;"
                                                                            class="description">
                                                                            <p class="text"
                                                                                style="color:#666666; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:14px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:22px; text-transform:none; text-align:center; padding:0; margin:0">
                                                                                Lorem
                                                                                ipsum
                                                                                dolor
                                                                                sit
                                                                                amet
                                                                                consectetur
                                                                                adipisicing
                                                                                elit.
                                                                                Sunt
                                                                                eum
                                                                                cupiditate
                                                                                veritatis
                                                                                cumque
                                                                                eaque
                                                                                ullam
                                                                                quae
                                                                                tempora
                                                                                maxime
                                                                                illo
                                                                                commodi!
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table
                                                                border="0"
                                                                cellpadding="0"
                                                                cellspacing="0"
                                                                width="100%"
                                                                class="tableButton">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center"
                                                                            valign="top"
                                                                            style="padding-top:20px;padding-bottom:20px;">

                                                                            <table
                                                                                align="center"
                                                                                border="0"
                                                                                cellpadding="0"
                                                                                cellspacing="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center"
                                                                                            class="ctaButton"
                                                                                            style="background-color: #FCB608;padding-top:12px;padding-bottom:12px;padding-left:35px;padding-right:35px;border-radius:50px">

                                                                                            <a class="text"
                                                                                                href="#"
                                                                                                target="_blank"
                                                                                                style="color:#FFFFFF; font-family:'Poppins', Helvetica, Arial, sans-serif; font-size:13px; font-weight:600; font-style:normal;letter-spacing:1px; line-height:20px; text-transform:uppercase; text-decoration:none; display:block">
                                                                                                Explore
                                                                                                Now
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td height="20"
                                                            style="font-size:1px;line-height:1px;">
                                                            &nbsp;</td>
                                                    </tr>

                                                    <!-- <tr>
                                                        <td align="center"
                                                            valign="middle"
                                                            style="padding-bottom:40px"
                                                            class="emailRegards">
                                                            <a href="#"
                                                                target="_blank"
                                                                style="text-decoration:none;">
                                                                <img mc:edit="signature"
                                                                    src="dist/img/newimages/signaturegray.png"
                                                                    alt=""
                                                                    width="150"
                                                                    border="0"
                                                                    style="width:100%;
max-width:150px; height:auto; display:block;">
                                                            </a>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                            <table border="0"
                                                cellpadding="0"
                                                cellspacing="0" width="100%"
                                                class="space">
                                                <tbody>
                                                    <tr>
                                                        <td height="30"
                                                            style="font-size:1px;line-height:1px;">
                                                            &nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="0" cellpadding="0"
                                cellspacing="0" style="max-width:600px;"
                                width="100%" class="wrapperFooter">
                                <tbody>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0"
                                                cellpadding="0"
                                                cellspacing="0" width="100%"
                                                class="footer">
                                                <tbody>
                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px; display:flex; justify-content: center; align-items: center;"
                                                            class="socialLinks">
                                                            <a href="#facebook-link"
                                                                target="_blank"
                                                                style="width: 50px; height: 50px; display: flex !important; justify-content: center; align-items: center; border-radius: 50px; background: #f0f0f0; margin-left:5px; margin-right:5px"
                                                                class="facebook">
                                                                <img src="dist/img/newimages/facebook.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">

                                                            </a>
                                                            <a href="#twitter-link"
                                                                target="_blank"
                                                                style="width: 50px; height: 50px; display: flex !important; justify-content: center; align-items: center; border-radius: 50px; background: #f0f0f0; margin-left:5px; margin-right:5px"
                                                                class="twitter">
                                                                <img src="dist/img/newimages/twitter.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                                            </a>
                                                            <a href="#pintrest-link"
                                                                target="_blank"
                                                                style="width: 50px; height: 50px; display: flex !important; justify-content: center; align-items: center; border-radius: 50px; background: #f0f0f0; margin-left:5px; margin-right:5px">
                                                                <img src="dist/img/newimages/instagram.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                                                            </a>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-top:10px;padding-bottom:5px;padding-left:10px;padding-right:10px;"
                                                            class="brandInfo">
                                                            <span class="text"
                                                                style="color:#777777; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:center; padding:0; margin:0;">
                                                                ©&nbsp;Graysons
                                                                Properties
                                                                Inc. |
                                                                800, Suite
                                                                1500 | New
                                                                York, NY
                                                                000123, USA.
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="center"
                                                            valign="top"
                                                            style="padding-top:0px;padding-bottom:10px;padding-left:10px;padding-right:10px;"
                                                            class="footerEmailInfo">
                                                            <p class="text"
                                                                style="color:#777777; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:center; padding:0; margin:0;">
                                                                If you have
                                                                any
                                                                quetions
                                                                please
                                                                contact us
                                                                <a href="#"
                                                                    style="color:#777777;text-decoration:underline;"
                                                                    target="_blank">graysons@gmail.com.</a><br>
                                                                <a href="#"
                                                                    style="color:#777777;text-decoration:underline;"
                                                                    target="_blank">Privacy
                                                                    Policy</a>
                                                                from our
                                                                mailing
                                                                lists
                                                            </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td height="30"
                                                            style="font-size:1px;line-height:1px;">
                                                            &nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </textarea>
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


<!-- ---------------------------
Editor js
--------------------------------- -->
<script  src="dist/customplugins/editor/rte.js"> </script>
    <script src="dist/customplugins/editor/all_plugins.js" ></script>
    <link href="dist/customplugins/editor/rte_theme_default.css" rel="stylesheet">
<script>
     var editor1 = new RichTextEditor("#editor");
  </script>
  <!-- ---------------------------
Editor js end
--------------------------------- -->

 
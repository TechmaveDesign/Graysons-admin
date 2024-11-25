<?php include('header.php') ?>
<link rel="stylesheet" href="dist/css/invoice.css">

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
                                <a class="contactapp-title link-dark" href="##" role="button">
                                    <h1>Invoice</h1>
                                </a>

                            </div>
                            <div class=" ms-3">
                                <a href="view-user-details.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
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

                            <div class="downinvBtnContainer">
                          <div class="tm_invoice_btns tm_hide_print">
      
      <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
        <span class="tm_btn_icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
         
      </span>
      Download PDF
      </button>
    </div>
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
                          

                            <div class="tm_container">
    <div class="tm_invoice_wrap">
      <div class="tm_invoice tm_style2" id="tm_download_section">
        <div class="tm_invoice_in">
          <div class="tm_invoice_head tm_top_head tm_mb20">
            <div class="tm_invoice_left">
              <div class="tm_logo"><img src="dist/img/newimages/graysonsinv-logo.png" alt="Logo"></div>
            </div>
            <div class="tm_invoice_right">
            <div class="invrightitems">
                  <label class="form-label">Status:</label> 
                  <div class="labelvalue">Paid <a href="view-user-details.php" class="namelinkURl">Danial Craig</a> @ 18/07/2018 18:05</div> 
                </div>
            <div class="tm_ternary_color tm_f50 tm_text_uppercase tm_text_right tm_invoice_title tm_mb15 tm_mobile_hide">Invoice</div>
            </div>
          </div>
          <div class="tm_invoice_info tm_mb10">
            <div class="tm_invoice_info_left">
              <p class="tm_mb2"><b>Property:</b></p>
              <p>
               
                    <a href="property-details.php">Apartment 3A, 567 Madison Avenue, New
                                                    York</a>
              </p>
              <p class="tm_mb2"><b>Raised:</b></p>
              <p>
              <a href="view-user-details.php" class="namelinkURl">Danial Craig</a> @  23/11/2017 16:46
               
              </p>

             

            </div>
            
            <div class="tm_invoice_info_right ">
            <div class="tm_grid_row tm_col_3 righttemp_container">
            <div class="invrightitems">
                  <label class="form-label">Invoice No:</label> 
                  <div class="labelvalue">#LL93784 </div> 
                </div>
                <div class="invrightitems">
                <label class="form-label">Recipient:</label>
                <div class="labelvalue"><a href="view-user-details.php" class="namelinkURl">Danial Craig</a></div> 
                </div>
                <div class="invrightitems">
                <label class="form-label">Payment Reference:</label>
                  <div class="labelvalue">GP00077AB </div>
                </div>
                <div class="invrightitems">
                <label class="form-label">Template:</label> 
                  <div class="labelvalue">Graysons Properties </div> 
                </div>

                <div class="invrightitems">
                  <label class="form-label">Due Date:</label> 
                  <div class="labelvalue">30/11/2017 </div> 
                </div>
                
               


              </div>
             
              
            </div>
          </div>
          <div class="tm_table tm_style1">
            <div class="tm_round_border">
              <div class="tm_table_responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="tm_width_7 tm_semi_bold tm_accent_color">Description</th>
                      <th class="tm_width_2 tm_semi_bold tm_accent_color">Type</th>
                      <th class="tm_width_1 tm_semi_bold tm_accent_color">Qty</th>
                      <th class="tm_width_2 tm_semi_bold tm_accent_color">Unit Price</th>
                      <th class="tm_width_2 tm_semi_bold tm_accent_color tm_text_right">Total Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="tm_gray_bg">
                      <td class="tm_width_7">
                        <p class="tm_m0 tm_f16 tm_primary_color">Damage to window sill </p>
                      </td>
                      <td class="tm_width_2">Tenant Fine</td>
                      <td class="tm_width_1">1</td>
                      <td class="tm_width_2">£16.67</td>
                     
                      <td class="tm_width_2 tm_text_right">£16.67</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tm_invoice_footer tm_mb15 tm_m0_md">
              <div class="tm_left_footer">
                <div class="tm_card_note tm_ternary_bg tm_white_color"><b>PAYMENT BY BACS: </b> Graysons Properties Ltd, Lloyds Bank</div>
                <p class="tm_mb2"><b class="tm_primary_color">SORT CODE: </b> 30-93-55</p>
              </div>
              <div class="tm_right_footer">
                <table class="tm_mb15">
                  <tbody>
                    <tr>
                      <td class="tm_width_3 tm_primary_color tm_border_none tm_bold">Subtoal</td>
                      <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold">£16.67</td>
                    </tr>
                    <tr>
                      <td class="tm_width_3 tm_danger_color tm_border_none tm_pt0">VAT 	</td>
                      <td class="tm_width_3 tm_danger_color tm_text_right tm_border_none tm_pt0">£3.33</td>
                    </tr>
                   
                    <tr>
                      <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_white_color tm_accent_bg tm_radius_6_0_0_6">Grand Total	</td>
                      <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_primary_color tm_text_right tm_white_color tm_accent_bg tm_radius_0_6_6_0">£20.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tm_left_footerCustom">
              <div class=""><b>ACCOUNT NUMBER: </b>58848968</div>
              <p class=""><img src="assets/img/img1.png" alt=""></p>
              
            </div>



            <div class="tm_invoice_footer tm_type1">
              <div class="tm_left_footer"></div>
              <div class="tm_right_footer">
                <div class="tm_sign tm_text_center">
                  <img src="dist/img/newimages/signaturepng.png" alt="Sign">
                  <p class="tm_m0 signatureTitle tm_ternary_color">Graysons Properties</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tm_note tm_font_style_normal tm_text_center">
            <hr class="tm_mb15">
            <p class="tm_mb2"><b class="tm_primary_color">Address & Other Info:</b></p>
            <p class="tm_m0">61 GREAT NORTH ROAD, GOSFORTH, NEWCASTLE UPON TYNE, NE3 2DQ</p>
            <p><a href="mailto:INFO@GRAYSONSPROPERTIES.CO.UK">INFO@GRAYSONSPROPERTIES.CO.UK</a></p>
            
            <div class="regNumber_Container">
            <p> <b>COMPANY REG NO.</b> 9032171</p> <div class="devidercol">|</div>
            <p><b>VAT REG NO.</b> 231 8979 78</p>
            </div>
            
          </div><!-- .tm_note -->
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
    </div>
    <!-- /Page Body -->
</div>


<?php include('footer.php') ?>

<script src="dist/js/invoicejs/jquery.min.js"></script>
  <script src="dist/js/invoicejs/jspdf.min.js"></script>
  <script src="dist/js/invoicejs/html2canvas.min.js"></script>
  <script src="dist/js/invoicejs/main.js"></script>



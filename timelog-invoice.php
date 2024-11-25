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
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>TimeLog Invoice</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        

                <div class="ActionBtn generate-invoice-btn p-0" id="generateInvoiceBtn">
                    <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                    <iconify-icon icon="lucide:send"></iconify-icon> Send Invoice
                    </button>
                   
                    <div class="form-check checkboxTask">
                        <input id="checkboxSendQuickBook" checked class="form-check-input" type="checkbox" value="">
                        <label for="checkboxSendQuickBook" class="aform-check-label">Send to Quick Book</label>
                    </div>
                </div>

                           

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
                                            <th>
                                            

                                                <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                            <label class="form-check-label" for="checkboxOutline1">
                                            </label>
                                        </div>

                                                
                                            </th>
                                            <th>Invoice No.</th>
                                            <th>Staff Name</th>
                                            <th>Date Range</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                            <td>IN0022</td>
                                          
                                          <td>Jhon Winny</td>
                                          <td>
                                            24 June, 2024 - 24 July, 2024
                                          </td>
                                          <td>£22.69</td>
                                         
                                          <td>
                                          <div class="overdueStatus">
                                                  <div class="leftSideStatus">
                                                      <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                      <iconify-icon icon="simple-icons:quickbooks" class="sentIcon quickbook"></iconify-icon>
                                                      <!-- <iconify-icon icon="ic:sharp-access-time" class="sentIcon"></iconify-icon> -->
                                                  </div>
                                                  <div class="rightSideStatus">
                                                      <h6>Sent to quick book </h6>
                                                      <p>Sent 12 june, 2024</p>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0023</td>
                                                <td>Jane Doe</td>
                                                <td>15 May, 2024 - 12 June, 2024</td>
                                                <td>£30.50</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0024</td>
                                                <td>Michael Smith</td>
                                                <td>01 July, 2024 - 26 July, 2024</td>
                                                <td>£15.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <!-- <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon> -->
                                                        <iconify-icon icon="solar:bill-cross-linear" class="closedIcon unpaidIcon"></iconify-icon>
                                                       
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Unpaid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0025</td>
                                                <td>Emily Clark</td>
                                                <td>27 July, 2024 - 27 Aug, 2024</td>
                                                <td>£27.75</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0026</td>
                                                <td>Chris Johnson</td>
                                                <td>28 April, 2024 - 28 May, 2024</td>
                                                <td>£18.20</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0027</td>
                                                <td>Lisa Wong</td>
                                                <td>29 June, 2024 - 29 July, 2024</td>
                                                <td>£19.99</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon> -->
                                                        <iconify-icon icon="simple-icons:quickbooks" class="sentIcon quickbook"></iconify-icon>
                                                        <!-- <iconify-icon icon="ic:sharp-access-time" class="sentIcon"></iconify-icon> -->
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Sent to quick book </h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0028</td>
                                                <td>David Brown</td>
                                                <td>30 June, 2024 - 30 July, 2024</td>
                                                <td>£20.45</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
                                                                    </iconify-icon>
                                                                </span></span></a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input row-checkbox" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            </label>
                                        </div>
                                            </td>
                                                <td>IN0029</td>
                                                <td>Sarah Green</td>
                                                <td>01 July, 2024 - 01 August, 2024</td>
                                                <td>£10.00</td>
                                                <td>
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon>

                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Paid</h6>
                                                        <!-- <p>Sent 12 june, 2024</p> -->
                                                    </div>
                                                </div>
                                                </td>
                                              
                                                <td>
                                                <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " href="timelog-invoice-detail.php"><span class="icon"><span class="feather-icon">
                                                                    <iconify-icon icon="fluent:edit-16-regular">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sendInvoiceBtn = document.querySelector('.ActionBtn .themeBtn');
        const checkboxes = document.querySelectorAll('table input[type="checkbox"]');
        sendInvoiceBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action
            let isChecked = false;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });
            if (isChecked) {
                Swal.fire({
                    icon: 'success',
                    title: 'Invoice Sent',
                    text: 'Invoice sent to Quick Book successfully!',
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Invoice Selected',
                    text: 'First, you have to select an invoice to send.',
                });
            }
        });
    });
</script>

<!-- table check functionality -->
<script>
    $(document).ready(function() {
        $('#selectAll').click(function() {
            $('.row-checkbox').prop('checked', this.checked);
            toggleGenerateInvoiceButton();
        });

        $('.row-checkbox').change(function() {
            if (!this.checked) {
                $('#selectAll').prop('checked', false);
            }
            if ($('.row-checkbox:checked').length === $('.row-checkbox').length) {
                $('#selectAll').prop('checked', true);
            }
            toggleGenerateInvoiceButton();
        });

        function toggleGenerateInvoiceButton() {
            if ($('.row-checkbox:checked').length > 0) {
                $('#generateInvoiceBtn').show().css("display", "flex");
            } else {
                $('#generateInvoiceBtn').hide();
            }
        }

        $('.invoiceBtn').click(function() {
            let sendClient = $('#checkboxSendClient').is(':checked');
            let sendQuickBook = $('#checkboxSendQuickBook').is(':checked');
            let message = 'Your invoice';

            if (sendClient && sendQuickBook) {
                message += '  sent to client and QuickBook successfully';
            } else if (sendClient) {
                message += ' sent to client successfully';
            } else if (sendQuickBook) {
                message += '  sent to QuickBook successfully';
            } else {
                message += ' successfully';
            }

            Swal.fire({
                title: message,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
             
             window.location.href = 'timelog-invoice.php'; 
         });
        });
    });
</script>


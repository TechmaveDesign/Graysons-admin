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

<style>
    .generate-invoice-btn {
            display: none;
            align-items: center;
            justify-content: center;
       
        }

        .inpTH_custom {
	padding: 0px !important;
	background: white;
	border-radius: 0px !important;
	border: 1px solid rgb(223, 229, 238) !important;
	color: #748594;
}
.inpTH_custom:checked {
	border-color: rgb(248, 116, 24) !important;
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
<?php include('headers/account-header.php') ?>
                      <!-- sub menu header -->
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>All Accounts</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
                                    <iconify-icon icon="line-md:list-3"></iconify-icon> Back
                                </a> -->
                            </div>
                        </div>
                        <div class="contact-options-wrap">

                        <div class="ActionBtn generate-invoice-btn" id="generateInvoiceBtn">
                    <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3 invoiceBtn themeBtn">
                    <iconify-icon icon="lucide:send"></iconify-icon> Generate Invoice
                    </button>
                
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
                                            <th>Ticket Id</th>
                                            <th>Title</th>
                                            <th>Client Name</th>
                                            <th>Property</th>
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
                                            <td><a href="view-ticket.php" class="text-high-em">#2072</a> </td>
                                            <td>Routine Cleaning</td>
                                            <td>Tiger Nixion</td>
                                            <td>
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>£229.69</td>
                                            <td>
                                             
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon>
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Approved & Sent to Account</h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                            
                                            <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-ticket.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Ticket Details"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></span></a>
                                                        <div class="voidBox" >
                                                                   <a href="#" class="voidBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="No need to generate invoice"><iconify-icon icon="tabler:ban"></iconify-icon> Void</a>
                                                                </div>
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
                                            <td><a href="view-ticket.php" class="text-high-em">#2073</a></td>
                                            <td>Routine Cleaning</td>
                                            <td>Hania Nixion</td>
                                            <td>
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>£9.69</td>
                                            <td>
                                             
                                            <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon>
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Approved & Sent to Account</h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-ticket.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Ticket Details"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></span></a>
                                                        <div class="voidBox" >
                                                                   <a href="#" class="voidBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="No need to generate invoice"><iconify-icon icon="tabler:ban"></iconify-icon> Void</a>
                                                                </div>
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
                                            <td><a href="view-ticket.php" class="text-high-em">#2074</a></td>
                                            <td>Emergency Repair</td>
                                            <td>Hamza</td>
                                            <td>
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>£10.69</td>
                                            <td>
                                            <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon>
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Approved & Sent to Account</h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-ticket.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Ticket Details"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></span></a>
                                                        <div class="voidBox" >
                                                                   <a href="#" class="voidBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="No need to generate invoice"><iconify-icon icon="tabler:ban"></iconify-icon> Void</a>
                                                                </div>
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
                                            <td><a href="view-ticket.php" class="text-high-em">#2075</a></td>
                                            <td>Emergency Repair</td>
                                            <td>Jimmy</td>
                                            <td>
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>£6.69</td>
                                            <td>
                                            <!-- <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <iconify-icon icon="quill:send" class="sentIcon"></iconify-icon>
                                                       
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Sent to Client</h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div> -->
                                                <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <!-- <iconify-icon icon="gg:check-o" class="PaidIcon"></iconify-icon> -->
                                                        <iconify-icon icon="pajamas:task-done" class="closedIcon">
                                                        </iconify-icon>
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Approved & Sent to Account</h6>
                                                        <p>Sent 12 june, 2024</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-ticket.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Ticket Details"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></span></a>
                                                        <div class="voidBox" >
                                                                   <a href="#" class="voidBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="No need to generate invoice"><iconify-icon icon="tabler:ban"></iconify-icon> Void</a>
                                                                </div>
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
                                            <td><a href="view-ticket.php" class="text-high-em">#2076</a></td>
                                            <td>Emergency Repair</td>
                                            <td>Popaye</td>
                                            <td>
                                                <div class="LongMesage_container" style="position: relative;">
                                                    <input class="refuge-collection-input tableLongMessage_Input"
                                                        value="Bedroom 3 133, Flat 3 (Floor 1, No3), City View@Phoenix House">
                                                    <button class="view-btn tablemessageview_btn" type="button">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                    <div class="custom-tooltip"></div>
                                                </div>
                                            </td>
                                            <td>£4.69</td>
                                            <td>
                                            <div class="overdueStatus">
                                                    <div class="leftSideStatus">
                                                        <span class="voidStatus">Void</span>
                                                    </div>
                                                    <div class="rightSideStatus">
                                                        <h6>Void</h6>
                                                        <p data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="There are a total of 10 tasks, and you have generated invoices for 5 of them. Therefore, there are 5 remaining tasks for which invoices need to be generated.">
                                                            10/5 Task</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                            <div class="d-flex align-items-center ActionDropdown">
                                                    <div class="d-flex">

                                                        <a href="view-ticket.php" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover " data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View Ticket Details"><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></span></a>
                                                        <div class="voidBox" >
                                                                   <a href="#" class="voidBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="No need to generate invoice"><iconify-icon icon="tabler:ban"></iconify-icon> Void</a>
                                                                </div>
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
            let message = 'Your invoice generated';

            if (sendClient && sendQuickBook) {
             
            } else {
                message += ' successfully';
            }

            Swal.fire({
                title: message,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
             
             window.location.href = 'generated-invoice-list.php'; 
         });
        });
    });
</script>
<script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.voidBtn').forEach(button => {
                button.addEventListener('click', (event) => {
                    event.preventDefault(); // Prevent default link behavior
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to void this ticket?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, void it!',
                        cancelButtonText: 'No, keep it'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.classList.add('clicked');
                            Swal.fire(
                                'Voided!',
                                'The ticket has been voided.',
                                'success'
                            )
                        }
                    });
                });
            });
        });
    </script>

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
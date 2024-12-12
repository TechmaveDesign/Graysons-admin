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
            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>Invoice Details</h1>
                                </a>

                            </div>
                            <div class=" ms-3">

                                <!-- <a href="index.php" class="btn btn-sm cmnbackbtn btn-outline-secondary ">
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

                            <div class="topinvoiceHeader">
                                <div class="grow">
                                    <h5 class="invoiceNo">
                                        <iconify-icon icon="uil:invoice"></iconify-icon> Invoice No. <span>2678</span>
                                    </h5>

                                </div>

                                <div class="invoiceAmount">
                                    <h6>Balance Due</h6>
                                    <h2>£229.69</h2>
                                </div>
                            </div>

                            <div class="userFilters" id="filterDiv">
                                <div class="quick-access-form-wrap nopaddingleftright">
                                    <form class="quick-access-form border">
                                        <div class="row gx-3">
                                            <div class="col-xxl-12">
                                                <div class="position-relative">

                                                    <div class="col-lg-12">
                                                        <div class="row gx-3">

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Supplier Name</label>
                                                                    <select name="" class="form-control select2">
                                                                        <option value="" selected disable readonly>
                                                                            Select an Option</option>
                                                                        <option value="1">Gowthorpe, Jason</option>
                                                                        <option value="2">Properties, Graysons</option>
                                                                        <option value="3">Ghai, Akash</option>
                                                                        <option value="4">Dwernicka, Ewa
                                                                        </option>
                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="text" class="form-control"
                                                                        value="example@gmail.com" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Phone</label>
                                                                    <input type="text" class="form-control"
                                                                        value="9887675868" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Tin No.</label>
                                                                    <input type="text" class="form-control"
                                                                        value="" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Registration No.</label>
                                                                    <input type="text" class="form-control"
                                                                        value="" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <div class="form-group">
                                                                    <label class="form-label">Invoice Date</label>
                                                                    <input type="text" class="form-control"
                                                                        value="05 June, 2024" placeholder=""
                                                                        readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">
                                                                    Address</label>
                                                                    <input type="text" class="form-control"
                                                                        value="50 Washington Square S, New York, NY 10012, USA"
                                                                        placeholder="" readonly="readonly">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="contact-list-view">

                                <table class="table common-datatable nowrap w-100 ">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Product/Service</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>VAT</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                             
                                                 
                                                
                                             <td>1</td>
                                             <td>Maintenance Service</td>
                                             <td>
                                                <p class="discription">
                                                    Ticket Id 2340 (Compliance)
                                                    Communal Landlord Areas, 23 St Bedes Terrace, Sunderland; Other - Provision to order, collect and replace CO2 detector
                                                </p>
                                            </td>
                                             <td>1</td>
                                             <td><input type="text" class="tableInput" value="£2.0"></td>
                                             <td>£2.0</td>
                                             <td>S</td>
                                         </tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-lg-12 px-0">
                                        <div class="card invoice_subtotalAccount">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Message on Invoice</label>
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="form-group">
                                                            <label class="form-label">Message on Statement</label>
                                                            <textarea class="form-control" rows="5"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <table class="table totalSummartTable">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Subtotal</th>
                                                                    <td>£229.69</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>VAT @ 20% on £229.69</th>
                                                                    <td> <input type="text" class="tableInput"
                                                                            value="£100.05"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total</th>
                                                                    <td>£329.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Balance Due</th>
                                                                    <th>£329.00</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="FormSubmit_fix_container">
                                   
                                    <div class="form-check">
                                        <input id="checkboxOutline8" checked class="form-check-input" type="checkbox"
                                            value="">
                                        <label for="checkboxOutline8" class="form-check-label">Send to Quick
                                            Book</label>
                                    </div>

                                    <button type="button" id="sav&send"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3">
                                        <iconify-icon icon="carbon:send-alt"></iconify-icon> Save & Send
                                    </button>

                                    <button type="button"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3 printButton">
                                        <iconify-icon icon="material-symbols:print-outline"></iconify-icon> Print
                                    </button>

                                    <button type="button"
                                        class="btn btn-sm commonAddnewButton btn-primary ms-3 btnfixCancel">
                                        Cancel
                                    </button>

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


    <script>
    document.getElementById('sav&send').addEventListener('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Send the invoice to Quick Book successfully'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'inventory-invoice.php';
            }
        });
    });
</script>

<!-- table data select functionality -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const selectAllCheckbox = document.getElementById('selectAllTb');
    const rowCheckboxes = document.querySelectorAll('.rowCheckbox');

    selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                selectAllCheckbox.checked = false;
            } else if (document.querySelectorAll('.rowCheckbox:checked').length === rowCheckboxes.length) {
                selectAllCheckbox.checked = true;
            }
        });
    });
});

</script>

<?php $this->layout('template') ?>
<main id="main">
    <!-- ======= Counts Section ======= -->
    <section class="counts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-container field">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="checkout">
                                <?=$csrf->input('my-form');?>
                                    <div class="col-md-12">
                                        <div>
                                            <div class="row transaction-card-holder">
                                                <div class="transaction-card col-md-12">
                                                    <div class="row collapse in" id="transaction-card-body-0">
                                                        <div class="col-md-12">
                                                            <div aria-label="Close" class="modal-header">
                                                                <h4 class="modal-title"><b>Your Request</b></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Name <span
                                                                            style="color: red;"
                                                                            title="required">*</span>
                                                                    </p>
                                                                    <div class="col-sm-9"><input name="name" type="text"
                                                                            class="form-control"
                                                                            style="margin-bottom: 20px;" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Email <span
                                                                            style="color: red;"
                                                                            title="required">*</span>
                                                                    </p>
                                                                    <div class="col-sm-9"><input name="email"
                                                                            type="text" class="form-control"
                                                                            style="margin-bottom: 20px;" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Company</p>
                                                                    <div class="col-sm-9"><input name="company"
                                                                            type="text" class="form-control"
                                                                            style="margin-bottom: 20px;">
                                                                    </div>
                                                                </div>
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Website</p>
                                                                    <div class="col-sm-9"><input name="website"
                                                                            type="text" class="form-control"
                                                                            style="margin-bottom: 20px;">
                                                                    </div>
                                                                </div>
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Phone / Whatsapp
                                                                        <span style="color: red;"
                                                                            title="required">*</span>
                                                                    </p>
                                                                    <div class="col-sm-9"><input name="phone"
                                                                            type="text" class="form-control"
                                                                            style="margin-bottom: 20px;" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="row field">
                                                                    <p class="col-sm-3 field-name">Message</p>
                                                                    <div class="col-sm-9"><textarea name="message"
                                                                            class="form-control" maxlength="300"
                                                                            style="height: 155px;"></textarea></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row transaction-card-holder">
                                                <div class="col-sm-8"></div>
                                                <div class="col-sm-4"> <button type="submit"
                                                        class="btn btn-success btn-md btn-block"> <i class="icofont-send-mail"></i> Send Quotation</button>
                                                </div>
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
    </section><!-- End Counts Section -->

</main><!-- End #main -->
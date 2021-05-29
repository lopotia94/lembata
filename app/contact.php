<?php $this->layout('template') ?>
<main id="main">
	<div>
		<?=$deskrip[81]?>
	</div>
	<!-- ======= Counts Section ======= -->
	<section class="counts">
		<div class="container">
			<div class="form-container field">
				<div class="row">
					<div class="col-md-12">
						<form action="contact" method="post" role="form">
						<?=$csrf->input('my-form');?>
							<div class="row">
								<div class="col-lg-6 form-group">
									<input type="text" name="name" class="form-control" id="name"
										placeholder="Your Name" required>
								</div>
								<div class="col-lg-6 form-group">
									<input type="text" class="form-control" name="zip_code" id="zip_code"
										placeholder="Zip Code">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 form-group">
									<input type="email" class="form-control" name="email" id="email"
										placeholder="Your Email">
								</div>
								<div class="col-lg-6 form-group">
									<input type="phone" class="form-control" name="phone" id="phone"
										placeholder="Phone">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 form-group">
									<input type="text" class="form-control" name="city" id="city" placeholder="City">
								</div>
								<div class="col-lg-6 form-group">
									<input type="text" class="form-control" name="main_business" id="main_business"
										placeholder="Main Business">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 form-group">
									<input type="text" class="form-control" name="country" id="country"
										placeholder="Country">
								</div>
								<div class="col-lg-6 form-group">
									<input type="text" class="form-control" name="company" id="company"
										placeholder="Company">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 form-group">
									<textarea class="form-control" name="address" rows="5"
										placeholder="Address"></textarea>
								</div>
								<div class="col-lg-6 form-group">
									<textarea class="form-control" name="interest" rows="5"
										placeholder="Product Interest"></textarea>
								</div>
							</div>
					</div>
				</div>
				<div class="d-flex justify-content-end">
				<button type="submit" class="btn btn-danger "> <i class="icofont-send-mail"></i> Send
					</button>
				</div>
				</form>
			</div>
		</div>
		</div>
		</div>
	</section><!-- End Counts Section -->

</main><!-- End #main -->
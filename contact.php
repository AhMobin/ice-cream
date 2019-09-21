<?php
require 'header.php';

 ?>

	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!-- contact -->
	<div class="contact-main  w3layouts-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">contact us</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="inner_contact">
				<div class=" contact-leftgrid">
					<h4>let's Get In Touch</h4>
					<div class="address">
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>+1 234 567 8901</p>
								<p>+1 234 567 8901</p>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<a href="mailto:info@example.com"> info@icecream.com</a>
								<a href="mailto:billing@example.com"> billing@icecream.com</a>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-map-marker" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>1234k Avenue, #5 Dhanmondi
									<br>33 Broome St,Dhaka.
								</p>
								<p>234k Avenue, 4th block,3FB,
									<br>Dhaka.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-right-grid">
					<div class="wthree-contact-form">
						<form action="admin/inc/contacts-messaged.php" method="post">
							<input type="text" name="name" placeholder="Your Name ..." required="">
							<input type="email" class="email" name="email" placeholder="Your Email" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
							<textarea name="message" placeholder="Your Message" required=""></textarea>
							<input type="submit" name="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.157226174194!2d90.37695231452402!3d23.741772084593666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b5d3a57af9%3A0x60efa01f527f8e06!2zUmFucyBSb21lbmEsIEhvdXNlICMgMzcsLCA1IOCmp-CmvuCmqOCmruCmqOCnjeCmoeCmvyDgprLgp4fgppUg4Kaw4KeL4KahLCDgpqLgpr7gppXgpr4gMTIwOQ!5e0!3m2!1sbn!2sbd!4v1568902529010!5m2!1sbn!2sbd" class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
	<!-- //contact -->

<?php
require 'footer.php';
 ?>

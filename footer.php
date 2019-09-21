
<!-- newsletter -->
<div class="footer-top py-4 text-center">
	<div class="container py-xl-5 py-lg-3">
		<!-- newsletter  -->
		<div class="agile-newsletter">
			<p class="text-white">Get the latest posts delivery directly to your inbox!</p>
			<form action="admin/inc/subscribed.php" method="post" class="my-4">
				<input type="email" placeholder="E-mail" name="s_email" required="">
				<input type="submit" name="sub_mit" value="Subscribe">
			</form>
		</div>
		<!-- //newsletter -->
		<!-- social icons -->
		<div class="footercopy-social py-3">
			<ul>
				<li>
					<a href="#">
						<span class="fab fa-facebook-f"></span>
					</a>
				</li>
				<li class="mx-2">
					<a href="#">
						<span class="fab fa-twitter"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="fas fa-rss"></span>
					</a>
				</li>
				<li class="ml-2">
					<a href="#">
						<span class="fab fa-vk"></span>
					</a>
				</li>
			</ul>
		</div>
		<!-- //social icons -->
	</div>
</div>
<!-- //newsletter -->


	<!-- footer -->

<?php
require 'database/config.db.php';
$footer = "SELECT * FROM footers";
$footerResult = mysqli_query($connect, $footer);
$footerAssoc = mysqli_fetch_assoc($footerResult);
?>


	<div class="mkl_footer text-center py-4">
		<div class="container py-xl-5 py-4">
			<div class="mkls_footer_grid">
				<h2 class="text-white text-capitalize mb-5"><?php echo $footerAssoc['foo_heading'] ?></h2>
				<p><?php echo $footerAssoc['foo_desc'] ?></p>
			</div>
			<!-- address -->
			<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
				<ul>
					<li>
						<p class="text-white">
							<i class="fas fa-location-arrow mr-2"></i><?php echo $footerAssoc['foo_location'] ?></p>
					</li>
					<li class="mx-4">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i><?php echo $footerAssoc['foo_phone'] ?>.</p>
					</li>
					<li>
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:<?php echo $footerAssoc['foo_email'] ?>" class="text-white"><?php echo $footerAssoc['foo_email'] ?></a>
						</p>
					</li>
				</ul>
			</div>
			<!-- //address -->
		</div>
	</div>
	<!-- //footer -->

	<!-- copyright -->
	<div class="w3l-copy text-center py-4">
		<p class="text-white">© <?php echo $footerAssoc['foo_copyright'] ?>
			<a href="<?php echo $footerAssoc['foo_devlink'] ?>"><?php echo $footerAssoc['foo_devname'] ?></a>
		</p>
	</div>
	<!-- //copyright -->


	<!-- Js files -->

	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- Owl-Carousel-JavaScript (for welcome section) -->
	<script src="js/owl.carousel.js"></script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
		});
	</script>
	<!-- //Owl-Carousel-JavaScript (for welcome section) -->

	<!-- flexisel slider (for middle Slider) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 440,
						visibleItems: 1
					},
					landscape: {
						changePoint: 667,
						visibleItems: 3
					},
					tablet: {
						changePoint: 900,
						visibleItems: 4
					}
				}
			});

		});
	</script>
	<!-- //flexisel slider (for middle Slider) -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->

	<!-- Pogo slider (for banner) -->
	<script src="js/jquery.pogo-slider.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Pogo slider (for banner) -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>

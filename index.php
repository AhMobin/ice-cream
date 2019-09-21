<?php
require 'header.php';
require 'database/config.db.php';
$selectMenus = "SELECT * FROM menus";
$selectMenusReslut = mysqli_query($connect, $selectMenus);
?>
	<!-- banner -->
	<div class="pogoSlider" id="js-main-slider">
		<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b1.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<div class="banner-img-agile">
						<img src="images/bannerimg.png" alt="" class="img-fluid">
					</div>
					<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>
				</div>
			</div>
		</div>
		<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b2.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<div class="banner-img-agile">
						<img src="images/bannerimg.png" alt="" class="img-fluid">
					</div>
					<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>
				</div>
			</div>
		</div>
		<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b3.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<div class="banner-img-agile">
						<img src="images/bannerimg.png" alt="" class="img-fluid">
					</div>
					<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>
				</div>
			</div>
		</div>
		<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b4.jpg);">
			<div class="pogoSlider-slide-element">
				<div class="container">
					<div class="banner-img-agile">
						<img src="images/bannerimg.png" alt="" class="img-fluid">
					</div>
					<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- about -->
	<div class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">welcome to our site</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="row">
				<div class="col-lg-6 aboutleft">
					<p class="about-left-agile text-dark text-capitalize font-weight-bold">our flavors</p>
					<h3 class="about-headagile text-capitalize mt-2 mb-4 text-right">fresh & tasty! </h3>
					<p class="my-3">Enim a viverra tincidunt, tortorin urna porta ligula, venenatis vestibulum sapien augue vitae ligula. Phasellus vel
						augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper. Su spendisse id ante molestie libero placerat
						condimentum.
					</p>
					<p>Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper. Su spendisse id ante molestie libero placerat condimentum.
						Maecenas in conse quatlibero. Maecenas nisi sapien.</p>
				</div>
				<div class="col-lg-6 aboutright">
					<div class="large-12 columns">
						<!-- Owl-Carousel -->
						<div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
							<a class="item g1">
								<img class="lazyOwl img-fluid" src="images/w1.png" title="Ice Cream" alt="" />
							</a>
							<a class="item g1">
								<img class="lazyOwl img-fluid" src="images/w2.png" title="Ice Cream" alt="" />
							</a>
							<a class="item g1">
								<img class="lazyOwl img-fluid" src="images/w3.png" title="Ice Cream" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->

	<!-- about bottom -->
	<div class="video-w3l text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="text-white">Summer would not be summer without Ice-cream. Ice-cream is the favorite currency of love.</h3>
			<p class="font-italic p-3">It is like a temptation to eat ice cream instead of something that is better for you. </p>
			<a class="btn btn-primary button-w3ls" href="#" role="button">Read More</a>
		</div>
	</div>
	<!-- //about bottom -->

	<!-- work -->
	<section class="services py-5" id="work">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">our work</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="d-flex box-a py-5 px-3">
						<div class="col-3">
							<i class="fab fa-apple"></i>
						</div>
						<div class="col-9">
							<h3>Seasonal Flavors</h3>
							<p class="mt-3">
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
							</p>
						</div>
					</div>
					<!-- .Box ends here -->
				</div>
				<!-- .Col-lg-6 ends here -->

				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="d-flex box-b  py-5 px-3">
						<div class="col-9  text-right">
							<h3>Handmade Ice Cream</h3>
							<p class="mt-3">
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
							</p>
						</div>
						<div class="col-3">
							<i class="fas fa-utensils"></i>
						</div>
					</div>
					<!-- .Box ends here -->
				</div>
				<!-- .Col-lg-6 ends here -->
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="d-flex box-a  py-5 px-3">
						<div class="col-3">
							<i class="fas fa-truck"></i>
						</div>
						<div class="col-9">
							<h3>fast delivery</h3>
							<p class="mt-3">
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
							</p>
						</div>
					</div>
					<!-- .Box ends here -->
				</div>
				<!-- .Col-lg-6 ends here -->

				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="d-flex box-b  py-5 px-3">
						<div class="col-9 text-right">
							<h3>Local Dairy</h3>
							<p class="mt-3">
								Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
							</p>
						</div>
						<div class="col-3">
							<i class="fas fa-glass-martini"></i>
						</div>
					</div>
					<!-- .Box ends here -->
				</div>
				<!-- .Col-lg-6 ends here -->
			</div>
			<!-- .Row ends here -->
		</div>
		<!-- .Container ends here -->
	</section>
	<!-- .Section ends here -->
	<!-- //work -->

	<!-- news -->
	<div class="middle-section py-5" id="news">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">latest news</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="wthree_events_grid">
				<div class="event-grids">
					<div class="agileits_event_grid_date">
						<p class="text-white text-uppercase">Post on</p>
						<span>June 13th 2018</span>
					</div>
					<div class="agileinfo_events_grid1">
						<div class="events_info_w3ls">
							<a href="#" data-toggle="modal" data-target="#latest_news">Lorem ipsum dolor sit amet</a>
							<p>Etiam non sapien non mauris molestie mollis quis et augue. Ut et ante id neque dignissim tincidunt a interdum orci.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="event-grids">
					<div class="agileits_event_grid_date">
						<p class="text-white text-uppercase">Post on</p>
						<span>June 14th 2018</span>
					</div>
					<div class="agileinfo_events_grid1">
						<div class="events_info_w3ls">
							<a href="#" data-toggle="modal" data-target="#latest_news">Nullam eu vehicula felis</a>
							<p>Maecenas enim elit, molestie et magna vel, condimentum sollicitudin magna. In pretium eros ut rhoncus pulvinar.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="event-grids">
					<div class="agileits_event_grid_date">
						<p class="text-white text-uppercase">Post on</p>
						<span>June 22nd 2018</span>
					</div>
					<div class="agileinfo_events_grid1 grid3 ">
						<div class="events_info_w3ls">
							<a href="#" data-toggle="modal" data-target="#latest_news">Donec tempor justo nec orci</a>
							<p>Donec facilisis, orci a aliquet ultricies, lacus mauris vestibulum lorem, in malesuada augue sem sed dolor. Ut at
								metus vel enim elementum varius.Etiam ut cursus sem. Vestibulum dapibus a tellus.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="latest_news">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header w3serv_modal">
					<h4 class="modal-title">Ice Cream</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<img src="images/g1.jpg" class="img-fluid" alt="" />
					<p class="mt-3">Donec facilisis, orci a aliquet ultricies, lacus mauris vestibulum lorem, in malesuada augue sem sed dolor. Ut at metus
						vel enim elementum varius.Etiam ut cursus sem. Vestibulum dapibus a tellus.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- //news -->

	<!-- middle slider -->
	<div class="projects py-5">
		<div class="projects-grids py-xl-5 py-lg-3">
			<div class="sreen-gallery-cursual">
				<ul id="flexiselDemo1">
					<?php foreach($selectMenusReslut as $value){ ?>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info text-center">
								<img src="admin/uploads/images/menus/<?php echo $value['menu_img'] ?>" alt="" class="img-fluid" height="80" width="120"/>
								<div class="projects-grid-caption text-center mt-4">
									<h4><?php echo $value['menu_name'] ?></h4>
									<p class="my-2"><?php echo $value['menu_desc'] ?></p>
									<a href="menu.php">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
					<!-- <li>
						 <div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s2.png" alt="" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Ice Cream</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s3.png" alt="" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Ice Cream</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s4.png" alt="" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Ice Cream</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="projects-agile-grid-info">
								<img src="images/s5.png" alt="" class="img-fluid" />
								<div class="projects-grid-caption text-center mt-4">
									<h4>Ice Cream</h4>
									<p class="my-2">Add some text here</p>
									<a href="menu.html">View Menu</a>
								</div>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- //middle slider -->

	<!-- stats -->
	<section class="stats_test py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="d-flex inner_stat_wthree_agileits text-center">
				<div class="col-sm-4 py-5 stats_left counter_grid">
					<i class="far fa-building"></i>
					<p class="counter">145</p>
					<h4>Branches</h4>
				</div>
				<div class="col-sm-4 py-5 stats_left counter_grid2 border-left border-right">
					<i class="far fa-edit"></i>
					<p class="counter">563</p>
					<h4>Food Items</h4>
				</div>
				<div class="col-sm-4 py-5 stats_left counter_grid1">
					<i class="fas fa-users"></i>
					<p class="counter">165</p>
					<h4>Qualified Chefs</h4>
				</div>
			</div>
		</div>
	</section>
	<!-- //stats -->

	<!-- testimonials -->
	<div class="slider py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">what our people say's</h3>
				<p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p>
			</div>
			<div class="flexslider text-center">
				<ul class="slides">
					<li>
						<div class="client-grids">
							<img src="images/c1.jpg" class="img-fluid" alt="Responsive image">
							<h4 class="my-4">Aaliyah Moye</h4>
							<p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod
								tempor incididunt ut labore et dolore.</p>
						</div>
					</li>
					<li>
						<div class="client-grids">
							<img src="images/c2.jpg" class="img-fluid" alt="Responsive image">
							<h4 class="my-4">Smith Kevin</h4>
							<p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod
								tempor incididunt ut labore et dolore.</p>
						</div>
					</li>
					<li>
						<div class="client-grids">
							<img src="images/c3.jpg" class="img-fluid" alt="Responsive image">
							<h4 class="my-4">Edwin Hale</h4>
							<p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod
								tempor incididunt ut labore et dolore.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<?php
	require 'footer.php';
	?>

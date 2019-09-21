<?php
require 'header.php';
require 'database/config.db.php';

$selectGalleryImg = "SELECT * FROM galleries";
$galleryResult = mysqli_query($connect, $selectGalleryImg);

$selectMenus = "SELECT * FROM menus";
$selectMenusReslut = mysqli_query($connect, $selectMenus);
 ?>

	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!-- gallery -->
	<section class="gallery py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">Our Specials</h3>
				<p class="title-text font-weight-light font-italic mt-2"> Lorem ipsum dolor sit </p>
			</div>

			<div class="inner-sec pt-md-4">
				<div class="row proj_gallery_grid">
        <?php foreach ($galleryResult as $value) { ?>
					<div class="col-sm-4 section_1_gallery_grid mb-3">
						<a href="admin/uploads/images/icecream/<?php echo $value['gl_img_name'] ?>">
							<div class="section_1_gallery_grid1">
								<img src="admin/uploads/images/icecream/<?php echo $value['gl_img_name'] ?>" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3><?php echo $value['gl_img_heading'] ?></h3>
									<p><?php echo $value['gl_img_desc'] ?></p>
								</div>
							</div>
						</a>
					</div>
        <?php } ?>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!--//gallery-->

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
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- //middle slider -->
<?php
require 'footer.php';
?>

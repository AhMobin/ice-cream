<?php
require 'header.php';
require 'database/config.db.php';

$selectMenuSpecial = "SELECT * FROM menus WHERE menu_category='special'";
$MenuSpecialReslut = mysqli_query($connect, $selectMenuSpecial);
$assocSpecial = mysqli_fetch_assoc($MenuSpecialReslut);

$selectMenuScoops = "SELECT * FROM menus WHERE menu_category='scoops'";
$MenuScoopsReslut = mysqli_query($connect, $selectMenuScoops);
$assocScoops = mysqli_fetch_assoc($MenuScoopsReslut);

$selectMenuSrobet = "SELECT * FROM menus WHERE menu_category='srobet'";
$MenuScobetReslut = mysqli_query($connect, $selectMenuSrobet);
$assocScobet = mysqli_fetch_assoc($MenuScobetReslut);

$selectMenuSundaes = "SELECT * FROM menus WHERE menu_category='sundaes'";
$MenuSundaesReslut = mysqli_query($connect, $selectMenuSundaes);
$assocSundaes = mysqli_fetch_assoc($MenuSundaesReslut);

$selectMenuSwrils = "SELECT * FROM menus WHERE menu_category='swrils'";
$MenuSwrilsReslut = mysqli_query($connect, $selectMenuSwrils);
$assocSwrils = mysqli_fetch_assoc($MenuSwrilsReslut);
?>
	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!--menu -->
	<div class="section main-menu py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">our menu</h3>
				<p class="title-text font-weight-light font-italic mt-2">Lorem ipsum dolor sit</p>
			</div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tabmenu1" role="tab" aria-selected="true">Specials</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu2" role="tab" aria-selected="false">Scoops</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu1" role="tab" aria-selected="false">Srobet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu2" role="tab" aria-selected="false">Sundaes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabmenu1" role="tab" aria-selected="false">Swrils</a>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tabmenu1" role="tabpanel">
					<?php foreach($MenuSpecialReslut as $special){ ?>
					<div class="d-flex border-bottom border-left">
						<div class="col-md-8 agileinfo-tab-content1 border-right">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4><?php echo $special['menu_name'] ?></h4>
								</div>
								<div class="menu-price">
									<h4 class="price-clr">$ <?php echo $special['menu_price'] ?></h4>
								</div>
								<div class="menu-images">
									<img src="admin/uploads/images/menus/<?php echo $special['menu_img']?>" width="80" height="50">
								</div>
								<div class="clearfix"></div>
								<p> <?php echo $special['menu_desc'] ?></p>
							</div>
						</div>
					</div> <!-- end of d-flex -->
					<?php } ?>
				</div> <!--end of tabmenu13 -->

				<div class="tab-pane fade show active" id="tabmenu2" role="tabpanel">
					<?php foreach($MenuScoopsReslut as $scoops){ ?>
					<div class="d-flex border-bottom border-left">
						<div class="col-md-8 agileinfo-tab-content1 border-right">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4><?php echo $scoops['menu_name'] ?></h4>
								</div>
								<div class="menu-price">
									<h4 class="price-clr">$ <?php echo $scoops['menu_price'] ?></h4>
								</div>
								<div class="menu-images">
									<img src="admin/uploads/images/menus/<?php echo $scoops['menu_img']?>" width="80" height="50">
								</div>
								<div class="clearfix"></div>
								<p> <?php echo $scoops['menu_desc'] ?></p>
							</div>
						</div>
					</div> <!-- end of d-flex -->
					<?php } ?>
				</div> <!--end of tabmenu2 -->

				<div class="tab-pane fade show active" id="tabmenu3" role="tabpanel">
					<?php foreach($MenuScobetReslut as $srobet){ ?>
					<div class="d-flex border-bottom border-left">
						<div class="col-md-8 agileinfo-tab-content1 border-right">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4><?php echo $srobet['menu_name'] ?></h4>
								</div>
								<div class="menu-price">
									<h4 class="price-clr">$ <?php echo $srobet['menu_price'] ?></h4>
								</div>
								<div class="menu-images">
									<img src="admin/uploads/images/menus/<?php echo $srobet['menu_img']?>" width="80" height="50">
								</div>
								<div class="clearfix"></div>
								<p> <?php echo $srobet['menu_desc'] ?></p>
							</div>
						</div>
					</div> <!-- end of d-flex -->
					<?php } ?>
				</div> <!--end of tabmenu13 -->

					<div class="tab-pane fade show active" id="tabmenu4" role="tabpanel">
						<?php foreach($MenuSundaesReslut as $sundaes){ ?>
						<div class="d-flex border-bottom border-left">
							<div class="col-md-8 agileinfo-tab-content1 border-right">
								<div class="menu-text-right1">
									<div class="menu-title">
										<h4><?php echo $sundaes['menu_name'] ?></h4>
									</div>
									<div class="menu-price">
										<h4 class="price-clr">$ <?php echo $sundaes['menu_price'] ?></h4>
									</div>
									<div class="menu-images">
										<img src="admin/uploads/images/menus/<?php echo $sundaes['menu_img']?>" width="80" height="50">
									</div>
									<div class="clearfix"></div>
									<p> <?php echo $sundaes['menu_desc'] ?></p>
								</div>
							</div>
						</div> <!-- end of d-flex -->
						<?php } ?>
					</div> <!--end of tabmenu2 -->

				<div class="tab-pane fade show active" id="tabmenu5" role="tabpanel">
					<?php foreach($MenuSwrilsReslut as $swrils){ ?>
					<div class="d-flex border-bottom border-left">
						<div class="col-md-8 agileinfo-tab-content1 border-right">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4><?php echo $swrils['menu_name'] ?></h4>
								</div>
								<div class="menu-price">
									<h4 class="price-clr">$ <?php echo $swrils['menu_price'] ?></h4>
								</div>
								<div class="menu-images">
									<img src="admin/uploads/images/menus/<?php echo $swrils['menu_img']?>" width="80" height="50">
								</div>
								<div class="clearfix"></div>
								<p> <?php echo $swrils['menu_desc'] ?></p>
							</div>
						</div>
					</div> <!-- end of d-flex -->
					<?php } ?>
				</div> <!--end of tabmenu5 -->


			</div>
		</div>
	</div>
	<!-- //menu -->

<?php
require 'footer.php';
 ?>

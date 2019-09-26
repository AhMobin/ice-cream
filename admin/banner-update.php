<?php
require 'header.php';

$id = $_GET['id'];
$selectBanner = "SELECT * FROM banners WHERE banner_id='$id'";
$selectBannerResult = mysqli_query($connect, $selectBanner);
$assocBanner = mysqli_fetch_assoc($selectBannerResult);
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Update Banner #ID: <?php echo $assocBanner['banner_id'] ?></h2>
            </div>
            <form action="inc/banner-updated.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="banner_id" value="<?php echo $assocBanner['banner_id'] ?>">
                <div class="form-group">
                    <label for="bannerHeading">Banner Heading</label>
                    <input type="text" name="banner_heading" value="<?php echo $assocBanner['banner_heading'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="BannerDescription">Banner Description</label>
                    <textarea name="banner_desc" rows="4" class="form-control"><?php echo $assocBanner['banner_desc'] ?></textarea>
                </div>

                <div class="form-group">
                  <label for="currentBannerImage">Current Banner Image</label><br>
                  <img src="uploads/images/banners/<?php echo $assocBanner['banner_img'] ?>" alt="" width="120">
                </div>
                <div class="form-group">
                  <label for="BannerImageupdate">Update Banner Image</label><br>
                  <input type="file" name="banimg_update" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_banner" class="form-control btn btn-success" value="Update Banner">
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>

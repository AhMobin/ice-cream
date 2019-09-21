<?php
require 'header.php';

$id = $_GET['id'];
$SelectImg = "SELECT * FROM galleries WHERE gl_img_id=$id";
$SelectImgResult = mysqli_query($connect, $SelectImg);
$assocIcecream = mysqli_fetch_assoc($SelectImgResult);
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Update Ice Cream #ID: <?php echo $assocIcecream['gl_img_id'] ?></h2>
            </div>
            <form action="inc/updated.icecream.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="ice_id" value="<?php echo $assocIcecream['gl_img_id'] ?>">
                <div class="form-group">
                    <label for="ice_creamheading">Ice-Cream Heading</label>
                    <input type="text" name="ice_heading" value="<?php echo $assocIcecream['gl_img_heading'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="icecreamdesc">Ice-Cream Description</label>
                    <textarea name="ice_desc" class="form-control" rows="4"><?php echo $assocIcecream['gl_img_desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="presenticecreamimage">Current Ice Cream Image</label><br>
                    <img src="uploads/images/icecream/<?php echo $assocIcecream['gl_img_name'] ?>" alt="" width="130" height="100">
                </div>

                <div class="form-group">
                    <label for="icecreamimage">New Ice Cream Image</label>
                    <input type="file" name="ice_cream_img" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_icecream" class="form-control btn btn-success" value="Update Ice Cream">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

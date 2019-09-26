<?php
require 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Add A New Banner</h2>
            </div>
            <form action="inc/added-new-banner.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="bannerheading">Banner Heading</label>
                    <input type="text" name="banner_heading" placeholder="Banner Heading. . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="bannerdescriptiom">Banner Description</label>
                    <textarea name="banner_desc" class="form-control" rows="4" placeholder="Banner Short Description ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="icecreamimage">Banner Image</label>
                    <input type="file" name="banner_img" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="add_banner" class="form-control btn btn-success" value="Add A Banner">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

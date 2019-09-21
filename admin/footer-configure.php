<?php
require 'header.php';

$footerSelect = "SELECT * FROM footers";
$footerSelected = mysqli_query($connect, $footerSelect);
$assocFooter = mysqli_fetch_assoc($footerSelected);
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Update Footer Content</h2>
            </div>
            <form action="inc/updated-footer.php" method="post">
                <div class="form-group">
                    <label for="footereading">Footer Heading</label>
                    <input type="text" name="footer_heading" value="<?php echo $assocFooter['foo_heading'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="footerdesc">Footer Description</label>
                    <textarea name="footer_desc" class="form-control" rows="4" placeholder="Short Description At Footer..."><?php echo $assocFooter['foo_desc'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="companylocation">Update Location</label>
                    <input type="text" name="location" class="form-control" value="<?php echo $assocFooter['foo_location'] ?>">
                </div>
                <div class="form-group">
                    <label for="phonenumber">Update Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $assocFooter['foo_phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="emailaddress">Update Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $assocFooter['foo_email'] ?>">
                </div>
                <div class="form-group">
                    <label for="copyright">Update Copyright</label>
                    <input type="text" name="copyright" class="form-control" value="<?php echo $assocFooter['foo_copyright'] ?>">
                </div>
                <div class="form-group">
                    <label for="developername">Update Developer's Name</label>
                    <input type="text" name="devname" class="form-control" value="<?php echo $assocFooter['foo_devname'] ?>">
                </div>
                <div class="form-group">
                    <label for="developerlink">Update Developer's Link</label>
                    <input type="url" name="devlink" class="form-control" value="<?php echo $assocFooter['foo_devlink'] ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_footer" class="form-control btn btn-success" value="Update Footer">
                </div>
            </form>
        </div>
    </div>
</div>




<?php
require 'footer.php';
?>

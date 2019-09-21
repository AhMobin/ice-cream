<?php
require 'header.php';

$id = $_GET['id'];
$selectMenu = "SELECT * FROM menus WHERE menu_id='$id'";
$selectMenuResult = mysqli_query($connect, $selectMenu);
$assocMenu = mysqli_fetch_assoc($selectMenuResult);
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Update Menu Item #ID: <?php echo $assocMenu['menu_id'] ?></h2>
            </div>
            <form action="inc/updated.tomenu.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="menu_id" value="<?php echo $assocMenu['menu_id'] ?>">
                <div class="form-group">
                    <label for="menuname">Menu Name</label>
                    <input type="text" name="menu_name" value="<?php echo $assocMenu['menu_name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="menucategory">Menu Category</label>
                    <select name="menu_cat" class="form-control">
                      <option value="0">Add Category</option>
                      <option value="special">Special</option>
                      <option value="scoops">Scoops</option>
                      <option value="srobet">Srobet</option>
                      <option value="sundaes">Sundaes</option>
                      <option value="swrils">Swrils</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="menudesc">Menu Description</label>
                    <textarea name="menu_desc" rows="4" class="form-control"><?php echo $assocMenu['menu_desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="menuprice">Price (unit : $)</label>
                    <input type="number" name="menu_price" value="<?php echo $assocMenu['menu_price'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="currentmenuthumbnail">Current Menu Thumnail</label><br>
                  <img src="uploads/images/menus/<?php echo $assocMenu['menu_img'] ?>" alt="" width="120">
                </div>
                <div class="form-group">
                  <label for="thumbnailupdate">Update Menu Thumnail</label><br>
                  <input type="file" name="update_img" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_menu" class="form-control btn btn-success" value="Add to Menu">
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>

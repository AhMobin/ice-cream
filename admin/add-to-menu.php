<?php
require 'header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Add New Menu</h2>
            </div>
            <form action="inc/added.tomenu.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="menuname">Menu Name</label>
                    <input type="text" name="menu_name" placeholder="Menu Name . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="menucategory">Menu Category</label>
                    <select name="menu_cat" class="form-control">
                      <option value="0">Add To Category</option>
                      <option value="special">Specials</option>
                      <option value="scoops">Scoops</option>
                      <option value="srobet">Srobet</option>
                      <option value="sundaes">Sundaes</option>
                      <option value="swrils">Swrils</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="menudesc">Menu Description</label>
                    <textarea name="menu_desc" rows="4" placeholder="Short Description On Menu. . . " class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="menuprice">Price (unit : $)</label>
                    <input type="number" name="menu_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="menuthumnail">Menu Thumbnail</label>
                    <input type="file" name="menu_img" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="add_menu" class="form-control btn btn-success" value="Add to Menu">
                </div>
            </form>
        </div>
    </div>
</div>




<?php
require 'footer.php';
?>

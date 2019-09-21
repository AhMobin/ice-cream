<?php
require 'header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Add A New To Gallery</h2>
            </div>
            <form action="inc/added.togallery.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ice_creamheading">Ice-Cream Heading</label>
                    <input type="text" name="ice_heading" placeholder="Heading For Ice Cream . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="icecreamdesc">Ice-Cream Description</label>
                    <textarea name="ice_desc" class="form-control" rows="4" placeholder="Ice Cream Short Description ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="icecreamimage">Ice Cream Image</label>
                    <input type="file" name="ice_cream_img" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="add_icecream" class="form-control btn btn-success" value="Add to Gallery">
                </div>
            </form>
        </div>
    </div>
</div>




<?php
require 'footer.php';
?>

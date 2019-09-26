<?php
require 'header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Add To Slider</h2>
            </div>
            <form action="inc/slider-added.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="sliderheading">Slider Heading</label>
                    <input type="text" name="slider_heading" placeholder="Slider Heading . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="sliderdescription">Slider Description</label>
                    <textarea name="slider_desc" rows="4" placeholder="Slider Description . . . " class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="sliderbutton">Slider Button Text</label>
                    <input type="text" name="slider_button" placeholder="Slider Button . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="sliderbtnlink">Slider Button Link</label>
                    <input type="text" name="slider_btnlink" placeholder="Slider Button Link . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label for="slidericon">Slider Icon Image</label>
                    <input type="file" name="slider_icon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sliderbackground">Slider Background</label>
                    <input type="file" name="slider_bg" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="add_slider" class="form-control btn btn-success" value="Add to Slider">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

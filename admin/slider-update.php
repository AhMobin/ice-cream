<?php
require 'header.php';

$id = $_GET['id'];
$SelectSlider = "SELECT * FROM sliders WHERE slider_id=$id";
$SelectSliderResult = mysqli_query($connect, $SelectSlider);
$assocSlider = mysqli_fetch_assoc($SelectSliderResult);
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 m-auto">
            <div class="jumbotron py-2">
                <h2>Update Slider #ID:<?php echo $assocSlider['slider_id'] ?></h2>
            </div>
            <form action="inc/slider-updated.php" method="post" enctype="multipart/form-data">
                <input type="text" name="sld_id" value="<?php echo $assocSlider['slider_id'] ?>">
                <div class="form-group">
                    <label for="sliderheading">Slider Heading</label>
                    <input type="text" name="sld_heading" value="<?php echo $assocSlider['slider_heading'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sliderdescription">Slider Description</label>
                    <textarea name="sld_desc" rows="4" placeholder="Slider Description . . . " class="form-control"><?php echo $assocSlider['slider_desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="sliderbutton">Slider Button Text</label>
                    <input type="text" name="sld_button" value="<?php echo $assocSlider['slider_button'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sliderbtnlink">Slider Button Link</label>
                    <input type="text" name="sld_btnlink" value="<?php echo $assocSlider['slider_btn_link'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="currentslidericon">Current Slider Icon</label><br>
                    <img src="uploads/images/sliders/icons/<?php echo $assocSlider['slider_ico_img'] ?>" alt="" width="120" height="80">
                </div>
                <div class="form-group">
                    <label for="slidericonupdate">Slider Icon Update</label>
                    <input type="file" name="sld_ic_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="currentsliderbackground">Current Slider Background</label><br>
                    <img src="uploads/images/sliders/backgrounds/<?php echo $assocSlider['slider_bg_img'] ?>" alt="" width="120" height="80">
                </div> 
                <div class="form-group">
                    <label for="sliderbackground">Slider Background Update</label>
                    <input type="file" name="sld_bg_update" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="update_slider" class="form-control btn btn-success" value="Update Slider">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

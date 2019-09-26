<?php
require 'header.php';

$selectSlider = "SELECT * FROM sliders";
$selectionResult = mysqli_query($connect, $selectSlider);

?>

<div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 offset-md-9 offset-lg-9">
            <form action="add-slider.php">
                <button class="btn btn-primary form-control my-2">Add New Slider</button>
            </form>
        </div>
    </div>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Slider Heading</th>
            <th scope="col">Slider Description</th>
            <th scope="col">Slider Botton</th>
            <th scope="col">Slider Icon</th>
            <th scope="col">Slider Background</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($selectionResult as $slider){ ?>
        <tr>
            <th scope="row"><?php echo $slider['slider_id'] ?></th>
            <td><?php echo $slider['slider_heading'] ?></td>
            <td><?php echo substr($slider['slider_desc'], 0, 30).' ....' ?></td>
            <td><a href="<?php echo $slider['slider_btn_link']?>"><?php echo $slider['slider_button']?></a></td>
            <td class="text-center" name="sl_icon"><img src="uploads/images/sliders/icons/<?php echo $slider['slider_ico_img'] ?>" width="50" height="40"></td>
            <td class="text-center" name="sl_bg"><img src="uploads/images/sliders/backgrounds/<?php echo $slider['slider_bg_img'] ?>" width="50" height="40"></td>
            <td width="20%">
            <a href="inc/slider-status.php?id=<?php echo $slider['slider_id'] ?>" class="btn btn-<?=($slider['slider_status']==0)?'secondary' : 'success' ?> m-1"><?=($slider['slider_status']==0)?'Deactivated' : 'Activated' ?></a>
                <a href="slider-update.php?id=<?php echo $slider['slider_id'] ?>" class="btn btn-info">Update</a>
                <a href="inc/delete-sliderimg.php?id=<?php echo $slider['slider_id'] ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $slider['slider_id'] ?>">Delete</a>
            </td>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $slider['slider_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attempt Delete Action!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are You Sure To Delete The Slider? If Not Then Close The Panel.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger"><a class="text-white" style="text-decoration:none" href="inc/delete-sliderimg.php?id=<?php echo $slider['slider_id'] ?>">Delete</a></button>
                    </div>
                    </div>
                </div>
                </div>
            <!-- End Modal -->
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
require 'footer.php';
?>

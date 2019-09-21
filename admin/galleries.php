<?php
require 'header.php';

$selectImgs = "SELECT * FROM galleries";
$selectionResult = mysqli_query($connect, $selectImgs);

?>

<div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 offset-md-9 offset-lg-9">
            <form action="add-to-gallery.php">
                <button class="btn btn-primary form-control my-2">Add to Gallery</button>
            </form>
        </div>
    </div>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ice Cream Heading</th>
            <th scope="col">Ice Cream Description</th>
            <th scope="col">Ice Cream Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($selectionResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['gl_img_id'] ?></th>
            <td><?php echo $value['gl_img_heading'] ?></td>
            <td width="25%"><?php echo $value['gl_img_desc'] ?></td>
            <td class="text-center"><img src="uploads/images/icecream/<?php echo $value['gl_img_name'] ?>" width="50" height="40"></td>
            <td width="20%">
                <a href="ice-cream-update.php?id=<?php echo $value['gl_img_id'] ?>" class="btn btn-info">Update</a>
                <a href="inc/delete-ice-cream.php?id=<?php echo $value['gl_img_id'] ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $value['gl_img_id'] ?>">Delete</a>
            </td>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $value['gl_img_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attempt Delete Action!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are You Sure To Delete The Ice Cream From Gallery? If Not Then Close The Panel.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger"><a class="text-white" style="text-decoration:none" href="inc/delete-ice-cream.php?id=<?php echo $value['gl_img_id'] ?>">Delete</a></button>
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

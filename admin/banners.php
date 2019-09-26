<?php
require 'header.php';

$selectBanner = "SELECT * FROM banners";
$selectionResult = mysqli_query($connect, $selectBanner);

?>

<div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 offset-md-9 offset-lg-9">
            <form action="add-banner.php">
                <button class="btn btn-primary form-control my-2">Add New Banner</button>
            </form>
        </div>
    </div>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Banner Heading</th>
            <th scope="col">Banner Description</th>
            <th scope="col">Banner Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($selectionResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['banner_id'] ?></th>
            <td><?php echo $value['banner_heading'] ?></td>
            <td width="25%"><?php echo substr($value['banner_desc'], 0, 30).' ....' ?></td>
            <td class="text-center"><img src="uploads/images/banners/<?php echo $value['banner_img'] ?>" width="50" height="40"></td>
            <td width="20%">
                <a href="banner-update.php?id=<?php echo $value['banner_id'] ?>" class="btn btn-info">Update</a>
                <a href="inc/delete-banner.php?id=<?php echo $value['banner_id'] ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $value['banner_id'] ?>">Delete</a>
            </td>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $value['banner_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attempt Delete Action!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are You Sure To Delete The Banner? If Not Then Close The Panel.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger"><a class="text-white" style="text-decoration:none" href="inc/delete-banner.php?id=<?php echo $value['banner_id'] ?>">Delete</a></button>
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

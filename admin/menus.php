<?php
require 'header.php';

$selectMenus = "SELECT * FROM menus";
$selectionResult = mysqli_query($connect, $selectMenus);

?>

<div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 offset-md-9 offset-lg-9">
            <form action="add-to-menu.php">
                <button class="btn btn-primary form-control my-2">Add to Menu</button>
            </form>
        </div>
    </div>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Menu Name</th>
            <th scope="col">Menu Category</th>
            <th scope="col">Menu Description</th>
            <th scope="col">Menu Price</th>
            <th scope="col">Menu Thumbnail</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($selectionResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['menu_id'] ?></th>
            <td><?php echo $value['menu_name'] ?></td>
            <td><?php echo strtoupper($value['menu_category']) ?></td>
            <td><?php echo $value['menu_desc'] ?></td>
            <td><?php echo $value['menu_price'] ?> $ </td>
            <td><img src="uploads/images/menus/<?php echo $value['menu_img'] ?>" alt="" width="100"> </td>
            <td width="20%">
                <a href="update-menu.php?id=<?php echo $value['menu_id'] ?>" class="btn btn-info">Update</a>
                <a href="inc/delete-menu.php?id=<?php echo $value['menu_id'] ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $value['menu_id'] ?>">Delete</a>
            </td>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $value['menu_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attempt Delete Action!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are You Sure To Delete The Menu Item? If Not Then Close The Panel.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger"><a class="text-white" style="text-decoration:none" href="inc/delete-menu.php?id=<?php echo $value['menu_id'] ?>">Delete</a></button>
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

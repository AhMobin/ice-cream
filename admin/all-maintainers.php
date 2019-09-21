<?php
require 'header.php';

$selectAdmin = "SELECT * FROM admins";
$adminResult = mysqli_query($connect, $selectAdmin);
?>
<?php
require 'breadcrumb.php';
?>
<div class="mb-5"></div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Profile Image</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($adminResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['admin_id'] ?></th>
            <td><img src="uploads/images/icecream/default.png" alt="img" width="30"></td>
            <td><?php echo $value['admin_name'] ?></td>
            <td><?php echo $value['admin_email'] ?></td>
            <td><?php if($value['admin_role'] == 1){ echo "Admin"; } else if($value['admin_role'] == 2){ echo "Editor"; }else if($value['admin_role'] == 3){ echo "Moderator"; }else{ echo "Author"; } ?></td>
            <td>
                <a href="" class="btn btn-info">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



<?php
require 'footer.php';
?>

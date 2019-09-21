<?php
require 'header.php';

$selectSubscribers = "SELECT * FROM subscribers";
$subscriberResult = mysqli_query($connect, $selectSubscribers);
?>
<?php
require 'breadcrumb.php';
?>
<div class="mb-5"></div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Subsriber Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($subscriberResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['subs_id'] ?></th>
            <td><?php echo $value['subs_email'] ?></td>
            <td>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



<?php
require 'footer.php';
?>

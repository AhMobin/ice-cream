<?php
require 'header.php';

$selectContacts = "SELECT * FROM contacts";
$$selectContactsResult = mysqli_query($connect, $selectContacts);
?>
<?php
require 'breadcrumb.php';
?>
<div class="mb-5"></div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Contact Name</th>
            <th scope="col">Contact Email</th>
            <th scope="col">Message Subject</th>
            <th scope="col">User's Message</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($$selectContactsResult as $value){ ?>
        <tr>
            <th scope="row"><?php echo $value['contact_id'] ?></th>
            <td><?php echo $value['contact_name'] ?></td>
            <td><?php echo $value['contact_email'] ?></td>
            <td><?php echo $value['contact_subject'] ?></td>
            <td><?php echo $value['contact_message'] ?></td>
            <td>
                <a href="" class="btn btn-info">Reply</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



<?php
require 'footer.php';
?>

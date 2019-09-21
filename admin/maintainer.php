<?php
session_start();
require 'header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-sm-10 col-xs-10 m-auto">
                <div class="jumbotron py-2 mb-1 mt-3">
                    <h2>Add Admisitrator</h2>
                </div>
                    <?php if(isset($_SESSION['field'])){?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $_SESSION['field']; unset($_SESSION['field']); ?>
                        </div>
                    <?php }else if(isset($_SESSION['role'])){ ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $_SESSION['role']; unset($_SESSION['role']); ?>
                        </div>
                    <?php }else if(isset($_SESSION['email'])){ ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $_SESSION['email']; unset($_SESSION['email']); ?>
                        </div>
                    <?php }else if(isset($_SESSION['pass'])){ ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $_SESSION['pass']; unset($_SESSION['pass']); ?>
                        </div>
                    <?php }else if(isset($_SESSION['added'])){ ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['added']; unset($_SESSION['added']); ?>
                        </div>
                    <?php } ?>
                <div class="form-body mb-4">
                    <form action="inc/role-declare.php" method="post">
                        <div class="form-group">
                            <label for="maintainername">Full Name</label>
                            <input type="text" class="form-control" name="m_fname" placeholder="Enter Your First Name..." value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} unset($_SESSION['fname']); ?>">
                        </div>
                        <div class="form-group">
                            <label for="maintaineremail">Email Address</label>
                            <input type="email" class="form-control" name="m_email" placeholder="Enter Your Email..." value="<?php if(isset($_SESSION['memail'])){ echo $_SESSION['memail'];} unset($_SESSION['memail']); ?>">
                        </div>
                        <div class="form-group">
                            <label for="maintainerpassword">Password</label>
                            <input type="password" class="form-control" name="m_pass" placeholder="Enter Password...">
                        </div>
                        <div class="form-group">
                            <label for="emailconfirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="m_repass" placeholder="Enter Password...">
                        </div>
                        <div class="form-group">
                            <label for="maintainerole">Role in Educity</label>
                            <select name="maintainerole" class="form-control">
                                <option value="0">Define Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                                <option value="3">Moderator</option>
                                <option value="4">Author</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="roledefine" class="form-control btn btn-primary">Add Maintainer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
require 'breadcrumb.php';

require 'footer.php';
?>

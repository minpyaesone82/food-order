<?php include_once "dashboard-menu.php"; ?>
<?php include "core/base.php"; ?>
<?php include "core/functions.php"; ?>

<div class="container">

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="font-weight-bolder">New Make Admin</h4>
                </div>
                <div class="card-body">
                    <?php 
                        if(isset($_POST['make-admin'])){
                            echo userAdd();
                        }
                    ?>
                    <form action="" method="post">
                        <div class="form-group mt-2">
                            <label for="full_name" >Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="username">Username</label>
                            <input type="email" name="username" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="my-3">
                        <button type="submit" name="make-admin" class="btn btn-primary">Make Admin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>  

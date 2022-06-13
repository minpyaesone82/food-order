<?php require "template/header.php"; ?>
<?php include "core/base.php"; ?>
<?php include "core/functions.php"; ?>

<div class="container-fluid">
<div class="col-12">
        <div class="row">
            
            <?php include "dashboard-menu.php";?>

            <div class="manage-admin-content my-5">
                <h3 class="font-weight-bolder my-3 fs-2">Manage Admin</h3>
                <div class="">
                    <a href="add-admin.php" class="btn btn-primary mb-3">Make Admin</a>
                </div>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                        <tr>
                            <td>S.N.</td>
                            <td class="text-nowrap">Full Name</td>
                            <td>Username</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            foreach(users() as $user){
                                ?>   
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['full_name'] ?></td>
                                <td><?php echo $user['username'] ?></td>
                                <td class="text-nowrap">
                                    <a href="" class="btn btn-info ">Update Admin</a>
                                    <a href="" class="btn btn-danger ">Delete</a>
                                </td>
                            </tr>
                                
                        <?php } ?>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
  </div>
</div>

<?php require "template/footer.php"; ?>


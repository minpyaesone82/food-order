<?php require "core/auth.php"; ?>
<?php require "template/header.php"; ?>


  <div class="col-12">
        <div class="row">
            <div class="dashboard">
                <div class="col-12">
                    <div class="header shadow-sm">
                        <div class="p-3">
                            <ul class="item mb-0">
                                <li><a href="index.php">Home</a> </li>
                                <li><a href="manage-admin.php">Admin</a> </li>
                                <li><a href="manage-category.php">Category</a></li>
                                <li><a href="manage-food.php">Food</a></li>
                                <li><a href="manage-order.php">Order</a></li>

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="content m-5 p-5">
                <h3>Hello, Welcome <?php echo $_SESSION['users']['full_name']; ?></h3>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
  </div>

<?php require "template/footer.php"; ?>


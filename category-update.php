<?php  include "core/auth.php";?>
<?php require "core/functions.php"; ?>
<?php require "core/base.php"; ?>
<?php require "template/header.php"; ?>

<div class="container-fluid">
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

            <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12 col-lg-7">
                    <div class="card mx-md-5">
                        <div class="card-header">
                            <h5>Create Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="content">
                                <?php 
                                    $id = $_GET['id'];
                                    $Current = category($id);
                                    if(isset($_POST['update-category'])){
                                      echo categoryUpdate();
                                    }
                                ?>
                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id ;?>">

                                    <div class="form-inline">
                                        <label for="" >Category Title</label>
                                        <input type="text" class="form-control mt-2" name="title" value="<?php echo $Current['title']; ?>" placeholder="Category Title" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="file" class="form-control" name="image"  placeholder="upload image">
                                            </div>
                                            <div class="col-6">
                                                <img src="<?php echo $url; ?>/images/category/<?php echo $Current['image_name']; ?>" style="width:90px;" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="update-category" class="btn btn-primary mb-3">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php"; ?>


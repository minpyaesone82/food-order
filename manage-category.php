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
                                    if(isset($_POST['create-category'])){
                                      categoryCreate();
                                    }
                                ?>
                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                    <div class="col-auto">
                                        <input type="text" class="form-control" name="title"  placeholder="Category Title" required>
                                    </div>
                                    <div class="col-auto">
                                        <input type="file" class="form-control" name="image"  placeholder="upload image" required>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="create-category" class="btn btn-primary mb-3">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive mx-md-5 mt-2" >
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Title</td>
                                    <td>User-Name</td>
                                    <td>Photo</td>
                                    <td>Action</td>
                                    <td>Created Time</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(categories() as $category){
                                         $time = date("J M Y",strtotime($category['created_at']));

                                    ?>

                                    <tr>
                                        <td><?php echo $category['id'] ?></td>
                                        <td><?php echo $category['title'] ?></td>
                                        <td class="text-nowrap"><?php echo user($category['user_id'])['full_name'];?></td>
                                        <td class="">
                                            <?php 
                                                if($category['image_name']){
                                                ?>
                                                <img src="<?php echo $url; ?>/images/category/<?php echo $category['image_name']; ?>" style="width:90px;" alt="">
                                          <?php  } ?>
                                        </td>
                                        <td class="text-nowrap">
                                            <a class="btn btn-sm btn-outline-danger" href="category-del.php?id=<?php echo $category['id'] ;?>&image_name=<?php echo $category['image_name']; ?>">Delete</a>
                                            <a class="btn btn-sm btn-outline-warning" href="category-update.php?id=<?php echo $category['id'] ?>">Update</a>
                                        </td> 
                                        <td class="text-nowrap"><?php echo $time ;?></td>
                              
                                     </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php"; ?>


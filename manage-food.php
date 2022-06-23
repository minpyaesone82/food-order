
<?php include "core/base.php"; ?>
<?php include "core/functions.php"; ?>
<?php require "template/header.php"; ?>

<div class="container-fluid">
<div class="col-12">
        <div class="row">
            
            <?php include "dashboard-menu.php";?>

            <div class="manage-admin-content my-5">
                <h3 class="font-weight-bolder my-3 fs-2">Manage Food</h3>
                <div class="">
                    <a href="create-food.php" class="btn btn-primary mb-3">Create Food</a>
                </div>
                <div class="table-responsive">
                <table class="table table-hover mt-1">
                    <thead class="">
                        <tr>
                            <td>#</td>
                            <td class="text-nowrap">Title</td>
                            <td>Description</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Category</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach(foodList() as $f){ ?>
                            <tr>
                                <td><?php echo $f['id'] ?></td>
                                <td><?php echo short($f['title'],15) ?></td>
                                <td><?php echo short($f['description'],30); ?></td>
                                <td><?php echo $f['price'] ?></td>
                                <td class="img-size-50">
                                    <img src="<?php echo $url; ?>/images/food/<?php echo $f['image_name']; ?>" style="width:80px;" alt="No Photo">
                                </td>
                                <td><?php echo category($f['category_id'])['title']; ?></td>
                                <td>
                                    <a href="food-del.php?id=<?php echo $f['id']; ?>&image_name=<?php echo $f['image_name']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a class="btn btn-sm btn-info" href="food-update.php?id=<?php echo $f['id'] ?>">Update</a>
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


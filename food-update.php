<?php  include "core/auth.php";?>
<?php require "core/functions.php"; ?>
<?php require "core/base.php"; ?>
<?php require "template/header.php"; ?>

<?php include_once "template/dashboard-nav.php"; ?>

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
                                    $Current = foodListId($id);
                                    if(isset($_POST['update-food'])){
                                      echo foodUpdate();
                                    }
                                ?>
                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id ;?>">

                                    <div class="form-inline">
                                        <label for="" >Food Title</label>
                                        <input type="text" class="form-control mt-2" name="title" value="<?php echo $Current['title']; ?>" required>
                                    </div>
                                    <div class="form-inline">
                                        <label for="" >Food Description</label>
                                        <textarea type="text" class="form-control mt-2" name="description" required>  <?php echo $Current['description']; ?></textarea>
                                    </div>
                                    <div class="form-inline">
                                        <label for="" >Food Price</label>
                                        <input type="number" class="form-control mt-2" name="price" value="<?php echo $Current['price']; ?>"  required>
                                    </div>
                                    <div class="form-inline">
                                        <div class="dropdown show">
                                            <select class=" form-select"aria-label="Default select example" name="category_id" required>
                                                <?php
                                                    foreach(categories() as $category){ ?> 

                                                        <option value="<?php echo $category['id']; ?>" name="category" class="list-group-item list-group-item-action"><?php echo $category['title'] ?></option>

                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="file" class="form-control" name="image"  placeholder="upload image">
                                            </div>
                                            <div class="col-6">
                                                <img src="<?php echo $url; ?>/images/food/<?php echo $Current['image_name']; ?>" style="width:80px;" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="update-food" class="btn btn-primary mb-3">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

<?php require "template/footer.php"; ?>


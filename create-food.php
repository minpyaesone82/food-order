<?php include_once "dashboard-menu.php"; ?>
<?php include "core/base.php"; ?>
<?php include "core/functions.php"; ?>

<div class="container">

    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="font-weight-bolder">New Make Food</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <?php
                            if(isset($_POST['create-food'])){
                                echo createFood();
                            }
                        ?>
                        <form  method="post" enctype="multipart/form-data">
                            <div class="d-flex align-items-center mb-2" >
                                <label class=" col-sm-2">Title:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Enter Title" name="title" required>
                                </div>
                            </div>
                            <div  class="d-flex align-items-center">
                                <label class="control-label col-sm-2" >Description:</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control"  placeholder=" Description" name="description"  required></textarea>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-2" >
                                <label class="control-label col-sm-2">Price:</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2" >
                                <label class="control-label col-sm-2">Photo:</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" name="image" id="image" placeholder="Upload image">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2" >
                                <label class="control-label col-sm-2">Category :</label>
                                <div class="col-sm-10">
                                <div class="dropdown show">
                                    <select class=" form-select"aria-label="Default select example" name="category" required>
                                        <?php
                                            foreach(categories() as $category){ ?> 

                                                <option value="<?php echo $category['id']; ?>" name="category" class="list-group-item list-group-item-action"><?php echo $category['title'] ?></option>

                                        <?php  } ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-auto my-3 d-flex justify-content-between">
                                <a href="manage-food.php" class="btn btn-dark">Back</a>
                                 <button type="submit" name="create-food" class="btn btn-primary px-5">Create Food</button>
                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
  
</div>  


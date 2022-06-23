<?php
    
    include "core/base.php";
     include_once "front-panel/header.php" ;
     include_once "core/functions.php"
     ?>

            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'] ;
                    $currentCategory = category($id);
                }else{
                    $id != foodByCategory('category_id');
                    return wrongAlert("Category do not match");
                }
            ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on <a href="#" style="text-decoration: none;" class="text-white">"<?php echo $currentCategory['title'];  ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 
               
                foreach(foodByCategory($id) as $rel){ ?>
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="<?php echo $url; ?>/images/food/<?php echo $rel['image_name']; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $rel['title']; ?></h4>
                        <p class="food-price"><?php echo $rel['price']; ?></p>
                        <p class="food-detail">
                            <?php echo $rel['description'] ;?>
                        </p>
                        <br>

                        <a href="<?php echo $url; ?>/order.php?id=<?php echo $rel['id']; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
                <?php } ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include_once "front-panel/footer.php" ; ?>
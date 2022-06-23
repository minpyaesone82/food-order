<?php   
    require "front-panel/header.php";
    include "core/functions.php";
    include "core/base.php";?>
   

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on Your Search <a href="#" style="text-decoration: none;" class="text-white">"<?php echo $_POST['search']; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php 
                $result = search($_POST['search']);
                if(count($result) == 0){
                   echo wrongAlert("There is no result");
                }
            ?>

            <?php foreach($result as $food){ ?>

                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="<?php echo $url; ?>/images/food/<?php echo $food['image_name']; ?>" alt="No photo" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $food['title']; ?></h4>
                        <p class="food-price">$ <?php echo $food['price'] ?></p>
                        <p class="food-detail">
                        <?php echo $food['description']; ?>
                        </p>
                    

                        <a href="order.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

            <?php } ?>
            
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include_once "front-panel/footer.php" ; ?>
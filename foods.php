    <?php
         require "core/auth.php";
         include "front-panel/header.php";
         include "core/base.php";
         include "core/functions.php";
    
    ?>
    <!-- Navbar Section Starts Here -->
    
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo $url; ?>/food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php foreach(foodList() as $food){ ?>

                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="<?php echo $url; ?>/images/food/<?php echo $food['image_name']; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $food['title']; ?></h4>
                        <p class="food-price">$ <?php echo $food['price'] ?></p>
                        <p class="food-detail">
                        <?php echo $food['description']; ?>
                        </p>
                       
                        <a href="order.php?id=<?php echo $food['id']; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

            <?php } ?>
           

            <div class="clearfix"></div>

            

        </div>

    </section>

    <?php include "front-panel/footer.php"; ?>
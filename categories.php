<?php include "front-panel/header.php" ; ?>
<?php include "core/functions.php" ; ?>
<?php include "core/base.php" ; ?>
  


    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 
                foreach(categories() as $category){ ?>

                <a href="<?php echo $url; ?>/category-foods.php?id=<?php echo $category['id']; ?>">
                    <div class="box-3 float-container">
                    <?php 
                        if($category['image_name']){
                        ?>
                        <img src="<?php echo $url; ?>/images/category/<?php echo $category['image_name']; ?>" alt="" class="img-responsive-food img-curve">
                    <?php  } ?>

                        <h3 class="float-text text-white fw-bolder fs-2" ><?php echo $category['title'] ?></h3>
                    </div>
                </a>

             <?php } ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
    <?php include_once "front-panel/footer.php" ; ?>
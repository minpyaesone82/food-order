<?php 
    require "template/header.php";
    include "core/functions.php";
    include "core/base.php";

?>


    
    <!-- Navbar Section Starts Here -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
        <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fs-3"> <i class='bx bx-menu'></i> </span>
            
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="categories.php">Category</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="foods.php">Food</a>
                </li>
               
                <li class="Dashboard">
                <a class="nav-link btn btn-info text-white" href="dashboard.php">Dashboard</a>
                </li>
                
                
            
            </div>
        </div>
    </nav>
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

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center text-danger"><span class="Menu fw-bolder fs-1">Menu</span> Category List</h2>

            <?php 
                foreach(categories() as $category){ ?>

                <a href="<?php echo $url; ?>/category-foods.php?id=<?php echo $category['id']; ?>">
                    <div class="box-3 float-container">
                    <?php 
                        if($category['image_name']){
                        ?>
                        <img src="<?php echo $url; ?>/images/category/<?php echo $category['image_name']; ?>" alt="" class="img-responsive-food img-curve">
                    <?php  } ?>

                        <h3 class="float-text text-white"><?php echo $category['title'] ?></h3>
                    </div>
                </a>

             <?php } ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center my-3"><span class="fw-bolder fs-1 text-danger">Food</span> Menu</h2>

            <?php foreach(foodList() as $food){ ?>

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
                       

                        <a href="order.php?id=<?php echo $food['id']; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

            <?php } ?>

            <div class="clearfix"></div>

        </div>

        <p class="text-center">
            <a href="<?php echo $url; ?>/foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->






<?php require "template/footer.php"; ?>
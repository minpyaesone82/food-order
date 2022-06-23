<?php
     include "front-panel/header.php"; 
     include "core/functions.php";
     include_once "core/base.php";
     
     ?>
    <!-- Navbar Section Starts Here -->
  
    <!-- Navbar Section Ends Here -->

    <?php 
        // if(isset($_GET['id'])){
        //     $id = $_GET['id'];
        //     $sql = "SELECT * FROM tbl_food WHERE id = $id";
        //     $res = mysqli_query(con(),$sql);
        //     $count = mysqli_num_rows($res);
        //     if($count == 1){
        //         $row = mysqli_fetch_assoc($res);
        //         $title = $row['title'];
        //         $image = $row['image_name'];
        //         $price = $row['price'];
        //     }
        // }
        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $current = foodListId($id);
            $image = $current['image_name'];
            $title = $current['title'];
            $price = $current['price'];
        }
       
      
    ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">

        <?php 

            if(isset($_POST['submit']))
            {

                echo runOrder();
            }
        ?>
        <div class="">
           
            <h2 class="text-center my-2 mb-5 text-white fw-bolder fs-4">Fill this form to confirm your order.</h2>


            <div class="">
           
            <form action="" class="order" method="post">
                <fieldset>
                    <legend>Selected Food</legend>
                   
                    <div class="food-menu-img">
                        <img src="<?php echo $url; ?>/images/food/<?php echo $image; ?>" alt="No photo" class="img-responsive img-curve" name="image">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3 name="food-title"><?php echo $title; ?></h3>
                        <input type="hidden" name="food-title" value="<?php echo $title; ?>">

                        <p class="food-price" name="food-price">$ <?php echo $price; ?></p>
                        <input type="hidden" name="food-price" value="<?php echo $price ;?>">
                        
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full_name" placeholder="Your Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="number" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="5" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            </div>
        </div>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   
    <?php include "front-panel/footer.php"; ?>
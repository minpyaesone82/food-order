<?php 
    require_once "core/functions.php";
    require_once "core/base.php";

    //check id and image_name value is set or not//
    if(isset($_GET['id']) AND isset($_GET['image_name'])){

        //get value and delete
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //to delete image file//
        $path = "./images/category/".$image_name;
        $remove = unlink($path);
        if($remove == true){
            header("location:manage-category.php");
        }else{
            echo "fail";
        }
        
        //delete database
        $sql = "DELETE FROM tbl_category WHERE id = $id ";
        if(mysqli_query(con(),$sql)){
            header("location:manage-category.php");
        }
    }
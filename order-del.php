<?php 
    require_once "core/functions.php";
    require_once "core/base.php";

    //check id and image_name value is set or not//
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //delete database
        $sql = "DELETE FROM tbl_order WHERE id = $id ";
        if(mysqli_query(con(),$sql)){
            header("location:manage-order.php");
        }
    }
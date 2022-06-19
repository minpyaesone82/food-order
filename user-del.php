<?php 
    require_once "core/functions.php";
    require_once "core/base.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id ";
    if(mysqli_query(con(),$sql)){
        header("location:manage-admin.php");
    }
<?php 

    function con(){
        return mysqli_connect("localhost","root","","food-order");
    }
    
    $url = "http://{$_SERVER["HTTP_HOST"]}/food-order";

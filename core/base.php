<?php 

    function con(){
        return mysqli_connect("localhost","root","","food-order");
    }
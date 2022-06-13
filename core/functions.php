<?php 

function wrongAlert($data){
    return "<p style='background:#da8f97;padding:6px 0 6px 10px;font-size:10px;font-weight:600;color:#fff;'>$data</p>";
}

function successAlert($data){
    return "<p style='background:#6ab04c;padding:6px 0 6px 10px;font-size:10px;font-weight:600;color:#fff;'>$data</p>";
}


function runQuery($sql){
    $con = con();
    if(mysqli_query($con,$sql)){
        return true;
    }else{
        die("Query fail :" .mysqli_error($con));
    }
}

function fetch($sql){
    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function fetchAll($sql){
    $con = con();
    $query = mysqli_query($con,$sql);
    $rows = [];
    while($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;

}

function userAdd(){
    $fullName = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO users (full_name,username,password) VALUES ('$fullName','$username','$password')";
    if(runQuery($sql)){
        return successAlert('Successfully make Admin');
    }else{
        return wrongAlert('something is wrong');
    }
}

function users(){
    $sql = "SELECT * FROM users";
    return fetchAll($sql);
}
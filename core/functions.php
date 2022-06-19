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
function user($id){
    $sql = "SELECT * FROM users WHERE id=$id";
    return fetch($sql);
}

function short($str,$length="30"){
    return substr($str,0,$length);
}


function textFilter($text){
    $text = trim($text);
    $text= htmlentities($text, ENT_QUOTES);
    $text= stripcslashes($text);
    return $text;
}

function redirect($l){
    return header("location:$l");
}

function register(){
    
    $name = $_POST['name'];;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    
    if($password == $cPassword){
        $sPass = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (full_name,username,password) VALUES ('$name','$email','$sPass')";
        mysqli_query(con(),$sql);
        header("location:login.php");
    }else{
        return wrongAlert('Password is wrong');
    }
}

//login start 
function login(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$email' ";
    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);
        if(!$row){
            return wrongAlert("Email or Password do not match");
        }else{
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['users'] = $row;
                redirect("dashboard.php");
            }else{
                return wrongAlert("Email or Password do not match");
            }

        }

    }

//login end

function categoryCreate(){
    $title = $_POST['title'];
    $user_id = $_SESSION['users']['id'];
    if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $source_path = $_FILES['image']['tmp_name'];
        $dir = "./images/category/".$image_name;

        $upload = move_uploaded_file($source_path,$dir);
        if(!$upload == true){
            return wrongAlert('Something is wrong');
        }
    }
    $sql = "INSERT INTO tbl_category (title,image_name,user_id) VALUES ('$title','$image_name','$user_id')";
    if(runQuery($sql)){ 
        return successAlert('Successfully create Category');
    }
}

function categories(){
    $sql = "SELECT * FROM tbl_category ORDER BY id DESC";
    return fetchAll($sql);
}

function category($id){
    $sql = "SELECT * FROM tbl_category WHERE id = $id ";
    return fetch($sql);
}

function categoryUpdate(){
    
    $id = $_GET['id'];
    $title = $_POST['title'];
    if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $source_path = $_FILES['image']['tmp_name'];
        $dir = "./images/category/".$image_name;
        $upload = move_uploaded_file($source_path,$dir);
        $sql = "UPDATE tbl_category SET title='$title',image_name='$image_name' WHERE id = $id";
        if(runQuery($sql)){ 
        header('location:manage-category.php');
    }
}
    
}

function createFood(){
    $title = $_POST['title'];
    if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];

        $source_path = $_FILES['image']['tmp_name'];
        $dir = "./images/food/".$image_name;
        $upload = move_uploaded_file($source_path,$dir); 
    }else{
        $image_name = '';
    }

    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category'];
     $sql = "INSERT INTO tbl_food (title,description,price,image_name,category_id) VALUES ('$title','$description','$price','$image_name','$category_id')";
     
    if(runQuery($sql)){
        return successAlert("Successfully create food");
    }else{
        return wrongAlert("fail something");
    }

}
function foodList(){
    $sql = "SELECT * FROM tbl_food";
    return fetchAll($sql);

}
function foodListId($id){
    $sql = "SELECT * FROM tbl_food WHERE id=$id";
    return fetch($sql);

}

function foodUpdate(){
    
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $source_path = $_FILES['image']['tmp_name'];
        $dir = "./images/food/".$image_name;
        $upload = move_uploaded_file($source_path,$dir);
    }else{
        $image_name = '';
    }
    $sql = "UPDATE tbl_food SET title='$title',image_name='$image_name',description='$description',price='$price',category_id='$category_id' WHERE id = $id";
    if(runQuery($sql)){ 
    return successAlert("Food post is successfully updated.");
    }

    
}


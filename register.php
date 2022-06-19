<?php require "core/functions.php"; ?>
<?php require "core/base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
</head>
<body>

<div class="container">
      <div class="row d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-12 col-md-4">
          <div class="card shadow">
            <div class="card-body">
              <h4 class="text-primary text-center"><i class="feather-users"></i>User Register</h4>
              <hr>
              <?php if(isset($_POST['reg-btn'])){
                echo register();
              } ?>
              <form action="" method="post">
                <div class="form-group mb-3">
                  <label for=""> <i class="feather-users text-primary mr-2"></i>Your name</label>
                  <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group mb-3">
                  <label for="">  <i class="feather-mail text-primary mr-2"></i>Your email</label>
                  <input type="text" name="email" required class="form-control">
                </div>
                <div class="form-group mb-3">
                  <label for=""> <i class="feather-lock text-primary mr-2"></i>Your password</label>
                  <input type="password" name="password" required class="form-control">
                </div>
                <div class="form-group mb-3">
                  <label for=""> <i class="feather-lock text-primary mr-2"></i>Confirm password</label>
                  <input type="password" name="cPassword" required class="form-control">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" name="reg-btn"> Register</button>
                  <a href="login.php" class="btn btn-outline-primary">Sign in</a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>




    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/boxicons/dist/boxicons.js"></script>

</body>
</html>
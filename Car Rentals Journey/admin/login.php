<?php 
  session_start();
  include('../includes/connection.php');
  if (isset($_POST['submit'])) {
      $email     = $_POST['email'];
      $password  = $_POST['password'];
      if (!empty($email) && !empty($password)) {
          $query  = " SELECT * FROM admin
                      WHERE admin_email    = '$email'
                      AND   admin_password = '$password' ";

          $result = mysqli_query($conn,$query);
          $row    = mysqli_fetch_assoc($result);

          if ($row['admin_id']) {
            $_SESSION['admin_id'] = $row['admin_id'];
            header("location:index.php");
          }
          else{

            $error = "Sorry you are Not Autorized";
          }

      }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url(../img/header-bg.jpg)!important;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body card-dark">
      <div class="card-header login-logo">
          <img src="dist/img/AdminLogo.png" alt="Admin Logo" style="opacity: .8">
          <b> Admin</b>
      </div>
      <br>
      <p class="login-box-msg">ONLY! the admin can Log in</p>
      <br>
      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <br><br>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br><br>
         <?php 
            if (isset($error)) {
                echo "<div class ='alert alert-danger'>$error</div>";
            }
            
          ?>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-block btn-outline-warning btn-lg" name="submit">Log In <i class="fas fa-sign-in-alt"></i></button>
          </div>
          <!-- /.col -->
        </div>
        <br>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php
      include("config.php");
      session_start();

      if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $designation = mysqli_real_escape_string($db,$_POST['designation']);
        $forgotpassword = mysqli_real_escape_string($db,$_POST['forgotpassword']);


        $sql = "INSERT INTO user (`first_name`, `last_name`, `email`, `uname`, `password`, `designation`,`forgotpassword`) VALUES('$firstname', '$lastname', '$email', '$username', '$password', '$designation','$forgotpassword');";

        try{
          $result = mysqli_query($db,$sql);
          echo '<script language="javascript">';
          echo 'alert("You may log into the system.")';
          echo '</script>';
        }
        catch(Exception $e){
          echo '<script language="javascript">';
          echo 'alert("Error in connection.")';
          echo '</script>';
        }
 } ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CMR Admin Console - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="firstname" class="form-control form-control-user" name="firstname" id="firstname" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="lastname" class="form-control form-control-user" name="lastname" id="lastname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="dropdown no-arrow mb-4 col-sm-6 mb-3">
                  Designation:
                  <select type="designation" name="designation" id="designation" class="btn btn-secondary dropdown-toggle" aria-labelledby="dropdownMenuButton">
                    <option class="dropdown-item">Manager</option>
                    <option class="dropdown-item">Assistant</option>
                    <option class="dropdown-item">Janitor</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3">
                    <input type="username" class="form-control form-control-user" name="username" id="username" placeholder="Username">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="repPassword" class="form-control form-control-user" name="repPassword" id="repPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group">
                  <input type="forgotpassword" class="form-control form-control-user" name="forgotpassword" id="forgotpassword" placeholder="Enter your ID number...">
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                <hr>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

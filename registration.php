<!DOCTYPE html>
<html lang="en">
<?php
    include_once("config.php");

		$username = "";
		$email ="";
		$errors = array();

		if(isset($_POST['register'])){
      $username = $_POST['username'];
      $email =  $_POST['email'];
      $password_1 =  $_POST['password_1'];
      $password_2 =  $_POST['password_2'];

      if(empty($username)){
        array_push($errors,"Username is required");
      }
      
      if(empty($email)){
        array_push($errors,"Email is required");
      } 
      
      if(empty($password_1)){
        array_push($errors,"Password is required");
      }

      if($password_1 != $password_2){
        array_push($errors,"The two passwords do not match");
      }

      if(count($errors)==0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (username,email,password)
        VALUES ('$username','$email','$password')";

        mysqli_query($mysqli,$sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location:login.php');
      }

		}


?>


  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>register user</title>

 
  </head>

  <body>
    <div class="header">
      <h2 class="text-warning">Register on Blog Website</h2>
    </div>

    <div style="margin: 0px auto">
      <form class="shadow bg-white rounded" method="post" action="registration.php">
      
      <!-- errors print -->
      <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>

        <div class="input-group">
          <label>Email </label> <br />
          <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>

        <div class="input-group">
          <label>Password</label>

          <input type="password" name="password_1" placeholder="Password" />
        </div>
        <div class="input-group">
          <label>Confirm Password</label>
          <input
            type="password"
            name="password_2"
            placeholder="Password confirmation"
          />
        </div>
        <div class="input-group">
          <button type="submit" class="btn btn-primary" name="register">
            Register
          </button>
        </div>

        <p>Already a member? <a href="login.php">Sign in</a></p>
      </form>
    </div>
  </body>
</html>

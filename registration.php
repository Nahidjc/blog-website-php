<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");

$username = "";
$email = "";
$errors = array();

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $email =  $_POST['email'];
  $password_1 =  $_POST['password_1'];
  $password_2 =  $_POST['password_2'];

  if (empty($username)) {
    array_push($errors, "Username is required");
  }

  if (empty($email)) {
    array_push($errors, "Email is required");
  }

  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }

  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  if (count($errors) == 0) {
    $password = md5($password_1);
    $sql = "INSERT INTO users (username,email,password)
        VALUES ('$username','$email','$password')";

    $result = mysqli_query($mysqli, $sql);

    if ($result == true) {
      header('location:login.php');
    } else {
      echo "You have an error";
    }
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";

  }
}


?>


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <title>register user</title>

  <style>
    .loginBtn {
      color: #09f;
      background-color: white;
      border: 1px solid #e2e2e2;
      line-height: 1.38;
      font-weight: bold;
      border-radius: 5px;
      width: auto;
      height: auto;
      padding: 7px 20px;
      margin: 5px 0 0 5px;
    }
  </style>
</head>

<body>

  <section class="container">
    <div class="row vh-100">
      <div class="m-auto col-md-7 col-lg-5 col-sm-8">
        <div class="header">
          <h2 class="text-warning">Register on Blog Website</h2>
        </div>

        <div style="margin: 0px auto">
          <form class="bg-white rounded shadow" method="post" action="registration.php">

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
              <input type="password" name="password_2" placeholder="Password confirmation" />
            </div>
            <div class="input-group">
              <button type="submit" class="loginBtn" name="register">
                Register
              </button>
            </div>

            <p>Already a member? <a href="login.php">Sign in</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
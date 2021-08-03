<!DOCTYPE html>
<html lang="en">

<?php
    include_once("config.php");

		session_start();
		$errors = array();

		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password =  $_POST['password'];

			if(empty($username)){
				array_push($errors,"Username is required");
			}
			
		
			if(empty($password)){
				array_push($errors,"Password is required");
			}

			if(count($errors)==0){
				$password = md5($password);
				$sql = "SELECT * FROM users WHERE username = '$username'
				and password='$password' ";

				$result =mysqli_query($mysqli,$sql);
				
				if(mysqli_num_rows($result) == 1){
					//login user
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header("Location: index.php");

				}else{
					array_push($errors,"wrong username or password");
				}
				
			
			}

		}


?>



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
	<title>Login user</title>
</head>

<body>

	<div class="header">
		<h2>Login on Blog Website</h2>
	</div>

	<div  style=" margin: 0px auto;">

		<form class="shadow  bg-white rounded"  method="post" action="">
			<!-- errors print -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="input-group"><label>Password</label>

				<input type="password" name="password" placeholder="Password">

			</div>
	
			<div class="input-group">

				<button type="submit" class="btn" name="login">Login</button>

			</div>


			<p>
				Not yet  a member? <a href="registration.php">Sign up</a>
			</p>
		</form>
	</div>

</body>

</html>
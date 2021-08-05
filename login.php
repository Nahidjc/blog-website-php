<!DOCTYPE html>
<html lang="en">

<?php
include_once("config.php");

session_start();
$errors = array();

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password =  $_POST['password'];

	if (empty($username)) {
		array_push($errors, "Username is required");
	}


	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password); // encrypted password
		$sql = "SELECT * FROM users WHERE username = '$username'
				and password='$password' ";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) == 1) {
			//login user
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location: index.php");
		} else {
			array_push($errors, "wrong username or password");
		}
	}
}


?>



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
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
	<title>Login user</title>
</head>

<body>

	<section class="container">

		<div class="row vh-100">
			<div class="m-auto col-md-7 col-lg-5 col-sm-8 ">
				<div class="text-white header">
					<h2>Login on Blog Website</h2>
				</div>

				<div>

					<form class="bg-white rounded shadow" method="post" action="">
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

							<button type="submit" class="loginBtn" name="login">Login</button>

						</div>


						<p>
							Not yet a member? <a href="registration.php">Sign up</a>
						</p>
					</form>
				</div>
			</div>

		</div>
	</section>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
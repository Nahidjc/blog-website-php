<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>register user</title>
</head>

<body>

	<div class="header">
		<h2>Login on Blog Website</h2>
	</div>

	<div style="width: 40%; margin: 20px auto;">

		<form method="post" action="register.php">

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
<?php

include_once("config.php");
include_once("function.php");

check_login_user();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <!-- if user not logged in they can not access this page -->

      <?php  if (isset($_SESSION['username'])): ?>
      
      <h1>Home page</h1>
           <p>Welcome <strong> <?php echo $_SESSION['username']; ?>
             </strong> </p>
        <?php endif ?>
        <a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>

</body>
</html>
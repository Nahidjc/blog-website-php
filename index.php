<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- if user not logged in they can not access this page -->
    <?php include('config.php');

        if(empty($_SESSION['username'])){
            header('location: login.php');
        }

?>
</body>
</html>
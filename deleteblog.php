<?php
include("config.php");
include_once("function.php");
check_login_user();
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM post WHERE post_id=$id");
header("Location:myblogs.php");
?>

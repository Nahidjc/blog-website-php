<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM post WHERE post_id=$id");
header("Location:myblogs.php");
?>

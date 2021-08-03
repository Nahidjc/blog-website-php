<?php
// connect to the database

$databaseHost = 'localhost';
$databaseName = 'blog-website-db';
$databaseUsername = 'root';
$databasePassword = '';
$db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// $db = mysqli_connect('localhost','root','','registration');



?>
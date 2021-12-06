<?php

$localhost = '127.0.0.1';
$username = 'root';
$password = '';
$db = 'blog';

$conn = mysqli_connect($localhost,$username,$password,$db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
include "connection.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$email = stripcslashes($email);
$pass = stripcslashes($pass);
$email = mysqli_real_escape_string($connection, $email);
$pass = mysqli_real_escape_string($connection, $pass);

$sql = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
?>
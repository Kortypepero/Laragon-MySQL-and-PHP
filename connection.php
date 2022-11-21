<?php
$host = "localhost";
$user = "root";
$pass = "Darrenkaido143.";
$db = "phpcrud";
$port = 3307;
$connection = mysqli_connect($host, $user, $pass, $db, $port);

if(mysqli_connect_error()){
    echo "unable to connect database";
    echo "Message: ". mysqli_connect_error();
};
?>
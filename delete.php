<?php

require "connection.php";
if(isset($_POST['delete'])){
    $email = trim($_POST['email']);
    $sql1 = "DELETE FROM registration WHERE email = '$email'";
    $result = mysqli_query($connection, $sql1);

    echo "<script> alert ('Successfully Deleted!')</script>";
    // echo "<script> window.location.href= 'register.php'</script>";
    header('location: register.php');
} else {
    header('location: register.php');
}

?>
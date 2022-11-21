<?php
require "connection.php";

if(isset($_POST['createbtn'])){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $user_role = $_POST['user_role'];
    $sql1 = "INSERT INTO registration SET first_name = '$firstname', last_name = '$lastname', 
            email= '$email', password = '$pass', gender = '$gender', user_role = '$user_role'";

    $result = mysqli_query($connection, $sql1) OR trigger_error("Failed sql". mysqli_error($connection), E_USER_ERROR);
    
    echo "<script> alert ('Successfully Created')</script>";
    echo "<script> window.location.href= 'register.php'</script>";
} else {
    echo "<script> window.location.href= 'register.php'</script>";
}
?>
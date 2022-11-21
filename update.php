<?php 

require "connection.php";
if(isset($_POST['edit'])){
    $email = trim($_POST['email']);
    $sql1 = "SELECT * FROM registration WHERE email = '$email'";
    $result = mysqli_query($connection, $sql1);
    $row = mysqli_fetch_assoc($result);
}

else if(isset($_POST['updatebtn'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $user_role = $_POST['user_role'];

    $sql2 = "UPDATE registration SET first_name = '$fname', last_name = '$lname', gender = '$gender', 
    email = '$email', user_role = '$user_role' WHERE email = '$email'";
    $result2 = mysqli_query($connection, $sql2);

    echo "<script> alert ('Successfully Updated')</script>";
    echo "<script> window.location.href= 'register.php'</script>";
} else {
    echo "<script> window.location.href = 'register.php' </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

    <h3>Update User</h3>
    <form action="update.php" method="POST">

    <input type="text" name="first_name" id="first_name" placeholder="Enter first name" required
    value="<?php echo $row['first_name'];?>">

    <input type="text" name="last_name" id="last_name" placeholder="Enter Last name" required
    value="<?php echo $row['last_name'];?>">

    <input type="text" name="email" id="email" placeholder="Enter email" readonly required
    value="<?php echo $row['email'];?>">

    <select name="gender" id="gender">

    <option value="">Select Gender</option>
    <option value="male" id="male" <?php echo $row ['gender'] == "male" ? 'selected' : '' ?>>Male</option>
    <option value="female" id="female" <?php echo $row ['gender'] == "female" ? 'selected' : '' ?>>Female</option>

    </select>

    <select name="user_role" id="user_role">

    <option value="">Select user role</option>
    <option value="user" <?php echo $row ['user_role'] == "user" ? 'selected' : '' ?> >User</option>
    <option value="admin"<?php echo $row ['user_role'] == "admin" ? 'selected' : '' ?> >Administrator</option>

    </select>

    <input type="submit" value="Create" name="createbtn">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms</title>

    <style>
        
    </style>
</head>
<body>

    <h1>PHP FORMS</h1>

    <?php
    $name = $email = $website = $gender = $comments = "";
    $nameErr = $emailErr = $websiteErr = $genderErr = $commentsErr = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // NAME
        if(empty($_POST['name'])){
            $nameErr = "Name is Required";
        }else{
            $name = testInput($_POST['name']);
            if(!preg_match("/^[a-zA-Z-']*$/", $name)){
                $nameErr = "Only letters and white space allowed.";
            };
        };

        // EMAIL
        if(empty($_POST['email'])){
            $emailErr = "Email is Required";
        } else {
            $email = testInput($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid Email format.";
            };
        };

        // WEBSITE
        if(empty($_POST['website'])){
            $websiteErr = "Website is Required";
        } else {
            $website = testInput($_POST['website']);
            $website = filter_var($website, FILTER_SANITIZE_URL);
            if(!filter_var($website, FILTER_VALIDATE_URL)){
                $websiteErr = "Invalid URL format.";
            };
        };

        // GENDER
        if(empty($_POST['gender'])){
            $genderErr = "Gender is Required";
        } else {
            $gender = testInput($_POST['gender']);
        };

        //COMMENTS
        if(empty($_POST['comments'])){
            $commentsErr = "Comment is Required";
        } else {
            $comments = testInput($_POST['comments']);
        };
    }

    function testInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

        <label for="">Name</label>
        <input type="text" name="name" id="name" value="">
        <span style="color: red;"><?php echo $nameErr ?></span>

        <br/><br/>

        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <span style="color: red;"><?php echo $emailErr ?></span>

        <br/><br/>

        <label for="">Website</label>
        <input type="text" name="website" id="website" url="">
        <span style="color: red;"><?php echo $websiteErr ?></span>

        <br/><br/>

        <label for="">Gender</label>
        <input type="radio" name="gender" id="gender" value="male">Male 
        <input type="radio" name="gender" id="gender" value="female">Female
        <span style="color: red;"><?php echo $genderErr ?></span>

        <br/><br/>

        <label for="">Comment</label>
        <textarea name="comments" id="comments" cols="30" rows="5"></textarea>
        <span style="color: red;"><?php echo $commentsErr ?></span>

        <br/><br/>

        <input type="submit" name="submit" value="submit">

    </form>

    <?php 
    echo "<h2>Your information</h2>";
    echo $name."<br/>";
    echo $email."<br/>";
    echo $website."<br/>";
    echo $gender."<br/>";
    echo $comments."<br/>";
    ?>


<?php
include "footer.php";
?>


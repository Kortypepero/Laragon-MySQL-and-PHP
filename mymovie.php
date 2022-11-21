<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movie</title>
</head>
<body>

<?php

 if(!empty($_POST["formsubmit"])){
    if ($_POST["formsubmit"] == "Submit"){
        $movie = $_POST["movie"];
        $name = $_POST["name"];
        $errmsg = "";
    
        if(empty($_POST["movie"])){
            $errmsg .= "<li>Please type your favorite movie.</li>";
        }else{
            $movie = $_POST["movie"];
        };
    
    
        if(empty($_POST["name"])){
            $errmsg .= "<li>Please input your name.</li>"; 
        }else{
            $name = $_POST["name"];
        };
    
    
        if(!empty($errmsg)){
            echo "<ul>".$errmsg ."</ul>";
        }else {
            $fs = fopen("data.csv", "a");
            fwrite($fs, $name. ",". $movie. "\n");
            fclose($fs);
            header("location: thanks.html");
            exit;
        };
    
        
        echo $movie. "<br/>". $name;
     };
 };
?>

<form action="mymovie.php" method="POST">

    <label for="movie">What is your favorite movie?</label>
    <input type="text" name="movie" maxlength="50" 
    value="<?php 
    if(!empty($movie)){
        echo "";
    }
    ?>">

    <br/>

    <label for="name">What is your name?</label>
    <input type="text" name="name" maxlength="50">

    <br/>

    <input type="submit" name="formsubmit" value="Submit">


</form>
    
</body>
</html>
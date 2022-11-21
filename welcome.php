<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>

    <h1>
        <?php

         if (isset($_GET["fname"]) and !empty($_GET["fname"])){
            echo "Welcome ". $_GET["fname"];
         }else {
            echo "Please provide first name.";
         };

         echo "<br/>";

         if (isset($_GET["age"]) and !empty($_GET["age"])){
            echo "You are ". $_GET["age"]. " years old.";
         }else {
            echo "Please indicate your age.";
         };

        ?>
    </h1>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Samples</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous">

</head>
<body>

    <?php
       $color = 'black';

       ECHO 'My car is '.$color.'<br/>';
       ECHO 'My dog is '.$color.'<br/>';

       $fname = "Slim";
       $lname = "Shady";

       echo "<h2 style='color:blue'>My name is ".$fname, $lname. '<h2/>';

       define('EMAIL', 'darrenpaul0618@gmail.com');
       echo "My email " .EMAIL ."<br/>";

       $showError = true;
       var_dump($showError);

       $colors = array('red', 'green', 'blue');
       var_dump($colors);

       $colorcodes = array('red' => '#FF0000', 'green' => '#00FF00', 'blue' => '#0000FF');
       var_dump($colorcodes);
       $color_code['red'] = '#FF0000';
       $color_code['green'] = '#00FF00';
       $color_code['blue'] = '#0000FF';

       echo "<br/>";
       echo "<br/>";

       print_r($color_code);

       echo "<br/>";
       echo "<br/>";

       var_dump($color_code);

       $students = array(
        array('name' => 'Juan', 'email' => 'juan@gmail.com'),
        array('name' => 'Darren', 'email' => 'darren@gmail.com'),
        array('name' => 'Paul', 'email' => 'paul@gmail.com'),
       );

       echo "<br/> <br/>";

       echo "Name: " .$students[2]['name'];

       echo "<br/>";

       echo "Name: " .$students[2]['email'];

       class Greeting{
           public $str = 'Good Afternoon!';
           function showGreetings(){
            return $this -> str;
           }
       }

       //Callby reference using ampers and &
       function addStr($str1){
        $str1.= "call by reference";
       };

       $str = "This is an example of ";
       addStr($str);
       echo $str;

       echo "<br/>";

       function sayHello($name="Darren"){
        echo "Hello $name <br/>"; 
       };

       sayHello("Paul");
       sayHello();
       sayHello("Punzalan");

       //fUNCTION THAT RETURNS VALUE
       function cube($n){
        return $n*$n*$n;
       };

       echo "Cube of 3 is: ".cube(3);

       echo "<br/>";

       function addNumbers(...$numbers){
        $sum = 0;
        forEach($numbers as $number){
            $sum += $number;
        };
       };
    ?>



</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
crossorigin="anonymous"></script>

</html>
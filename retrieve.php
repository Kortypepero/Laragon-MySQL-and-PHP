<?php

require "connection.php";

$sort = "ASC";
$column = "registration_id";
if(isset($_GET["column"]) AND isset($_GET["sort"])){
    $column = $_GET["column"];
    $sort = $_GET["sort"];
    $sort === "ASC" ? $sort = "DESC" : "ASC";
};
$sql1 = "SELECT * FROM registration";
$result = mysqli_query($connection, $sql1) OR trigger_error("Failed sql". mysqli_error($connection), E_USER_ERROR);

?>
<?php
define("DB_NAME", "Block_2");
define ("DB_USER", "admin");
define ("DB_HOST", "localhost");
define ("DB_PASSWORD", "password");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:' .mysqli_error($connection));
}

$db_selected = mysqli_select_db($connection, DB_NAME);


if (!$db_selected){
die('Can\'t use'. DB_NAME. ':'.mysqli_error($connection));
}

$astronaut_id = $_POST ["astronaut_id"];
$name = $_POST ["name"];
$no_missions = $_POST ["no_missions"];

$sql = "INSERT INTO astronaut (astronaut_id, name, no_missions) VALUES ('$astronaut_id', '$name', '$no_missions')";

if(!mysqli_query($connection, $sql)){
die("Error:".mysqli_error($connection));
}

else{
echo "Data Inserted";
}

mysqli_close($connection);
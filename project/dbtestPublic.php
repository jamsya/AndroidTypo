<?php
ini_set("display_errors", 1);
echo "db connection test<br>";
$host ="115.68.231.13:3306";

$user = "root";
$password = "ehrhekrk527";
$database = "dbtest";

$db = mysqli_connect($host, $user, $password, $database);

if($db){
    echo "connection success<br>";
}
else{
    echo "connection FAILED <br>";
}
?>


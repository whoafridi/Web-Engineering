<?php

$servername = "localhost";
$username ="root";
$password="";
$db="stdinfo";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    echo "Connection failed";
}
?>
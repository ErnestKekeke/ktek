<?php
$dbhost = "localhost";
$dbUser = "root";
$dbpassword = "";
$dbName = "news";

$conn = mysqli_connect($dbhost,$dbUser,$dbpassword,$dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}





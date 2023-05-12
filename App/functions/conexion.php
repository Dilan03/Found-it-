<?php
session_start();

$serverName = "127.0.0.1:33065";
$userName = "found_it";
$password = "123";
$dbName = "found_it";

//crear conexion 
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
   exit();
} else {
}
?>
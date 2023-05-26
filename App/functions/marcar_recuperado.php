<?php
$serverName = "127.0.0.1:33065";
$userName = "found_it";
$password = "123";
$dbName = "found_it";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);


if(isset($_POST['recuperado'])){
    if(isset($_GET['id'])) {
        $id_post = $_GET['id'];
     }

    $queryfound = "UPDATE etiquetas SET nombre = 'lost' WHERE $id_post = 3";
    mysqli_query($conn, $queryfound);
    echo "<script> alert('Registro exitoso!!')</script>";
}

if($queryfound) {
    echo 'insertado';
} else {
    die(mysql_error());
}
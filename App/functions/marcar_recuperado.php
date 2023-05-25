<?php
$serverName = "127.0.0.1:33065";
$userName = "found_it";
$password = "123";
$dbName = "found_it";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(isset($_GET['id'])) {
    $id_post = $_GET['id'];
 }

if(isset($_POST['recuperado'])){
    $queryfound = "INSERT INTO etiquetas (nombre, id_post) values ('found', $id_post)";
    mysqli_query($conn, $queryfound);
    if($queryfound) {
        echo 'insertado';
    } else {
        die(mysql_error());

    }
    header("Location: ../index.php");
}
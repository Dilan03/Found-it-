<?php

// $serverName = "127.0.0.1:33065";
// $userName = "found_it";
// $password = "123";
// $dbName = "found_it";

// //crear conexion 
// $con = mysqli_connect($serverName, $userName, $password, $dbName);

// if(mysqli_connect_errno()) {
//    echo "Connection failed";
//    exit();
// } else {
//    echo "Connected successfully";
// }

$servername = "127.0.0.1:33065"; //localhost para root
$username = "found_it"; // root
$password = "123"; // "" para root

try {
  $conn = new PDO("mysql:host=$servername; dbname=found_it", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//consulta de prueba
$sql = "SELECT id, nombre FROM carreras";

foreach($conn->query($sql) as $row) {
   echo "<br>".$row['id']." - ".$row['nombre']."<br>";
}

?>
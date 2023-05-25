<?php
$date = date('Y-m-d');

$hoy = new DateTime($date);
$fecha_publicacion = new DateTime(substr($row_posts['fecha_publicacion'], 0,10));
$diferencia_dias = $hoy->diff($fecha_publicacion);    

if($diferencia_dias->days > 8) {
   $id_post = $row_posts['id'];
   $existeFound = mysqli_query($conn,"SELECT * FROM `etiquetas` WHERE id_post = $id_post AND nombre = 'found'");

   if((mysqli_num_rows($existeFound) > 0)) {

   } else {
         $queryetiquetas = "INSERT INTO etiquetas(nombre, id_post) values('found',$id_post)";
         mysqli_query($conn, $queryetiquetas);
   }
}
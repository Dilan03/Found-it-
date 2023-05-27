<?php
/*   
$date = date('Y-m-d');

$hoy = new DateTime($date);
$fecha_publicacion = new DateTime(substr($row_posts['fecha_publicacion'], 0,10));
$diferencia_dias = $hoy->diff($fecha_publicacion);    

if($diferencia_dias->days > 8) {
   $id_post = $row_posts['id'];
   $existeAncient = mysqli_query($conn,"SELECT * FROM `etiquetas` WHERE id_post = $id_post AND nombre = 'ancient'");

   if((mysqli_num_rows($existeAncient) > 0)) {

   } else {
         $queryetiquetas = "INSERT INTO etiquetas(nombre, id_post) values('ancient',$id_post)";
         mysqli_query($conn, $queryetiquetas);
   }
   */

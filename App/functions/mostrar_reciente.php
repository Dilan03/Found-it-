<?php
$fechaMaxima = date('Y-m-d', strtotime('-1 week'));

$consulta_reciente = "
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
    INNER JOIN etiquetas ON p.id = etiquetas.id_post
    WHERE detalles.fecha_publicacion >= '$fechaMaxima'
    ORDER BY detalles.fecha_publicacion DESC;
";

$result_posts_rec = mysqli_query($conn, $consulta_reciente);
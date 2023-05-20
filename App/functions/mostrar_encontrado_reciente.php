<?php
// Obtener la fecha máxima hace una semana
$fechaMaxima = date('Y-m-d', strtotime('-1 week'));

// Consulta para obtener los posts más recientes
$consulta_posts = "
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
    INNER JOIN etiquetas ON p.id = etiquetas.id_post
    WHERE etiquetas.nombre = 'found' AND detalles.fecha_publicacion >= '$fechaMaxima'
    ORDER BY detalles.fecha_publicacion DESC;
";

$result_posts = mysqli_query($conn, $consulta_posts);

$postsF = array(); // Array para almacenar los posts

while ($row = mysqli_fetch_assoc($result_posts)) {
    $postsF[] = $row; // Agregar cada fila al array de posts
}
?>

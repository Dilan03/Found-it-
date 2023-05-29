<?php
$filatrados = 0;
if (isset($_POST["filtrar"])) {

    $consulta_filtrada = "
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'ancient' AND etiquetas.id_post = p.id) as ancient,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'lost' AND etiquetas.id_post = p.id) as lost,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'gathered' AND etiquetas.id_post = p.id) as gathered
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id WHERE
    ";

    $filatrados = 0;
    $condiciones = array();

    if(isset($_POST["Ropa"])) {
        $filatrados++;
        $op1 = " clas.nombre = '".$_POST["Ropa"]."' ";
        array_push($condiciones, $op1);

    }

    if(isset($_POST["Electronicos"])) {
        $filatrados++;
        $op2 = " clas.nombre = '".$_POST["Electronicos"]."' ";
        array_push($condiciones, $op2);
    } 

    $condicionesLenght = sizeof($condiciones);
    
    if($condicionesLenght > 1 ) {
        for ($i=0; $i < $condicionesLenght; $i++) {  
            if($i == $condicionesLenght-1) {
                $consulta_filtrada .= $condiciones[$i];
            } else {
                $consulta_filtrada .= $condiciones[$i]." OR";
            }
        }
    } elseif($condicionesLenght == 1 ) {
        $consulta_filtrada .= $condiciones[0];
    }

    $consulta_filtrada .= ";";
}

if($filatrados > 0) {
    $consulta_posts = $consulta_filtrada;

} else {
    $consulta_posts = "
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'ancient' AND etiquetas.id_post = p.id) as ancient,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'lost' AND etiquetas.id_post = p.id) as lost,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'gathered' AND etiquetas.id_post = p.id) as gathered
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
    ORDER BY detalles.fecha_publicacion desc;
    ";
}

$result_posts = mysqli_query($conn, $consulta_posts);
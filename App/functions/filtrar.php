<?php
$filatrados = 0;
if (isset($_POST["filtrar"])) {

    $consulta_filtrada = "
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre, u.nombre as ubi,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'ancient' AND etiquetas.id_post = p.id) as ancient,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'lost' AND etiquetas.id_post = p.id) as lost,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'gathered' AND etiquetas.id_post = p.id) as gathered
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
    INNER JOIN ubicacion u ON detalles.id_ubicacion = u.id WHERE
    ";

    $filatrados = 0;
    $condiciones = array();

    if(isset($_POST["Ropa"])) {
        $filatrados++;
        $Ropa = " clas.nombre = '".$_POST["Ropa"]."' ";
        array_push($condiciones, $Ropa);

    }

    if(isset($_POST["Electronicos"])) {
        $filatrados++;
        $Electronicos = " clas.nombre = '".$_POST["Electronicos"]."' ";
        array_push($condiciones, $Electronicos);
    } 

    if(isset($_POST["Otros"])) {
        $filatrados++;
        $Otros = " clas.nombre = '".$_POST["Otros"]."' ";
        array_push($condiciones, $Otros);
    }

    if(isset($_POST["F"])) {
        $filatrados++;
        $EdF = " u.nombre = '".$_POST["F"]."' ";
        array_push($condiciones, $EdF);
    } 

    if(isset($_POST["G"])) {
        $filatrados++;
        $EdG = " u.nombre = '".$_POST["G"]."' ";
        array_push($condiciones, $EdG);
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
    SELECT p.id, p.imagen, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre, u.nombre as ubi,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'ancient' AND etiquetas.id_post = p.id) as ancient,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'lost' AND etiquetas.id_post = p.id) as lost,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found,
    (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'gathered' AND etiquetas.id_post = p.id) as gathered
    FROM posts p
    INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
    INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
    INNER JOIN ubicacion u ON detalles.id_ubicacion = u.id;
    ";
}

$result_posts = mysqli_query($conn, $consulta_posts);
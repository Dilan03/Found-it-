<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //$sql = "select * from comentarios";
    $sql = "SELECT * FROM clasificacion";
    echo $resultado;
    $resultado = mysql_query($conn , $resultado);
?>


    <h1>Comentarios</h1>
    <a href="">Nuevo comentario</a><br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        <tbody>
            <?php
            while ($filas = mysqli_fetch_assoc($resultado)) {
                $id = $filas['id'];
                $nombre = $filas['nombre'];
            ?>
            <tr>
                <td><?php echo $id?> </td>
                <td><?php echo $nombre?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </thead>
    </table>
    <?php
        mysql_close($conn);
    ?>
</body>
</html>
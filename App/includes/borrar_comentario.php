<?php
    /*$id = $_GET['id'];
    include("conexion.php");

    //  delete from comentarios where id = $id

    $sql = "delete from comentarios where id = '".$id."'";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        echo "<script> alert('Los datos se eliminaron correctamente
                de la BD');
                location.assign('detailobject.php');
            </script>";
    }else{
        echo "<script> alert('Los datos No se eliminaron de la BD');
                location.assign('detailobject.php');
            </script>";
    }*/

    // Definir el ID del comentario a eliminar
    $id = 1;
    // Construir la consulta SQL para eliminar el comentario
    $sql = "DELETE FROM comentarios WHERE id = $id";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "El comentario ha sido eliminado exitosamente.";
    } else {
        echo "Error al eliminar el comentario: " . $conn->error;
    }

// Cerrar la conexión
$conn->close();
?>


<form class="login-form eliminar_post movLR">
    <h2 class="login-titulo">Borrar comentario</h2>
    
    <div class="eliminar_botones">
    <button type="submit" class="login-button" name="Confirmar">Confirmar</button>
    <button type="submit" class="login-button">Cancelar</button>
    </div>

    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>
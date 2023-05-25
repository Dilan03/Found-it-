<?php
if(isset($_POST["Confirmar"])) {   
        
    //$comentario = $_POST['comenta'];
    //$query = "INSERT INTO comentarios(id, id_autor, contenido, fecha_publicacion, id_post) values(1, '21550135', 'hhj', '2023-06-02 00:00:0', 0)";
    mysqli_query($conn, "DELETE FROM comentarios WHERE id = 3"); 
    if($result) {
        echo 'efsf';
    } else {
        die(mysql_error());

    }
}
?>

<form class="login-form eliminar_post movLR">
    <h2 class="login-titulo">Borrar comentario
        <?php
            if(isset($_GET['id_comentario'])) {
                echo 'existe';
            }
        ?>
    </h2>
    
    
    <div class="eliminar_botones">
       <button type="submit" class="login-button">Confirmar</button>
       <button type="submit" class="login-button">Cancelar</button>
    </div>

    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>
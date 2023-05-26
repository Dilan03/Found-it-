<form class="login-form eliminar_post movLR" method="POST">
    <h2 class="login-titulo">Objeto recuperado<?php echo $row_detalle['id']; 
    if(isset($_POST['recuperado'])){
        echo 'si existe';
        if(isset($_GET['id'])) {
            $id_post = $_GET['id'];
         }
    
        $queryfound = "UPDATE etiquetas SET nombre = 'lost' WHERE id_post = 3";
        mysqli_query($conn, $queryfound);
        echo "<script> alert('Registro exitoso!!')</script>";
    }
    
    ?></h2>
    <div class="eliminar_botones">
       <button type="submit" class="login-button" name="recuperado">Confirmar
        
       </button>
       <button class="login-button">Cancelar</button>
    </div>

    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>
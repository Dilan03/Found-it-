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
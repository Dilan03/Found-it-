<form class="login-form eliminar_post movLR" method="POST">
    <h2 class="login-titulo">Objeto recuperado</h2>
    <div class="eliminar_botones">
       <button type="submit" class="login-button" name="recuperado">Confirmar</button>
       <button class="login-button">Cancelar</button>
    </div>

    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>

<?php
if(isset($_POST["recuperado"])) {
    echo $row_detalle['id'];
}
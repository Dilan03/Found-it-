<?php
    require 'functions/conexion.php';
    require 'functions/registrar.php';
    require 'functions/login.php';
    require 'C:/xampp/htdocs/Found-it-/App/js/comentarios.js';
    if(!empty($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE no_control = '$id'");
        $row = mysqli_fetch_assoc($result);
    } else {

    }
?>

<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

        <section class="main">
            <h1 class="gallery__titulo">Detalle Objeto perdido</h1>
            
            <?php include 'includes/detalles.php'?>

            <div class="SeccionComentarios">
                <form method="POST">
                <div class="comentar">
                    <img class="options__user hideElement" src="assets/icons/user-box.svg">
            
                    <div class="profilepic">
                        <img src="assets/images/perroperfil.png" alt="profilepic">
                    </div>
                    <textarea id="texto-comentario" cols="100" rows="10" placeholder="Escribe un comentario" class="comentario__caja"></textarea>
                    <button id="boton-publicar" type="submit" onclick="publicarComentario()" name="comentario">Comentar</button>
                </div>
                </form>
                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
            
            </div>
        </section>
    </div>

<?php include_once 'includes/modales.php'?>

<?php include_once 'includes/footer.php'?>
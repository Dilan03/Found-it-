<?php
    require 'functions/conexion.php';
    require 'functions/registrar.php';
    require 'functions/login.php';

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
                <form class="comentar" method="POST" >
                    <img class="options__user hideElement" src="assets/icons/user-box.svg">
            
                    <div class="profilepic">
                        <img src="assets/images/perroperfil.png" alt="profilepic">
                    </div>
                    <textarea name="comenta" cols="100" rows="10" placeholder="Añadir un comentario" class="comentario__caja"></textarea>
                    <button class="enviar" type="submit" name="enviar">Enviar</button>
                </form>
                <br>
                
                

                <?php include 'includes/comentario.php'?>
            
            </div>
        </section>
    </div>

<?php include_once 'includes/modales.php'?>

<?php include_once 'includes/footer.php'?>
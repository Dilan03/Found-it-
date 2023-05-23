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
            <?php require 'C:\xampp\htdocs\Found-it-\App\comentarios.html'?>
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
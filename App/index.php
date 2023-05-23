<?php
require 'functions/conexion.php';
require 'functions/registrar.php';
require 'functions/login.php';
require 'functions/mostrar_reciente.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE no_control = '$id'");
    $row = mysqli_fetch_assoc($result);
}
?>

<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<section class="main hero">
    <h1 class="hero__titulo">¿Perdiste o encontraste algo? ¡Publicalo!</h1>
    <button class="boton boton__hero" id="login_btn">Empezar a publicar</button>
    <img class="hero__imagen" src="assets/images/caja.png" alt="">
</section>

<section class="main RecienteGallery">
    <h2 class="RecienteGallery__titulo">Encontrado recientemente</h2>
    <div class="sliderContainer">
        <div class="flechasImagen flechasSlider">
                    <span class="circle"> <img src="assets/icons/flechaizquierda.svg" alt="" class="fleft"></span>
                    <span class="circle"> <img src="assets/icons/flechaderecha.svg" alt="" class="fright"></span>
                 </div>
                    <div class="tarjetaSlider">
                    <?php
                        while($row_posts = mysqli_fetch_array($result_posts_rec)) {
                            if (($row_posts['found']) == 'found') {
                            include 'includes/tarjeta_slider.php';
                        }
                        }
            ?>
        </div>

    </div>

    <section class="main RecienteGallery">
    <h2 class="RecienteGallery__titulo">Perdido recientemente</h2>
    <div class="sliderContainer">
        <div class="flechasImagen flechasSlider">
                    <span class="circle"> <img src="assets/icons/flechaizquierda.svg" alt="" class="fleft"></span>
                    <span class="circle"> <img src="assets/icons/flechaderecha.svg" alt="" class="fright"></span>
                 </div>
                    <div class="tarjetaSlider">
                    <?php
                        while($row_posts = mysqli_fetch_array($result_posts_rec)) {
                            if (($row_posts['lost']) == 'lost') {
                            include 'includes/tarjeta_gal.php';
                        }
                        }
            ?>
        </div>

    </div>

    <section class="main RecienteGallery">
    <h2 class="RecienteGallery__titulo">Recuperado recientemente</h2>
    <div class="sliderContainer">
        <div class="flechasImagen flechasSlider">
                    <span class="circle"> <img src="assets/icons/flechaizquierda.svg" alt="" class="fleft"></span>
                    <span class="circle"> <img src="assets/icons/flechaderecha.svg" alt="" class="fright"></span>
                 </div>
                    <div class="tarjetaSlider">
                    <?php
                        while($row_posts = mysqli_fetch_array($result_posts_rec)) {
                            if (($row_posts['gathered']) == 'gathered') {
                            include 'includes/tarjeta_slider.php';
                        }
                        }
            ?>
        </div>

    </div>
</section>
</div> <!-- div cierre container -->

<?php include_once 'includes/modales.php'?>
<?php include_once 'includes/footer.php'?>

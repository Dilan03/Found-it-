<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

    <section class="main hero">
        <h1 class="hero__titulo">¿Perdiste o encontraste algo? ¡Publicalo!</h1>
        <button class="boton boton__hero">Empezar a publicar</button>
        <img class="hero__imagen" src="assets/images/caja.png" alt="">
    </section>

    <section class="main RecienteGallery">
        <h2 class="RecienteGallery__titulo">Encontrado recientemente</h2>
        <div class="tarjetaSlider">
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
        </div>

        <h2 class="RecienteGallery__titulo">Perdido recientemente</h2>
        <div class="tarjetaSlider">
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
        </div>

        <h2 class="RecienteGallery__titulo">Recuperado recientemente</h2>
        <div class="tarjetaSlider">
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
            <?php include 'includes/tarjeta_slider.php'?>
        </div>
    </section>
</div> <!-- div cierre container -->

<div class="modal hideElement">
    <?php include 'includes/login_form.php'?>
</div>

<div class="modal hideElement">
    <?php include 'includes/registro_form.php'?>
</div>

<?php include_once 'includes/footer.php'?>
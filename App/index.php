<?php
require 'functions/conexion.php';
require 'functions/registrar.php';
require 'functions/login.php';

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
    <?php include_once 'functions/mostrar_encontrado_reciente.php'; ?>
    <?php foreach ($postsF as $postF) : ?>
        <div class="tarjeta slider-wh">
            <div class="tarjeta__etiquetas">
                <?php if ($postF['found']) : ?>
                    <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                <?php endif; ?>
            </div>
            <div class="tarjeta__image">
                <img src="data:image/jpeg;base64,<?php echo $postF['imagen']; ?>" alt="">
            </div>
            <div class="tarjeta__detalles">
                <h4 class="tarjeta__nombre"><?php echo $postF['nombre_objeto']; ?></h4>
                <span>
                    <p class="etiquetaCAT"><?php echo $postF['nombre']; ?></p>
                    <button class="boton boton__tarjeta"><a href="detailobject.php">Informacion</a></button>
                </span>
                <span class="tarjeta__fecha">Encontrado: <?php echo $postF['fecha_publicacion']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>

</div>
    </div>

    <h2 class="RecienteGallery__titulo">Perdido recientemente</h2>
    <div class="sliderContainer">
        <div class="flechasImagen flechasSlider">
            <span class="circle"> <img src="assets/icons/flechaizquierda.svg" alt="" class="fleft"></span>
            <span class="circle"> <img src="assets/icons/flechaderecha.svg" alt="" class="fright"></span>
        </div>
        <div class="tarjetaSlider">
    <?php include_once 'functions/mostrar_perdido_reciente.php'; ?>
    <?php foreach ($postsL as $postL) : ?>
        <div class="tarjeta slider-wh">
            <div class="tarjeta__etiquetas">
                <?php if ($postL['lost']) : ?>
                    <div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>
                <?php endif; ?>
            </div>
            <div class="tarjeta__image">
                <img src="data:image/jpeg;base64,<?php echo $postL['imagen']; ?>" alt="">
            </div>
            <div class="tarjeta__detalles">
                <h4 class="tarjeta__nombre"><?php echo $postL['nombre_objeto']; ?></h4>
                <span>
                    <p class="etiquetaCAT"><?php echo $postL['nombre']; ?></p>
                    <button class="boton boton__tarjeta"><a href="detailobject.php">Informacion</a></button>
                </span>
                <span class="tarjeta__fecha">Perdido: <?php echo $postL['fecha_publicacion']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    </div>

    <h2 class="RecienteGallery__titulo">Recuperado recientemente</h2>
    <div class="sliderContainer">
        <div class="flechasImagen flechasSlider">
            <span class="circle"> <img src="assets/icons/flechaizquierda.svg" alt="" class="fleft"></span>
            <span class="circle"> <img src="assets/icons/flechaderecha.svg" alt="" class="fright"></span>
        </div>
        <div class="tarjetaSlider">
    <?php include_once 'functions/mostrar_recuperado_reciente.php'; ?>
    <?php foreach ($postsG as $postG) : ?>
        <div class="tarjeta slider-wh">
            <div class="tarjeta__etiquetas">
                <?php if ($postG['gathered']) : ?>
                    <div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>
                <?php endif; ?>
            </div>
            <div class="tarjeta__image">
                <img src="data:image/jpeg;base64,<?php echo $postG['imagen']; ?>" alt="">
            </div>
            <div class="tarjeta__detalles">
                <h4 class="tarjeta__nombre"><?php echo $postG['nombre_objeto']; ?></h4>
                <span>
                    <p class="etiquetaCAT"><?php echo $postG['nombre']; ?></p>
                    <button class="boton boton__tarjeta"><a href="detailobject.php">Informacion</a></button>
                </span>
                <span class="tarjeta__fecha">Recuperado: <?php echo $postG['fecha_publicacion']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>
</div> <!-- div cierre container -->

<?php include_once 'includes/modales.php'?>
<?php include_once 'includes/footer.php'?>

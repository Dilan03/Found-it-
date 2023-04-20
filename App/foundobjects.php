<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

    <section class="main main__gallery">
        <div class="gallery__top">
            <h1 class="gallery__titulo">Objetos encontrados</h1>
            <?php include 'includes/filtro.php'?>
        </div>

        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        <?php include 'includes/tarjeta_gal.php'?>
        
    </section>
</div><!-- div cierre container -->

<div class="modal hideElement">
    <?php include 'includes/login_form.php'?>
</div>

<div class="modal hideElement">
    <?php include 'includes/registro_form.php'?>
</div>

<div class="modal hideElement">
    <?php include 'includes/crear_post.php'?>
</div>

<?php include_once 'includes/footer.php'?>
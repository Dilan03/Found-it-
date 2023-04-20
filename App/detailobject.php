<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

        <section class="main">
            <h1 class="gallery__titulo">Detalle Objeto perdido</h1>
            
            <?php include 'includes/detalles.php'?>

            <div class="SeccionComentarios">
                <div class="comentar">
                    <img class="options__user hideElement" src="assets/icons/user-box.svg">
            
                    <div class="profilepic">
                        <img src="assets/images/perroperfil.png" alt="profilepic">
                    </div>
                    <textarea name="comenta" cols="100" rows="10" placeholder="Añadir un comentario" class="comentario__caja"></textarea>

                </div>

                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
                <?php include 'includes/comentario.php'?>
            
            </div>
        </section>
    </div>

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
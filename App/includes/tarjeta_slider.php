<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="tarjeta slider-wh">
            <div class="tarjeta__etiquetas">
                <?php if (!empty($post['ancient'])): ?>
                    <div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>
                <?php endif; ?>
                <?php if (!empty($post['found'])): ?>
                    <div class="etiquetaEST etiquetaEST--found"><span>#Found</span></div>
                <?php endif; ?>
                <!-- Agregar etiquetas adicionales según sea necesario -->
            </div>
            <div class="tarjeta__image">
                <img src="<?php echo $post['imagen']; ?>" alt="">
            </div>
            <div class="tarjeta__detalles">
                <h4 class="tarjeta__nombre"><?php echo $post['nombre_objeto']; ?></h4>
                <span>
                    <p class="etiquetaCAT"><?php echo $post['nombre']; ?></p>
                    <button class="boton boton__tarjeta"><a href="detailobject.php?id=<?php echo $post['id']; ?>">Informacion</a></button>
                </span>
                <span class="tarjeta__fecha">Publicado: <?php echo $post['fecha_publicacion']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No se encontraron posts.</p>
<?php endif; ?>

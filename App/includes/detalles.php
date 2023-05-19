<div class="DetalleObjeto">
    <div class="rectangulo1">
        <div class="rectangulo2">
            <?php
                echo '<img width = 100% src=data:image;base64,'.$row_detalle['imagen'].' alt="profilepic"/>'
            ?>
        </div>
            <?php
                echo '
                    <div class="tarjeta__etiquetas">';
                    if (($row_detalle['ancient']) == 'ancient') {
                        echo '<div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>';
                    }
                    if (($row_detalle['found']) == 'found') {
                        echo '<div class="etiquetaEST etiquetaEST--found"><span>#found</span></div>';
                    }
                    if (($row_detalle['lost']) == 'lost') {
                        echo '<div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>';
                    }
                    if (($row_detalle['gathered']) == 'gathered') {
                        echo '<div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>';
                    }
                echo '</div>'; 
            ?>
    </div>
    <div class="rectangulo3">
        <section>
            <i id="options_desplegable_llave_btn"><img class="detalles_opt" src="assets/icons/llave.svg"></i>
            <div class="options__desplegable-llave hideElement" id="options_desplegable_llave">
                <a href="#" id="eliminar_post_btn">Eliminar</a>
                <a href="#" id="editar_post_btn">Editar</a>
                <a href="#" id="marcar_recuperado_btn">Recuperado</a>
            </div>


            <h2 class="titulo">
                <?php echo $row_detalle['nombre_objeto']?>
            </h2>
            <label for="encontrado" class="diaencontrado">
                <?php
                    if($row_detalle['found'] == 'found') echo 'Encontrado';
                    elseif ($row_detalle['lost'] == 'lost') echo 'Perdido';
                ?> 
                el día <?php echo substr($row_detalle['fecha_publicacion'], 0,10)?></label>
            <br>
            <label for="descripcion" class="desc">Descripción</label>
            <p class="desc2"><?php echo $row_detalle['descripcion']?></p>
            <br>
            <label for="categoría" class="cat">Categoría</label>
            
            <label for="cat" class="cate"><?php echo $row_detalle['cat']?></label>
            
            <label for="ubi" class="ub">
                <?php
                    if($row_detalle['found'] == 'found') echo 'Encontrado';
                    elseif ($row_detalle['lost'] == 'lost') echo 'Perdido';
                ?>
                en</label>
            <div class="rectangulo5">
                <label for="ubi" class="edificio">Ed. <?php echo $row_detalle['ubicacion']?></label>
            </div>
            <label for="encontro" class="encontro">Lo
                <?php
                    if($row_detalle['found'] == 'found') echo 'encontró';
                    elseif ($row_detalle['lost'] == 'lost') echo 'perdió';
                ?>
            </label>
            <br>
            <p class="alumno"><?php echo $row_detalle['nombre']?> <?php echo $row_detalle['apellido']?></p>
            <p class="carrera"><?php echo $row_detalle['carrera']?></p>
            <p class="tel"><?php echo $row_detalle['telefono']?></p>

            <div class="seccionBtn">
                <p class="pre">¿Es tuyo?</p>
                <button class="rectangulo4">
                    <span>Enviar mensaje</span> 
                    <img src="assets/icons/wasap.svg" alt="" class="was">
                </button>
            </div>
        </section>
    </div>
</div>
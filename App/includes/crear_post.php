<form class="crearpub__form movLR" method="POST" action=<?php echo "functions/insertar_posts.php?id_user=".$row['no_control']?> enctype="multipart/form-data">
    <h2 class="titulo-ventana"><b>Crear publicación</b></h2>

    <input type="file" id="myFile" name="imagen" required>
    <label for="myFile" ><div class="fileimage"></div></label>

    <input type="textarea" class="tituloO" name="nombre_objeto" placeholder="Nombre del objeto" required>

    <input type="date" class="fecha" name="fecha" required><br>

    <input type="radio" class="perdido" id="perdido" name="estatus" value="lost"required>
    <label class="labperdido">Perdido</label>

    <input type="radio" class="encontrado" id="encontrado" name="estatus" value="found"required>
    <label class="labencontrado">Encontrado</label><br>

    <textarea class="descripcion" name="descripcion" placeholder="Descripción" required></textarea><br>

    <select class="categoria" name="categoria" required>
        <option value="" disabled selected>Categoría</option>
        <option value="Electronicos">Electronicos</option>
        <option value="Ropa">Ropa</option>
        <option value="opcion3">Opción 3</option>
    </select>
    <select class="ubicacion" name="ubicacion" required>
        <option value="" disabled selected>Ubicación</option>
        <option value="F">F</option>
        <option value="D">D</option>
        <option value="opcion3">Opción 3</option>
        </select><br>

    <button type="submit" class="publicar" name="publicar">Publicar</button>
    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>
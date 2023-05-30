<form class="crearpub__form movLR">
    <h2 class="titulo-ventana"><b>Editar publicación</b></h2>

    <input type="file" id="myFile" name="filename">
    <label for="myFile" ><div class="fileimage"></div></label>

    <input type="file" id="imagen" name="imagen"><br>

    <input type="textarea" class="tituloO" name="titulo" placeholder="Título">

    <input type="date" class="fecha" name="fecha"><br>

    <input type="radio" class="perdido" id="perdido" name="p/e">
    <label class="labperdido">Perdido</label>

    <input type="radio" class="encontrado" id="encontrado" name="p/e">
    <label class="labencontrado">Encontrado</label><br>

    <input type="textarea" class="descripcion" name="descripcion" placeholder="Descripción"><br>

    <select class="categoria" name="Categoría">
        <option value="" disabled selected>Cateoría</option>
        <option value="opcion1">Opción 1</option>
        <option value="opcion2">Opción 2</option>
        <option value="opcion3">Opción 3</option>
    </select>
    <select class="ubicacion" name="Ubicación">
        <option value="" disabled selected>Ubicación</option>
        <option value="opcion1">Opción 1</option>
        <option value="opcion2">Opción 2</option>
        <option value="opcion3">Opción 3</option>
        </select><br>

    <button class="publicar">Confirmar</button>
    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>
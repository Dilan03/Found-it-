<?php
$serverName = "127.0.0.1:33065";
$userName = "found_it";
$password = "123";
$dbName = "found_it";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (isset($_POST["confirmar"])) {
    $nombre_objeto = $_POST["nombre_objeto"];
    $fecha = $_POST["fecha"];
    $estatus = $_POST["estatus"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $ubicacion = $_POST["ubicacion"];
 
    $imagen = $_FILES['imagen']['tmp_name'];
    $imagen_name = $_FILES['imagen']['name'];
    $imagen = base64_encode(file_get_contents(addslashes($imagen)));
    
    $querydetalles = "UPDATE detallesposts SET nombre_objeto = '$nombre_objeto', descripcion = '$descripcion', fecha_publicacion = '$fecha'";
mysqli_query($conn, $querydetalles);
 
    $querypost = "UPDATE posts SET imagen = '$imagen'";
    mysqli_query($conn, $querypost);

}

?>

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
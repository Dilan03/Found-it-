<button class="boton__filtro" id="filtro_btn"><img src="assets/icons/barras.svg"><span>Filtro</span></button>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filtrar'])) {
    // Obtener los valores de clasificación y ubicación del formulario
    $clasificacion = isset($_POST['clasificacion']) ? $_POST['clasificacion'] : [];
    $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : [];

    // Escapar los valores para prevenir inyección de SQL
    $clasificacion = array_map(function($value) use ($conn) {
        return mysqli_real_escape_string($conn, $value);
    }, $clasificacion);

    $ubicacion = array_map(function($value) use ($conn) {
        return mysqli_real_escape_string($conn, $value);
    }, $ubicacion);
    //WHERE detalles.id_ubicacion IN ('$ubicacion') OR detalles.id_clasificacion IN ('$clasificacion');";
    // Convertir los valores en cadenas separadas por comas para usar en la consulta SQL
    $clasificacion = implode("', '", $clasificacion);
    $ubicacion = implode("', '", $ubicacion);

    // Consulta SQL con filtros de clasificación y ubicación
    $consulta_posts = "
        SELECT p.id, p.imagen, detalles.id_ubicacion, detalles.id_clasificacion, detalles.nombre_objeto, detalles.fecha_publicacion, clas.nombre,
        (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'ancient' AND etiquetas.id_post = p.id) as ancient,
        (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'lost' AND etiquetas.id_post = p.id) as lost,
        (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'found' AND etiquetas.id_post = p.id) as found,
        (SELECT nombre FROM etiquetas WHERE etiquetas.nombre = 'gathered' AND etiquetas.id_post = p.id) as gathered
        FROM posts p
        INNER JOIN detallesposts detalles ON p.id_detallesPosts = detalles.id
        INNER JOIN clasificacion clas ON detalles.id_clasificacion = clas.id
        WHERE detalles.id_ubicacion IN ('$ubicacion');";

    $result_posts = mysqli_query($conn, $consulta_posts);
}
?>
<form method="POST">
    <button class="filtrarse" id="filtrar_btn" name="filtrar"><img src="assets/icons/barras.svg"><span></span></button>
</form>
<div class="cuerpo drop hideElement" id="filtro_cuerpo">
    <div class="Clasificación">
        <h1>Clasificación</h1>
        <div>
            <input type="checkbox" name="clasificacion[]" value="Electronicos" class="check_Electronicos">
            <label for="Electronicos">Electronicos</label>
            <br>
            <input type="checkbox" name="clasificacion[]" value="Ropa" class="Check_Ropa">
            <label for="Ropa">Ropa</label>
            <br>
            <input type="checkbox" name="clasificacion[]" value="Otros" class="Check_Otros">
            <label for="Otros">Otros</label>
        </div>
    </div>
    <div class="Ubicación_1">
        <h1>Ubicación</h1>
        <input type="checkbox" name="ubicacion[]" value="F" class="check_F">
        <label for="Ed. F">Ed. F</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="G" class="check_G">
        <label for="Ed. G">Ed. G</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="Biblioteca" class="check_Biblioteca">
        <label for="Biblioteca">Biblioteca</label>
    </div>
    <div class="Ubicación_2">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="F" class="check_F">
        <label for="Ed. F">Ed. F</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="G" class="check_G">
        <label for="Ed. G">Ed. G</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="Biblioteca" class="check_Biblioteca">
        <label for="Gimnasio">Gimnasio</label>
    </div>
    <div class="Ubicación_3">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="D" class="check_D">
        <label for="Ed. D">Ed. D</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="S" class="check_S">
        <label for="Ed. S">Ed. S</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="A" class="check_A">
        <label for="Ed. A">Ed. A</label>
    </div>
    <div class="Ubicación_4">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="B" class="check_B">
        <label for="Ed. B">Ed. B</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="P" class="check_P">
        <label for="Ed. P">Ed. P</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="M" class="check_M">
        <label for="Ed. M">Ed. M</label>
    </div>
    <div class="Ubicación_5">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="X" class="check_X">
        <label for="Ed. X">Ed. X</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="Z" class="check_Z">
        <label for="Ed. Z">Ed. Z</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="W" class="check_W">
        <label for="Ed. W">Ed. W</label>
    </div>
    <div class="Ubicación_6">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="Q" class="check_Q">
        <label for="Ed. Q">Ed. Q</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="L" class="check_L">
        <label for="Ed. L">Ed. L</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="Y" class="check_Y">
        <label for="Ed. Y">Ed. Y</label>
    </div>
    <div class="Ubicación_7">
        <br><br><br><br>
        <input type="checkbox" name="ubicacion[]" value="I" class="check_I">
        <label for="Ed. I">Ed. I</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="U" class="check_U">
        <label for="Ed. U">Ed. U</label>
        <br>
        <input type="checkbox" name="ubicacion[]" value="WW" class="check_WW">
        <label for="Ed. WW">Ed. WW</label>
    </div>
</div>
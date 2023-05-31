<?php
require 'functions/conexion.php';
require 'functions/registrar.php';
require 'functions/login.php';
require 'functions/mostrar_posts.php';
require 'functions/filtrar.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE no_control = '$id'");
    $row = mysqli_fetch_assoc($result);
} else {

}

// Llamar al procedimiento almacenado para contar los posts
$sql = "CALL contar_posts(@cant_posts)";
$result = mysqli_query($conn, $sql);

// Recuperar el valor del parámetro OUT
$sql = "SELECT @cant_posts AS cant_posts";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cantidadPosts = $row['cant_posts'];

// Llamar al procedimiento almacenado para contar los objetos encontrados
$sql = "CALL contar_objetos_encontrados(@cant_encontrados)";
$result = mysqli_query($conn, $sql);

// Recuperar el valor del parámetro OUT
$sql = "SELECT @cant_encontrados AS cant_encontrados";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cantidadEncontrados = $row['cant_encontrados'];

// Llamar al procedimiento almacenado para contar los objetos perdidos
$sql = "CALL contar_objetos_perdidos(@cant_perdidos)";
$result = mysqli_query($conn, $sql);

// Recuperar el valor del parámetro OUT
$sql = "SELECT @cant_perdidos AS cant_perdidos";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cantidadPerdidos = $row['cant_perdidos'];

// Llamar al procedimiento almacenado para contar los objetos recuperados
$sql = "CALL contar_objetos_recuperados(@cant_recuperados)";
$result = mysqli_query($conn, $sql);

// Recuperar el valor del parámetro OUT
$sql = "SELECT @cant_recuperados AS cant_recuperados";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cantidadRecuperados = $row['cant_recuperados'];

// Guardar las cantidades en el almacenamiento local del navegador
echo "<script>
localStorage.setItem('cantidadPosts', $cantidadPosts);
localStorage.setItem('cantidadEncontrados', $cantidadEncontrados);
localStorage.setItem('cantidadPerdidos', $cantidadPerdidos);
localStorage.setItem('cantidadRecuperados', $cantidadRecuperados);
</script>";
?>

<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/nav.php' ?>

<section class="main main__gallery">
    <div class="gallery__top">
        <h1 class="gallery__titulo">Estadisticas</h1>
        <!-- Mostrar la cantidad de posts, objetos encontrados, objetos perdidos y objetos recuperados en la tabla dinámica -->
        <table id="tablaEstadisticas">
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Posts</td>
                    <td id="cantidadPosts"></td>
                </tr>
                <tr>
                    <td>Objetos encontrados</td>
                    <td id="cantidadEncontrados"></td>
                </tr>
                <tr>
                    <td>Objetos perdidos</td>
                    <td id="cantidadPerdidos"></td>
                </tr>
                <tr>
                    <td>Objetos recuperados</td>
                    <td id="cantidadRecuperados"></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

</div><!-- div cierre container -->

<?php include_once 'includes/modales.php' ?>

<?php include_once 'includes/footer.php' ?>

<script>
    // Obtener las cantidades del almacenamiento local y mostrarlas en la tabla
    var cantidadPosts = localStorage.getItem('cantidadPosts');
    var cantidadEncontrados = localStorage.getItem('cantidadEncontrados');
    var cantidadPerdidos = localStorage.getItem('cantidadPerdidos');
    var cantidadRecuperados = localStorage.getItem('cantidadRecuperados');

    if (cantidadPosts && cantidadEncontrados && cantidadPerdidos && cantidadRecuperados) {
        document.getElementById('cantidadPosts').textContent = cantidadPosts;
        document.getElementById('cantidadEncontrados').textContent = cantidadEncontrados;
        document.getElementById('cantidadPerdidos').textContent = cantidadPerdidos;
        document.getElementById('cantidadRecuperados').textContent = cantidadRecuperados;
    }
</script>

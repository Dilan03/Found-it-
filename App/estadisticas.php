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

// Verificar si se ha hecho clic en el botón "Mostrar cantidad de posts"
if (isset($_POST['mostrar_cantidad'])) {
    // Llamar al procedimiento almacenado para contar los posts
    $sql = "CALL contar_posts(@cant)";
    $result = mysqli_query($conn, $sql);

    // Recuperar el valor del parámetro OUT
    $sql = "SELECT @cant AS cant";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $cantidadPosts = $row['cant'];

    // Guardar la cantidad de posts en el almacenamiento local del navegador
    echo "<script>localStorage.setItem('cantidadPosts', $cantidadPosts);</script>";
}
?>

<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/nav.php' ?>

<section class="main main__gallery">
    <div class="gallery__top">
        <h1 class="gallery__titulo">Estadisticas</h1>
        <!-- Agregar el botón "Mostrar cantidad de posts" -->
        <form action="" method="post">
            <input type="submit" name="mostrar_cantidad" value="Mostrar cantidad de posts">
        </form>
        <!-- Mostrar la cantidad de posts guardada en la tabla dinámica -->
        <table id="tablaEstadisticas">
            <thead>
                <tr>
                    <th>Cantidad de posts</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="cantidadPosts"></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

</div><!-- div cierre container -->

<?php include_once 'includes/modales.php' ?>

<?php include_once 'includes/footer.php' ?>

<script>
    // Obtener la cantidad de posts del almacenamiento local y mostrarla en la tabla
    var cantidadPosts = localStorage.getItem('cantidadPosts');
    if (cantidadPosts) {
        document.getElementById('cantidadPosts').textContent = cantidadPosts;
    }
</script>

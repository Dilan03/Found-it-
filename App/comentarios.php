<?php
// Configuración de la conexión a la base de datos
require 'functions/conexion.php';
require 'functions/registrar.php';

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se envió un comentario
if (isset($_POST['comentario'])) {
    // Obtener el comentario enviado desde el cliente
    $comentario = $_POST['comentario'];

        // Preparar la sentencia SQL para insertar el comentario en la base de datos
        $sql = "INSERT INTO comentarios (id_autor, contenido, fecha_publicacion, id_post) VALUES ('$no_control','$comentario',NOW(),'$id')";

        // Ejecutar la sentencia SQL
        if ($conn->query($sql) === TRUE) {
            echo "Comentario guardado exitosamente.";
        } else {
            echo "Error al guardar el comentario: " . $conn->error;
        }
    }

// Consulta para obtener los comentarios guardados
$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);

// Verificar si se encontraron comentarios
if ($result->num_rows > 0) {
    // Generar el HTML para mostrar los comentarios
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comentarios'>" . $row["contenido"] . "</div>";
    }
} else {
    echo "No hay comentarios.";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>
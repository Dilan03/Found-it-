<?php
// Función para sanitizar los datos ingresados por el usuario
function sanitizeInput($input) {
    // Escapar los caracteres especiales para prevenir la inyección de código
    $sanitizedInput = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $sanitizedInput;
}

// Verificar si se envió el formulario
if (isset($_POST['loginn'])) {
    // Sanitizar los datos ingresados por el usuario
    $email = sanitizeInput($_POST['email']);
    $password = $_POST['password']; // No es necesario sanitizar la contraseña para la inyección de SQL

    // Preparar la consulta SQL con una consulta preparada
    $stmt = mysqli_prepare($conn, "SELECT * FROM usuarios WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password); // Enlazar los parámetros de manera segura
    mysqli_stmt_execute($stmt);

    // Obtener el resultado de la consulta
    $result = mysqli_stmt_get_result($stmt);

    // Verificar si se encontró un usuario válido
    if ($row = mysqli_fetch_assoc($result)) {
        // Usuario válido, realizar el resto del proceso de inicio de sesión
    } else {
        echo '<p class="error-message">Credenciales de inicio de sesión inválidas. Por favor, verifique su correo y contraseña.</p>';
    }
}
?>

<form class="login-form movLR" method="POST">
    <h2 class="login-titulo">HOLA OTRA VEZ!</h2>
    <div class="field-container">
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Correo" required>
        </div>

        <div class="form-group password-group">
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                <span class="password-toggle"></span>
            </div>
            <p id="h1">¿Olvidaste tu contraseña?</p>
        </div>
    </div>

    <button type="submit" name="loginn" class="login-button">Entrar</button>
    <span>
        <a href="#" class="crear_cuenta" id="registro_btn">Crear una cuenta.</a>
    </span>
    <button class="cerrar"><img src="assets/icons/equis.svg" id="cerrar_modal"></button>
</form>

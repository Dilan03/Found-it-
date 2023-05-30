<?php
if(isset($_POST["update"])) {
   $no_control = $_POST["no-control"];
   $first_name = $_POST["first-name"];
   $last_name = $_POST["last-name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $confirm_password = $_POST["confirm-password"];
   $major = $_POST["major"];
   $phone = $_POST["phone"];

   $disabled = mysqli_query($conn, "SELECT no_control, correo FROM usuarios WHERE no_control = '$no_control' OR correo = '$email'");
   $row = mysqli_fetch_assoc($disabled);
   
   $disabled = mysqli_query($conn, "SELECT no_control, correo FROM usuarios WHERE no_control = '$no_control' AND correo = '$email'");
   if (mysqli_num_rows($disabled) == 0) {
       echo "<script>alert('No puedes cambiar el número de control y correo')</script>";
   } else {
       $duplicate = mysqli_query($conn, "SELECT contraseña FROM usuarios WHERE contraseña = '$password'");
       if (mysqli_num_rows($duplicate) > 0) {
           echo "<script>alert('La contraseña ya ha sido utilizada')</script>";
       } else {
           if ($password == $confirm_password) {
               // Consulta para actualizar la información del usuario excepto la foto
               $query = "UPDATE usuarios SET nombre = '$first_name', apellido = '$last_name', contraseña = '$password', telefono = '$phone', id_carrera = '$major' WHERE no_control = '$no_control' AND correo = '$email'";
               mysqli_query($conn, $query);
   
               // Mostrar mensaje de éxito
               echo "<script>alert('Información actualizada exitosamente.')</script>";
           } else {
               // Mostrar mensaje de error si las contraseñas no coinciden
               echo "<script>alert('Las contraseñas no coinciden')</script>";
           }
       }
   }
   
       }
?>

<form class="registration-form movLR" method="POST" enctype="multipart/form-data">
    <h2 class="register-titulo">Editar informacion</h2>
    
    <div class="form-group">
        <input type="text" id="no-control" name="no-control" placeholder="Número de control" required>
    </div>
    
    <div class="form-group">
        <input type="text" id="first-name" name="first-name" placeholder="Nombres" required>
    </div>
    
    <div class="form-group">
        <input type="text" id="last-name" name="last-name" placeholder="Apellidos" required>
    </div>
    
    <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Correo" required>
    </div>
    
    <div class="form-group password-group">
        <div class="password-wrapper">
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <span class="password-toggle"></span>
        </div>
    </div>
    
    <div class="form-group password-group">
        <div class="password-wrapper">
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar contraseña" required>
        <span class="password-toggle"></span>
        </div>
    </div>
    
    <div class="form-group">
        <select id="major" name="major" type ="major">
            <option style="font-family:'Arial'" value="ISC">ISC</option>
            <option style="font-family:'Arial'" value="INF">INF</option>
            <option style="font-family:'Arial'" value="ARQ">Arquitectura</option>
            <option style="font-family:'Arial'" value="IND">Industrial</option>
            <option style="font-family:'Arial'" value="IDIND">Diseño Industrial</option>
            <option style="font-family:'Arial'" value="IGE">Gestión Empresarial</option>
            <option style="font-family:'Arial'" value="ADMIN">Administración</option>
        </select>
    </div>
    
    <div class="form-group">
        <input type="text" id="phone" name="phone" placeholder="Número de teléfono" pattern="[0-9]+" title="Ingrese un número de teléfono válido" required >
    </div>
    
    <button type="submit" name="update" class="submit-button">Confirmar</button>
    <a class="cerrar" href=""><img src="assets/icons/equis.svg"></a>
</form>
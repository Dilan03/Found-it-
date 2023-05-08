<form class="registration-form movLR">
    <h2 class="register-titulo">Editar informacion</h2>
    
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
    
    <button type="submit" class="submit-button">Confirmar</button>
    <a class="cerrar" href=""><img src="assets/icons/equis.svg"></a>
</form>
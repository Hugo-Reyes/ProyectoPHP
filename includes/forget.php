<div class="wrapper">
<h2 style="text-align: center; color:white; margin-top:3%; margin-bottom:7px; font-weight:bold;">Registrarse</h2>
<h4 style="text-align: center; color:white; margin-bottom:3%; font-size: 15px;">¿Ya tienes cuenta?  <a href="login.php" style="color: #006FFF;">Iniciar sesión</a></h4>

<form action="/php/iniciar-sesion.php" method="post">
<center>
<div style="display: inline-flexbox;">

<div style="width: 450px;">

   <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Nombre completo</span>
    <input type="text" name="nombre_completo" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Correo electrónico</span>
    <input type="email" name="correo_electrónico" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Contraseña</span>
    <input type="password" name="contrasena" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Confirmar contraseña</span>
    <input type="password" name="confirmar_contrasena" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Fecha de nacimiento</span>
    <input type="date" name="fecha_nacimiento" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3" required>
    <label class="input-group-text" for="inputGroupSelect01">Tipo de cuenta</label>
    <select class="form-select" name="cuenta" id="inputGroupSelect01">
      <option selected >Escoje una opción</option>
      <option value="Estudiante">Estudiante</option>
      <option value="Profesor">Profesor</option>
    </select>
  </div>

</div>


<div style="width: 40%;">
  <button type="submit" value="enviar" class="btn btn-primary" style=" background-color: #28A745; ">Registrarme</button>
</div>

</div>
</center>
</form>
</div>

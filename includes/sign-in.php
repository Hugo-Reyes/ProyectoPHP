<div class="wrapper">
<h2 style="text-align: center; color:white; margin-top:5%; margin-bottom:7px; font-weight:bold;">Iniciar sesión</h2>
<h4 style="text-align: center; color:white; margin-bottom:3%; font-size: 15px;">¿Eres nuevo usuario?  <a href="register.php" style="color: #006FFF;">Crea una cuenta</a></h4>

<form action="/php/iniciar-sesion.php" method="post">
<center>
<div style="display: inline-flexbox;">

<div style="width: 450px;">

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Correo electrónico</span>
    <input type="email" name="correo_electrónico" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Contraseña</span>
    <input type="password" name="contrasena" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>
  <h4 style="text-align: center; color:white; margin-bottom:3%; font-size: 15px;"><a href="forget.php" style="color: #006FFF;">Olvidé mi contraseña</a></h4>

</div>


<div style="width: 40%;">
  <button type="submit" value="enviar" class="btn btn-primary" style=" background-color: #28A745; ">Iniciar sesión</button>
</div>

</div>
</center>
</form>
</div>

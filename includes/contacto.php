<h2 style="text-align: left; color:white; margin-top:5%; margin-left: 5%; margin-bottom:3%; ">Contacto</h2>


<form action="/php/contact.php" method="post">
<div style="display: inline-flexbox;">
<center>
<div style="width: 450px; margin-left: 5%; margin-right:5%; float: left;">
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Nombre completo</span>
    <input type="text" name="nombre_completo" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Correo electrónico</span>
    <input type="email" name="correo_electrónico" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">País donde reside</span>
    <input type="text" name="ciudad_pais" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3" required>
    <label class="input-group-text" for="inputGroupSelect01">Tipo de colaboración</label>
    <select class="form-select" name="colaboracion" id="inputGroupSelect01">
      <option selected >Escoje una opción</option>
      <option value="Reunión">Reunión</option>
      <option value="Entrevista">Entrevista</option>
      <option value="Asesoría">Asesoría</option>
      <option value="Otro">Otro (Especificar en el mensaje)</option>
    </select>
  </div>

  
  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">¿Cómo te enteraste de nosotros?</label>
    <select class="form-select" name="red_social" id="inputGroupSelect01">
      <option selected>Escoje una opción</option>
      <option value="YouTube">YouTube</option>
      <option value="Facebook">Facebook</option>
      <option value="Instagram">Instagram</option>
      <option value="TikTok">TikTok</option>
      <option value="Twitch">Twitch</option>
      <option value="Otro">Otro (Específicar en el mensaje)</option>
    </select>

  </div>
</div>

<div style="float:left; width: 450px; margin-left:5%;">  
  <div class="input-group">
    <textarea type="text" class="form-control" name="mensaje" placeholder="Mensaje" aria-label="With textarea" style="height: 200px;" required></textarea>
  </div>
</div>

</center>
</div>

<div style="width: 40%; margin-left: 5%;">
  <button type="submit" value="enviar" class="btn btn-primary" style=" background-color: #28A745; margin-top:5%;">Enviar mensaje</button>
</div>

</form>
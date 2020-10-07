<?php require_once('header.php'); ?>

<!-- Formulario de ingreso -->
<div class="container-fluid">
  <div class="container py-5">
    <h2>Ingreso</h2>
    <form>
      <!-- Form Email -->
      <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Escriba su correo" id="email" name="registroEmail">
        </div>				
      </div>
      <!-- End of Form Email -->
      <!-- Form pwd -->
      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="registroPwd">
        </div>
      </div>
      <!-- End of Form pwd -->
      <div class="form-group form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="remember">Recuerdame <a href="index.php?pages=registro"> Registrarse</a>
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
  </div>
</div>
<!-- Fin de formulario de ingreso -->

<?php require_once('footer.php')?>
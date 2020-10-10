<?php require_once('header.php'); ?>

<!--formulario de registro-->	
<div class="container-fluid">
	<div class="container py-5">
    <h2>Registro</h2>
    <form method="POST">
      <div class="form-group">
      <!-- Form Name -->
        <label for="name">Nombre:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>				
          </div>
          <input type="text" class="form-control" placeholder="Escriba su Nombre" id="name" name="registroName">	
        </div>				
      </div>
      <!-- End of Form Name -->
      <!-- Form Email -->
      <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Escriba su correo" id="email" name="registroMail">
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
      
      <!-- Objeto para vincular con el controlador forms.controller.php-->
      <?php 
      /*$registro = new FormsController();
        $registro -> ctrRegistro();
        Se modifica para utilizar los métodos estáticos*/
        $registro = FormsController::ctrRegistro();
        /* Se modifica para poder almacenar los datos en la BD
        echo $registro;*/
        if($registro == "OK"){
        //funcion para limpiar el formulario luego de enviar los datos
          echo 	'<script>
                  if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href)
                  }
                </script>';
          // Mensaje de confirmación de registro exitoso
          echo '<div class="alert alert-success">Usuario Registrado</div>';
        }
      ?>
      <!-- Fin del objeto -->
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>
</div>
<!-- Fin de formulario de registro -->


<?php require_once('footer.php'); ?>
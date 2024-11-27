<?php include('header.php'); ?>

<div class="row">
  <div class="col s12 m5 offset-m3">
    <div>
      <h1 class="center-align">Error al iniciar sesión</h1>
      <p class="center-align red-text">Hubo un error al intentar iniciar sesión. Verifica tus credenciales e intenta nuevamente.</p>

      <form method="POST" action="logica/loguear.php">
        
        <!-- Campo para el número de cuenta -->
        <div class="input-field">
          <input id="nombre_usuario" type="text" name="nombre_usuario" placeholder="Username" class="validate" required>
          <label for="nombre_usuario">Username</label>
        </div>

        <!-- Campo para la contraseña -->
        <div class="input-field">
          <input id="password" type="password" name="password" placeholder="Contraseña" class="validate" required>
          <label for="password">Contraseña</label>
        </div>

        <!-- Botón de inicio de sesión -->
        <div class="row center-align">
          <button type="submit" name="submit" class="btn waves-effect waves-light red">Iniciar Sesión</button>
        </div>
      </form>

      
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include('footer.php'); ?>

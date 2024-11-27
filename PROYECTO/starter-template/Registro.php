<?php include('header.php'); ?>

<?php
session_start();
$nombre_usuario = $_SESSION['nombre_usuario']; // Obtén el nombre de usuario desde la sesión

// Verifica si la sesión del usuario no está iniciada
if (!isset($nombre_usuario)) {
    header("Location: ./index.php"); // Redirige al login si no está logueado
    exit(); // Asegúrate de que el script se detenga aquí
} else {
    // Si está logueado, muestra el contenido de la página
    echo "<h6 class='center-align tiny'>sesion actual:  $nombre_usuario</h6>";
}
?>

<body>
    <h1 class="center-align">Registro</h1>
    <div class="container">
        <form method="POST" action="logica/enviarRegistro.php">
            <!-- Nombre de usuario -->
            <div class="input-field">
                <label for="nombre_usuario">Nombre de usuario</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu nombre">
            </div>

            <!-- Contraseña -->
            <div class="input-field">
                <label for="carrera">Contraseña</label>
                <input type="password" id="carrera" name="password" required maxlength="100" placeholder="Ingresa tu contraseña">
            </div>

            <!-- Clan -->
            <div class="input-field">
                <label for="clan">Clan</label>
                <input type="text" id="email" name="clan" required maxlength="100" placeholder="Ingresa tu clan">
            </div>

            <!-- Dinero -->
            <div class="input-field">
                <label for="no_cuenta">Dinero</label>
                <input type="number" id="no_cuenta" name="dinero" required placeholder="Ingresa tu dinero">
            </div>

            <!-- Kills -->
            <div class="input-field">
                <label for="direccion">Kills</label>
                <input type="number" id="direccion" name="kills" required placeholder="Ingresa tus asesinatos">
            </div>

            <!-- Horas jugadas -->
            <div class="input-field">
                <label for="telefono">Horas jugadas</label>
                <input type="number" id="telefono" name="horas_jugadas" step="0.01" required placeholder="Ingresa tus horas jugadas">
            </div>

            <!-- Fecha de ingreso -->
            <div class="input-field">
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required>
                <label for="fecha_ingreso" class="active">Fecha de ingreso</label>
            </div>

            <!-- Trabajo -->
            <div class="input-field">
                <select id="trabajo" name="trabajo" required>
                    <option value="" disabled selected>Selecciona tu trabajo</option>
                    <option value="Minero">Minero</option>
                    <option value="Cazador">Cazador</option>
                    <option value="Constructor">Constructor</option>
                    <option value="Exokirador">Explorador</option>
                </select>
                <label for="trabajo">Trabajo</label>
            </div>

            <!-- Rango -->
            <div class="input-field">
                <select id="rango" name="rango" required>
                    <option value="" disabled selected>Selecciona tu rango</option>
                    <option value="KURTA">KURTA</option>
                    <option value="KURTA OG">KURTA OG</option>
                    <option value="VIP">VIP</option>
                    <option value="OWNER">OWNER</option>
                </select>
                <label for="rango">Rango</label>
            </div>

            <!-- Botón de envío -->
            <div class="center">
                <button class="btn waves-effect waves-light blue" type="submit" name="submit">
                    Enviar registro <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

        <!-- Botones adicionales -->
        <div class="center" style="margin-top: 20px;">
            <a href="Principal.php" class="btn-large waves-effect waves-light purple">Inicio <i class="material-icons right">arrow_back</i></a>
        </div>
    </div>
</body>

<br><br><br>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar selects
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>

<?php include('footer.php'); ?>

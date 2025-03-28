<?php
// Iniciar la variable de mensaje en vacío
$mensaje = "";

// Función para verificar si las claves coinciden
function verificar_claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "<h2 style='color: red;'>Error: Las claves no coinciden. Inténtelo nuevamente.</h2>";
    } else {
        return "<h2 style='color: green;'>Registro exitoso. ¡Bienvenido!</h2>";
    }
}

// Verificar si se enviaron los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave1 = $_POST["clave1"];
    $clave2 = $_POST["clave2"];

    // Generar el mensaje de validación
    $mensaje = "<h1>Verificación de Usuario</h1>";
    $mensaje .= "<p><strong>Usuario:</strong> $usuario</p>";
    $mensaje .= verificar_claves($clave1, $clave2);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="" method="post">
        <!-- Nombre de usuario -->
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <!-- Clave -->
        <label for="clave1">Ingrese su clave:</label>
        <input type="password" id="clave1" name="clave1" required><br><br>

        <label for="clave2">Repita su clave:</label>
        <input type="password" id="clave2" name="clave2" required><br><br>

        <!-- Botón de envío -->
        <input type="submit" value="Registrar">
    </form>

    <!-- Mostrar mensaje de validación -->
    <?php echo $mensaje; ?>
</body>
</html>

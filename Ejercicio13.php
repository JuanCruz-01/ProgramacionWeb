<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Completo de PHP</title>
</head>
<body>
    <h1>Ejemplo Completo de PHP</h1>
    <?php
    // 1. Variables
    $nombre = "Juan";
    $edad = 20;
    echo "<h2>1. Variables</h2>";
    echo "Nombre: $nombre <br>";
    echo "Edad: $edad <br>";

    // 2. Operaciones Matemáticas
    $a = 8;
    $b = 4;
    echo "<h2>2. Operaciones Matemáticas</h2>";
    echo "Suma: " . ($a + $b) . "<br>";
    echo "Resta: " . ($a - $b) . "<br>";
    echo "Multiplicación: " . ($a * $b) . "<br>";
    echo "División: " . ($a / $b) . "<br>";

    // 3. Condicionales
    echo "<h2>3. Condicionales</h2>";
    if ($edad >= 18) {
        echo "Eres mayor de edad.<br>";
    } else {
        echo "Eres menor de edad.<br>";
    }

    // 4. Bucles
    echo "<h2>4. Bucles</h2>";
    echo "Cuenta hasta 5: <br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "$i ";
    }
    echo "<br>";

    // 5. Funciones
    echo "<h2>5. Funciones</h2>";
    function saludo($nombre) {
        return "Hola, $nombre! Bienvenido al ejemplo completo de PHP.";
    }
    echo saludo($nombre) . "<br>";

    // 6. Arrays y foreach
    echo "<h2>6. Arrays</h2>";
    $frutas = ["Manzana", "Plátano", "Fresa", "Naranja"];
    echo "Lista de frutas:<br>";
    foreach ($frutas as $fruta) {
        echo "- $fruta<br>";
    }
    ?>
</body>
</html>
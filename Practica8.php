<html>
<head>
  <title>Ejemplo de Variables</title>
</head>
<body>
  <h1>Precio de la Computadora</h1>
  <p>
    <?php
    // Definir tres variables enteras
    $precio = 90;
    $descuento = 10;
    $cantidad = 1;

    // Crear un string que incorpore dichas variables
    echo "La computadora tiene un precio de $$precio.<br>";
    echo "Hay un descuento de $$descuento.<br>";
    echo "Cantidad de computadoras compradas: $cantidad.<br>";
    echo "El costo total es: $" . (($precio - $descuento) * $cantidad) . ".";
    ?>
  </p>
</body>
</html>

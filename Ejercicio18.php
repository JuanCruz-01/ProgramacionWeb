<html>
<head>
<title>Tabla condicional</title>
</head>
<body>
<h1>Tabla condicional 1</h1>
<?php
/* Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos
mostrar en rojo, y los valores positivos en azul */

/* En primer lugar vamos a crear una funcion con las condicionales */

function muestra($valor) {
    if ($valor < 0.5)
        $color = "red";
    else
        $color = "blue";
    echo "<td><font color='$color'>$valor</font></td>\n";
}
?>
<table border="1">
<?php
for ($x=0; $x<=2; $x+=0.01){
    echo "<tr>";
    muestra(sin($x));
    muestra(cos($x));
    echo "</tr>";
}
?>
</table>
</body>
</html>
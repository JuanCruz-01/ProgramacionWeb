<!DOCTYPE html>
<html>
<head>
    <title>Resultados de la Encuesta</title>
</head>
<body>
<h3>Resultados de la Encuesta</h3>
<?php
$file = "Ejercicio31resultado.txt";

// Verificar si el archivo existe y tiene contenido
if (file_exists($file)) {
    $fp = fopen($file, "r");
    $vote = fread($fp, filesize($file));
    fclose($fp);

    // Dividir los resultados en un array
    $arr_vote = explode(",", $vote);

    // Mostrar los resultados
    echo "<ul>";
    echo "<li>Excelente, he aprendido mucho: " . $arr_vote[0] . " votos</li>";
    echo "<li>Más o menos, es muy complicado: " . $arr_vote[1] . " votos</li>";
    echo "<li>Baja el nivel, quiero aprender PHP: " . $arr_vote[2] . " votos</li>";
    echo "</ul>";
} else {
    echo "<p>No hay resultados aún. Asegúrate de que alguien haya votado.</p>";
}
?>
</body>
</html>
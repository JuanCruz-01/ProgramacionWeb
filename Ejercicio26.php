<html>
<head>
<title>EJERCICIO 3_2</title>
</head>
<body>
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO Version 3 Todo en una pagina</h1><br>
<br>
<h1>Rellena los campos (form.html)</h1>
<form action="Ejercicio26.php" method="post">
<input type="radio" name="gender" value="0"> Sr.
<input type="radio" name="gender" value="1"> Sra.<br>
Tu apellido:<br>
<input type="text" name="lastname">
<input type="submit" name="submitbutton" value="Envialo!">
</form>
<?php
if (isset($_POST['gender']) && isset($_POST['lastname']) && $_POST['lastname'] != "") {
if($_POST['gender'] == 0) {
echo "Hola Sr. ";
} else {
echo "Hola Sra. ";
} 
echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.\n";
} else {
if (isset($_POST['submitbutton'])) {
echo "Por favor rellena todos los campos";
}
}
?>
</body>
</html>
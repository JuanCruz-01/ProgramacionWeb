<!DOCTYPE html>
<html>
<head>
    <title>Contrato Editable</title>
</head>
<body>
    <h2>Contrato</h2>
    <form method="post" action="">
        <textarea name="contrato" rows="10" cols="80">
En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] en su carácter
de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado con domicilio en [……..],
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </textarea><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contrato = htmlentities($_POST["contrato"]);

        echo "<h3>Contrato Modificado</h3>";
        echo "<p>$contrato</p>";
    }
    ?>
</body>
</html>
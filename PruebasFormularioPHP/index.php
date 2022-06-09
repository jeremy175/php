<html>
<head>
    <title>Formulario de prueba</title>
</head>
<body>
<form  method="post">
    <input type="text" placeholder="nombre" name="Nombre">
    <input type="text" placeholder="Email" name="Email">
    <input type="text" placeholder="Asunto" name="Asunto">
    <textarea placeholder="Mensaje" name="Mensaje"></textarea>
    <input type="submit" value="Enviar" name="Enviar" >
</form>
<?php
include("formulario.php");
?>
</body>
</html>
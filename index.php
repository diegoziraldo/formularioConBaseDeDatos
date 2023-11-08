<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">

        <input type="text" id="nombre" name="nombre">
        <input type="text" id="apellido" name="apellido">
        <input type="submit" name="register"></input>

    </form>

    <?php
    include('procesar.php')

    ?>

</body>

</html>
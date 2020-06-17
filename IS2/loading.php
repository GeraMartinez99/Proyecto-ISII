<!DOCTYPE html>
<html lang="en">

<head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php


$link = new PDO("mysql:host=localhost; dbname=prestamoilab", "root", "");
?>

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>nombre</th>
                    <th>matricula</th>
                    <th>Equipo</th>

                </tr>
            </thead>
            <?php foreach ($link->query('SELECT nombre, matricula, equipo FROM `prestamo` WHERE activo=1;') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
            <tr>
                <td>
                    <?php echo $row['nombre'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                </td>
                <td>
                    <?php echo $row['matricula'] ?>
                </td>
                <td>
                    <?php echo $row['equipo'] ?>
                </td>
            </tr>
            <?php
	}
?>
        </table>

        <a href="index2.html"><input class="boton" value="Regresar"></a>
        
</body>




</html>
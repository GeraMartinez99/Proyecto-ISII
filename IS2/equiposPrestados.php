<?php 

include ('clases/conectarBD.php');
$Conexion = new ConectarBD;
$link= $Conexion->conexionBD2();
$equipos= $Conexion->regresarEquiposPrestados($link);
        
            echo json_encode($equipos);
        

?>
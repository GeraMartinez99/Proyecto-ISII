<?php 

include ('clases/conectarBD.php');
$Conexion = new ConectarBD;
$link= $Conexion->conexionBD2();
$equipos= $Conexion->regresarEquiposDisponibles($link);
        
            echo json_encode($equipos);
        

?>
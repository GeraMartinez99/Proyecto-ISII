<?php 

include ('clases/conectarBD.php');
$Conexion = new ConectarBD;

if(isset($_POST)){
    $numeroMac=$_POST['numeroMac'];    
    $descripcionMac=$_POST['descripcionMac'];
    $estadoMac=$_POST['estadoMac'];
    $descricionTeclado=$_POST['descripcionTeclado'];
    $estadoTeclado=$_POST['estadoTeclado'];
    $descripcionMouse=$_POST['descripcionMouse'];
    $estadoMouse=$_POST['estadoMouse'];

    if($Conexion->insertarMouse($numeroMac,$descripcionMouse,$estadoMouse)){
        $Conexion->insertarTeclado($numeroMac,$descricionTeclado,$estadoTeclado);
        $Conexion->insertarMac($numeroMac,$descripcionMac,$estadoMac,$numeroMac,$numeroMac);
    }
    else {
        echo "0";
    }


}


?>
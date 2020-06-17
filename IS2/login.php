<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
		body {
            width: 600px;
            background: #141414;
            padding: 30px;
            margin: auto;
            margin-top: 100px;
            border-radius: 4px;
            font-family: 'calibri';
            color: white;
            box-shadow: 7px 13px 37px white;
            
        }
		h1 {
            color: #005825;
            border-bottom: 1px solid #005825;
        }
            
		h2 {
            font-size: 4em;
            color: #4A0048;
            text-align:center;
            background:grey;
        }
        .boton {
    width: 100%;
    background: rgb(35, 7, 136);
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
}

            

            


		</style>
	</head>

<?php


//$Conexion->Eliminar($link,$elim,$id);
        //$caract = $_POST['features'];
       // $separado_por_comas = implode(", ",$caract);
    
    if (isset($_POST['submit']))
    {
        if(isset($_POST['correo'], $_POST['matricula'])){
            include ('clases/conectarBD.php');
                    $Conexion = new ConectarBD;
                    $plantilla = new Plantilla;
                    $link = $Conexion->conexionBD2();

                   /*if($Conexion->InsertDatosBD($link,$_POST['nombre'], $_POST['apellido'], $_POST['matricula'], $_POST['correo'])==TRUE){
                        $plantilla->crearAcercadeti();
                        $plantilla->crearAcercadeti2();
                    }*/

                    //-----------
                    
                    if($Conexion->consultarEmail($link,$_POST['correo'],$_POST['matricula'])==true){
                        
                       echo"<a href=inicio.html><input class=boton type=submit name=submit value=Continuar><a>";

                    /*}else{
                        if($Conexion->InsertDatosBD($link,$_POST['nombre'],$_POST['matricula'],$_POST['numMo'])==TRUE){
                        $plantilla->crearAcercadeti();
                        $plantilla->crearAcercadeti2();
                    }*/
                }
                    ///----------
                }else{
                        echo "<h2>Los datos no están completos, favor de rellenar todos los campos</h2>";  
                        echo'<script type="text/javascript">
        alert("El correo electrónico ya ha sido registrado");
        </script>';  
                    }
    }

    unset($_POST['submit']);

?>
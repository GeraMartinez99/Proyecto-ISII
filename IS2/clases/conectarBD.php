<?php
class ConectarBD{



    function conexionBD2(){
    $link = new mysqli("localhost", "root", "", "PrestamoIlab");
    if ($link->connect_error) {
        echo "Falló la conexión ".$link->connect_error."<br/>";
        exit();}
       
        return $link;
    }

    function consultarEmail($link,$email, $matricula )
    {    


        $consulta="SELECT correo,matricula FROM registro 

WHERE correo='$email' and matricula='$matricula'";

if($query= $link->query($consulta)){
    $row=$query->fetch_array(); 
    $nr =$query->num_rows; 
    
    //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
    if($nr == 1){ 
      header ("Location:inicio.html"); 
    }
    //Si no existe lo va a enviar al login otra vez.
    else if($nr <= 0) { 
                  header("Location:index.html"); 
    }  
    }
    else{
    echo $link->error;  
    }


        
    /*if ( $result2 = $link->query("SELECT * FROM registro WHERE correo='$email'AND matricula='$contra' ") ) 
			{

				//echo "Se accedi� con �xtio la tabla datos_clientes <br/>");
				$row = $result2->fetch_array(MYSQLI_ASSOC);
                $result2->free();
                echo /*"<table cellpadding=0 cellspacing=0 width=1200>
                <h2>Alumno ya registrado</h2>
                <tr class=even>
                        <td>Nombre</td>
                        <td>" .$row["nombre"]."</td> 
                </tr>
                <tr class=even>
                        <td>Telefono</td>
                        <td>". $row['matricula']."</td> 
                </tr>
                
                
            </table>"*/
            
            /*"<h2>Bienvendio Colaborador " .$row["nombre"]."</h2>";*/
            

            /*"<table class=table table-striped>
            <h2>Bienvendio Colaborador " .$row["nombre"]."</h2>
						<thead>
							<tr>
								<th>Correo</th>
								<th>Matricula</th>
                
                
							</tr>
						</thead>
						
						<tr class=even>
                        <td>Correo</td>
                        <td>" .$row["correo"]."</td> 
                </tr>
                <tr class=even>
                        <td>Matricula</td>
                        <td>". $row['matricula']."</td> 
                </tr>
                
				
				
			
                    </table>";*/
                    
               /* return TRUE;

			}else{
                echo "No se consulto nada";
                echo "no hizo nada";
                return false;
            } */   
        }
        public function InsertDatosBD($link,$nombre, $apellido, $matricula, $correo){
            
            $sql2="SELECT correo FROM registro WHERE correo='$correo'";
            $sql1="SELECT matricula FROM registro WHERE matricula='$matricula' ";



            if($query= $link->query($sql2)){
                $row=$query->fetch_array(); 
                $nr =$query->num_rows; 
                if( $query2=$link->query($sql1)){
                    $row2=$query2->fetch_array(); 
                    $nr2 =$query2->num_rows; 
                }
                
            } 
            $result = mysqli_query($link, $sql2);
            $result2 = mysqli_query($link, $sql1);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $row = $result2->fetch_array(MYSQLI_ASSOC);
            
            
            if($nr>0 and $nr2>0){
                
                    //echo "Se accedi� con �xtio la tabla datos_clientes <br/>");
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    
                    $result->free();
                    echo'<script type="text/javascript">
        alert("El correo electrónico ya ha sido registrado");
        </script>';


        echo "<body>
    <h1>Tu correo o matricula ya fueron registrados anteriormente</h1>";
    /*<p><strong>Datos ingresados con el correo:</strong></p>";   
                    echo "<table cellpadding=0 cellspacing=0 width=1200>
                    
                    <tr class=even>
                            <td>Nombre</td>
                            <td>" .$row["nombre"]."</td> 
                    </tr>
                    <tr class=even>
                            <td>matricula</td>
                            <td>". $row['apellido']."</td> 
                    </tr>
                    <tr class=even>
                            <td>Equipo</td>
                            <td>". $row['matricula']."</td> 
                    </tr>
                    <tr class=even>
                            <td>correo</td>
                            <td>". $row['correo']."</td> 
                    </tr>
                    
                </table>
                
                
                ";*/
                
        return false;
            }
            else if($nr <= 0 and $nr2 <= 0) { 
                 
    
                
                

            $sql = "INSERT INTO registro(nombre, apellido, matricula, correo)
            values('$nombre','$apellido','$matricula', '$correo')";
            
            if (mysqli_query($link, $sql)) {
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
        mysqli_close($link);
        return TRUE;
        }
    }

    public function insertarMac($numero,$descripcion,$estadoMac,$teclado,$mouse){
        $link = new mysqli("localhost", "root", "", "PrestamoIlab");
        $sql="INSERT INTO `mac`(`numero`, `descripcion`, `estadoMac`, `Teclado_numero`, `Mouse_numero`) VALUES ('$numero','$descripcion','$estadoMac','$teclado','$mouse')";

                    
        if (mysqli_query($link, $sql)) {
                echo '1';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    mysqli_close($link);
    return TRUE;
    }

    public function insertarTeclado($numero,$descripcion,$estadoTeclado){
        $link = new mysqli("localhost", "root", "", "PrestamoIlab");
        $sql="INSERT INTO `teclado`(`numero`, `descripcion`, `estadoTeclado`) VALUES ('$numero','$descripcion','$estadoTeclado')";

                    
        if (mysqli_query($link, $sql)) {
                echo '1';
        } else {
            echo '0';
        }
    mysqli_close($link);

    }

    public function insertarMouse($numero,$descripcion,$estadoMouse){
        $link = new mysqli("localhost", "root", "", "PrestamoIlab");
        $query="SELECT*FROM mouse where numero='$numero'";
        $result2 = mysqli_query($link,$query);
        if($result2->num_rows<1){
            $sql="INSERT INTO `mouse`(`numero`, `descripcion`, `estadoMouse`) VALUES ('$numero','$descripcion','$estadoMouse')";
            if (mysqli_query($link, $sql)) {
                    return 1;
            } else {
                return 0;
            }
           
        }
        else return 0;
 
    mysqli_close($link);
    $link = new mysqli("localhost", "root", "", "PrestamoIlab");
    }
    public function regresarEquiposDisponibles($link){
        $array=array();
        $sql="SELECT numero FROM mac where disponibilidad=1";
        if($query=mysqli_query($link,$sql)){
            while($result2=$query->fetch_array(MYSQLI_ASSOC)){
                $array[]=$result2['numero'];
            }
            
            return $array;
        }

    }
    public function regresarEquiposPrestados($link){
        $array=array();
        $sql="SELECT numero FROM mac where disponibilidad=0";
        if($query=mysqli_query($link,$sql)){
            while($result2=$query->fetch_array(MYSQLI_ASSOC)){
                $array[]=$result2['numero'];
            }
            
            return $array;
        }

    }
        public function EliminarPrestamo($link,$equipo){
        $sql ="UPDATE prestamo SET activo='0' WHERE equipo='$equipo'";
        $sql2 ="UPDATE mac SET disponibilidad='1' WHERE numero='$equipo'";
        echo "<h2>Equipo Regresado</h2>";
        echo"<a href=index2.html><input class=boton type=submit name=submit value=Regresar><a>";
        if (mysqli_query($link, $sql)) {
            mysqli_query($link,$sql2);
        } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        mysqli_close($link);
        }

        function registrarPrestamo($link,$nombre, $matricula, $equipo)
{
          
            
            $sql2 = "SELECT * FROM prestamo WHERE equipo ='$equipo' AND activo='1'";
            $result = mysqli_query($link, $sql2);
            if(mysqli_num_rows($result)>0){
                
                    //echo "Se accedi� con �xtio la tabla datos_clientes <br/>");
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    
                    $result->free();
                    echo'<script type="text/javascript">
        alert("Equipo ya prestado");
        </script>';


        echo "<body>
    <h1>El equipo ya fue prestado</h1>
    <p><strong>Datos el equipo prestado:</strong></p>";   
                    echo "<table cellpadding=0 cellspacing=0 width=1200>
                    
                    <tr class=even>
                            <td>Nombre</td>
                            <td>" .$row["nombre"]."</td> 
                    </tr>
                    <tr class=even>
                            <td>matricula</td>
                            <td>". $row['matricula']."</td> 
                    </tr>
                    <tr class=even>
                            <td>Equipo</td>
                            <td>". $row['equipo']."</td> 
                    </tr>
                </table>
                
                
                ";                
        return true;
            }
            else{
 
            $sql = "INSERT INTO prestamo(nombre, matricula, equipo, activo)
            values('$nombre', '$matricula', '$equipo','1')";
            $sql2 = "UPDATE mac set disponibilidad=0 where numero='$equipo'";
        echo"<h2>Se ha registro el préstamo con exito, puede regresar y verlo en 'préstamos actuales'</h2>";
            if (mysqli_query($link, $sql)) {
                mysqli_query($link,$sql2);
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
        mysqli_close($link);
        return TRUE;
        }
    }


};

class Plantilla{

    public function crearAcercadeti(){
        echo"<body>
		<h1>MUCHAS GRACIAS</h1>
		<p>Gracias por registrarte para el prestamo de equipo de Ilab. Hemos recibido la siguiente información de tu registro:</p>";
    }
    public function CrearAcercaDeTi2(){
        echo "<h2>Acerca de ti:</h2>
		<ul>
			<li><strong>Nombre:</strong> <em>" . $_POST['nombre']. "</em></li>
			<li><strong>Matricula:</strong> <em>".$_POST['matricula']."</em></li>
			<li><strong>Correo:</strong> <em>".$_POST['correo']."</em></li>
    </ul>
    
    <p><a href=index.html>Ya tienes una cuenta</a></p>";
    }

  public function CrearAcercaDeTi3(){
        $caract = $_POST['features'];
        $separado_por_comas = implode(", ",$caract);
        echo "<h2>Tu diseño de Tenis (si ganas)</h2>
        <em>Con tu diseño los tenis te quedaran bien chidorris.</em><br>
        <strong>Color: </strong>
        <em>".$_POST['color']."</em><br>
        <strong>Tamaño: </strong>
        <em>".$_POST['size']."</em><br>
        <strong>Caracteristicas: </strong>
         $separado_por_comas
	    </body>
        </html>";
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>  
    
    <center>
        <div align="center">
        <font size="10"><h3> Usuario Registrado </h3></font>
        </div>
    
    <?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);


$Nombre = $_POST["nombre"] ;
$Apellido = $_POST["apellido"] ;
$Email = $_POST["email"] ;
$Direccion = $_POST["direccion"];
$Ciudad = $_POST["ciudad"];


if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b>
                   <h3>_____</h3>
                  </b>" ;
        }
       
        $datab = "usuarios";
       
        $usuarios = mysqli_select_db($connection,$datab);

        if (!$usuarios)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        $instruccion_SQL = "INSERT INTO `cc`(`nombre`, `apellido`, `email`, `direccion`, `ciudad`) 
        VALUES ('$Nombre','$Apellido','$Email','$Direccion','$Ciudad')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);



?>
</center>
    
</body>
</html>
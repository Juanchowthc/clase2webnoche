<?php 

$LOCALHOST = "localhost";
$USERNAME = "root";
$BDPASSWORD = "";
$BDNAME = "tiendanoche";


$conexion = mysqli_connect($LOCALHOST, $USERNAME, $BDPASSWORD, $BDNAME);

if (!$conexion) {
	echo "Error al conectar la BD";
}
else
{
	echo "Conectado Exitosamente";	
}

?>


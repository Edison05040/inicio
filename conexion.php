<?php
$servidor="localhost";
$usuario="datos";
$clave="12345";
$base="vacunas";
$tabla="datos_vacunas";

$codigo=$_POST['codigo'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];
$num_dosis=$_POST['num_dosis'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la coneccion con el servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectar con la base de datos");
$insertar="insert into datos_vacunas values ('$codigo','$cedula','$nombre','$ciudad','$edad','$num_dosis')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("LOS DATOS SE HAN GRABADO EXITOSAMNETE");
?>
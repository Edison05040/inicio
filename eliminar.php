<?php
$servidor="localhost";
$usuario="datos";
$clave="12345";
$base="vacunas";
$tabla="datos_vacunas";

$codigo=$_POST['codigo'];
/*$cedula=$_POST['cedula'];*/
/*$nombre=$_POST['nombre'];*/
/*$ciudad=$_POST['ciudad'];*/
/*$edad=$_POST['edad'];*/
/*$num_dosis=$_POST['num_dosis'];*/

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la coneccion con el servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectar con la base de datos");

$resultado=mysqli_query($conexion,"DELETE FROM datos_vacunas where codigo='$codigo'") or die ("error al eliminar registros");
mysqli_close($conexion);
echo ("Los registros se han elimidado correctamente");
?>
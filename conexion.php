<?php
$server="localhost";
$usuario="root";
$password="";
$baseDatos="alimentos_dif";

$conexion=mysql_connect($server, $usuario, $password) or die("Error al conectarse al servidor de base de datos".mysql_error());
mysql_select_db($baseDatos,$conexion);
?>
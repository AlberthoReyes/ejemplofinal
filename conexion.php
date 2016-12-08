<?php

$usario="u174280093_rbd";
$passwd="hsa5V9Kcbm";
$servidor="mysql.hostinger.mx";
$BD="u174280093_dif";

$conexion=mysql_connect($server, $usuario, $password) or die("Error al conectarse al servidor de base de datos".mysql_error());
mysql_select_db($baseDatos,$conexion);
?>
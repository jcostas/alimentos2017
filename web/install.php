<?php
include_once("../app/Config.php");
$host=Config::$mvc_bd_hostname;
$user=Config::$mvc_bd_usuario;
$pass=Config::$mvc_bd_clave;

$c=mysqli_connect($host,$user,$pass) or die("Imposible conectar </br>");

echo "conectado a mysql </br>";

if(mysqli_query($c,"CREATE DATABASE IF NOT EXISTS alimentos")){
	echo "CREADA BASE DE DATOS todo ok </br>";

}else{
	echo "no ok CREACION DE BASE DE DATOS </br>";

}


if(mysqli_select_db($c,"alimentos")){
	echo "CAMBIADA a alimentos </br>";

}else{
	echo "no CAMBIADA a alimentos </br>";

}

$consulta="CREATE TABLE IF NOT EXISTS `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
if(mysqli_query($c,$consulta)){
	echo "CREADA TABLA todo ok </br>";

}else{
	echo "no ok CREACION DE TABLA </br>";

}

?>




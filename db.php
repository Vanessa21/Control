<?php
$db_name = "practica2";
$db_server = "localhost";
$db_user = "root";
$db_pas = "";
$db_connection = mysql_connect($db_server, $db_user,$db_pas) or die("error al conectar la bd");
mysql_select_db($db_name,$db_connection)or die ("la base de datos no existe");
mysql_query("SET NAMES utf8");

?>
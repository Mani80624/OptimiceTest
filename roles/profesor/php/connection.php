<?php
use mysqli;
$host = "localHost";
$user = "root";
$pwd = "";
$data_base = "octopus";
$mysqli = new mysqli($host,$user,$pwd,$data_base);

if($mysqli->connect_error){
    die("Error de conexión: ".$mysqli->connect_error);
}

?>

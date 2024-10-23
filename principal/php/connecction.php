<?php 
use mysqli;
$mysqli = new mysqli('localhost','root','','octopus');
if($mysqli->connect_error){
    die('Error de conexión: '.$mysqli->connect_error);
}
?>

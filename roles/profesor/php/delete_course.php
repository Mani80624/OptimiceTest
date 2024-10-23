<?php
include_once 'connection.php';
session_start();
$consult = $mysqli->prepare("DELETE FROM courses WHERE id_course = ?");
$consult->bind_param('i', $_POST['id_course']);

if($consult->execute()){
    echo "<div class='alert alert-success'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				    <strong>El curso se eliminó con éxito</strong>
			    </div>";
}else {
    echo "<div class='alert alert-warning'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				    <strong>Hubo un problema al eliminar el curso</strong>
			    </div>";
}
?>

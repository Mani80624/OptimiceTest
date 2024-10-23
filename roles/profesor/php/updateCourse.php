<?php
include_once 'connection.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name_course = ucwords(htmlspecialchars(trim($_POST['name_course'])));
    $hours = htmlspecialchars(trim($_POST['hours']));
    $description = ucfirst(htmlspecialchars(trim($_POST['description'])));
    $id_course = intval(trim($_POST['id_course']));

    $consult = $mysqli->prepare("SELECT id_course FROM courses WHERE name_course = ? AND id_teacher = ?");
    $consult->bind_param('si',$name_course,$_SESSION['user_id']);
    $consult->execute();
    $consult->store_result();

    if($consult->num_rows()>0){
        echo "El curso ya existe";
        $consult->close();
        $mysqli->close();
        exit;
    }

    if($_POST['id_course']){
        $intHours = intval($hours);
        $consult = $mysqli->prepare("UPDATE courses SET name_course=?, hours= ?, description = ? WHERE id_course = ?");
        $consult->bind_param("sisi",$name_course,$intHours, $description, $id_course);

        if($consult->execute()){
            echo "<div class='alert alert-success'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				    <strong>El curso se ha actualizado correctamente</strong>
			    </div>";
        } else{
            echo "<div class='alert alert-warning'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				    <strong>Ocurrio un error al actualizar el curso, vuelve a intentarlo</strong>
			    </div>";
        }
    } else{
        echo "<div class='alert alert-danger'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				    <strong>El identificador no existe</strong>
			    </div>";
    }
    
}
?>

<?php 
include_once 'connection.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name_course = ucwords(htmlspecialchars(trim($_POST['name_course'])));
    $hours = ucwords(htmlspecialchars(trim($_POST['hours'])));
    $description = ucwords(htmlspecialchars(trim($_POST['description'])));

    $consult = $mysqli->prepare("SELECT id_course FROM courses WHERE name_course = ? AND id_teacher = ?");
    $consult->bind_param('si',$name_course,$_SESSION['user_id']);
    $consult->execute();
    $consult->store_result();

    if($consult->num_rows()>0){
        echo "<div class='alert alert-warning'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				<strong>El curso ya existe</strong>
			</div>";
        $consult->close();
        $mysqli->close();
        exit;
    }
    
    if(isset($_SESSION['user_id'])){
        $consult = $mysqli->prepare("INSERT INTO courses (id_teacher,name_course,hours,description) VALUES (?,?,?,?)");
        $consult->bind_param('isis',$_SESSION['user_id'], $name_course,$hours,$description);
        if($consult->execute()){
            echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				<strong>Se ha creado correctamente el curso {$name_course}</strong>
			</div>";
        } else{
            echo "<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				<strong>No se ha creado el curso {$name_course}, vuelve a intentarlo</strong>
			</div>";
        }
    } else{
        
        echo "<div class='alert alert-warning'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
				<strong>El usuario no existe</strong>
			</div>";
    }
}
?>

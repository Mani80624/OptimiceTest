<?php
include_once 'connection.php';
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = ucwords(htmlspecialchars(trim($_POST['name'])));
    $email = htmlspecialchars(trim($_POST['email']));
    $pwd = htmlspecialchars(trim($_POST['pwd']));

    $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
    
    $consult = $mysqli->prepare("UPDATE users SET name=?, pass= ?, email = ? WHERE id = ?");

    $consult->bind_param("sssi",$name,$pwd_hash,$email,$_SESSION['user_id']);
    
    if($consult->execute()){
        // New Consult
        $connect = new mysqli('localhost','root','','octopus');
        if($connect->connect_error){
            die("Error:". $connect->connect_error);
        }
        $consult_2 = $connect->prepare("SELECT name, email FROM users WHERE id=?");
        $consult_2->bind_param("i",$_SESSION['user_id']);
        $consult_2->execute();
        $result = $consult_2->get_result();
        $user = $result->fetch_assoc();

        // Update SESSION
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        
        echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='aaria-hidden='true'>×</button>
				<strong>El usuario se ha actualizado correctamente,</strong> Actualice la página para ver los cambios.
			</div>";
    } else {
        echo "<div class='alert alert-warning'>
				<button type='button' class='close' data-dismiss='aaria-hidden='true'>×</button>
				<strong>Hubo un error al actualizar el usuario.</strong> Actualice la página y vuelva a intentarlo.
			</div>";
    }
    //echo "Pwd_has: {$pwd_hash}";

    
}
?>

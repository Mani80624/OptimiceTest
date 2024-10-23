<?php
include_once 'connecction.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = ucwords(htmlspecialchars(trim($_POST['name'])));
    $email = htmlspecialchars(trim($_POST['email']));
    $pwd = htmlspecialchars(trim($_POST['pwd']));
    $rol = htmlspecialchars(trim($_POST['roles']));

    
    
     /*Verificate if the email is register yet */ 
    // Prepared QUERY
    $consult = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
    $consult->bind_param("s",$email);
    $consult->execute();
    $consult->store_result();
    
    if($consult->num_rows > 0){
        echo "<div class='alert alert-warning'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
			<strong>¡El correo ya existe!</strong>.
			</div>";
        $consult->close();
        $mysqli->close();
        exit;
    }
    
    // password hash
    $pwd_hash = password_hash($pwd,PASSWORD_DEFAULT);
    
    // Add user to data bases
    $consult = $mysqli->prepare("INSERT INTO users (name, email, pass, rol) VALUES (?,?,?,?)");
    $consult->bind_param("ssss",$name,$email,$pwd_hash,$rol);
    
    if($consult->execute()){
        echo "<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
			<strong>¡Bien!</strong> Tu usuario se ha creado con éxito <a href='/index.php' class='alert-link'>Da clic aquí para iniciar sesión</a>.
			</div>";
    } else{
        echo "<div class='alert alert-danger'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
			<strong>¡Oh no!</strong> Ha ocurrido un error al registrar, vuelve a intentarlo .
			</div>";
    }
    
    $consult->close();
    $mysqli->close();

}

?>

<?php
include_once 'connecction.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = htmlspecialchars(trim($_POST['email']));
    $pwd = htmlspecialchars(trim($_POST['pwd']));

    /* Prepared QUERY */
    $sql = "SELECT * FROM users WHERE email = ?"; // All properties
    $connecction = $mysqli->prepare($sql);
    $connecction->bind_param('s',$email);
    $connecction->execute();
    $result = $connecction->get_result();

    if($result->num_rows > 0){
        // Verificate user exist
        $user = $result->fetch_assoc();

        // Key verify to use password_verify()
        if(password_verify($pwd,$user['pass'])){
            // Success autentic
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_rol'] = $user['rol'];
            $_SESSION['loggedin'] = true;

            
            // Redirect with rol for each user
            if($user['rol']=='Profesor'){
                header("Location: /roles/profesor/dashboard.php");
            }else{
                header("Location: /roles/alumno/dashboard.php");
            }
            exit();
        }else{
            // Not found Key
            $_SESSION['password_error'] = "La contraseña es incorrecta";
            // Redirect to index
            header("Location: /index.php");
        }
    } else {
        // Not found User
        echo "El usuario no existe";
    }

    $connecction->close();
    $mysqli->close();
}
?>

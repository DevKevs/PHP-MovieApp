<?php

    include("../conexion.php");

    if(isset($_POST['btn_register'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];

        if($pass == $confirm_pass){

            $query = "INSERT INTO usuarios(Email, Passw) VALUES ('$email', '$pass')";
            $result = mysqli_query($conx, $query);
            if(!$result){
                $_SESSION['message'] = 'El email ya esta en uso!';
                $_SESSION['message_type'] = 'danger';
                header("location: ../register.php");
            }
            else{
                $_SESSION['message'] = 'El registro fue exitoso!';
                $_SESSION['message_type'] = 'success';
                header("location: ../login.php");
            }

        }
        else
        {
            $_SESSION['message'] = 'Las contraseñas no coinciden!';
            $_SESSION['message_type'] = 'danger';
            header("location: ../register.php");
        }

    }
?>
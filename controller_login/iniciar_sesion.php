<?php
// include('conexion.php');
$usuario = $_POST['email'];
$pass = $_POST['pass'];
session_start();
$conx = mysqli_connect(
    'localhost',
    'root',
    '',
    'movieapp'
);

$query = "SELECT * FROM usuarios WHERE Email ='$usuario' and Passw = '$pass'";
$result = mysqli_query($conx, $query);

$row = mysqli_fetch_array($result);

if($row['rol'] == 'admin'){
    header("location: ../index.php");

} elseif($row['rol'] == 'user'){
    header("location: ../userviews/userindex.php");
} else{
    $_SESSION['message'] = 'Inicio de sesión fallido!';
    $_SESSION['message_type'] = 'danger';
    header("location: ../login.php");
}
?>
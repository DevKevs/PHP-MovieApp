<?php 
    include("conexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM peliculas WHERE id = $id";
        $result = mysqli_query($conx, $query);
        if(!$result){
            die("query fail");
        }
        else{
            $_SESSION['message'] = 'Pelicula eliminada';
            $_SESSION['message_type'] = 'danger';
            header("location: administrar_peliculas.php");
        }
    }

?>
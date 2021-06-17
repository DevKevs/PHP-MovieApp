<?php
include("../conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM peliculas WHERE id = $id";
    $result = mysqli_query($conx, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $titulo = $row['Titulo'];
        $genero = $row['Genero'];
        $sinopsis = $row['Sinopsis'];
        $trailer = $row['Trailer'];
        $imagen = $row['Imagen'];
        $fecha = $row['Fecha_ingreso'];
    }
}
?>

<?php include("../includes/userhead.php") ?>
<?php include("../includes/usernavbar.php") ?>

<div class="container">
    <div class="shadow">
        <div class="row">
            
            <div class="col-md-3 p-4">
            <br>
                <img src="../img/portadas/<?= $imagen ?>" style="height: 310px; width: 220px;" alt="movie-image">
            </div>
            <div class="col-md-8 p-4">

                <iframe width="660" height="415" src="https://www.youtube.com/embed/<?= $trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h1><?= $titulo ?></h1>               
                <a href="#" class="btn btn-info"> <center> <h6> <?= $genero ?> </center></h6></a>
                <br> <br>
                <h6>Publicacion: <?= $fecha ?></h6>
                <p><?= $sinopsis ?></p>
            </div>

        </div>
    </div>


</div>
<style>
    body {
        background-image: url('../img/MoviesBackground.png');
        background-repeat: no-repeat;
        background-attachment: fixed;

    }

    .shadow {
        box-shadow: 500px 400px 200px grey;
    }

    .btn-info{
        border-radius:25px;
        border:none;
        width: 100px;
        height:31px;
        background-color:aliceblue;
    }

    .btn-info:hover{
        background-color:#17252a;
        color:aliceblue;
    }
</style>


<?php include("../includes/futel.php") ?>

<?php include("../includes/userfooter.php") ?>
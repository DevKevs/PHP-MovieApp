<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM peliculas WHERE id = $id";
        $result = mysqli_query($conx,$query);
        if (mysqli_num_rows($result ) == 1){
           $row = mysqli_fetch_array($result);
           $titulo = $row['Titulo'];
           $genero = $row['Genero'];
           $sinopsis = $row['Sinopsis'];
           $trailer = $row['Trailer'];
           $imagen = $row['Imagen'];
        }

    }
    if(isset($_POST['update_movie'])){
        $id= $_GET['id']; 
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $sinopsis = $_POST['sinopsis'];
        $trailer = $_POST['trailer'];
        $imagen = $_POST['imagen'];

        $query = "UPDATE peliculas SET Titulo = '$titulo', Genero = '$genero', Sinopsis = '$sinopsis', Trailer = '$trailer', Imagen = '$imagen' WHERE id = $id";
        mysqli_query($conx, $query);
        $_SESSION['message'] = 'Pelicula Actualizada con exito!';
        $_SESSION['message_type'] = 'warning';
        header("Location: administrar_peliculas.php");
    }
?>

<?php include("includes/header.php") ?>
<?php include("includes/adminNavbar.php") ?>

<div class="container p-3">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_movie.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <h3 id="admCardTittle">Edit Movies</h3>
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" value="<?php echo $titulo ?>" placeholder="Actualizar titulo" >
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="genero" class="form-control" placeholder="Actualizar genero" value="<?php echo $genero ?>">
                    </div><br/>
                    <div class="form-group">
                        <textarea name="sinopsis" rows="4" class="form-control" placeholder="Actualizar sinopsis"><?php echo $sinopsis ?></textarea>
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="trailer" class="form-control" value="<?php echo $trailer ?>" placeholder="Actualizar Link trailer">
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="imagen" class="form-control" value="<?php echo $imagen ?>" placeholder="Actualizar imagen">
                    </div><br/>
                    <center>
                        <input type="submit" class="btn btn-success" name="update_movie" value="Guardar Cambios" >
                    </center>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/futel.php") ?>
<?php include("includes/footer.php") ?>
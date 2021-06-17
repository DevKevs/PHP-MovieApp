<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>
<?php include("includes/adminNavbar.php") ?>

<div class="container p-3">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save_movie.php" method="POST">
                    <h3 id="admCardTittle">Movies</h3>
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo" autofocus>
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="genero" class="form-control" placeholder="Genero">
                    </div><br/>
                    <div class="form-group">
                        <textarea name="sinopsis" rows="4" class="form-control" placeholder="Sinopsis"></textarea>
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="trailer" class="form-control" placeholder="Link video">
                    </div><br/>
                    <div class="form-group">
                        <input type="text" name="imagen" class="form-control" placeholder="nombre imagen">
                    </div><br/>
                    <center>
                        <input type="submit" class="btn btn-success" name="save_movie" value="Guardar Pelicula">
                    </center>
                    
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Genero</th>
                        <th>Sinopsis</th>
                        <th>Token video</th>
                        <th>imagen</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        $query = "SELECT * FROM peliculas order by id desc";
                        $result_movies = mysqli_query($conx, $query);
                        while($row = mysqli_fetch_array($result_movies)){ ?>
                            <tr> 
                                <td><?php echo $row['Titulo']?></td> 
                                <td><?php echo $row['Genero']?></td> 
                                <td><p><?php echo $row['Sinopsis']?></p></td> 
                                <td><?php echo $row['Trailer']?></td> 
                                <td><?php echo $row['Imagen']?></td> 
                                <td>
                                    <a href="edit_movie.php?id=<?php echo $row['id']?>" class="btn btn-warning"><i class="fas fa-pen-alt"></i> </a> <br/><br/>
                                    <a href="delete_movie.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a>
                                </td>
                            </tr>
                        <?php  } ?>
                </tbody>
            </table>           
        </div>
    </div>
</div>

<?php include("includes/futel.php") ?>
<?php include("includes/footer.php") ?>
   
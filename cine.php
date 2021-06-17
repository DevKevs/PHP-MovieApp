<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>
<?php include("includes/adminNavbar.php") ?>

<form class="form-group" action="buscar.php" method="POST">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-2">
                <br>
                <button class="blue-btn" type="submit" name="btn_search"><i class="fas fa-search"></i> </button>
            </div>
            <div class="col-md-10">
                <div class="form__group field">
                    <input type="input" class="form__field" type="search" placeholder="Search a movie" aria-label="Search" name="buscar" id='buscar' required />
                    <label for="name" class="form__label">Search a movie</label>
                    <br>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="container p-4">
    <?php
    $query = "SELECT * FROM peliculas order by id desc";
    $result_movies = mysqli_query($conx, $query);
    while ($row = mysqli_fetch_array($result_movies)) { ?>
        <figure class="imghvr-push-up" style="margin: 5px;">
            <img class="responsive-img" src="img/portadas/<?php echo $row['Imagen']; ?>" style="height: 350px; width: 230px;" alt="example-image">
            <figcaption style="background: rgba(0,0,0,0);">
                <h6 class="ih-fade-down ih-delay-sm"><b><?php echo $row['Titulo']; ?></b></h6>
                <p class="ih-zoom-in ih-delay-md">
                    <i><?= substr($row['Sinopsis'], 0, 150) . " ..." ?></i>
                </p>
            </figcaption>
            <a href="ver_pelicula.php?id=<?= $row['id'] ?>"></a>
        </figure>
    <?php  } ?>
</div>



<?php include("includes/futel.php") ?>
<?php include("includes/footer.php") ?>
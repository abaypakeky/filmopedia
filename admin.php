<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}


include('header.php');
include('footer.php');
require('functions/functions.php');
$conn = connectToDatabase();
$films = query("SELECT * FROM film");


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Admin Page</title>
</head>

<body>
    <!-- Hero Section
    <div class="container-fluid">
        <section class="hero d-flex flex-md-column border rounded p-5">
            <div class="row">
                <div class="col-md">
                    <h1>
                        Welcome
                    </h1>
                    <p>Filmopedia is a website that helps you to find the best films in the world.</p>
                    <form class="d-flex align-items-center justify-content-center mx-2 p-5 opacity-75" action="" method="get">
                        <input type="search" class="form-control-lg w-50 me-2 rounded-pill opacity-75" name="" id="searchFilm" placeholder="Search for a movie......">
                        <button type="submit" class="btn btn-lg btn-dark rounded-pill">Search</button>
                    </form>
                </div>
            </div>
        </section>
    </div> -->

    <!-- Main Section -->
    <div class="container-fluid">
        <section class="listFilm d-flex row justify-content-evenly">
            <?php foreach ($films as $row) : ?>
                <div class="card my-3 p-0" style="width: 20rem;">
                    <img src="assets/img/<?php echo $row['gambar']; ?>" style="width: 100%;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                        <p>Genre: <?php echo $row['genre']; ?></p>
                        <p>Aktor: <?php echo $row['actor']; ?></p>
                        <p>Sutradara: <?php echo $row['sutradara']; ?></p>
                        <p>Tahun Rilis: <?php echo $row['tahun_rilis']; ?></p>
                        <a href="edit.php?id_film=<?= $row['id_film']; ?>" onclick="return confirm('Konfirmasi Edit Film');" class="btn btn-dark w-25">Edit</a>
                        <a href="hapus.php?id_film=<?= $row['id_film']; ?>" onclick="return confirm('Konfirmasi Hapus Film');" class="btn btn-dark w-25"> Hapus </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>

</html>
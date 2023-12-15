<?php

include('header.php');
include('footer.php');
require('functions/functions.php');
$conn = connectToDatabase();
$films = query("SELECT * FROM film");

// jika tombol cari ditekan
if (isset($_POST['cari'])) {
    $films = cari($_POST['keyword']);
}


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Home Page</title>
</head>

<body>
    <!-- Hero Section -->
    <div class="container-fluid">
        <section class="hero d-flex flex-md-column border rounded p-5">
            <div class="row">
                <div class="col-md">
                    <h1>
                        Welcome
                    </h1>
                    <p>Filmopedia is a website that helps you to find the best films in the world.</p>
                    <form class="d-flex align-items-center justify-content-center mx-2 p-5 opacity-75" action="" method="post">
                        <input type="search" class="form-control-lg w-50 me-2 rounded-pill opacity-75" name="keyword" id="searchFilm" placeholder="Search for a movie......">
                        <button type="submit" name="cari" class="btn btn-lg btn-dark rounded-pill">Search</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

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
                        <a href="#" class="btn btn-dark">Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>

</html>
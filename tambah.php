<?php

    include ('functions/functions.php');
    $conn = connectToDatabase();

    if (isset($_POST['submit'])) {
        if ( addNewFilms($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            " ;
        } else {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            " ;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>

<body>
    <section class="form-edit">
        <div class="container">
            <h1 class="mt-5">Edit Data Film</h1>
            <form action="" method="post">
                <input type="hidden" name="id_film">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" name="sinopsis">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre">
                </div>
                <div class="mb-3">
                    <label for="actor" class="form-label">Aktor</label>
                    <input type="text" class="form-control" id="actor" name="actor">
                </div>
                <div class="mb-3">
                    <label for="sutradara" class="form-label">Sutradara</label>
                    <input type="text" class="form-control" id="sutradara" name="sutradara">
                </div>
                <div class="mb-3">
                    <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                    <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis">
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                <button type="reset" class="btn btn-secondary" name="Reset">Reset</button>
                <a href="admin.php" class="btn btn-danger" name="Back">Back</a>
            </form>
        </div>
    </section>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}


include("header.php");
require('functions/functions.php');
$conn = connectToDatabase();


// Ambil data pada URL
$id_film = $_GET['id_film'];
$films = query("SELECT * FROM film WHERE id_film = '$id_film'")[0];



// Memeriksa apakah tombol sudah ditekan
if (isset($_POST["submit"])) {

    // Cek apakah data sudah ditambahkan
    if (editFilms($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>z
            alert('Data gagal diubah');
            document.location.href = 'admin.php';
            </script>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<body>
    <section class="form-edit">
        <div class="container">
            <h1 class="mt-5">Edit Dataa Film</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_film" id="id_film" value="<?= $films["id_film"]; ?>">
                <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $films["gambar"]; ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $films["judul"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="<?= $films["sinopsis"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="<?= $films["genre"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="actor" class="form-label">Aktor</label>
                    <input type="text" class="form-control" id="actor" name="actor" value="<?= $films["actor"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="sutradara" class="form-label">Sutradara</label>
                    <input type="text" class="form-control" id="sutradara" name="sutradara" value="<?= $films["sutradara"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                    <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" value="<?= $films["tahun_rilis"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label><br>
                    <img src="assets/img/<?= $films["gambar"]; ?>" style="width: 10%;" alt=""><br>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                <button type="reset" class="btn btn-secondary" name="Reset">Reset</button>
                <a href="admin.php" class="btn btn-danger" name="Back">Back</a>
            </form>
        </div>
    </section>
</body>

</html>
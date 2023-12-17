<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}


include('functions/functions.php');
$conn = connectToDatabase();

$id_film = $_GET['id_film'];
global $id_film;

if (deletesFilm("$id_film") > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus');
        document.location.href = 'admin.php';
    </script>";
}

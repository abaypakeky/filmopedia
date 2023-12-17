<?php

// Method Koneksi Ke Database
function connectToDatabase()
{
    $conn = mysqli_connect("localhost", "root", "", "db_filmopedia");

    if (!$conn) {
        echo "Database Tidak Terkoneksi";
    } else {
        echo "Database Terkoneksi";
    }
    return $conn;
}

// Method untuk mengambil Seluruh data dari database
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Method untuk mengambil informasi film berdasarkan id_film
function getFilmById($conn, $id_film)
{
    $id_film = mysqli_real_escape_string($conn, $id_film);
    $query = "SELECT * FROM film WHERE id_film = '$id_film'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return mysqli_fetch_assoc($result);
}

// Method Untuk Menambah Data
function addNewFilms($film)
{

    global $conn;

    if (isset($film['submit'])) {

        $judul = htmlspecialchars($film["judul"]);
        $sinopsis = htmlspecialchars($film["sinopsis"]);
        $genre = htmlspecialchars($film["genre"]);
        $actor = htmlspecialchars($film["actor"]);
        $sutradara = htmlspecialchars($film["sutradara"]);
        $tahun_rilis = htmlspecialchars($film["tahun_rilis"]);

        // Upload gambar
        $gambar = upload();

        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO film (judul, sinopsis, genre, actor, sutradara, tahun_rilis, gambar) VALUES ('$judul', '$sinopsis', '$genre', '$actor', '$sutradara', '$tahun_rilis', '$gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

// Method untuk upload Gambar
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error =  $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah gambar tidak diupload

    if ($error === 4) {
        echo "
        <script> alert('Choose Image!');</script>
        ";

        return false;
    }

    // Cek apakah yang diuplaod adalah gambar
    $imgExtension = ['jpg', 'jpeg', 'png'];
    $extension = explode('.', $namaFile);
    $extension = strtolower(end($extension));

    if (!in_array($extension, $imgExtension)) {
        echo "
        <script> alert('yang anda upload bukan gambar');</script>
        ";
    }

    // Cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 10000024) {
        echo "
        <script> alert('ukuran gambar terlalu besar');</script>
        ";

        return false;
    }

    // Penguploadan gambar
    move_uploaded_file($tmpName, 'assets/img/'.$namaFile);

    return $namaFile;
}

// Method Untuk Menghapus Data
function deletesFilm($id_film)
{

    global $conn;
    global $id_film;

    $query = "DELETE FROM film WHERE id_film = '$id_film' ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Metohod Untuh mengubah Data
function editFilms($films)
{
    global $conn;

    if (isset($films['submit'])) {

        $id_film = $films['id_film'];
        $judul = htmlspecialchars($films["judul"]);
        $sinopsis = htmlspecialchars($films["sinopsis"]);
        $genre = htmlspecialchars($films["genre"]);
        $actor = htmlspecialchars($films["actor"]);
        $sutradara = htmlspecialchars($films["sutradara"]);
        $tahun_rilis = htmlspecialchars($films["tahun_rilis"]);
        $gambarLama = ($films["gambarLama"]);

        // cek apakah admin pilih gambar baru atau tidak
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $query = "UPDATE film SET judul = '$judul', sinopsis = '$sinopsis', genre = '$genre', actor = '$actor', sutradara = '$sutradara', tahun_rilis = '$tahun_rilis', gambar = '$gambar' WHERE id_film = '$id_film'";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

// Method untuk cari film
function cari($keyword)
{


    $query = "SELECT * FROM film WHERE judul LIKE '%$keyword%'

            OR sutradara LIKE '%$keyword%'
            OR actor LIKE '%$keyword%'
            OR genre LIKE '%$keyword%'
            OR tahun_rilis LIKE '%$keyword%'
            
            ";

    return query($query);
}

// Method registrasi
function register($data){
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $data['confirmPassword']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah ada');
        </script>";
        
        return false;
    }

    // cek confirmPassword
    if ($password !== $confirmPassword) {
        echo "<script>
            alert('Confirm Password tidak sesuai');
        </script>";

        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($conn);

}

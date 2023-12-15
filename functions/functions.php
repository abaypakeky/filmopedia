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

        $query = "INSERT INTO film (judul, sinopsis, genre, actor, sutradara, tahun_rilis) VALUES ('$judul', '$sinopsis', '$genre', '$actor', '$sutradara', '$tahun_rilis')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
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

        $query = "UPDATE film SET judul = '$judul', sinopsis = '$sinopsis', genre = '$genre', actor = '$actor', sutradara = '$sutradara', tahun_rilis = '$tahun_rilis' WHERE id_film = '$id_film'";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

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

// Method Untuk Menambah Data
function addNewFilms($films)
{

    global $conn;

    if (isset($films['submit'])) {

        $judul = htmlspecialchars($films["judul"]);
        $sinopsis = htmlspecialchars($films["sinopsis"]);
        $genre = htmlspecialchars($films["genre"]);
        $actor = htmlspecialchars($films["actor"]);
        $sutradara = htmlspecialchars($films["sutradara"]);
        $tahun_rilis = htmlspecialchars($films["tahun_rilis"]);

        $query = "INSERT INTO film (judul, sinopsis, genre, actor, sutradara, tahun_rilisp) VALUES ('$judul', '$sinopsis', '$genre', '$actor', '$sutradara', '$tahun_rilis')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

// Method Untuk Menghapus Data
function deletesFilm($id_film){

    global $conn;
    global $id_film;

    $query = "DELETE FROM film WHERE id_film = '$id_film' " ;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
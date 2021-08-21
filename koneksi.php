<?php 
//koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_db = "db_perpus";

$db = mysqli_connect($server, $user, $password, $nama_db);

if (!$db) {
    die("Gagal terhubung dengan Database : ". mysqli_connect_error());
}

//EOF

?>
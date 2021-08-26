<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data id yang dikirim dari url
    $id_siswa = $_GET['id_siswa'];

    // menghapus data pada database
    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    // menjalankan query hapus data
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dihapus!');
            location.replace(index.php?page=siswabaru/list_siswa');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Dihapus!');
            location.replace('index.php?page=siswabaru/list_siswa');
            </script>";
    }
?>
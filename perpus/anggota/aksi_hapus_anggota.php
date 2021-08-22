<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data id yang dikirim dari url
    $id_anggota = $_GET['id_anggota'];

    // menghapus data pada database
    $query = "DELETE FROM tb_anggota WHERE id_anggota = '$id_anggota'";
    // menjalankan query hapus data
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dihapus!');
            location.replace(index.php?page=perpus/anggota/list_anggota');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Dihapus!');
            location.replace('index.php?page=perpus/anggota/list_anggota');
            </script>";
    }
?>
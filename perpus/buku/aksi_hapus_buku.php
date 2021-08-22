<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data id yang dikirim dari url
    $id_buku = $_GET['id_buku'];

    // menghapus data pada database
    $query = "DELETE FROM tb_buku WHERE id_buku = '$id_buku'";
    // menjalankan query hapus data
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dihapus!');
            location.replace(index.php?page=perpus/buku/list_buku');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Dihapus!');
            location.replace('index.php?page=perpus/buku/list_buku');
            </script>";
    }
?>
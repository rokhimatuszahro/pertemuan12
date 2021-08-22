<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data id yang dikirim dari url
    $id_user = $_GET['id_user'];

    // menghapus data pada database
    $query = "DELETE FROM tb_user WHERE id_user = '$id_user'";
    // menjalankan query hapus data
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dihapus!');
            location.replace(index.php?page=admin/list_user');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Dihapus!');
            location.replace('index.php?page=admin/list_user');
            </script>";
    }
?>
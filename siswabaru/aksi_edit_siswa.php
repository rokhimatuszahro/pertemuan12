<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['asal_sekolah'];

    //query untuk menambah data buku ke dalam database
    $query = "UPDATE tb_siswa 
    SET id_siswa = '$id_siswa', nama = '$nama', alamat = '$alamat', jenkel = '$jenkel', agama = '$agama', sekolah_asal = '$sekolah_asal' WHERE id_siswa = '$id_siswa'";
    // menjalankan query tambah data
    $result = mysqli_query($db, $query);


    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Diubah!');
            location.replace(index.php?page=siswabaru/edit_siswa');
            </script>";
    } else {
        die();
        echo "<script type='text/javascript'>
            alert('Data Berhasil Diubah!');
            location.replace('index.php?page=siswabaru/list_siswa');
            </script>";
    }

?>

<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    //query untuk menambah data buku ke dalam database
    $query = "INSERT INTO tb_anggota 
    VALUES ('$id_anggota', '$nama', '$jenkel', '$alamat', '$status')";
    // menjalankan query tambah data
    $result = mysqli_query($db, $query);


    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dimasukan!');
            location.replace(index.php?page=perpus/anggota/add_anggota');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Disimpan!');
            location.replace('index.php?page=perpus/anggota/list_anggota');
            </script>";
    }

?>

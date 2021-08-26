<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $nama_siswa = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    //query untuk menambah data buku ke dalam database
    $query = "INSERT INTO tb_siswa 
    VALUES ('', '$nama_siswa', '$alamat', '$jenkel', '$agama', '$asal_sekolah')";
    // menjalankan query tambah data
    $result = mysqli_query($db, $query);


    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Dimasukan!');
            location.replace(index.php?page=siswabaru/add_siswa');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Ditambah!');
            location.replace('index.php?page=siswabaru/list_siswa');
            </script>";
    }

?>

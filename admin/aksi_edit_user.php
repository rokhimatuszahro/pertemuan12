<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    //query untuk menambah data buku ke dalam database
    $query = "UPDATE tb_user 
    SET id_user = '$id_user', nama = '$nama', email = '$email', password = '$password', role = '$role' WHERE id_user = '$id_user'";
    // menjalankan query tambah data
    $result = mysqli_query($db, $query);


    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Diubah!');
            location.replace(index.php?page=admin/edit_user');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Diubah!');
            location.replace('index.php?page=admin/list_user');
            </script>";
    }

?>

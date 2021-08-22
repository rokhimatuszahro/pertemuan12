<?php 
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $id_buku = $_POST['id_buku'];
    $jdl_buku = $_POST['jdl_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_cetak = $_POST['thn_cetak'];

    //query untuk menambah data buku ke dalam database
    $query = "UPDATE tb_buku 
    SET id_buku = '$id_buku', jdl_buku = '$jdl_buku', pengarang = '$pengarang', penerbit = '$penerbit', thn_cetak = '$thn_cetak' WHERE id_buku = '$id_buku'";
    // menjalankan query tambah data
    $result = mysqli_query($db, $query);


    if (!$result) {
        echo "<script type='text/javascript'>
            alert('Data Gagal Diubah!');
            location.replace(index.php?page=perpus/buku/edit_buku');
            </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Data Berhasil Diubah!');
            location.replace('index.php?page=perpus/buku/list_buku');
            </script>";
    }

?>

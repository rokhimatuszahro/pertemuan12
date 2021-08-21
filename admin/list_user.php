<?php 

    //konek ke database
    include 'koneksi.php';

    //jika button simpan diklik
    if (isset($_POST['simpan'])) {
        //menangkap data yang diinputkan pada form tambah data buku
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        
        //query untuk menambah data buku ke dalam database
        $sql = "INSERT INTO tb_user 
        VALUES ('', '$nama', '$email', '$password', '$role')";

        
        if (mysqli_query($db, $sql)) {
            echo "<script type='text/javascript'>
                alert('Data Berhasil Disimpan!');
                location.replace('index.php?page=admin/list_user');
                </script>";
        } else {
            echo "<script type='text/javascript'>
                alert('Data Gagal Dimasukan!');
                location.replace(index.php?page=admin/add_user');
                </script>";
        }
        
    }

    //jika button ubah diklik
    if (isset($_POST['ubah'])) {
        //menangkap data yang terdapat pada form
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        //query untuk mengubah data buku
        $sql = "UPDATE 'tb_user' SET 'id_user' = $id_user', 'nama' = '$nama', 'email' = '$email', 'password' = '$password', 'role' = '$role' WHERE id_user = $id_user";

        
        if (mysqli_query($db, $sql)) {
            echo "<script type='text/javascript'>
                alert('Data Berhasil Diubah!');
                location.replace('index.php?page=admin/list_user');
                </script>";
        } else {
            echo "<script type='text/javascript'>
                alert('Data Gagal Dimasukan!');
                location.replace('index.php?page=admin/edit_user');
                </script>";
        }
    }

    //jika menghapus data
    if (isset($_GET['taks'])) {
        if ($_GET['taks'] == "delete") {
            $sql = "DELETE FROM tb_user WHERE id_user = ". $_GET['id_user'];
            $data = mysqli_query($db, $sql);

            if ($data) {
                echo "<script type='text/javascript'>
                    alert('Data Berhasil Dihapus!');
                    location.replace('index.php?page=admin/list_user');
                    </script>";
            } else {
                echo "<script type='text/javascript'>
                    alert('Data Gagal Dimasukan!');
                    location.replace(list_buku.php');
                    </script>";
            }
        }
    }
?>


<div class="row">
    <div class="col">
        <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <h3 class="mb-0">Data User</h3>
            <div class="col text-right">
                  <a href="index.php?page=admin/add_user" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                <th scope="col" class="sort" data-sort="id_buku">ID User</th>
                <th scope="col" class="sort" data-sort="nama">Nama</th>
                <th scope="col" class="sort" data-sort="pass">Email</th>
                <th scope="col" class="sort" data-sort="email">Password</th>
                <th scope="col" class="sort" data-sort="role">Role</h>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="list">
                <?php 
                    //mengambil data buku pada database
                    $data = mysqli_query($db, "SELECT * FROM tb_user ORDER BY id_user DESC");
                    $nomor = 1;
                    foreach ($data as $d) :
                ?>
                <tr>
                    <th scope="row">
                        <?= $nomor++; ?>
                    </th>
                    <td class="budget">
                        <?= $d['id_user']; ?>
                    </td>
                    <td>
                        <?= $d['nama']; ?>
                    </td>
                    <td>
                        <?= $d['email']; ?>
                    </td>
                    <td>
                        <?= $d['password']; ?>
                    </td>
                    <td>
                        <?= $d['role']; ?>
                    </td>
                    <td>
                    <?php 
                        echo "<a href='index.php?page=admin/edit_user&id_user=".$d['id_user']."'>
                            <i class='far fa-edit text-warning'></i>
                        </a>" 
                    ?>
                    <?php 
                        echo "<a href='index.php?page=admin/list_user&id_user=".$d['id_user']."&task=delete'>
                            <i class='fas fa-trash-alt text-danger'></i>
                        </a>" 
                    ?>
                    </td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
            </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
            <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item active">
                <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </div>
</div>
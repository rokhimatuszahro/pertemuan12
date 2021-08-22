<?php 
    // koneksi database
    include 'koneksi.php';
    //mengambil data angggota pada database
    $data = mysqli_query($db, "SELECT * FROM tb_anggota ORDER BY id_anggota DESC");

?>

<div class="row">
    <div class="col">
        <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <h3 class="mb-0">Data Anggota</h3>
            <div class="col text-right">
                  <a href="index.php?page=perpus/anggota/add_anggota" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                    <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                    <th scope="col" class="sort" data-sort="id_anggota">ID Anggota</th>
                    <th scope="col" class="sort" data-sort="nama">Nama</th>
                    <th scope="col" class="sort" data-sort="jenkel">Jenis Kelamin</th>
                    <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                    <th scope="col" class="sort" data-sort="alamat">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php 
                        $nomor = 1;
                        foreach ($data as $d) :
                    ?>
                    <tr>
                        <th scope="row" class="text-center">
                            <?= $nomor++; ?>
                        </th>
                        <td class="budget">
                            <?= $d['id_anggota']; ?>
                        </td>
                        <td>
                            <?= $d['nama']; ?>
                        </td>
                        <td>
                            <?= $d['jenkel']; ?>
                        </td>
                        <td>
                            <?= $d['alamat']; ?>
                        </td>
                        <td class="text-center">
                            <?= $d['status']; ?>
                        </td>
                        <td>
                            <a href="index.php?page=perpus/anggota/edit_anggota&id_anggota=<?= $d['id_anggota']; ?>">
                                <i class='far fa-edit text-warning'></i>
                            </a>
                            <a href="index.php?page=perpus/anggota/aksi_hapus_anggota&id_anggota=<?= $d['id_anggota']; ?>" onclick="return confirm ('Apakah Anda yakin ingin menghapus data?')">
                                <i class='fas fa-trash-alt text-danger'></i>
                            </a>
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
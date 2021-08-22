<?php 

    //konek ke database
    include 'koneksi.php';
    $id_buku = $_GET['id_buku'];
    //mengambil data buku pada database berdasarkan id
    $sql = "SELECT * FROM tb_buku WHERE id_buku = '$id_buku'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
?>

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small?>Ubah Data Buku</small>
                </div>
                <form role="form" action="index.php?page=perpus/buku/aksi_edit_buku" method="POST">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-key-25 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="ID Buku" type="text" name="id_buku" value="<?= $data['id_buku']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-books text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Judul Buku" type="text" name="jdl_buku" value="<?= $data['jdl_buku']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-single-02 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Pengarang" type="text" name="pengarang" value="<?= $data['pengarang']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-spaceship text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Penerbit" type="text" name="penerbit" value="<?= $data['penerbit']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-sort-numeric-down text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Tahun Cetak" type="text" name="thn_cetak" value="<?= $data['thn_cetak']; ?>" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=perpus/buku/list_buku" class="btn btn-neutral my-4">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary my-4" name="ubah" value="Ubah">
                            Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
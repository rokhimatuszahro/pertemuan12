<?php 
    //koneksi database
    include 'koneksi.php';
    $id_anggota = $_GET['id_anggota'];
    //mengambil data anggota pada database berdasarkan id
    $sql = "SELECT * FROM tb_anggota WHERE id_anggota = '$id_anggota'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
?>

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small?>Ubah Data Anggota</small>
                </div>
                <form role="form" action="index.php?page=perpus/anggota/aksi_edit_anggota" method="POST">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-key-25 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="ID Anggota" type="text" name="id_anggota" required value="<?= $data['id_anggota']; ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-books text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Nama" type="text" name="nama" required value="<?= $data['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-venus-mars text-primary"></i>
                                </span>
                                <label class="col-form-label">
                                    <small>Jenis Kelamin</small>
                                </label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-radio mt-3">
                                        <input type="radio" id="pria" name="jenkel" class="custom-control-input" value="Pria" <?= (($data['jenkel'] == 'Pria') ? 'checked' : '') ?> >
                                        <label class="custom-control-label" for="pria">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="wanita" name="jenkel" class="custom-control-input" value="Wanita" <?= (($data['jenkel'] == 'Wanita') ? 'checked' : '') ?> >
                                        <label class="custom-control-label" for="wanita">
                                            Wanita
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-home text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Alamat" type="text" name="alamat" required value="<?= $data['alamat']; ?>"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-thermometer-half text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Status" type="text" name="status" required value="<?= $data['status']; ?>"></input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=perpus/anggota/list_anggota" class="btn btn-neutral my-4">
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

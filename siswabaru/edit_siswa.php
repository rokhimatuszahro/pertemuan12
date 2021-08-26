<?php 
    //koneksi database
    include 'koneksi.php';
    $id_siswa = $_GET['id_siswa'];
    //mengambil data anggota pada database berdasarkan id
    $sql = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
?>

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small?>Ubah Data Siswa Baru</small>
                </div>
                <form role="form" action="index.php?page=siswabaru/aksi_edit_siswa" method="POST">
                    <input class="form-control" placeholder="Nama Siswa" type="hidden" name="nama" required value="<?= $data['id_siswa']; ?>">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-books text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Nama Siswa" type="text" name="nama" required value="<?= $data['nama']; ?>">
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
                                        <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="Laki-laki" <?= (($data['jenkel'] == 'Laki-laki') ? 'checked' : '') ?>>
                                        <label class="custom-control-label" for="laki-laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="Perempuan" <?= (($data['jenkel'] == 'Perempuan') ? 'checked' : '') ?>>
                                        <label class="custom-control-label" for="perempuan">
                                            Perempuan
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
                            <input class="form-control" placeholder="Agama" type="text" name="agama" required value="<?= $data['agama']; ?>"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-thermometer-half text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Asal Sekolah" type="text" name="asal_sekolah" required value="<?= $data['sekolah_asal']; ?>"></input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=siswabaru/list_siswa" class="btn btn-neutral my-4">
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
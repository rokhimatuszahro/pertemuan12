<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
            <!-- <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                    <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                    <span class="btn-inner--text">Google</span>
                </a>
                </div>
            </div> -->
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small?>Tambah Data Anggota</small>
                </div>
                <form role="form" action="index.php?page=perpus/anggota/aksi_add_anggota" method="POST">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-key-25 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="ID Anggota" type="text" name="id_anggota" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-books text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Nama" type="text" name="nama" required>
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
                                        <input type="radio" id="pria" name="jenkel" class="custom-control-input" value="Pria">
                                        <label class="custom-control-label" for="pria">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="wanita" name="jenkel" class="custom-control-input" value="Wanita">
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
                            <input class="form-control" placeholder="Alamat" type="text" name="alamat" required></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-thermometer-half text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Status" type="text" name="status" required></input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=perpus/anggota/list_anggota" class="btn btn-neutral my-4">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary my-4" name="tambah" value="Tambah">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

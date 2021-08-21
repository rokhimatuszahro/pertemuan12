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
                <form role="form" action="index.php?page=perpus/buku/list_anggota" method="POST">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-key-25 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="ID Anggota" type="text" name="id_anggota">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-books text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Nama" type="text" name="nama">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-image text-primary"></i>
                                </span>
                            </div>
                            <input type="file" name="foto">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-spaceship text-primary"></i>
                                </span>
                            </div>
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input">
                                <label class="custom-control-label" for="laki-laki">Laki - laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="perempuan" name="jenkel" class="custom-control-input">
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-home text-primary"></i>
                                </span>
                            </div>
                            <textarea class="form-control" placeholder="Alamat" type="text" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=perpus/buku/list_buku" class="btn btn-neutral my-4">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary my-4" name="simpan" value="Simpan">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

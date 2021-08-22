<?php 

    //konek ke database
    include 'koneksi.php';
    $id_user = $_GET['id_user'];
    //mengambil data user pada database berdasarkan id
    $sql = "SELECT * FROM tb_user WHERE id_user = '$id_user'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($result);
?>

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small?>Ubah Data User</small>
                </div>
                <form role="form" action="index.php?page=admin/aksi_edit_user" method="POST">
                    <input type="hidden" class="form-control" name="id_user" value="<?= $id_user; ?>">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-signature text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Nama" type="text" name="nama" value="<?= $data['nama']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-email-83 text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email" name="email" value="<?= $data['email']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ni ni-lock-circle-open text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Password" type="text" name="password" value="<?= $data['password']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user-tag text-primary"></i>
                                </span>
                            </div>
                            <input class="form-control" placeholder="Role" type="text" name="role" value="<?= $data['role']; ?>" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=admin/list_user" class="btn btn-neutral my-4">
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
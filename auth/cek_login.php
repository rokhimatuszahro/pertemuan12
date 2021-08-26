<?php 
  // Config
  include '../config/config.php';
  // koneksi database
  include '../koneksi.php';
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // query select data user 
    $query = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
      // Start session
      session_start();
      $data = mysqli_fetch_assoc($result);
      $_SESSION['id_user'] = $data['id_user'];
      $_SESSION['nama'] = $data['nama'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['pass'] = $data['password'];
      $_SESSION['role'] = $data['role'];
      $_SESSION['login'] = true;
      header("location:".base_url('?page=perpus/dashboard'));
    } else {
      header("location:".base_url('auth/login.php'));
    }
  }

?>
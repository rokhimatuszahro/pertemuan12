<?php 
  // koneksi database
  include '../koneksi.php';

  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // query select data user 
    $query = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);

    if ($count = 1) {
      $data = mysqli_fetch_array($result);
      $_SESSION['id_user'] = $data['id_user'];
      $_SESSION['nama'] = $data['nama'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['pass'] = $data['password'];
      $_SESSION['role'] = $data['role'];
      $_SESSION['login'] = true;
      echo "<script language='javascript'> alert('Anda Berhasil Login!');</script>";
      header("location: ../index.php?page=perpus/dashboard");
    } else {
      header("location: ../auth/login");
    }
  }

?>
<?php 
// Config
require 'config.php';
class auth {
    // Koneksi DB
    public static function db() {
        require './koneksi.php';
        return $db;
    }
    public static function hasLogin()
    {
        if ($_SESSION) {
            return header("location:".base_url('?page=perpus/dashboard'));
        }
    }
    public static function guest()
    {
        if (!$_SESSION) {
            return header("location:".base_url('auth/login.php'));
        }
    }
    public static function user($field = false)
    {
        $user_id = $_SESSION['id_user'];
        $query = "SELECT * FROM tb_user WHERE id_user = '$user_id'";
        $result = mysqli_query(self::db(), $query);
        $data = mysqli_fetch_assoc($result);
        if ($field) {
            return $data[$field];
        }
        return $data;
    }
}
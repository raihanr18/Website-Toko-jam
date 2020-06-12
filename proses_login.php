<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
$cek_user = mysqli_num_rows($query);

if ($cek_user = 0) {
    echo "Akun belum tersedia, silahkan login ulang <a href='login.php'>Login</a>";
    echo "</br>";
    echo "Atau daftar jika belum mempunyai akun <a href='form_register.php>Register</a>'";
} else {
    echo "Login berhasil";
}

?>
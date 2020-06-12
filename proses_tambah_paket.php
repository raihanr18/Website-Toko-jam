<?php

include "functions.php";

$nama_paket  = $_POST['nama_paket'];
$harga_paket = $_POST['harga_paket'];
$deskripsi   = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "INSERT INTO paket VALUES('', '$nama_paket', '$harga_paket', '$deskripsi')");

if ( $query == TRUE ) {
    echo "<script>
    alert('Berhasil menambahkan data di tabel paket!')
    </script>";
    header("location: halaman_paket.php");
} else {
    echo "Gagal menambahkan data...<br>".mysqli_error($koneksi);
}
?>
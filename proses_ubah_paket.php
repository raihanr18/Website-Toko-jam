<?php



include "functions.php";

$id          =$_POST['id_paket'];
$nama_paket  =$_POST['nama_paket'];
$harga_paket =$_POST['harga_paket'];
$deskripsi   =$_POST['deskripsi'];

$query = mysqli_query($koneksi, "UPDATE paket SET nama_paket='$nama_paket', harga_paket='$harga_paket', deskripsi='$deskripsi' WHERE id_paket='$id' ");

if ($query == TRUE){
       header('Location: halaman_paket.php');
}else{
    echo "Gagal mengubah data".mysqli_error($koneksi);
}
<?php 

// contoh hungkul daks, sesuaikeun jeung website maraneh

include "../../db/functions.php";
$id =$_GET ['id'];


$query = mysqli_query($koneksi, "DELETE FROM paket WHERE id_paket ='$id'");

if ($query == TRUE){
    header ('location: halaman_paket.php');
}else{
    echo "Gagal Menghapus kenangan ini, karena kenangan nya susah dilupain".mysqli_error($koneksi);
}
?>
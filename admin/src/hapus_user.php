<?php 


include "../../db/koneksi.php";
$id =$_GET ['id'];


$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user ='$id'");

if ($query == TRUE){
    header ('location: ../main_admin.php');
}else{
    echo "Gagal Menghapus kenangan ini, karena kenangan nya susah dilupain".mysqli_error($koneksi);
}
?>
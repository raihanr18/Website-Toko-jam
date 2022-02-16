<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
   
<?php 
include "../../db/functions.php";
$query = mysqli_query($koneksi, "SELECT * FROM paket");
?>

<table class ="table" >
<thead class ="thead-dark">
<tr>
<th scope="col"> Id Paket </th>
<th scope="col"> Nama Paket </th>
<th scope="col"> Harga Paket </th>
<th scope="col"> Deskripsi </th>
<th scope="col"> Action </th>
</tr>
</thead>
<tbody>
    <?php while ($hasil = mysqli_fetch_assoc ($query)): ?>
    <tr>
    <td><?php echo $hasil ['id_paket']; ?></td>
    <td><?php echo $hasil ['nama_paket']; ?></td>
    <td><?php echo $hasil ['harga_paket']; ?></td>
    <td><?php echo $hasil ['deskripsi']; ?></td>
    <td>
    <a href="form_ubah_paket.php?id=<?php echo $hasil['id_paket']; ?>" class="btn btn-secondary"> Edit</a>
    <a href="proses_hapus_paket.php?id=<?php echo $hasil['id_paket']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus kenangan ini???')"> Hapus</a>
    </td>
    </tr>
<?php endwhile; ?>
<tbody>
</table>
<center>
<a href="form_tambah_paket.php" class="btn btn-primary"> Tambah Paket </a>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
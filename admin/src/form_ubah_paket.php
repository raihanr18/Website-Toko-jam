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
 
 $id    = $_GET['id'];
 $query = mysqli_query ($koneksi, "SELECT * FROM paket WHERE id_paket='$id'");
 $hasil = mysqli_fetch_array($query, MYSQLI_ASSOC);
 ?>

<center>
<form action="proses_ubah_paket.php" method="POST" style="margin-top: 3cm;">
  <div class="form-group">
    <label style="margin-right: 8.5cm;">Id Paket</label>
    <input name ="id_paket" style="width: 10cm;" type="text" class="form-control" placeholder="Enter email" value="<?php echo $hasil['id_paket']; ?>"Readonly>
  </div>
  <div class="form-group">
    <label style="margin-right: 7.5cm;">Nama Paket</label>
    <input name="nama_paket" style="width: 10cm;" type="text" class="form-control" placeholder="Enter email" value="<?php echo $hasil['nama_paket']; ?>" required>
  </div>
  <div class="form-group">
    <label style="margin-right: 7.5cm;">Harga Paket</label>
    <input name="harga_paket" style="width: 10cm;" type="text" class="form-control" placeholder="Enter email" value="<?php echo $hasil['harga_paket']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="margin-right: 8cm;">Deskripsi</label>
    <textarea name="deskripsi" style="width: 10cm;" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $hasil['deskripsi']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
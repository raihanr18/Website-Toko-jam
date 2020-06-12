<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font -->
    <link rel="stylesheet" href="main_style.css">

    <title>L'W Watch</title>
  </head>
  <body>

      <!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="landing_page.php" style="margin-left: 15.5cm;">
      <img src="https://image.flaticon.com/icons/svg/2286/2286067.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Let's Watch
    </a>
</nav>

  <?php
  session_start();
  require "functions.php";

  if(!$_SESSION['in']){
    header("location: landing_page.php");
    exit;
  }


  if (isset($_POST["upload"])){

      if ( simpan($_POST) == 0 ) {
      echo "
      <center>
      <div style='margin-top: 2cm;' class='alert alert-success' role='alert'>
          Data Berhasil Ditambahkan
          Silahkan cek <a href='index_new.php'> Disini</a>
      </div>
      </center>";
      exit;
    } else{
      echo "
      <center>
      <div style='margin-top: 2cm;' class='alert alert-danger' role='alert'>
          Data gagal dibuat,
          Gagal menambahkan data<br/>
      </div>
      </center>".mysqli_error($koneksi);
    }
  
  }

  ?>

  <!-- Default form contact -->

<form class="text-center border border-light p-5" action="" enctype="multipart/form-data" method="POST">
<center>
<p class="h4 mb-4">Form Tambah Produk Admin</p>

<!-- Name -->

<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nama Jam" name="nama_jam" style="width: 8cm;" required>

<!-- Harga -->
<input type="text" class="form-control mb-4" placeholder="Harga" name="harga" style="width: 8cm;" required>

<!-- Kategori -->
<select class="browser-default custom-select mb-4" style="width: 8cm;" name="kategori" required>
    <option value="" disabled>Pilih Kategor</option>
    <option value="1" selected>Kategori</option>
    <option value="Jam Pria">Jam Pria</option>
    <option value="Jam Wanita">Jam Wanita</option>
</select>

<!-- Message -->
<div class="form-group">
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Deskripsi" name="deskripsi" style="width: 8cm;" required></textarea>
</div>

<!-- upload gambar -->
<small class="form-text text-muted"></small>
<div class="input-group" style="width: 8cm; margin-bottom: 1cm;" required>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="file">
    <label class="custom-file-label" >Pilih foto</label>
  </div>
</div>
<!-- Send button -->
<button class="btn btn-info btn-dark" type="submit" name="upload" style="width: 8cm;" onclick="return confirm('Apakah anda yakin untuk menambahkan data ?')">Simpan</button>
</form>
<br>
<br>
<a href="main_admin.php" class="btn btn-info btn-danger"  style="width: 8cm;">Kembali</a>
</center>
<!-- Default form contact -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
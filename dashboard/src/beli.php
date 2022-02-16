<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main_style.css">

    <title>let's Watch</title>
  </head>
  <body>
  
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="../../img/putih.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Hai , <?php echo $_SESSION ['username'];?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">      
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>


<?php 

require "../../db/functions.php";

$produk = $_SESSION['produk'];

$x  = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$produk' ");

$result = mysqli_fetch_assoc($x);
?>

<!-- Tambah ke db -->


<?php 

if(isset($_POST['upload'])){
$user         = $_SESSION['id'];
$produk       = $_SESSION['produk'];
$metode_bayar = $_POST['metode'];
$jumlah       = $_POST['jumlah'];

$query = mysqli_query($koneksi, "INSERT INTO baru VALUES ('', '$user', '$produk', 'diproses', '$metode_bayar', '$jumlah')");

if ($query == TRUE){
  header("location: konfirmasi.php");
}
}

?>

<form class="text-center border border-light p-5" action="" enctype="multipart/form-data" method="POST">
<center>
<img src="" alt="">

<!-- Name -->

<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nama Jam" value="<?= $result['nama_produk'] ?>" style="width: 8cm;" readonly>

<!-- Harga -->
<input type="text" class="form-control mb-4" placeholder="Harga" value="<?= $result['harga'] ?>" style="width: 8cm;" readonly>

<!-- Kategori -->
<select class="browser-default custom-select mb-4" style="width: 8cm;" name="kategori" required>
    <option value="" disabled>Pilih Kurir</option>
    <option value="1" selected>Kurir</option>
    <option value="j&t">J&t</option>
    <option value="jne">Jne</option>
    <option value="pos">Pos Indonesia</option>
    <option value="tiki">Tiki</option>
</select>

<!-- jumlah pesanan -->
<select class="browser-default custom-select mb-4" style="width: 8cm;" name="jumlah" required>
    <option value="" disabled>Jumlah Beli</option>
    <option value="1" selected>Jumlah</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<small class="form-text text-muted">Maksimal barang yang dibeli 5</small>
<!-- Metode pembayaran -->
<br>
<div class="form-check form-check-inline" name="metode">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="bri" name="bri">
  <label class="form-check-label" for="inlineRadio1">BRI</label>
</div> 
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="bni" name="bni">
  <label class="form-check-label" for="inlineRadio2">BNI</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="alfamart/alfamidi" name="alfa">
  <label class="form-check-label" for="inlineRadio3">Alafamart/Alfamidi</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="gopay" name="gopay">
  <label class="form-check-label" for="inlineRadio4">Go Pay</label>
</div>
<br>
<br>
<!-- Alamat -->
<div class="form-group">
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Alamat" name="deskripsi" style="width: 8cm;" required></textarea>
</div>
<!-- Send button -->
<button class="btn btn-info btn-dark" type="submit" name="upload" style="width: 8cm;">Beli</button>
</form>
</center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
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
    <img src="https://image.flaticon.com/icons/svg/2286/2286067.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Hai , <?php echo $_SESSION ['username'];?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">      
      <li class="nav-item">
        <a class="nav-link" href="index_new.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h2 style="margin-top: 1cm;">Halaman chekout</h2>
</center>
<?php

$i = 1;

require "../../db/functions.php";

$code  = mysqli_query($koneksi, "SELECT * FROM  baru");
$r = mysqli_fetch_assoc($code);

$array = array();
$arr[] = $r['id_produk'];
$y = implode(" ", $arr);

$code2   = mysqli_query($koneksi, "SELECT nama_produk FROM produk WHERE id_produk = '$y'");

// array to string
$z = mysqli_fetch_assoc($code2);
$ubah = array();
$change[] = $z['nama_produk'];
$a = implode(" ", $change);
?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id beli</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $r['id_beli']  ?></th>
      <td><?= $a ?></td>
      <td><a href="beli.php" class="btn btn-secondary">Beli</a></td>
    </tr>
    <?php 
    if ($a > 1){
      
    }
    ?>
  </tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
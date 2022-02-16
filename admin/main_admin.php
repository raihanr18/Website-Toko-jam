<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="main_style.css">
    <title>L'W</title>

    <style>
    .line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
  }
    </style>
  </head>
  <body>
  <?php 
  session_start(); 
  if(!$_SESSION['role'] == "admin"){
    header("location: landing_page.php");
    exit;
  }
  ?>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://image.flaticon.com/icons/svg/2286/2286067.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Hai admin!, <?php echo $_SESSION ['username'];?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">log out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index_new.php">Dashboard penjualan</a>
      </li>
    </ul>
  </div>
</nav>

<!-- konten -->
<!-- cek jumlah produk -->
<?php 
require "../db/functions.php";
$query = "SELECT * FROM produk";
$cek = mysqli_query($koneksi, $query);
$result = mysqli_num_rows($cek);
?>
<div class="container-fluid" style="margin-top: 1cm;">
  <div class="row">
    <div class="col-sm">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">L'W</div>
        <div class="card-body">
          <h5 class="card-title">Jumlah Produk</h5>
          <p class="card-text"><?php echo $result; ?></p>
          <button class="btn btn-secondary" data-toggle="collapse" data-target="#showProduk" aria-expanded="false" aria-controls="showProduk">Cek</button>
        </div>
      </div>
    </div>
<!-- jumlah order -->
<?php 
$query = "SELECT * FROM baru";
$cek = mysqli_query($koneksi, $query);
$result = mysqli_num_rows($cek);
?>

    <div class="col-sm">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">L'W</div>
        <div class="card-body">
          <h5 class="card-title">Jumlah Order saat ini</h5>
          <p class="card-text"><?php echo $result; ?></p>
          <button class="btn btn-secondary" id="showOrder">Cek</button>
        </div>
      </div>
    </div>
      <!-- jumlah user -->

      <?php 
      $query = "SELECT * FROM user";
      $cek = mysqli_query($koneksi, $query);
      $result = mysqli_num_rows($cek);
      ?>
    <div class="col-sm">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">L'W</div>
        <div class="card-body">
          <h5 class="card-title">Jumlah Pengguna</h5>
          <p class="card-text"><?php echo $result; ?></p>
          <button class="btn btn-secondary" data-toggle="collapse" data-target="#showUser" aria-expanded="false" aria-controls="showUser" >Cek</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="line"></div>
<!--  -->
<!-- ISI KONTEN WOYYYYYYY -->
<!--  -->
<div class="collapse" id="showUser">
<?php 
$query = mysqli_query($koneksi, "SELECT * FROM user");
?>
      <div class="card w-60" style="border: 0px;">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">id_user</th>
            <th scope="col">Username</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
        <?php while ($result = mysqli_fetch_assoc ($query)):?>
          <tr>
            <th scope="row"><?php echo $result['id_user'];?></th>
            <td><?php echo $result['username'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['role'];?></td>
          </tr>
        </tbody>
        <?php endwhile; ?>
      </table>
			</div>
</div>

<div class="collapse" id="showProduk">
<?php 
$query = mysqli_query($koneksi, "SELECT * FROM produk");
?>
      <div class="card w-60" style="border: 0px;">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">id_produk</th>
            <th scope="col">Nama produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
          </tr>
        </thead>
        <tbody>
        <?php while ($result = mysqli_fetch_assoc ($query)):?>
          <tr>
            <th scope="row"><?php echo $result['id_produk'];?></th>
            <td><?php echo $result['nama_produk'];?></td>
            <td><?php echo $result['harga'];?></td>
            <td><?php echo $result['kategori'];?></td>
            <td>
              <a href="src/form_ubah_paket.php?id=<?php echo $result['id_produk']; ?>" class="btn btn-secondary"> Edit</a>
              <a href="src/proses_hapus_paket.php?id=<?php echo $result['id_produk']; ?>" class="btn btn-danger" onclick="return confirm('untuk menghapus data ini?')"> Hapus</a>
            </td>
          </tr>
        </tbody>
      <?php endwhile; ?>
      </table>
			</div>
      <a href="control_admin.php" class="btn btn-dark">Tambah data</a>
</div>
<!--  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
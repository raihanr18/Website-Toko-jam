<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main_style.css">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php 
  
  session_start();
  require "../../db/functions.php";

  if(isset($_POST['oke'])){

    $kode = $_POST['kode'];

    $query = mysqli_query($koneksi, "SELECT * FROM diskon WHERE voucher = '$kode'");

    if(mysqli_num_rows($query) == 1){
      // ambil jumlah diskon berdasarkan voucher
      $result = mysqli_fetch_assoc($query);
      $array  = $result['jml_diskon'];
      $hasil  = implode(" ", (array)$array);

      $hargaAkhir =($hasil/100) * $totalHarga;

      // masukan hasil transaksi ke database
      $user   = $_SESSION['id'];
      $produk = $_SESSION['produk'];

      $code = mysqli_query($koneksi, "INSERT INTO pembelian VALUES('', '$user', '$produk', '$hargaAkhir')");
      if($code == TRUE ){
        $_SESSION['transaksi'] = "berhasil";
        header("location:../index.php");
        if($code == TRUE ){
          $_SESSION['transaksi'] = "berhasil";
          header("location:../index.php");
  
      }

    }
  }else{
    echo "<script>
    alert('Kode tidak valid/tidak ada')
    </script>";
  }
  }
  ?>

    <center>
    
      <h3 style="margin-top:2cm;">Masukan kode diskon</h3>
      <form action="" method="post">
      <br>
        <input type="text" name="kode" placeholder="masukan kode diskon">
        <br>
        <br>
        <button type="submit" class="btn btn-warning" name="oke">Oke</button>
      </form>

    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
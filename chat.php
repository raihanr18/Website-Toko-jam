<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="main_style.css">

    <title>- +</title>
  </head>
  <body>
  <?php session_start(); ?>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="putih.png" width="30" height="30" class="d-inline-block align-top" alt="">
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

<?php 

require "functions.php";

$id     = $_SESSION['id'];
$query  = mysqli_query($koneksi, "SELECT username FROM user WHERE id_user = '$id'");
$result =mysqli_fetch_assoc($query);

if(isset($_POST['kirim'])){

	$chat  = $_POST['chat'];	

	$str = implode(" ", $result);
	$isi = mysqli_query($koneksi, "INSERT INTO contact VALUES ('', '', $chat, 'user')");

	
	if ($isi == TRUE ){
		echo "
		<script>
		alert('Pesan telah terkirim')
		</script>
		";
	}
}

?>

<center>
<form action="" method="POST" style="margin-top: 1cm;">
  <div class="form-group">
    <label for="exampleFormControlInput1">username</label>
	<br>
    <input type="text" value=<?php echo $result['username'] ?> >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Masukan pesan anda</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" style="width: 12cm;" name="chat"></textarea>
  </div>
  <button class="btn btn-dark" name="kirim">Kirim</button>
</form>
<small class="form-text text-muted">Balasan akan muncul dihalaman ini setelah dibalas oleh pihak kami</small>
</center>

<center>
<div class="" style="margin-top: 5cm;">
	<h4>ALSO CONTACT US ON SOCIAL MEDIA</h4>
	<a href="#">Facebook</a>
	<br>
	<a href="#">Twitter</a>
	<br>
	<a href="#">Instagram</a>
</div>
</center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
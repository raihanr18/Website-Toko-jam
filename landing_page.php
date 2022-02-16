<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
    <title>- +</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <!-- font -->
  <link rel="stylesheet" href="css/main_style.css">

    <style type="text/css">      
      .ourteam_wrapper .team{
        display: flex;
        margin-left: 4cm;
        justify-content: space-between;
      }

      .ourteam_wrapper .team-1.team{
        margin-bottom: 25px;
      }

      .ourteam_wrapper .team_member{
        width: 30%;
        height: auto;
        cursor: pointer;
        overflow: hidden;
      }

      .ourteam_wrapper .team_member img{
        width: 70%;
        display: block;
        height: auto;
        transition: all 0.8s ease;
      }

      .ourteam_wrapper .team_member:hover img{
        transform: scale(1.2);
      }
    </style>
  </head>
  <body>
   <!-- Navbar --> 
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="putih.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Kurang lebih
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auth/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auth/register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>
<?php
session_start();
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "logout"){
      echo "<script>
                alert ('Anda telah berhasil logout')
             </script>";
    }
}
?>
<!-- jumbotron content -->
<div class="jumbotron" style="">
  <h1 class="display-4" style="font-family: Arial">Hello Shopeople</h1>
  <p class="lead">Kami menyediakan tempat untuk berbelanja sesuatu dengan mudah. 
  Aman dengan layanan kami dan kepercayaan Anda</p>
  <img src="https://image.flaticon.com/icons/svg/164/164426.svg" width="200cm">
</div>


<!-- Konten -->

<center>
<div style="margin-top: 2cm; margin-bottom: 2cm;">
<h1 style="font-family: times new roman;">Kurang Lebih</h1>
<p>"Misi kami untuk membangun sebuah pergerakan, sebuah komunitas untuk Ladies & Gentlemen yang ingin mengejar hidup lebih epic"</p>
<img src="https://image.flaticon.com/icons/png/512/562/562045.png" width="450cm">
<hr >
</center>
</div>
<!-- konten card -->
<div class="ourteam">
        <center style="margin-bottom: 1cm;"><h1 class="title">Our Product</h1></center>
        <div class="ourteam_wrapper">
            <div class="team-1 team">
                <div class="team_member">
                    <img src="https://images.unsplash.com/photo-1521485950395-bcfb8fc9bd06?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Team_Image">
                </div>
                <div class="team_member">
                    <img src="https://cache.mrporter.com/variants/images/3633577413589761/ou/w2000_q80.jpg" alt="Team_Image">
                </div>
                <div class="team_member">
                    <img src="https://cache.mrporter.com/variants/images/3983529958211764/ou/w2000_q80.jpg" alt="Team_Image">
                </div>
            </div>
            <div class="team-2 team">
                <div class="team_member">
                    <img src="https://www.brandfield.com/media/catalog/product/cache/image/9df78eab33525d08d6e5fb8d27136e95/8/4/843466104789.jpg" alt="Team_Image">
                </div>
                <div class="team_member">
                    <img src="https://www.brandfield.com/media/catalog/product/cache/image/9df78eab33525d08d6e5fb8d27136e95/8/4/843466105281.jpg" alt="Team_Image">
                </div>
                <div class="team_member">
                    <img src="https://cf.shopee.com.my/file/967f8c9fee8580d13e3b07d7e19b34d1_tn" alt="Team_Image">
                </div>
            </div>
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <!-- footer -->
 <!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background-color: black;">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold" style="color: whitesmoke;">Let's Watch Tim</h5>
      <p>Raihan Ramadhan</p>
      <p>Fachri Dwi Prasetya</p>
      <p>Nanda Munandar</p>
      <p>Azzikra Putu s</p>
      <p>Nisa Nuraida</p>
      <p>Erisa Amelia</p>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-6 mb-md-0 mb-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold" style="color: whitesmoke;">Our Social Media</h5>
      <a href="#">Facebook</a>
      <br>
      <a href="#">Twitter</a>
      <br>
      <a href="#">Instagram</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="background-color: grey;">© 2018 Copyright:
  <p style="color: whitesmoke;">Let's Watch</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    <!-- /.footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>
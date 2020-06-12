<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>- +</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <!-- font -->
    <link rel="stylesheet" href="main_style.css">

    <style type="text/css">

   /*
    DEMO STYLE
*/

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

i,
span {
    display: inline-block;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: black;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header h3,
#sidebar.active .CTAs {
    display: none;
}

#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
}

#sidebar.active ul li a i {
    margin-right: 0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active .dropdown-toggle::after {
    top: auto;
    bottom: 10px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: black;
}

#sidebar .sidebar-header strong {
    display: none;
    font-size: 1.8em;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid grey;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: grey;
    background: #fff;
}

#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background:  grey;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: grey;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.article,
a.article:hover {
    background: grey !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important;
    }
    .dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }
    #sidebar .sidebar-header h3,
    #sidebar .CTAs {
        display: none;
    }
    #sidebar .sidebar-header strong {
        display: block;
    }
    #sidebar ul li a {
        padding: 20px 10px;
    }
    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right: 0;
        display: block;
    }
    #sidebar ul ul a {
        padding: 10px !important;
    }
    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}


/*Image Animation*/
.produk {
    display: flex;
}
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 55%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: whitesmoke;
  overflow: hidden;
  width: 55%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 27%;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Kurang Lebih</h3>
                <img src="putih.png" width="30" height="30">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Jam Pria</a>
                        </li>
                        <li>
                            <a href="#">Jam Wanita</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="list_barang.php">
                        <i class="fas fa-paper-plane"></i>
                        Barang diproses
                    </a>
                </li>
                <li>
                    <a href="chat.php">
                        <i class=""></i>
                        Contact Us
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="article" onclick="return confirm('Apakah anda yakin untuk log out ?')">Log out</a>
                </li>
            </ul>
            <?php 
                if($_SESSION['role'] == "admin"){
                    echo "
                <ul class='list-unstyled CTAs'>
                        <li>
                            <a href='main_admin.php' class = 'btn btn-light' >Kembali ke halaman admin</a>
                        </li>
                </ul>
                    ";
                }
            ?>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    
                </div>
            </nav>

            <h2>Selamat datang, <?php echo $_SESSION['username'];?></h2>
            <p>Produk Kami</p>
    
    <?php 

    require "functions.php";
    $query = mysqli_query($koneksi, "SELECT * FROM produk");

    ?>
    <div class="produk">
        <?php while ($result = mysqli_fetch_assoc ($query)) :?>
                    <div class="container">
                    <img src="img/<?php echo $result['foto'];?>"  class="image">
                    <div class="overlay">
                        <div class="text"><a href="preview.php?id=<?php echo $result['id_produk']; ?>">Quick preview</a></div>
                    </div>
                    <h5><?php echo $result['nama_produk'];?></h5>
                    <p>Rp. <?php echo $result ['harga'];?></p>
                    </div>
        <?php endwhile;?>
        </div>
            <h2>Lorem Ipsum Dolor</h2>
            
            <div class="line"></div>

            <h2>Testimonials</h2>
            <p>Kami sangat peduli dengan kualitas dari produk-produk yang kami jual, dan kepuasan konsumen adalah priotitas kami</p>

            <div class="line"></div>

            <div class="card-columns">
  <div class="card">
    <img src="img/reza-rahadian.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">"Jam nya berkualitas, selalu saya pakai disetiap kegiatan harian saya"</p>
    </div>
    <footer class="blockquote-footer">
        <small class="text-muted" style="font-size: 14px;">
          Reza Rahadian<cite title="Source Title">- Aktor</cite>
        </small>
      </footer>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>"Saat ini saya mempunyai 8 jam dari L'W Watch, favorit saya yang matte black !!"</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Raihan Ramadhan <cite title="Source Title">- Student</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="img/iqbal.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">"Saya kira dengan harga yang murah bahannya juga murahan, tetapi setelah saya beli ini elegant sekali sih"</p>
      <p class="card-text"><small class="text-muted">Iqbal Ramadhan - Aktor</small></p>
    </div>
  </div>
  <div class="card bg-dark text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>"Bahannya nyaman, cocok untuk rakyat indonesia"</p>
      <footer class="blockquote-footer text-white">
        <small>
          Joko Widodo <cite title="Source Title">- Presiden RI</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <p class="card-text">"Murah tapi gak murahan !!"</p>
      <p class="card-text"><small class="text-muted">Nanda Munandar - Student</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/jam.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>"Dipakai formal atau non-formal cocok"</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Fachri Dwi Prasetya <cite title="Source Title">- Student</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="card-text">"Jam lokal terbaiklah saat ini"</p>
      <p class="card-text"><small class="text-muted">Azzikra Putu S - Student</small></p>
    </div>
  </div>
</div>
<div class="line"></div>
<h4>How we made a good watch</h4>
<br>
<video class="video-fluid z-depth-1" autoplay loop controls muted style="width: 100%;
  height: auto;">
  <source src="vid/jam.mp4" type="video/mp4" />
</video>
        </div>
    </div>

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
      <a href="#" style="color: blue;">Facebook</a>
      <br>
      <a href="#" style="color: blue;">Twitter</a>
      <br>
      <a href="#" style="color: blue;">Instagram</a>

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
<h1>MASIH DALAM TAHAP PENGEMBANGAN</h1>

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    
</body>

</html>
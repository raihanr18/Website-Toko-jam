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

    include "koneksi.php";

    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

    if ( $query == TRUE ) {
        echo "
        <center>
        <div style='margin-top: 7cm;' class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>Akun berhasil dibuat</h4>
            <p>Silahkan login disini <a href='login.php'> Disini</a></p>
        </div>
        </center>";
    } else {
        echo "
        <center>
        <div style='margin-top: 7cm;' class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>Akun berhasil dibuat</h4>
            <p>Gagal menambahkan data<br/>.mysqli_error($koneksi)</p>
        </div>
        </center>";
    }
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
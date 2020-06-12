<!-- cek user -->
<?php 
session_start();
require "functions.php";

if (isset($_POST["login"])){

  $username = $_POST["username"];
  $pass     = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");
  if (mysqli_num_rows($result) === 1){
   
    // cek password
    $cek = mysqli_fetch_assoc($result);
    if (password_verify($pass, $cek["pass"]) ){
      $_SESSION['username'] = $username;
      $_SESSION['status']   = "login";
      $_SESSION['in']       = true;
      $_SESSION['role']     = $cek['role'];
      $_SESSION['id']       = $cek['id_user'];

      if ($cek['role'] == "admin"){
        header("location: main_admin.php");
      exit;

      }else if($cek['role'] == "user"){
          header("location: index_new.php");
          exit;
        }

    } else {
      echo "<center>
      <div class='alert alert-danger' role='alert'>
      username/password salah!
    </div>
    </center>";
    }

  }

}

?>
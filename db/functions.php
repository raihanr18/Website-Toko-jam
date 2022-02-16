<?php 

// $nama_host      ='sql209.epizy.com';
// $username       ='epiz_24787953';
// $password       ='ratlex1';
// $nama_db        ='epiz_24787953_kurl';

$nama_host      ='localhost';
$username       ='root';
$password       ='';
$nama_db        ='letsb';

$koneksi =mysqli_connect($nama_host, $username, $password, $nama_db);

function registrasi($data) {
    global $koneksi;

    $username = $data["username"];
    $pass     = $data["password"];
    $email    = $data["email"];
    
// cek user
$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username' ");
if(is_numeric($username)){
    echo "<script>
    alert('username harus huruf tidak boleh angka')
    </script>";
    return false;
  } else if (mysqli_fetch_assoc($result)){
    echo "
    <script>
        alert('username sudah terdaftar!')
    </script>
    ";

    return false;
}  if (strlen($pass) <= 6) {
    echo "
    <script>
        alert('password harus memiliki minimal 6 karakter')
    </script>
    ";
    return false;
}

$pass = password_hash($pass, PASSWORD_DEFAULT);

mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$email', '$pass', 'user')");
return mysqli_affected_rows($koneksi);

}

function checkout($data){
// for some stuf of chekout

}

function simpan($data){

    global $koneksi;
    // simpan data
    $nama_produk  = $data['nama_jam'];
    $harga        = $data['harga'];
    $deskripsi    = $data['deskripsi'];
    $kategori     = $data['kategori'];
    // simpan gambar
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'img/'.$nama);
            $query = mysqli_query($koneksi, "INSERT INTO produk VALUES('', '$nama_produk', '$harga', '$deskripsi', '$nama', '$kategori')");
            if($query){
                echo "<script>
                alert('Data Berhasil disimpan dan ditambahkan)
                </script>";
            }else{
                echo 'GAGAL MENGUPLOAD DATA!';
            }
        }else{
            echo 'UKURAN GAMBAR TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE GAMBAR YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
?>
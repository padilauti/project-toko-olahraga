<?php
// menyimpan inputan dari halaman login
$username = $_POST['username'];
$pass     = $_POST['password'];

// memanggil konfigurasi database
include 'koneksi.php';
// perintah SQL untuk chek data ke database
$sql   = "select * from admin where username='$username'";
$admin = mysqli_query($konek, $sql);

// echo mysqli_num_rows($admin);
// exit;

// menghitung jumlah data yang ketemu
if(mysqli_num_rows($admin)>0) {
	// kalau berhasil maka di alihkan ke halaman index
  session_start();
  $adminData = mysqli_fetch_array($admin);
  if(password_verify($pass, $adminData['password'])) {
    // password benar
    $_SESSION['status_login']="sudah_login";
    $_SESSION['nama_admin']  = $adminData['username'];
    header("location:index.php");
  }else{
      header("location:login.php");
  }
  
}else{
	// kalau gagal maka balik ke login 
	header("location:login.php");
}
?>
<?php
// menyimpan hasil inputan ke dalam vaiabel
$options 	= array("cost"=>4);
$pass		= password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
$username	= $_POST['username'];


include 'koneksi.php';
// sintaks sql untuk insert data
$sql = "insert into admin set username='$username',password='$pass'";
// perintah untuk mengeksekusi query di atas
$insert = mysqli_query($konek, $sql);
/*
if($insert) {
	echo "insert data berhasil";
}  else {
	echo "insert data gagal";
}
*/
header("location:admin.php");
?>
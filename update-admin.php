<?php
// menyimpan hasil inputan ke dalam vaiabel
$username	= $_POST['username'];
$options 	= array("cost"=>4);
$pass		= password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
$id_admin 	= $_POST['id_admin'];

include 'koneksi.php';
// sintaks sql untuk insert data

if(empty($pass)) {
	$sql = "update admin set username='$username' where id_admin='$id_admin'";
}else{
	$sql = "update admin set username='$username',password='$pass' where id_admin='$id_admin'";
}


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
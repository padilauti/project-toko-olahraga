<?php
// menyimpan hasil inputan ke dalam vaiabel
$id 			= $_POST['id'];
$nama_barang 	= $_POST['nama_barang'];
$brand 			= $_POST['brand'];
$kategori	    = $_POST['kategori'];
$deskripsi		= $_POST['deskripsi'];
$harga			= $_POST['harga'];


include 'koneksi.php';
// sintaks sql untuk insert data
$sql = "insert into barang SET id_barang='$id',nama_barang='$nama_barang',harga='$harga',
	kategori_id='$kategori',brand_id='$brand',deskripsi='$deskripsi'";
// perintah untuk mengeksekusi query di atas
$insert = mysqli_query($konek, $sql);
/*
if($insert) {
	echo "insert data berhasil";
}  else {
	echo "insert data gagal";
}
*/
header("location:index.php");
?>
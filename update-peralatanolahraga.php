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
$sql = "update barang SET nama_barang='$nama_barang',harga='$harga',
	kategori_id='$kategori',brand_id='$brand',deskripsi='$deskripsi'
	where id_barang='$id'";
// perintah untuk mengeksekusi query di atas
$update = mysqli_query($konek, $sql);
/*
if($insert) {
	echo "insert data berhasil";
}  else {
	echo "insert data gagal";
}
*/
header("location:index.php");
?>
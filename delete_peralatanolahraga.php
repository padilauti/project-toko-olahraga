<?php

if(isset($_GET['id_barang'])){
	include 'koneksi.php';
	$delete = mysqli_query($konek, "delete from barang where id_barang='".$_GET['id_barang']."'");
	header("location:index.php");
}

?>

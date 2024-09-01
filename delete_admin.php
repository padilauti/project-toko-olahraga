<?php

if(isset($_GET['id'])){
	include 'koneksi.php';
	$delete = mysqli_query($konek, "delete from admin where id_admin='".$_GET['id']."'");
	header("location:admin.php");
}
?>
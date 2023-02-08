<?php 
$id_pengguna=$_GET['id_pengguna'];
	$nama_pengguna=$_GET['nama_pengguna'];
	$sandi_pengguna=$_GET['sandi_Pengguna'];
include "koneksi.php";
mysqli_query($konek,'update FROM tbl_pengguna WHERE nama_pengguna="'.$id_pengguna.'"');
header("location:edit1.php");
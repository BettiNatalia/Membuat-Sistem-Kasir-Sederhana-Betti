<?php 
$id_pengguna=$_GET['hapus'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tbl_pengguna WHERE nama_pengguna="'.$id_pengguna.'"');
header("location:hapus1.php");
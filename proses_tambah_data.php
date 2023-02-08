<?php
include "koneksi.php";
$id=$_POST['id_pengguna'];
$pengguna=$_POST["nama_pengguna"];
$password=$_POST["sandi_pengguna"];
$kueri=mysqli_query($konek,"INSERT INTO tbl_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$pengguna."','".$password."')");
if($kueri){
    header("location:lihat_pengguna.php");
}else{
    header("location:tambah_pengguna.php");  
}
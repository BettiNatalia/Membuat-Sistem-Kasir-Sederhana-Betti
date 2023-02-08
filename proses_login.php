<?php
$pengguna=$_POST["nama_pengguna"];
$password=$_POST["sandi_pengguna"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tbl_pengguna WHERE nama_pengguna="'.$pengguna.'" AND sandi_pengguna="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	header("location:beranda.html");

}else{
	header("location:login.html");	
}

<?php 
include "koneksi.php";
$id=$_POST['bety_natalia_nahampun'];
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
if(empty($nama)&&empty($password)){
	echo <script language='javascript'>alert('Maaf Tidak Ada Perubahan Data')
		window.location.href='lihat_pengguna.php'
	</script>;
		
}else if(empty($nama)){
	mysqli_query($konek,"UPDATE login1 SET katasandi='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}else if(empty($password)){
	mysqli_query($konek,"UPDATE login1 SET nama_pengguna='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}else{
	mysqli_query($konek,"UPDATE login1 SET nama='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}
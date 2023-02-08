<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body table width="50%" bgcolor='tan'>
		<tr>
			
				<center><h1><font color="sandy brown">SELAMAT DATANG DISISTEM KASIR BETTI</h1></center></font>
	</tr>
	<tr>	
	<table  width="100%" border="1">	
			<td width="50%">
			<b><u>MENU KIRI</u></b><br>
			<ul>
					<li>
					<a href="lihat_pengguna.php">
						LIHAT PENGGUNA
					</a>
				</li>
				</ul><ul>
					<li>
					<a href="tambah_pengguna.php">
						TAMBAH PENGGUNA
					</a>
				</li>
				</ul>
				<ul>
					<a href="beranda.html">
						HAPUS PENGGUNA
					</a>
				</ul>
				<ul>
					<a href="beranda.html">
						EDIT PENGGUNA
					</a>
				</ul>
				<ul>
				<li>
					<a href="beranda.html">
						<b>Beranda Kasir</b>
					</a>
				</li>
				</ul>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tbl_pengguna');
				?>
			<td>
				<h3><center><u>LIST PENGGUNA</u></center></h3>
			<table border="1" width="100%">
				<tr>
					<td><ul>No</ul></td>
					<td><ul>Nama Pengguna</ul></td>
					<td><ul>Sandi Pengguna<ul></td>
				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['id_pengguna'];
					echo"</td><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
				}
				?>
			</tr>
			</table>
			</td>
			</center>
		</tr>
	</table>
	</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body bgcolor="tan">
    <table  width="100%" border="1">
        <tr>
            <center><h1><font color="sandy brown">SELAMAT DATANG DISISTEM KASIR BETTI</h1></center></font>
        </tr>
    <form action="proses_tambah_data.php" method="post">
        <tr>
            <td width="25%">
                <h3><center>MENU KIRI</center></h3>
                    <ul>
                        <h4>
                            <a href="lihat_pengguna.php">Lihat Pengguna</a>
                        </h4>
                        <h4>
                            <a href="tambah_pengguna.php">Tambah Pengguna</a>
                        </h4>
                        <h4>
                            <a href="hapus1.php">Hapus Pengguna</a>
                        </h4>
                        <h4>
                            <a href="edit1.php">Edit Pengguna</a>
                        </h4>
                    </ul>
                    <ul>
					<a href="beranda.html">
						<b>Beranda Kasir</b>
					</a>
				</ul>
            </td>
            <td>
	<h3><center>LIST PENGGUNA</center></h3>
            <table border="1" width="100%">
            </td>
            <td>ID Pengguna</td>
            <td>
                <input NAME="id_pengguna" type="TEXT" placeholder="id pengguna">
            </td>
        </tr>
        <tr>
            <td>Nama Pengguna</td>
            <td>
                <INPUT NAME="nama_pengguna" TYPE="TEXT" placeholder="nama ">
            </td>
        </tr>
        <tr>
            <td>Password Pengguna</td>
            <td>
                <INPUT NAME="sandi_pengguna" TYPE="PASSWORD" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
            <center>
                <INPUT  TYPE="submit" value="SUBMIT">
            </center>
            </td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>
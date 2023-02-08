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
            <b><u>FORM EDIT DATA</u></b><br>
            <?php 
                include "koneksi.php";
                $kueri=mysqli_query($konek,'SELECT * FROM tbl_pengguna');
                ?>
                <table width="50%" border="1">
                    
                    <tr>
                        <td>
                            <b>
                            Id Pengguna
                        </b>
                        </td> 
                        <td>
                            <b>
                            Nama Pengguna
                        </b>
                        </td>
                        <td>
                            <b>
                            Sandi Pengguna
                        </b>
                        </td>
                        <td>
                            <b>
                            Aksi
                            </b>
                        </td>
                    </tr>
                <?php
                while($row = mysqli_fetch_array($kueri)){
                    echo"<tr><td>";
                    echo $row['id_pengguna'];
                    echo"</td><td>";
                    echo $row['nama_pengguna'];
                    echo"</td><td>";
                    echo $row['sandi_pengguna'];
                    echo"</td>
                    <td>";
                    echo"
                        <a href='edit.php?edit=".$row['nama_pengguna']."      '>edit</a>
                    ";
                    
                }
            ?>
            </table>
</body>
</html>
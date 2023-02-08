<?php
/**
 * [$nomer_penduduk description]
 * VARIABEL INI BERASAL DARI INDEX.HTML
 * digunakan untuk menampung data nomer induk kependudukan
 * 18-01-2023 slamet
 * edited 20-01-2023 slamet
 * @var [type]
 */
$nomer_penduduk=$_POST["angkadulu"];
$nama_kamu=$_POST["nama_anda"];
$alamat=$_POST["katasandi_anda"];
echo "$nomer_penduduk $nama_kamu $alamat";
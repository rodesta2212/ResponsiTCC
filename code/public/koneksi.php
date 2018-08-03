<?php
$host = "192.168.100.24:7306";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "pass";	//password phpMyAdmin
$name = "crud_mahasiswa";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>

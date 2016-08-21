<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "belajar";
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

mysql_query("insert into berita(judul_berita,isi_berita) values('$_POST[judul]', '$_POST[isi]')");
?>

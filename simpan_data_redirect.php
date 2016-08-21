<?php
include"koneksi.php";//memanggil file koneksi.php
mysql_query("insert into berita(judul_berita,isi_berita) values('$_POST[judul]', '$_POST[isi]')");
header("location:tampil_data.php");//Setelah Proses Input akan mengarah ke tampil_data.php
?>

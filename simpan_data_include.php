<?php
include"koneksi.php";//memanggil file koneksi.php
mysql_query("insert into berita(judul_berita,isi_berita) values('$_POST[judul]', '$_POST[isi]')");
?>

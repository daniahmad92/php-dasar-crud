<?php
include"koneksi.php";
mysql_query("UPDATE berita SET judul_berita    = '$_POST[judul]', isi_berita     = '$_POST[isi]' WHERE id_berita    = '$_POST[id]'");
header("location:tampil_data_edit.php");//Setelah Proses Input akan mengarah ke tampil_data.php
?>

<?php
include"koneksi.php";
mysql_query("DELETE FROM berita WHERE id_berita    = '$_GET[id]'");
header("location:tampil_data_hapus.php");//Setelah Proses Input akan mengarah ke tampil_data.php
?>

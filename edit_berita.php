<?php
include"koneksi.php";//memanggil file koneksi.php
$edit  = mysql_query("select * from berita where id_berita='$_GET[id]'");
$r = mysql_fetch_array($edit);
echo"<h3>Form Edit Berita</h3>
<form method='POST' action='simpan_edit_data.php'>
<input type='hidden' name='id' value='$r[id_berita]'>
<table>
<tr><td>Judul Berita</td><td>: <input type='text' name='judul' value='$r[judul_berita]'></td></tr>
<tr><td>Isi Berita</td><td>: <input type='text' name='isi' value='$r[isi_berita]'></td></tr> 
<tr><td></td><td><input type='submit' value='Update'></td></tr>
</table>
</form>";
?>
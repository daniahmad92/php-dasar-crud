<?php
echo"<table>";
include"koneksi.php";//memanggil file koneksi.php
$tampil = mysql_query("SELECT * FROM berita ORDER BY id_berita");
while($r=mysql_fetch_array($tampil)){
echo"<tr><td>$r[judul_berita]</td>
	 <td>$r[isi_berita]</td></tr>";
}
echo"</table>";
?>


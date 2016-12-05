<?php 
 
include "koneksi.php"; 
 
$Nama= $_GET['Nama']; 

$query = "DELETE FROM `mitsubishi` WHERE `Nama`=$Nama"; 
$hasil = mysql_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="http://localhost/template/index.php?page=tabel";</script>';

?>
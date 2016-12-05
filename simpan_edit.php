<?php
include "koneksi.php";
$edit=mysql_query("select * from mitsubishi");

mysql_query("update mitsubishi set TahunProduksi='$_POST[Tahun]', TipeMobil='$_POST[Tipe]', HargaMobil='$_POST[Harga]', WarnaMobil='$_POST[Warna]'
	where Nama='$_POST[Nama]'");
?>
<script>
document.location='tampil.php'</script>
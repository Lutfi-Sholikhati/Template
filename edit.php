<?php
include "koneksi.php";

$edit = mysql_query("select * from mitsubishi where Nama='$_GET[Nama]' ");
$r=mysql_fetch_array($edit);

echo "<form action=simpan_edit.php method=POST>";
echo "<table align=center border=1>
<input type = hidden name=Nama value=$r[Nama]>
<tr>
<td>Tahun Produksi<td>
<td><input type=text name=TahunProduksi value=$r[Tahun]</td>
</tr>
<tr>
<td>Tipe Mobil<td>
<td><input type=text name=TipeMobil value=$r[Tipe]</td>
</tr>
<tr>
<td>harga Mobil<td>
<td><input type=text name=HargaMobil value=$r[Harga]</td>
</tr>
<tr>
<td>Warna Mobil<td>
<td><input type=text name=WarnaMobil value=$r[Warna]</td>
</tr>
<tr>
<td>&nbsp;<td>
<td><input type=submit value=Edit></td>
</tr>
</table>";
echo "</form>";
?>
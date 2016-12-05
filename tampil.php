<?php
include "koneksi.php";
echo "<br><br><br><center><h1>Tabel Dealer Mobil</h1></center>";
echo "<table border=1 align=center width=650>
    <tr>
    <th>Nama</th>
    <th>Tahun Produksi</th>
    <th>Tipe Mobil</th>
    <th>Harga Mobil</th>
    <th>Warna Mobil</th>
    <th>Aksi</th>
    <tr>";

$tampil=mysql_query("select * from mitsubishi");
while ($r=mysql_fetch_array($tampil))
{
  echo "
        <tr>
        <td>$r[Nama]</td>
        <td>$r[Tahun]</td>
        <td>$r[Tipe]</td>
        <td>$r[Harga]</td>
        <td>$r[Warna]</td>
        <td><a href='edit.php?Nama=$r[Nama]'>EDIT</a></td>
        <tr>";
}
echo "</table>";
?>
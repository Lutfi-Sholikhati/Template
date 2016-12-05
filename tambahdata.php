<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = 'INSERT INTO mitsubishi '.
       '(Nama,Tahun, Tipe, Harga, Warna)'.
       'VALUES ( "BERHASIL", "alamat skrip", 34000, NOW() )';
 
mysql_select_db('dealer');
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  die('Gagal tambah data: ' . mysql_error());
}
echo "Berhasil tambah data\n";
mysql_close($koneksi);
?>
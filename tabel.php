<?php
include "koneksi.php";
$sql="SELECT * from mitsubishi ";
$query=mysql_query($sql);
?>
<section class="content-header">
      <h1>
        Tabel Dealer Mobil
      </h1>
      <ol class="breadcrumb">
      
        <li></li>

      </ol>
    </section>
<section class="content">
      <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                 <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Tahun</th>
                  <th>Tipe</th>
                  <th>Harga</th>
           <th>Warna</th>
          <th>AKSI</th>
                </tr>
        <?php
          $i=1;
          while ($row=mysql_fetch_array($query))
          {
          ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><span class="badge bg-red"><?php echo $row['Nama'];?></span></td>
          <td><?php echo $row['Tahun'];?></td>
          <td><?php echo $row['Tipe'];?></td>
          <td><?php echo $row['Harga'];?></td>
          <td><?php echo $row['Warna'];?></td>
          <td>
          <a href='tambahdata.php?Nama'><button type="button" class="btn btn-block btn-warning">Tambah Data</button></a>&nbsp;
          <a href='edit.php?Nama="<?php echo $row['Nama'];?>"'><button type="button" class="btn btn-block btn-success">Edit</button></a>&nbsp;
          <a href='hapus.php?Nama="<?php echo $row['Nama'];?>"'><button type="button" class="btn btn-block btn-danger">Hapus</button></td></a>
                </tr>
        <?php
                $i++;
                }
        ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
</section>
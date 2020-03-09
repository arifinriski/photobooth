 <table class="table table-striped">
  <tr>
   <th>#</th>
   <th>Nama</th>
   <th>Harga</th>
  </tr>
  <?php $no=1; foreach ($data_laporan as $row): ?>
   <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->harga ?></td>
   </tr>
  <?php endforeach ?>
 </table>
 <a href="<?= site_url('data_laporan/cetak') ?>" target="_blank" class="btn btn-warning">Cetak Laporan</a>
    
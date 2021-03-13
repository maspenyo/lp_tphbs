<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title"><?php echo $title; ?></h3>
  </div>
  <div class="card-body">
<!--     <a href="" type="button" class="btn btn-sm btn-default btn-block">Kota Yogyakarta</a>
    <a href="" type="button" class="btn btn-sm btn-default btn-block">Kab. Bantul</a>
    <a href="" type="button" class="btn btn-sm btn-default btn-block">Kab. Kulon Progo</a>
    <a href="" type="button" class="btn btn-sm btn-default btn-block">Kab. Sleman</a>
    <a href="" type="button" class="btn btn-sm btn-default btn-block">Kab. Gunungkidul</a>
 -->
  <?php
    foreach ($hasil as $value) {
  ?>
    <a href="<?php echo base_url('main/start/').$value->id_sekolah ?>" class="btn btn-outline-info btn-block"><?php echo $value->nama_sekolah ?></a>
  <?php 
    }
  ?>
  </div>
  <div class="card-footer">
    <a href="<?php echo base_url('main') ?>" class="btn btn-xs btn-default">Kembali</a>
  </div>
</div>
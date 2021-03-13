<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title"><?php echo $title; ?></h3>
  </div>
  <div class="card-body">
  <?php
    foreach ($hasil as $value) {
  ?>
    <a href="<?php echo $value->url_server."/admincbtweb" ?>" type="button" class="btn btn-outline-primary btn-block">Proktor</a>
    <a href="<?php echo $value->url_server."/login" ?>" type="button" class="btn btn-outline-success btn-block">Peserta Ujian</a>
  <?php 
    }
  ?>
  </div>
  <div class="card-footer">
    <a href="<?php echo base_url('main') ?>" class="btn btn-outline-secondary btn-xs">Kembali</a>
  </div>
</div>
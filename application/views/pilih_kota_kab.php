<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title"><?php echo $title; ?></h3>
  </div>
  <div class="card-body">
  <?php 
    foreach ($hasil as $value) {
  ?>
    <a href="<?php echo base_url('main/sekolah/').$value->id_kabupaten ?>" type="button" class="btn btn-outline-info btn-block"><?php echo $value->nama_kabupaten ?></a>
  <?php 
    }
  ?>
   </div>
</div>
<div class="card card-info">
  <div class="card-header">
    <?php foreach ($kabupaten as $value) { ?>
      <h3 class="card-title"><?php echo $value->nama_kabupaten; ?></h3>
    <?php } ?>
  </div>
  <div class="card-body">
    <form method="post" action="<?php echo base_url('index.php/main/mulai') ?>">
      <div class="form-group">
        <select class="form-control select2bs4" style="width: 100%;" name="sekolah">
          <option value="0">- Pilih Sekolah -</option>
          <?php
            foreach ($hasil as $value) {
          ?>
            <option value="<?php echo $value->id_sekolah ?>"><?php echo $value->nama_sekolah ?></option>
          <?php
            }
          ?>
        </select>
      </div>
      <input type="submit" class="form-control btn btn-outline-info btn-block" name="Pilih" value="Lanjutkan">
    </form>

  <!-- <?php
    foreach ($hasil as $value) {
  ?>
    <a href="<?php echo base_url('main/start/').$value->id_sekolah ?>" class="btn btn-outline-info btn-block"><?php echo $value->nama_sekolah ?></a>
  <?php 
    }
  ?> -->
  </div>
  <div class="card-footer">
    <a href="<?php echo base_url('main') ?>" class="btn btn-outline-secondary btn-xs">Kembali</a>
  </div>
</div>
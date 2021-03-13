<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-cyan">
    <div class="container">
      <a href="<?php echo base_url(); ?>" class="navbar-brand">
        <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">TPHBS SMA DIY 2021</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="card">
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://placehold.it/900x400/39CCCC/ffffff&text=TPHBS+SMA+DIY+2021" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://placehold.it/900x400/3c8dbc/ffffff&text=TPHBS+SMA+DIY+2021" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://placehold.it/900x400/f39c12/ffffff&text=TPHBS+SMA+DIY+2021" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Pilih Server</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <select class="form-control" style="width: 100%;">
                    <option>- Kota Kabupaten -</option>
                    <?php 
                      foreach ($hasil as $value) {
                        echo "<option value='$value->id_kabupaten'>$value->nama_kabupaten</option>";
                      }
                    ?>
                    
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" style="width: 100%;" name="sekolah" id="sekolah">
                    <!-- akan di load pakai ajax -->
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" style="width: 100%;" name="status">
                    <option>- Status -</option>
                    <option value="1">Proktor</option>
                    <option value="2">Peserta Ujian</option>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                  <input type="submit" name="submit" value="Lanjutkan">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>

<script>
  $("kabupaten").change(function(){
    var id_kabupaten = $("#kabupaten").val();

    $.ajax({
      url: "<?php echo base_url(); ?>/main/get_sekolah",
      method: "POST",
      data:{id_kabupaten:id_kabupaten},
      async: false,
      dataType: 'json',
      success: function(data){
        var html='';
        var i;
        for(i=0;i<data.length;i++){
          html +='<option value='+data[i].id_sekolah+'>'+data[i].nama_sekolah+'</option>';
        }
        $('#sekolah').html(html);
      }
    });
  });
</script>

</body>
</html>

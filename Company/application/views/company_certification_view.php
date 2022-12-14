<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MASS HSE | company</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Certifications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

      
      <?php foreach ($c_crt as $row) 
      {
      ?>


            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <!-- <div class="card-header text-muted border-bottom-0">
                  
                </div> -->
                <div class="card-body pt-0" >
                  <div class="row">
                    <?php if($row->company_certtype=='Service') { ?>
                    <div class="col-12 card-footer" style="background: #f8f9fa" style="text-align: center;">
                      <h2 class="lead" style="color: #ce2746;font-size: 30px;text-align: center;font-style: inherit;"><b><?php echo $row->service_name ?></b></h2>           </div>
                      <?php }
                      else
                      {
                      if($row->company_certtype=='Course') { ?>
                      <div class="col-12 card-footer" style="background: #f8f9fa" style="text-align: center;">
                      <h2 class="lead" style="color: #ce2746;font-size: 30px;text-align: center;font-style: inherit;"><b><?php echo $row->course ?></b></h2>           </div>
                      <?php }
                      } ?>
                    <div class="col-12 text-center">
                      <a target="blank" href="../../admin/uploads/<?php echo $row->company_certificate; ?>"><img style="height: 150px;width: auto;" src="<?php  echo base_url()?>certificate.png" alt="" class=" img-fluid"></a>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   <!--  <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a> -->
                    <a target="blank" href="../../admin/uploads/<?php echo $row->company_certificate; ?>" target="blank" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View and Download
                    </a>
                  </div>
                </div>
              </div>
            </div>
       
       <?php } ?>




          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav> -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
 -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>mass hse| Company Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url().'AdminLTE-master/'; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">

            <!-- Profile Image -->
            <div class="card card-primary card-outline" >
              <div class="card-body box-profile">
                <!-- <div class="text-center" >
                  <img class="profile-user-img img-fluid img-circle" style="width: 300px;height: 300px;"
                       src="../../admin/uploads/<?php echo $st_prfl->picture; ?>"
                       alt="User profile picture">
                </div>
 -->
                <h2 class="profile-username text-center" style="color: #4a79a9;font-size: 30px;margin-top: 20px"><b><?php echo
                    $compdtls->company_info_name  
                   ?></becho>
                </h2>

                <div class="row" style="margin-top: 30px;margin-bottom: 10px">   
                <h3 class="profile-username  col-md-5 float-left" style="padding-left: 30px">Legal Register No</h3>
                <h3 class="profile-username text-center col-md-2">:-</h3>
                <h3 class="profile-username  col-md-5" style="padding-left: 10px"><?php echo $compdtls->company_info_regno ?></h3>
                <p class="text-muted text-center"></p>
                </div>


                <div class="row" style="margin-top: 20px;margin-bottom: 10px">   
                <h3 class="profile-username col-md-5 float-left" style="padding-left: 30px">Mail ID</h3>
                <h3 class="profile-username text-center col-md-2">:-</h3>
                <h3 class="profile-username col-md-5 float-left" style="padding-left: 10px"><?php echo $compdtls->company_info_mail ?></h3>
                <p class="text-muted text-center"></p>
                </div>


                <div class="row" style="margin-top: 20px;margin-bottom: 10px">   
                <h3 class="profile-username col-md-5 float-left" style="padding-left: 30px">Phone No</h3>
                <h3 class="profile-username text-center col-md-2">:-</h3>
                <h3 class="profile-username col-md-5 float-left" style="padding-left: 10px"><?php echo $compdtls->company_info_phon ?></h3>
                <p class="text-muted text-center"></p>
                </div>

               
                <!-- <div class="row" style="margin-top: 20px;margin-bottom: 10px">   
                <a target="blanck" href="../../admin/uploads/<?php echo $st_idcard->cert_id_file; ?>"><b class="btn btn-info text-center">My ID Card</b></a>
                <p class="text-muted text-center"></p> 
                </div>
 -->
                <!-- <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul> -->

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
          </div>
          <!-- /.col -->
          <div class="col-md-2"></div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url().'AdminLTE-master/'; ?>dist/js/demo.js"></script>
</body>
</html>

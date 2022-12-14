<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MASS HSE CONSULTEND CO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/fontawesome-free/css/all.min.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    
    .badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
}
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   <div class="col-md-6" style="display: flex;"> 
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>

    <div class="col-md-6" style="text-align: right;">

      <a href="<?php echo base_url('index.php/Student_cart');?>"><span style="cursor: pointer;"><i class="fa fa-cart-plus fa-2x"></i><span class='badge badge-warning' id='lblCartCount'></span></span></a>

    </div>

<!--  -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MASS HSE CONSULTEND CO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Students</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?php  echo base_url()?>index.php/Student_profile" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                My Profile
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Student_course" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Courses
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/Student_idcard" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Id Card
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Student_certificate" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               My Certification
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Student_meeting" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Meetings
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Student_meterial" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Study Meterials
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Student_exam" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Exams
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php  echo base_url()?>index.php/Fullcourse" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               All course
              </p>
            </a>
          </li>
 
          <li class="nav-item has-treeview">
            <a href="<?php  echo base_url()?>index.php/Student_login/st_logout" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Logout
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul> -->
          </li>



          
          
         
          
            
          


          
          
        
 
    
      
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


   <?php $this->load->view($content);?>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io">MASS HSE CO</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/moment/moment.min.js"></script>
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/js/demo.js"></script>

<script type="text/javascript">

$( document ).ready(function() {

  cartcoutset();
  checkcorsexpiry(); 
   getmeetings();       

      });


function cartcoutset()
{
 $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Fullcourse/getcartcount');?>/",
              data: '', // serializes the form's elements.
             success: function(data){

              $('#lblCartCount').text(data);
              
                 
            }
        });
}


function checkcorsexpiry()
{
   // alert('hai');

 $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Student_course/checkingexpry');?>/",
              data: '', // serializes the form's elements.
             success: function(data){

             console.log(data);
              
              
            }
        });
}
  
 function notifyresult($msg,$level){
          return $.notify($msg, {
              position: 'top center',
              hideDuration: '5',
              showAnimation: 'fadeIn',
              hideAnimation: 'fadeOut',
              className: $level
            });
        }

</script>


</body>
</html>

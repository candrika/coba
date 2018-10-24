<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/AdminLTE.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/skins/_all-skins.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
</head>
<body  class="hold-transition skin-blue sidebar-mini">
    <!-- <div class ="wrapper"> -->
    <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini">TPL</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Luas</b> Mulya Jaya  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="display:none">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?=base_url().'assets/images/'.$data['image']?>" class="user-image fa fa-image">              
              <span class="hidden-xs"><?=$data['user']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <!-- Alexander Pierce - Web Developer -->
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                  <a href="<?=base_url()?>/login/logout" style="position: relative;top: -19px;left: 31px;"><i class="fa fa-sign-out"></i><p class="btn" style="position: relative;top: -27px;left: 7px;">Sign out</p></a>
                  <a href="#"><i class="fa fa-gears"  style="position: relative;top: -19px;left: 31px;"></i><p class="btn" style=" position: relative;top: -48px;left: 42px;">setting</p></a> 
                  <!-- <a href="#">Followers</a> -->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!-- <a href="#">Sales</a> -->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!-- <a href="#">Friends</a> -->
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <!-- <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li> -->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  </div>    
<script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>

  <script>
       $.widget.bridge('uibutton',$.ui.button); 
  </script>
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url()?>assets/jquery/dist/jquery.js"></script> -->
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/js/pages/dashboard.js"></script>
</body>
</html>
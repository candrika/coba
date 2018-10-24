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
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
       <?php
        // print_r($main_menu);
        foreach ($main_menu as  $menu) {
          # code...
          // echo $this->db->last_query();
          $sub_menu =$this->db->get_where('sys_menu',array('parent'=>$menu->sys_menu_id));

          if($sub_menu->num_rows() > 0){
             echo "<li class='treeview'>" . anchor($menu->menu_link, '<i class="' . $menu->icon . '"></i>' . $menu->menu_name .
             '<span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>');
             echo "<ul class='treeview-menu'>";
             foreach ($sub_menu->result() as $sub) {
               # code...
              //  print_r($sub);
               echo "<li>".anchor($sub->menu_link,'<i class="'.$sub->icon.'"></i>'.$sub->menu_name)."</li>";
             } 
             echo "</ul></li>";  
          }else{
            echo "<li>" . anchor($menu->menu_link, '<i class="' . $menu->icon . '"></i>' . $menu->menu_name) . "</li>";
          }
        }
       ?>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
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
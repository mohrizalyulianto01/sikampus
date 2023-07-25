<!DOCTYPE html>
<html lang="en">

<?php
session_start(); 
include('head.php');?>
<?php include('../config/config.php')?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include('preloader.php');?>

  <!-- Navbar -->
 
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->
    <?php include('content_header.php');?>
    <!-- Main content -->
    <?php include('data_mahasiswa.php');?>
  <!-- /.content-wrapper -->
  <!-- main content -->
  <?php
  if (isset($_GET['page'])){
    // if ($_GET['page']=='dahboard.php');
    // include('dahboard.php');
  }
  // else if ($_GET['page']=='data-mahasiswa'){
  //   include('data_mahasiswa.php');
  //    }
  if($_GET['page']=='edit-data'){
    include('edit/edit_data.php');
     }
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('footer.php');?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cantoline | Home</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php $this->load->view('layouts/head') ?>
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <!-- header nav -->
          <a href="<?php base_url(); ?>" class="navbar-brand"><b>Canto</b>Line</a>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- left nav -->
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- right nav -->
            <li><a href="index.php/users/login">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Home
          <small>Your daily apps for easy ordering</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
          <!-- <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li> -->
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

      </section>
    </div>
  </div>


  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 0.0
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="http://www.umarkotak.com">M Umar Ramadhana</a>.</strong> All rights
      reserved.
    </div>
  </footer>

</div>



<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
</body>

</html>
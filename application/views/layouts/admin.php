<?php if ($this->session->userdata('logged_in') && $this->session->userdata('type') == "admin"): ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cantoline | Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php $this->load->view('layouts/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Top Nav -->
  <header class="main-header">
    <a href="<?php echo base_url(); ?>" class="logo">
      <span class="logo-mini"><b>C</b>L</span>
      <span class="logo-lg"><b>Canto</b>Line</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>index.php/users/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Side Nav -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <?php $image_file = base_url()."uploads/user_image/".$this->session->userdata('username').".jpg" ?>
          <img src="<?php echo $image_file; ?>" onerror="this.src='<?php echo base_url(); ?>uploads/user_image/default.png'" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name'); ?></p>
          
          <?php $this->db->where('id', $this->session->userdata('user_id')); ?>
          <?php $result = $this->db->get('users'); ?>
          <?php $result = $result->row(); ?>
          <p><i class="fa fa-money"></i> credit : <?php echo $result->credit; ?></p>
        </div>
      </div>

        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url(); ?>index.php/admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        <li><a href=""><i class="fa fa-line-chart"></i><span>Statistics</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/food_add"><i class="glyphicon glyphicon-plus"></i><span>Add Food</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/food"><i class="glyphicon glyphicon-grain"></i><span>Food Data</span></a></li>
        <li><a href=""><i class="glyphicon glyphicon-plus"></i><span>Add Category</span></a></li>
        <li><a href=""><i class="fa fa-tags"></i><span>Category Data</span></a></li>
        <li><a href=""><i class="glyphicon glyphicon-plus"></i><span>Add Post</span></a></li>
        <li><a href=""><i class="fa fa-file-o"></i><span>Post Data</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/user_data"><i class="glyphicon glyphicon-th"></i><span>User Data</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/profile"><i class="glyphicon glyphicon-user"></i><span>Profile</span></a></li>
      </ul>
    </section>
  </aside>

  <!-- Main Content -->
  <div class="content-wrapper">

    <?php $this->load->view($main_view) ?>

  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="http://www.umarkotak.com">M Umar Ramadhana</a>.</strong> All rights
      reserved.
  </footer>

</div>

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('#tables').DataTable();
  });
</script>
</body>
</html>

<?php else: ?>

<p>You have no access to this page, please <a href="<?php echo base_url() ?>index.php/users/login">login</a></p>

<?php endif ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="col-xs-3">
    
  </div>

  <div class="col-xs-9">
    <?php $this->load->view($main_view); ?>
    
  </div>

</div>

</body>
</html>
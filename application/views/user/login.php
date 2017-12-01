<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cantoline | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <?php $this->load->view('layouts/head') ?>  
</head>

<body class="hold-transition login-page">
<?php if ($this->session->flashdata('login_failed')): ?>

<div class="callout callout-danger">
  <p>
    <b>error : </b>
    <?php echo $this->session->flashdata('login_failed'); ?>
  </p>
</div>
  
<?php endif ?>

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>Canto</b>Line</a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to make order</p>

    <?php echo form_open('users/login_auth'); ?>
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-flat btn-sm">Sign In</button>
          </div>

          <div class="form-group">
            <a href="<?php echo base_url(); ?>index.php/users/register" class="btn btn-primary btn-block btn-flat btn-sm">Create New Account</a>
          </div>

          <div class="form-group">
            <a href="" class="btn btn-danger btn-block btn-flat btn-xs">Forgot Password</a>
          </div>
        </div>
      </div>
    <?php form_close(); ?>
  </div>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cantoline | Register</title>
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
    <p class="login-box-msg">Register your new account</p>

    <?php echo form_open('users/register_auth'); ?>
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="name" name="name" class="form-control" placeholder="Full Name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="E - mail" required>
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" required> I accept the term and agreement
        </label>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-block btn-flat btn-sm">Register</button>
          </div>
        </div>
      </div>
    <?php form_close(); ?>
  </div>

</div>
</body>
</html>

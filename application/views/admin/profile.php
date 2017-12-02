<?php if ($this->session->flashdata('errors')): ?>

<div class="callout callout-danger">
<p>
  <b>error : </b>
  <?php echo $this->session->flashdata('errors'); ?>
</p>
</div>

<?php elseif($this->session->flashdata('success')): ?>

<div class="callout callout-success">
<p>
  <b>success : </b>
  <?php echo $this->session->flashdata('success'); ?>
</p>
</div>

<?php endif ?>

<section class="content-header">
  <h1>
    Profile
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Admin Profile</h3>
        </div>

        <div class="box-body">
          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() ?>uploads/user_image/<?php echo $this->session->userdata('username'); ?>.jpg" onerror="this.src='<?php echo base_url(); ?>uploads/user_image/default.png'" alt="User profile picture">

          <h3 class="profile-username text-center"><?php echo $this->session->userdata('name'); ?></h3>

          <p class="text-muted text-center"><?php echo $this->session->userdata('type'); ?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <i class="fa fa-money"></i><b> Credit</b> <a class="pull-right"><?php echo $this->session->userdata('credit'); ?></a>
            </li>
            <li class="list-group-item">
              <i class="glyphicon glyphicon-user"></i> <b>Username</b> <a class="pull-right"><?php echo $this->session->userdata('username'); ?></a>
            </li>
            <li class="list-group-item">
              <i class="glyphicon glyphicon-envelope"></i> <b>E-mail</b> <a class="pull-right"><?php echo $this->session->userdata('email'); ?></a>
            </li>
            <li class="list-group-item">
              <i class="glyphicon glyphicon-earphone"></i> <b>Phone</b> <a class="pull-right"><?php echo $this->session->userdata('phone'); ?></a>
            </li>
          </ul>

          <?php echo form_open_multipart('users/upload_photo'); ?>
          <div class="form-group">
            <input type="file" name="image_file" required>

            <p class="help-block">Format : .jpg, Size 400 x 400 px</p>
            <button class="btn btn-primary btn-xs pull-right"><b>Add Profile Photo</b></button>
          </div>
          <?php echo form_close(); ?>

        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header">
          
        </div>

        <div class="box-body">
          
        </div>
      </div>
    </div>
  </div>
</section>
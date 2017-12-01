<?php if ($this->session->userdata('logged_in')): ?>  

<h2>Logout</h2>

<?php if ($this->session->userdata('username')): ?>
<?php echo "You are logged in as ".$this->session->userdata('username'); ?>
<?php endif; ?>

<?php echo form_open('users/logout'); ?>

<button type="submit" name="submit" value="logout" class="btn btn-primary">Logout</button>

<?php echo form_close(); ?>

<?php else: ?>

<h2>Login Form</h2>

<?php if ($this->session->flashdata('errors')): ?>
  <?php echo $this->session->flashdata('errors'); ?>
<?php endif ?>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>
<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">
  <label>Username</label>
  <input type="text" name="username" class="form-control">
</div>

<div class="form-group">
  <label>Password</label>
  <input type="password" name="password" class="form-control">
</div>

<div class="form-group">
  <label>Confirm Password</label>
  <input type="password" name="confirm_password" class="form-control">
</div>

<button type="submit" name="submit" class="btn btn-primary">Submit</button>

<?php echo form_close(); ?>


<?php endif; ?>

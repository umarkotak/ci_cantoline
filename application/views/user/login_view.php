<h2>Login Form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php echo form_open('users/login_view', $attributes); ?>

<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control">
</div>

<?php echo form_close(); ?>

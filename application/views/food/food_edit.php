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
    Food Edit
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Food Edit</li>
  </ol>
</section>

<?php $this->db->where('id', $food_id); ?>
<?php $result = $this->db->get('foods') ?>
<?php $result = $result->row(0); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-6">
      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $result->name; ?></h3>
        </div>

        <?php echo form_open_multipart('foods/update_food/'.$food_id); ?>
          <div class="box-body">
            <div class="form-group">
              <label>Food Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $result->name; ?>" readonly required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control" rows="3" required><?php echo $result->description; ?></textarea>
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="number" name="price" class="form-control" value="<?php echo $result->price; ?>" required>
            </div>
            <div class="form-group">
              <label>Stock</label>
              <input type="number" name="stock" class="form-control" value="<?php echo $result->stock; ?>" required>
            </div>            
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input name="confrimation" type="checkbox" required>I ensure all food data is valid
                </label>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i><span> Update Food</span></button>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>

    <div class="col-xs-6">
      <div class="box box-primary">
        <div class="box-body">
          <img src="<?php echo base_url(); ?>uploads/food_image/<?php echo $result->image; ?>" width="100%">
        </div>
      </div>
    </div>

  </div>
</section>
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
    Food Add
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Food Add</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">

    <div class="box-header with-border">
      <h3 class="box-title">Create New Food</h3>
    </div>

    <?php echo form_open_multipart('foods/create_food'); ?>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Food Name</label>
              <input type="text" name="name" class="form-control" placeholder="Food Name" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control" rows="3" placeholder="Description" required=""></textarea>
            </div>
            <div class="form-group">
              <label>Category</label>
              <select name="category_id" class="form-control">
                <?php $query = $this->db->get('categories'); ?>
                <?php foreach ($query->result() as $row) { ?>
                  <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Price</label>
              <input type="number" name="price" class="form-control" placeholder="Price" required>
            </div>
            <div class="form-group">
              <label>Stock</label>
              <input type="number" name="stock" class="form-control" placeholder="Stock" required>
            </div>            
            <div class="form-group">
              <label>Image File</label>
              <input type="file" name="image_file" required>

              <p class="help-block">Upload your image file here, with format : .jpg</p>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input name="confrimation" type="checkbox" required>I ensure all food data is valid
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i><span>Add Food</span></button>
      </div>
    <?php echo form_close(); ?>
  </div>
</section>
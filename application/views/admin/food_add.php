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

    <?php echo form_open('admin/create_food'); ?>
      <div class="box-body">
        <div class="row">
          <div class="col-xs-6">
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
            <div class="form-group">
              <label for="exampleInputFile">Image File</label>
              <input type="file" >

              <p class="help-block">Upload your image file here, with format : .jpg</p>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label>Price</label>
              <input type="number" name="price" class="form-control" placeholder="Price" required>
            </div>
          </div>
        </div>
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    <?php echo form_close(); ?>
  </div>
</section>
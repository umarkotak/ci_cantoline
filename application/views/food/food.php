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
    Food Data
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Food Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">

    <div class="box-header with-border">
      <h3 class="box-title">Food List</h3>
    </div>


    <div class="box-body">

      <table id="tables" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th width="5">Id</th>
          <th>Name</th>
          <th>Category Id</th>
          <th>Image</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php $result = $this->db->get('foods'); ?>
        <?php foreach($result->result() as $object) { ?>
          <tr>
            <td><?php echo $object->id; ?></td>
            <td><?php echo $object->name; ?></td>
            <td><?php echo $object->category_id; ?></td>
            <td><?php echo $object->image; ?></td>
            <td><?php echo $object->stock; ?></td>
            <td><?php echo $object->price; ?></td>
            <td>
              <a href="<?php echo base_url(); ?>index.php/foods/delete_food/<?php echo $object->id; ?>/<?php echo $object->name; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs">Delete</a>
              <a href="<?php echo base_url(); ?>index.php/admin/food_edit/<?php echo $object->id; ?>" class="btn btn-success btn-xs">Edit</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>

        <tfoot>
          
        </tfoot>
      </table>

    </div>

    <div class="box-footer">
      
    </div>

  </div>
</section>
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
    Order Food
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Order Food</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<?php $result = $this->db->get('foods'); ?>
<?php foreach($result->result() as $object) { ?>

  <div class="row">
    <div class="col-xs-8">
      <div class="box box-primary">
        <div class="box-body">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo base_url(); ?>uploads/food_image/<?php echo $object->image; ?>" width="100%" class="img-rounded">
            </div>
            <div class="col-md-6">
              <b style="font-size: 18px;"><?php echo $object->name; ?></b>
              <p><?php echo $object->description; ?></p>
            </div>
            <div class="col-md-3">
              <p> <b>Stock :</b> <a class="pull-right"><?php echo $object->stock; ?></a></p>
              <p> <b>Price :</b> <a class="pull-right"><?php echo $object->price; ?></a></p>

              <?php echo form_open('carts/add_food_to_cart'); ?>
              <div class="input-group input-group-sm">
                <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
              </div>
              <br>  
              <button class="btn btn-success btn-xs btn-block">Add to cart</button>
              <input type="hidden" name="food_id" value="<?php echo $object->id ?>">
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="col-xs-4">
      
    </div>
  </div>

<?php } ?>
</section>
<?php if ($this->session->flashdata('errors')): ?>

<div class="callout callout-danger">
<p>
  <b>error : </b>
  <?php echo $this->session->flashdata('errors'); ?>
</p>
</div>

<?php endif; ?>

<section class="content-header">
  <h1>
    Order Confirmation
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
    <li class="active">Order Confirmation</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <section class="invoice">

    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Canteen Online .co
          <small class="pull-right"><?php echo date("d/m/Y"); ?></small>
        </h2>
      </div>
    </div>

    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>CantoLine .co</strong><br>
          Stt - PLN Jakarta<br>
          Phone : 0852 1725 1690<br>
          Email : umarkotak@yahoo.co.id
        </address>
      </div>

      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?php echo $this->session->userdata('name'); ?></strong><br>
          Stt - PLN Jakarta<br>
          Phone : <?php echo $this->session->userdata('phone'); ?><br>
          Email : <?php echo $this->session->userdata('email'); ?>
        </address>
      </div>

      <div class="col-sm-4 invoice-col">
        
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table id="" class="table table-stripped">
          <thead>
          <tr>
            <th width="5">No</th>
            <th>Food Id</th>
            <th>Menu</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
          </tr>
          </thead>

          <tbody>
          <?php $no = 1; ?>
          <?php $this->db->select('carts.quantity as quantity, carts.price as price, carts.status as status, carts.users_id, foods.id as food_id, foods.name as food_name, foods.price as food_price'); ?>
          <?php $this->db->from('carts'); ?>
          <?php $this->db->join('foods', 'foods.id = carts.foods_id'); ?>
          <?php $this->db->where('users_id', $this->session->userdata('user_id')); ?>

          <?php $query = $this->db->get(); ?>

          <?php foreach($query->result_array() as $object) { ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $object['food_id']; ?></td>
              <td><?php echo $object['food_name']; ?></td>
              <td><?php echo $object['food_price']; ?></td>
              <td><?php echo $object['quantity']; ?></td>
              <td><?php echo $object['price']; ?></td>
            </tr>
          <?php $no += 1; ?>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <p class="lead">Payment Methods:</p>

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          In this system all payment done using this system credits. The credits will be automatically reduced after you click confirmation order button. You cannot cancel the order when its in the preparation phase. Thankyou for using our services.
        </p>
      </div>

      <div class="col-xs-6">
        <p class="lead">Amount Due <?php echo date("d/m/Y"); ?></p>

        <div class="table-responsive">
          <table class="table">
              <tbody><tr>
                <?php $this->db->select_sum('price'); ?>
                <?php $this->db->where('users_id', $this->session->userdata('user_id')); ?>
                <?php $query = $this->db->get('carts'); ?>
                <?php $query = $query->row(); ?>
                <th style="width:50%">Total Payment:</th>
                <td><?php echo $query->price; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row no-print">
      <div class="col-xs-12">
        <button type="button" class="btn btn-success pull-right"><i class="glyphicon glyphicon-ok"></i> Confirm Order</button>
      </div>
    </div>
  </section>

</section>
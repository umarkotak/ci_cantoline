<section class="content-header">
  <h1>
    My Cart
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">My Cart</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Order Query</h3>
        </div>


        <div class="box-body">

          <table id="tables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th width="5">No</th>
              <th>Menu</th>
              <th>Status</th>
              <th>Action</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
            </thead>

            <tbody>
            <?php $no = 1; ?>
            <?php $this->db->select('carts.quantity as quantity, carts.price as price, carts.status as status, carts.users_id, foods.name as food_name, '); ?>
            <?php $this->db->from('carts'); ?>
            <?php $this->db->join('foods', 'foods.id = carts.foods_id'); ?>
            <?php $this->db->where('users_id', $this->session->userdata('user_id')); ?>

            <?php $query = $this->db->get(); ?>

            <?php foreach($query->result_array() as $object) { ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $object['food_name']; ?></td>
                <td><?php echo $object['status']; ?></td>
                <td>Action</td>
                <td><?php echo $object['quantity']; ?></td>
                <td><?php echo $object['price']; ?></td>
              </tr>
            <?php $no += 1; ?>
            <?php } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>
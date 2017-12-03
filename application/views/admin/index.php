<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Order Query</h3>
        </div>


        <div class="box-body">
          
          <?php $this->db->select('orders.id as id, orders.payment_date as payment_date, orders.users_id as users_id, orders.status as status, users.name as user_name'); ?>
          <?php $this->db->from('orders'); ?>
          <?php $this->db->join('users', 'users.id = orders.users_id') ?>
          <?php $this->db->where('status', "on_order"); ?>
          <?php $result = $this->db->get(); ?>
          <?php foreach($result->result() as $object_main) { ?>
          <div class="box-group" id="accordion">
            <div class="panel box box-primary">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $object_main->id ?>" class="collapsed" aria-expanded="false">
                    #<?php echo $object_main->id; ?> - <?php echo $object_main->payment_date; ?> - <?php echo $object_main->user_name ?>
                  </a>
                </h4>
              </div>
              <div id="<?php echo $object_main->id ?>" class="panel-collapse collapse" aria-expanded="false">
                <div class="box-body">
                  
                  <table id="" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th width="5">No</th>
                      <th>Menu</th>
                      <th>Status</th>
                      <th>Action</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $no = 1; ?>
                    <?php $this->db->select('carts.quantity as quantity, carts.price as price, carts.status as status, carts.users_id, carts.orders_id, foods.name as food_name, foods.price as food_price'); ?>
                    <?php $this->db->from('carts'); ?>
                    <?php $this->db->join('foods', 'foods.id = carts.foods_id'); ?>
                    <?php $this->db->where('users_id', $object_main->users_id); ?>
                    <?php $this->db->where('status', "on_order"); ?>

                    <?php $query = $this->db->get(); ?>

                    <?php foreach($query->result_array() as $object) { ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $object['food_name']; ?></td>
                        <td><?php echo $object['status']; ?></td>
                        <td>Action</td>
                        <td><?php echo $object['food_price']; ?></td>
                        <td><?php echo $object['quantity']; ?></td>
                        <td><?php echo $object['price']; ?></td>
                      </tr>
                    <?php $no += 1; ?>
                    <?php } ?>
                    </tbody>

                    <tfoot>
                      <tr>
                        <?php $this->db->select_sum('price'); ?>
                        <?php $this->db->where('users_id', $object_main->users_id); ?>
                        <?php $query = $this->db->get('carts'); ?>
                        <?php $query = $query->row(); ?>
                        <?php $total_price = $query->price; ?>
                        <td colspan="5"></td>
                        <td><b>Total Payment</b></td>
                        <td><?php echo $total_price; ?></td>
                      </tr>
                    </tfoot>
                  </table>

                </div>

                <div class="box-footer">
                  <b>Status : </b>
                  <small class="label bg-gray <?php if($object_main->status == "on_order") echo 'bg-green' ?>">on_order</small><b> / </b>
                  <small class="label bg-gray <?php if($object_main->status == "on_process") echo 'bg-green' ?>">on_process</small><b> / </b>
                  <small class="label bg-gray <?php if($object_main->status == "ready") echo 'bg-green' ?>">ready</small><b> / </b>
                  <small class="label bg-gray <?php if($object_main->status == "complete") echo 'bg-green' ?>">complete</small>

                  <button class="btn btn-success btn-xs pull-right">Action</button>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
          
        </div>

        <div class="box-body">
          
        </div>
      </div>
    </div>
  </div>
</section>
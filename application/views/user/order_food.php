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
    <div class="col-xs-2">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Food Name</h3>
        </div>


        <div class="box-body">
          
        </div>
      </div>
    </div>
    <div class="col-xs-10">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Food Name</h3>
        </div>


        <div class="box-body">
          
        </div>
      </div>
    </div>
  </div>

<?php } ?>
</section>
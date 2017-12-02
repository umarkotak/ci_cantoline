<section class="content-header">
  <h1>
    User Data
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">User Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List User</h3>
        </div>

        <div class="box-body">
          <table id="tables" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th width="5">Id</th>
              <th>Userame</th>
              <th>Password</th>
              <th>Name</th>
              <th>Phone</th>
              <th>E - Mail</th>
              <th>Type</th>
              <th>Credit</th>
              <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $result = $this->db->get('users'); ?>
            <?php foreach($result->result() as $object) { ?>
              <tr>
                <td><?php echo $object->id; ?></td>
                <td><?php echo $object->username; ?></td>
                <td><?php echo $object->password; ?></td>
                <td><?php echo $object->name; ?></td>
                <td><?php echo $object->phone; ?></td>
                <td><?php echo $object->email; ?></td>
                <td><?php echo $object->type; ?></td>
                <td><?php echo $object->credit; ?></td>
                <td>
                  
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>

  </div>
</section>
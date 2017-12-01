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

      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
          <td>X</td>
        </tr>
        
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
      
    </div>

    <div class="box-footer">
      
    </div>

  </div>
</section>
<!-- Example DataTables Card-->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Data Pribadi</li>
      <li class="breadcrumb-item active">Cuti</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Cuti   
  </div>
         
  <div class="card-body">
      <div class="btn-group" role="group">
          <a href="index.php?page=tambahdp_cuti&p_id=<?php echo $_SESSION['p_id']; ?>" type="button" class="btn btn-default waves-effect">Tambah Cuti</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Masuk</th>
            <th>Lama</th>
            <th>Keperluan</th>
            <th>Status (Manager)</th>
            <th>Status (HRD)</th>
          </tr>
        </thead>
        
        <tbody>
          <?php
              include '../cores/connect.php';
              $p_id = $_SESSION['p_id'];
              $result = $con->query("SELECT * FROM cuti WHERE p_id='$p_id' ORDER BY tanggal_mulai ");
              $no=1;
              while($row = $result->fetch_array()){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['tanggal_mulai'];  ?></td>
            <td><?php echo $row['tanggal_masuk'];  ?></td>
            <td><?php echo $row['lama'];  ?></td>
            <td><?php echo $row['keperluan'];  ?></td>
            <td><?php echo $row['status_manager'];  ?></td>
            <td><?php echo $row['status_hrd'];  ?></td>
          </tr>
          <?php
            }
          ?>
        </tbody>
        
      </table>
    </div>
  </div>
</div>

</div>
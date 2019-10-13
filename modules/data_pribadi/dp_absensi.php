<!-- Example DataTables Card-->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Data Pribadi</li>
      <li class="breadcrumb-item active">Absensi</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Absensi    
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../cores/connect.php';

            $p_id = $_SESSION['p_id'];
            $result = $con->query("SELECT * FROM absensi WHERE p_id='$p_id'");
            $no=1;
            while($row = $result->fetch_array()){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['datetime_masuk']; ?></td>
            <td><?php echo $row['datetime_keluar']; ?></td>
            <td><?php echo $row['a_status']; ?></td>
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
<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
?>
<!-- Example DataTables Card-->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item active">Master Standar Cuti</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Master Standar Cuti  
  </div>
         
  <div class="card-body">
      <div class="btn-group" role="group">
          <a href="index.php?page=tambahstandarcuti" type="button" class="btn btn-default waves-effect">Tambah Standar Cuti</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
          <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Jumlah Cuti</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
              include '../cores/connect.php';

              $result = $con->query("SELECT * FROM standarcuti ORDER BY tahun");
              $no=1;
              while($row = $result->fetch_array()){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['tahun']; ?></td>
            <td><?php echo $row['jumlah_cuti']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
              <div class="btn-group" role="group">
                  <a href="index.php?page=editstandarcuti&sc_id=<?php echo $row['sc_id']; ?>" type="button" class="btn btn-default waves-effect">Ubah</a>
                  <a href="index.php?page=process_deletestandarcuti&sc_id=<?php echo $row['sc_id']; ?>" type="button" class="btn btn-default waves-effect" onclick="return confirm('Apakah Anda Setuju ?'); ">Hapus</a>
              </div>
            </td>
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
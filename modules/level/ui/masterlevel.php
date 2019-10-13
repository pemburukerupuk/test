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
      <li class="breadcrumb-item active">Master Level</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Master Level    
  </div>
         
  <div class="card-body">
      <div class="btn-group" role="group">
          <a href="index.php?page=tambahlevel" type="button" class="btn btn-default waves-effect">Tambah Level</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
          <tr>
            <th>No</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
              include '../cores/connect.php';

              $result = $con->query("SELECT * FROM level");
              $no=1;
              while($row = $result->fetch_array()){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['level']; ?></td>
            <td>
              <div class="btn-group" role="group">
                  <a href="index.php?page=editlevel&l_id=<?php echo $row['l_id']; ?>" type="button" class="btn btn-default waves-effect">Ubah</a>
                  <a href="index.php?page=process_deletelevel&l_id=<?php echo $row['l_id']; ?>" type="button" class="btn btn-default waves-effect" onclick="return confirm('Apakah Anda Setuju ?'); ">Hapus</a>
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
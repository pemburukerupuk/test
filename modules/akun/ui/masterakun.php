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
      <li class="breadcrumb-item active">Master Akun</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Master Akun    
  </div>
         
  <div class="card-body">
      <div class="btn-group" role="group">
          <a href="index.php?page=tambahakun" type="button" class="btn btn-default waves-effect">Tambah Akun</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Dibuat</th>
            <th>Diperbaharui</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../cores/connect.php';

            $result = $con->query("SELECT * FROM user LEFT JOIN pegawai ON user.p_id=pegawai.p_id ORDER BY nip ASC");

            
            $no=1;
            while($row = $result->fetch_array()){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nip']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['create_at']; ?></td>
            <td><?php echo $row['update_at']; ?></td>
            <td>
              <div class="btn-group" role="group">
                  <a href="index.php?page=editakun&u_id=<?php echo $row['u_id']; ?>" type="button" class="btn btn-default waves-effect">Ubah</a>
                  <a href="index.php?page=process_deleteakun&u_id=<?php echo $row['u_id']; ?>" type="button" class="btn btn-default waves-effect" onclick="return confirm('Apakah Anda Setuju ?'); ">Hapus</a>
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
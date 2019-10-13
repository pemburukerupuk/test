<?php
  if($_SESSION['level'] !== 'Manager' && $_SESSION['level'] !== 'Pegawai' && $_SESSION['level'] == 'Administrator'){
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
      <li class="breadcrumb-item">Data Umum</li>
      <li class="breadcrumb-item active">Absensi</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Absensi     
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Induk Pegawai</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Status</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nomor Induk Pegawai</th>
            <th>Nama</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Status</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            include '../cores/connect.php';

            $result = $con->query("SELECT * FROM absensi LEFT JOIN pegawai ON absensi.p_id=pegawai.p_id ORDER BY datetime_masuk DESC");
            $no=1;
            while($row = $result->fetch_array()){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nip']; ?></td>
            <td><?php echo $row['nama']; ?></td>
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
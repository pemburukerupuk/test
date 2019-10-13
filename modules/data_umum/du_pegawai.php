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
      <li class="breadcrumb-item active">Pegawai</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Pegawai     
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nomor Induk Pegawai</th>
            <th>Nama</th>
            <th>Level</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../cores/connect.php';

            $result = $con->query("SELECT * FROM pegawai LEFT JOIN level ON pegawai.l_id=level.l_id ORDER BY nip ASC");
            $no=1;
            while($row = $result->fetch_array()){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nip']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['level']; ?></td>
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

<?php
  if($_SESSION['level'] == 'Pegawai'){
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
      <li class="breadcrumb-item">Approval Cuti Pegawai</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Approval Cuti Pegawai 
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Masuk</th>
            <th>Lama</th>
            <th>Keperluan</th>
            <th>Status (Manager)</th>
            <th>Status (HRD)</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
              include '../cores/connect.php';
              $result = $con->query("SELECT * FROM cuti LEFT JOIN pegawai ON cuti.p_id = pegawai.p_id ORDER BY tanggal_mulai");
              $no=1;
              while($row = $result->fetch_array()){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nip'];  ?></td>
            <td><?php echo $row['nama'];  ?></td>
            <td><?php echo $row['tanggal_mulai'];  ?></td>
            <td><?php echo $row['tanggal_masuk'];  ?></td>
            <td><?php echo $row['lama'];  ?></td>
            <td><?php echo $row['keperluan'];  ?></td>
            <td><?php echo $row['status_manager'];  ?></td>
            <td><?php echo $row['status_hrd'];  ?></td>
            <td>
              <div class="btn-group" role="group">
                  <a href="index.php?page=dk_editacp&c_id=<?php echo $row['c_id']; ?>" type="button" class="btn btn-default waves-effect">Ubah</a>
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
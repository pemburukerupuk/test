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
      <li class="breadcrumb-item active">Master Pegawai</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Master Pegawai     
  </div>
         
  <div class="card-body">
      <div class="btn-group" role="group">
          <a href="index.php?page=tambahpegawai" type="button" class="btn btn-default waves-effect">Tambah Pegawai</a>
      </div>
      <div class="btn-group" role="group" hidden="">
          <a href="index.php?page=tambahpegawaiviacsv" type="button" class="btn btn-default waves-effect">Batch Upload</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
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
            <td>
              <div class="btn-group" role="group">
                  <a href="index.php?page=editpegawai&p_id=<?php echo $row['p_id']; ?>" type="button" class="btn btn-default waves-effect">Ubah</a>
                  <a href="index.php?page=process_deletepegawai&p_id=<?php echo $row['p_id']; ?>"" type="button" class="btn btn-default waves-effect" onclick="return confirm('Apakah Anda Setuju ?'); ">Hapus</a>
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
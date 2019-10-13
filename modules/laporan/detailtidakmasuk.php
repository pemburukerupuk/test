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
      <li class="breadcrumb-item">Detail Absensi Per Hari By Status = Tidak Masuk</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Detail Absensi <?php $date1 = $_GET['date']; echo $date1; ?> By Status = Tidak Masuk
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th><?php echo $date1; ?></th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              include '../cores/connect.php';
              $no = 1;


                $result2 = $con->query("SELECT nip, nama FROM pegawai WHERE p_id NOT IN (SELECT p_id FROM absensi WHERE datetime_masuk LIKE '%$date1%') ");
                while($row2 = $result2->fetch_array()){
                $nip= $row2['nip'];
                $nama= $row2['nama'];

          ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nip; ?></td>
            <td><?php echo $nama; ?></td>
            <td>-</td>
            <td>Tidak Masuk</td>

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
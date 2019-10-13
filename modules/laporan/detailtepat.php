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
      <li class="breadcrumb-item">Detail Absensi Per Hari By Status = Tepat</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Detail Absensi <?php $date1 = $_GET['date']; echo $date1; ?> By Status = Tepat
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

              $result = $con->query("SELECT * FROM absensi LEFT JOIN pegawai ON absensi.p_id=pegawai.p_id WHERE datetime_masuk LIKE '%$date1%' AND a_status='Tepat' ");
              $no=1;
               while($row5 = $result->fetch_array()){
          ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row5['nip']; ?></td>
            <td><?php echo $row5['nama']; ?></td>
            <td><?php echo $row5['datetime_masuk']; ?></td>
            <td><?php echo $row5['a_status']; ?></td>  
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
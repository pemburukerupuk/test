<?php
error_reporting(E_ALL);
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
      <li class="breadcrumb-item">Detail Absensi Per Hari</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Detail Absensi <?php $date1 = $_GET['date']; echo $date1; ?></th>
  </div>
         
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              include '../cores/connect.php';
              $no=1;

              $result1 = $con->query("SELECT * FROM pegawai LEFT JOIN absensi ON pegawai.p_id=absensi.p_id WHERE datetime_masuk LIKE '%$date1%' ");
              while($row1 = $result1->fetch_array()){
                $nip = $row1['nip'];
                $nama = $row1['nama'];
                $masuk = $row1['datetime_masuk'];
                $keluar = $row1['datetime_keluar'];
                $status = $row1['a_status'];
                $data[] = array('nip' => $nip, 'nama' => $nama, 'masuk' => $masuk, 'keluar' => $keluar, 'status' => $status);
              }

              $result2 = $con->query("SELECT nip, nama FROM pegawai WHERE p_id NOT IN (SELECT p_id FROM absensi WHERE datetime_masuk LIKE '%$date1%') ");
              while($row2 = $result2->fetch_array()){
                $nip= $row2['nip'];
                $nama = $row2['nama'];
                $data1[] = array('nip' => $nip, 'nama' => $nama, 'masuk' => '-', 'keluar' => '-', 'status' => 'Tidak Masuk');
              }

              $resultx = array_merge($data, $data1);
              foreach ($resultx as $key => $value) {
              
          ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $value['nip']; ?></td>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['masuk']; ?></td>
            <td><?php echo $value['keluar']; ?></td>
            <td><?php echo $value['status']; ?></td>
            
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
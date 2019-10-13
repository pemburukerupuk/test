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
      <li class="breadcrumb-item">Laporan Absensi</li>
      <li class="breadcrumb-item active">Laporan Absensi</li>
    </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Laporan Absensi     
  </div>
         
  <div class="card-body">
    <div class="btn-group" role="group">
          <a href="laporan/exporttoexcel.php" type="button" class="btn btn-default waves-effect">Export Data Absensi To Excel</a>
      </div>
      <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Tepat</th>
            <th>Terlambat</th>
            <th>Jam Kurang</th>
            <th>Tidak Masuk</th>
            <th>Total</th>
          </tr>
        </thead>
          <?php
              include '../cores/connect.php';
              
              $tepat = 'tepat';
              $terlambat = 'Terlambat';
              $jamkurang = 'Jam Kurang';
              $t_day = 0;
              $all = 0;
              $c_tepat = 0;
              $c_terlambat = 0;
              $c_jamkurang = 0;
              $c_tidakmasuk = 0;


              $result = $con->query("SELECT datetime_masuk FROM absensi GROUP BY DATE(datetime_masuk)");

               while($row5 = $result->fetch_array()){
                    $get = $row5['datetime_masuk'];
                    $datetime = new DateTime($get);
                    $date=$datetime->format('Y-m-d');
              
                  $result1 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$tepat' ");
                  $result2 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$terlambat' ");
                  $result3 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$jamkurang' ");
                  $result4 = $con->query("SELECT * FROM pegawai");

                  
                  $count1 = $result1->num_rows;
                  $count2 = $result2->num_rows;
                  $count3 = $result3->num_rows;
                  $count4 = $result4->num_rows;
                  $count5 = $count4-($count1+$count2+$count3);

                  $c_tepat += $count1;
                  $c_terlambat += $count2;
                  $c_jamkurang += $count3;	
                  $c_tidakmasuk += $count5;

                  $t_day = $count1+$count2+$count3+$count5;

                  $all = $c_tepat+$c_terlambat+$c_jamkurang+$c_tidakmasuk;

          ?>
          <tr>
            <td><?php echo $date; ?></td>
            <td>
                <a href="index.php?page=detailtepat&date=<?php echo $date; ?>"><?php echo $count1; ?></a>
                <span>--></span>
                <a href="laporan/exporttoexceltepat.php?date=<?php echo $date; ?>">Get Excel</a>
            </td>
            <td>
                <a href="index.php?page=detailterlambat&date=<?php echo $date; ?>"><?php echo $count2; ?></a>
                <span>--></span>
                <a href="laporan/exporttoexcelterlambat.php?date=<?php echo $date; ?>">Get Excel</a>
            </td>
            <td>
                <a href="index.php?page=detailjamkurang&date=<?php echo $date; ?>"><?php echo $count3; ?></a>
                <span>--></span>
                <a href="laporan/exporttoexceljamkurang.php?date=<?php echo $date; ?>">Get Excel</a>
            </td>
            <td>
                <a href="index.php?page=detailtidakmasuk&date=<?php echo $date; ?>"><?php echo $count5; ?></a>
                <span>--></span>
                <a href="laporan/exporttoexceltidakmasuk.php?date=<?php echo $date; ?>"">Get Excel</a>
            </td>
            <td>
                <a href="index.php?page=detailabsensi&date=<?php echo $date; ?>"><?php echo $t_day; ?></a>
                <span>--></span>
                <a href="laporan/exporttoexcelperhari.php?date=<?php echo $date; ?>"">Get Excel</a>
          </tr>
        <?php
         }
        ?>
          <tfoot>
            <tr>
            <th><b>Total</b></th>
            <th><?php echo $c_tepat; ?></th>
            <th><?php echo $c_terlambat; ?></th>
            <th><?php echo $c_jamkurang; ?></th>
            <th><?php echo $c_tidakmasuk; ?></th>
            <th><?php echo $all; ?></th>
          </tr>
          </tfoot>
        </tbody>

      </table>
    </div>
  </div>
</div>

</div>
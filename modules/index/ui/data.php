<?php
// Set proper HTTP response headers
header( 'Content-Type: application/json' );

include '../../../cores/connect.php';
$data = array();
// Fetch the data
$result = $con->query("SELECT datetime_masuk FROM absensi GROUP BY DATE(datetime_masuk)");
                    $tepat = 'tepat';
                    $terlambat = 'Terlambat';
                    $jamkurang = 'Jam Kurang';

  while($row5 = $result->fetch_array()){

    $get = $row5['datetime_masuk'];
    $datetime = new DateTime($get);
    $date=$datetime->format('Y-m-d');
    
    

    $result1 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$tepat' ");
    $result2 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$terlambat' ");
    $result3 = $con->query("SELECT datetime_masuk, a_status FROM absensi WHERE datetime_masuk LIKE '%$date%' AND a_status = '$jamkurang' ");
    $result4 = $con->query("SELECT * FROM pegawai WHERE p_id NOT IN (SELECT p_id FROM absensi WHERE datetime_masuk LIKE '%$date%') ");
    $count1 = $result1->num_rows;
    $count2 = $result2->num_rows;
    $count3 = $result3->num_rows;
    $count4 = $result4->num_rows;


    $data[] = array('date' => $date, 'tepat' => $count1, 'terlambat' => $count2, 'jamkurang' => $count3, 'tidakmasuk' => $count4);
  }

echo json_encode($data);
?>
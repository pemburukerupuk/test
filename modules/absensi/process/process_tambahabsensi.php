<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

	//validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
    	
    	if(is_uploaded_file($_FILES['file']['tmp_name'])){
 

		  	$csvFile = fopen($_FILES['file']['tmp_name'], 'r');


	        while (($getData = fgetcsv($csvFile, ",")) !== FALSE){
	        	$nip = $getData[0];

	        	$read = $con->query("SELECT p_id, nip FROM pegawai WHERE nip='$nip' ");
	        	$get = $read->fetch_array();
	        	$p_id = $get['p_id'];
	        	$dt_masuk = $getData[1];
	        	$dt_keluar = $getData[2]; 

	        	$masuk = StrToTime($getData[1]);
	        	$keluar = StrToTime($getData[2]);
	        	$range = $keluar-$masuk;
	        	$totalkerja = $range / (60*60);
	        	
	        	$hourmasuk = date('H', $masuk);
	        	$int_masuk = (int)$hourmasuk;
	        	$int_totalkerja = (int)$totalkerja;
	        	
	        	$terlambat = "Terlambat";
	        	$tepat = "Tepat";
	        	$jamkurang = "Jam Kurang";
	        	if($int_masuk >= 7){
	        		$sql = $con->query("INSERT INTO absensi(datetime_masuk, datetime_keluar, a_status, p_id)
	        							VALUES ('$dt_masuk','$dt_keluar', '$terlambat', '$p_id')");
	        	}elseif($int_totalkerja >= 9){
	        			$sql = $con->query("INSERT INTO absensi(datetime_masuk, datetime_keluar, a_status, p_id)
	        							VALUES ('$dt_masuk','$dt_keluar', '$tepat', '$p_id')");
	        		}else{
	        			$sql = $con->query("INSERT INTO absensi(datetime_masuk, datetime_keluar, a_status, p_id)
	        							VALUES ('$dt_masuk','$dt_keluar', '$jamkurang', '$p_id')");
	        		}
	        		
	         }
	         fclose($csvFile);	


	         echo "<script>
	            	window.location.href='index.php?page=masterabsensi';
	        	 </script>";

		 }else{
		 	 echo "<script>
	            	alert('Upload file gagal : masukkan file !!!);
	            	history.back();
	        	 </script>";
		 }
    }else{
    	echo "<script>
            	alert('Upload file gagal : hanya format file CSV !!!');
            	history.back();
        	 </script>";
    }

	$con->close();

?>
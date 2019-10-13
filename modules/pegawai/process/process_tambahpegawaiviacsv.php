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
	        	$nama = $getData[1];
	        	$alamat = $getData[2]; 
	        	$tempat_lahir = $getData[3];
	        	$tanggal_lahir = $getData[4];
	        	$jenis_kelamin = $getData[5];
	        	$status = $getData[6];
	        	$nomor_telp = $getData[7];
	        	$pendidikan = $getData[8];
	        	$l_id = $getData[9];

	        	$sql = $con->query("INSERT INTO pegawai(nip, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, status, nomor_telp, pendidikan, l_id)
	        							VALUES ('$nip','$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$status', '$nomor_telp', '$pendidikan', '$l_id')");
	        		
	         }
	         fclose($csvFile);	


	         echo "<script>
	            	window.location.href='index.php?page=masterpegawai';
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
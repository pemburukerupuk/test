<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';
	$sc_id = $_GET['sc_id'];
	$jumlah_cuti = $_POST['jumlah_cuti'];
	$status = $_POST['status'];

	$aktif = "Aktif";

	$checkstatus= $con->query("SELECT status FROM standarcuti WHERE status='$aktif' ");
	$result1 = $checkstatus->fetch_array();
	
	if($result1['status'] == $status){
		echo "<script>
				alert('Status Aktif sudah ada !!!');
				history.back();
			</script>";
		}else{

		$sql = $con->query("UPDATE standarcuti SET jumlah_cuti='$jumlah_cuti', status='$status' WHERE sc_id='$sc_id' ");
		if($sql){
			echo "<script>
                	alert('Update standar cuti sukses');
                	window.location.href='index.php?page=masterstandarcuti';
            	 </script>";
		}else{
			echo "<script>
            	alert('Update standar cuti gagal !!!');
            	history.back();
        	 </script>";
		}
	}
	$con->close();

?>
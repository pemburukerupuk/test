<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

	$sc_id = $_GET['sc_id'];

	$sql = "DELETE FROM standarcuti WHERE sc_id='$sc_id' ";
		if($con->query($sql)){
			echo "<script>
                	alert('Delete Standar cuti sukses');
                	window.location.href='index.php?page=masterstandarcuti';
            	 </script>";
		}else{
			echo "<script>
            	alert('Delete Standar cuti gagal !!!');
            	history.back();
        	 </script>";
		}
		
	$con->close();

?>
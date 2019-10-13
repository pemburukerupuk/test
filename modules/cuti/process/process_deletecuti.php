<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';

	$c_id = $_GET['c_id'];

	$sql = "DELETE FROM cuti WHERE c_id='$c_id' ";

		if($con->query($sql)){
			echo "<script>
                	alert('Delete Cuti sukses');
                	window.location.href='index.php?page=mastercuti';
            	 </script>";
		}else{
			echo "<script>
            	alert('Delete level gagal !!!');
            	history.back();
        	 </script>";
		}
		
	$con->close();

?>
<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';

	$p_id = $_GET['p_id'];
	$l_id = $_POST['l_id'];

	$sql = "UPDATE pegawai SET l_id='$l_id' WHERE p_id='$p_id' ";

	if($con->query($sql)){
		echo "<script>
            	alert('Update level sukses');
            	history.back();
        	 </script>";
	}else{
		echo "<script>
        	alert('Update level gagal !!!');
        	history.back();
    	 </script>";
	}
	
	$con->close();

?>
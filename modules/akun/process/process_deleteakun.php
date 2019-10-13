<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';
 	
	$u_id	= $_GET['u_id'];

	$sql = $con->query("DELETE FROM user WHERE u_id='$u_id' ");

	if($sql == 1){
			echo "<script>
            	alert('Delete akun sukses');
            	window.location.href='index.php?page=masterakun';
        	 </script>";
	}else{
		echo "<script>
            	alert('Delete akun gagal !!!');
            	history.back();
        	 </script>";
	}
		
	$con->close();
?>
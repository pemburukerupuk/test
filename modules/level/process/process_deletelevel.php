<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';

	$l_id = $_GET['l_id'];

	$sql = "DELETE FROM level WHERE l_id='$l_id' ";
		if($con->query($sql)){
			echo "<script>
                	alert('Delete level sukses');
                	window.location.href='index.php?page=masterlevel';
            	 </script>";
		}else{
			echo "<script>
            	alert('Delete level gagal !!!');
            	history.back();
        	 </script>";
		}
		
	$con->close();

?>
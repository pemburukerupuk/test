<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';

		if(isset($_POST['level'])){

			$l_id = $_GET['l_id'];
			$level = $_POST['level'];

			$sql = "UPDATE level SET level='$level' WHERE l_id='$l_id' ";
				if($con->query($sql)){
					echo "<script>
		                	alert('Update level sukses');
		                	window.location.href='index.php?page=masterlevel';
		            	 </script>";
				}else{
					echo "<script>
	                	alert('Update level gagal !!!');
	                	history.back();
	            	 </script>";
				}
		}else{
			echo "<script>
					alert('Semua kolom harus terisi, Coba lagi');
					history.back();
				</script>";
		}
		$con->close();

?>
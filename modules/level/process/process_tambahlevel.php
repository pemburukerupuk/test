<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

		if(isset($_POST['level'])){

		$level = $_POST['level'];

		$check_level= $con->query("SELECT level FROM level WHERE level='$level' ");
		$result	 	= $check_level->num_rows;
		
			if($result == 1){
				echo "<script>
						alert('Level sudah ada !!!');
						history.back();
					</script>";
			}else{

				$sql = "INSERT INTO level(level) VALUES ('$level') ";
					if($con->query($sql)){
						echo "<script>
			                	alert('Tambah level sukses');
			                	window.location.href='index.php?page=masterlevel';
			            	 </script>";
					}else{
						echo "<script>
		                	alert('Tambah level gagal !!!');
		                	history.back();
		            	 </script>";
					}
				}
		}else{
			echo "<script>
					alert('Semua kolom harus terisi, Coba lagi');
					history.back();
				</script>";
		}
		$con->close();

?>
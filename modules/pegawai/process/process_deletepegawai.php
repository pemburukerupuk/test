<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';
	$p_id = $_GET['p_id'];

		$get = $con->query("SELECT foto FROM pegawai WHERE p_id='$p_id' ");
		$result = $get->fetch_array();

		if(is_file("../storage/images/".$result['foto']))
				unlink("../storage/images/".$result['foto']);

		
		$delete = $con->query("DELETE FROM pegawai WHERE p_id='$p_id' " ); 
		$delete1 = $con->query("DELETE FROM user WHERE p_id='$p_id' " ); 
		$delete2 = $con->query("DELETE FROM absensi WHERE p_id='$p_id' " ); 
		$delete3 = $con->query("DELETE FROM cuti WHERE p_id='$p_id' " ); 


			if($delete){
					echo "<script>
							alert('Delete pegawai, akun, cuti, absensi Sukses');
							window.location='index.php?page=masterpegawai';
						</script>";
				}else{
					echo "<script>
							alert('Delete pegawai dan akun gagal, Coba lagi');
							history.back();
						</script>";
				}
	
?>
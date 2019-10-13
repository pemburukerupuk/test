<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';
		
	$jumlah_cuti = $_POST['jumlah_cuti'];
	$tahun = $_POST['tahun'];
	$status = "-";

		$check	= $con->query("SELECT tahun FROM standarcuti WHERE tahun='$tahun' ");
		$row = $check->num_rows;
		

		if($row == 1){
		echo "<script>
				alert('Tahun sudah ada !!!');
				history.back();
			</script>";
		}else{

			$insert = $con->query("INSERT INTO standarcuti (tahun, jumlah_cuti, status) VALUES ('$tahun','$jumlah_cuti', '$status') ");
			
			if($insert){
						echo "<script>
								alert('Tambah standar cuti sukses');
								window.location='index.php?page=masterstandarcuti';
							</script>";
					}else{
						echo "<script>
								alert('Tambah standar cuti gagal !!!');
								history.back();
							</script>";
					}
		}
		$con->close();

?>
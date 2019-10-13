<?php
  if($_SESSION['level'] == 'Pegawai'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

	$c_id = $_GET['c_id'];
	$p_id = $_POST['p_id'];
	$sc_id = $_POST['sc_id'];
	$standarcuti = $_POST['standarcuti'];
	$lama = $_POST['lama'];
	
	$aktif = "Terima";


	$sql = $con->query("SELECT lama, status_manager, status_hrd, sc_id FROM cuti WHERE p_id='$p_id' AND status_manager='$aktif' AND status_hrd='$aktif' AND sc_id='$sc_id'  ");

	if(isset($_POST['status_hrd'])){
		$tolak = "Tolak";
		$status_hrd = $_POST['status_hrd'];

		$total = "";
		while ($count = $sql->fetch_array()) {
			$total += $count['lama'];		
		}

		$sisa = $standarcuti-$total;

		$sisalagi = $sisa-$lama;

		if($sisalagi <= -1){
			$con->query("UPDATE cuti SET lama='$lama', status_manager='$tolak', status_hrd='$tolak', sc_id='$sc_id' WHERE c_id='$c_id' ");
			echo "<script>
					alert('Permohonan cuti ditolak karena berlebihan !!!');
					window.location='index.php?page=dk_acp';
				</script>";
		}else{
			$sql2 = $con->query("UPDATE cuti SET lama='$lama', status_hrd='$status_hrd', sc_id='$sc_id' WHERE c_id='$c_id' ");
			if($sql2){
				echo "<script>
						alert('Permohonan cuti diterima !!!');
						window.location='index.php?page=dk_acp';
					</script>";
			}else{
				echo "<script>
						alert('Permohonan cuti gagal diperbaharui !!!');
						history.back();
					</script>";
			}
		}
	}elseif(isset($_POST['status_manager'])){

		$status_manager = $_POST['status_manager'];
		$tolak1 = "Tolak";

		$total = "";
		while ($count = $sql->fetch_array()) {
			$total += $count['lama'];		
		}

		$sisa = $standarcuti-$total;

		$sisalagi = $sisa-$lama;

		if($sisalagi <= -1){
			$con->query("UPDATE cuti SET lama='$lama', status_manager='$tolak1', status_hrd='$tolak1', sc_id='$sc_id' WHERE c_id='$c_id' ");
			echo "<script>
					alert('Permohonan cuti ditolak karena berlebihan !!!');
					window.location='index.php?page=dk_acp';
				</script>";
		}else{
			$sql2 = $con->query("UPDATE cuti SET lama='$lama', status_manager='$status_manager', sc_id='$sc_id' WHERE c_id='$c_id' ");
			if($sql2){
				echo "<script>
						alert('Permohonan cuti diterima !!!');
						window.location='index.php?page=dk_acp';
					</script>";
			}else{
				echo "<script>
						alert('Permohonan cuti gagal diperbaharui !!!');
						history.back();
					</script>";
			}
		}
	}

	$con->close();

		
?>
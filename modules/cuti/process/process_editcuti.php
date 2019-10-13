<?php
  if($_SESSION['level'] != 'Administrator'){
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
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$lama = $_POST['lama'];
	$keperluan = $_POST['keperluan'];
	$status_manager = $_POST['status_manager'];
	$status_hrd = $_POST['status_hrd'];
	$aktif = "Terima";

	$sql = $con->query("SELECT lama, status_manager, status_hrd, sc_id FROM cuti WHERE p_id='$p_id' AND status_manager='$aktif' AND status_hrd='$aktif' AND sc_id='$sc_id'  ");

	
	$total = "";
	while ($count = $sql->fetch_array()) {
		$total += $count['lama'];		
	}

	$sisa = $standarcuti-$total;

	$sisalagi = $sisa-$lama;

	if($sisalagi <= -1){
		echo "<script>
				alert('Permohonan cuti ditolak karena berlebihan !!!');
				history.back();
			</script>";
	}else{
		$sql2 = $con->query("UPDATE cuti SET tanggal_mulai='$tanggal_mulai', tanggal_masuk='$tanggal_masuk', lama='$lama', keperluan='$keperluan', status_manager='$status_manager', status_hrd='$status_hrd', sc_id='$sc_id' WHERE c_id='$c_id' ");
		var_dump($sql2);
		if($sql2){
			echo "<script>
					alert('Permohonan cuti diterima !!!');
					window.location='index.php?page=mastercuti ';
				</script>";
		}else{
			echo "<script>
					alert('Permohonan cuti gagal diperbaharui !!!');
					history.back();
				</script>";
		}
	}

	$con->close();

		
?>
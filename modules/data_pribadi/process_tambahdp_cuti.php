<?php

	include '../cores/connect.php';	

	$p_id= $_GET['p_id'];
	$sc_id = $_POST['sc_id'];
	$standarcuti = $_POST['standarcuti'];
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$lama = $_POST['lama'];
	$keperluan = $_POST['keperluan'];
	$status_manager = "Tunggu";
	$status_hrd = "Tunggu";

	$sql = $con->query("INSERT INTO cuti (tanggal_mulai, tanggal_masuk, lama, keperluan, status_manager, status_hrd, p_id, sc_id) VALUES ('$tanggal_mulai', '$tanggal_masuk', '$lama', '$keperluan', '$status_manager', '$status_hrd', '$p_id', '$sc_id')  ");

		if($sql == 1){
			echo "<script>
                	alert('Tambah Permohonan cuti sukses');
                	window.location.href='index.php?page=dp_cuti';
            	 </script>";
		}else{
			echo "<script>
            	alert('Tambah Permohonan cuti gagal !!!');
            	history.back();
        	 </script>";
		}

	$con->close();

?>
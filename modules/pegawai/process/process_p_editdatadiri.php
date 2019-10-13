<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';
	
	$p_id = $_GET['p_id'];
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status = $_POST['status'];
	$nomor_telp = $_POST['nomor_telp'];
	$pendidikan = $_POST['pendidikan'];
	
	if(isset($_POST['ubahnip'])){
		$nipbaru = $_POST['nipbaru'];
		$check_nip = $con->query("SELECT nip FROM pegawai WHERE nip='$nipbaru' ");
		$result = $check_nip->num_rows;

		if($result == 1){
			echo "<script>
					alert('Nomor induk pegawai sudah digunakan !!!');
					history.back();
				</script>";
				}else{
		
		$sql = $con->query("UPDATE pegawai SET nip='$nipbaru', nama='$nama', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', status='$status', nomor_telp='$nomor_telp', pendidikan='$pendidikan' WHERE p_id='$p_id' ");

		if($sql == 1){
			echo "<script>
					alert('Update Data diri dengan nip sukses');
					history.back();
				</script>";
			}else{
			echo "<script>
					alert('Update Data diri dengan nip Gagal !!!');
					history.back();
				</script>";
				}
			}
	}else{
		$sql1 = $con->query("UPDATE pegawai SET nama='$nama', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', status='$status', nomor_telp='$nomor_telp', pendidikan='$pendidikan' WHERE p_id='$p_id' "); 		

		if($sql1 == 1){
			echo "<script>
					alert('Update Data diri tanpa nip sukses');
					history.back();
				</script>";
			}else{
			echo "<script>
					alert('Update Data diri tanpa nip Gagal !!!');
					history.back();
				</script>";
				}
	}

	$con->close();

		
?>
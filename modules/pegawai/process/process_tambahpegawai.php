<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

	if(isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['tempat_lahir']) && isset($_POST['tanggal_lahir']) && isset($_POST['jenis_kelamin']) && isset($_POST['status']) && isset($_POST['nomor_telp']) && isset($_POST['pendidikan']) && isset($_FILES['p_foto']) && isset($_POST['l_id'])){
		
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status = $_POST['status'];
	$nomor_telp = $_POST['nomor_telp'];
	$pendidikan = $_POST['pendidikan'];
	$l_id = $_POST['l_id'];
	$pfoto = $_FILES['p_foto']['name'];
	$tmp_foto = $_FILES['p_foto']['tmp_name'];

	$foto = date('dmYHis')."_"."nip=".$nip."_".$pfoto;
	$locationfoto = "../storage/images/".$foto;

		$check_nip	= $con->query("SELECT nip FROM pegawai WHERE nip='$nip' ");
		$result	 	= $check_nip->num_rows;

		if($result == 1){
		echo "<script>
				alert('NIP sudah ada !!!');
				history.back();
			</script>";
		}else{

			$uploadfoto = move_uploaded_file($tmp_foto, $locationfoto);

			if($uploadfoto){

			$insert = $con->query("INSERT INTO pegawai (nip, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, status, nomor_telp, pendidikan, foto, l_id) VALUES ('$nip','$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$status', '$nomor_telp', '$pendidikan', '$foto', '$l_id') ");
			
			if($insert){
						echo "<script>
								alert('Tambah pegawai sukses');
								window.location='index.php?page=masterpegawai';
							</script>";
					}else{
						echo "<script>
								alert('Tambah pegawai gagal !!!');
								history.back();
							</script>";
					}
		}else{
			echo "<script>
					alert('Upload Foto gagal !!!');
					history.back();
				</script>";
			}
		}	
	}else{
		echo "<script>
				alert('Semua kolom harus terisi !!!');
				history.back();
			</script>";
	}

?>
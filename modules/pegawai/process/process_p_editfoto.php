<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';

	$p_id = $_GET['p_id'];
	$nip = $_GET['nip'];

	
	if(isset($_POST['ubahfoto'])){
		$fotobaru = $_FILES['fotobaru']['name'];
			$tmp_fotobaru = $_FILES['fotobaru']['tmp_name'];	

			$fotobaru = date('dmYHis')."_"."nip=".$nip."_".$fotobaru;
			$locationfotobaru = "../storage/images/".$fotobaru;

			if(move_uploaded_file($tmp_fotobaru, $locationfotobaru)){

				$sql = $con->query("SELECT foto FROM pegawai WHERE p_id='$p_id' "); 
				$read	= $sql->fetch_array();

				if(is_file("../storage/images/".$read['foto']))
					unlink("../storage/images/".$read['foto']);

				$sql = $con->query("UPDATE pegawai SET foto='$fotobaru' WHERE p_id='$p_id' ");

				if($sql == 1){
					echo "<script>
							alert('Update Foto Sukses');
							history.back();
						</script>";
				}else{
					echo "<script>
							alert('Update Foto Gagal !!!');
							history.back();
						</script>";
				}

			}
	}else{
		echo "<script>
				alert('Ceklis dan masukkan foto jika ingin merubahnya !!!');
				history.back();
			</script>";
	}

	$con->close();

		
?>
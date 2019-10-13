<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }

	include '../cores/connect.php';

	 if(isset($_POST['p_id']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['c_password'])){
		
	$p_id		= strip_tags($_POST['p_id']);
	$username 	= strip_tags($_POST['username']);
	$email		= strip_tags($_POST['email']);
	$password	= strip_tags($_POST['password']);
	$c_password	= strip_tags($_POST['c_password']);

	if($password == $c_password){
		$p_id		= $con->real_escape_string($p_id);
		$username 	= $con->real_escape_string($username);
		$email		= $con->real_escape_string($email);
		$password   = $con->real_escape_string($password);

		$hash_password = password_hash($password, PASSWORD_DEFAULT);


		$check_email= $con->query("SELECT email FROM user WHERE email='$email' ");
		$result	 	= $check_email->num_rows;

			if($result == 1){
				echo "<script>
	                	alert('Email sudah digunakan !!!');
	                	history.back();
	            	 </script>";
			}else{
				$checklagi = $con->query("SELECT p_id FROM user WHERE p_id='$p_id' ");
				$result1	 	= $checklagi->num_rows;
					
				if($result1 == 1){
					echo "<script>
		                	alert('Pegawai sudah memiliki akun  !!!');
		                	history.back();
		            	 </script>";
				}else{

				$sql = "INSERT INTO user(username, email, password, create_at, p_id) VALUES ('$username', '$email', '$hash_password', NOW(), '$p_id') ";

					if($con->query($sql)){
						echo "<script>
			                	alert('Tambah akun pegawai sukses');
			                	window.location.href='index.php?page=masterakun';
			            	 </script>";
					}else{
						echo "<script>
		                	alert('register gagal !!!');
		                	history.back();
		            	 </script>";
					}
				}
			}
		}else{
		echo "<script>
            	alert('password tidak sama !!!');
            	history.back();
        	 </script>";	
	}
}else{
		echo "<script>
            	alert('Semua kolom harus terisi !!!');
            	history.back();
        	 </script>";	
	}

	$con->close();
?>
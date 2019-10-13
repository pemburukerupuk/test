<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
	include '../cores/connect.php';
 	
	$p_id		= $_GET['p_id'];
	$u_id		= $_GET['u_id'];
	$username 	= $_POST['username'];	
	$emailbaru 	= $_POST['emailbaru'];
	$passwordlama= $_POST['passwordlama'];
	$password	= $_POST['password'];
	$c_password	= $_POST['c_password'];

	$hash_password = password_hash($password, PASSWORD_DEFAULT);

	$sql	= $con->query("SELECT email, password FROM user WHERE u_id='$u_id' ");
	$row	= $sql->fetch_array();
	$count	= $sql->num_rows;

	if(password_verify($passwordlama, $row['password']) && $count == 1){
		if($password == $c_password){
			if(isset($_POST['ubahemail'])){
				if($row['email'] == $emailbaru){
						echo "<script>
			            	alert('Email sudah digunakan !!!');
			            	history.back();
			        	 </script>";
					}else{
						$sql = $con->query("UPDATE user SET username='$username', email='$emailbaru', password='$hash_password', update_at=NOW(), p_id='$p_id' WHERE u_id='$u_id' ");
						if($sql == 1){
							echo "<script>
					            	alert('Update akun dengan email sukses');
					            	history.back();
					        	 </script>";
						}else{
							echo "<script>
					            	alert('Update akun dengan email gagal !!!');
					            	history.back();
					        	 </script>";
						}
				}
			}else{
				$sql1 = $con->query("UPDATE user SET username='$username', password='$hash_password', update_at=NOW(), p_id='$p_id' WHERE u_id='$u_id' ");

				if($sql1 == 1){
					echo "<script>
			            	alert('Update akun tanpa email sukses');
			            	history.back();
			        	 </script>";
				}else{
					echo "<script>
			            	alert('Update akun tanpa email gagal !!!');
			            	history.back();
			        	 </script>";
				}
			}
		}else{
			echo "<script>
            	alert('Password tidak sama !!!');
            	history.back();
        	 </script>";
		}
	}else{
		echo "<script>
            	alert('Password lama salah !!!');
            	history.back();
        	 </script>";
	}
		
	$con->close();
?>
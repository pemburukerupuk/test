<?php
  if($_SESSION['level'] != 'Administrator'){
    echo "<script>
          alert('Tidak diperkenankan !!!');
          window.location='index.php?page=dashboard';
        </script>";
  }
?>
<!-- Example DataTables Card-->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Data Master</a></li>
      <li class="breadcrumb-item">
        <a href="index.php?page=masterakun">Master Akun</a>
      </li>
      <li class="breadcrumb-item active">Edit Akun</li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Form Edit Akun</div>
      <div class="card-body">
        <form action="index.php?page=process_editakun&u_id=<?php echo $_GET['u_id']; ?>" method="POST" enctype="multipart/form-data">
          <?php
              include '../cores/connect.php';
              $u_id = $_GET['u_id'];

              $result = $con->query("SELECT * FROM user WHERE u_id='$u_id' ");
              $row = $result->fetch_array();
              
          ?>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="username">Nama Pengguna</label>
                  <input class="form-control" id="username" name="username" type="text" value="<?php echo $row['username']; ?>" required>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" type="email" value="<?php echo $row['email']; ?>" disabled>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                  <label for="ubah_email">Ubah Email :</label>
              </div>
              <div class="col-md-6">
                  <input name="ubah_email" type="checkbox" id="check" value="true">
                  <label for="check">Saya Setuju</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="emailbaru">Email Baru</label>
                  <input class="form-control" id="emailbaru" name="emailbaru" type="email">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="passwordlama">Password Lama</label>
                  <input class="form-control" id="passwordlama" name="passwordlama" type="password" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="password">Password Baru</label>
                  <input class="form-control" id="password" name="password" type="password" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="c_password">Konfirmasi Password Baru</label>
                  <input class="form-control" id="c_password" name="c_password" type="password" required="">
              </div>
            </div>
          </div>
          
          <button class="btn btn-primary btn-block" type="submit">Update</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
        </form>
      </div>       
    </div>
</div>
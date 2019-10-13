<div class="container-fluid">
  <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Data Pribadi</li>
      <li class="breadcrumb-item active">Profil & Akun</li>
    </ol>
    <?php
      include '../cores/connect.php';
      $p_id = $_SESSION['p_id'];
      $result = $con->query("SELECT DISTINCT * FROM user RIGHT JOIN pegawai ON user.p_id=pegawai.p_id LEFT JOIN level ON pegawai.l_id=level.l_id WHERE pegawai.p_id='$p_id' ");
      $row = $result->fetch_array();
    ?>
  <div class="row">
    <div class="col-lg-4">
        <form action="index.php?page=process_p_editfoto&p_id=<?php echo $p_id; ?>&nip=<?php echo $row['nip']; ?>" method="POST"  enctype="multipart/form-data">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header"><b>Foto</b></div>
            <div class="card-body">
              <div class="form-group">
                <div class="form-row">
                  <div class="card mb-3">
                        <img class="card-img-top img-fluid w-100" name="fotolama" src="../storage/images/<?php echo $row['foto'] ?>" alt="">
                  </div>  
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                      <label for="ubahfoto">Ubah Foto:</label>
                  </div>
                  <div class="col-md-6">
                      <input name="ubahfoto" type="checkbox" id="check" value="true">
                      <label for="check">Saya Setuju</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="fotobaru">Foto Baru</label>
                    <input class="form-control" id="foto" name="fotobaru" type="file">
                  </div> 
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">
              <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Update Foto</button>
              <button class="btn btn-primary btn-block" type="reset">Reset</button>
            </div>     
          </div>
        </form>
    </div>


    <div class="col-lg-4">
        <form action="index.php?page=process_p_editdatadiri&p_id=<?php echo $p_id; ?>" method="POST">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header"><b>Data Diri</b></div>
            <div class="card-body">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="nip">Nomor Induk Pegawai</label>
                      <input class="form-control" id="nip" name="nip" type="text" required="" value="<?php echo $row['nip']; ?>" disabled>
                    </div>
                    
                  </div>
                </div>
            
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                        <label for="nama">Nama</label>
                        <input class="form-control" id="nama" name="nama" type="text" required="" value="<?php echo $row['nama']; ?>">
                    </div>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" id="alamat" name="alamat" type="text" required="" value="<?php echo $row['alamat']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" required="" value="<?php echo $row['tempat_lahir']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" required="" value="<?php echo $row['tanggal_lahir']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div><label for="jenis_kelamin">Jenis Kelamin</label></div>
                    <div class="col-md-12" required="">
                          <input name="jenis_kelamin" type="radio" id="radio_1" value="Laki-laki" <?php echo ($row['jenis_kelamin']=='Laki-laki')?'checked':'' ?>>
                          <label for="radio_1">Laki-laki</label>
                          <input name="jenis_kelamin" type="radio" id="radio_2" value="Wanita" <?php echo ($row['jenis_kelamin']=='Wanita')?'checked':''?>>
                          <label for="radio_2">Wanita</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div><label for="status">Status</label></div>
                    <div class="col-md-12" required="" disabled>
                      <?php
                          if($row['status'] == 'Menikah'){
                      ?>
                          <select class="form-control" name="status">
                            <option value="Menikah" selected="selected">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                          </select> 
                      <?php
                          }elseif($row['status'] == 'Belum Menikah'){
                      ?>
                          <select class="form-control" name="status">
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah" selected="selected">Belum Menikah</option>
                          </select> 
                      <?php
                          }
                      ?>   
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="nomor_telp">Nomor Telp</label>
                      <input class="form-control" id="nomor_telp" name="nomor_telp" type="number" required="" value="<?php echo $row['nomor_telp']; ?>">
                    </div> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="pendidikan">Pendidikan Terakhir</label>
                      <input class="form-control" id="pendidikan" name="pendidikan" type="text" required="" value="<?php echo $row['pendidikan']; ?>" >
                    </div> 
                  </div>
                </div>
            </div>
            <div class="card-footer small text-muted">
              <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Update Data Diri</button>
              <button class="btn btn-primary btn-block" type="reset">Reset</button>  
            </div>   
          </div>
        </form>
    </div>

    <div class="col-lg-4">
        
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <form action="index.php?page=process_p_editakun&p_id=<?php echo $p_id; ?>&u_id=<?php echo $row['u_id']; ?>" method="POST">
            <div class="card-header"><b>Akun</b></div>
              <div class="card-body">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="username">Username</label>
                        <input class="form-control" id="username" name="username" type="text" required="" value="<?php echo $row['username']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" required="" value="<?php echo $row['email']; ?>" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                        <label for="ubahemail">Ubah Email:</label>
                    </div>
                    <div class="col-md-6">
                        <input name="ubahemail" type="checkbox" id="check" value="true">
                        <label for="check">Saya Setuju</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="emailbaru">Email Baru</label>
                        <input class="form-control" id="emailbaru" name="emailbaru" type="emailbaru">
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
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="create_at">Create At</label>
                        <input class="form-control" id="create_at" name="create_at" type="datetime" required="" value="<?php echo $row['create_at']; ?>" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                         <label for="update_at">Update At</label>
                        <input class="form-control" id="update_at" name="update_at" type="datetime" required="" value="<?php echo $row['update_at']; ?>" disabled>
                    </div>
                  </div>
                </div>

            </div>
            <div class="card-footer small text-muted">
              <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Update Akun</button>
              <button class="btn btn-primary btn-block" type="reset">Reset</button>
            </div> 
            </form>    
          </div>
        
    </div>
  <!-- /.container-fluid-->
</div>
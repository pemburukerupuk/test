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
        <a href="index.php?page=masterpegawai">Master Pegawai</a>
      </li>
      <li class="breadcrumb-item active">Tambah Pegawai</li>
      <hr>
      <li>
        <a href="index.php?page=masterpegawai"><button>Kembali</button></a>
      </li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Form Tambah Pegawai</div>
      <div class="card-body">
        <form action="index.php?page=process_tambahpegawai" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="nip">Nomor Induk Pegawai</label>
                <input class="form-control" id="nip" name="nip" type="text" required="">
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="nama">Nama</label>
                  <input class="form-control" id="nama" name="nama" type="text" required="">
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="alamat">Alamat</label>
                  <input class="form-control" id="alamat" name="alamat" type="text" required="" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                   <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div><label for="jenis_kelamin">Jenis Kelamin</label></div>
              <div class="col-md-12" required="">
                    <input name="jenis_kelamin" type="radio" id="radio_1" value="Laki-laki">
                    <label for="radio_1">Laki-laki</label>
                    <input name="jenis_kelamin" type="radio" id="radio_2" value="Wanita">
                    <label for="radio_2">Wanita</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div><label for="status">Status</label></div>
              <div class="col-md-12" required="">
                 <select class="form-control" name="status">
                      <option value="Menikah">Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                 </select>   
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="nomor_telp">Nomor Telp</label>
                <input class="form-control" id="nomor_telp" name="nomor_telp" type="number" required="">
              </div> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <input class="form-control" id="pendidikan" name="pendidikan" type="text" required="">
              </div> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="foto">Foto</label>
                <input class="form-control" id="foto" name="p_foto" type="file" required="">
              </div> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div><label for="l_id">Level</label></div>
              <div class="col-md-12" required="">
                 <select class="form-control" name="l_id">
                    <?php
                        include '../cores/connect.php';
                        $result = $con->query("SELECT * FROM level");

                        while($row = $result->fetch_array()){

                    ?>
                        <option value="<?php echo $row['l_id']; ?>"><?php echo $row['level'] ?></option>
                    <?php
                      }
                    ?>
                 </select>   
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Save</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
        </form>
      </div>       
    </div>
</div>


         
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
        <a href="index.php?page=mastercuti">Master Cuti</a>
      </li>
      <li class="breadcrumb-item active">Edit Cuti</li>
      <hr>
      <li>
        <a href="index.php?page=mastercuti"><button>Kembali</button></a>
      </li>
    </ol>

    <div class="card mb-3 col-md-6">
      <?php
        include '../cores/connect.php';
        $c_id = $_GET['c_id'];
        $sql = $con->query("SELECT DISTINCT * FROM cuti LEFT JOIN pegawai ON cuti.p_id=pegawai.p_id WHERE c_id='$c_id' ");
        $row = $sql->fetch_array();
      ?>
      <form action="index.php?page=process_editcuti&c_id=<?php echo $c_id; ?>" method="POST" enctype="multipart/form-data">
      <div class="card-header" align="center">Form Edit Cuti</div>
      <div class="card-body">
          <div class="form-group">
            <div class="form-row">
            <div><label for="p_id">Nomor Induk Pegawai</label></div>
              <div class="col-md-12" required="">
                 <select class="form-control" name="p_id" onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;" disabled="">
                        <option value="<?php echo $row['p_id']; ?>"><?php echo $row['nip']; ?></option>
                        <input class="form-control" id="p_id" name="p_id" type="hidden" required="" value="<?php echo $row['p_id']; ?>">
                 </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                   <label for="sc_id">Tahun Cuti</label>
                   <?php
                      $aktif = "Aktif";
                      $get = $con->query("SELECT * FROM standarcuti WHERE status='$aktif' ");
                      $result1 = $get->fetch_array();
                   ?>
                  <input class="form-control" id="sc_id" name="sc_id" type="text" required="" value="<?php echo $result1['tahun']; ?>" disabled>
                  <input class="form-control" id="sc_id" name="sc_id" type="hidden" required="" value="<?php echo $result1['sc_id']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                   <label for="standarcuti">Standar Cuti</label>
                  <input class="form-control" id="standarcuti" name="standarcuti" type="text" required="" value="<?php echo $result1['jumlah_cuti']; ?>" disabled>
                  <input class="form-control" id="standarcuti" name="standarcuti" type="hidden" required="" value="<?php echo $result1['jumlah_cuti']; ?>">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                   <label for="tanggal_mulai">Tanggal Mulai</label>
                  <input class="form-control" id="tanggal_mulai" name="tanggal_mulai" type="date" required="" value="<?php echo $row['tanggal_mulai']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                   <label for="tanggal_masuk">Tanggal Masuk</label>
                  <input class="form-control" id="tanggal_masuk" name="tanggal_masuk" type="date" required="" value="<?php echo $row['tanggal_masuk']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="lama">Lama (/Hari)</label>
                <input class="form-control" id="lama" name="lama" type="number" required="" value="<?php echo $row['lama']; ?>">
              </div> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="keperluan">Keperluan</label>
                <input class="form-control" id="keperluan" name="keperluan" type="text" required=""  value="<?php echo $row['keperluan']; ?>">
              </div> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div><label for="status_manager">Status Manager</label></div>
              <div class="col-md-12" required="">
                <?php
                  if($row['status_manager'] == 'Tunggu'){
                ?>
                    <select class="form-control" name="status_manager">
                      <option value="Tunggu" selected="selected">Tunggu</option>
                      <option value="Terima">Terima</option>
                      <option value="Tolak">Tolak</option>
                    </select>
                      <?php
                    }elseif ($row['status_manager'] == 'Terima') {
                      ?>
                    <select class="form-control" name="status_manager">
                      <option value="Tunggu">Tunggu</option>
                      <option value="Terima" selected="selected">Terima</option>
                      <option value="Tolak">Tolak</option>
                    </select>
                    <?php
                    }elseif ($row['status_manager'] == 'Tolak') {
                    ?>
                    <select class="form-control" name="status_manager">
                      <option value="Tunggu">Tunggu</option>
                      <option value="Terima">Terima</option>
                      <option value="Tolak" selected="selected">Tolak</option>
                    </select>
                      <?php
                    }
                      ?>  
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
            <div><label for="status_hrd">Status HRD</label></div>
              <div class="col-md-12" required="">
                <?php
                  if($row['status_hrd'] == 'Tunggu'){
                ?>
                    <select class="form-control" name="status_hrd">
                      <option value="Tunggu" selected="selected">Tunggu</option>
                      <option value="Terima">Terima</option>
                      <option value="Tolak">Tolak</option>
                    </select>
                      <?php
                    }elseif ($row['status_hrd'] == 'Terima') {
                      ?>
                    <select class="form-control" name="status_hrd">
                      <option value="Tunggu">Tunggu</option>
                      <option value="Terima" selected="selected">Terima</option>
                      <option value="Tolak">Tolak</option>
                    </select>
                    <?php
                    }elseif ($row['status_hrd'] == 'Tolak') {
                    ?>
                    <select class="form-control" name="status_hrd">
                      <option value="Tunggu">Tunggu</option>
                      <option value="Terima">Terima</option>
                      <option value="Tolak" selected="selected">Tolak</option>
                    </select>
                      <?php
                    }
                      ?>  
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Save</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
      </div>       
      </form>
    </div>
</div>


         
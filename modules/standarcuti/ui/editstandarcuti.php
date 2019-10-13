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
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item">
        <a href="index.php?page=masterstandarcuti">Master Standar Cuti</a>
      </li>
      <li class="breadcrumb-item active">Tambah Standar Cuti</li>
    </ol>

    <div class="card mb-3 col-md-6">
      <?php
            include '../cores/connect.php';
            $sc_id = $_GET['sc_id'];
            $sql = $con->query("SELECT * FROM standarcuti WHERE sc_id='$sc_id' ");
            $result = $sql->fetch_array();
          ?>
      <form action="index.php?page=process_editstandarcuti&sc_id=<?php echo $sc_id; ?>" method="POST">
      <div class="card-header" align="center">Form Edit Standar Cuti</div>
      <div class="card-body">
        
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="tahun">Tahun</label>
                <input class="form-control" id="tahun" name="tahun" type="number" required="" value="<?php echo $result['tahun']; ?>" disabled>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="jumlah_cuti">Jumlah Cuti</label>
                <input class="form-control" id="jumlah_cuti" name="jumlah_cuti" type="number" required="" value="<?php echo $result['jumlah_cuti']; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
              <div class="form-row">
              <div><label for="status">Status</label></div>
                <div class="col-md-12">
                  <?php
                      if($result['status'] == '-'){
                  ?>
                    <select class="form-control" name="status">
                      <option value="-" selected="selected">-</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                  <?php
                      }elseif($result['status'] == 'Aktif'){
                  ?>
                    <select class="form-control" name="status">
                      <option value="-">-</option>
                      <option value="Aktif" selected="selected">Aktif</option>
                      <option value="Tidak Aktif">Tidak Aktif</option> 
                    </select>
                  <?php
                      }elseif($result['status'] == 'Tidak Aktif'){
                  ?> 
                    <select class="form-control" name="status">  
                      <option value="-">-</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Tidak Aktif" selected="selected">Tidak Aktif</option>
                    </select>
                  <?php
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
            <div class="card-footer small text-muted">
              <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Save</button>
              <button class="btn btn-primary btn-block" type="reset">Reset</button>
            </div> 
        </form>
      </div>       
</div>


         
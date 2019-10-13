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
        <a href="index.php?page=masterstandarcuti">Master Standar Cuti</a>
      </li>
      <li class="breadcrumb-item active">Tambah Standar Cuti</li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Form Tambah Standar Cuti</div>
      <div class="card-body">
        <form action="index.php?page=process_tambahstandarcuti" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="jumlah_cuti">Jumlah Cuti</label>
                <input class="form-control" id="jumlah_cuti" name="jumlah_cuti" type="number" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="tahun">Tahun</label>
                <input class="form-control" id="tahun" name="tahun" type="number" required="">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Save</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
        </form>
      </div>       
    </div>
</div>


         
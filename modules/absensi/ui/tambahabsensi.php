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
        <a href="index.php?page=masterabsensi">Master Absensi</a>
      </li>
      <li class="breadcrumb-item active">Tambah Absensi</li>
      <hr>
      <li>
        <a href="index.php?page=masterabsensi"><button>Kembali</button></a>
      </li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Tambah Absensi Upload File</div>
      <div class="card-body">
        <form action="index.php?page=process_tambahabsensi" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="file">File (Format : CSV)</label>
                <input class="form-control" id="file" name="file" type="file" required="">
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">
              <button class="btn btn-primary btn-block" type="submit" onclick="return confirm('Apakah Anda Setuju ?'); ">Upload</button>
              <button class="btn btn-primary btn-block" type="reset">Reset</button>
          </div>
        </form>
      </div>       
    </div>
</div>


         
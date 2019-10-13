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
        <a href="index.php?page=masterlevel">Master Level</a>
      </li>
      <li class="breadcrumb-item active">Tambah Level</li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Form Tambah Level</div>
      <div class="card-body">
      <?php
        include '../cores/connect.php';
        $l_id   = $_GET['l_id'];
        $result = $con->query("SELECT * FROM level WHERE l_id='$l_id' ");
        $row    = $result->fetch_array(); 
      ?>
        <form action="index.php?page=process_editlevel&l_id=<?php echo $l_id; ?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="level">Level</label>
                <input class="form-control" id="level" name="level" type="text" required="" value="<?php echo $row['level']; ?>">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Update</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
        </form>
      </div>       
    </div>
</div>


         
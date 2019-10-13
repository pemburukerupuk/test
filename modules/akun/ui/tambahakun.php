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
      <li class="breadcrumb-item active">Tambah Akun</li>
    </ol>

    <div class="card mb-3 col-md-6">
      <div class="card-header" align="center">Form Tambah Akun</div>
      <div class="card-body">
        <form action="index.php?page=process_tambahakun" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
            <div><label for="p_id">Nomor Induk Pegawai</label></div>
              <div class="col-md-12" required="">
                 <select class="form-control" name="p_id" onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
                    <?php
                        include '../cores/connect.php';
                        $result = $con->query("SELECT p_id, nip FROM pegawai");

                        while($row = $result->fetch_array()){

                    ?>
                        <option value="<?php echo $row['p_id']; ?>"><?php echo $row['nip']; ?></option>
                    <?php
                      }
                    ?>
                 </select>
              </div>
            </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="username">Nama Pengguna</label>
                  <input class="form-control" id="username" name="username" type="text" required="">
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" type="email" required="" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="password">Password</label>
                  <input class="form-control" id="password" name="password" type="password" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <label for="c_password">Konfirmasi Password</label>
                  <input class="form-control" id="c_password" name="c_password" type="password" required="">
              </div>
            </div>
          </div>
          
          <button class="btn btn-primary btn-block" type="submit">Save</button>
          <button class="btn btn-primary btn-block" type="reset">Reset</button>
        </form>
      </div>       
    </div>
</div>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  var $s = $('select');

    var optionTop = $s.find('[value="5"]').offset().top;
    var selectTop = $s.offset().top;

    $s.scrollTop($s.scrollTop() + (optionTop - selectTop));

</script>


         
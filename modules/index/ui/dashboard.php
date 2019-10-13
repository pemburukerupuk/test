<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Dashboard
        </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <?php
            include '../cores/connect.php';
            $sql = $con->query("SELECT * FROM pegawai");
            $row = $sql->num_rows;
            $sql1 = $con->query("SELECT * FROM user");
            $row1 = $sql1->num_rows;
            $sql2 = $con->query("SELECT * FROM cuti");
            $row2 = $sql2->num_rows;
            $sql3 = $con->query("SELECT * FROM absensi");
            $row3 = $sql3->num_rows;
        ?>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Total Pegawai : <?php echo $row;  ?> Pegawai</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Total Akun : <?php echo $row1;  ?> Akun</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Total Cuti : <?php echo $row2;  ?> Cuti</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Total Absensi : <?php echo $row3;  ?> Absensi</div>
            </div>
          </div>
        </div>
      </div>

      <?php
          include 'chart.php';
        ?>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Cuti 7 Hari Kedepan  
        </div>
               
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Masuk</th>
                  <th>Lama</th>
                  <th>Keperluan</th>
                  <th>Status (Manager)</th>
                  <th>Status (HRD)</th>
                </tr>
              </thead>
              
              <tbody>
                <?php
                    include '../cores/connect.php';
                    $result = $con->query("SELECT * FROM cuti LEFT JOIN pegawai ON cuti.p_id=pegawai.p_id WHERE tanggal_mulai >= NOW() AND tanggal_mulai <= NOW() + INTERVAL 7 DAY ");
                    $no=1;
                    while($row = $result->fetch_array()){ 
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nip'];  ?></td>
                  <td><?php echo $row['tanggal_mulai'];  ?></td>
                  <td><?php echo $row['tanggal_masuk'];  ?></td>
                  <td><?php echo $row['lama'];  ?></td>
                  <td><?php echo $row['keperluan'];  ?></td>
                  <td><?php echo $row['status_manager'];  ?></td>
                  <td><?php echo $row['status_hrd'];  ?></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
        
</div>


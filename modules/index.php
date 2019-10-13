<?php
  include '../cores/connect.php';
  session_start();
  if (!isset($_SESSION['user_session'])) {
   header("Location: ../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Menu - SICA PT Geopatra</title>

  <!-- Custom CSS-->
  <link href="../assets/vendor/bootstrap/css/custom.css" rel="stylesheet">


  <!-- Bootstrap core CSS-->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php?page=dashboard">PT Geopatra Solusindo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php?page=dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <?php
          $level = $_SESSION['level'];
            if($level == 'Administrator') {
        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Data Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="index.php?page=masterpegawai">Master Pegawai</a>
            </li>
            <li>
              <a href="index.php?page=masterakun">Master Akun</a>
            </li>
            <li>
              <a href="index.php?page=masterlevel">Master Level</a>
            </li>
            <li>
              <a href="index.php?page=masterstandarcuti">Master Standar Cuti</a>
            </li>
            <li>
              <a href="index.php?page=mastercuti">Master Cuti</a>
            </li>
            <li>
              <a href="index.php?page=masterabsensi">Master Absensi</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php?page=dk_acp">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Approval Cuti Pegawai</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Data Pribadi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents1">
            <li>
              <a href="index.php?page=dp_profile">Profile & Akun</a>
            </li>
            <li>
              <a href="index.php?page=dp_cuti">Cuti</a>
            </li>
            <li>
              <a href="index.php?page=dp_absensi">Absensi</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php?page=masterlaporan">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan Pegawai</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php?page=masterlaporanabsensi">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan Absensi</span>
          </a>
        </li>
        <?php } elseif ($level == 'Manager') { ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="index.php?page=dk_acp">
                <i class="fa fa-fw fa-link"></i>
                <span class="nav-link-text">Approval Cuti Pegawai</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Data Pribadi</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents2">
                <li>
                  <a href="index.php?page=dp_profile">Profil & Akun</a>
                </li>
                <li>
                  <a href="index.php?page=dp_cuti">Cuti</a>
                </li>
                <li>
                  <a href="index.php?page=dp_absensi">Absensi</a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-sitemap"></i>
                  <span class="nav-link-text">Data Umum</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents3">
                  <li>
                    <a href="index.php?page=du_pegawai">Pegawai</a>
                  </li>
                  <li>
                    <a href="index.php?page=du_cuti">Cuti</a>
                  </li>
                  <li>
                    <a href="index.php?page=du_absensi">Absensi</a>
                  </li>
                </ul>
              </li>
        <?php } elseif ($level == 'Pegawai') { ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Data Pribadi</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents4">
              <li>
                <a href="index.php?page=dp_profile">Profile & Akun</a>
              </li>
              <li>
                <a href="index.php?page=dp_cuti">Cuti</a>
              </li>
              <li>
                <a href="index.php?page=dp_absensi">Absensi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-sitemap"></i>
                <span class="nav-link-text">Data Umum</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents5">
                <li>
                  <a href="index.php?page=du_pegawai">Pegawai</a>
                </li>
                <li>
                  <a href="index.php?page=du_cuti">Cuti</a>
                </li>
                <li>
                  <a href="index.php?page=du_absensi">Absensi</a>
                </li>
              </ul>
            </li>
        <?php } ?>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link">
            <i></i>Selamat Datang, Email : <?php echo $_SESSION['email'];  ?> - Nama : <?php echo $_SESSION['nama'];  ?> - Level : <?php echo $_SESSION['level'];  ?>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <?php
        include 'page.php';
    ?>
  </div>

    <!-- /.container-fluid-->
    
    <?php
        include 'index/ui/footer.php';
    ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pertanyaan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin Keluar ???</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" href="../logout.php?logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../assets/js/sb-admin-datatables.min.js"></script>
    <script src="../assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

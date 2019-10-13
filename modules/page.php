<?php
$page = !empty($_GET['page']) ? $_GET['page'] : '';
switch($page) {
    case '':
        include 'index/ui/dashboard.php';
        break;
    case 'dashboard':
        include 'index/ui/dashboard.php';
        break;

    case 'tambahpegawaiviacsv':
        include 'pegawai/ui/tambahpegawaiviacsv.php';
        break;
    case 'process_tambahpegawaiviacsv':
        include 'pegawai/process/process_tambahpegawaiviacsv.php';
        break;

    case 'masterpegawai':
        include 'pegawai/ui/masterpegawai.php';
        break;
    case 'tambahpegawai':
        include 'pegawai/ui/tambahpegawai.php';
        break;
    case 'process_tambahpegawai':
        include 'pegawai/process/process_tambahpegawai.php';
        break;
    case 'editpegawai':
        include 'pegawai/ui/editpegawai.php';
        break;
    case 'process_p_editfoto':
        include 'pegawai/process/process_p_editfoto.php';
        break;
    case 'process_p_editdatadiri':
        include 'pegawai/process/process_p_editdatadiri.php';
        break;
    case 'process_p_editlevel':
        include 'pegawai/process/process_p_editlevel.php';
        break;
    case 'process_p_editakun':
        include 'pegawai/process/process_p_editakun.php';
        break;
    case 'process_deletepegawai':
        include 'pegawai/process/process_deletepegawai.php';
        break;

    case 'masterakun':
        include 'akun/ui/masterakun.php';
        break;
    case 'tambahakun':
        include 'akun/ui/tambahakun.php';
        break;
    case 'process_tambahakun':
        include 'akun/process/process_tambahakun.php';
        break;
    case 'editakun':
        include 'akun/ui/editakun.php';
        break;
    case 'process_editakun':
        include 'akun/process/process_editakun.php';
        break;
    case 'process_deleteakun':
        include 'akun/process/process_deleteakun.php';
        break;

    case 'masterlevel':
        include 'level/ui/masterlevel.php';
        break;
    case 'tambahlevel':
        include 'level/ui/tambahlevel.php';
        break;
    case 'process_tambahlevel':
        include 'level/process/process_tambahlevel.php';
        break;
    case 'editlevel':
        include 'level/ui/editlevel.php';
        break;
    case 'process_editlevel':
        include 'level/process/process_editlevel.php';
        break;
    case 'process_deletelevel':
        include 'level/process/process_deletelevel.php';
        break;

    case 'masterstandarcuti':
        include 'standarcuti/ui/masterstandarcuti.php';
        break;
    case 'tambahstandarcuti':
        include 'standarcuti/ui/tambahstandarcuti.php';
        break;
    case 'process_tambahstandarcuti':
        include 'standarcuti/process/process_tambahstandarcuti.php';
        break;
    case 'editstandarcuti':
        include 'standarcuti/ui/editstandarcuti.php';
        break;
    case 'process_editstandarcuti':
        include 'standarcuti/process/process_editstandarcuti.php';
        break;
    case 'process_deletestandarcuti':
        include 'standarcuti/process/process_deletestandarcuti.php';
        break;

    case 'mastercuti':
        include 'cuti/ui/mastercuti.php';
        break;
    case 'tambahcuti':
        include 'cuti/ui/tambahcuti.php';
        break;
    case 'process_tambahcuti':
        include 'cuti/process/process_tambahcuti.php';
        break;
    case 'editcuti':
        include 'cuti/ui/editcuti.php';
        break;
    case 'process_editcuti':
        include 'cuti/process/process_editcuti.php';
        break;
    case 'process_deletecuti':
        include 'cuti/process/process_deletecuti.php';
        break;

    case 'masterabsensi':
        include 'absensi/ui/masterabsensi.php';
        break;
    case 'tambahabsensi':
        include 'absensi/ui/tambahabsensi.php';
        break;
    case 'process_tambahabsensi':
        include 'absensi/process/process_tambahabsensi.php';
        break;

    case 'dk_acp':
        include 'data_khusus/ui/dk_acp.php';
        break;
    case 'dk_editacp':
        include 'data_khusus/ui/dk_editacp.php';
        break;
    case 'process_dk_editacp':
        include 'data_khusus/process/process_dk_editacp.php';
        break;

    case 'dp_profile':
        include 'data_pribadi/dp_profile.php';
        break;
    case 'dp_cuti':
        include 'data_pribadi/dp_cuti.php';
        break;
    case 'tambahdp_cuti':
        include 'data_pribadi/tambahdp_cuti.php';
        break;
    case 'process_tambahdp_cuti':
        include 'data_pribadi/process_tambahdp_cuti.php';
        break;
    case 'dp_absensi':
        include 'data_pribadi/dp_absensi.php';
        break;

    case 'du_pegawai':
        include 'data_umum/du_pegawai.php';
        break;
    case 'du_cuti':
        include 'data_umum/du_cuti.php';
        break;
    case 'du_absensi':
        include 'data_umum/du_absensi.php';
        break;

    case 'masterlaporan':
        include 'laporan/masterlaporan.php';
        break;
    case 'masterlaporanabsensi':
        include 'laporan/masterlaporanabsensi.php';
        break;
    case 'detailabsensi':
        include 'laporan/detailabsensi.php';
        break;
    case 'detailtepat':
        include 'laporan/detailtepat.php';
        break;
    case 'detailterlambat':
        include 'laporan/detailterlambat.php';
        break;
    case 'detailjamkurang':
        include 'laporan/detailjamkurang.php';
        break;
    case 'detailtidakmasuk':
        include 'laporan/detailtidakmasuk.php';
        break;
}
?>
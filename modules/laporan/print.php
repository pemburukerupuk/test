<?php 
ob_start();  
include_once("../../cores/connect.php"); //buat koneksi ke database  
$p_id   = $_GET['p_id']; //kode berita yang akan dikonvert  
$result = $con->query("SELECT * FROM pegawai WHERE p_id = '$p_id' ");  
$row   = $result->fetch_array();

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Get PDF</title>
  </head>
  <body>

    <p align="center">
      <b>PT. Geopatra Solusindo Energi Pratama</b>
      <b>Telpon : (+62 21) 569 40 244</b>
      <b>Email : contact@geopatra.co.id</b><br>
      <b>Geopatra Building</b>
      <b>Jl. Tomang Raya 12F Jakarta Barat, 11430, Indonesia</b>
    </p>
    <hr>

  <table border="0">
    <tr>
      <td width="150">Foto</td>
      <td width="10">:</td>
      <td width="250"><img class="card-img-top img-fluid w-100" src="../../storage/images/<?php if($row['foto'] == 0){echo 'default.png';}else{ echo $row['foto']; } ?>" widht="100" height="100"></td>
    </tr>
    <tr>
      <td width="150">NIP</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['nip']; ?></td>
    </tr>
    <tr>
      <td width="150">Nama</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['nama']; ?></td>
    </tr>
    <tr>
      <td width="150">Alamat</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['alamat']; ?></td>
    </tr>
    <tr>
      <td width="150">Tempat, Tanggal Lahir</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['tempat_lahir']; echo ", "; $date = $row['tanggal_lahir']; $newDate = date("d F Y", strtotime($date)); echo "$newDate";  ?></td>
    </tr>
    <tr>
      <td width="150">Jenis Kelamin</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['jenis_kelamin']; ?></td>
    </tr>
    <tr>
      <td width="150">Status</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['status']; ?></td>
    </tr>
    <tr>
      <td width="150">Nomor Telp</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['nomor_telp']; ?></td>
    </tr>
    <tr>
      <td width="150">Pendidikan</td>
      <td width="10">:</td>
      <td width="250"><?php echo $row['pendidikan']; ?></td>
    </tr>
  </table>

  <p>Dengan ini saya menyatakan data ini dibuat dengan benar dan digunakan untuk kepentingan seperlunya.</p>

  <p align='right'>JAKARTA, <?php echo date('d-m-Y'); ?>
  <br>
  <br>
  <br>
  (<?php echo $row['nama'];  ?>)</p>


  </body>
</html>

<?php
$filename="ptgeopatra-pegawai_nip=".$row['nip'].".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 include '../../assets/html2pdf/html2pdf.class.php';
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
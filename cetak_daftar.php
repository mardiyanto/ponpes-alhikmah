<?php
include "koneksi.php";
$con=mysqli_query($koneksi,"SELECT * FROM daftar WHERE id_sesi=$_GET[id]");
$hasil=mysqli_fetch_array($con);
//menentukan hari
$a_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $a_hari[date("N")];
//menentukan tanggal
$tanggal = date ("j");
//menentukan bulan
$a_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $a_bulan[date("n")];
//menentukan tahun
$tahun = date("Y");

//dan untuk menampilkan nya dengan format contoh Jumat, 22 Februari 2013
// abil data QR Code
require_once 'qrcode/qrlib.php';
// Data yang akan dijadikan QR Code
$data = $hasil['id_sesi']; // Ganti dengan data yang diinginkan
// Nama berkas QR Code yang akan dihasilkan
$kode_daftar = $hasil['id_sesi'];
// Nama berkas QR Code yang akan dihasilkan
$filename = $kode_daftar . '.png';
// Path penyimpanan berkas QR Code
$filepath = 'uploads/qrcode/' . $filename;
// Ukuran dan level koreksi kesalahan QR Code
$size = 10;
$level = 'L';
// Generate QR Code
QRcode::png($data, $filepath, $level, $size);
?>

 
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style24 {
	font-size: 48px;
	color: #0824f7;
}
.style28 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
<head>
<title>Cetak Data</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style5 {font-size: 34px}
.style7 {font-size: 20px}
.style8 {font-size: 31px}
.style18 {font-size: 21px}
.style19 {
	font-size: 19px;
	font-weight: bold;
}
.style20 {font-size: 19px}
.style23 {
	font-size: 20px;
	font-style: italic;
	font-weight: bold;
}
.style27 {font-size: 40px; color: #006803; }
-->
</style>
</head>

<body onLoad="window.print()">
<p>&nbsp;</p>

<table width="980" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2" rowspan="2"><div align="center"></div>      
    <div align="right"></div>    
    <div align="right"><img src="foto/logopondok.png" height="140"></div></td>
    <td colspan="7" class="style5"><div align="center" class="style27">YAYASAN PONDOK PESANTREN </div>      
      <div align="center" class="style8"></div>      <div align="center" class="style8"></div>      
    <div align="center" class="style5"><span class="style8 style24"><strong>AL-HIDAYAH KEPUTRAN</strong></span></div></td>
  </tr>
  
  <tr>
    <td colspan="9" ><div align="center" class="style19">SMK / MTs MA'ARIF KEPUTRAN</div></td>
  </tr>
  <tr>
    <td colspan="9"><div align="center">==========================================================================================================</div></td>
  </tr>
  <tr>
    <td colspan="9"><div align="center">Alamat : Jl. Veteran No. 300 Desa Keputran Kec. Sukoharjo Kab. Pringsewu Kode Pos 35674</div></td>
  </tr>
  <tr>
    <td colspan="9"><div align="center">==========================================================================================================</div></td>
  </tr>
  <tr>
    <td width="72">&nbsp;</td>
    <td colspan="8"><p align="center" class="style28" style=" font-size: 18px;">FORMULIR PENDAFTARAN SANTRI BARU </p>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right"><strong><em>A.</em></strong></div></td>
    <td colspan="8"><span class="style23">Identitas Calon Santri </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Nomor Peserta</span></td>
    <td width="12"><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[no_daftar]";?></span></td>
    <td width="54">&nbsp;</td>
    <td width="244">&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Jenjang Pendaftaran </span></td>
    <td width="12"><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[jurusan]";?></span></td>
    <td width="54">&nbsp;</td>
    <td width="244">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Program </span></td>
    <td width="12"><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[program]";?></span></td>
    <td width="54">&nbsp;</td>
    <td width="244">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Nama Lengkap </span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[nama]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">NIK</span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[nik]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">NISN</span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[nisn]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Tempat Tanggal Lahir </span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[tempat_lahir]";?>, <?php echo"$hasil[tgl_lahir]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Jenis Kelamin </span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[jenis_kelamin]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Email</span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="3"><span class="style18"><?php echo"$hasil[email]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Alamat Lengkap </span></td>
    <td><div align="center" class="style18">:</div></td>
    <td colspan="5"><span class="style18"><?php echo"$hasil[alamat]";?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="59" class="style18">&nbsp;</td>
    <td width="139" class="style7"><div align="right" class="style18">RT/RW</div></td>
    <td class="style7"><div align="center" class="style18">:</div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[rt]";?>/<?php echo"$hasil[rw]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="style7"><div align="right" class="style18">Desa</div></td>
    <td class="style7"><div align="center" class="style18">:</div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[desa]";?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="style7"><div align="right" class="style18">Kecamatan</div></td>
    <td class="style7"><div align="center" class="style18">:</div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[kecamatan]";?></span></td>
    <td><span class="style18"></span></td>
    <td><span class="style18"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="style7"><div align="right" class="style18">Kota/Kabupaten</div></td>
    <td class="style7"><div align="center" class="style18">:</div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[kota]";?> <?php echo"$hasil[provinsi]";?></span></td>
    <td><span class="style18"></span></td>
    <td><span class="style18"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="style7"><div align="right" class="style18">
      <div align="left">No Telephone </div>
    </div></td>
    <td class="style7"><div align="center" class="style18"><strong>:</strong></div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[no_hp]";?></span></td>
    <td><span class="style18"></span></td>
    <td><span class="style18"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="style7"><div align="left" class="style18">Sekolah Asal </div></td>
    <td class="style7"><div align="center" class="style18">:</div></td>
    <td colspan="3" class="style7"><span class="style18"><?php echo"$hasil[asal_sekolah]";?></span></td>
    <td><span class="style18"></span></td>
    <td><span class="style18"></span></td>
  </tr>
  
  <tr>
    <td><div align="right"><strong><em>B.</em></strong></div></td>
    <td colspan="6" class="style7"><div align="left" class="style18"><strong><em>Identitas Orang Tua / Wali </em></strong></div>      </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Nama Ayah / wali </span></td>
    <td class="style18">:</td>
    <td colspan="3"><span class="style7"><span class="style18"><?php echo"$hasil[nama_ayah]";?></span></span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Nama Ibu / wali </span></td>
    <td class="style18">:</td>
    <td colspan="3"><span class="style7"><span class="style18"><?php echo"$hasil[nama_ibu]";?></span></span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style18">Pekerjaan Orang Tua </span></td>
    <td class="style18">:</td>
    <td colspan="3"><span class="style7"><span class="style18"><?php echo"$hasil[pekerjaan_ayah]";?></span></span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center" class="style18"></div></td>
    <td colspan="2"><p class="style20">Pringsewu  , <?php echo  $tanggal ." ". $bulan ." ". $tahun; ?></p>      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="7" align="center" valign="top"><span class="style18">
	
	<img src="uploads/foto/<?php echo"$hasil[foto]";?>" width="121"   border="1">
	
	
	</span></td>
    <td><span class="style18"></span></td>
    <td width="177" class="style7"><div align="center" class="style18">Yang Menerima </div></td>
    <td width="13" class="style18">&nbsp;</td>
    <td width="172" class="style7">&nbsp;</td>
    <td colspan="2"><div align="center" class="style18">Yang Mendaftar </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2" rowspan="4"><div align="center"><img src='<?php echo"$filepath";?>' width="121" alt='QR Code'></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style18"></span></td>
    <td colspan="3"><span class="style18"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style19">admin </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="center" class="style19">( <?php echo"$hasil[nama]"; ?>) </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
















<?php
  include '../koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  if($_SESSION['status'] != "administrator_logedin"){
    header("location:../login.php?alert=belum_login");
  }
///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='hapusartikel'){
  mysqli_query($koneksi,"DELETE FROM berita WHERE id_berita='$_GET[id_b]'");
  $b=$_GET['gbr'];
  $pathFile="../foto/data/$b";	   
  unlink($pathFile);
  echo "<script>window.location=('index.php?aksi=informasi')</script>";
}
elseif($_GET['aksi']=='hapushalaman'){
  mysqli_query($koneksi,"DELETE FROM berita WHERE id_berita='$_GET[id_b]'");
  $b=$_GET['gbr'];
  $pathFile="../foto/data/$b";	   
  unlink($pathFile);
  echo "<script>window.location=('index.php?aksi=halaman')</script>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
elseif($_GET['aksi']=='hapusgaleri'){
  mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$_GET[id_g]'");
  $b=$_GET['gbr'];
  $pathFile="../foto/galleri/$b";	   
  unlink($pathFile);
echo "<script>window.location=('index.php?aksi=galeri')</script>";
}
elseif($_GET['aksi']=='hapusalumni'){
  mysqli_query($koneksi,"DELETE FROM alumni WHERE id_alumni='$_GET[id_alumni]'");
  $b=$_GET['gbr'];
  $pathFile="../foto/alumni/$b";	   
  unlink($pathFile);
echo "<script>window.location=('index.php?aksi=alumni')</script>";
}
elseif($_GET['aksi']=='hapuspegawai'){
  mysqli_query($koneksi,"DELETE FROM pegawai WHERE id_pegawai='$_GET[id_pegawai]'");
  $b=$_GET['gbr'];
  $pathFile="../foto/pegawai/$b";	   
  unlink($pathFile);
echo "<script>window.location=('index.php?aksi=pegawai')</script>";
}
elseif($_GET['aksi']=='hapuskritik'){
  mysqli_query($koneksi,"DELETE FROM kritik  WHERE id_kritik='$_GET[id_kritik]'");
  echo "<script>window.location=('index.php?aksi=kritik')</script>";
  }
elseif($_GET['aksi']=='hapussubmenu'){
  mysqli_query($koneksi,"DELETE FROM submenu  WHERE id_sub='$_GET[id_sub]'");
  echo "<script>window.location=('index.php?aksi=submenu')</script>";
  }
elseif($_GET['aksi']=='hapusaset'){
mysqli_query($koneksi,"DELETE FROM aset  WHERE id_aset='$_GET[id_aset]'");
echo "<script>window.location=('index.php?aksi=aset')</script>";
}
elseif($_GET['aksi']=='hapusjabatan'){
mysqli_query($koneksi,"DELETE FROM jabatan  WHERE id_jabatan='$_GET[id_jabatan]'");
echo "<script>window.location=('index.php?aksi=jabatan')</script>";
}
elseif($_GET['aksi']=='hapusadmin'){
$data = mysqli_query($koneksi, "select * from user where user_id='$_GET[user_id]'");
$d = mysqli_fetch_assoc($data);
$foto = $d['user_foto'];
unlink("../gambar/user/$foto");
mysqli_query($koneksi, "delete from user where user_id='$_GET[user_id]'");
echo "<script>window.location=('index.php?aksi=admin')</script>";
}
elseif($_GET['aksi']=='hapuspegawai'){
  mysqli_query($koneksi,"DELETE FROM pegawai  WHERE id_pegawai='$_GET[id_pegawai]'");
  echo "<script>window.location=('index.php?aksi=pegawai')</script>";
  }
elseif($_GET['aksi']=='hapusberkas'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM pegawai WHERE  id_pegawai=$_GET[id_pegawai]");
    $t=mysqli_fetch_array($tebaru);
    $data = mysqli_query($koneksi, "select * from file where file_id='$_GET[file_id]'");
    $d = mysqli_fetch_assoc($data);
    $file = $d['file_name'];
    unlink("upload/$file");
    mysqli_query($koneksi, "delete from file where file_id='$_GET[file_id]'");
    echo "<script>window.location=('index.php?aksi=listuploadfile&id_pegawai=$t[id_pegawai]')</script>";
}
elseif($_GET['aksi']=='hapuskeluarga'){
  $tebaru=mysqli_query($koneksi," SELECT * FROM pegawai WHERE  id_pegawai=$_GET[id_pegawai]");
  $t=mysqli_fetch_array($tebaru);
  mysqli_query($koneksi,"DELETE FROM keluarga  WHERE id_keluarga='$_GET[id_keluarga]'");
  echo "<script>window.location=('index.php?aksi=listtunjangan&id_pegawai=$t[id_pegawai]')</script>";
  }
  elseif($_GET['aksi']=='hapustunjangan'){
    mysqli_query($koneksi,"DELETE FROM tunjangan  WHERE id_tunjangan='$_GET[id_tunjangan]'");
    mysqli_query($koneksi,"UPDATE pegawai SET status_pg='ada' WHERE id_pegawai='$_GET[id_pegawai]'"); 
    echo "<script>window.location=('index.php?aksi=tunjangan')</script>";
    } 
elseif($_GET['aksi']=='hapuspangku'){
      mysqli_query($koneksi,"DELETE FROM pemangku  WHERE 	id_pkjab='$_GET[id_pkjab]'");
      echo "<script>window.location=('index.php?aksi=pangku')</script>";
 }    
 

?>
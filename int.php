<?php
 include 'koneksi.php';
if($_GET['m']=='home'){
}
elseif ($_GET['m'] == 'daftar') {
    $length = 5; // Panjang angka acak yang diinginkan
    $bytes = openssl_random_pseudo_bytes($length);
    $tt = hexdec(bin2hex($bytes)); // Mengubah heksadesimal ke desimal
    $sesi= $tt + $_POST['id_daftar'];
    $check_query = "SELECT COUNT(*) as count FROM daftar WHERE email = '$_POST[email]'";
    $check_result = mysqli_query($koneksi, $check_query);
    $count = mysqli_fetch_assoc($check_result)['count'];
    if ($count > 0) {
        // Email sudah ada dalam database, tampilkan pesan kesalahan atau lakukan aksi yang sesuai
        echo "<script>window.alert('email anda sudah terdatar di sistem kami silahkan login atau reset passord anda ');
        window.location=('index.php#daftar')</script>";
    }
        // Setelah email terkirim, lanjutkan dengan kueri MySQL
        $password = md5($_POST['password']);
        $tgl_daftar =date("Y-m-d");
        $waktu = gmdate('H:i:s',time()+60*60*7);
        // Gunakan prepared statement atau sanitasi input untuk mencegah SQL Injection
        $no_daftar = mysqli_real_escape_string($koneksi, $_POST['no_daftar']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $program = mysqli_real_escape_string($koneksi, $_POST['program']);
        $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        // Query untuk memeriksa apakah email sudah ada di database
    
        $query = "INSERT INTO daftar (no_daftar, alamat, program, no_hp, nama, email, id_sesi, tgl_daftar, waktu) 
        VALUES ('$no_daftar', '$alamat', '$program', '$no_hp', '$nama', '$email', '$sesi', '$tgl_daftar','$waktu' )";
        mysqli_query($koneksi, $query);
        $id_daftar = mysqli_insert_id($koneksi);
        echo "<script>window.alert('Silahkan Lengkapi data..... ');
        window.location=('utama.php?aksi=biodata&id=$id_daftar')</script>";
}

elseif ($_GET['m'] == 'inputbiodata') {   
    // Mengambil id_daftar dari parameter GET
$id_daftar = mysqli_real_escape_string($koneksi, $_GET['id_daftar']);
// Mengambil data dari POST dan melakukan sanitasi input
$program = mysqli_real_escape_string($koneksi, $_POST['program']);
$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$warga_siswa = mysqli_real_escape_string($koneksi, $_POST['warga_siswa']);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$rt = mysqli_real_escape_string($koneksi, $_POST['rt']);
$rw = mysqli_real_escape_string($koneksi, $_POST['rw']);
$desa = mysqli_real_escape_string($koneksi, $_POST['desa']);
$kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
$kota = mysqli_real_escape_string($koneksi, $_POST['kota']);
$provinsi = mysqli_real_escape_string($koneksi, $_POST['provinsi']);
$kode_pos = mysqli_real_escape_string($koneksi, $_POST['kode_pos']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$nama_ayah = mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
$pendidikan_ayah = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ayah']);
$pekerjaan_ayah = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']);
$penghasilan_ayah = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ayah']);
$no_hp_ayah = mysqli_real_escape_string($koneksi, $_POST['no_hp_ayah']);
$nama_ibu = mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
$pendidikan_ibu = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ibu']);
$pekerjaan_ibu = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ibu']);
$penghasilan_ibu = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ibu']);
$no_hp_ibu = mysqli_real_escape_string($koneksi, $_POST['no_hp_ibu']);

// Mengunggah foto jika ada
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_name = $_FILES['foto']['name'];
    $foto_ext = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));

    // Hanya izinkan tipe file tertentu
    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    if (in_array($foto_ext, $allowed_extensions)) {
        $randomName = uniqid() . '.' . $foto_ext;
        $foto_path = 'uploads/foto/' . $randomName;
        move_uploaded_file($foto_tmp, $foto_path);
    } else {
        echo "<script>
                window.alert('Hanya file dengan format JPG, JPEG, dan PNG yang diperbolehkan.');
                window.history.back();
              </script>";
        exit;
    }
} else {
    $randomName = ''; // Atau tambahkan logika jika foto wajib
}

// Query untuk memperbarui data di tabel daftar
$query = "UPDATE daftar SET 
    program='$program', 
    nik='$nik', 
    nisn='$nisn', 
    warga_siswa='$warga_siswa', 
    jenis_kelamin='$jenis_kelamin', 
    tempat_lahir='$tempat_lahir', 
    tgl_lahir='$tgl_lahir', 
    jurusan='$jurusan', 
    alamat='$alamat', 
    rt='$rt', 
    rw='$rw', 
    desa='$desa', 
    kecamatan='$kecamatan', 
    kota='$kota', 
    provinsi='$provinsi', 
    kode_pos='$kode_pos', 
    no_hp='$no_hp', 
    nama_ayah='$nama_ayah', 
    pendidikan_ayah='$pendidikan_ayah', 
    pekerjaan_ayah='$pekerjaan_ayah', 
    penghasilan_ayah='$penghasilan_ayah', 
    no_hp_ayah='$no_hp_ayah', 
    nama_ibu='$nama_ibu', 
    pendidikan_ibu='$pendidikan_ibu', 
    pekerjaan_ibu='$pekerjaan_ibu', 
    penghasilan_ibu='$penghasilan_ibu', 
    no_hp_ibu='$no_hp_ibu'";

// Jika ada foto, tambahkan ke query
if ($randomName != '') {
    $query .= ", foto='$randomName'";
}

$query .= " WHERE id_daftar='$id_daftar'";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            window.alert('Data berhasil diperbarui');
            window.location.href = 'utama.php?aksi=suksesdaftar&id=$id_daftar';
          </script>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
}
elseif ($_GET['m'] == 'proseseditbiodata') {
   
// Mengambil id_daftar dari parameter GET
$id_daftar = mysqli_real_escape_string($koneksi, $_GET['id_daftar']);

// Mengambil data dari POST dan melakukan sanitasi input
$program = mysqli_real_escape_string($koneksi, $_POST['program']);
$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$warga_siswa = mysqli_real_escape_string($koneksi, $_POST['warga_siswa']);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$rt = mysqli_real_escape_string($koneksi, $_POST['rt']);
$rw = mysqli_real_escape_string($koneksi, $_POST['rw']);
$desa = mysqli_real_escape_string($koneksi, $_POST['desa']);
$kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
$kota = mysqli_real_escape_string($koneksi, $_POST['kota']);
$provinsi = mysqli_real_escape_string($koneksi, $_POST['provinsi']);
$kode_pos = mysqli_real_escape_string($koneksi, $_POST['kode_pos']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$nama_ayah = mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
$pendidikan_ayah = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ayah']);
$pekerjaan_ayah = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']);
$penghasilan_ayah = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ayah']);
$no_hp_ayah = mysqli_real_escape_string($koneksi, $_POST['no_hp_ayah']);
$nama_ibu = mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
$pendidikan_ibu = mysqli_real_escape_string($koneksi, $_POST['pendidikan_ibu']);
$pekerjaan_ibu = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ibu']);
$penghasilan_ibu = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ibu']);
$no_hp_ibu = mysqli_real_escape_string($koneksi, $_POST['no_hp_ibu']);

// Mengunggah foto jika ada
$randomName = '';
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_name = $_FILES['foto']['name'];
    $foto_ext = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));

    // Hanya izinkan tipe file tertentu
    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    if (in_array($foto_ext, $allowed_extensions)) {
        $randomName = uniqid() . '.' . $foto_ext;
        $foto_path = 'uploads/foto/' . $randomName;

        // Mengambil nama file foto lama dari database
        $result = mysqli_query($koneksi, "SELECT foto FROM daftar WHERE id_daftar='$id_daftar'");
        $data = mysqli_fetch_assoc($result);
        $old_foto = $data['foto'];

        // Menghapus file foto lama jika ada
        if ($old_foto && file_exists('uploads/foto/' . $old_foto)) {
            unlink('uploads/foto/' . $old_foto);
        }

        // Mengunggah foto baru
        move_uploaded_file($foto_tmp, $foto_path);
    } else {
        echo "<script>
                window.alert('Hanya file dengan format JPG, JPEG, dan PNG yang diperbolehkan.');
                window.history.back();
              </script>";
        exit;
    }
}

// Query untuk memperbarui data di tabel daftar
$query = "UPDATE daftar SET 
    program='$program', 
    nik='$nik', 
    nisn='$nisn', 
    warga_siswa='$warga_siswa', 
    jenis_kelamin='$jenis_kelamin', 
    tempat_lahir='$tempat_lahir', 
    tgl_lahir='$tgl_lahir', 
    jurusan='$jurusan', 
    alamat='$alamat', 
    rt='$rt', 
    rw='$rw', 
    desa='$desa', 
    kecamatan='$kecamatan', 
    kota='$kota', 
    provinsi='$provinsi', 
    kode_pos='$kode_pos', 
    no_hp='$no_hp', 
    nama_ayah='$nama_ayah', 
    pendidikan_ayah='$pendidikan_ayah', 
    pekerjaan_ayah='$pekerjaan_ayah', 
    penghasilan_ayah='$penghasilan_ayah', 
    no_hp_ayah='$no_hp_ayah', 
    nama_ibu='$nama_ibu', 
    pendidikan_ibu='$pendidikan_ibu', 
    pekerjaan_ibu='$pekerjaan_ibu', 
    penghasilan_ibu='$penghasilan_ibu', 
    no_hp_ibu='$no_hp_ibu'";

// Jika ada foto, tambahkan ke query
if ($randomName != '') {
    $query .= ", foto='$randomName'";
}

$query .= " WHERE id_daftar='$id_daftar'";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            window.alert('Data berhasil diperbarui');
            window.location.href = 'utama.php?aksi=suksesdaftar&id=$id_daftar';
          </script>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
}
elseif ($_GET['m'] == 'login') {
    // Ambil nilai dari form login
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // Buat query untuk memeriksa email dan password di tabel daftar
    $stmt = $koneksi->prepare("SELECT * FROM daftar WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    // Lakukan eksekusi query
    $stmt->execute();
    // Ambil hasil dari query
    $result = $stmt->get_result();
    // Periksa apakah ada hasil
    if ($result->num_rows > 0) {
        // Jika berhasil, simpan data ke dalam session
        session_start();
        $data = $result->fetch_assoc();
        $_SESSION['logged_in'] = true;
        $_SESSION['id_daftar'] = $data['id_daftar'];
        $_SESSION['id_sesi'] = $data['id_sesi'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['foto'] = $data['foto'];
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "user";
        echo "<script>window.alert('login sukses'); window.location=('mhslog/index.php?aksi=home')</script>";
        exit();
    } else {
        echo "<script>window.alert('Email atau password salah'); window.location=('utama.php?aksi=login')</script>";

    }

    // Tutup statement dan koneksi database
    $stmt->close();

}

?>
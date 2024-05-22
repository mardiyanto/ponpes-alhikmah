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
        echo "<script>window.alert('Silahkan Lengkapi data dan cek email..... ');
        window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
}

elseif ($_GET['m'] == 'inputbiodata') {
    // Pastikan form memiliki enctype="multipart/form-data"
    // Tambahkan input file untuk unggah foto di form HTML Anda
                // Ambil nilai lain dari form
                $program = $_POST['program'];
                $sesi = $_GET['id'];
                $jurusan = $_POST['jurusan'];
                // ... (lanjutkan dengan mengambil nilai lainnya)    
    // Validasi jika file foto telah diunggah
    if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/foto/"; // Direktori tempat menyimpan foto, pastikan direktori ini ada dan dapat diakses
        
        // Ambil informasi foto
        $fotoName = $_FILES["foto"]["name"];
        $fotoTmpName = $_FILES["foto"]["tmp_name"];
        $fotoSize = $_FILES["foto"]["size"];
        $fotoType = $_FILES["foto"]["type"];
        
        // Filter nama file jika diperlukan
        $fotoExtension = pathinfo($fotoName, PATHINFO_EXTENSION);
        $randomName = uniqid() . "." . $fotoExtension; // Membuat nama acak
        
        // Tentukan path dan nama file di server
        $targetFile = $targetDir . $randomName;
        
        // Izinkan format tertentu (misal: hanya JPG, JPEG, PNG, GIF)
        $allowedFormats = ["jpg", "jpeg", "png", "gif"];
  
        
        if (!in_array($fotoExtension, $allowedFormats)) {
            echo "<script>window.alert('Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan. '); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
        } else if ($fotoSize > 5000000) { // Validasi ukuran file (misal: maksimal 2MB)
            echo "<script>window.alert('Maaf, file terlalu besar..... '); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
        } else {
            // Coba unggah file ke direktori yang ditentukan
            if (move_uploaded_file($fotoTmpName, $targetFile)) {
                // Jika berhasil diunggah, lanjutkan dengan query update ke database

                // Update data di database, termasuk nama file foto
                $query = "UPDATE daftar SET foto='$randomName', program='$program', jurusan='$jurusan', jenis='$_POST[jenis]', jenis_kelamin='$_POST[jenis_kelamin]', 
                agama='$_POST[agama]', warga_siswa='$_POST[warga_siswa]', nik='$_POST[nik]', nisn='$_POST[nisn]', no_hp='$_POST[no_hp]', tempat_lahir='$_POST[tempat_lahir]', 
                tgl_lahir='$_POST[tgl_lahir]', asal_sekolah='$_POST[asal_sekolah]', desa='$_POST[desa]', rt='$_POST[rt]', rw='$_POST[rw]', kecamatan='$_POST[kecamatan]', 
                kota='$_POST[kota]', provinsi='$_POST[provinsi]', kode_pos='$_POST[kode_pos]', alamat='$_POST[alamat]', nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', 
                pendidikan_ayah='$_POST[pendidikan_ayah]', pendidikan_ibu='$_POST[pendidikan_ibu]', pekerjaan_ayah='$_POST[pekerjaan_ayah]', pekerjaan_ibu='$_POST[pekerjaan_ibu]', 
                penghasilan_ibu='$_POST[penghasilan_ibu]', no_hp_ayah='$_POST[no_hp_ayah]', no_hp_ibu='$_POST[no_hp_ibu]', transportasi='$_POST[transportasi]', 
                penghasilan_ayah='$_POST[penghasilan_ayah]' WHERE id_daftar='$_GET[id_daftar]'";
                
                // Eksekusi query
                mysqli_query($koneksi, $query);
                
                echo "<script>window.alert('update biodata berhasil'); window.location=('utama.php?aksi=suksesdaftar&id=$sesi')</script>";
            } else {
                echo "<script>window.alert('Maaf, terjadi kesalahan saat mengunggah file. '); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
            }
        }
    } else {
        echo "<script>window.alert('Anda belum memilih file foto atau terjadi kesalahan saat mengunggah.'); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
    }
}
elseif ($_GET['m'] == 'proseseditbiodata') {
    $program = $_POST['program'];
    $sesi = $_GET['id'];
    $id_jurusan = $_POST['id_jurusan'];

    // Cek apakah ada file gambar yang diunggah
    if (!empty($_FILES['foto']['name'])) {
// Menghapus gambar lama sebelum mengunggah yang baru
        $query_select = "SELECT foto FROM daftar WHERE id_daftar='$_GET[id_daftar]'";
        $result_select = mysqli_query($koneksi, $query_select);

        if ($result_select) {
            $row = mysqli_fetch_assoc($result_select);
            $old_photo = $row['foto'];
            unlink("uploads/foto/" . $old_photo); // Hapus gambar lama
        }
        // Unggah gambar baru
        $rand = rand();
        $allowed = ['gif', 'png', 'jpg', 'jpeg'];
        $filename = $_FILES['foto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $allowed)) {
            echo "<script>window.alert('Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan. '); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
            exit;
        }

        $targetDir = 'uploads/foto/';
        $targetFile = $targetDir . $rand . '_' . $filename;

        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
            echo "<script>window.alert('Maaf, terjadi kesalahan saat mengunggah file.'); window.location=('utama.php?aksi=biodata&id=$sesi')</script>";
            exit;
        }

        $x = $rand . '_' . $filename;
        mysqli_query($koneksi,"UPDATE daftar SET foto='$x',  program='$_POST[program]', id_jurusan='$_POST[id_jurusan]', jenis='$_POST[jenis]', jenis_kelamin='$_POST[jenis_kelamin]', 
        agama='$_POST[agama]', warga_siswa='$_POST[warga_siswa]', nik='$_POST[nik]', nisn='$_POST[nisn]', no_hp='$_POST[no_hp]', tempat_lahir='$_POST[tempat_lahir]', 
        tgl_lahir='$_POST[tgl_lahir]', asal_sekolah='$_POST[asal_sekolah]', desa='$_POST[desa]', rt='$_POST[rt]', rw='$_POST[rw]', kecamatan='$_POST[kecamatan]',kota='$_POST[kota]', 
        provinsi='$_POST[provinsi]', kode_pos='$_POST[kode_pos]', alamat='$_POST[alamat]', nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', pendidikan_ayah='$_POST[pendidikan_ayah]',pendidikan_ibu='$_POST[pendidikan_ibu]',
        pekerjaan_ayah='$_POST[pekerjaan_ayah]', pekerjaan_ibu='$_POST[pekerjaan_ibu]', penghasilan_ibu='$_POST[penghasilan_ibu]', no_hp_ayah='$_POST[no_hp_ayah]', no_hp_ibu='$_POST[no_hp_ibu]', transportasi='$_POST[transportasi]',penghasilan_ayah='$_POST[penghasilan_ayah]' 
        WHERE id_daftar='$_GET[id_daftar]'");
        echo "<script>window.alert('update biodata berhasil'); window.location=('utama.php?aksi=suksesdaftar&id=$sesi')</script>";
    } else {
        // Jika tidak ada file yang diunggah
        mysqli_query($koneksi,"UPDATE daftar SET  program='$_POST[program]', id_jurusan='$_POST[id_jurusan]', jenis='$_POST[jenis]', jenis_kelamin='$_POST[jenis_kelamin]', 
        agama='$_POST[agama]', warga_siswa='$_POST[warga_siswa]', nik='$_POST[nik]', nisn='$_POST[nisn]', no_hp='$_POST[no_hp]', tempat_lahir='$_POST[tempat_lahir]', 
        tgl_lahir='$_POST[tgl_lahir]', asal_sekolah='$_POST[asal_sekolah]', desa='$_POST[desa]', rt='$_POST[rt]', rw='$_POST[rw]', kecamatan='$_POST[kecamatan]',kota='$_POST[kota]', 
        provinsi='$_POST[provinsi]', kode_pos='$_POST[kode_pos]', alamat='$_POST[alamat]', nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', pendidikan_ayah='$_POST[pendidikan_ayah]',pendidikan_ibu='$_POST[pendidikan_ibu]',
        pekerjaan_ayah='$_POST[pekerjaan_ayah]', pekerjaan_ibu='$_POST[pekerjaan_ibu]', penghasilan_ibu='$_POST[penghasilan_ibu]', no_hp_ayah='$_POST[no_hp_ayah]', no_hp_ibu='$_POST[no_hp_ibu]', transportasi='$_POST[transportasi]',penghasilan_ayah='$_POST[penghasilan_ayah]' 
        WHERE id_daftar='$_GET[id_daftar]'");
        echo "<script>window.alert('update biodata berhasil'); window.location=('utama.php?aksi=suksesdaftar&id=$sesi')</script>";
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
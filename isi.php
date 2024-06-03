<?php

///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='home'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE id_berita=$_GET[id_berita]");
$t=mysqli_fetch_array($tebaru);
    echo" <!-- Page Header Start -->
    <div class='container-fluid page-header py-5 mb-5 wow fadeIn' data-wow-delay='0.1s'>
        <div class='container py-5'>
            <h1 class='display-3 text-white animated slideInRight'>$t[judul]</h1>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb animated slideInRight mb-0'>
                    <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
                    <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
                    <li class='breadcrumb-item active' aria-current='page'>$t[judul]</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class='container-fluid py-5'>
    <div class='container'>
        <div class='row g-5'>
            <div class='col-lg-5 col-md-6 wow fadeIn' data-wow-delay='0.1s' style='min-height: 400px;'>
                <div class='position-relative h-100'>
                    <img class='position-absolute w-100 h-100' src='foto/data/$t[gambar]' style='object-fit: cover;'>
                </div>
            </div>
            <div class='col-lg-7 col-md-6 wow fadeIn' data-wow-delay='0.5s'>
                <div class='section-header text-start pb-4'>
                    <h6 class='bg-white px-2 fw-semi-bold text-uppercase text-primary'>$k_k[nama]</h6>
                    <h1 class='display-5'>$t[judul]</h1>
                </div>
                $t[isi]
            </div>
        </div>
    </div>
</div>
    ";
}
elseif($_GET['aksi']=='informasi'){   
echo"<!-- Page Header Start -->
<div class='container-fluid page-header py-5 mb-5 wow fadeIn' data-wow-delay='0.1s'>
    <div class='container py-5'>
        <h1 class='display-3 text-white animated slideInRight'>Informasi</h1>
        <nav aria-label='breadcrumb'>
            <ol class='breadcrumb animated slideInRight mb-0'>
                <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
                <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Berita</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class='container-fluid py-5'>
<div class='container'>
    <div class='row g-5'>
        <div class='col-lg-8'>
            <div class='row g-3'>";
            $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='informasi' ORDER BY id_berita DESC LIMIT 4");              
while ($t=mysqli_fetch_array($tebaru)){
                
                echo"<div class='col-md-6 wow fadeIn' data-wow-delay='0.1s'>
                    <div class='blog-item bg-light position-relative'>
                        <a href class='position-absolute top-0 start-0 m-4 py-1 px-3 bg-primary text-dark fw-medium' style='z-index: 1;'>$t[jenis]</a>
                        <div class='overflow-hidden'>
                            <img class='img-fluid' src='foto/data/$t[gambar]' alt='Image'>
                        </div>
                        <div class='p-4'>
                            <div class='d-flex justify-content-between mb-3'>
                                <div class='d-flex align-items-center'>
                                    <img class='img-fluid me-2' src='tema/img/feature.png' width='30' height='30' alt>
                                    <small>admiin</small>
                                </div>
                                <div class='d-flex align-items-center'>
                                    <small class='ms-3'><i class='far fa-calendar-alt text-primary me-2'></i>$t[tanggal]</small>
                                </div>
                            </div>
                            <h5 class='fw-semi-bold lh-base mb-3'>$t[judul]</h5>
                            <a href='utama.php?aksi=detailberita&id_berita=$t[id_berita]' class='text-uppercase fw-medium' href>Read More <i class='bi bi-arrow-right'></i></a>
                        </div>
                    </div>
                </div>";
}
                echo"
                <!-- More blog items -->
            </div>
        </div>";
        include"kanan.php"; 
echo"
<!-- paginasi 
        <div class='col-12 wow fadeIn' data-wow-delay='0.1s'>
            <nav aria-label='Page navigation'>
                <ul class='pagination pagination-lg m-0'>
                    <li class='page-item disabled'>
                        <a class='page-link rounded-0' href='#' aria-label='Previous'>
                            <span aria-hidden='true'><i class='bi bi-arrow-left'></i></span>
                        </a>
                    </li>
                    <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a></li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                    <li class='page-item'>
                        <a class='page-link rounded-0' href='#' aria-label='Next'>
                            <span aria-hidden='true'><i class='bi bi-arrow-right'></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div>
</div>
</div>
";
}
elseif($_GET['aksi']=='detailberita'){   
    $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE id_berita=$_GET[id_berita] ");
$t=mysqli_fetch_array($tebaru);
    echo"<!-- Page Header Start -->
    <div class='container-fluid page-header py-5 mb-5 wow fadeIn' data-wow-delay='0.1s'>
        <div class='container py-5'>
            <h1 class='display-3 text-white animated slideInRight'>Detail Informasi</h1>
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb animated slideInRight mb-0'>
                    <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
                    <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
                    <li class='breadcrumb-item active' aria-current='page'>informasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class='container-fluid py-5'>
    <div class='container'>
        <div class='row g-5'>
            <div class='col-lg-8'>
            <img class='img-fluid w-100 mb-5' src='foto/data/$t[gambar]' alt=''>
            <h1 class='mb-4'>$t[judul]</h1>
           $t[isi]
            </div>";
            include"kanan.php";        
           
      echo"  </div>
    </div>
    </div>
    ";
    }
elseif($_GET['aksi']=='hubungi'){  
echo"<!-- Page Header Start -->
<div class='container-fluid page-header py-5 mb-5 wow fadeIn' data-wow-delay='0.1s'>
    <div class='container py-5'>
        <h1 class='display-3 text-white animated slideInRight'>Konta Kami</h1>
        <nav aria-label='breadcrumb'>
            <ol class='breadcrumb animated slideInRight mb-0'>
                <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
                <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Informasi Kontak Kami</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End --><!-- Contact Start -->
<div class='container-xxl py-5'>
    <div class='container'>
        <div class='row g-5 justify-content-center mb-5'>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-phone-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Nomor Handphone</h4>
                    <p class='mb-2'>+62 8137-9567-636</p>
                    <a class='btn btn-primary px-4' href='tel:+62 8137-9567-636'>Call Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.3s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-envelope-open fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Email Address</h4>
                    <p class='mb-4'>ponpes_alhidayahkeputran@gmail.com</p>
                    <a class='btn btn-primary px-4' href='ponpes_alhidayahkeputran@gmail.com'>Email Now <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
            <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.5s'>
                <div class='bg-light text-center h-100 p-5'>
                    <div class='btn-square bg-white rounded-circle mx-auto mb-4' style='width: 90px; height: 90px;'>
                        <i class='fa fa-map-marker-alt fa-2x text-primary'></i>
                    </div>
                    <h4 class='mb-3'>Office Address</h4>
                    <p class='mb-2'>$k_k[alamat]</p>
                    <a class='btn btn-primary px-4' href='https://maps.app.goo.gl/wo1AFQuFGtmvFKri6' target='blank'>Direction <i class='fa fa-arrow-right ms-2'></i></a>
                </div>
            </div>
        </div>
        <div class='row mb-5'>
            <div class='col-12 wow fadeInUp' data-wow-delay='0.1s'>
                <iframe class='w-100'
                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4524823018796!2d104.90447442498368!3d-5.347694544630967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4731b962dd44bb%3A0xe40d7d4efab593b9!2sPondok%20Pesantren%20Al%20Hidayah%20Pringsewu!5e0!3m2!1sid!2sid!4v1714456194268!5m2!1sid!2sid'
                frameborder='0' style='min-height: 450px; border:0;' allowfullscreen='' aria-hidden='false'
                tabindex='0'></iframe>
            </div>
        </div>
        <div class='row g-5'>
            <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.1s'>
                <p class='fw-medium text-uppercase text-primary mb-2'>Kontak Kami</p>
                <h1 class='display-5 mb-4'>Jika ada butuh informasi silahkan tinggalkan pesan di samping</h1>
                <p class='mb-4'>Informasi Konta Kami merupakan informasi untuk kritik dan saran atau untuk meninggalkan pesan terhadap admin website kami</p>
                <div class='row g-4'>
                    <div class='col-6'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0 btn-square bg-primary rounded-circle'>
                                <i class='fa fa-phone-alt text-white'></i>
                            </div>
                            <div class='ms-3'>
                                <h6>Call Us</h6>
                                <span>+62 8137-9567-636</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0 btn-square bg-primary rounded-circle'>
                                <i class='fa fa-envelope text-white'></i>
                            </div>
                            <div class='ms-3'>
                                <h6>Mail Us</h6>
                                <span>ponpes_alhidayahkeputran@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.5s'>
                <form method='post' action='utama.php?aksi=inputhubungi'>
                    <div class='row g-3'>
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='nama' placeholder='Nama Anda'>
                                <label for='name'>Nama Lengkap</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <input type='email' class='form-control' name='email' placeholder='Email anda'>
                                <label for='email'>Email</label>
                            </div>
                        </div>
                        <div class='col-12'>
                            <div class='form-floating'>
                                <textarea class='form-control' placeholder='Isikan Pesan' name='pesan' style='height: 150px'></textarea>
                                <label for='message'>Pesan</label>
                            </div>
                        </div>
                        <div class='col-12'>
                             <button type='submit' class='btn btn-primary py-3 px-5' >Kirim Pesan </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
}
elseif($_GET['aksi']=='inputhubungi'){ 
    mysqli_query($koneksi,"insert into kritik (nama,email,pesan) values ('$_POST[nama]','$_POST[email]','$_POST[pesan]')");  
    echo "<script>window.alert('terimakasih telah meninggalkan pesan di sini');
    window.location=('index.php')</script>";
}
elseif($_GET['aksi']=='galeri'){
echo"<!-- Page Header Start -->
<div class='container-fluid page-header py-5 mb-5 wow fadeIn' data-wow-delay='0.1s'>
    <div class='container py-5'>
        <h1 class='display-3 text-white animated slideInRight'>Galeri</h1>
        <nav aria-label='breadcrumb'>
            <ol class='breadcrumb animated slideInRight mb-0'>
                <li class='breadcrumb-item'><a href='index.php'>Beranda</a></li>
                <li class='breadcrumb-item'><a href='#'>Halaman</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Galeri Kami</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- Projects Start -->
    <div class='container-xxl py-5'>
        <div class='container'>
            <div class='text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
                <p class='fs-5 fw-bold text-primary'>Galeri</p>
                <h1 class='display-5 mb-5'>Galeri Podok Pesantren Kami</h1>
            </div>
           
            <div class='row g-4 portfolio-container'> ";
            $tebaru=mysqli_query($koneksi," SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 4");              
        while ($t=mysqli_fetch_array($tebaru)){
                
                echo"
            <div class='col-lg-4 col-md-6 portfolio-item first wow fadeInUp' data-wow-delay='0.1s'>
                    <div class='portfolio-inner rounded'>
                        <img class='img-fluid' src='foto/galleri/$t[gambar]' alt=''>
                        <div class='portfolio-text'>
                            <h4 class='text-white mb-4'>$t[judul]</h4>
                            <div class='d-flex'>
                                <a class='btn btn-lg-square rounded-circle mx-2' href='foto/galleri/$t[gambar]' data-lightbox='portfolio'><i class='fa fa-eye'></i></a>
                                <a class='btn btn-lg-square rounded-circle mx-2' href=''><i class='fa fa-link'></i></a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
              echo"
            </div>
        </div>
    </div>
    <!-- Projects End -->
";

}

?>
<?php 
if($_GET['aksi']=='biodata'){ 
    $tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_GET[id] ");
    $t=mysqli_fetch_array($tebaru); ?>
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Lengkapi Biodata <?php echo"$t[nama]"; ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Biodata <?php echo"$t[nama]"; ?> </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Carousel End -->
    
    
     <!-- Courses Start -->
     <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Biodata <?php echo"$t[nama]"; ?> dengan nomor daftar <?php echo"$t[no_daftar]"; ?> </h6>
                    <h1 class="mb-5">Biodata <?php echo"$t[nama]"; ?> </h1>
                </div>
                <form method='post' action='int.php?m=inputbiodata&id_daftar=<?php echo"$t[id_daftar]"; ?>'  enctype="multipart/form-data">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp kotak-border" data-wow-delay="0.1s">
                    <h6 >A.Data Diri dan Pilihan Jurusan : </h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  value="<?php echo"$t[nama]"; ?>" >
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control"  value="<?php echo"$t[email]"; ?>">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label >Program Pondok</label>
                                        <select class="form-selec" name="program">
                                            <option value="<?php echo"$t[program]"; ?>"><?php echo"$t[program]"; ?></option>
                                            <option value='Salafi'>Salafi</option>
                                            <option value="Tahfidzul Qur'an">Tahfidzul Qur'an</option>
                                        </select>
                                </div>
                                <div class='col-6'>
                                     <label >Pilih Jenjang</label>
                                         <select class='form-selec' name='jurusan' required>
                                             <option value='0'>--Pilih Jenjang--</option>
                                             <option value='HANYA MONDOK'>HANYA MONDOK</option>
                                             <option value="SMK MA'ARIF KEPUTRAN">SMK MA'ARIF KEPUTRAN</option>
                                             <option value="MTs MA'ARIF KEPUTRAN">MTs MA'ARIF KEPUTRAN</option>
                                         </select>
                                 </div>
                                 <div class='col-6'>
                                     <label >Jenis Kelamin</label>
                                         <select class='form-selec' name='jenis_kelamin' required>
                                             <option value='0'>--Pilih Jenis Kelamin--</option>
                                             <option value='laki-laki'>Laki-Laki</option>
                                             <option value='perempuan'>Perempuan</option>
                                         </select>
                                 </div>
                                 
                                 <div class='col-6'>
                                     <label >Warga Negara</label>
                                         <select class='form-selec' name='warga_siswa' required>
                                             <option value='0'>--Pilih Jenis Kewarga Negaraan--</option>
                                             <option value='WNI'>Warga Negara Indonesia</option>
                                             <option value='WNA'>Warga Negara Asing</option>
    
                                         </select>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control"  name='nik' placeholder="NIK" required>
                                        <label for="email">NIK</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control"  name='nisn' placeholder="NISN" required>
                                        <label for="email">NISN</label>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name='no_hp' value="<?php echo"$t[no_hp]"; ?>" placeholder="Nomor WA/HP" required>
                                        <label for="name">Nomor WA/HP</label>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name='tempat_lahir' placeholder="Tempat Lahir" required>
                                        <label for="email">Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control"  name='tgl_lahir' placeholder="Tanggal Lahir" required>
                                        <label for="email">Tanggal Lahir</label>
                                    </div>
                                </div> 
                                                  
                            </div>
                  
                    </div>
    
                    <div class="col-lg-4 col-md-6 wow fadeInUp kotak-border" data-wow-delay="0.3s">
                    <h6 >B.Detail alamat Pendaftar </h6>
                            <div class="row g-3">
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='desa' placeholder="Desa" required>
                                        <label for="email">Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='rt' placeholder="RT" required>
                                        <label for="email">RT</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='rw' placeholder="RW" required>
                                        <label for="email">RW</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='kecamatan' placeholder="Kecamatan" required>
                                        <label for="email">Kecamatan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='kota' placeholder="Kabupaten/Kota" required>
                                        <label for="email">Kabupaten/Kota</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='provinsi' placeholder="Provinsi" required>
                                        <label for="email">Provinsi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name='kode_pos' placeholder="Kode Pos" required>
                                        <label for="email">Kode Pos</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name='foto' required>
                                        <label for="subject">Pas Foto 3x4</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name='alamat' style="height: 150px" required><?php echo"$t[alamat]"; ?></textarea>
                                        <label for="message">Alamat Lengkap</label>
                                    </div>
                                </div>
                               
                            </div>
                       
                    </div>
    
                    <div class="col-lg-4 col-md-12 wow fadeInUp kotak-border"  data-wow-delay="0.5s">
                    <h6 >C.Detail Orang Tua Pendaftar </h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name='nama_ayah' placeholder="Nama Ayah" required>
                                        <label for="name">Nama Ayah</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name='nama_ibu' placeholder="Nama Ibu" required>
                                        <label for="email">Nama Ibu</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="pendidikan_ayah" placeholder="Pendidikan Ayah" required>
                                        <label for="subject">Pendidikan Ayah</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="pendidikan_ibu" placeholder="Pendidikan Ibu" required>
                                        <label for="subject">Pendidikan Ibu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                                        <label for="subject">Pekerjaan Ayah</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                                        <label for="subject">Pekerjaan Ibu</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="penghasilan_ayah" placeholder="Penghasilan Ayah" required>
                                        <label for="subject">Penghasilan Ayah</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="penghasilan_ibu" placeholder="Penghasilan Ibu" required>
                                        <label for="subject">Penghasilan Ibu</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="no_hp_ayah" placeholder="HP/WA Ayah" required>
                                        <label for="subject">HP/WA Ayah</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="no_hp_ibu" placeholder="HP/WA" required>
                                        <label for="subject">HP/WA Ibu</label>
                                    </div>
                                </div>
                           
                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">SIMPAN</button>
                                </div>
                            </div>
                     
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Courses End -->
    <?php } ?>
<?php if($_GET['aksi']=='suksesdaftar'){ 
$tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_GET[id] ");
$t=mysqli_fetch_array($tebaru); ?>
    <!-- <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Biaya Kuliah</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Biaya Kuliah Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
<!-- Pricing Start -->
<div class="container-xxl py-5">
            <div class="container px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Biodata <?php echo"$t[nama]"; ?> dengan nomor daftar <?php echo"$t[no_daftar]"; ?> </h6>
                <h1 class="mb-5">Biodata <?php echo"$t[nama]"; ?> </h1>
            </div>
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-database text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">BIODATA</h4>
                                <p class="mb-0"><?php echo"$t[nama]";?></p>
                            </div>
                              
                            
                            <div class="p-4">
                            <img src="uploads/foto/<?php echo"$t[foto]";?>" width="321"   border="1">
                            </div>
							
							<!-- <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1"><strong>Biaya Kuliah Belum Termasuk: </strong></p>
                            </div>
							<div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Kunjungan Industri 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Kuliah Kerja Nyata 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Kuliah Kerja Praktik 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Jurnal 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Skripsi/Tugas Akhir 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Yudisium 1 X</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Wisuda 1 X</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
					 <div class="position-relative shadow rounded border-top border-5 border-secondary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-share-alt text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">DETAIL DATA :</h4>
                                <p class="mb-0"><?php echo"$t[nama]";?></p>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Lengkap : <?php echo"$t[nama]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>NIK : <?php echo"$t[nik]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>NISN : <?php echo"$t[nisn]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>WA/HP : <?php echo"$t[no_hp]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nomor : <?php echo"$t[no_daftar]";?></p>
                          
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Program : <?php echo"$t[program]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>jenjang : <?php echo"$t[jurusan]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Email : <?php echo"$t[email]";?></p>
                              
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tempat Lahir : <?php echo"$t[tempat_lahir]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tanggal Lahir : <?php echo"$t[tgl_lahir]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Jenis Kelamin : <?php echo"$t[jenis_kelamin]";?></p>
                                
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Warganegara : <?php echo"$t[warga_siswa]";?></p>
                               
                            </div>
				
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
					    <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-cog text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">DETAIL ALAMAT DAN ORANG TUA</h4>
        
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="cetak_daftar.php?id=<?php echo"$t[id_sesi]";?>" target="_blank">CETAK PENDAFTARAN</a>
                                
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>alamat : <?php echo"$t[alamat]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Desa :<?php echo"$t[desa]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Kota/Kab :<?php echo"$t[kota]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Kecamatan :<?php echo"$t[kecamatan]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Provinsi :<?php echo"$t[provinsi]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Ayah :<?php echo"$t[nama_ayah]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Ibu :<?php echo"$t[nama_ibu]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pekerjaan Ayah:<?php echo"$t[pekerjaan_ayah]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pekerjaan Ibu:<?php echo"$t[pekerjaan_ibu]";?></p>
                            </div>
                            <div class="text-center p-4">
                                <a class="btn btn-primary px-4 py-2" href="utama.php?aksi=biodataupdate&id=<?php echo"$t[id_daftar]";?>">RUBAH DATA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->
<?php } ?>

<?php if($_GET['aksi']=='biodataupdate'){ 
$tebaru=mysqli_query($koneksi," SELECT * FROM daftar WHERE id_daftar=$_GET[id] ");
$t=mysqli_fetch_array($tebaru); ?>
<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Lengkapi Biodata <?php echo"$t[nama]"; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Biodata <?php echo"$t[nama]"; ?> </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Carousel End -->


 <!-- Courses Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Biodata <?php echo"$t[nama]"; ?> dengan nomor daftar <?php echo"$t[no_daftar]"; ?> </h6>
                <h1 class="mb-5">Biodata <?php echo"$t[nama]"; ?> </h1>
            </div>
            <form method='post' action='int.php?m=proseseditbiodata&id_daftar=<?php echo"$t[id_daftar]"; ?>&id=<?php echo"$t[id_sesi]"; ?>'  enctype="multipart/form-data">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp kotak-border" data-wow-delay="0.1s">
                <h6 >A.Data Diri dan Pilihan Jurusan : </h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  value="<?php echo"$t[nama]"; ?>" >
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control"  value="<?php echo"$t[email]"; ?>">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <label >Program Kuliah</label>
                                    <select class="form-selec" name="program">
                                        <option value="<?php echo"$t[program]"; ?>"><?php echo"$t[program]"; ?></option>
                                        <option value="normal">Normal</option>
                                        <option value="rpl">RPL 2 TAHUN</option>
                                    </select>
                            </div>
                            <div class='col-6'>
                                     <label >Pilih Jenjang</label>
                                         <select class='form-selec' name='jurusan' required>
                                             <option value='<?php echo"$t[jurusan]"; ?>'><?php echo"$t[jurusan]"; ?></option>
                                             <option value='HANYA MONDOK'>HANYA MONDOK</option>
                                             <option value="SMK MA'ARIF KEPUTRAN">SMK MA'ARIF KEPUTRAN</option>
                                             <option value="MTs MA'ARIF KEPUTRAN">MTs MA'ARIF KEPUTRAN</option>
                                         </select>
                                 </div>
                           
                           
                             <div class='col-6'>
                                 <label >Jenis Kelamin</label>
                                     <select class='form-selec' name='jenis_kelamin' required>
                                         <option value="<?php echo"$t[jenis_kelamin]"; ?>"><?php echo"$t[jenis_kelamin]"; ?></option>
                                         <option value='laki-laki'>Laki-Laki</option>
                                         <option value='perempuan'>Perempuan</option>
                                     </select>
                             </div>
                        
                             <div class='col-6'>
                                 <label >Warga Negara</label>
                                     <select class='form-selec' name='warga_siswa' required>
                                         <option value="<?php echo"$t[warga_siswa]"; ?>"><?php echo"$t[warga_siswa]"; ?></option>
                                         <option value='WNI'>Warga Negara Indonesia</option>
                                         <option value='WNA'>Warga Negara Asing</option>

                                     </select>
                             </div>
                             <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control"  name='nik' value="<?php echo"$t[nik]"; ?>" >
                                    <label for="email">NIK</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control"  name='nisn' value="<?php echo"$t[nisn]"; ?>" required>
                                    <label for="email">NISN</label>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name='no_hp' value="<?php echo"$t[no_hp]"; ?>" required>
                                    <label for="name">Nomor WA/HP</label>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name='tempat_lahir' value="<?php echo"$t[tempat_lahir]"; ?>" required>
                                    <label for="email">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control"  name='tgl_lahir' value="<?php echo"$t[tgl_lahir]"; ?>" required>
                                    <label for="email">Tanggal Lahir</label>
                                </div>
                            </div> 
                         
                        </div>
              
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp kotak-border" data-wow-delay="0.3s">
                <h6 >B.Detail alamat Pendaftar </h6>
                        <div class="row g-3">
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='desa' value="<?php echo"$t[desa]"; ?>" required>
                                    <label for="email">Desa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='rt' value="<?php echo"$t[rt]"; ?>" required>
                                    <label for="email">RT</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='rw' value="<?php echo"$t[rw]"; ?>" required>
                                    <label for="email">RW</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='kecamatan' value="<?php echo"$t[kecamatan]"; ?>" required>
                                    <label for="email">Kecamatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='kota' value="<?php echo"$t[kota]"; ?>" required>
                                    <label for="email">Kabupaten/Kota</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='provinsi' value="<?php echo"$t[provinsi]"; ?>" required>
                                    <label for="email">Provinsi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name='kode_pos'  value="<?php echo"$t[kode_pos]"; ?>" required>
                                    <label for="email">Kode Pos</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name='foto'>
                                    <label for="subject">Pas Foto 3x4</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name='alamat' style="height: 150px" required><?php echo"$t[alamat]"; ?></textarea>
                                    <label for="message">Alamat Lengkap</label>
                                </div>
                            </div>
                           
                        </div>
                   
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp kotak-border" data-wow-delay="0.5s">
                <h6 >C.Detail Orang Tua Pendaftar </h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name='nama_ayah' value="<?php echo"$t[nama_ayah]"; ?>" required>
                                    <label for="name">Nama Ayah</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name='nama_ibu' value="<?php echo"$t[nama_ibu]"; ?>" required>
                                    <label for="email">Nama Ibu</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pendidikan_ayah" value="<?php echo"$t[pendidikan_ayah]"; ?>" required>
                                    <label for="subject">Pendidikan Ayah</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pendidikan_ibu" value="<?php echo"$t[pendidikan_ibu]"; ?>" required>
                                    <label for="subject">Pendidikan Ibu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo"$t[pekerjaan_ayah]"; ?>" required>
                                    <label for="subject">Pekerjaan Ayah</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo"$t[pekerjaan_ibu]"; ?>"  required>
                                    <label for="subject">Pekerjaan Ibu</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="penghasilan_ayah" value="<?php echo"$t[penghasilan_ayah]"; ?>" required>
                                    <label for="subject">Penghasilan Ayah</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="penghasilan_ibu" value="<?php echo"$t[penghasilan_ibu]"; ?>" required>
                                    <label for="subject">Penghasilan Ibu</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="no_hp_ayah" value="<?php echo"$t[no_hp_ayah]"; ?>"  required>
                                    <label for="subject">HP/WA Ayah</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="no_hp_ibu" value="<?php echo"$t[no_hp_ibu]"; ?>" required>
                                    <label for="subject">HP/WA Ibu</label>
                                </div>
                            </div>
                           
                            
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">SIMPAN</button>
                            </div>
                        </div>
                 
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Courses End -->
<?php } ?>

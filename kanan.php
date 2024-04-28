  <?php echo"<!-- kanan -->
  <div class='col-lg-4'>
        <div class='mb-5 wow fadeIn' data-wow-delay='0.1s'>
            <div class='input-group'>
                <input type='text' class='form-control p-3' placeholder='Keyword'>
                <button class='btn btn-primary px-4'><i class='bi bi-search'></i></button>
            </div>
        </div>
    
        <div class='mb-5 wow fadeIn' data-wow-delay='0.1s'>
            <div class='section-header text-start pb-4'>
                <h6 class='h4 fw-bold bg-white px-2 text-uppercase mb-0'>Categories</h6>
            </div>
            <div class='category-list d-flex flex-column border-start border-5 border-primary'>
                <a class='h6 fw-semi-bold bg-light d-flex p-3 mb-1' href='#'>
                    <span>Informasi</span>
                </a>
                <a class='h6 fw-semi-bold bg-light d-flex p-3 mb-1' href='#'>
                <span>Pelayanan</span>
            </a>
                <!-- More categories -->
            </div>
        </div>
    
        <div class='mb-5 wow fadeIn' data-wow-delay='0.1s'>
            <div class='section-header text-start pb-4'>
                <h6 class='h4 fw-bold bg-white px-2 text-uppercase mb-0'>Recent Post</h6>
            </div>
            ";
            $xk=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='informasi' ORDER BY id_berita DESC  LIMIT 5");   
    while ($x=mysqli_fetch_array($xk)){
                    
                    echo"
            <div class='d-flex mb-3'>
                <img class='img-fluid' src='foto/data/$x[gambar]' style='width: 80px; height: 80px; object-fit: cover;' alt=''>
                <div class='d-flex flex-column justify-content-center ps-3'>
                    <a href='utama.php?aksi=detailberita&id_berita=$x[id_berita]' class='h6 lh-base fw-medium mb-2'>$x[judul]</a>
                    <small>
                        <span class='me-2'>By <a class='fst-italic text-muted' href='#'>Admin</a></span>
                        <span>In <a class='fst-italic text-muted' href='#'>$x[jenis]</a></span>
                    </small>
                </div>
            </div>";
        }
                        echo"
            <!-- More recent posts -->
        </div>
    </div>";
    ?>

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="../uploads/foto/<?php echo"$t[foto]";?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo"$t[nama]";?></h3>
                  <p class="text-muted text-center">Calon Siswa Baru</p>
                  <ul class="list-group list-group-unbordered">
               
                    <li class="list-group-item">
                      <b>Program </b> <a class="pull-right"><?php echo"$t[program]";?></a>
                    </li>
                 
                  </ul>
                <?php  if($t['status']=='0'){
                    echo"<a href='index.php?aksi=prosesedit&id_daftar=$t[id_daftar]' onclick=\"return confirm ('Apakah yakin ingin Menerima Mahasiswa $t[nama] ?')\" class='btn btn-danger btn-block'><b>BARU</b></a>";
                     }
                   else if($t['status']=='1'){
                    echo"<a href='#' class='btn btn-success btn-block'><b>DITERIMA</b></a>";
                   } else { 
                    echo"<a href='#' class='btn btn-warning btn-block'><b>ANDA TIDAK TERIMA</b></a>";
                      } ?>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tentang Saya</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Jenjang Pendaftaran</strong>
                  <p class="text-muted">
                  <?php echo"$t[jurusan]";?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> alamat Lengkap</strong>
                  <p class="text-muted"><?php echo"$t[alamat]";?></p>

                  <hr>

                  <strong><i class="fa fa-pencil margin-r-5"></i> Desa</strong>
                  <p>
                    <span class="label label-danger"><?php echo"$t[desa]";?></span>
                    <span class="label label-primary">Rt:<?php echo"$t[rt]";?> Rw:<?php echo"$t[rw]";?></span>
                    <span class="label label-success"><?php echo"$t[kecamatan]";?></span>
                    <span class="label label-info"><?php echo"$t[kota]";?></span>
                    <span class="label label-warning"><?php echo"$t[provinsi]";?></span>

                  </p>

                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Keterangan</strong>
                  <p>Saya Mendaftar di <?php echo"$k_k[nama]";?> dengan Jenjang Pendaftaran <?php echo"$t[jurusan]";?> Program pondo yang saya pilih <?php echo"$t[program]";?></p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity<?php echo"$t[id_daftar]";?>" data-toggle="tab">Data</a></li>
                  <li><a href="#timeline<?php echo"$t[id_daftar]";?>" data-toggle="tab">Detail Orang Tua</a></li>
                  <li><a href="#settings<?php echo"$t[id_daftar]";?>" data-toggle="tab">Biaya</a></li>
                  <li><a href="#syarat<?php echo"$t[id_daftar]";?>" data-toggle="tab">Syarat Daftar</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity<?php echo"$t[id_daftar]";?>">
           
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Lengkap : <?php echo"$t[nama]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>NIK : <?php echo"$t[nik]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>NISN : <?php echo"$t[nisn]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>WA/HP : <?php echo"$t[no_hp]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nomor : <?php echo"$t[no_daftar]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Jenjang Pendaftaran : <?php echo"$t[jurusan]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Program : <?php echo"$t[program]";?></p>
                  
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>email : <?php echo"$t[email]";?></p>
                              
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tempat Lahir : <?php echo"$t[tempat_lahir]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tanggal Lahir : <?php echo"$t[tgl_lahir]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Jenis Kelamin : <?php echo"$t[jenis_kelamin]";?></p>
                              
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Warganegara : <?php echo"$t[warga_siswa]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>alamat : <?php echo"$t[alamat]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Desa :<?php echo"$t[desa]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Kota/Kab :<?php echo"$t[kota]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Kecamatan :<?php echo"$t[kecamatan]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Provinsi :<?php echo"$t[provinsi]";?> </p>
                          
               
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline<?php echo"$t[id_daftar]";?>">
                    <!-- The timeline -->
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Ayah :<?php echo"$t[nama_ayah]";?> </p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Nama Ibu :<?php echo"$t[nama_ibu]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pekerjaan Ayah:<?php echo"$t[pekerjaan_ayah]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pekerjaan Ibu:<?php echo"$t[pekerjaan_ibu]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pendidikan Ayah:<?php echo"$t[pendidikan_ayah]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Pendidikan Ibu:<?php echo"$t[pendidikan_ibu]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>HP/WA Ayah:<?php echo"$t[no_hp_ayah]";?></p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>HP/WA Ibu:<?php echo"$t[no_hp_ibu]";?></p>
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings<?php echo"$t[id_daftar]";?>">
                 
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="syarat<?php echo"$t[id_daftar]";?>">
                    <!-- The timeline -->
                
            <div class='row'>
                            <div class='col-lg-12'>
                                <div class='panel panel-default'>
                                   
                                    <div class='panel-body'>
                                    <?php  if($t['status_upload']=='0'){
                    echo"   <form id='form1'  method='post' action='edit.php?aksi=prosesupload&id_sesi=$t[id_sesi]' enctype='multipart/form-data'>
                    <div class='form-group'>
                    <label for='subject'>Ijasah/SKHU/Nilai Raport</label>
                    <input  type='file' class='form-control' name='ijazah'><br>  
                    <label for='subject'>Kartu Keluarga</label>
                    <input  type='file' class='form-control' name='kk'><br> 
                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                                <button type='submit' class='btn btn-primary'>Save </button>
                     </div> 
                     </div>
                        </form>";
                     }
                   else if($t['status_upload']=='1'){
                    echo"<table class='table'>
                    <tr>
                      <td>FILE KK </td>
                      <td><a href='../uploads/kk/$t[kk]' class='btn btn-success'><b>Lihat</b></a></td>
                    </tr>
                    <tr>
                      <td>FILE IJAZAH </td>
                      <td><a href='../uploads/ijazah/$t[ijazah]' target='_blank' class='btn btn-success'><b>Lihat</b></a></td>
                    </tr>
                    <tr>
                      <td colspan='2'><a href='edit.php?aksi=ubahupload&id_sesi=$t[id_sesi]' target='_blank' class='btn btn-warning btn-block'><b>UBAH FILE</b></a></td>
                    </tr>
                  </table>";
                   } else { 
                    echo"<a href='#' class='btn btn-warning btn-block'><b>kesalahan sisstem kami</b></a>";
                      } ?>
         </div> </div></div></div>
           
                  </div><!-- /.tab-pane -->
                  <a class="btn btn-primary px-4 py-2" href="../cetak_daftar.php?id=<?php echo"$t[id_sesi]";?>" target="_blank">CETAK PENDAFTARAN</a>
                  <a class="btn btn-primary px-4 py-2" <?php echo" onclick=\"return confirm ('Apakah yakin ingin Menerima Mahasiswa $t[nama] ?')\" "; ?> href="index.php?aksi=prosesedit&id_daftar=<?php echo"$t[id_daftar]"; ?> " >TERIMA</a>
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

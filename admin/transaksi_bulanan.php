<?php include 'header.php'; ?>

<div class="content-wrapper">


  <section class="content-header">
    <h1>Data Cannery </h1>
     <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Bulanan</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Data Resume Proses Cannery Bulanan</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Tambah Data Bulanan
              </button>
            </div>
          </div>
          <div class="box-body">

         <form method="post" enctype="multipart/form-data" action="proses.php">
              <div class="form-group">
                  <label for="exampleInputFile">File Upload</label>
                  <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
              </div>
              <button type="submit" class="btn btn-primary">Import</button>
          </form>

            <!-- Modal -->
            <form action="transaksi_act_bulan.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Tambah Data Bulanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      

                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control" required="required">
                                <option value="">- Pilih -</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control" required="required">
                                <option value="">- Pilih -</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                               
                        </select>
                      </div>


                      <div class="form-group">
                        <label>TK Line</label>
                        <input type="text" name="tkline" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>TK Tidak Hadir</label>
                        <input type="text" name="tktidakhadir" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Tk Produksi</label>
                        <input type="text" name="tkproduksi" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Tonase Proses</label>
                        <input type="text" name="tonaseproses" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Tonase Kirim</label>
                        <input type="text" name="tonasekirim" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Stock</label>
                        <input type="text" name="stock" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Jam Kerja</label>
                        <input type="text" name="jamkerja" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>SC</label>
                        <input type="text" name="sc" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>SC/Jam</label>
                        <input type="text" name="scjam" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>MPP(SC)</label>
                        <input type="text" name="mppsc" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" name="kapasitas" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Recovery</label>
                        <input type="text" name="recovery" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Akum Rec</label>
                        <input type="text" name="akumrec" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Akum Kap</label>
                        <input type="text" name="akumkap" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>MPP(Kg)</label>
                        <input type="text" name="mppkg" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Choice</label>
                        <input type="text" name="choice" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="table-responsive">
      <table class="table table-bordered table-striped" id="table-datatable" cellspacing="0" width="50%">
          <thead>
            <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Tahun</th>
                        <th class="text-center">TK Line</th>
                        <th class="text-center">TK Tidak Hadir</th>
                        <th class="text-center">TK Produksi</th>
                        <th class="text-center">Tonase Proses</th>
                        <th class="text-center">Tonase Kirim</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Jam Kerja</th>
                        <th class="text-center">SC(Standar Cash)</th>
                        <th class="text-center">SC/Jam</th>
                        <th class="text-center">MPP (SC)</th>
                        <th class="text-center">Kapasitas</th>
                        <th class="text-center">Recovery</th>
                        <th class="text-center">Akum Rec</th>
                        <th class="text-center">Akum Kap</th>
                        <th class="text-center">MPP (Kg)</th>
                        <th class="text-center">Choice</th>
                        <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('../koneksi.php'); //memanggil file koneksi
              $no=1;
              $data = mysqli_query($koneksi, "select * from resume_cannery_bulanan") or die(mysqli_error($koneksi));
              while($d = mysqli_fetch_array($data)){
              //script untuk menampilkan data cannery

            ?>  

          <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td class="text-center"><?php echo $d['bulan']; ?></td>
            <td class="text-center"><?php echo $d['tahun']; ?></td>
            <td class="text-center"><?php echo $d['tkline']; ?></td>
            <td class="text-center"><?php echo $d['tktidakhadir']; ?></td>
            <td class="text-center"><?php echo $d['tkproduksi']; ?></td>
            <td class="text-center"><?php echo $d['tonaseproses']; ?></td>
            <td class="text-center"><?php echo $d['tonasekirim']; ?></td>
            <td class="text-center"><?php echo $d['stock']; ?></td>
            <td class="text-center"><?php echo $d['jamkerja']; ?></td>
            <td class="text-center"><?php echo $d['sc']; ?></td>
            <td class="text-center"><?php echo $d['scjam']; ?></td>
            <td class="text-center"><?php echo $d['mppsc']; ?></td>
            <td class="text-center"><?php echo $d['kapasitas']; ?></td>
            <td class="text-center"><?php echo $d['recovery']; ?></td>
            <td class="text-center"><?php echo $d['akumrec']; ?></td>
            <td class="text-center"><?php echo $d['akumkap']; ?></td>
            <td class="text-center"><?php echo $d['mppkg']; ?></td>
            <td class="text-center"><?php echo $d['choice']; ?></td>

           <td>    
           <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_transaksi_<?php echo $d['id'] ?>">
              <i class="fa fa-cog"></i>
               </button>

               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_transaksi_<?php echo $d['id'] ?>">
                <i class="fa fa-trash"></i>
            </button>
             <form action="transaksi_update_bulan.php" method="post">
                          <div class="modal fade" id="edit_transaksi_<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">Edit transaksi</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">


                                 <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Bulan</label>
                                     <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                    <select name="bulan" style="width:100%" class="form-control" required="required">
                                      <option value="">- Pilih -</option>
                                      <option <?php if($d['bulan'] == "1"){echo "selected='selected'";} ?> value="1">Januari</option>
                                      <option <?php if($d['bulan'] == "2"){echo "selected='selected'";} ?> value="2">Februari</option>
                                      <option <?php if($d['bulan'] == "3"){echo "selected='selected'";} ?> value="3">Maret</option>
                                      <option <?php if($d['bulan'] == "4"){echo "selected='selected'";} ?> value="4">April</option>
                                      <option <?php if($d['bulan'] == "5"){echo "selected='selected'";} ?> value="5">Mei</option>
                                      <option <?php if($d['bulan'] == "6"){echo "selected='selected'";} ?> value="6">Juni</option>
                                      <option <?php if($d['bulan'] == "7"){echo "selected='selected'";} ?> value="7">Juli</option>
                                      <option <?php if($d['bulan'] == "8"){echo "selected='selected'";} ?> value="8">Agustus</option>
                                      <option <?php if($d['bulan'] == "9"){echo "selected='selected'";} ?> value="9">September</option>
                                      <option <?php if($d['bulan'] == "10"){echo "selected='selected'";} ?> value="10">Oktober</option>         
                                      <option <?php if($d['bulan'] == "11"){echo "selected='selected'";} ?> value="11">November</option>
                                      <option <?php if($d['bulan'] == "12"){echo "selected='selected'";} ?> value="12">Desember</option>
                                    </select>
                                  </div>

                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Tahun</label>
                                    <select name="tahun" style="width:100%" class="form-control" required="required">
                                      <option value="">- Pilih -</option>
                                      <option <?php if($d['tahun'] == "2022"){echo "selected='selected'";} ?> value="2022">2022</option>
                                      <option <?php if($d['tahun'] == "2023"){echo "selected='selected'";} ?> value="2023">2023</option>
                                      <option <?php if($d['tahun'] == "2024"){echo "selected='selected'";} ?> value="2024">2024</option>
                                      <option <?php if($d['tahun'] == "2025"){echo "selected='selected'";} ?> value="2025">2025</option>
                                    </select>
                                  </div>
                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>TK Line</label>
                                    <input type="text" style="width:100%" name="tkline" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['tkline'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>TK Tidak Hadir</label>
                                    <input type="text" style="width:100%" name="tktidakhadir" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['tktidakhadir'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>TK Produksi</label>
                                    <input type="text" style="width:100%" name="tkproduksi" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['tkproduksi'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Tonase Proses</label>
                                    <input type="text" style="width:100%" name="tonaseproses" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['tonaseproses'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Tonase Kirim</label>
                                    <input type="text" style="width:100%" name="tonasekirim" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['tonasekirim'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Stock</label>
                                    <input type="text" style="width:100%" name="stock" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['stock'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Jam Kerja</label>
                                    <input type="text" style="width:100%" name="jamkerja" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['jamkerja'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>SC</label>
                                    <input type="text" style="width:100%" name="sc" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['sc'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>SC/Jam</label>
                                    <input type="text" style="width:100%" name="scjam" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['scjam'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>MPP(SC)</label>
                                    <input type="text" style="width:100%" name="mppsc" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['mppsc'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Kapasitas</label>
                                    <input type="text" style="width:100%" name="kapasitas" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['kapasitas'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Recovery</label>
                                    <input type="text" style="width:100%" name="recovery" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['recovery'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Akum Rec</label>
                                    <input type="text" style="width:100%" name="akumrec" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['akumrec'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Akum Kap</label>
                                    <input type="text" style="width:100%" name="akumkap" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['akumkap'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>MPP(Kg)</label>
                                    <input type="text" style="width:100%" name="mppkg" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['mppkg'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Choice</label>
                                    <input type="text" style="width:100%" name="choice" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['choice'] ?>">
                                  </div>



                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>

                        <!-- modal hapus -->
                        <div class="modal fade" id="hapus_transaksi_<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Peringatan!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Yakin ingin menghapus data ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="transaksi_hapus_bulan.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </td>
                    </tr>
                       

                  <?php 
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
      </div>
    </section>
  </div>
</section>

</div>
<?php include 'recovery.php'; ?>
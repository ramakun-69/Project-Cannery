<?php include 'header.php'; ?>


<div class="content-wrapper">


  <section class="content-header">
    <h1>Data Cannery </h1>
     <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Shift A</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Data Resume Proses Cannery Shift A</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Tambah Data Shift A
              </button>
            </div>
          </div>
          <div class="box-body">


            <!-- Modal -->
            <form action="transaksi_act.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Tambah Data Shift A</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="form-group">
                      <label>Tanggal</label>
                        <input type="text" name="tanggal" required="required" class="form-control datepicker2">
                      </div>

                    <div class="form-group">
                        <label>Shift</label>
                        <select name="shift" class="form-control" required="required">
                          <option value="">- Pilih -</option>
                          <option value="a">A</option>
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
                        <label>%Choice(A)</label>
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
                        <th class="text-center" width="10%">Tanggal</th>
                        <th class="text-center">Shift</th>
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
                        <th class="text-center">%Choice(A)</th>
                        <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('../koneksi.php'); //memanggil file koneksi
              $no=1;
              $data = mysqli_query($koneksi, "select * from resume_cannery_a") or die(mysqli_error($koneksi));
              while($d = mysqli_fetch_array($data)){
              //script untuk menampilkan data cannery

            ?>  

          <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td class="text-center"><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td>
            <td class="text-center"><?php echo $d['shift']; ?></td>
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
             <form action="transaksi_update.php" method="post">
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
                                    <label>Tanggal</label>
                                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                    <input type="text" style="width:100%" name="tanggal" required="required" class="form-control datepicker2" value="<?php echo $d['tanggal'] ?>">
                                  </div>

                                 <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Shift</label>
                                    <select name="shift" style="width:100%" class="form-control" required="required">
                                      <option value="">- Pilih -</option>
                                      <option <?php if($d['shift'] == "a"){echo "selected='selected'";} ?> value="a">A</option>
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
                                <a href="transaksi_hapus.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">Hapus</a>
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
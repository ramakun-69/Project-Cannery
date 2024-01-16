<?php include 'header.php'; ?>

<div class="content-wrapper">


  <section class="content-header">
    <h1>Data Produksi</h1>
     <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Shift B</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Data Hasil Produksi Shift B</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Tambah Data Shift B
              </button>
            </div>
          </div>
          <div class="box-body">

            <!-- Modal -->
            <form action="transaksi_act_b.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Tambah Data Shift B</h4>
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
                          <option value="b">B</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Nanas A1</label>
                        <input type="text" name="nanas_a1" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Nanas A2</label>
                        <input type="text" name="nanas_a2" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Nanas A2.5</label>
                        <input type="text" name="nanas_a25" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Nanas A5</label>
                        <input type="text" name="nanas_a5" required="required" class="form-control" placeholder="Masukkan Angka ..">
                      </div>

                      <div class="form-group">
                        <label>Nanas A10</label>
                        <input type="text" name="nanas_a10" required="required" class="form-control" placeholder="Masukkan Angka ..">
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
                        <th class="text-center">Nanas A1</th>
                        <th class="text-center">Nanas A2</th>
                        <th class="text-center">Nanas A2.5</th>
                        <th class="text-center">Nanas A5</th>
                        <th class="text-center">Nanas A10</th>
                        <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('../koneksi.php'); //memanggil file koneksi
              $no=1;
              $data = mysqli_query($koneksi, "select * from resume_cannery_b") or die(mysqli_error($koneksi));
              while($d = mysqli_fetch_array($data)){
              //script untuk menampilkan data cannery

            ?>  

          <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td class="text-center"><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td>
            <td class="text-center"><?php echo $d['shift']; ?></td>
            <td class="text-center"><?php echo $d['nanas_a1']; ?></td>
            <td class="text-center"><?php echo $d['nanas_a2']; ?></td>
            <td class="text-center"><?php echo $d['nanas_a25']; ?></td>
            <td class="text-center"><?php echo $d['nanas_a5']; ?></td>
            <td class="text-center"><?php echo $d['nanas_a10']; ?></td>

           <td>    
           <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_transaksi_<?php echo $d['id'] ?>">
              <i class="fa fa-cog"></i>
               </button>

               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_transaksi_<?php echo $d['id'] ?>">
                <i class="fa fa-trash"></i>
            </button>
             <form action="transaksi_update_b.php" method="post">
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
                                      <option <?php if($d['shift'] == "b"){echo "selected='selected'";} ?> value="b">B</option>
                                    </select>
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Nanas A1</label>
                                    <input type="text" style="width:100%" name="nanas_a1" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['nanas_a1'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Nanas A2</label>
                                    <input type="text" style="width:100%" name="nanas_a2" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['nanas_a2'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Nanas A2.5</label>
                                    <input type="text" style="width:100%" name="nanas_a25" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['nanas_a25'] ?>">
                                  </div>

                                   <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Nanas A5</label>
                                    <input type="text" style="width:100%" name="nanas_a5" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['nanas_a5'] ?>">
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>Nanas A10</label>
                                    <input type="text" style="width:100%" name="nanas_a10" required="required" class="form-control" placeholder="Masukkan Angka .." value="<?php echo $d['nanas_a10'] ?>">
                                  </div>
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
                                <a href="transaksi_hapus_b.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">Hapus</a>
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
<?php include 'grafiknanas1.php'; ?>
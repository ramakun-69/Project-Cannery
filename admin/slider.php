<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Slider
            <small>Data Slider</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Slider</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-10 col-lg-offset-1">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Slider</h3>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> &nbsp Tambah Data Slider
                            </button>
                        </div>
                    </div>
                    <div class="box-body">


                        <!-- Modal -->
                        <form action="slider_act.php" method="post" enctype="multipart/form-data">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Tambah Data Slider</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" name="title" required="required" class="form-control" placeholder="Masukkan Judul">
                                            </div>

                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <input type="file" name="image" required="required" class="form-control">
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
                        <div class="row">
                            <div class="col-sm-6">
                                <?php
                                if (isset($_GET['alert'])) {
                                    if ($_GET['alert'] == "gagal") {
                                        echo "<div class='alert alert-danger'>Gagal Upload, File Tidak Diizinkan!</div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Judul</th>
                                        <th width="15%">FOTO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM slider");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['title']; ?></td>
                                            <td>
                                                <center>
                                                    <img src="../gambar/slider/<?php echo $d['image'] ?>" style="width: 80px;height: auto">
                                                </center>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_slider_<?php echo $d['id'] ?>">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_slider_<?php echo $d['id'] ?>">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form action="slider_update.php" method="post" enctype="multipart/form-data">
                                                    <div class="modal fade" id="edit_slider_<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Edit slider</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Judul</label>
                                                                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                                                        <input type="text" style="width:100%" name="title" required="required" class="form-control" placeholder="Masukkan Judul" value="<?php echo $d['title'] ?>">
                                                                    </div>

                                                                    <div class="form-group" style="width:100%;margin-bottom:20px">
                                                                        <label>Image</label>
                                                                        <input type="file" style="width:100%" name="image" class="form-control">
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
                                                <div class="modal fade" id="hapus_slider_<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <a href="slider_hapus.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
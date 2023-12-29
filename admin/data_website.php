<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Pengguna
            <small>Tambah Pengguna Baru</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <?php
    include '../koneksi.php';
    $data = mysqli_query($koneksi, "select * from settings where id='1'");
    $d = mysqli_fetch_assoc($data); ?>
    <section class="content">
        <div class="row">
            <section class="col-lg-6 col-lg-offset-3">
                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Settings Website</h3>

                    </div>
                    <div class="box-body">
                        <form action="settings.php" method="post">
                            <div style="text-align: center; margin: 10px 0;">
                                <hr style="display: inline-block; width: 30%; margin: 0 5px;">
                                <span style="font-size: 14px; color: #666;">TENTANG KAMI</span>
                                <hr style="display: inline-block; width: 30%; margin: 0 5px;">
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control" name="tentang_kami" id="content"><?= $d['tentang_kami'] ?></textarea>
                            </div>
                            <div style="text-align: center; margin: 10px 0;">
                                <hr style="display: inline-block; width: 30%; margin: 0 5px;">
                                <span style="font-size: 14px; color: #666;">KONTAK KAMI</span>
                                <hr style="display: inline-block; width: 30%; margin: 0 5px;">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $d['alamat'] ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" name="contact_person" id="contact" placeholder="Contact Person" value="<?= $d['contact_person'] ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Embed Google Maps</label>
                                <input type="text" class="form-control" name="embed" id="embed" placeholder="Link Embed Google Maps" value="<?= $d['embed'] ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </section>

</div>
<?php include 'recovery.php'; ?>
<script>
    $(function() {
        CKEDITOR.replace('content')
    })
</script>
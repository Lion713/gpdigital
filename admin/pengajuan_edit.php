<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Pengajuan</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Edit Pengajuan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Edit Pengajuan</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="pengajuan.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>


                    <?php
                    $id = $_GET['id_pengajuan'];
                    $data = mysqli_query($koneksi, "select * from pengajuan where id_pengajuan='$_GET[id_pengajuan]'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form method="post" action="pengajuan_update.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Instansi/Pelanggan</label>
                                <input type="hidden" name="id_pengajuan" value="<?php echo $d['id_pengajuan']; ?>">
                                <input disabled type="text" class="form-control" name="pengajuan" required="required" value="<?php echo $d['instansi_pengajuan']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Pengajuan Kategori</label>
                                <select class="form-control" name="kategori" required="required" disabled>
                                    <option value="">Pilih kategori</option>
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$d[kategori_pengajuan]'");
                                    while ($k = mysqli_fetch_array($kategori)) {
                                    ?>
                                        <option <?php if ($k['kategori_id'] == $d['kategori_pengajuan']) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Terbit Koran</label>
                                <input disabled type="text" class="form-control" name="terbit" required="required" value="<?php echo $d['data_terbit']; ?>">
                            </div>



                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea disabled class="form-control" name="keterangan" required="required"><?php echo $d['keterangan_pengajuan']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>User Yang Mengajukan</label>
                                <select class="form-control" name="kategori" required="required" disabled>
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$d[pengajuan_user]'");
                                    while ($k = mysqli_fetch_array($kategori)) {
                                    ?>
                                        <option <?php if ($k['user_id'] == $d['pengajuan_user']) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $k['user_id']; ?>"><?php echo $k['user_nama']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
							
                            <div class="form-group">
                                <label>Status Pengajuan</label>
                                <select class="form-control" name="status" required="required">
                                    <option value="">Pilih Status.....</option>
									<option value="1">Disetujui</option>
									<option value="0">Diajukan</option>

                                </select>
                            </div>							

                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Kirim">
                            </div>

                        </form>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>
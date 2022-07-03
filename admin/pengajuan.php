<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Pengajuan Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Pengajuan Arsip</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Pengajuan Arsip</h3>
        </div>
        <div class="panel-body">

            <!--
            <div class="pull-right">
                <a href="pengajuan_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengajuan</a>
            </div>
-->
            <br>
            <br>
            <br>

            <center>
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                ?>
                        <div class="alert alert-danger">Pengajuan gagal diubah! ketentuan: png,jpg,jpeg</div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-success">Pengajuan berhasil diubah</div>
                <?php
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Waktu Pengajuan</th>
                        <th>User</th>
                        <th>Instansi/Pelanggan</th>
                        <th>Pengajuan Kategori</th>
                        <th>Data Terbit</th>

                        <th>Keterangan</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    if (isset($_GET['kategori'])) {
                        $kategori = $_GET['kategori'];
                        $pengajuan = mysqli_query($koneksi, "SELECT * FROM pengajuan,kategori,user WHERE pengajuan_user=user_id and kategori_pengajuan=kategori_id and kategori_pengajuan='$kategori' ORDER BY id_pengajuan DESC");
                    } else {
                        $pengajuan = mysqli_query($koneksi, "SELECT * FROM pengajuan,kategori,user WHERE pengajuan_user=user_id and kategori_pengajuan=kategori_id ORDER BY id_pengajuan DESC");
                    }
                    while ($p = mysqli_fetch_array($pengajuan)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y', strtotime($p['waktu_pengajuan'])) ?></td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><?php echo $p['instansi_pengajuan'] ?></td>
                            <td><?php echo $p['kategori_nama'] ?></td>
                            <td><?php echo $p['data_terbit'] ?></td>

                            <td><?php echo $p['keterangan_pengajuan'] ?></td>
                            <td class="text-center">



                                <div class="modal fade" id="exampleModal_<?php echo $p['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="pengajuan_hapus.php?id=<?php echo $p['id_pengajuan']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-group">
                                    <a href="pengajuan_edit.php?id_pengajuan=<?php echo $p['id_pengajuan']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i> Edit</a>
                                    <a target="_blank" href="pengajuan_preview.php?id=<?php echo $p['id_pengajuan']; ?>" class="btn btn-default"><i class="fa fa-search"></i> Detail</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?php echo $p['id_pengajuan']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
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


<?php include 'footer.php'; ?>
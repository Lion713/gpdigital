<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Preview Pengajuan</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Preview Pengajuan</span></li>
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
        <div class="col-lg-12">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Preview Pengajuan</h3>
                </div>
                <div class="panel-body">

                    <a href="pengajuan.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>

                    <br>
                    <br>

                    <?php
                    $id = $_GET['id'];
                    $lihat = mysqli_query($koneksi, "SELECT * FROM pengajuan,kategori,user WHERE pengajuan_user=user_id and kategori_pengajuan=kategori_id and id_pengajuan='$id'");
                    while ($d = mysqli_fetch_array($lihat)) {
                    ?>

                        <div class="row">
                            <div class="col-lg-4">

                                <table class="table">
                                    <tr>
                                        <th>Waktu Pengajuan</th>
                                        <td><?php echo date('H:i:s  d-m-Y', strtotime($d['waktu_pengajuan'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Instansi/Pelanggan</th>
                                        <td><?php echo $d['instansi_pengajuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Diajukan</th>
                                        <td><?php echo $d['kategori_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pelanggan yang Mengajukan</th>
                                        <td><?php echo $d['user_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Terbit Koran</th>
                                        <td><?php echo $d['data_terbit']; ?></td>
                                    </tr>

                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?php echo $d['keterangan_pengajuan']; ?></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="col-lg-8">

                                <?php
                                if ($d['bukti_pengajuan'] == "png" || $d['bukti_pengajuan'] == "jpg" || $d['bukti_pengajuan'] == "gif" || $d['bukti_pengajuan'] == "jpeg") {
                                ?>
                                    <img src="../user/bukti/<?php echo $d['bukti_pengajuan']; ?>">

                                <?php
                                } elseif ($d['bukti_pengajuan'] == "pdf") {
                                ?>

                                    <div class="image-singe-pro">
                                        <a class="media" href="../user/bukti/<?php echo $d['bukti_pengajuan']; ?>"></a>
                                    </div>

                                <?php
                                } else {
                                ?>
                                    <p>Preview tidak tersedia</p>.
                                <?php
                                }
                                ?>

                            </div>
                        </div>







                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>



<?php include 'footer.php'; ?>
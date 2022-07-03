<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mendaftar | Arsip Koran Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>ARSIP KORAN DIGITAL</h3>
                <h4>HARIAN GORONTALO POST</h4>

                <br>



            </div>
            <div class="content-error">
                <?php



                // pesan notifikasi

                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagalfoto") {
                        echo "<div class='alert alert-warning'>FILE TIDAK DI IJINKAN</div>";
                    } else if ($_GET['alert'] == "suksesdaftar") {
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL MENDAFTAR, SILAHKAN LOGIN UNTUK MELANJUTKAN</div>";
                    } else if ($_GET['alert'] == "gagaldaftar") {
                        echo "<div class='alert alert-danger'>DATA INI TELAH TERDAFTAR! SILAHKAN LOGIN</div>";
                    }
                }

                ?>
                <div class="hpanel">
                    <div class="panel-body">


                        <br>
                        <br>
                        <center>
                            <h4>MENDAFTAR</h4>
                            <p>Silahkan Mendaftar jika belum memiliki akun</p>

                        </center>
                        <br>
                        <br>

                        <div class="panel-body">
                            <!--
                            <div class="pull-right">
                                <a href="index.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                            </div>
                            <br> -->
                            <br>

                            <form method="post" action="daftar_aksi.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Nama Lengkap *</label>
                                    <input type="text" class="form-control" name="nama" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" name="email" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control" name="username" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password" required="required">
                                </div>


                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto">
                                </div>


                                <div class="form-group">
                                    <label></label>
                                    <input type="submit" class="btn btn-success btn-block loginbtn" value="Daftar">
                                </div>

                            </form>

                        </div>

                        <br>

                    </div>
                </div>
                <label>Sudah memiliki akun ? Silahkan masuk</label>
                <br>
                <a href="user_login.php">Login</a>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. All rights reserved. Arsip Koran Digital Harian Gorontalo Post</p>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
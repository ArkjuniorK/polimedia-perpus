<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">
    <!-- datepicker CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.5.0-web/css/all.min.css">
    <!-- Sweetalert CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert/css/sweetalert.css">
    <!-- Chosen CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap-4/css/chosen.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- jQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <noscript>
        <div class="mx-auto mt-5 pt-5">
            <h1>Aktifkan JavaScript</h1>
        </div>
    </noscript>
</head>
<body>
    <div class="all">
        <header>
            <div class="navbar-section">
                <nav class="navbar navbar-light bg-polmed fixed-top navbar-expand-md">
                    <div class="navbar-items container">
                        <a class="navbar-brand raleway-bold logo-brand" href="#">
                            <img src="assets/img/logo.png" width="35" height="35" class="d-inline-block align-middle mr-2" alt="Logo">
                            Perpustakaan
                        </a>

                        <div class="navbar-list ml-auto">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link mr-1 menu raleway-medium" id="beranda" href="javascript:void(0);">
                                        <i class="fas fa-home title-icon"></i> Beranda
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-1 menu raleway-medium" id="admin" href="javascript:void(0);">
                                        <i class="fas fa-user title-icon"></i> Admin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main role="main" class="main-content">
            <!-- menampilkan isi halaman -->
        </main>
    </div>


    <!-- Include JavaScript -->
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <!-- Fontawesome Plugin JS -->
    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.5.0-web/js/all.min.js"></script>
    <!-- DataTables Plugin JS -->
    <script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <!-- datepicker Plugin JS -->
    <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- SweetAlert Plugin JS -->
    <script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <!-- Chosen Plugin JS -->
    <script type="text/javascript" src="assets/plugins/chosen-bootstrap-4/js/chosen.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // halaman yang diload default pertama kali saat aplikasi dijalankan
            $('.main-content').load('modules/pengunjung/beranda.php');

            // fungsi untuk pemanggilan halaman tanpa reload/refresh
            $('.menu').click(function() {
                // membuat variabel untuk menampung nama id dari class 'menu' yang diklik
                var menu = $(this).attr('id');
                // jika id = beranda, maka load halaman view beranda
                if (menu == "beranda") {
                    $('.main-content').load('modules/pengunjung/beranda.php');
                }
                // jika id = pelanggan, maka load halaman view pelanggan
                else if (menu == "admin") {
                    $('.main-content').load('modules/admin/admin.php');
                }
            });
        });
        // ========================================== Validasi Form ===========================================
        // Validasi karakter yang boleh diinpukan pada form
        function getkey(e) {
            if (window.event)
                return window.event.keyCode;
            else if (e)
                return e.which;
            else
                return null;
        }

        function goodchars(e, goods, field) {
            var key, keychar;
            key = getkey(e);
            if (key == null) return true;

            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods = goods.toLowerCase();

            // check goodkeys
            if (goods.indexOf(keychar) != -1)
                return true;
            // control keys
            if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
                return true;

            if (key == 13) {
                var i;
                for (i = 0; i < field.form.elements.length; i++)
                    if (field == field.form.elements[i])
                        break;
                i = (i + 1) % field.form.elements.length;
                field.form.elements[i].focus();
                return false;
            };
            // else return false
            return false;
        }
    </script>
</body>
</html>
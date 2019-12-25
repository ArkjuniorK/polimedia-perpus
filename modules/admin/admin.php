<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}
?>
<div class="admin-dashboard-section mt-6">
    <div class="navigation-section">
        <nav class="navbar-expand-lg nav nav-pills raleway-bold navbar-admin navbar">
            <div class="nav-items-list container">
                <ul class="navbar-nav admin-nav">
                    <li class="nav-item">
                        <a class="nav-link custom-link" id="dashboard" href="javascript:void(0);">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" id="cari" href="javascript:void(0);">Cari Data</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-link-second" id="logout" href="javascript:void(0);">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="main-section" id="main">

    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    // $('#pengunjungHariIni').DataTable();
    $('#main').load('modules/admin/dashboard.php');
  });

  $('.nav-link').click(function() {
    // membuat variabel untuk menampung nama id dari class 'menu' yang diklik
    var link = $(this).attr('id');
    // jika id = beranda, maka load halaman view beranda
    if (link == "dashboard") {
      $('#main').load('modules/admin/dashboard.php');
    }
    // jika id = pelanggan, maka load halaman view pelanggan
    else if (link == "cari") {
      $('#main').load('modules/admin/caridata.php');
    } else if (link == "logout") {
      $('#main').load('modules/admin/logout.php');
    }
  });

  $('#logout').click(function() {
    $('.content').load('modules/admin/logout.php');
  });
</script>
<?php
// Mengecek AJAX Request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) : ?>

<div class="dashboard-content container">
    <div class="upper-content mx-5 mt-5">
        <h1 class="raleway-bold purple mb-4">Selamat Datang Admin<br>Perpustakaan Politeknik Negeri Media Kreatif</h1>
        <div class="card-section row mb-5">
            <div class="card-hari col-md white-color">
                <h5 class="text-center ">Pengunjung Hari Ini</h5>
                <h1 class="jumlah-orang text-center raleway-bold" id="getPengunjung"></h1>
            </div>
            <div class="card-kemarin col-md mx-3 white-color">
                <h5 class="text-center">Pengunjung Kemarin</h5>
                <h1 class="jumlah-orang text-center raleway-bold" id="getPengunjungKemarin"></h1>
            </div>
            <div class="card-minggu col-md white-color">
                <h5 class="text-center">Pengunjung Minggu Ini</h5>
                <h1 class="jumlah-orang text-center raleway-bold" id="getPengunjungWeek"></h1>
            </div>
        </div>
    </div>
    <div class="downer-content">
        <div class="downer-component row mb-3">
            <h3 class="raleway-medium orange-color">Daftar Pengunjung Hari Ini</h3>
            <div class="btn-section ml-auto">
                <button class="btn btn-print white-color raleway-medium" onclick="cetak();" name="cetak_hari_ini"><i class="fas fa-print mr-2"></i>Cetak</button>
            </div>
        </div>
        <div class="downer-component table-responsive">
            <table id="pengunjungHariIni" class="table table-striped table-bordered raleway-medium" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Waktu</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Tujuan</th>
                    </tr>
                </thead>
                <tbody id="table">

                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // load file untuk menampilkan jumlah data pada masing-masing id
        $('#table').load('modules/admin/data.php');
        $('#getPengunjung').load('modules/admin/getPengunjung.php');
        $('#getPengunjungKemarin').load('modules/admin/getPengunjungKemarin.php');
        $('#getPengunjungWeek').load('modules/admin/getPengunjungWeek.php');
    });

    function cetak() {
        document.location = "cetak.php?cetak=harini";
    }
</script>

<?php else :
    echo '<script>window.location="../../"</script>';
endif;

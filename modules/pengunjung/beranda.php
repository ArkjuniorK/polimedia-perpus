<div class="container mt-8">
    <div class="content-header-title mx-5">
        <h2 class="raleway-bold purple mb-4">
            Selamat Datang di Perpustakaan<br>
            Politeknik Negeri Media Kreatif Makassar
        </h2>
        <div class="alert alert-custom raleway-light purple">
            Silahkan Isi Data Diri Anda Terlebih Dahulu
        </div>
    </div>
    <div class="content-form mx-5 mt-4">
        <form id="form">
            <div class="form-row">
                <div class="form-group raleway-medium purple col-md-7">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap Daftar Pengunjung">
                </div>
                <div class="form-group raleway-medium purple col-md-5">
                    <label for="nim">NIM</label>
                    <input name="nim" type="text" class="form-control" onKeyPress="return goodchars(event,'0123456789.',this)" id="nim" placeholder="Nomor Identitas">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 raleway-medium purple">
                    <label for="prodi">Prodi</label>
                    <select name="prodi" class="form-control" id="prodi">
                        <option value="0">Prodi..</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Desain Grafis">Desain Grafis</option>
                        <option value="Periklanan">Periklanan</option>
                        <option value="Teknik Grafika">Teknik Grafika</option>
                    </select>
                </div>
                <div class="form-group col-md-6 raleway-medium purple">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control" id="semester">
                        <option value="0">Semester..</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="alumnus">Alumnus</option>
                    </select>
                </div>
            </div>
            <div class="form-group raleway-medium purple">
                <label for="tujuan">Tujuan</label>
                <input name="tujuan" type="text" class="form-control" id="tujuan" placeholder="Masukkan Tujuan Anda">
            </div>

            <div class="form-btn mt-5">
                <button type="button" id="simpan" class="btn btn-simpan raleway-medium">Simpan</button>
                <button type="button" id="hps" class="btn btn-hapus raleway-medium">Hapus</button>
            </div>
        </form>
    </div>
</div>
<div class="footer-content">
    <div class="img-footer-section">
        <div class="text-footer raleway-medium">
            &copy; 2019 - <a class="text-info" href="#">Teguh</a> - Design by <a class="text-info" href="https://github.com/ArkjuniorK/">ArkjuniorK</a>
        </div>
        <img src="assets/img/model.png" id="leaf">
    </div>
</div>
<script type="text/javascript">
    $('#simpan').click(function() {
        // Validasi form input
        // jika nama kosong
        if ($('#nama').val() == "") {
            // focus ke input provider pulsa
            $("#nama").focus();
            // tampilkan peringatan data tidak boleh kosong
            swal("Peringatan!", "Nama tidak boleh kosong.", "warning");
        }
        // jika nim kosong atau 0 (nol)
        else if ($('#nim').val() == "" || $('#nim').val() == 0) {
            // focus ke input nominal
            $("#nim").focus();
            // tampilkan peringatan data tidak boleh kosong
            swal("Peringatan!", "NIM tidak boleh kosong.", "warning");
        }
        // jika prodi kosong
        else if ($('#prodi').val() == "" || $('#prodi').val() == 0) {
            // focus ke input harga
            $("#prodi").focus();
            // tampilkan peringatan data tidak boleh kosong
            swal("Peringatan!", "Prodi tidak boleh kosong.", "warning");
        }
        // jika semester kosong atau 0 (nol)
        else if ($('#semester').val() == "" || $('#semester').val() == 0) {
            // focus ke input nominal
            $("#semester").focus();
            // tampilkan peringatan data tidak boleh kosong
            swal("Peringatan!", "Semester tidak boleh kosong.", "warning");
        }
        // jika tujuan kosong
        else if ($('#tujuan').val() == "") {
            // focus ke input harga
            $("#tujuan").focus();
            // tampilkan peringatan data tidak boleh kosong
            swal("Peringatan!", "Tujuan harus diisi.", "warning");
        }
        // jika semua data sudah terisi, jalankan perintah simpan data
        else {
            // membuat variabel untuk menampung data dari form entri data
            var data = $('#form').serialize();

            $.ajax({
                type: "POST", // mengirim data dengan method POST 
                url: "modules/pengunjung/add.php", // proses insert data
                data: data, // data yang dikirim
                success: function(result) { // ketika sukses menyimpan data
                    if (result === "sukses") {
                        // reset form
                        $('#form')[0].reset();
                        // tampilkan pesan sukses simpan data
                        swal("Sukses!", "Terima Kasih Telah Mengisi Daftar Pengunjung.", "success");
                    } else {
                        // tampilkan pesan gagal simpan data
                        swal("Gagal!", "Data tidak berhasil disimpan.", "error");
                    }
                }
            });
            return false;
        }
    });
</script>
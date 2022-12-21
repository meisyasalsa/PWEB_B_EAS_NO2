<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1 class="display-3">SELAMAT DATANG!</h1>
                <h4>Kementerian Kelautan dan Perikanan adalah kementerian dalam Pemerintah Indonesia yang membidangi urusan kelautan dan perikanan.</h4>
            </div>
        </div>

        <div class="container text-center py-5 my-5">
        
            <div id="countdown"></div>
            
        </div>

        <hr>

        <div class="container p-3">
            <!-- Example row of columns -->
            <div class="text-center">
                <h2>Visi</h2>
                <h4>Mewujudkan Indonesia Maju yang Berdaulat, Mandiri  dan, Berkepribadian, berlandaskan Gotong Royong.</h4>
            </div>
            <div class="text-center mt-5">
                <h2>Misi</h2>
                <h5>Peningkatan Kualitas Manusia, melalui peningkatan Daya Saing SDM KP  dan Pengembangan Inovasi dan Riset Kelautan dan Perikanan.
                    Struktur Ekonomi yang Produktif, Mandiri, dan Berdaya Saing, melalui peningkatan Kontribusi Ekonomi Sektor Kelautan dan Perikanan terhadap Perekonomian Nasional.
                    Mencapai Lingkungan Hidup yang Berkelanjutan, melaluli Peningkatan Kelestarian Sumber Daya Kelautan dan Perikanan.
                    Pengelolaan Pemerintahan yang Bersih, Efektif, dan Terpercaya, melalui Penigkatan Tata Kelola Pemerintahan di KKP.</h5>
            </div>

        </div> <!-- /container -->

        <hr>

        <div class="container p-3">
            <h2 class="text-center">Unit Kerja</h2>
            <div class="row">
                <div class="col text-right">
                    <h5>Sekretariat Jenderal</h5>
                    <h5>Jenderal Pengelolaan Ruang Laut</h5>
                    <h5>Jenderal Perikanan tangkap</h5>
                </div>
                <div class="col-1 text-center">
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                </div>
                <div class="col">
                    <h5>Jenderal Perikanan Budidaya</h5>
                    <h5>Teknik Komputer dan Jaringan</h5>
                    <h5>Inspektorat Jenderal</h5>
                    <h5>Badan Riset dan SDM Kelautan</h5>
                </div>
            </div>
        </div>

        <hr>

        <div class="container p-3">
            <div class="row">
                <div class="col-8">
                    <h4>Galeri KPP</h4>
                    <img src="../../assets/img/1.jpeg" alt="" width="200">
                    <img src="../../assets/img/2.jpg" alt="" width="200">
                    <img src="../../assets/img/3.jpg" alt="" width="200">
                </div>
                <div class="col-4">
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>KPP Hadir untuk Masyarakat Pulau Kecil</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Seleksi Kompetensi CPNS KKP Digelar di 18 Lokasi</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>KPP Latih Calon Operator Jaring Ikan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">

    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>"+hari+" hari </h1><h1 class='d-inline'>"+jam+" jam </h1><h1 class='d-inline'>"+menit+" menit </h1><h1 class='d-inline mt-5'>"+detik+" detik</h1>";
    }, 1000);

</script>
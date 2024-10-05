<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['nama']) && isset($_SERVER['email'])) {
    header(("Location: dashboard.php"));
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <!-- END CSS -->
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-md-9">

                <!-- START HEADING -->
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="./img/poto.jfif" alt="">
                    </div>
                    <div class="col text-center d-flex flex-column justify-content-center">
                        <h1>SELAMAT DATANG DI PPKD JAKARTA PUSAT</h1>
                        <p>Jl, Karet Pasar Baru Barat V No.23 - Karet Tengsin Jakarta Pusat</p>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <img src="./img/poto.jfif" alt="">
                    </div>
                </div>
                <!-- END HEADING -->

                <div class="row mb-5 mt-3">

                    <div class="col-md shadow-lg rounded-4">

                        <!-- START NAVBAR -->
                        <nav class="navbar  navbar-expand-lg shadow-lg mt-3 align-items-center" data-bs-theme="dark"
                            style="background-color: #bee1fa;">
                            <button class="navbar-toggler mx-5 my-2 bg-dark" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">

                                </span>
                            </button>
                            <div class="collapse navbar-collapse ms-5" id="navAltMarkup">
                                <div class="navbar-nav">
                                    <a href="./index.php"
                                        class="nav-link active fs-5 text-dark"><strong>Home</strong></a>
                                    <a href="./login.php" class="nav-link active fs-5 text-dark">Login</a>
                                    <a href="" class="nav-link active fs-5 text-dark">Departement</a>
                                </div>
                            </div>
                        </nav>
                        <!-- END NAVBAR -->

                        <marquee behavior="" direction="" class="my-3">Angkatan 3 Sedang Membuat Project WEB</marquee>

                        <!-- START CAROUSEL -->
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md">
                                <div id="carauselAuto" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./img/gambar1.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="./img/gambar2.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="./img/gambar3.jpg" alt="" class="d-block w-100">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->

                        <section id="hero">
                            <div class=" row mt-5 mb-5 px-3">
                                <div class="col-md-8 border-none border-4 border-start border-dark">
                                    <h1>Pusat Pelatihan Kerja Daerah Jakarta Pusat</h1>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-9">
                                    <p class="fs-4">Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat merupakan Unit
                                        Pelayanan Teknis (UPT) Dinas Tenaga Kerja dan Transmigrasi (Diknakertras)
                                        Provinsi
                                        DKI Jakarta. Berdasarkan SK Gubernur Provinsi DKI Jakarta No. 160 Tahun 2002
                                        tentang
                                        Pembentukan Organisasi dan Tata Kerja Unit Pelaksanaan Teknis di lingkungan
                                        Disnakertrans Provinsi DKI Jakarta disebut Balai Latihan Kerja Daerah (BLKD)
                                        Jakarta
                                        Pusat yang tugas utamanya adalah melaksanakan pelatihan di berbagai jurusan.
                                        Selanjutnya dengan diberlakukannya Peraturan Gubernur Provinsi DKI Jakarta Nomor
                                        33
                                        Tahun 2015 Tentang Pembentukan, Organisasi dan Tata Kerja Pusat Pelatihan Kerja
                                        Daerah, nama Balai Latihan Kerja Daerah (BLKD) Jakarta Pusat berubah nama
                                        menjadi
                                        Pusat Pelatihan Kerja Daerah Jakarta Pusat atau yang disingkat dengan PPKD
                                        Jakarta
                                        Pusat. Kemudian diperbaharui lagi dengan dikeluarkan Peraturan Gubernur Nomor
                                        147
                                        Tahun 2019 Tentang Organisasi Dan Tata Kerja Dinas Tenaga Kerja, Transmigrasi
                                        Dan
                                        Energi yang berlaku hingga saat ini</p>
                                </div>
                            </div>
                        </section>
                        <!-- END HERO SECTION-->

                        <section id="articles">
                            <div class="row mt-5 mb-5 px-3">
                                <div class="col-md-8 border-none border-4 border-start border-dark">
                                    <h1>Kejuruan PPKD Jakarta Pusat</h1>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img">
                                                <img src="./img/kotu.jpg" alt=""
                                                    class="d-block w-100 img-fluid rounded-3 mt-2">
                                            </div>
                                            <div class="title">
                                                <h3>Kota Tua</h3>
                                            </div>
                                            <div class="isi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    blanditiis deserunt asperiores dolores temporibus earum placeat
                                                    nesciunt
                                                    delectus, et doloribus!</p>
                                            </div>
                                            <div class="button">
                                                <button class="btn btn-primary">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img">
                                                <img src="./img/dufan.jpg" alt=""
                                                    class="d-block w-100 img-fluid rounded-3 mt-2">
                                            </div>
                                            <div class="title">
                                                <h3>Dunia Fantasy</h3>
                                            </div>
                                            <div class="isi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    blanditiis deserunt asperiores dolores temporibus earum placeat
                                                    nesciunt
                                                    delectus, et doloribus!</p>
                                            </div>
                                            <div class="button">
                                                <button class="btn btn-primary">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img">
                                                <img src="./img/sea.jpg" alt=""
                                                    class="d-block w-100 img-fluid rounded-3 mt-2">
                                            </div>
                                            <div class="title">
                                                <h3>Sea World</h3>
                                            </div>
                                            <div class="isi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    blanditiis deserunt asperiores dolores temporibus earum placeat
                                                    nesciunt
                                                    delectus, et doloribus!</p>
                                            </div>
                                            <div class="button">
                                                <button class="btn btn-primary">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img">
                                                <img src="./img/kotu.jpg" alt=""
                                                    class="d-block w-100 img-fluid rounded-3 mt-2">
                                            </div>
                                            <div class="title">
                                                <h3>Kota Tua</h3>
                                            </div>
                                            <div class="isi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    blanditiis deserunt asperiores dolores temporibus earum placeat
                                                    nesciunt
                                                    delectus, et doloribus!</p>
                                            </div>
                                            <div class="button">
                                                <button class="btn btn-primary">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- END ARTICLES SECTION-->

                        <footer class=" px-2 mb-3" style="background-color: #bee1fa;">
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted">Copyright @ 2024 Ebenhaiser J. Caprisiano</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="text-muted">Privasi Policy</p>
                                </div>
                            </div>
                        </footer>
                        <!-- END FOOTER -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVA SCRIPT -->
    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- END JAVA SCRIPT -->
</body>

</html>
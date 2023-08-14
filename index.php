<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <div class="container-fluid d-flex">
        <div class="row">
            <div class="Collapsible col">
                <div class="flex-shrink-0 p-3">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                        <img class="logo" src="img/logo.png" alt="" srcset="">
                        <span class="fs-5 fw-semibold">
                            <?php echo $clubName; ?>
                        </span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <ul class=" nav  flex-column ">
                            <li class="nav-item">
                                <a href="#kataPengantar" class="nav-link text-black">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="pages/artikel.php" class="nav-link text-black">
                                    Artikel
                                </a>
                            </li>
                            <li>
                                <a href="#Event" class="nav-link text-black">
                                    Event
                                </a>
                            </li>
                            <li>
                                <a href="pages/galeri.php" class="nav-link text-black">
                                    Galery Foto
                                </a>
                            </li>
                            <li>

                                <a href="#klien" class="nav-link text-black">
                                    Klien Kami
                                </a>
                            </li>
                            <li class="border-top my-3"></li>
                            <li class="mb-1">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Account
                                </button>
                                <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Admin</a>
                                        </li>
                                        <li><a href="#"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sing
                                                In</a>
                                        </li>
                                        <li><a href="#"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign
                                                out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </ul>

                </div>
            </div>
        </div>

        <div class="col-10 ">
            <nav class=" navbar">
                <ul class="nav-links">
                    <li><a href="#Profile">Profil</a></li>
                    <li><a href="#visiMisi">Visi dan Misi</a></li>
                    <li><a href="#Produk">Produk kami</a></li>
                    <li><a href="#kontak">Kontak kami</a></li>
                    <li><a href="#About">About us</a></li>
                </ul>
            </nav>
            <div class="col-12 m-3">


                <section id="kataPengantar">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Club Motor
                                        <?php echo $clubName; ?>
                                    </h1>
                                    <hr>
                                </div>

                                <div class="col-12 mt-3">
                                    <p class="fw-bold text-center color-acsent">
                                        <?php echo $katPengantarS; ?>
                                    </p>
                                    <p class="isi text-center">
                                        <?php echo $katPengantarC; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tentak Kami -->
                <section id="About">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">About Us</h1>
                                    <hr>
                                </div>

                                <div class="col-12 mt-3">
                                    <p class="fw-bold text-center color-acsent">
                                        <?php echo $aboutS; ?>
                                    </p>
                                    <p class="isi text-center">
                                        <?php echo $aboutC; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Visi Misi -->
                <section id="visiMisi">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Visi Misi</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="fw-bold text-center color-acsent">"Visi:"
                                    </p>
                                    <p class="">
                                        <?php echo $visiMisiV; ?>
                                    </p>
                                    <p class="fw-bold text-center color-acsent">"Misi:"
                                    </p>
                                    <?php echo $visiMisiM; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Visi Misi -->

                <!-- Profile -->
                <section id="Profile">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Profile</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="fw-bold text-center color-acsent">Pengalaman Club, dan Kelebihan Club
                                    </p>
                                    <p class="">Kami telah menorehkan jejak yang mengesankan dalam komunitas motor:
                                    </p>
                                    <?php echo $profileC; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Profil -->

                <!-- Produk / Jasa Club -->
                <section id="Produk">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Produk / Jasa Club</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <?php $produkC; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Produk -->

                <!-- Event -->
                <section id="Event">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Event</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="">
                                        <?php echo $eventC; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Even -->
                <!-- Klien Kami -->
                <section id="klien">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Klien Kami</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="fw-bold color-acsent">Daftar Klien
                                    </p>
                                    <p>Perusahaan : Cipta Kerja</p>
                                    <p>Instansi : Wisata Nasyonal</p>
                                    <p>Perusahaan : Nama Perusahaan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Klien Kami -->
                <!-- Kontak -->
                <section id="kontak">
                    <div class="container-fluid mt-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h1 class="fw-bold text-center">Kontak Kami</h1>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3">
                                    <p>Alamat :Makassar, Panakukang jl.maranti</p>
                                    <p>NO : 085394091599</p>
                                    <p>Email : monkye@gmail.com</p>
                                    <p>fax : 000000000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Kontak -->

            </div>

        </div>

    </div>

</body>
<script src="js/script.js"></script>
<script src="bootstrap-5.3.1/js/bootstrap.js"></script>

</html>
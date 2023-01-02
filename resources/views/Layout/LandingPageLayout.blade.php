<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSUD DAYAKU RAJA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="{{ asset('img/dara.png') }}" type="image/x-icon">

   
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    @include('sweetalert::alert')
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>                 
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span class="fs-5 fw-bold">+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-10">
        <a href="" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0">RSUD Dayaku Raja</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('Informasi/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu bg-light m-0 ">
                        <a href="/HalamanError" class="dropdown-item {{ Request::is('Informasi/CapaianIndikator') ? 'active' : '' }}">Capaian Indikator PMKP</a>
                        <a href="/Informasi/BeritaKesehatan" class="dropdown-item {{ Request::is('Informasi/BeritaKesehatan') ? 'active' : '' }}">Berita Kesehatan</a>
                        <a href="/Informasi/JadwalDokter" class="dropdown-item {{ Request::is('Informasi/JadwalDokter') ? 'active' : '' }}">Jadwal Dokter</a>
                        <a href="/Informasi/TataTertib" class="dropdown-item {{ Request::is('Informasi/TataTertib') ? 'active' : '' }}">Tata Tertib Pengunjung</a>
                        <a href="/Informasi/LaporanKeluhan" class="dropdown-item {{ Request::is('Informasi/LaporanKeluhan') ? 'active' : '' }}">Lapor Keluhan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Rumah Sakit</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="" class="dropdown-item">Visi, Misi dan Motto</a>
                        <a href="" class="dropdown-item">Struktur Organisasi</a>
                        <a href="" class="dropdown-item">Sejarah Rumah Sakit</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('Fasilitas/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Fasilitas</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/Fasilitas/InstalasiRawatdarurat" class="dropdown-item {{ Request::is('Fasilitas/InstalasiRawatdarurat') ? 'active' : '' }}">Instalasi Gawat Darurat</a>
                        <a href="/Fasilitas/InstalasiRawatInap" class="dropdown-item {{ Request::is('Fasilitas/InstalasiRawatInap') ? 'active' : '' }}">Instalasi Rawat Inap</a>
                        <a href="/Fasilitas/InstalasiRawatJalan" class="dropdown-item {{ Request::is('Fasilitas/InstalasiRawatJalan') ? 'active' : '' }}">Instalasi Rawat Jalan</a>
                        <a href="/Fasilitas/InstalasiKamarOperasi" class="dropdown-item {{ Request::is('Fasilitas/InstalasiKamarOperasi') ? 'active' : '' }}">Instalasi Kamar Operasi</a>
                        <a href="/Fasilitas/InstalasiLab" class="dropdown-item {{ Request::is('Fasilitas/InstalasiLab') ? 'active' : '' }}">Instalasi Laboratorium</a>
                        <a href="/Fasilitas/InstalasiRadiologi" class="dropdown-item {{ Request::is('Fasilitas/InstalasiRadiologi') ? 'active' : '' }}">Instalasi Radiologi</a>
                        <a href="/Fasilitas/InstalasiFarmasi" class="dropdown-item {{ Request::is('Fasilitas/InstalasiFarmasi') ? 'active' : '' }}">Instalasi Farmasi</a>
                        <a href="/Fasilitas/InstalasiCareUnit" class="dropdown-item {{ Request::is('Fasilitas/InstalasiCareUnit') ? 'active' : '' }}">Intensive Care Unit</a>
                        <a href="/Fasilitas/InstalasiPenunjang" class="dropdown-item {{ Request::is('Fasilitas/InstalasiPenunjang') ? 'active' : '' }}">Instalasi Penunjang</a>

                    </div>
                </div>
            </div>
            <a href="/HalamanError" class="btn btn-primary px-3 d-none d-lg-block">Daftar Online</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/dara1.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Industrial Solution
                                        Providing Company</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/dara2.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable
                                        Industry Solution</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/dara3.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable
                                        Industry Solution</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/dara4.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable
                                        Industry Solution</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    @yield('LandigPage')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Kantor Kami</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Poros Kota Bangun - Tenggarong Km 5</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>-</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>-</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Jam Pelayanan Poliklinik</h5>
                    <p class="mb-1">Senin - Jumat</p>
                    <h6 class="text-light">08:00 am - 01:00 pm</h6>
                    <p class="mb-1">Sabtu - Minggu</p>
                    <h6 class="text-light">Libur</h6>
                    <p class="mb-1">Tanggal Merah Dan Hari Besar</p>
                    <h6 class="text-light">Libur</h6>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Instalasi Gawat Darurat</h5>
                    <p>Selalu Sedia Melayani 24 Jam</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
            </p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a> Distributed
                By: <a href="https://themewagon.com">ThemeWagon</a> </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
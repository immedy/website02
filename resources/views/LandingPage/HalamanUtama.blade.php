@extends('Layout.LandingPageLayout')
@section('LandigPage')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Tentang Kami</p>
                    <h1 class="display-5 mb-4">Rumah Sakit Umum Daerah Dayaku Raja Kota Bangun</h1>
                    <p class="mb-4">Rumah Sakit Umum Daerah (RSUD) Dayaku Raja Kabupaten Kutai Kartanegara
                        merupakan Rumah Sakit milik Pemerintah Kabupaten Kutai Kartanegara Provinsi Kalimantan Timur sesuai
                        Peraturan Bupati Nomor 27 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis (UPT) RSUD Dayaku
                        raja Kota Bangun Tahun 2013.</p>
                    <p class="mb-4">
                        RSUD Dayaku Raja dibangun pada tahun 2013 dan diresmikan oleh Bupati Kutai Kartanegara pada tanggal
                        13 Maret 2013 dengan jumlah pegawai sebanyak 210 orang, dan sekarang menjadi Satuan Kerja Perangkat
                        Daerah (SKPD) sendiri mengacu berdasarkan Peraturan Daerah Kutai Kartanegara Nomor 10 Tahun 2014
                        tentang Pembentukan Struktur dan Organisasi Tata Kerja Rumah sakit Umum Daerah Dayaku Raja Kota
                        Bangun.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="{{ asset('img/feature.jpg') }}" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/o_nxIQTM_B0" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Kenapa Harus Ke Dayaku Raja</p>
                    <h1 class=" ">Sesuai Motto Rumah Sakit </h1>
                    <h1 class=" mb-4">MELAYANI SEPENUH DAYAKU</h1>

                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Tempat Strategis</h4>
                                    <span>Menjadi rumah sakit rujukan bagi 7 Kecamatan yang ada dihulu mahakam
                                        Kabupaten Kutai Kartanegara</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Jarak Tempuh</h4>
                                    <p class="mb-0">Berjarak ± 2 Jam Ke Ibu Kota Kabupaten </p>
                                    <p class="mb-0">Berjarak ± 3 Jam Ke Ibu Kota Propinsi </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Pegawai Profesional</h4>
                                    <p class="mb-0">Mempunyai Tenaga Kesehatan Yang profesional di setiap bidang yang ada
                                        di rumah sakit </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>24/7 Pelayanan IGD</h4>
                                    <p class="mb-0">Tenaga Kesehatan yang selalu siap membantu pasien</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Informasi Seputar Rumah Sakit Dan Kesehatan</p>
            </div>
            <div class="row gy-5 gx-4">
                @foreach ($berita as $p)
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('storage/' . $p->gambar) }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">{{ $p->referensi->deskripsi }}</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i
                                            class="far fa-user text-primary me-2"></i>{{ $p->user->nama }}</small>
                                    <small><i
                                            class="far fa-calendar-alt text-primary me-2"></i>{{ $p->created_at->diffForHumans() }}</small>
                                </div>
                                <h4 class="mb-3">{{ $p->judul }}</h4>
                                <p>{{ $p->exeprt }}</p>
                                <a class="text-uppercase"
                                    href="/Informasi/BeritaKesehatan/{{ Crypt::encryptString($p->id) }}">Baca Selengkapnya
                                    <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Laporan Start -->
    {{-- <div class="container-fluid py-4 d-flex flex-row justify-content-center bg-dark">
        <div class="container" >           
                <div class="col-m wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row ">
                        <div class="col wow fadeIn " data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/icon-06-primary.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col wow fadeIn justify-content-md-center" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/checklist.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col wow fadeIn " data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/icon-06-primary.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col wow fadeIn justify-content-md-center" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/checklist.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col wow fadeIn " data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/icon-06-primary.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col wow fadeIn justify-content-md-center" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div
                                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <a href="/">
                                        <img class="align-self-center mb-3" src="{{ asset('icon/checklist.png') }}"
                                            alt="" />
                                        <h5 class="mb-0">Laporan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
        </div>
    </div> --}}
    <!-- Laporan End -->


    <!-- dokter Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="fw-medium text-uppercase text-white mb-2">Dokter RSUD DAYAKU RAJA</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            @foreach ($dokter as $p)
                <a class="project-item" href="/Informasi/JadwalDokter">
                    <img class="img-fluid" src="{{ asset('storage/' . $p->gambar) }}" alt="">
                    <div class="project-title">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary mt-3">Dokter {{ $p->ReferensiSmf->deskripsi }}</h5>
                            </div>
                            <div class="col-12 ">
                                <p class="text-primary mb-0 ">{{ $p->nama }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <!-- dokter End -->
@endsection

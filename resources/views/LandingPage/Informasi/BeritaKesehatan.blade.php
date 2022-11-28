@extends('Layout.LandingPageLayout')
@section('LandigPage')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($berita as $p)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $p->gambar) }}" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                            href="">{{ $p->referensi->deskripsi }}</a>
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $p->user->nama }}</small>
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $p->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class=" d-flex">
                                            <small class="me-3"><i class="far fa-pen text-primary me-2"></i>{{ $p->user->referensi->deskripsi }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $p->judul }}</h4>
                                        <p>{{ $p->exeprt }}</p>
                                        <a class="text-uppercase" href="/Informasi/BeritaKesehatan/{{ Crypt::encryptString($p->id) }}">Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

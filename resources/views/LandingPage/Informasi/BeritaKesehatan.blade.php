@extends('Layout.LandingPageLayout')
@section('LandigPage')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-9">
                <div class="row gy-5 gx-4">
                    @foreach ($berita as $p)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('storage/'. $p->gambar) }}" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ asset('storage/'. $p->gambar) }}" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">{{ $p->judul }}</h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">{{$p->exeprt}}</p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-2">
                <!-- Search Form Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Kategori</h3>
                    </div>
                    {{-- @foreach ($kategori as $p) --}}
                        <div class="link-animated d-flex flex-column justify-content-start">
                            {{-- <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i
                                    class="bi bi-arrow-right me-2"></i>{{ $p->deskripsi }}</a> --}}
                        </div>
                    {{-- @endforeach --}}

                </div>
                <!-- Category End -->
            </div>
        </div>
    </div>
</div>
@endsection
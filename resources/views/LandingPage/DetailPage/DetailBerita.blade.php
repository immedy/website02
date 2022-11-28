@extends('Layout.LandingPageLayout')
@section('LandigPage')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-full">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('storage/' . $berita->gambar) }}" alt="">
                    <h1 class="mb-4">{!! $berita->judul !!}</h1>
                    {!! $berita->berita !!}

                </div>
                <!-- Blog Detail End -->

            </div>

            <!-- Sidebar Start -->
            {{-- <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->
                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Berita Yang Lain</h3>
                    </div>
                    @foreach ($posting as $post)
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('storage/' . $post->foto) }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/BeritaDetail/{{ Crypt::encryptString($post->id) }}"
                                class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{ $post->judul }}
                            </a>
                        </div>
                    @endforeach

                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->
            </div> --}}
            <!-- Sidebar End -->
        </div>
    </div>
</div>
    
@endsection
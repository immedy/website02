@extends('Layout.LandingPageLayout')
@section('LandigPage')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-full">
                @foreach ($tatib as $p)
                <div class="mb-5">
                    <h1 class="mb-4">{!! $p->unit !!}</h1>
                    {!! $p->textarea !!}
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
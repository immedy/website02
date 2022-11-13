@extends('Layout.LandingPageLayout')
@section('LandigPage')
<div class="container mt-5">
    <div class="card-header d-flex align-items-center justify-content-between pb-0 ">
        <div>
            <h5>Dokter Spesialis</h5>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 2%">NO</th>
                <th style="width: 45%">Nama Dokter</th>
                <th scope="col">Poliklinik</th>
                <th style="width: 5%">Senin</th>
                <th style="width: 5%">Selasa</th>
                <th style="width: 5%">Rabu</th>
                <th style="width: 5%">Kamis</th>
                <th style="width: 5%">Jumat</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
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
                @foreach ($dokter as $p)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $p->nama }}</td>
                    <td style="text-justify: center"> {{ $p->ReferensiPoliklinik->deskripsi }}</td>

                    @if ($p->senin == 1)
                        <td><i class="fa fa-check text-primary me-3"></i></td>
                    @else
                        <td><i class="fa fa-times text-primary me-3"></i></td>
                    @endif
                    @if ($p->selasa == 1)
                        <td><i class="fa fa-check text-primary me-3"></i></td>
                    @else
                        <td><i class="fa fa-times text-primary me-3"></i></td>
                    @endif
                    @if ($p->rabu == 1)
                        <td><i class="fa fa-check text-primary me-3"></i></td>
                    @else
                        <td><i class="fa fa-times text-primary me-3"></i></td>
                    @endif
                    @if ($p->kamis == 1)
                        <td><i class="fa fa-check text-primary me-3"></i></td>
                    @else
                        <td><i class="fa fa-times text-primary me-3"></i></td>
                    @endif
                    @if ($p->jumat == 1)
                        <td><i class="fa fa-check text-primary me-3"></i></td>
                    @else
                        <td><i class="fa fa-times text-primary me-3"></i></td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

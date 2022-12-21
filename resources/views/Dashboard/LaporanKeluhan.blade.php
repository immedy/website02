@extends('Layout.DashboardLayout')
@section('DashboardLayout')
<div class="card">
    <div class="card-header">
        <div class="modal-info me-1 d-inline-block d-flex flex-row-reverse">
            <!-- Button trigger for info theme modal -->
            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#info">
                <i class="bi bi-plus-square-fill"></i>
            </button>
            <!--info theme Modal -->
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pelaporan</th>
                        <th>Nama Pelapor</th>
                        <th>Nama Pasien [NORM]</th>
                        <Th>Alamat</Th>
                        <th style="text-align: center">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluhan as $p)
                    <tr>
                        <td class="col-1">
                            <div class="d-flex align-items-center">
                                <p class="font-bold ms-3 mb-0">{{ $loop->iteration  }}</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $p->created_at }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $p->namapelapor }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $p->namapasien }}-[{{ $p->norm }}]</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $p->alamatpasien }}</p>
                        </td>

                        <td style="text-align: right">
                            <a href="/keluhan/{{ $p->id }}" class="btn icon btn-outline-primary"><i class="bi bi-card-list"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
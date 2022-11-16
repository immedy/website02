@extends('Layout.DashboardLayout')
@section('DashboardLayout')
    <div class="card">
        <div class="card-body">
            <div class="buttons d-flex flex-row-reverse">
                <a href="/home/create" class="btn icon btn-primary"><span class="bi bi-pencil">Tambah Referessi Instalasi</span></a>
        </div>
            <div class="table-responsive">
                <table class="table table-hover table-lg" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Instlasi</th>
                            <th>Unit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($user as $p) --}}
                        <tr>
                            <td class="col-1">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-7">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-3">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">aksi</p>
                            </td>

                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

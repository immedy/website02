@extends('Layout.DashboardTemplate')
@section('DashboardLayout')
<div class="card border border-info">
    <div class="card-body">
        <div class="buttons d-flex flex-row-reverse">
            <a href="/TambahTentangRs" class="btn icon btn-primary"><span class="bi bi-pencil">Tambah Referessi
                    Instalasi</span></a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 30%">Judul</th>
                        <th style="width: 40%">Deskripsi</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($dashboard as $p) --}}
                        <tr>
                            <td class="col-1">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0"></p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0"></p>
                            </td>
                            <td style="text-align: right">
                                <a href="" class="btn icon btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <form action="" method="" class="d-inline">
                                    
                                    <button class="btn icon btn-outline-danger"
                                        onclick="return confirm ('Apakah Anda Yakin Menghapus Berita Ini ?')">
                                        <i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
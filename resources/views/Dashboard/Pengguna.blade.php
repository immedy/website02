@extends('Layout.DashboardLayout')
@section('DashboardLayout')
<div class="card">
    <div class="card-header">
        <h5>Pengguna</h5>
        <div class="modal-info me-1 mb-1 d-inline-block d-flex flex-row-reverse">
            <!-- Button trigger for info theme modal -->
            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#info">
                <i class="bi bi-plus-square-fill"></i>
            </button>
            <!--info theme Modal -->
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-lg" id="table1">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Ruangan</th>
                        <Th>Username</Th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $p)
                        <tr>
                            <td class="col-1">
                                <p class=" mb-0">{{ $p->nip }}</p>
                            </td>
                            <td class="col-5">
                                <p class=" mb-0">{{ $p->nama }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $p->referensi->deskripsi }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $p->username }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">aksi</p>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- Awal Modal --}}
<section class="basic-choices">
    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel130"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
            <div class="modal-content">
                <form class="form form-vertical" action="/pengguna" method="post" data-parsley-validate>
                    @csrf
                    <div class="modal-header bg-info">
                        <h5 class="modal-title white" id="myModalLabel130">
                            Tambah Pengguna
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Pilih Ruangan</label>
                                        <div class="form-group">
                                            <select class="choices form-select" name="referensi_id" required>
                                                <option selected disabled value="">Silahkan Pilih</option>
                                               @foreach ($referensi as $p )
                                                <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>       
                                               @endforeach                                 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="nip">Tambahkan NIP Pengguna </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Tambahkan Nip Pengguna"
                                                id="nip" name="nip" required >
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                  </div>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="nama">Tambahkan Nama Pengguna </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Tambahkan Nama Pengguna"
                                                id="nama" name="nama" required >
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="username">Tambahkan Username </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Tambahkan username"
                                                id="username" name="username" required >
                                            <div class="form-control-icon">
                                                <i class="bi bi-file-earmark-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password">Tambahkan Password </label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" placeholder="Tambahkan Password"
                                                id="password" name="password" required >
                                            <div class="form-control-icon">
                                                <i class="bi bi-file-earmark-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light-secondary">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                        <button type="submit" class="btn btn-info ml-1">
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- Akhir Modal --}}
@endsection
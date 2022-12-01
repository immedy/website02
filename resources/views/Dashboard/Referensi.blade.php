@extends('Layout.DashboardLayout')
@section('DashboardLayout')
    <div class="card">
        <div class="card-header">
            <h5>Referensi</h5>
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
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Deskripsi</th>
                            <Th>Status</Th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referensi as $p)
                            <tr>
                                <td class="col-1">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold ms-3 mb-0">{{ $loop->iteration }}</p>
                                    </div>
                                </td>
                                <td class="col-1">
                                    <p class=" mb-0">{{ $p->jenis }}</p>
                                </td>
                                <td class="col-10">
                                    <p class=" mb-0">{{ $p->deskripsi }}</p>
                                </td>
                                <td class="col-auto">
                                    @if ($p->status = 1)
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-success form-check-glow" checked
                                                name="customCheck" id="customColorCheck3">
                                        </div>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-danger form-check-glow" checked
                                                name="customCheck" id="customColorCheck4">                            
                                        </div>
                                    </div>
                                    @endif
                                    
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
        <div class="modal fade text-left" id="info" tabindex="1" role="dialog" aria-labelledby="myModalLabel130"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-m" role="document">
                <div class="modal-content">
                    <form class="form form-vertical" action="/referensi" method="POST">
                        @csrf
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Tambah Referensi
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
                                            <label for="first-name-icon">Pilih Jenis Kategori</label>
                                            <div class="form-group">
                                                <select class="choices form-select" name="jenis" id="jenis" onchange="update()" >
                                                    <option selected disabled value="">Silahkan Pilih</option>
                                                    @foreach ($kategori as $p )
                                                    <option value="{{ $p->id }}">{{ $p->kategori }}</option>    
                                                    @endforeach                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Jenis Kategori Referensi </label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tambahkan Referensi"
                                                    id="deskripsi" name="deskripsi">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-gear"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary">
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

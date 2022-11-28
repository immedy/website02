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
                            <th>Kategori</th>
                            <th>Deskripsi/Judul</th>
                            <th>User</th>
                            <Th>Status</Th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $p)
                        <tr>
                            <td class="col-1">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">{{ $loop->iteration  }}</p>
                                </div>
                            </td>
                            <td class="col-1">
                                <p class=" mb-0">{{ $p->referensi->deskripsi }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $p->judul }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $p->user->nama }}-[{{ $p->user->referensi->deskripsi }}]</p>
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
                            <td style="text-align: right">
                                <a href="" class="btn icon btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                    
                                        <form action="" method="" class="d-inline">
                                            {{-- @method('DELETE')
                                        @csrf --}}
                                            <button class="btn icon btn-outline-danger"
                                                onclick="return confirm ('Apakah Anda Yakin Menghapus Berita Ini ?')">
                                                <i class="bi bi-trash"></i></button>

                                        </form>
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
            <div class="modal-dialog modal-dialog-top modal-full" role="document">
                <div class="modal-content">
                    <form class="form form-vertical" action="/berita" method="POST" enctype="multipart/form-data">
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
                                                <select class="choices form-select" name="referensi_id" required>
                                                    <option selected disabled value="">Silahkan Pilih</option>
                                                    @foreach ($referensi as $p)
                                                        <option value="{{ $p->id }}">{{ $p->deskripsi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Tambahkan Judul Berita</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tambahkan Judul Berita"
                                                    id="deskripsi" name="judul" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-stickies"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Tambahkan Foto/Gambar Berita</label>
                                            <div class="position-relative">
                                                <input type="file" class="form-control" placeholder="Tambahkan Foto/Gambar"
                                                    id="gambar" name="gambar">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-image-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="">Tambahkan Artikel</label>
                                            <div class="position-relative">
                                                <textarea name="berita" id="editor" cols="30" rows="1000" required placeholder="Tulis Artikel Di sini"><div id="editor">
                                                </div></textarea>
                                                <div class="form-control-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="Close" class="btn icon btn-outline-danger">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                            <button type="submit" class="btn icon btn-outline-success">
                                <span class="d-none d-sm-block">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

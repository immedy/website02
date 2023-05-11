@extends('Layout.DashboardTemplate')
@section('DashboardLayout')
 <section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Laporan Keluhan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Pelapor</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"  class="form-control" disabled  value="{{ $DetailKeluhan->namapelapor }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Alamat Pelapor</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"   class="form-control" disabled value="{{ $DetailKeluhan->alamtpelapor }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>No Handphone Pelapor</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"   class="form-control" disabled value="{{ $DetailKeluhan->nohandphone }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Hubungan Dengan Pasien</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"  class="form-control" disabled value="{{ $DetailKeluhan->referensi->deskripsi }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Pasien</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"  class="form-control" disabled value="{{ $DetailKeluhan->namapasien }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>No Rekam Medis</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"  class="form-control" disabled value="{{ $DetailKeluhan->norm }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tempat Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"   class="form-control" disabled value="{{ $DetailKeluhan->tempatlahir }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"  class="form-control" disabled value="{{ $DetailKeluhan->tanggallahir }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Alamat Pasien</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"   class="form-control" disabled value="{{ $DetailKeluhan->alamatpasien }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Keluhan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea type="text"  class="form-control"  style="height: 150px" disabled >{{ $DetailKeluhan->keluhan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection
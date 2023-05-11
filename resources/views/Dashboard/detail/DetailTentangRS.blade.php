@extends('Layout.DashboardTemplate')
@section('DashboardLayout')
<form action="" method="post">
    @csrf
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="" class="form-label">Judul </label>
                                        <input type="text" name="unit" id="Deskripsi/Unit" class="form-control"
                                            placeholder="Tambahkan Nama Unit"  required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <textarea name="textarea" id="editor" cols="30" rows="1000" required placeholder="Tulis Artikel Di sini"><div id="editor">
                            </div></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger me-3   mb-3">
                        reset
                    </button>
                    <button type="submit" class="btn btn-light-success me-3 mb-3">
                        Simpan
                    </button>
                </div>
            </div>
        </section>
    </div>
</form>
@endsection
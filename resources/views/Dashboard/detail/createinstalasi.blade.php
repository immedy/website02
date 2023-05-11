@extends('Layout.DashboardTemplate')
@section('DashboardLayout')
    
    <form action="/home" method="post" enctype="multipart/form-data">
        @csrf
        <section id="multiple-column-form">
            <div class="row match-height">
                {{-- Insert Nama Instalasi dan Unit --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Pilih Menu</label>
                                            <select class="choices form-select" name="kategori" id="kategori-dropdown"
                                                required>
                                                <option selected disabled value="">Silahkan Pilih</option>
                                                @foreach ($kategori as $p)
                                                    <option value="{{ $p->id }}">{{ $p->kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Jenis Referensi</label>
                                            <select class="form-select" name="jenis" id="jenis-dropdown"
                                                required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tambahkan Deskripsi Menu</label>
                                            <input type="text" name="unit" id="Deskripsi/Unit" class="form-control"
                                                placeholder="Tambahkan Nama Unit"  required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Insert Nama Instalasi dan Unit --}}
                {{-- upload Gambar --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-control">
                                            <label for="gambar" class="form-label">Tambahkan Foto</label>
                                            <input type="file" id="gambar" class="form-control" name="gambar" /
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- upload Gambar --}}
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
    <script>
        $(document).ready(function() {
            $('#kategori-dropdown').on('change', function() {
                var jenis = this.value;
                $("#jenis-dropdown").html('');
                $.ajax({
                    url:"{{url('getJenis')}}",
                    type: "POST",
                    data: {
                    jenis: jenis,
                    _token: '{{csrf_token()}}' 
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#jenis-dropdown').html('<option value="">Pilih Referensi/Unit</option>'); 
                        $.each(result.referensi,function(key,value){
                        $("#jenis-dropdown").append('<option value="'+value.id+'">'+value.deskripsi+'</option>');
                        }); 
                    }
                });
            });
        });
        </script>


@endsection


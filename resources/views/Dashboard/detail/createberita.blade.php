@extends('Layout.DashboardLayout')
@section('DashboardLayout')
    
 
        
            <form action="/home" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">isi</h4>
                    </div>
                    <div class="card-body">
                             
                        <div id="snow" >
                            <input id="snow" name="snow" class="form-control" type="hidden" value=""
                        aria-describedby="basic-icon-default-message2">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>


    <script src="{{ asset('dashboard/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/quill.js') }}"></script>
@endsection

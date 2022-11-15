@extends('Layout.DashboardLayout')
@section('DashboardLayout')
<div class="card">
    <div class="card-header">
        <h4>Referensi</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Jeniss</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">Congratulations on your graduation!</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/2.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                this design?</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
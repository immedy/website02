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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referensi as $p)
                            <tr>
                                <td class="col-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="assets/images/faces/5.jpg">
                                        </div>
                                        <p class="font-bold ms-3 mb-0">{{ $loop->iteration }}</p>
                                    </div>
                                </td>
                                <td class="col-2">
                                    <p class=" mb-0">{{ $p->jenis }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $p->deskripsi }}</p>
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
@endsection

<div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel130"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title white" id="myModalLabel130">
                    Info Modal
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                Tart lemon drops macaroon oat cake chocolate
                toffee chocolate bar icing. Pudding jelly
                beans carrot cake pastry gummies cheesecake
                lollipop. I love cookie lollipop cake I love
                sweet gummi bears cupcake dessert.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-info ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>

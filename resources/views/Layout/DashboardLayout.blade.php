<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayaku Raja</title>
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/choices.js/choices.min.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    {{-- @include('sweetalert::alert') --}}
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('dashboard/images/logo/logo.png') }}" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Dashboard</li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Capaian Indikator</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Dokter</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Jabatan</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Laporan Keluhan</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Kritik dan Saran</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Pengguna</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Pegawai</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="">Pegawai</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Pengguna</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Referensi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            {{-- <h6 class="mb-0 text-gray-600">{{ auth()->user()->Pegawai->NAMA }}</h6>
                                            <p class="mb-0 text-sm text-gray-600">{{ auth()->user() }}</p> --}}
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                {{-- @if (auth()->user()->Pegawai->JENIS_KELAMIN == 1)
                                                <img src="{{ asset('dashboard/images/faces/7.jpg') }}">
                                                @else
                                                <img src="{{ asset('dashboard/images/faces/3.jpg') }}">
                                                @endif --}}
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        {{-- <h6 class="dropdown-header">Hello, {{ auth()->user()->Pegawai->NAMA }}</h6> --}}
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            {{-- @csrf --}}
                                        <button class="dropdown-item" type="submit" >
                                            <i class="icon-mid bi bi-box-arrow-left me-2">
                                            </i> Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
                {{-- isi --}}
                @yield('DashboardLayout')
                {{-- endisi --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>

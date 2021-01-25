<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <link rel="icon" href="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/app.css">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    @livewireStyles

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: white;
        }

        ::-webkit-scrollbar-thumb {
            background: #5a67d8;
            border-radius: 1px;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body style="background-color: #f8f8f8" class="light sidebar-mini sidebar-collapse">
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
        <div class="sidebar">
            <div class="d-flex hv-100 align-items-stretch">
                <div class="indigo text-white">
                    <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="{{ route('users.edit', Auth::user()->id) }}">
                            <figure class="avatar">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_picture_path ?? Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="relative brand-wrapper sticky b-b">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <div class="text-xs-center">
                                    <span class="font-weight-lighter s-18">Menu</span>
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->roles === 'PHARMACIST')
                            <ul class="sidebar-menu">
                                <li class="treeview">
                                    <a href="{{ route('dashboard') }}">
                                        <i class="icon icon-dashboard2 s-24"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-person_pin s-24"></i>Pasien<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('patients.create') }}"><i class="icon icon-add"></i>Daftar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-note-checked s-24"></i>Pemeriksaan<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('checks.index') }}"><i class="icon icon-circle-o"></i>Pemeriksaan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon-user-md s-24"></i>Dokter<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('doctors.index') }}"><i class="icon icon-circle-o"></i>Jadwal Dokter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#">
                                        <i class="icon icon-stethoscope s-24"></i>
                                        <i class="icon icon-angle-left pull-right"></i>
                                        <span>Perawat</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('nurses.index') }}"><i class="icon icon-circle-o"></i>Shift
                                                Perawat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-medkit s-24"></i><span>Resep</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('prescriptions.index') }}"><i class="icon icon-circle-o"></i>Resep</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-room s-24"></i><span>Ruangan</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('rooms.index') }}"><i class="icon icon-circle-o"></i>Ruangan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @elseif(Auth::user()->roles === 'DOCTOR')
                            <ul class="sidebar-menu">
                                <li class="treeview">
                                    <a href="{{ route('dashboard') }}">
                                        <i class="icon icon-dashboard2 s-24"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-person_pin s-24"></i>Pasien<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('patients.create') }}"><i class="icon icon-add"></i>Daftar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-note-checked s-24"></i>Pemeriksaan<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('checks.index') }}"><i class="icon icon-circle-o"></i>Pemeriksaan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon-user-md s-24"></i>Dokter<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('doctors.index') }}"><i class="icon icon-circle-o"></i>Jadwal Dokter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#">
                                        <i class="icon icon-stethoscope s-24"></i>
                                        <i class="icon icon-angle-left pull-right"></i>
                                        <span>Perawat</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('nurses.index') }}"><i class="icon icon-circle-o"></i>Shift
                                                Perawat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-room s-24"></i><span>Ruangan</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('rooms.index') }}"><i class="icon icon-circle-o"></i>Ruangan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @elseif(Auth::user()->roles === 'NURSE')
                            <ul class="sidebar-menu">
                                <li class="treeview">
                                    <a href="{{ route('dashboard') }}">
                                        <i class="icon icon-dashboard2 s-24"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-person_pin s-24"></i>Pasien<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('patients.create') }}"><i class="icon icon-add"></i>Daftar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-note-checked s-24"></i>Pemeriksaan<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('checks.index') }}"><i class="icon icon-circle-o"></i>Pemeriksaan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon-user-md s-24"></i>Dokter<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('doctors.index') }}"><i class="icon icon-circle-o"></i>Jadwal Dokter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#">
                                        <i class="icon icon-stethoscope s-24"></i>
                                        <i class="icon icon-angle-left pull-right"></i>
                                        <span>Perawat</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('nurses.index') }}"><i class="icon icon-circle-o"></i>Shift
                                                Perawat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-room s-24"></i><span>Ruangan</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('rooms.index') }}"><i class="icon icon-circle-o"></i>Ruangan</a>
                                        </li>
                                        <li><a href="{{ route('rooms.create') }}"><i class="icon icon-add"></i>Tambah</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @else
                            <ul class="sidebar-menu">
                                <li class="treeview">
                                    <a href="{{ route('dashboard') }}">
                                        <i class="icon icon-dashboard2 s-24"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-person_pin s-24"></i>Pasien<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('patients.create') }}"><i class="icon icon-add"></i>Daftar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon icon-note-checked s-24"></i>Pemeriksaan<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('checks.index') }}"><i class="icon icon-circle-o"></i>Pemeriksaan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#"><i class="icon icon-user-md s-24"></i>Dokter<i
                                            class="icon icon-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('doctors.index') }}"><i class="icon icon-circle-o"></i>Jadwal Dokter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="#">
                                        <i class="icon icon-stethoscope s-24"></i>
                                        <i class="icon icon-angle-left pull-right"></i>
                                        <span>Perawat</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('nurses.index') }}"><i class="icon icon-circle-o"></i>Shift
                                                Perawat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-room s-24"></i><span>Ruangan</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ route('rooms.index') }}"><i class="icon icon-circle-o"></i>Ruangan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
        <i></i>
    </a>
    <div class="has-sidebar-left has-sidebar-tabs">
        <div class="sticky">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
                <div class="relative">
                    <div class="d-flex">
                        <div class="d-none d-md-block">
                            <h1 class="nav-title">SIRS</h1>
                        </div>
                    </div>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown custom-dropdown user user-menu ">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_picture_path ?? Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </a>
                            <div class="dropdown-menu p-4 dropdown-menu-right">
                                <div class="row box justify-content-between my-4">
                                    <div class="col">
                                        <a href="{{ route('profile.show') }}">
                                            <i class="icon-person blue lighten-1 avatar  r-5"></i>
                                            <div class="pt-1">Profile</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="icon-exit_to_app green lighten-2 avatar  r-5"></i>
                                                <div class="pt-1" type="submit">Keluar</div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>
</div>

<script src="../../assets/js/app.js"></script>

<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

@livewireScripts

<script>
    const a = document.getElementById("example2_length")
    a.style.display = "none"
</script>

@include('sweetalert::alert');

</body>
</html>

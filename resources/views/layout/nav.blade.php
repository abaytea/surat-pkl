<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand mx-lg-1 mr-0" href={{ url('/dashboard') }}>
            <img src={{asset('logo.png')}} alt="" width="45px">
        </a>
        <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>

        <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
            <a href={{ url('/dashboard') }} class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/dashboard') }}>
                        <span class="ml-lg-2">Menu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/formtambahsurat') }}>
                        <span class="ml-lg-2">Pembuatan Surat PKL</span>
                    </a>
                </li>
                @role('admin')
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/formtabelsurat') }}>
                        <span class="ml-lg-2">Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/formdatasiswapkl') }}>
                        <span class="ml-lg-2">Data Siswa </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/tambahsiswapkl') }}>
                        <span class="ml-lg-2">Tambah Siswa PKL</span>
                    </a>
                </li>
                @endrole
            </ul>
        </div>
        <form class="form-inline ml-md-auto d-none d-lg-flex text-muted">
        </form>

        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-24"></i>
                </a>
            </li>
            <li class="nav-item dropdown ml-lg-0">
                <a class="nav-link text-muted my-2" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-24 fe-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href={{ url('/formprofile') }}>Profile</a>
                    </li>
                    <form action="{{url('logout')}}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                            class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" a href="{{ route('dashboard') }}">Star Otomotiv</a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <ul class="nav">

            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" a href="{{ route('dashboard') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" a href="{{ route('admin.orders') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Siparişler</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                    aria-controls="auth">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">Tablo işlemleri</span>
                    <i class="menu-arrow"></i>
                </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" a href="{{ route('araba.liste') }}" method="GET">
                            Tum tabloyu Goster </a></li>
                    <li class="nav-item"> <a class="nav-link" a href="{{ route('araba.ekle',) }}" method="GET">
                                Tabloya ekle </a></li>

            </div>


            {{-- <li class="nav-item menu-items">
                <a class="nav-link" a href="{{ route('araba.liste') }}" method="GET">>
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Tables</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" a href="{{ route('araba.liste') }}" method="GET">>
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Tables</span>
                </a>
            </li> --}}


            {{-- <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                    aria-controls="auth">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/blank-page.html">
                                Blank Page </a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-404.html"> 404
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-500.html"> 500
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/login.html"> Login
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/register.html">
                                Register </a></li>
                    </ul>
                </div>
            </li> --}}

        </ul>
    </nav>

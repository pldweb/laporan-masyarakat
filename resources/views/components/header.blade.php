<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">MeLapor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('/')}}" >Beranda</a></li>
                <li><a href="{{url('home/tentang-kami')}}">Tentang Kami</a></li>
                <li><a href="{{url('home/statistik')}}">Statistik</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{url('login')}}">Masuk/Registrasi</a>
    </div>
</header>

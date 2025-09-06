        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('frontpage/assets/img/logo.jpg')}}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link text-dark {{ request()->routeIs('layanan') ? 'fw-bold text-warning' : '' }}" 
       href="{{ route('layanan') }}">Layanan</a></li>
                        <li class="nav-item">
                        <a class="nav-link text-dark {{ request()->routeIs('portfolio') ? 'fw-bold text-warning' : '' }}" 
       href="{{ route('portfolio') }}">Portofolio</a>
</li>
                        <li class="nav-item">
    <a class="nav-link text-dark {{ request()->routeIs('about') ? 'fw-bold text-warning' : '' }}" 
       href="{{ route('about') }}">Tentang Kami</a>
</li>
                        <li class="nav-item"><a class="nav-link text-dark {{ request()->routeIs('articles') ? 'fw-bold text-warning' : '' }}" 
       href="{{ route('articles') }}">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link text-dark {{ request()->routeIs('kontak') ? 'fw-bold text-warning' : '' }}" 
       href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
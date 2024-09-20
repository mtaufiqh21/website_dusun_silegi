<nav class="navbar navbar-expand-lg py-3 fixed-top" id="navbar">
    <div class="container-fluid container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="navbarTogglerDemo01">
            <div class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-center align-items-center">
                <div class="col-2">
                    <div class="nav-item d-flex justify-content-center fw-bold fs-5">
                        <span class="text-span">D</span>USUN SILEGI
                    </div>
                </div>
                <div class="col-8">
                    <div class="navbar-nav d-flex justify-content-center align-items-center gap-3">
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold {{ Request::is('/') ? 'text-navbar-active' : '' }}" href="{{ url('/') }}">Beranda</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold" href="">Profil dusun</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold" href="">Sejarah</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold {{ Request::is('news*') ? 'text-navbar-active' : '' }}" href="{{ url('/news') }}">Berita</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold" href="">Produk Dusun</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold" href="">Infografis</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link fh fw-bold" href="">Kontak Darurat</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="nav-item">
                        <div class="d-flex justify-content-center">
                            {{-- @php
                                $phone = $setting->firstWhere('key', 'phone');
                            @endphp --}}
                            <a href="http://wa.me/+" class="text-decoration-none" target="_blank">
                                <div class="w-md-100 fw-semibold fh text-center btn-contact">
                                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

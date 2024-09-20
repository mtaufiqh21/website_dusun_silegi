<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Site Title  -->
    <title>@yield('title')</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundlec302.css?ver=130">
    <!-- Custom styles for this template -->
    <link href="assets/css/stylec302.css?ver=130" rel="stylesheet">
    {{-- <link href="assets/css/theme-purplec302.css?ver=130" rel="stylesheet" id="layoutstyle"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <script src="https://kit.fontawesome.com/95c0931704.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>
    @stack('styles')
    @cloudinaryJS
</head>

<body class="overflow-scroll">

    <header>
        <!-- Start .header-section -->
        <div id="header"
            class="header-section flex-box-middle section gradiant-background header-curbed-circle background-circles header-software">
            {{-- <div id="particles-js" class="particles-container"></div> --}}
            <div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#site-collapse-nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#home">
                                <img class="logo logo-light" src="images/logo-MA.png" alt="logo" />
                                <img class="logo logo-color" src="images/logo-MA.png" alt="logo" />
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse font-secondary" id="site-collapse-nav">
                            <ul class="nav nav-list navbar-nav navbar-right">
                                <li><a class="nav-item" href="{{ url('/') }}">BERANDA</a></li>
                                <li><a class="nav-item" href="#berita">BERITA</a></li>
                                <li><a class="nav-item" href="#">SEJARAH</a></li>
                                <li><a class="nav-item" href="{{ url('/visi-misi') }}">VISI & MISI</a></li>
                                <li><a class="nav-item" href="#teachers">TENAGA PENDIDIK</a></li>
                                <li><a class="nav-item"
                                        style="display: flex;
                                                gap: 10px;
                                                align-items: center;
                                                background-color: #FFD700;
                                                border-radius: 20px;
                                                padding: 10px 15px;
                                                margin-left: 120px;"
                                        href="#mapels"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                            height="25" fill="black" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg>
                                        <span>Hubungi Kami</span>
                                    </a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- .navigation -->

            {{-- <div class="header-content pt-50">
                <img src="images/pembatas-header.png" alt="">

                <div class="container">

                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-texts">
                                <h1 class="cd-headline clip is-full-width wow fadeInUp" data-wow-duration="2s">
                                    <span>ClassKu </span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Adalah Web Manajemen Kelas</b>
                                        <b>Menggunakan Teknologi Modern</b>
                                        <b>Sebuah Proyek OpenSource</b>
                                    </span>
                                </h1>
                                @if (!Auth::user())
                                    <ul class="buttons">
                                        <li><a href="{{ route('login') }}"
                                                class="button button-border button-transparent wow fadeInUp"
                                                data-wow-duration=".9s" data-wow-delay=".9s">Login</a></li>
                                    </ul>
                                @else
                                    <ul class="buttons">
                                        <li><a href="{{ route('dashboard') }}"
                                                class="button button-border button-transparent wow fadeInUp"
                                                data-wow-duration=".9s" data-wow-delay=".9s">Hi, {{ Auth::user()->name }}</a>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="header-mockups">
                                <div class="header-laptop-mockup black wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".6s">
                                    <img src="images/home-dashboard.png" alt="software-screen" />
                                </div>
                                <div class="iphonex-flat-mockup wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                                    <img src="images/home-dashboard.png" alt="app screen">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container -->
            </div> --}}
            <!-- .header-content -->
        </div><!-- .header-section -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Start .footer-section  -->
        <div class="footer-section section">
            <div class="container footer">
                <div class="logo-desc">
                    <img class="logo-sekolah" src="{{ asset('images/logo-MA.png') }}" alt="logo"
                        style="max-height: 57px; margin-bottom: 1rem;" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum magnam, facere error sapiente
                        necessitatibus? Totam esse perspiciatis cum consequuntur qui doloremque officia nostrum, quae
                        saepe nemo deleniti, et tempore!</p>
                </div>
                <div class="row text-center" style="width: 50%;">
                    <div class="col-md-12">
                        <ul class="footer-navigation inline-list">
                            <li><a class="nav-item" href="#home">BERANDA</a></li>
                            <li><a class="nav-item" href="#about">BERITA</a></li>
                            <li><a class="nav-item" href="#features">SEJARAH</a></li>
                            <li><a class="nav-item" href="#students">VISI MISI</a></li>
                            <li><a class="nav-item" href="#teachers">TENAGA PENDIDIK</a></li>
                        </ul>
                        <ul class="social-list inline-list">
                            <h3>Kontak Kami</h3>
                            <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                            <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                            <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                            <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                        </ul>
                    </div><!-- .col  -->
                </div><!-- .row  -->
            </div>
            <ul class="footer-links inline-list" style="text-align: center; padding-top: 5rem;">
                <li>Copyright © 2024 MA COKROAMINOTO. All rights reserved</li>
            </ul><!-- .container  -->
        </div><!-- .footer-section  -->
    </footer>

    <!-- Preloader !remove please if you do not want -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Preloader End -->

    <!-- Google Map Script -->
    <script src="https://maps.google.com/maps/api/js?key={{ config('app.google_api_key') }}"></script>
    <script src="assets/js/googleMapc302.js?ver=130"></script>

    <!-- JavaScript
  ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.bundlec302.js?ver=130"></script>
    <script src="assets/js/scriptc302.js?ver=130"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

</body>

</html>

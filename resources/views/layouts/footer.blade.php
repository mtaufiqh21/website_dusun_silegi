<div class="section-gap bg-footer text-white fs-footer py-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col">
                <img src="{{ asset('images/logo-MA-white.png') }}" alt="" srcset="" width="60">
                <div class="fs-footer mt-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus optio tempore rem magni porro
                    sint?
                </div>
                <div>
                    <div class="d-flex mt-3 gap-2">
                        {{-- @php
                            $instagram = $setting->firstWhere('key', 'socmed-instagram');
                        @endphp --}}
                        <a class="footer-icon text-decoration-none" target="_blank"
                            href="https://www.instagram.com/">
                            <i class="bi bi-instagram"></i>
                        </a>

                        {{-- @php
                            $facebook = $setting->firstWhere('key', 'socmed-facebook');
                        @endphp --}}
                        <a class="footer-icon text-decoration-none" target="_blank"
                            href="https://web.facebook.com/">
                            <i class="bi bi-facebook"></i>
                        </a>

                        {{-- @php
                            $phone = $setting->firstWhere('key', 'phone');
                        @endphp --}}
                        <a class="footer-icon text-decoration-none" href="http://wa.me/+"
                            target="_blank">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
            <div class="col">
                <div class="fs-4 fw-semibold">
                    Kontak Kami
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-1 text-footer">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="col">
                            0821-2345-6789
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-1 text-footer">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="col">
                            xxx@xxxxx.com
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-1 text-footer">
                            <i class="bi bi-whatsapp custom-whatsapp-icon"></i>
                        </div>
                        <div class="col">
                            +6213123499
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            Copyright © 2024 • Dusun Silegi • All rights reserved
        </div>
    </div>
</div>

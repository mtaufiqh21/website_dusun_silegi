@extends('layouts.new-app')

@section('title', 'Beranda - MA Cokroaminoto')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
    <div class="card border-0">
        <img src="{{ asset('images/background-sekolah.png') }}" alt="" srcset="" class="card-img w-100">
    </div>
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4">
                <div class="card-kep-dusun">
                    <img src="{{ asset('images/kepsek1.jpg') }}" alt="" srcset="" class="w-100">
                </div>
            </div>
            <div class="col"></div>
            <div class="col-7">
                <div class="fw-semibold fs-4 mb-4">
                    Nama Kepala Dusun
                </div>
                <div class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus, laudantium sequi, atque facere reiciendis unde exercitationem corporis a, voluptas quis sed asperiores eveniet! Quos!
                </div>
                <div>
                    <button class="btn-style-1">
                        Info Dusun
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col">
                <div class="fs-4 fw-bold">
                    Berita Dusun
                </div>
                <div>
                    Berita-berita terkini yang bisa anda baca Lorem ipsum.
                </div>
            </div>
            <div class="col d-flex d-flex justify-content-end">
                <a href="/news" class="btn-link text-decoration-none">Lainnya</a>
            </div>
        </div>
    </div>
    <div class="container content-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="">
            <div class="row">
                <div class="col-3">
                    <a class="text-decoration-none text-black" href="">
                        <div class="card-news">
                            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="">
                        </div>
                        <div class="mt-3">
                            <div class="fs-7">
                                3 April, 2024
                            </div>
                            <div class="mt-3 fw-semibold">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </div>
                            <div class="fs-7 mt-3 text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde aut quos dignissimos ipsam repre....
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="text-decoration-none text-black" href="">
                        <div class="card-news">
                            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="">
                        </div>
                        <div class="mt-3">
                            <div class="fs-7">
                                3 April, 2024
                            </div>
                            <div class="mt-3 fw-semibold">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </div>
                            <div class="fs-7 mt-3 text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde aut quos dignissimos ipsam repre....
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="text-decoration-none text-black" href="">
                        <div class="card-news">
                            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="">
                        </div>
                        <div class="mt-3">
                            <div class="fs-7">
                                3 April, 2024
                            </div>
                            <div class="mt-3 fw-semibold">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </div>
                            <div class="fs-7 mt-3 text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde aut quos dignissimos ipsam repre....
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="text-decoration-none text-black" href="">
                        <div class="card-news">
                            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="">
                        </div>
                        <div class="mt-3">
                            <div class="fs-7">
                                3 April, 2024
                            </div>
                            <div class="mt-3 fw-semibold">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </div>
                            <div class="fs-7 mt-3 text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde aut quos dignissimos ipsam repre....
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col">
                <div class="fs-4 fw-bold">
                    Profil guru
                </div>
                <div>
                    Profil Guru MA blablablabla
                </div>
            </div>
            <div class="col d-flex justify-content-end gap-2">
                <div class="btn-gallery splide-prev">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="btn-gallery splide-next">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container content-gap" data-aos="fade-up" data-aos-duration="1000">
        {{-- <div class="card-group gap-5 d-flex justify-content-between"> --}}
        <div class="splide splide-gallery" aria-label="Splide Galleryy">
            <div class="splide__track">
                <ul class="splide__list">
                    {{-- @foreach ($teachers as $teacher) --}}
                        {{-- @if ($teacher->position_category === 'Guru') --}}
                        <li class="splide__slide">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="w-100 card-gallery-img card-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="w-100 card-gallery-img card-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="w-100 card-gallery-img card-img">
                            </div>
                        </li>
                        {{-- @endif --}}
                    {{-- @endforeach --}}
                </ul>
            </div>
        </div>
        {{-- </div> --}}
    </div>
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-5">
                <div class="row mb-4">
                    <div class="col d-flex gap-4">
                        <div class="card-product border">
                            <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="h-100">
                        </div>
                        <div class="card-product border">
                            <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="h-100">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex gap-4 ms-6">
                        <div class="card-product border">
                            <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="h-100">
                        </div>
                        <div class="card-product border">
                            <img src="{{ asset('images/img1.jpg') }}" alt="" srcset="" class="h-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <div class="col-6">
                <div class="fw-semibold fs-4 mb-4">
                    Produk Dusun
                </div>
                <div class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus, laudantium sequi, atque facere reiciendis unde exercitationem corporis a, voluptas quis sed asperiores eveniet! Quos!
                </div>
                <div>
                    <button class="btn-style-1">
                        Beli
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col">
                <div class="fs-4 fw-bold">
                    Kotak Saran
                </div>
                <div>
                    Silahkan masukan saran dan kritik anda blablablabla.
                </div>
            </div>
        </div>
    </div>
    <div class="container content-gap" data-aos="fade-up" data-aos-duration="1000">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <form action="{{ route('saran.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input name="name" class="form-control py-3 px-4 form-style" type="text" placeholder="Nama">
            </div>
            <div class="mb-3">
                <input name="email" class="form-control py-3 px-4 form-style" type="text" placeholder="Email*"
                    required>
            </div>
            <div class="mb-3">
                <input name="phone_number" class="form-control py-3 px-4 form-style" type="text"
                    placeholder="Nomor Telephone">
            </div>
            <div class="mb-3">
                <textarea name="suggestion" name="" placeholder="Pesan*" id="" rows="5"
                    class="form-control py-3 px-4 form-style" style="resize: none" required></textarea>
            </div>
            <button class="btn-style-1" type="submit">
                Kirim
            </button>
        </form>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".alert .close").on("click", function() {
                $(this).parent(".alert").fadeOut();
            });
        });
    </script>
    <script>
        var splideGallery = new Splide('.splide-gallery', {
            arrows: false,
            pagination: false,
            type: 'loop',
            speed: 1000,
        });
        splideGallery.mount();

        document.querySelector('.splide-prev').addEventListener('click', function() {
            splideGallery.go('<');
        });

        document.querySelector('.splide-next').addEventListener('click', function() {
            splideGallery.go('>');
        });
    </script>
@endsection

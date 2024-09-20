@extends('layouts.new-app')

@section('title', 'Beranda - MA Cokroaminoto')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
@endsection

@section('content')
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <a href="news/1" class="text-decoration-none text-black">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <div class="card-news-2">
                        <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4">
                        3 April, 2024
                    </div>
                    <div class="fw-semibold fs-5 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, consectetur.
                    </div>
                    <div class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nemo, distinctio voluptatibus nihil porro fugit a voluptates ea aut neque illum. Dolorum ipsum saepe temporibus? Incidunt atqu....
                    </div>
                </div>
            </div>
        </a>
        <div class="content-gap">
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
            type: 'loop',
            speed: 1000,
        });
        splideGallery.mount();

        var splideTeacher = new Splide('.splide-teacher', {
            type: 'loop',
            speed: 1000,
            perPage: 3,
            focus: 'center',
            gap: '3rem',
            arrows: false,
        });

        splideTeacher.mount();

        document.querySelector('.splide-prev').addEventListener('click', function() {
            splideTeacher.go('<');
        });

        document.querySelector('.splide-next').addEventListener('click', function() {
            splideTeacher.go('>');
        });
    </script>
@endsection

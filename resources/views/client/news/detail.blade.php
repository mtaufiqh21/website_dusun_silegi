@extends('layouts.new-app')

@section('title', 'Detail ')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
@endsection

@section('content')
    <div class="container section-gap" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-8">
                <div class="card border-0 mb-3 rounded-1">
                    <img src="{{ asset('images/img1.jpg') }}" class="w-100 rounded-2" alt="" srcset="">
                </div>
                <div class="mb-3" style="font-size: 14px">
                    3 April, 2024
                </div>
                <div class="fs-4 fw-semibold mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, consectetur.
                </div>
                <div class="text-justify">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nemo, distinctio voluptatibus nihil porro fugit a voluptates ea aut neque illum. Dolorum ipsum saepe temporibus? Incidunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero fugiat cum at, repudiandae praesentium dolores voluptas aliquam optio quod. Provident, sint! Et rem esse sed nihil sit deleniti obcaecati quidem perferendis architecto omnis aliquid eum natus, eligendi, exercitationem explicabo odio, maiores sequi unde possimus facilis laudantium? Debitis aspernatur delectus est provident id alias totam dignissimos dolorem perferendis in optio sint labore dicta similique eaque at exercitationem voluptatem expedita, consequuntur odio tenetur. 
                    </p>
                    <p>
                        Inventore ea consectetur nemo magnam ipsam architecto, dolores enim modi consequatur dignissimos tempore alias eius quas quod quam magni ducimus animi? Ab corrupti adipisci officia obcaecati minus, modi sint consequuntur, quibusdam culpa veritatis quasi? Recusandae cumque commodi id voluptates debitis ut eius, temporibus nobis nesciunt a possimus impedit dolorum perferendis laboriosam molestias. Autem itaque consequatur ullam dolorem commodi. Officia facere quia assumenda eveniet amet, hic provident. Unde neque, earum soluta nesciunt itaque est obcaecati architecto natus asperiores ex.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="row d-grid gap-4">
                    <div class="col">
                        <a href="" class="text-decoration-none">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="}" srcset=""
                                    class="w-100 card-gallery-img card-img">
                                <div
                                    class="card-img-overlay d-flex align-items-end text-start card-img-overlay-galeri align-items-end mb-5">
                                    <div class="card-text text-white">
                                        <div class="mb-2" style="font-size: 12px">
                                            3 April, 2024
                                        </div>
                                        <div class="fw-semibold">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="text-decoration-none">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="}" srcset=""
                                    class="w-100 card-gallery-img card-img">
                                <div
                                    class="card-img-overlay d-flex align-items-end text-start card-img-overlay-galeri align-items-end mb-5">
                                    <div class="card-text text-white">
                                        <div class="mb-2" style="font-size: 12px">
                                            3 April, 2024
                                        </div>
                                        <div class="fw-semibold">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="text-decoration-none">
                            <div class="card card-gallery">
                                <img src="{{ asset('images/img1.jpg') }}" alt="}" srcset=""
                                    class="w-100 card-gallery-img card-img">
                                <div
                                    class="card-img-overlay d-flex align-items-end text-start card-img-overlay-galeri align-items-end mb-5">
                                    <div class="card-text text-white">
                                        <div class="mb-2" style="font-size: 12px">
                                            3 April, 2024
                                        </div>
                                        <div class="fw-semibold">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </div>
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

@endsection

@extends('layouts.new-app')

@section('title', 'Visi Misi - KelasMaju')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/visi-misi.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col"></div>
            <div class="col-10">
                <div class="content-gap">
                    <div class="card border-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('images/image 59.png') }}" class="w-100 vismis-img" alt=""
                            srcset="">
                        {{-- <img src="{{ asset('images/background-sekolah.png') }}" alt="" srcset="" class="card-img w-100"> --}}
                        <div
                            class="card-img-overlay d-flex justify-content-center align-items-center card-img-overlay-vismis">
                            <div class="card-text fs-1 text-center fw-semibold">
                                Visi & Misi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-gap">
                    <div class="text-center fs-3 fw-semibold mb-2" data-aos="fade-up" data-aos-duration="1000">
                        Visi
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-8">
                                <div class="card card-vismis mb-4" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="card-text text-center card-padding">
                                            Terwujudnya sekolah yang mampu menghasilkan keluaran yang berakar budaya bangsa,
                                            berwawasan kebangsaan dan lingkungan hidup serta bercakrawala global.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
                <div class="content-gap">
                    <div class="text-center fs-3 fw-semibold mb-2" data-aos="fade-up" data-aos-duration="1000">
                        Misi
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-8">
                                <div class="card card-vismis mb-4" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="card-text text-center card-padding">
                                            Mengembangkan kemampuan akademik berstandar internasional dengan menerapkan dan
                                            mengembangkan kurikulum lokal, nasional, maupun internasional.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-vismis mb-4" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="card-text text-center card-padding">
                                            Mengembangkan kedisiplinan, kepemimpinan serta ketakwaan melalui berbagai
                                            kegiatan kesiswaan baik dalam organisasi siswa intrasekolah, ekstrakurikuler,
                                            kegiatan keagamaan, maupun kegiatan lain yang berakar budaya bangsa.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-vismis mb-4" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="card-text text-center card-padding">
                                            Mengembangkan sikap berkompetisi yang positif melalui berbagai bidang dan
                                            kesempatan dengan mengedepankan semangat kebangsaan.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-vismis mb-4" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="card-text text-center card-padding">
                                            Menanamkan nilai keteladanan dan budi pekerti luhur melalui pengembangan kultur
                                            sekolah yang sesuai dengan norma keagamaan, sosial kemasyarakatan, kebangsaan
                                            serta berwawasan lingkungan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
                <div class="content-gap">
                    <div class="row d-flex align-items-end" data-aos="fade-up" data-aos-duration="1000">
                        @foreach ($teachers as $teacher)
                            @if ($teacher->position_category === 'Kepala Sekolah')
                                <div class="col"></div>
                                <div class="col-11">
                                    <div class="text-box text-white d-flex align-items-center pb-2">
                                        <div>
                                            <div class="mb-3 fs-7 fw-medium" style="font-size: 14px">
                                                {{ $teacher->name }}
                                            </div>
                                            <div class="mb-3 quote-text fs-5 fw-semibold">
                                                Website sekolah memiliki peran kunci dalam memajukan <span
                                                    class="text-yellow">sekolah</span>, website itu sendiri merupakan
                                                laboratorium maya dalam mengakses berbagai.
                                            </div>
                                            <div class="mb-3 fs-7" style="font-size: 12px">
                                                {{ $teacher->position_category }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-container">
                                        <img src="{{ $teacher->image }}" class="img-fluid person-image" width="200px"
                                            alt="Kepala Sekolah">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection

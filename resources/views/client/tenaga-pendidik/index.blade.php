@extends('layouts.new-app')

@section('title', 'Tenaga Pendidik - KelasMaju')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/tenaga-pendidik.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.semanticui.css">
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col"></div>
            <div class="col-10">
                <div class="content-gap">
                    <div class="card border-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('images/image 59.png') }}" class="w-100 tenpen-img" alt=""
                            srcset="">
                        <div
                            class="card-img-overlay d-flex justify-content-center align-items-center card-img-overlay-tenpen">
                            <div class="card-text fs-1 text-center fw-semibold">
                                Tenaga Pendidik
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-gap" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <table id="myTable" class="display table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Email</th>
                                    <th>Mata Pelajaran yang Diampu</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    @if ($teacher->position_category === 'Guru')
                                        <tr class="table-teacher">
                                            <td>1</td>
                                            <td>{{ $teacher->nip }}</td>
                                            <td>{{ $teacher->name }}</td>
                                            <td>
                                                <img src="{{ $teacher->image }}" class="cursor" alt=""
                                                    srcset="" width="75" height="75" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" data-image="{{ $teacher->image }}">
                                            </td>
                                            <td>{{ $teacher->email }}</td>
                                            <td>{{ $teacher->position }}</td>
                                            <td>{{ $teacher->position_category }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card text-bg-dark card-detail-foto">
                                    <img src="{{ $teacher->image }}" alt="" srcset=""
                                        class="card-gallery-foto">
                                    {{-- <img src="..." class="card-img" alt="..."> --}}
                                    <div class="card-img-overlay card-img-overlay-foto">
                                        <div class="card-title text-end">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        // const myModal = document.getElementById('myModal')
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.semanticui.js"></script>
    <script>
        new DataTable('#myTable', {
            language: {
                lengthMenu: '_MENU_'
            },
            layout: {
                bottomEnd: {
                    paging: {
                        buttons: 3,
                        firstLast: false,
                    }
                },
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var exampleModal = document.getElementById('exampleModal');

            exampleModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var imageSrc = button.getAttribute('data-image');
                var modalImage = exampleModal.querySelector('.modal-body img');

                modalImage.src = imageSrc;
            });
        });
    </script>
@endsection

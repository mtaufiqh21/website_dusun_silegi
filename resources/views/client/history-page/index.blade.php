@extends('layouts.new-app')

@section('title', 'Sejarah - KelasMaju')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/history.css') }}">
@endsection

@section('content')
    <div class="container section-gap">
        <div class="row d-flex border">
            @php
                $sejarah = $settings->firstWhere('key', 'sejarah');
            @endphp
            <div class="col-8 border">
                {!! $sejarah->value !!}
            </div>
            <div class="col border">
                <img src="{{ asset('images/image 53.png') }}" class="w-100 history-img" alt="" srcset="">
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection

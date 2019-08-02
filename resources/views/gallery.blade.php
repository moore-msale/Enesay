@extends('layouts.app')
@push('styles')
    <style>
        .menu-point
        {
            color:black!important;
        }
        .button
        {
            border-color:black!important;
        }
        .menu-burger
        {
            filter: invert(100%);
        }
    </style>
@endpush
@section('content')

    <div style="padding-top: 10%; padding-bottom: 10%;">
        <div class="container">
            <div class="col-12 pt-lg-0 pt-5 px-0 mb-4" data-aos="flip-up">
                        <span>
                        <a href="/"  style="color:#000000;">Главная</a>
                        </span>
                <span>
                            <i class="fas fa-arrow-right fa-xs"></i>
                        </span>
                <span>
                Галерея
            </span>
                <h2 class="TTBold text-uppercase" style="font-size: 300%; line-height: 140%; color: #000000;">
                    Галерея
                </h2>
            </div>

            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3 mb-3" data-aos="flip-up">
                    <a href="{{ asset('storage/'.$gallery->image) }}"  data-fancybox="gallery1">
                    <div class="shadow-hover">
                        <img class="w-100" src="{{ asset('storage/'.$gallery->image) }}" alt="">
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
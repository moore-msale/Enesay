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
                <a href="/"  style="color:#000000;">Новости</a>
            </span>
                <span>
                    <i class="fas fa-arrow-right fa-xs"></i>
                </span>
                <span>
                    Новость
                </span>
                <h2 class="TTBold text-uppercase" style="font-size: 250%; line-height: 140%; color: #000000;">
                    {{ $new->name }}
                </h2>
            </div>

            <div class="row">
                <img class="w-100" data-aos="flip-up" src="{{ asset('storage/'.$new->image1) }}" alt="">
                <div class="p-lg-5 p-4 TTLight col-12" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        {{ $new->text1 }}
                    </p>
                </div>
                <div class="col-12 TTBold px-lg-5 px-4 pb-5" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <img class="w-100" data-aos="flip-up" src="{{ asset('storage/'.$new->image2) }}" alt="">
                </div>
                <div class="col-lg-6 col-12 TTLight px-lg-5 px-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        {{ $new->text2 }}
                    </p>
                </div>
                <div class="col-lg-6 col-12 TTLight px-lg-5 px-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        {{ $new->text3 }}
                    </p>
                </div>
                <div class="col-12 TTBold px-lg-5 px-4 pb-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <img class="w-100" data-aos="flip-up" src="{{ asset('storage/'.$new->image3) }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
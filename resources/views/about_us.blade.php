@extends('layouts.app')
@push('styles')
@endpush
@section('content')

    <img class="w-100 d-lg-block d-none" data-aos="flip-up" style="position: absolute; z-index: -1;" src="{{ asset('images/about_us.png') }}" alt="">

    <div class="container" style="padding-top:18%;">
        <div class="row justify-content-center">
            <h1 class="TTLight text-center text-main" style="font-size: 300%; line-height: 140%; text-transform: uppercase; color: white;">
                <p class="TTBold" data-aos="flip-up">{{ $about->name1 }}</p>
                {{ $about->name2 }}
            </h1>

            <div class="TTLight bg-white p-5 mt-lg-5 mt-0 mb-lg-0 mb-5 shadow" style="font-size: 112%; line-height: 140%; color: #000000;">
                <p data-aos="flip-up">
                    {{ $about->text1 }}
                </p>
                <p data-aos="flip-up">
                    {{ $about->text2 }}
                </p>
                <p data-aos="flip-up">
                    {{ $about->text3 }}
                </p>
            </div>

            <img class="w-75" data-aos="flip-up" style="transform: translateY(-4%);" src="{{ asset('storage/'.$about->image) }}" alt="">

            <div class="TTLight p-5 " style="font-size: 112%; line-height: 140%; color: #000000;">
                <p data-aos="flip-up">
                    {{ $about->text4 }}
                </p>
                <p data-aos="flip-up">
                    {{ $about->text5 }}
                </p>
            </div>
        </div>


    </div>
@endsection

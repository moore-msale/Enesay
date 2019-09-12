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

            <div class="TTLight bg-white p-5 mt-lg-5 mt-0 mb-lg-0 mb-5" style="font-size: 112%; line-height: 140%; color: #000000; box-shadow: 0px -33px 50px rgba(0, 0, 0, 0.25);">
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

            <div class="col-6 d-md-block d-none text-right pt-3">
                <img class="w-75" data-aos="flip-up" src="{{ asset('storage/'.$about->image) }}" alt="">
            </div>
            <div class="col-md-6 col-12" style="transform: translateY(-7%)">
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


    </div>
@endsection

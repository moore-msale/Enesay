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
                Все новости
            </span>
                <h2 class="TTBold text-uppercase" style="font-size: 300%; line-height: 140%; color: #000000;">
                    Все новости
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item2.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item3.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item1.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item2.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item3.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 pt-lg-0 pt-4 pb-3" data-aos="flip-up">
                    <div class="shadow-hover pb-4">
                        <img class="w-100" src="{{ asset('images/item1.png') }}" alt="">
                        <div class="p-3">
                            <h4 class="TTBold mb-3" style="font-size: 18px; line-height: 120%; letter-spacing: 0.05em; color: #000000;">
                                Заголовок новости
                            </h4>
                            <p class="TTMedium" style="font-family: Futura PT; font-style: normal; font-weight: normal; font-size: 15px; line-height: 130%; letter-spacing: 0.05em;">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более
                            </p>
                            <a href="/news_page" class="TTMedium" style="font-size: 15px; line-height: 130%; letter-spacing: 0.05em; color: #000000; text-decoration: underline;">
                                Читать полностью
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
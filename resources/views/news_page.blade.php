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
                    Мы наконец-таки
                    <br>все достроили
                </h2>
            </div>

            <div class="row">
                <img class="w-100" data-aos="flip-up" src="{{ asset('images/new.png') }}" alt="">
                <div class="p-lg-5 p-4 TTLight col-12" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                    </p>
                </div>
                <div class="col-12 TTBold px-lg-5 px-4 pb-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <h3>
                        Почему он используется?
                    </h3>
                </div>
                <div class="col-lg-6 col-12 TTLight px-lg-5 px-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                    </p>
                </div>
                <div class="col-lg-6 col-12 TTLight px-lg-5 px-4" style="font-size: 100%; line-height: 140%; color:#000000;" data-aos="flip-up">
                    <p>
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
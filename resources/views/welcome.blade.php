@extends('layouts.app')
@push('styles')
@endpush
@section('content')

<div class="container-fluid align-items-center pt-lg-5 pt-md-5 pt-1  example-classname"  id="1" style="background-image: url({{ asset('images/bg1.png') }});">
    <div class="row align-items-center pt-md-5 pt-0 mt-5 pl-md-5 pl-2">
        <div class="col-lg-8 pt-lg-0 pt-md-5 pt-0 mt-lg-0 mt-md-5 mt-0">
            <div class="row">
                <div class="col-11 text-right pt-lg-0 pt-5 d-md-none d-block" data-aos="flip-down">
                    <a href="">
                        <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
                        <p class="TTLight" style="font-size: 12px; text-decoration: underline;color: #ffffff;margin-top: 5%;">Смотреть видео</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="row align-items-center justify-content-start flex-nowrap">
                        <div class="col-lg-5 col-md-2 col-3 pr-0 pr-lg-2 mt-lg-0 mt-md-5" data-aos="flip-up"><h1 style="font-family: RobotoBold; font-size: 3.1em; line-height: 1.3em;text-transform: uppercase;color: #FFFFFF;">01</h1></div>
                        <div class="col-lg-7 col-md-2 col-3 pb-2 px-0 px-lg-0 mt-lg-0 mt-md-5 d-md-block d-none"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line.png')}}" alt=""></div>
                        <div class="col-lg-3 text-center pt-lg-0 pt-5 d-lg-none d-md-block d-none"  data-aos="flip-up">
                            <a href="">
                                <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
                                <p class="TTLight" style="font-size: 12px; text-decoration: underline;color: #ffffff;margin-top: 5%;">Смотреть видео</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10 col-11" data-aos="flip-down">
                    <h1 class="TTBold text-first" style=" font-size: 3.1em; line-height: 1.3em;color: #fff; text-transform: uppercase;" data-aos="flip-up">Какой-то слоган для Эне-Сай</h1>
                    <p class="pr-lg-5 mr-lg-5 TTLight pt-lg-0 pt-md-5 pt-3 pb-lg-0 pb-md-5 pb-3" data-aos="flip-up" style="font-size: 15px;line-height: 21px;color: #fff;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации</p>
                    <button class="btn btn-main-block mb-md-0 mb-5"><a href="/about_us">Подробнее</a></button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 text-center pt-lg-0 pt-5 d-lg-block d-md-none d-none" data-aos="flip-up">
            <a href="">
            <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
            <p class="TTLight" style="font-size: 12px; text-decoration: underline;color: #ffffff;margin-top: 5%;">Смотреть видео</p>
            </a>
        </div>

        <div class="col-lg-1" id="menu">

        </div>

    </div>
        <div class="d-lg-block d-none" id="pick" style="transform: rotate(90deg);position: absolute;top: 55%;right: -10.2%;" data-aos="fade-up">
            <a href="#1" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">Главная</a>
            <a href="#2" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">О проекте</a>
            <a href="#4" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">Расположение</a>
            <a href="#7" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">Контакты</a>
        </div>

    <div class="row mt-5 align-items-center d-md-block d-none">
        <div class="col-lg-8 p-5" style="background: rgba(6, 6, 6, 0.9);">
            <div class="d-lg-none d-md-block" data-aos="flip-up">
                <div class="row">
                <div class="col-8">
                    <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">Связаться с отделом продаж</h3>
                    <p class="TTLight text-white" style="font-size: 15px; line-height: 21px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или</p>
                    <div class="row align-items-center">
                        <div class="col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line.png')}}" alt=""></div>
                        <div class="col-10 align-items-center"> <h4 class="TTMedium text-white mb-0" style="font-size: 15px; line-height: 21px;">Связаться</h4></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="d-lg-block d-md-none">
                <div class="row">
                <div class="col-6" data-aos="flip-up">
                    <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">Смотреть генеральный план</h3>
                    <p class="TTLight text-white" style="font-size: 15px; line-height: 21px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или</p>
                    <div class="row align-items-center">
                        <div class="col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line.png')}}" alt=""></div>
                        <div class="col-10 align-items-center"> <h4 class="TTMedium text-white mb-0" style="font-size: 15px; line-height: 21px;">Смотреть</h4></div>
                    </div>
                </div>
                <div class="col-6" data-aos="flip-up">
                    <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">Связаться с отделом продаж</h3>
                    <p class="TTLight text-white" style="font-size: 15px; line-height: 21px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или</p>
                    <div class="row align-items-center">
                        <div class="col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line.png')}}" alt=""></div>
                        <div class="col-10 align-items-center"> <h4 class="TTMedium text-white mb-0" style="font-size: 15px; line-height: 21px;">Связаться</h4></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pb-lg-0 pb-5 d-lg-block d-none">
            <div class="row align-items-center">
                <div class="col-6 pl-5 align-items-center"> <h4 class="TTLight text-white mb-0" data-aos="flip-down" style="font-size: 15px; line-height: 21px;letter-spacing: 0.2em;">Листайте вниз</h4></div>
                <div class="col-6 pl-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line.png')}}" alt=""></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid example-classname" id="2">
    <div class="row">
        <div class="col-lg-4 p-5 align-items-center d-lg-flex d-md-none d-none">
            <img class="img-fluid w-100" src="{{asset('images/pic1.png')}}" alt="">
            <div class="text-position-abs">
                <div class="module-border-wrap">
                    <div class="module">
                        <h3 class="TTBold text-black text-second" style="font-size: 2em; line-height: 1.2em; text-transform: uppercase;">Нет никого, кто любил бы боль саму по себе</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 pt-lg-5 pt-3 mt-lg-5 mt-0 d-lg-block d-none" style="transform: translateX(15%);">
            <div class="row align-items-center justify-content-between flex-nowrap">
                <div class="col-5"><h1 style="font-family: RobotoBold; font-size: 3.1em; line-height: 1.3em;text-transform: uppercase;color: #000;" data-aos="flip-up">02</h1></div>
                <div class="col-7"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
            </div>
        </div>
        <div class="col-lg-5 col-md-11 pl-md-5 pl-3 pt-lg-5 mt-lg-5 pt-5 mt-5">
            <h5 class="TTMedium text-black" style="font-size: 13px; text-transform: uppercase;" data-aos="flip-down">О проекте</h5>
            <h3 class="TTBold text-black pt-2" style="font-size: 1.7em; line-height: 1.2em; text-transform: uppercase;" data-aos="flip-down">Нет никого, кто любил бы боль саму по себе, кто искал бы ее</h3>
            <p class="TTRegular text-black pt-md-2 pt-4 pb-md-2 pb-4" style="font-size: 14px; line-height: 20px;" data-aos="flip-down">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."</p>
            <div data-aos="flip-down">
            <button class="btn btn-main-block"><a href="/about_us">Подробнее</a></button>
            </div>
            <div class="row pt-md-5 pt-3 mt-lg-0 mt-md-5 mt-2 mb-lg-0 mb-md-5 mb-5">
                <div class="col-lg-6 col-md-6 text-center" >
                    <img class="img-fluid w-50" data-aos="flip-down" src="{{asset('images/brazil.png')}}" alt="">
                    <p class="TTBold text-black" data-aos="flip-down" style="font-size: 18px;">10,000 км2</p>

                    <img class="img-fluid mt-lg-2 mt-md-4 mt-2 w-25 pt-lg-0 pt-md-5" data-aos="flip-up" src="{{asset('images/parking.png')}}" alt="">
                    <p class="TTBold text-black pt-3" data-aos="flip-up" style="font-size: 18px;">500 парковочных мест</p>
                </div>
                <div class="col-lg-6 col-md-6 text-center ">
                    <img class="img-fluid w-25" data-aos="flip-down" src="{{asset('images/shop.png')}}" alt="">
                    <p class="TTBold text-black pt-2" data-aos="flip-down" style="font-size: 18px;">50 магазинов</p>

                    <img class="img-fluid mt-lg-2 mt-md-4 mt-2 w-25 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up" src="{{asset('images/amphitheatre.png')}}" alt="">
                    <p class="TTBold text-black" data-aos="flip-up" style="font-size: 18px;">1 амфитеатр</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pl-lg-5 pl-md-5 px-md-5 pt-lg-4 pt-md-4 pt-5 pb-lg-5 pb-md-5 pb-5 example-classname" id="gallery" >
    <div class="row mt-lg-5 pt-lg-5">
        <div class="col-lg-5">
            <h5 class="TTMedium text-black" style="font-size: 13px; text-transform: uppercase;" data-aos="flip-down">Галлерея</h5>
            <h3 class="TTBold text-black pt-2 d-lg-block d-md-block d-none" style="font-size: 2em; line-height: 1.2em; text-transform: uppercase;" data-aos="flip-up">Нет никого, кто любил бы боль саму по себе, кто искал бы ее</h3>

            <div class="row pt-4">
                <div class="col-lg-3 col-md-2 d-md-block d-none">
                    <img class="img-fluid"  data-aos="flip-up" style="" src="{{asset('images/line-black.png')}}" alt="">
                </div>
                <div class="col-lg-7 col-md-6">
                    <p class="TTRegular text-black pt-2 pb-2 d-lg-block d-md-block d-none" data-aos="flip-down" style="font-size: 14px; line-height: 20px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, a </p>
                    <div data-aos="flip-down"><button class="btn btn-pictures"><a href="/gallery">Смотреть все фото</a></button></div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-12 pb-md-5 pb-5 mb-5 d-lg-block d-md-none d-none">
            <div class="carousel">
                <div class="blokincarousel">

                </div>
                <div class="owl-carousel owl-one w-10">
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item1.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item2.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item3.png')}}" alt="">
                    </div>
                </div>
                {{--<p class='counter'>01 /12</p>--}}
            </div>

        </div>
        <div class="col-12 d-lg-none d-md-block d-block pt-md-5 pt-5 pb-md-5 pb-5">
            <div class="carousel">
                <div class="owl-carousel owl-two w-100">
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item1.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item2.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);" src="{{asset('images/item3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-lg-5 pt-5 pb-lg-5 pb-4 example-classname" id="4" style="background-image:url({{ asset('images/bg4.png') }}); background-size: cover;">
    <h3 class="TTBold text-white pt-2 text-lg-center text-md-left pb-lg-5 pb-4 pt-lg-0 pt-md-5 pl-lg-0 pl-md-5 pl-3" data-aos="flip-up" style="font-size: 2em; line-height: 1.2em; text-transform: uppercase;">Генеральный план</h3>
    <div class="row justify-content-center">
        <div class="col-8 d-lg-block d-none text-center">
            <img class="img-fluid w-75" style="" data-aos="fade-up" src="{{asset('images/plan.png')}}" alt="">
            <div id="10" class="anim1 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
            <div id="11" class="anim2 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
            <div id="12" class="anim3 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
            <div id="13" class="anim4 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
            <div id="14" class="anim5 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
            <div id="15" class="anim6 dot pulse-wrapper">
                <div id="pulse">
                    <span></span> <!-- Wave 1 -->
                    <span></span> <!-- Wave 2 -->
                </div>
            </div>
        </div>
    </div>
    <div class="mt-lg-5 pl-lg-3 pr-lg-3 point d-lg-block d-md-none">
        <div class="row pl-lg-0 pl-4">
            <div class="col-lg-2 col-12 d-flex 10 pt-3" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">01</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Бутики</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        <div class="col-lg-2 col-12 d-flex 11 pt-3" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">02</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Кофейня</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        <div class="col-lg-2 col-12 d-flex 12 pt-3" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">03</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Концерт Холл</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        <div class="col-lg-2 col-12 d-flex 13 pt-3" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">04</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Паркинг</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        <div class="col-lg-2 col-12 d-flex 14 pt-3" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">05</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Апартаменты</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        <div class="col-lg-2 col-12 d-flex 15 pt-3 pb-4" data-aos="flip-up">
            <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">06</h3>
            <div class="descr pl-lg-3 pl-3">
                <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Автомойка</h5>
                <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
            </div>
        </div>
        </div>
    </div>
    <div class="mt-lg-5 pt-lg-5 pt-md-5 pl-lg-0 pl-md-5 point d-lg-none d-md-block d-none pb-lg-0 pb-md-5">
        <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-12 d-flex 10 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">01</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Бутики</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
                <div class="col-12 d-flex 11 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">03</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Концерт Холл</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
                <div class="col-12 d-flex 12 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">05</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Апартаменты</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12 d-flex 10 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">02</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Кофейня</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
                <div class="col-12 d-flex 11 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">04</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Паркинг</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
                <div class="col-12 d-flex 12 pt-3" data-aos="flip-up">
                    <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">06</h3>
                    <div class="descr pl-lg-3">
                        <h5 class="TTBold text-white" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Автомойка</h5>
                        <p class="TTRegular text-white" style="font-size: 15px;line-height: 18px;">30 магазинов на территории</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid example-classname p-lg-5 p-5" id="5" style="background-image: url({{ asset('images/bg5.png') }}); background-size: cover; background-position: center;">
    <div class="row align-items-end">
        <div class="col-lg-6 col-md-10 pr-lg-5">
            <h3 class="TTBold text-black pt-2 pb-lg-4 pt-lg-5 text-second" style="font-size: 1.7em; line-height: 1.2em; text-transform: uppercase;" data-aos="fade-up">Будьте счастливым обладателем собственности в люксовом поселке Эне-Сай</h3>
            <div class="col-lg-9 pt-lg-0 pt-md-5 px-0">
                <p class="TTLight text-black pb-lg-3 pb-md-3 pb-1" style="font-size: 17px; line-height: 25px;" data-aos="flip-up">Оставьте заявку на обратный звонок и мы ответим на все ваши вопросы </p>
                <form>
                    <div class="form-group d-flex col-lg-12 col-12 px-0">
                        <input class="form-control" type="text" data-aos="flip-up" placeholder="Введите номер телефона">
                        <button type="submit" class="btn-submit" style="border: 0; background: transparent;"><img src="{{asset('images/Arrow.png')}}" alt=""></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 pt-lg-0 pt-md-5 pt-4">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-6">
                    <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="flip-up">Продано</h4>
                    <div class="line"></div>
                    <div class="numbers"><div class="number-item text-center pt-md-0 pt-4"><span class="value">31</span></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="flip-up">Резерв</h4>
                    <div class="line"></div>
                    <div class="numbers"><div class="number-item text-center pt-md-0 pt-4"><span class="value">40</span></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-6 pt-lg-0 pt-md-0 pt-5">
                    <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="flip-up">Свободно</h4>
                    <div class="line"></div>
                    <div class="numbers"><div class="number-item text-center pt-md-0 pt-4"><span class="value">28</span></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pr-lg-5 pl-lg-5 mt-lg-5 pt-lg-5 pt-md-5 pt-5 text-md-left text-center">
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">01</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">02</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">03</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">04</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">05</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">06</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">Преимущество</h5>
            <p class="TTRegular text-black px-md-0 px-5" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читае</p>
        </div>
    </div>
</div>

<div class="container-fluid pt-lg-5 pt-md-0 pt-5 pb-lg-3 example-classname pb-md-5" id="6">
    <div class="row pt-lg-5">
        <div class="col-lg-7 p-0">
            <img class="img-fluid" data-aos="flip-up" src="{{asset('images/pic2.png')}}" alt="">
        </div>
        <div class="col-lg-5 p-0 transformblock d-lg-block d-md-none d-block">
            <h3 class="TTExtraBold text-black pt-lg-2 pt-5 pl-lg-0 pl-4 text-first" data-aos="flip-up" style="font-size: 2.9em; line-height: 1.2em; text-transform: uppercase;">Последние новости</h3>
            <div class="container-fluid">
            <div class="row pt-4 pl-lg-5">
                <div class="col-2 pl-0 d-lg-block d-none">
                    <img class="img-fluid" style="" src="{{asset('images/line-black.png')}}" alt="">
                </div>
                <div class="col-lg-8 col-11 p-0">
                    <p class="TTRegular text-black pt-2 pb-2 pl-lg-0 pl-4" style="font-size: 14px; line-height: 20px;" data-aos="flip-down">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."</p>
                    <div data-aos="flip-up"><button class="btn btn-pictures ml-lg-0 ml-4"><a href="/news">Читать все новости</a></button></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-11 ml-5 pl-5 pt-5 d-lg-none d-md-block d-none">
            <h3 class="TTExtraBold text-black pt-2 pl-lg-0 pl-3 text-first" data-aos="flip-up" style="font-size: 2.9em; line-height: 1.2em; text-transform: uppercase;">Последние новости</h3>
            <div class="container-fluid">
                <div class="row pt-4 pl-lg-5">
                    <div class="col-2 pl-0">
                        <img class="img-fluid" style="" data-aos="flip-up" src="{{asset('images/line-black.png')}}" alt="">
                    </div>
                    <div class="col-8 p-0">
                        <p class="TTRegular text-black pt-2 pb-2" style="font-size: 14px; line-height: 20px;" data-aos="flip-up">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."</p>
                        <div  data-aos="flip-up"><button class="btn btn-pictures"><a href="/news">Читать все новости</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-4 pt-lg-5 pb-lg-5">
       <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">01</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
           <a href="/news_page" style="text-decoration: none;">
               <div class="row align-items-center">
                   <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                   <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
               </div>
           </a>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">02</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
            <a href="/news_page" style="text-decoration: none;">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                    <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">03</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
            <a href="/news_page" style="text-decoration: none;">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                    <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">04</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
            <a href="/news_page" style="text-decoration: none;">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                    <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">05</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
            <a href="/news_page" style="text-decoration: none;">
                <div class="row align-items-center">
                <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
            </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5 pb-lg-0 pb-md-0 pb-5" data-aos="flip-up">
            <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">06</h3>
            <h5 class="TTBold text-black mb-0" style="font-size: 1em;line-height: 20px; text-transform: uppercase;">Заголовок <br>новости</h5>
            <p class="TTRegular text-black pt-2" style="font-size: 13px;line-height: 17px;">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение</p>
            <a href="/news_page" style="text-decoration: none;">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;" src="{{asset('images/line-black.png')}}" alt=""></div>
                    <div class="col-lg-9 col-10 align-items-center pl-1"> <h4 class="TTBold text-black mb-0" style="font-size: 13px; line-height: 19px;">Читать полностью</h4></div>
                </div>
            </a>
        </div>
    </div>
</div>



    @push('scripts')
            <script>
                $(window).scroll(testScroll);
                var viewed = false;

                function isScrolledIntoView(elem) {
                    var docViewTop = $(window).scrollTop();
                    var docViewBottom = docViewTop + $(window).height();

                    var elemTop = $(elem).offset().top;
                    var elemBottom = elemTop + $(elem).height();

                    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
                }

                function testScroll() {
                    if (isScrolledIntoView($(".numbers")) && !viewed) {
                        viewed = true;
                        $('.value').each(function () {
                            $(this).prop('Counter',0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 1000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                    }
                }
            </script>
        <script>
            $(function() {
                // var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                // if(width > 800){
                $.scrollify({
                    section : ".example-classname",
                });
                    // }
            });
        </script>
            <script>
                $('.dot').mouseenter( function () {
                    var focus_id = this.id;
                    $('.' + focus_id).addClass('point-border');
                });
                $('.dot').mouseleave( function () {
                    var focus_id = this.id;
                    $('.' + focus_id).removeClass('point-border');
                })
            </script>
    @endpush
    @endsection

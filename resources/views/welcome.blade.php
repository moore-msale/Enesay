@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.min.css') }}">
@endpush
@section('content')
    <?php
    $agent = New \Jenssegers\Agent\Agent();
    ?>
    <a href="tel: +996705880575" class="d-md-block d-none position-fixed px-5 py-3 bg-success text-white btn-call btn-left"><i class="fa text-white fa-phone fa-2x"></i></a>
    <a href="https://api.whatsapp.com/send?phone=996705880575" class="d-md-block d-none position-fixed px-5 py-3 bg-success text-white btn-call btn-right"><i class="fab text-white fa-whatsapp fa-2x"></i></a>
    <a href="tel: +996705880575" class="d-sm-none d-block position-fixed px-3 py-2 bg-success text-white btn-call btn-left"><i class="fa text-white fa-phone"></i></a>
    <a href="https://api.whatsapp.com/send?phone=996705880575" class="d-sm-none d-block position-fixed px-3 py-2 bg-success text-white btn-call btn-right"><i class="fab text-white fa-whatsapp"></i></a>
    <a href="tel: +996705880575" class="d-md-none d-sm-block d-none position-fixed px-4 py-3 bg-success text-white btn-call btn-left"><i class="fa text-white fa-phone fa-lg"></i></a>
    <a href="https://api.whatsapp.com/send?phone=996705880575" class="d-md-none d-sm-block d-none position-fixed px-4 py-3 bg-success text-white btn-call btn-right"><i class="fab text-white fa-whatsapp fa-lg"></i></a>
    <div class="container-fluid align-items-center pt-lg-5 pt-md-5 pt-1 video-container example-classname panel-screen"
         id="1"
         style="background-image: url({{ asset('images/bg1.png') }});">
        <div class="backdrop"></div>
        @if($agent->isPhone())
            <video class="vids-mb" autoplay muted loop controls="true" playsinline>
                <source src="{{ asset('video/video_back2.mp4') }}" type="video/mp4">
            </video>
        @else
            <video class="vids-pc" autoplay muted loop>
                <source src="{{ asset('video/video_back2.mp4') }}" type="video/mp4">
            </video>
        @endif

        <div class="row align-items-center pt-md-5 pt-0 pb-
        md-5 pb-0 mt-5 pl-md-5 pl-2 position-relative" style="z-index: 2;">
            <div class="col-lg-8 pt-lg-0 pt-md-5 pt-0 pb-md-5 pb-0 mt-lg-0 mt-md-5 mt-0">
                <div class="row pt-md-5 pt-0">
                    <div class="col-11 text-right pt-lg-0 pt-5 d-md-none d-block" data-aos="fade-up">
                        <a data-fancybox="gallery1" href="{{ asset( $content->video_ur ) }}">
                            <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
                            <p class="TTLight"
                               style="color: #ffffff;margin-top: 5%;">
                                Смотреть видео</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <div class="row align-items-center justify-content-start flex-nowrap">
                            <div class="col-lg-5 col-md-2 col-3 pr-0 pr-lg-2 mt-lg-0 mt-md-5 d-none d-md-block" data-aos="fade-up"><h1
                                    style="font-family: RobotoBold; font-size: 3.1em; line-height: 1.3em;text-transform: uppercase;color: #FFFFFF;">
                                    01</h1></div>
                            <div class="col-lg-7 col-md-2 col-3 pb-2 px-0 px-lg-0 mt-lg-0 mt-md-5 d-md-block d-none">
                                <img class="img-fluid" style="height: 100%; width: auto;"
                                     src="{{asset('images/line.png')}}" alt=""></div>
                            <div class="col-lg-3 text-center pt-lg-0 pt-5 d-lg-none d-md-block d-none"
                                 data-aos="fade-up">
                                <a data-fancybox="gallery3" href="{{ asset( $content->video_ur ) }}">
                                    <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
                                    <p class="TTLight"
                                       style="color: #ffffff;margin-top: 5%;">
                                        Смотреть видео</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-10 col-11" data-aos="fade-up">
                        <h1 class="TTBold text-first"
                            style="font-size: 2.5em; line-height: 1.3em;color: #fff; text-transform: uppercase;"
                            data-aos="fade-up">{{ $content->name1 }}</h1>
                        <p class="pr-lg-5 mr-lg-5 TTLight pt-lg-0 pt-md-5 pt-3 pb-lg-0 pb-md-5 pb-3" data-aos="fade-up"
                           style="font-size: 15px;line-height: 21px;color: #fff;">{{ $content->description1 }}</p>
                        <button class="btn btn-main-block mb-md-0 mb-5"><a href="/about_us">Подробнее</a></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 text-center pt-lg-0 pt-5 d-lg-block d-md-none d-none position-relative"
                 style="z-index: 2;" data-aos="fade-up">
                <a data-fancybox="gallery2" href="{{ asset( $content->video_ur ) }}">
                    <img class="w-25" src="{{asset('images/play-btn.png')}}" alt="">
                    <p class="TTLight"
                       style="color: #ffffff;margin-top: 5%;">Смотреть
                        видео</p>
                </a>
            </div>
            <div class="col-lg-1" id="menu">

            </div>

        </div>
        <div class="d-lg-block d-none" id="pick"
             style="transform: rotate(90deg);position: absolute;top: 55%;right: -10.2%; z-index: 3;" data-aos="fade-up">
            <a href="#1" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">Главная</a>
            <a href="#2" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">О
                проекте</a>
            <a href="#4" class="text-white px-2 TTLight" style="text-transform: uppercase; font-size: 14px;">Расположение</a>
            <a href="#7" class="text-white px-2 TTLight"
               style="text-transform: uppercase; font-size: 14px;">Контакты</a>
        </div>

        <div class="mt-5 align-items-center d-md-block d-none position-relative" style="z-index: 2;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-8 p-5" style="background: rgba(6, 6, 6, 0.9);">
                    <div class="d-lg-none d-md-block">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">
                                    Связаться с отделом продаж</h3>
                                <p class="TTLight text-white"
                                   style="font-size: 15px; line-height: 21px;">{{ $content->call_text }}</p>
                                <div class="row align-items-center">
                                    <div class="col-2 pr-0">
                                        <hr class="border-white">
                                    </div>
                                    <div class="col-10 align-items-center"><h4 class="TTMedium text-white mb-0"
                                                                               style="font-size: 15px; line-height: 21px;">
                                            Связаться</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-block d-md-none">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">
                                    Смотреть генеральный план</h3>
                                <p class="TTLight text-white"
                                   style="font-size: 15px; line-height: 21px;">{{ $content->gen_text }}</p>
                                <div class="row align-items-center" id="pick"
                                     style="position: absolute; bottom:-10%; width:350px;">
                                    <div class="col-2 pr-0">
                                        <hr class="border-white">
                                    </div>
                                    <a href="#4">
                                        <div class="col-10 align-items-center"><h4 class="TTMedium text-white mb-0"
                                                                                   style="font-size: 15px; line-height: 21px;">
                                                Смотреть</h4></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="TTBold text-white" style="font-size: 15px; text-transform: uppercase;">
                                    Связаться с отделом продаж</h3>
                                <p class="TTLight text-white"
                                   style="font-size: 15px; line-height: 21px;">{{ $content->call_text }}</p>
                                <div class="row align-items-center"
                                     style="position: absolute; bottom:-10%; width:350px;">
                                    <div class="col-2 pr-0">
                                        <hr class="border-white">
                                    </div>
                                    <a href="#" class="col-10 align-items-center noselect" data-toggle="modal"
                                       data-target="#callModal"><h4 class="TTMedium text-white mb-0"
                                                                    style="font-size: 15px; line-height: 21px;">
                                            Связаться</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 pt-5 mt-5 d-lg-block d-none" id="pick">
                    <a href="#2">
                        <div class="row align-items-center">
                            <div class="col-6 pl-5 align-items-center"><h4 class="TTLight text-white mb-0"
                                                                           style="font-size: 15px; line-height: 21px;letter-spacing: 0.2em;">
                                    Листайте вниз</h4></div>
                            <div class="col-6 pl-0"><img class="img-fluid" style="height: 100%; width: auto;"
                                                         src="{{asset('images/line.png')}}" alt=""></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid example-classname panel-screen" id="2">
        <div class="row">
            <div class="col-lg-4 p-5 align-items-center d-lg-block d-md-none d-none" data-aos="fade-up">
                <img class="img-fluid w-100" src="{{asset( 'storage/'.$content->image2)}}" alt="">
                <div class="text-position-abs">
                    <div class="module-border-wrap">
                        <div class="module">
                            <h3 class="TTBold text-black text-second"
                                style="font-size: 2em; line-height: 1.2em; text-transform: uppercase;">{{ $content->block2 }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 pt-lg-5 pt-3 mt-lg-5 mt-0 d-md-block d-none" style="">
                <div class="row align-items-center justify-content-between flex-nowrap">
                    <div class="col-5 text-center"><h1
                            style="font-family: RobotoBold; font-size: 3.1em; line-height: 1.3em;text-transform: uppercase;color: #000;"
                            data-aos="fade-up">02</h1></div>
                    <div class="col-7"><img class="img-fluid" style="height: 100%; width: auto;"
                                            src="{{asset('images/line-black.png')}}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-5 col-md-11 pl-md-5 pl-3 pt-lg-5 mt-lg-5 pt-2 mt-5">
                <h5 class="TTMedium text-black" style="font-size: 13px; text-transform: uppercase;" data-aos="fade-up">О
                    проекте</h5>
                <h3 class="TTBold text-black pt-2 text-second"
                    style="font-size: 1.7em; line-height: 1.2em; text-transform: uppercase;"
                    data-aos="fade-up">{{ $content->name2 }}</h3>
                <p class="TTRegular text-black pt-md-2 pt-2 pb-md-2 pb-2" style="font-size: 14px; line-height: 20px;"
                   data-aos="fade-up">{{ $content->description2 }}</p>
                <div data-aos="fade-up">
                    <button class="btn btn-main-block"><a href="/about_us">Подробнее</a></button>
                </div>
                <div class="row pt-md-5 pt-3 mt-lg-0 mt-md-5 mt-2 mb-lg-0 mb-md-5 mb-5">
                    <div class="col-lg-6 col-md-6 text-center">
                        @if($content->locate2)
                            <img class="img-fluid w-50" data-aos="fade-up" src="{{asset('storage/'.$content->locate_img2)}}"
                                 alt="">
                            <p class="TTRegular text-black" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate2 !!}</p>
                        @endif

                        @if($content->locate3)
                            <img class="img-fluid mt-lg-2 mt-md-4 mt-0 w-25 pt-lg-0 pt-md-5" data-aos="fade-up"
                                 src="{{asset('storage/'.$content->locate_img3)}}" alt="">
                            <p class="TTRegular text-black pt-3" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate3 !!}</p>
                        @endif
                        @if($content->locate7)
                            <img class="img-fluid w-25" data-aos="fade-up" src="{{asset('storage/'.$content->locate_img7)}}"
                                 alt="">
                            <p class="TTRegular text-black pt-2" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate7 !!}</p>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 text-center ">
                        @if($content->locate4)
                            <img class="img-fluid w-25" data-aos="fade-up" src="{{asset('storage/'.$content->locate_img4)}}"
                                 alt="">
                            <p class="TTRegular text-black pt-2" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate4 !!}</p>
                        @endif

                        @if($content->locate5)
                            <img class="img-fluid mt-lg-2 mt-md-4 mt-0 w-25 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up"
                                 src="{{asset('storage/'.$content->locate_img5)}}" alt="">
                            <p class="TTRegular text-black" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate5 !!}</p>
                        @endif
                        @if($content->locate6)
                            <img class="img-fluid w-25" data-aos="fade-up" src="{{asset('storage/'.$content->locate_img6)}}"
                                 alt="">
                            <p class="TTRegular text-black pt-2" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate6 !!}</p>
                        @endif

                        @if($content->locate8)
                            <img class="img-fluid mt-lg-2 mt-md-4 mt-0 w-25 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up"
                                 src="{{asset('storage/'.$content->locate_img8)}}" alt="">
                            <p class="TTRegular text-black" data-aos="fade-up"
                               style="font-size: 18px;">{!! $content->locate8 !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="container-fluid pl-lg-5 pl-md-5 px-md-5 example-classname panel-screen"
        id="gallery">
        <div class="row mt-lg-5 pt-lg-5">
            <div class="col-lg-5">
                <h5 class="TTMedium text-black" style="font-size: 13px; text-transform: uppercase;" data-aos="fade-up">
                    Галерея</h5>
                <h3 class="TTBold text-black pt-2"
                    style="font-size: 2em; line-height: 1.2em; text-transform: uppercase;"
                    data-aos="fade-up">{{ $content->name3 }}</h3>

                <div class="row pt-4">
                    <div class="col-lg-3 col-md-2 d-md-block d-none">
                        <img class="img-fluid" style="height:0.5%;" data-aos="fade-up"
                             src="{{asset('images/line-black.png')}}" alt="">
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <p class="TTRegular text-black pt-2 pb-2" data-aos="fade-up"
                           style="font-size: 14px; line-height: 20px;">{{ $content->description3 }}</p>
                        <div data-aos="fade-up">
                            <button class="btn btn-pictures"><a href="/gallery">Смотреть все фото</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 pb-md-5 pb-5 mb-5 d-lg-block d-md-none d-none">
                <div class="carousel">
                    <div class="blokincarousel">
                        <div class="status-carousel">
                            <span class="carousel-index">01</span>
                            <div class="carousel-delimiter">
                                /<span class="carousel-count">12</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-one w-10">
                        @foreach($galleries as $gallery)
                            <div class="item">
                                <a href="{{asset('storage/'.$gallery->image)}}" data-fancybox="gallery-carousel2">
                                    <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);"
                                         src="{{asset('storage/'.$gallery->image)}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-12 d-lg-none d-md-block d-block pt-md-5 pt-5 pb-md-5 pb-5">
                <div class="carousel">
                    <div class="owl-carousel owl-two w-100">
                        @foreach($galleries as $gallery)
                            <div class="item">
                                <a href="{{asset('storage/'.$gallery->image)}}" data-fancybox="gallery-carousel">
                                    <img class="img-fluid" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);"
                                         src="{{asset('storage/'.$gallery->image)}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($plan)
        <div class="container-fluid position-relative pt-lg-5 pt-5 pb-lg-5 pb-4 example-classname panel-screen" id="4"
             style="background-image:url({{ asset('images/bg4.png') }}); background-size: cover;">
            <div class="backdrop"></div>
            <h3 class="TTBold position-relative text-white pt-2 text-lg-center text-md-left pb-lg-0 pb-0 pt-lg-0 pt-md-5 pl-lg-0 pl-md-5 pl-3"
                data-aos="fade-up" id="plan"
                style="font-size: 2em; line-height: 1.2em; text-transform: uppercase; z-index: 2;">Генеральный
                план</h3>
            <div class="row align-items-center justify-content-around position-relative" style="z-index: 2;">
                <div class="col-12 col-lg-4 order-2 order-lg-0 text-light">
                    <div class="row">
                        @foreach($plan->builds->sortBy('order') as $build)
                            <div data-id="{{ $build->id }}" data-images="{{ count($build->images) ? 'true' : 'false' }}"
                                 class="col-md-6 col-12 d-flex {{ $build->id }} build pt-3 {{--tooltipster-tooltip--}} mb-3"
                                 data-tooltip-content="#tooltip_content">
                                <h3 class="robotobold"
                                    style="color: #C6972A; font-size: 2em;line-height: 31px;">{{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}</h3>
                                <div class="descr pl-lg-3 pl-3">
                                    <h5 class="TTBold text-white"
                                        style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $build->title }}</h5>
                                    @if(count($build->images))
                                        <p class="small text-muted m-0">Нажмите для подробностей</p>
                                    @endif
                                    <p class="TTRegular text-white"
                                       style="font-size: 15px;line-height: 18px;">{{ $build->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-0 order-lg-2 px-0 position-relative" style="z-index: 2;">
                    <img class="img-fluid" id="planImage" style="" src="{{asset('storage/'.$plan->image)}}" alt="">
                    <div class="backzone"></div>
                    {{--<div class="anim1 pulse-wrapper">--}}
                    {{--<div id="pulse">--}}
                    {{--<span data-id="10" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--<span data-id="10" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="anim2 pulse-wrapper">--}}
                    {{--<div id="pulse">--}}
                    {{--<span data-id="11" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--<span data-id="11" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="anim3 pulse-wrapper">--}}
                    {{--<div id="pulse">--}}
                    {{--<span data-id="12" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--<span data-id="12" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="anim4 pulse-wrapper">--}}
                    {{--<div id="pulse">--}}
                    {{--<span data-id="13" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--<span data-id="13" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--                <div class="anim5 pulse-wrapper">--}}
                    {{--                    <div id="pulse">--}}
                    {{--                        <span data-id="3" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--                        <span data-id="3" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--<div class="anim6 pulse-wrapper">--}}
                    {{--<div id="pulse">--}}
                    {{--<span data-id="15" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 1 -->--}}
                    {{--<span data-id="15" class="dot tooltipster-tooltip" data-tooltip-content="#tooltip_content"></span> <!-- Wave 2 -->--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="tooltip_templates d-none">
            <span id="tooltip_content">
                <img src="{{ asset('images/hello.png') }}" style="width: 500px; height: auto;"/>
            </span>
            </div>
            <div class="mt-lg-5 pl-lg-3 pr-lg-3 point d-lg-block d-md-none position-relative" style="z-index: 2;">
                <div class="row pl-lg-0 pl-4">

                    {{--                <div data-id="11" class="col-lg-2 col-12 d-flex 11 build pt-3 tooltipster-tooltip" data-tooltip-content="#tooltip_content" data-aos="fade-up">--}}
                    {{--                    <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">02</h3>--}}
                    {{--                    <div class="descr pl-lg-3 pl-3">--}}
                    {{--                        <h5 class="TTBold text-white"--}}
                    {{--                            style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name2 }}</h5>--}}
                    {{--                        <p class="TTRegular text-white"--}}
                    {{--                           style="font-size: 15px;line-height: 18px;">{{ $content->build_description2 }}</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div data-id="12" class="col-lg-2 col-12 d-flex 12 build pt-3 tooltipster-tooltip" data-tooltip-content="#tooltip_content" data-aos="fade-up">--}}
                    {{--                    <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">03</h3>--}}
                    {{--                    <div class="descr pl-lg-3 pl-3">--}}
                    {{--                        <h5 class="TTBold text-white"--}}
                    {{--                            style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name3 }}</h5>--}}
                    {{--                        <p class="TTRegular text-white"--}}
                    {{--                           style="font-size: 15px;line-height: 18px;">{{ $content->build_description3 }}</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div data-id="13" class="col-lg-2 col-12 d-flex 13 build pt-3 tooltipster-tooltip" data-tooltip-content="#tooltip_content" data-aos="fade-up">--}}
                    {{--                    <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">04</h3>--}}
                    {{--                    <div class="descr pl-lg-3 pl-3">--}}
                    {{--                        <h5 class="TTBold text-white"--}}
                    {{--                            style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name4 }}</h5>--}}
                    {{--                        <p class="TTRegular text-white"--}}
                    {{--                           style="font-size: 15px;line-height: 18px;">{{ $content->build_description4 }}</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div data-id="14" class="col-lg-2 col-12 d-flex 14 build pt-3 tooltipster-tooltip" data-tooltip-content="#tooltip_content" data-aos="fade-up">--}}
                    {{--                    <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">05</h3>--}}
                    {{--                    <div class="descr pl-lg-3 pl-3">--}}
                    {{--                        <h5 class="TTBold text-white"--}}
                    {{--                            style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name5 }}</h5>--}}
                    {{--                        <p class="TTRegular text-white"--}}
                    {{--                           style="font-size: 15px;line-height: 18px;">{{ $content->build_description5 }}</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div data-id="15" class="col-lg-2 col-12 d-flex 15 build pt-3 tooltipster-tooltip pb-4" data-tooltip-content="#tooltip_content" data-aos="fade-up">--}}
                    {{--                    <h3 class="robotobold" style="color: #C6972A; font-size: 2em;line-height: 31px;">06</h3>--}}
                    {{--                    <div class="descr pl-lg-3 pl-3">--}}
                    {{--                        <h5 class="TTBold text-white"--}}
                    {{--                            style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name6 }}</h5>--}}
                    {{--                        <p class="TTRegular text-white"--}}
                    {{--                           style="font-size: 15px;line-height: 18px;">{{ $content->build_description6 }}</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
            <div class="mt-lg-5 pt-lg-5 pt-md-5 pl-lg-0 pl-md-5 point d-none pb-lg-0 pb-md-5">
                <div class="row">
                    @foreach($plan->builds->sortBy('order') as $build)
                        <div data-id="{{ $build->id }}"
                             class="col-lg-6 col-12 d-flex {{ $build->id }} build pt-3 {{--tooltipster-tooltip--}} mb-3"
                             data-tooltip-content="#tooltip_content" data-aos="fade-up">
                            <h3 class="robotobold"
                                style="color: #C6972A; font-size: 2em;line-height: 31px;">{{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}</h3>
                            <div class="descr pl-lg-3 pl-3">
                                <h5 class="TTBold text-white"
                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $build->title }}</h5>
                                <p class="TTRegular text-white"
                                   style="font-size: 15px;line-height: 18px;">{{ $build->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{--                <div class="col-4">--}}
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-12 d-flex 10 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                01</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name1 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description1 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-12 d-flex 11 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                03</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name3 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description3 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-12 d-flex 12 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                05</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name5 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description5 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-4">--}}
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-12 d-flex 10 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                02</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name2 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description2 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-12 d-flex 11 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                04</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name4 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description4 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-12 d-flex 12 pt-3" data-aos="fade-up">--}}
                    {{--                            <h3 class="robotobold pr-2" style="color: #C6972A; font-size: 2em;line-height: 31px;">--}}
                    {{--                                06</h3>--}}
                    {{--                            <div class="descr pl-lg-3">--}}
                    {{--                                <h5 class="TTBold text-white"--}}
                    {{--                                    style="font-size: 1em;line-height: 24px; text-transform: uppercase;">{{ $content->build_name6 }}</h5>--}}
                    {{--                                <p class="TTRegular text-white"--}}
                    {{--                                   style="font-size: 15px;line-height: 18px;">{{ $content->build_description6 }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid example-classname p-5 panel-screen" id="5"
         style="background-image: url({{ asset('images/bg5.png') }}); background-size: cover; background-position: center;">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-10 pr-lg-5">
                <h3 class="TTBold text-black pt-2 pb-lg-4 pt-lg-5 text-second"
                    style="font-size: 1.7em; line-height: 1.2em; text-transform: uppercase;"
                    data-aos="fade-up">{{ $content->name4 }}</h3>
                <div class="col-lg-9 pt-lg-0 pt-md-5 px-0">
                    <p class="TTLight text-black pb-lg-3 pb-md-3 pb-1" style="font-size: 17px; line-height: 25px;"
                       data-aos="fade-up">{{ $content->description4 }}</p>
                    <form>
                        <div class="form-group d-flex col-lg-12 col-12 px-0">
                            <input class="form-control" type="text" data-aos="fade-up"
                                   placeholder="Введите номер телефона">
                            <button type="submit" class="btn-submit" style="border: 0; background: transparent;">
                                <img style="width: 30px; height: auto; transform: translate(-10px, 8px);" src="{{asset('images/arrow.svg')}}" alt="">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-0 pt-md-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-6">
                        <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="fade-up">Продано</h4>
                        <div class="line"></div>
                        <div class="numbers">
                            <div class="number-item text-center pt-md-0 pt-4"><span
                                    class="value">{{ $content->number1 }}</span></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="fade-up">Резерв</h4>
                        <div class="line"></div>
                        <div class="numbers">
                            <div class="number-item text-center pt-md-0 pt-4"><span
                                    class="value">{{ $content->number2 }}</span></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 pt-lg-0 pt-md-0 pt-5">
                        <h4 class="TTRegular text-black text-center pb-md-0 pb-4" data-aos="fade-up">Свободно</h4>
                        <div class="line"></div>
                        <div class="numbers">
                            <div class="number-item text-center pt-md-0 pt-4"><span
                                    class="value">{{ $content->number3 }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-5 pt-lg-5 pt-md-5 pt-5 text-md-left text-center">
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">01</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title1 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant1 }}</p>
            </div>
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">02</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title2 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant2 }}</p>
            </div>
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">03</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title3 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant3 }}</p>
            </div>
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">04</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title4 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant4 }}</p>
            </div>
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">05</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title5 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant5 }}</p>
            </div>
            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">
                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">06</h3>
                <h5 class="TTBold text-black mb-2" style="font-size: 1em;line-height: 24px; text-transform: uppercase;">
                    {{ $content->advant_title6 }}</h5>
                <p class="TTRegular text-black px-md-0 px-5"
                   style="font-size: 16px;line-height: 17px;">{{ $content->advant6 }}</p>
            </div>
        </div>
    </div>

{{--    <div class="container-fluid pt-lg-5 pt-md-0 pt-5 pb-lg-5 example-classname pb-md-5 pb-5 panel-screen" id="6">--}}
{{--        <div class="row pt-lg-5">--}}
{{--            <div class="col-lg-7 p-0">--}}
{{--                <img class="img-fluid" data-aos="fade-up" src="{{asset('images/pic2.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 p-0 transformblock d-lg-block d-md-none d-block">--}}
{{--                <h3 class="TTExtraBold text-black pt-lg-2 pt-5 pl-lg-0 pl-4 text-first" data-aos="fade-up"--}}
{{--                    style="font-size: 2.9em; line-height: 1.2em; text-transform: uppercase;">{{ $content->name5 }}</h3>--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row pt-4 pl-lg-5">--}}
{{--                        <div class="col-2 pl-0 d-lg-block d-none">--}}
{{--                            <img class="img-fluid" style="height: 1%" data-aos="fade-up"--}}
{{--                                 src="{{asset('images/line-black.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-8 col-11 p-0">--}}
{{--                            <p class="TTRegular text-black pt-2 pb-2 pl-lg-0 pl-4"--}}
{{--                               style="font-size: 14px; line-height: 20px;"--}}
{{--                               data-aos="fade-up">{{ $content->description5 }}</p>--}}
{{--                            <div data-aos="fade-up">--}}
{{--                                <button class="btn btn-pictures ml-lg-0 ml-4"><a href="/news">Читать все новости</a>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 col-md-11 ml-5 pl-5 pt-5 d-lg-none d-md-block d-none">--}}
{{--                <h3 class="TTExtraBold text-black pt-2 pl-lg-0 pl-3 text-first" data-aos="fade-up"--}}
{{--                    style="font-size: 2.9em; line-height: 1.2em; text-transform: uppercase;">{{ $content->name5 }}</h3>--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row pt-4 pl-lg-5">--}}
{{--                        <div class="col-2 pl-0">--}}
{{--                            <img class="img-fluid" style="" data-aos="fade-up" src="{{asset('images/line-black.png')}}"--}}
{{--                                 alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-8 p-0">--}}
{{--                            <p class="TTRegular text-black pt-2 pb-2" style="font-size: 14px; line-height: 20px;"--}}
{{--                               data-aos="fade-up">{{ $content->description5 }}</p>--}}
{{--                            <div data-aos="fade-up">--}}
{{--                                <button class="btn btn-pictures"><a href="/news">Читать все новости</a></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row m-4 pt-lg-5 pb-lg-5 pb-md-5">--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">01</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">02</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">03</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">04</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">05</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-5 pt-lg-0 pt-md-5 pt-4 pl-lg-3 pl-md-5 pb-lg-0 pb-md-0 pb-5" data-aos="fade-up">--}}
{{--                <h3 class="robotobold mb-0" style="color: #C6972A; font-size: 1em;line-height: 31px;">06</h3>--}}
{{--                <h5 class="TTBold text-black mb-0"--}}
{{--                    style="font-size: 1em;line-height: 20px; text-transform: uppercase;">{{ $news->name }}</h5>--}}
{{--                <p class="TTRegular text-black pt-2"--}}
{{--                   style="font-size: 13px;line-height: 17px;"> {{ $news->description }} </p>--}}
{{--                <a href="{{ asset('news_page/'.$news->id) }}" style="text-decoration: none;">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-lg-3 col-2 pr-0"><img class="img-fluid" style="height: 100%; width: auto;"--}}
{{--                                                              src="{{asset('images/line-black.png')}}" alt=""></div>--}}
{{--                        <div class="col-lg-9 col-10 align-items-center pl-1"><h4 class="TTBold text-black mb-0"--}}
{{--                                                                                 style="font-size: 13px; line-height: 19px;">--}}
{{--                                Читать полностью</h4></div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    @push('scripts')
        <script src="{{ asset('js/tooltipster.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollify2.js') }}"></script>
        <script>
            $.scrollify({
                content: '.panel-screen'
            })
        </script>
        <script>
            $('.tooltipster-tooltip').tooltipster({
                contentCloning: true
            });
        </script>
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
                        $(this).prop('Counter', 0).animate({
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
        {{--<script>--}}
        {{--$(function() {--}}
        {{--// var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;--}}
        {{--// if(width > 800){--}}
        {{--$.scrollify({--}}
        {{--section : ".example-classname",--}}
        {{--});--}}
        {{--// }--}}
        {{--});--}}
        {{--</script>--}}
        <script>
            // $('.dot').mouseenter( function () {
            //     var focus_id = this.id;
            //     $('.' + focus_id).addClass('point-border');
            // });
            // $('.dot').mouseleave( function () {
            //     var focus_id = this.id;
            //     $('.' + focus_id).removeClass('point-border');
            // });

            function registerHoverDot(item) {
                item.hover(e => {
                    let pulse = $(e.currentTarget);
                    let id = pulse.data('id');
                    pulse.toggleClass('pulse-hover');
                    $('.' + id).toggleClass('point-border');
                }, e => {
                    let pulse = $($(e.currentTarget));
                    let id = pulse.data('id');
                    pulse.toggleClass('pulse-hover');
                    $('.' + id).toggleClass('point-border');
                });
            }

            $('.build').hover(e => {
                let card = $($(e.currentTarget));
                let id = card.data('id');
                $('.' + id).toggleClass('point-border');
                $('div.dot[data-id="' + id + '"]').find('span').toggleClass('pulse-span-hover');
            }, e => {
                let card = $($(e.currentTarget));
                let id = card.data('id');
                $('.' + id).toggleClass('point-border');
                $('div.dot[data-id="' + id + '"]').find('span').toggleClass('pulse-span-hover');
            });

            $('.build').click(e => {
                let btn = $(e.currentTarget);
                let id = btn.data('id');
                let images = btn.data('images');

                if (images) {
                    $.ajax({
                        url: '{{ route('build.images') }}',
                        data: {
                            build_id: id
                        },
                        success: data => {
                            $.fancybox.open(data);
                        },
                        error: () => {
                            console.log('error');
                        }
                    })
                }
            });
        </script>
        <script>
            $('.link').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
        </script>
        <script src="https://raw.githubusercontent.com/rishabhp/bideo.js/master/bideo.js"></script>
        <script>
            var video = document.querySelector('video')
                , container = document.querySelector('.video-container');

            var setVideoDimensions = function () {
                // Video's intrinsic dimensions
                var w = video.videoWidth
                    , h = video.videoHeight;

                // Intrinsic Ratio
                // Will be more than 1 if W > H and less if W < H
                var videoRatio = (w / h).toFixed(2);

                // Get the container's computed styles
                //
                // Also calculate the min dimensions required (this will be
                // the container dimentions)
                var containerStyles = window.getComputedStyle(container)
                    , minW = parseInt(containerStyles.getPropertyValue('width'))
                    , minH = parseInt(containerStyles.getPropertyValue('height'));

                // What's the min:intrinsic dimensions
                //
                // The idea is to get which of the container dimension
                // has a higher value when compared with the equivalents
                // of the video. Imagine a 1200x700 container and
                // 1000x500 video. Then in order to find the right balance
                // and do minimum scaling, we have to find the dimension
                // with higher ratio.
                //
                // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
                // scale 500 to 700 and then calculate what should be the
                // right width. If we scale 1000 to 1200 then the height
                // will become 600 proportionately.
                var widthRatio = minW / w
                    , heightRatio = minH / h;

                // Whichever ratio is more, the scaling
                // has to be done over that dimension
                if (widthRatio > heightRatio) {
                    var newWidth = minW;
                    var newHeight = Math.ceil(newWidth / videoRatio);
                } else {
                    var newHeight = minH;
                    var newWidth = Math.ceil(newHeight * videoRatio);
                }

                video.style.width = newWidth + 'px';
                video.style.height = newHeight + 'px';
            };

            video.addEventListener('loadedmetadata', setVideoDimensions, false);
            window.addEventListener('resize', setVideoDimensions, false);
        </script>
    @endpush
    @push('scripts')
        @if($plan)
            <script>
                $(document).ready(e => {
                    $.ajax({
                        url: '{{ route('dot.index') }}',
                        data: {
                            plan_id: '{{ $plan->id }}'
                        },
                        success: data => {
                            // setTimeout(function () {
                            let width = $('#planImage').width();
                            let height = $('#planImage').height();
                            let naturalWidth = parseFloat('{{ $plan->width }}');
                            let naturalHeight = parseFloat('{{ $plan->height }}');
                            let ratio = height / naturalHeight;
                            console.log(ratio);
                            console.log(height);
                            console.log(naturalHeight);
                            for (let item of data) {
                                let dot = $('<div class="dot pulse-wrapper" data-id=' + item.build.id + ' style=top:' + parseInt(ratio * item.top) + 'px;left:' + parseInt(ratio * item.left) + 'px;width:' + parseInt(ratio * 15) + 'px;height:' + parseInt(ratio * 15) + 'px;>' +
                                    '<div class="pulse">' +
                                    '<span style=width:' + parseInt(ratio * 15) + 'px;height:' + parseInt(ratio * 15) + 'px;></span>' +
                                    '<span style=width:' + parseInt(ratio * 15) + 'px;height:' + parseInt(ratio * 15) + 'px;></span>' +
                                    '</div>' +
                                    '</div>');
                                $('.backzone').append(dot);
                                registerHoverDot(dot);
                            }
                            // }, 1000);
                        },
                        error: () => {
                            console.log('error');
                        }
                    })
                })
            </script>
        @endif
    @endpush
@endsection

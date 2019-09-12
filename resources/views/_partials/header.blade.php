
<nav class="navbar menuse navbar-expand-xl py-0 w-100 pr-0 d-lg-block d-none" style="z-index: 999; top: 4%; background: rgba(0,0,0,0); position: fixed; transition: 0.5s;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-2 col-4 px-4 logs logs3 pt-3">
                <a href="/" style="">
                    <img class="logo main-logo img-fluid" src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-10 col-8 collapse navbar-collapse"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav">
                        <li class="nav-item p-3">
                            <a href="/#plan" class="TTLight menu-point" style="font-size: 14px; color:#fefefe;">Смотреть генеральный план</a>
                        </li>
                        @if($content->tel1)
                            <li class="nav-item p-3">
                                <a href="tel: {{ $content->tel1 }}" class="TTLight menu-point" style="font-size: 14px; color:#fefefe;">{{ $content->tel1 }}</a>
                            </li>
                        @endif
                        @if($content->tel2)
                            <li class="nav-item p-3">
                                <a href="tel: {{ $content->tel2 }}" class="TTLight menu-point" style="font-size: 14px; color:#fefefe;">{{ $content->tel2 }}</a>
                            </li>
                        @endif
                        @if($content->tel3)
                            <li class="nav-item p-3">
                                <a href="tel: {{ $content->tel3 }}" class="TTLight menu-point" style="font-size: 14px; color:#fefefe;">{{ $content->tel3 }}</a>
                            </li>
                        @endif
                        <li class="nav-item px-3 py-1 mx-5 button noselect menu-point pointer" data-toggle="modal" data-target="#callModal">
                            <a href="#" class="TTlight menu-point" style="color:#fefefe; text-decoration: none;font-size: 12px; text-transform: uppercase;">Заказать звонок</a>
                        </li>
                        <li class="nav-item p-3">
                            <img class="w-75 menu-burger" src="{{ asset('images/hamburger.svg') }}" alt="">
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-xl py-0 w-100 pr-0 bg-white d-lg-none d-block" style="z-index: 999; background: rgba(0,0,0,0); position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-4 text-center col-4 px-4 py-2">
                <a href="/">
                    <img class="w-100" src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <div class="hamburger hamburger--collapse" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse col-md-11 col-8 pt-md-4 pt-0 pb-md-4 pb-0"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav">
                        <li class="nav-item p-2">
                            <a href="/" class="text-dark text-fut-bold" style="text-decoration: none;">Главная</a>
                        </li>
                        <li class="nav-item p-2 ">
                            <a href="/about_us" class="text-dark text-fut-bold" style="text-decoration: none;">О нас</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="/gallery" class="text-dark text-fut-bold" style="text-decoration: none;">Галерея</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="/news" class="text-dark text-fut-bold" style="text-decoration: none;">Новости</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<div id="mySidenav" class="sidenav d-md-block d-none">
    <a class="sf-medium pl-5" href="/">  Главная</a>
    <a class="sf-medium pl-5" href="/about_us"> О нас</a>
    <a class="sf-medium pl-5" href="/gallery"> Галерея</a>
    <a class="sf-medium pl-5" href="/news">Новости</a>
    @if($content->tel1)
        <a class="sf-medium pl-5" href="tel:{{ $content->tel1 }}">{{ $content->tel1 }}</a>
    @endif
    @if($content->tel2)
        <a class="sf-medium pl-5" href="tel:{{ $content->tel2 }}">{{ $content->tel2 }}</a>
    @endif
    @if($content->tel3)
        <a class="sf-medium pl-5" href="tel:{{ $content->tel3 }}">{{ $content->tel3 }}</a>
    @endif
    @if($content->email)
        <a class="sf-medium pl-5" href="mailto:{{ $content->email }}">{{ $content->email }}</a>
    @endif
    <div class="container-fluid pt-5 pl-4 ml-2">
        <div class="row">
            @if($content->instagram)
                <div class="col-3 p-0">
                    <a href="{{ $content->instagram }}" class="ics" target="_blank">
                        <p>
                            <i class="fab fa-instagram fa-sm"></i>
                        </p>
                    </a>
                </div>
            @endif
            @if($content->facebook)
                <div class="col-3 p-0">
                    <a href="{{ $content->facebook }}" class="ics" target="_blank">
                        <p>
                            <i class="fab fa-facebook-f fa-sm"></i>
                        </p>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.hamburger').click(e => {
            let status = $('.hamburger').attr('aria-expanded');
            if (status != 'true') {
                $('.hamburger').addClass('is-active');
            }
            if (status != 'false') {
                $('.hamburger').removeClass('is-active');
            }
        });
    </script>
@endpush


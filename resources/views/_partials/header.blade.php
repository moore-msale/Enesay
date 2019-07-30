
<nav class="navbar navbar-expand-xl py-0 w-100 pr-0 d-lg-block d-none" style="z-index: 999; top: 4%; background: rgba(0,0,0,0); position: absolute;">
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
                            <a href="tel: +996312880575" class="TTLight menu-point" style="text-decoration: underline;font-size: 14px; color:#fefefe;">+996 312 880 575</a>
                        </li>
                        <li class="nav-item p-3">
                            <a href="tel: +996552880575" class="TTLight menu-point" style="text-decoration: underline;font-size: 14px; color:#fefefe;">+996 552 880 575</a>
                        </li>
                        <li class="nav-item px-3 py-1 mx-5 button" data-toggle="modal" data-target="#callModal">
                            <a class="TTlight menu-point" style="color:#fefefe; text-decoration: none;font-size: 12px; text-transform: uppercase;">Заказать звонок</a>
                        </li>
                        <li class="nav-item p-3">
                            <img class="w-75" src="{{ asset('images/hamburger.png') }}" onclick="openNav()" alt="">
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
                    <img class="w-50" src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
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
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="sf-medium pl-5" href="/">  Главная</a>
    <a class="sf-medium pl-5" href="/about_us"> О нас</a>
    <a class="sf-medium pl-5" href="/gallery"> Галерея</a>
    <a class="sf-medium pl-5" href="/news">Новости</a>
    <div class="container-fluid pt-5 pl-4 ml-2">
        <div class="row">
            <div class="col-3 p-0">
                <a href="#" class="ics" target="_blank">
                    <p>
                        <i class="fab fa-instagram fa-sm"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>



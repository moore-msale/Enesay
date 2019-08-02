<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Эне-Сай - Современный жилой комплекс Эне-Сай Luxury Village</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/png">

    <!-- Scripts -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


    <!-- Styles -->

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    @stack('styles')
</head>
<body>
@include('_partials.header')
<div id="app">
    <main>
        @yield('content')
    </main>
</div>
@include('_partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/jquery.scrollify.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#pick").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 700);
        });
    });
</script>
<script>
    AOS.init();
</script>
@stack('scripts')
<script>
    var owl = $('.owl-one');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        nav: true,
        onInitialized: function(e) {
            $('.counter').text('1 из ' + this.items().length)
            console.log();
        },
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    owl.on('changed.owl.carousel', function(e) {
        $('.counter').text(++e.page.index + ' из ' + e.item.count)
    });
</script>
<script>
    var owl = $('.owl-two');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= 50) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.menu-point').addClass('menu-point-black');
                $('.menu-burger').addClass('invert-100');
            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.menu-point').removeClass('menu-point-black');
                $('.menu-burger').removeClass('invert-100');
            }

        });
    });
</script>
<script>
    $('#ajax-message').click(e => {
        e.preventDefault();
        let name = $('#form-name');
        let email = $('#form-email');
        let phone = $('#form-phone');
        let message = $('#form-message');

        $.ajax({
            url: '{{ route('mail') }}',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name.val(),
                "phone": phone.val(),
                "email": email.val(),
                "message": message.val()
            },
            success: data => {
                $('#form-name').val('');
                $('#form-phone').val('');
                $('#form-email').val('');
                $('#form-message').val('');
                $(".send-success-mail").removeClass('d-none');
            },
            error: () => {
            }
        });
    })
</script>
<script>
    $('#ajax-message2').click(e => {
        e.preventDefault();
        let name = $('#form-name2');
        let email = $('#form-email2');
        let phone = $('#form-phone2');
        let message = $('#form-message2');

        $.ajax({
            url: '{{ route('mail') }}',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name.val(),
                "phone": phone.val(),
                "email": email.val(),
                "message": message.val()
            },
            success: data => {
                $('#form-name2').val('');
                $('#form-phone2').val('');
                $('#form-email2').val('');
                $('#form-message2').val('');
                $(".send-success-mail2").removeClass('d-none');
            },
            error: () => {
            }
        });
    })
</script>
<script>
    $('.menu-burger').mouseenter( function () {
        document.getElementById("mySidenav").style.right = "0px";
    });

    $('.sidenav').mouseleave( function () {
        document.getElementById("mySidenav").style.right = "-300px";
    });
</script>
</body>
</html>

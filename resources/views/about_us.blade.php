@extends('layouts.app')
@push('styles')
@endpush
@section('content')

    <img class="w-100 d-lg-block d-none" data-aos="flip-up" style="position: absolute; z-index: -1;" src="{{ asset('images/about_us.png') }}" alt="">

    <div class="container" style="padding-top:18%;">
        <div class="row justify-content-center">
            <h1 class="TTLight text-center text-main" style="font-size: 300%; line-height: 140%; text-transform: uppercase; color: white;">
                <p class="TTBold" data-aos="flip-up">Современный жилой комплекс</p>
                эне-сай luxury village
            </h1>

            <div class="TTLight bg-white p-5 mt-lg-5 mt-0 mb-lg-0 mb-5" style="font-size: 112%; line-height: 140%; color: #000000; box-shadow: 0px -33px 50px rgba(0, 0, 0, 0.25);">
                <p data-aos="flip-up">
                    Эне - Сай Luxury Village – современный, элитный жилой комплекс, оснащенный всем необходимым для комфортного время провождения. Неповторимая аура и уникальная концепция формата и архитектуры доставляет исключительное удовольствие наслаждаться моментом.
                </p>
                <p data-aos="flip-up">
                    Жилой комплекс спроектирован в современном архитектурном стиле, с использованием новых высококачественных строительных материалов: древесно-полимерный композит, спайдерное остекленение, которое создает идеально ровную зеркальную поверхность, что отвечает всем требованиям новейшего формата в коммерческой деятельности.
                </p>
                <p data-aos="flip-up">
                    Жилой комплекс Эне-Сай Luxury Village действительно является современным поселком в европейском стиле, что соответствует слову Luxury.
                </p>
            </div>

            <img class="w-75" data-aos="flip-up" style="transform: translateY(-7%)" src="{{ asset('images/about_us_1.png') }}" alt="">

            <div class="TTLight p-5 " style="font-size: 112%; line-height: 140%; color: #000000;">
                <p data-aos="flip-up">
                    На территории каждый сможет удобно припарковаться, с удовольствием заняться шопингом на улице бутиков, воспользоваться туслугами медицинского центра, приобрести дорогие ювелирные украшения, вкусить изысканные блюда в различных ресторанах, сходить на концерты известных личностей, насладиться искусством оперы и балета, участвовать в проведении показа мод, так же имеется детский центр «Развивайка».


                </p>
                <p data-aos="flip-up">
                    Эне-Сай Luxury Village - название, которое говорит само за себя. Высокий уровень сервиса,  в сочетании с современным дизайном, уникальной архитектурой и полноценной инфраструктурой позволяет в полной мере ощутить комфорт пребывания.

                </p>
            </div>
        </div>


    </div>
@endsection
<div class="container-fluid px-md-5 pt-md-5 pb-md-2 p-5 example-classname" id="7"
     style="background-image: url({{ asset('images/footer.png') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="row">
        <div class="col-lg-8 col-12">
            <h2 class="TTBold text-white pb-4" data-aos="fade-right" style="font-size: 2em; text-transform: uppercase;">
                Контакты</h2>
            <div class="contacts pt-4 pb-3 d-lg-flex justify-content-between d-none">
                <div class="col-auto">
                    <ul class="nav flex-column">
                        @if($content->tel1)
                            <li class="nav-item mb-3">
                                <a href="tel: {{ $content->tel1 }}" class="text-white TTMedium pr-0"
                                   data-aos="fade-right"
                                   style="font-size: 14px;">{{ $content->tel1 }}</a>
                            </li>
                        @endif
                        @if($content->tel2)
                            <li class="nav-item mb-3">
                                <a href="tel: {{ $content->tel2 }}" class="text-white TTMedium pr-0"
                                   data-aos="fade-right"
                                   style="font-size: 14px;">{{ $content->tel2 }}</a>
                            </li>
                        @endif
                        @if($content->tel3)
                            <li class="nav-item mb-3">
                                <a href="tel: {{ $content->tel3 }}" class="text-white TTMedium pr-0"
                                   data-aos="fade-right"
                                   style="font-size: 14px;">{{ $content->tel3 }}</a>
                            </li>
                        @endif
                            <li class="nav-item mb-3">
                                <a class="text-white TTMedium px-0" data-aos="fade-right"
                                   style="font-size: 14px;">Медерова, 50 - офис продаж</a>
                            </li>
                        @if($content->email)
                            <li class="nav-item mb-3">
                                <a href="mailto: {{ $content->email }}" class="text-white TTMedium pr-0"
                                   data-aos="fade-right"
                                   style="font-size: 14px;">{{ $content->email }}</a>
                            </li>
                        @endif
                        @if($content->address)
                            <li class="nav-item mb-3">
                                <a class="text-white TTMedium px-0" data-aos="fade-right"
                                   style="font-size: 14px;">{{ $content->address }}</a>
                            </li>
                        @endif
                        @if($content->instagram)
                            <li class="nav-item mb-3">
                                <a href="{{ $content->instagram }}" class="text-white TTMedium pr-0 mt-3"
                                   data-aos="fade-right"
                                   style="font-size: 16px;"><i class="fab fa-instagram fa-lg mr-1"></i>Instagram</a>
                            </li>
                        @endif
                        @if($content->facebook)
                            <li class="nav-item mb-3">
                                <a href="{{ $content->facebook }}" class="text-white TTMedium pr-0 mt-3"
                                   data-aos="fade-right"
                                   style="font-size: 16px;"><i class="fab fa-facebook-f fa-lg mr-1"></i>Facebook</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="map" data-aos="fade-right">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.542965254937!2d74.6194583151184!3d42.81914321397856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb5dc1a719029%3A0x1f743b3243454c9f!2zNyDRg9C7LiDQkNCw0LvRiyDQotC-0LrQvtC80LHQsNC10LLQsCwg0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1564117538498!5m2!1sru!2skg"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="contacts pt-4 pb-3 d-lg-none d-block pb-5"
                 style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
                <div class="row">
                    <div class="col-md-4 col-6 px-md-2 px-0">
                        @if($content->tel1)
                            <a href="{{ $content->tel1 }}" data-aos="fade-right" class="text-white TTLight pb-3"
                               style="font-size: 16px; text-decoration: underline;"><p>{{ $content->tel1 }}</p></a>
                        @endif
                        @if($content->instagram)
                            <a href="tel:{{ $content->instagram }}" class="text-white TTLight" data-aos="fade-right"
                               style="font-size: 16px; text-decoration: underline;">
                                <i class="fab fa-instagram"></i>Instagram</a>
                        @endif
                    </div>
                    <div class="col-md-4 col-6 px-md-2 px-0">
                        @if($content->tel2)
                            <a href="tel:{{ $content->tel2 }}" data-aos="fade-right" class="text-white TTLight pb-3"
                               style="font-size: 16px; text-decoration: underline;"><p>{{ $content->tel2 }}</p></a>
                        @endif
                        @if($content->address)
                            <a class="text-white TTLight" data-aos="fade-right"
                               style="font-size: 16px;">{{ $content->address }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="map d-block d-lg-none" data-aos="fade-right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.542965254937!2d74.6194583151184!3d42.81914321397856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb5dc1a719029%3A0x1f743b3243454c9f!2zNyDRg9C7LiDQkNCw0LvRiyDQotC-0LrQvtC80LHQsNC10LLQsCwg0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1564117538498!5m2!1sru!2skg"
                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-4">
            <h2 class="TTBold text-white pb-4 pt-lg-0 pt-3" data-aos="fade-right"
                style="font-size: 2em; text-transform: uppercase;">Напишите нам</h2>
            <div class="form pt-4 pb-3" style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
                <p class="text-white TTMedium" data-aos="fade-right" style="font-size: 18px;">Свяжитесь с нами и мы
                    ответим на все ваши вопросы</p>
                <div class="send-success-mail p-4 d-none">
                    <i class="fas fa-check-circle" style="color:#00d920;"></i><span class="pl-2 text-fut-bold"
                                                                                    style="color:#fff;">Заявка успешно отправлена!</span>
                </div>
                <form data-aos="fade-right">
                    <div class="form-group">
                        <input class="w-100 mb-2 p-2" name="name" type="text" id="form-name"
                               placeholder="Ваше имя*" required>
                    </div>
                    <div class="form-group">
                        <input class="w-100 mb-2 p-2" name="phone" type="tel" id="form-phone"
                               placeholder="Ваш номер телефона*" required>
                    </div>
                    <div class="form-group">
                        <input class="w-100 mb-2 p-2" name="email" type="email" id="form-email"
                               placeholder="Введите E-mail*" required>
                    </div>
                    <div class="form-group">
                            <textarea class="w-100 mb-2 p-2" name="message" type="message" id="form-message"
                                      placeholder="Сообщение*" required></textarea>
                    </div>
                    <div class="form-group">
                        <a id="ajax-message" class="btn text-white" href="#">Отправить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-between align-content-center pt-3 mt-4 ml-1 mr-1 pb-md-0 pb-0" id="copyright"
         style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
        <img class="img-fluid d-lg-block d-md-none d-none" style="height:100%; width: 10%;"
             src="{{asset('images/logo.png')}}" alt="">
        <img class="img-fluid d-lg-none d-md-none d-block" style="height:100%; width: 40%;"
             src="{{asset('images/logo.png')}}" alt="">
        <img class="img-fluid d-lg-none d-md-block d-none" style="height:100%; width: 25%;"
             src="{{asset('images/logo.png')}}" alt="">
        <p class="TTLight" style="font-size: 16px;color: #959595;">© copyright 2019</p>
    </div>
</div>


<div class="modal fade" id="callModal" tabindex="15" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content feedback-content" style="background: #fefefe;">
            <div>
                <div class="modal-body p-5 text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="mb-5" style="font-size: 25px; line-height: 120%; color: #000000;">
                        Оставьте нам свою заявку
                    </h2>
                    <div class="send-success-mail2 p-4 d-none">
                        <i class="fas fa-check-circle" style="color:#00d920;"></i><span class="pl-2 text-fut-bold"
                                                                                        style="color:#000000;">Заявка успешно отправлена!</span>
                    </div>
                    <div class="send-error-mail2 p-4 d-none">
                        <i class="fas fa-exclamation-circle text-fut-bold text-white" style="color:#00d920;"></i><span
                            class="pl-2" style="color:#000000;">Отзыв не был отправлен!</span>
                    </div>
                    <form id="callForm">
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="name" type="text" id="form-name2"
                                   placeholder="Ваше имя*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="phone" type="tel" id="form-phone2"
                                   placeholder="Ваш номер телефона*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="email" type="email" id="form-email2"
                                   placeholder="Введите E-mail*" required>
                        </div>
                        <div class="form-group">
                            <textarea class="w-100 mb-2 p-2" name="message" type="message" id="form-message2"
                                      placeholder="Сообщение*" required></textarea>
                        </div>
                        <div class="form-group">
                            <a id="ajax-message2" class="btn" href="#">Отправить</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

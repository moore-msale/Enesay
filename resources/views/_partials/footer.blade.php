<div class="container-fluid pt-5 pb-4 pl-5 pr-5 example-classname" id="footer" style="background-image: url({{ asset('images/footer.png') }});">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="TTBold text-white pb-4" style="font-size: 2em; text-transform: uppercase;">Контакты</h2>
            <div class="contacts pt-4 pb-3 d-flex justify-content-between" style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
                <a href="#" class="text-white TTMedium" style="font-size: 16px; text-decoration: underline;">+996 312 880 575</a>
                <a href="#" class="text-white TTMedium" style="font-size: 16px; text-decoration: underline;">+996 552 880 575</a>
                <p class="text-white TTMedium" style="font-size: 16px;">7/6, Аалы Токомбаев</p>
                <a href="#" class="text-white TTMedium" style="font-size: 16px; text-decoration: underline;"><img class="mr-2" src="{{asset('images/insta.svg')}}" alt="">Instagram</a>

            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.542965254937!2d74.6194583151184!3d42.81914321397856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb5dc1a719029%3A0x1f743b3243454c9f!2zNyDRg9C7LiDQkNCw0LvRiyDQotC-0LrQvtC80LHQsNC10LLQsCwg0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1564117538498!5m2!1sru!2skg" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 padleft">
            <h2 class="TTBold text-white pb-4" style="font-size: 2em; text-transform: uppercase;">Напишите  нам</h2>
            <div class="form pt-4 pb-3" style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
                <p class="text-white TTMedium" style="font-size: 18px;">Свяжитесь с нами и мы ответим на все ваши вопросы</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ваш e-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ваш телефон">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit"><a href="#">Отправить</a></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-between align-items-end pt-3 mt-4 ml-1 mr-1" id="copyright" style="border-top: 1px solid rgba(255, 255, 255, 0.3);">
        <img class="img-fluid" style="height: 100%; width: 5%;" src="{{asset('images/logo.png')}}" alt="">
        <p class="TTLight" style="font-size: 16px;color: #959595;">© copyright 2019</p>
    </div>
</div>
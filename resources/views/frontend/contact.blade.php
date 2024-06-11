<section id="contact" class="tm-section-pad-top tm-parallax-2">

    <div class="container tm-container-contact">

        <div class="row">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4"><strong>Контакты</strong></h2>
                <p class="mb-5">
Напишите нам письмо
<br>Примечание: *Я согласен с тем, что мои данные из контактной формы будут собраны и обработаны, чтобы ответить на мой запрос.
                </p><br>
            </div>
            <div class="col-sm-12 col-md-6">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact-submit') }}" method="post">
                    @csrf
                    <input id="name" name="name" type="text" placeholder="Ваше имя" class="tm-input" required />
                    <input id="email" name="email" type="email" placeholder="Ваш Email" class="tm-input" required />
                    <textarea id="message" name="message" rows="8" placeholder="Сообщение" class="tm-input" required></textarea>
                    <button type="submit" class="btn tm-btn-submit">Отправить</button>
                </form>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="contact-item">
                    <a rel="nofollow" href="https://yandex.ru/maps/org/kompetent_it/1240640431/?indoorLevel=1&ll=73.378165%2C54.989430&z=17" class="item-link">
                        <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                        <span class="mb-0">OOO «Компетент ИТ»
<br>ул. Краснофлотская, д. 24, 644043 г. Омск, Россия</span>
                    </a>
                </div>

                <div class="contact-item">
                    <a rel="nofollow" href="mailto:info@competentit.com" class="item-link">
                        <i class="far fa-2x fa-envelope mr-4"></i>
                        <span class="mb-0">info@competentit.com</span>
                    </a>
                </div>

                <div class="contact-item">
                    <a rel="nofollow" href="tel:79043260644" class="item-link">
                        <i class="fas fa-2x fa-phone-square mr-4"></i>
                        <span class="mb-0">+7 904 3260644</span>
                    </a>
                </div>

                <div class="contact-item">&nbsp;</div>

            </div>


        </div><!-- row ending -->

    </div>

    <footer class="text-center small tm-footer">
        <p class="mb-0">© 2008 - 2024 OOO «Компетент ИТ». Все права защищены.</p>
    </footer>

</section>

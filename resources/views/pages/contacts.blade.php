@extends('layouts.main')

@section('content')

    <div class="navigation-title">
        Наши контакты
    </div>
    
    <div class="contacts-section">
        <div class="wrap">
            <div class="contacts-form">
                <form method="post" action="">
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="asan.kz">
                    <input type="hidden" name="admin_email" value="tester@ginnova.kz">
                    <input type="hidden" name="form_subject" value="Заявка">
                    <!-- END Hidden Required Fields -->

                    <div class="contact-row"><h3>Будем рады ответить на все ваши вопросы</h3></div>

                    <div class="contact-row"><input type="text" name="Имя" placeholder="Имя" required></div>
                    <div class="contact-row"><input type="tel" id="client-tel-for-consult" name="Телефон" placeholder="Телефон" required></div>
                    <div class="contact-row"><textarea cols="30" rows="10" name="Сообщение" placeholder="Сообщение"></textarea></div>

                    <div class="contact-row"><button class="btn-contacts">Отправить</button></div>

                </form>
            </div>

            <div class="contacts-rows">

                <div class="contacts-row">
                    <img src="/assets/img/icon-addr.png" alt="">
                    <p>Мәнгілік Ел проспект, 50</p>
                </div>
                <div class="contacts-row">
                    <img src="/assets/img/icon-phone.png" alt="">
                    <p>+7 (777) 474 04 14</p>
                </div>
                <div class="contacts-row">
                    <img src="/assets/img/icon-mail.png" alt="">
                    <p>info@purpur.kz</p>
                </div>
                <div class="contacts-row">
                    <img src="/assets/img/icon-inst.png" alt="">
                    <p>@purpur_atelier</p>
                </div>

            </div>
        </div>
    </div>
    
    <div id="map" style="float:left; width: 100%; height:500px; position:relative; z-index:1;"></div>
            

@endsection
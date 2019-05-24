@include('layouts.header')

    <div class="wrapper">
        <div class="main-block">
        @include('layouts.left-menu')
            <div class="block text">
                <div class="top-nav"><a href="/">Главная</a> > <a href="{!! url('/info'); !!}">Контактная информация</a></div>
                <div class="block-body">
                    <p class="title">Контактная информация</p>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fas fa-phone-square"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">044 000-00-00</a>
                            <a href="#">095 000-00-00</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">mail@mail.com</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fab fa-skype"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">skype</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fab fa-viber"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">095 000-00-00</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fab fa-telegram"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">telegram</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-tel-ico">
                            <i class="fab fa-whatsapp-square"></i>
                        </div>
                        <div class="info-tels">
                            <a href="#">whats-app</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.popups')

@include('layouts.footer')
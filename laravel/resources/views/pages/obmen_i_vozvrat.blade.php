@include('layouts.header')

    <div class="wrapper">
        <div class="main-block">
        @include('layouts.left-menu')
            <div class="block text">
                <div class="top-nav"><a href="/">Главная</a> > <a href="{!! url('/obmen_i_vozvrat'); !!}">Обмен и возврат</a></div>
                <div class="block-body">
                    <p class="title">Обмен и возврат</p>
                    <p class="main-text">Гарантия от производителя 12 месяцев.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.popups')

@include('layouts.footer')
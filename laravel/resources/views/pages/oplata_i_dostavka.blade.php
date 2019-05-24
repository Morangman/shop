@include('layouts.header')

<div class="wrapper">
    <div class="main-block">
    @include('layouts.left-menu')
        <div class="block text">
            <div class="top-nav"><a href="/">Главная</a> > <a href="{!! url('/oplata_i_dostavka'); !!}">Оплата и доставка</a></div>
            <div class="block-body">
                <p class="title">Оплата и доставка</p>
                <p class="main-text">- Наличными при получении.</p>
                <p class="main-text">- Кредитной картой в privat24, LiqPay.</p>
                <p class="main-text">- Через кассу или терминал самообслуживания Приватбанк.</p>
            </div>
        </div>
    </div>
</div>

@include('layouts.popups')

@include('layouts.footer')

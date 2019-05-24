@include('layouts.header')

<div class="wrapper">
    <div class="main-block">
        @include('layouts.left-menu')
        <div class="block text">
            <div class="top-nav"><a href="/">Главная</a> > <a href="{!! url('/about'); !!}">О нас</a></div>
            <div class="block-body">
                <p class="title">О нас</p>
                <p class="main-text">Это демонстрационный магазин, созданный на платформе Хорошоп.</p>
            </div>
        </div>
    </div>
</div>

@include('layouts.popups')

@include('layouts.footer')
<!DOCTYPE html>
<html class="device-pc" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Дизайн для интернет магазина</title>
    <meta name="keywords" content="шаблоны для интернет магазина">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hc-offcanvas-nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    
    <script src="{{asset('js/app.js')}}"></script>
</head>

<body>

<header>
    <div class="burger-menu">
        <nav id="main-nav">

            <ul class="first-nav">
                <li class="store">
                    <a href="#"><i class="fas fa-store"></i>  Каталог</a>
                    <ul class="second-nav">
                        <li class="devices">
                            <a>Парфюмерия</a>
                            <ul>
                                <li class="mobile">
                                    <a href="#">Для женщин</a>
                                    <a href="#">Для мужчин</a>
                                </li>
                            </ul>
                        </li>
                        <li class="magazines">
                            <a href="#">Макияж</a>
                            <ul>
                                <li><a href="#">Крем для лица</a></li>
                                <li><a href="#">Губная помада</a></li>
                                <li><a href="#">Тушь для бровей</a></li>
                            </ul>
                        </li>
                        <li class="magazines">
                            <a href="#">Арома</a>
                            <ul>
                                <li><a href="#">Ароматизаторы</a></li>
                                <li><a href="#">Эфирные масла</a></li>
                                <li><a href="#">Аромасвечи</a></li>
                            </ul>
                        </li>
                        <li class="magazines">
                            <a href="#">Аксессуары</a>
                            <ul>
                                <li><a href="#">Сумки</a></li>
                                <li><a href="#">Кисти для макияжа</a></li>
                            </ul>
                        </li>
                        <li class="collections"><a href="#">Акции</a></li>
                    </ul>
                </li>
                <li class="collections"><a href="./about.php">О нас</a></li>
                <li class="collections"><a href="./oplata_i_dostavka.php">Оплата и доставка</a></li>
                <li class="collections"><a href="./obmen_i_vozvrat.php">Обмен и возврта</a></li>
                <li class="collections"><a href="./info.php">Контактная информация</a></li>
                <li class="collections"><a href="./blog.php">Блог</a></li>
                <li class="collections"><a href="#">Просмотренные товары</a></li>
                <li class="magazines">
                    <a href="#"><i class="fas fa-sign-in-alt"></i>  Вход для клиентов</a>
                    <ul>
                        <li class="mobile-login-header">
                            <a href="#" id="mobile-login">Вход</a>
                        </li>

                        <li>
                            <form id="mobile-login">
                                <input placeholder="Эл. почта" type="email" name="user[email]" tabindex="1" class="input">
                                <input placeholder="Пароль" type="password" name="user[pass]" tabindex="2" class="input">
                                <button class="btn-mobile-login" type="submit">Войти</button>
                            </form>

                            <div class="wrapper">
                                <p class="mobile-menu-question">Забыли пароль?</p>
                                <button rel="nofollow" class="btn btn--block btn--fb btn--icon-left"><i class="btn__icon">
                                        <i class="fab fa-facebook-square"></i>
                                        Войти через Facebook
                                </button>
                            </div>
                        </li>
                        <li><a href="#">Эфирные масла</a></li>
                        <li><a href="#">Аромасвечи</a></li>
                    </ul>
                </li>
            </ul>

        </nav>
    </div>
    <div class="header-wrapper">
        <div class="header-layout">
            <div class="header-column-left">
                <div class="search">
                    <form method="get" action="">
                        <button type="submit" class="search__button" disabled=""><i class="fas fa-search"></i></button>
                        <input class="search__input" type="text" name="q" placeholder="поиск товаров"
                               autocomplete="off" value=""><div class="form-loader" style="display: none"></div>
                    </form>
                </div>
            </div>
            <div class="header-column-center">
                <div class="header__section">
                    <div class="header__logo header__logo--fixed">
                        <a class="header__logo-link" href="/">
                            <img alt="DemoStore — демонстрационный интернет-магазин "
                                 class="header-logo-img" width="200" height="48" src="./img/11801796414020.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-column-right">
                <div class="phones-header">
                    <div class="phone-info">
                        <div class="phone">
                            <a href="#" style="color: #d2b9a6;">
                                <i class="fas fa-mobile-alt"></i>
                                099 311-69-06
                            </a>
                        </div>
                        <div class="callback">
                            <a id="call-me" class="phones__callback-link" href="#">Перезвонить вам?</a>
                        </div>
                    </div>

                </div>
                
                @if (Auth::check())
                <div class="auth-header">
                    <ul>
                        <li class="user_name">
                            <p> Привет, {{ Auth::user()->name }}  <a href="javascript:"><i class="fas fa-user-circle"></i></a> </p>
                            <div class="user_popup">
                                <div class="dropdown-content-wrapper">
                                    <a id="logout" href="javascript:">Выйти</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @else
                <div class="userbar">
                    <a class="userbar__button __active" style="color: #d2b9a6;" href="#j-popup-tab-auth" data-modal="#sign-in" title="Вход">
                        <i class="fas fa-user-circle"></i>
                    </a>
                </div>
                @endif
                
                <div class="basket">
                    <a href="#" style="color: #d2b9a6;"><i class="fas fa-shopping-basket"></i></a>
                    <div id="basket__items" class="basket__items">0</div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="header-wrapper">
            <div class="header-layout">
                <div class="header-column-center">
                    <div class="products-menu">
                        <ul class="products-menu__container">
                            <li class="products-menu__item">
                                <a href="#" class="products-menu__title-link">Парфюмерия</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-content-wrapper">
                                        <a href="#">Для женщин</a>
                                        <a href="#">Для мужчин</a>
                                    </div>
                                </div>
                            </li>
                            <li class="products-menu__item">
                                <a href="#" class="products-menu__title-link">Макияж</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-content-wrapper">
                                        <a href="#">Крем для лица</a>
                                        <a href="#">Губная помада</a>
                                        <a href="#">Тушь для бровей</a>
                                    </div>
                                </div>
                            </li>
                            <li class="products-menu__item">
                                <a href="#" class="products-menu__title-link">Арома</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-content-wrapper">
                                        <a href="#">Ароматизаторы</a>
                                        <a href="#">Эфирные масла</a>
                                        <a href="#">Аромасвечи</a>
                                    </div>
                                </div>
                            </li>
                            <li class="products-menu__item">
                                <a href="#" class="products-menu__title-link">Аксессуары</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-content-wrapper">
                                        <a href="#">Сумки и косметички</a>
                                        <a href="#">Кисти для макияжа</a>
                                    </div>
                                </div>
                            </li>
                            <li class="products-menu__item">
                                <a href="#" class="products-menu__title-link">Акции</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
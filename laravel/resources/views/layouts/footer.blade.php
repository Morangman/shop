<footer id="bottom-footer" class="footer">
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="footer-left">
                <div class="footer-logo">
                    <img alt="DemoStore — демонстрационный интернет-магазин " width="200" height="46" src="./img/31423077736718.jpg">
                </div>
                <div class="footer-copyright">© 2019<br><br><br>
                    Демонстрационный интернет-магазин </div>
                <div class="mobile-version-contacts">
                    <div class="footer-tels-i" itemprop="telephone"><a href="tel:+380440000000" class="phones__link j-phone-item" data-index="1">044 000-00-00</a></div>
                    <div class="footer-tels-i" itemprop="telephone"><a href="tel:+380950000000" class="phones__link j-phone-item" data-index="1">095 000-00-00</a></div>
                </div>
                <div class="footer-payments">
                    <p>Принимаем к оплате</p>
                    <a href="https://www.liqpay.ua/en" target="_blank" rel="nofollow">
                        <img alt="Принимаем оплату Visa/Mastercard через Liqpay" class="liqpay_ico" width="88" height="20" src="./img/34905029336611.jpg">
                    </a>
                    <a href="https://privat24.ua" target="_blank" rel="nofollow">
                        <img alt="Принимаем оплату через Privat24" class="privat_ico" width="18" height="18" src="./img/67169594599140.jpg">
                    </a>
                </div>
                <div class="mobile-version">
                    <a href="https://design101.horoshop.ua/?v=mobile" class="a mobile-version__link" rel="nofollow">
                        <i class="fas fa-mobile-alt"></i>
                        <span class="mobile-version__txt">Мобильная версия</span>
                    </a>
                </div>
            </div>
            <div class="footer-center">
                <div class="footer-catalog">
                    <div class="footer-h">Каталог</div>
                    <ul class="footer-links">
                        <li class="">
                            <a href="/parfum/">Парфюмерия </a>
                        </li>
                        <li class="">
                            <a href="/ipad/">Макияж</a>
                        </li>
                        <li class="">
                            <a href="/aroma/">Арома</a></li>
                        <li class="">
                            <a href="/podarki/">Аксессуары</a>
                        </li>
                        <li class="">
                            <a href="/mac/">Акции</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu">
                    <div class="footer-h">Клиентам</div>
                    <ul class="footer-links">
                        <li class="">
                            <a href="#" id="signin">Вход в личный кабинет</a>
                        </li>
                        <li class="">
                            <a href="/catalog/">Каталог</a>
                        </li>
                        <li class="">
                            <a href="{!! url('/about'); !!}">О нас</a>
                        </li>
                        <li class="">
                            <a href="{!! url('/oplata_i_dostavka'); !!}">Оплата и доставка</a>
                        </li>
                        <li class="">
                            <a href="{!! url('/obmen_i_vozvrat'); !!}">Обмен и возврат</a>
                        </li>
                        <li class="">
                            <a href="{!! url('/info'); !!}">Контактная информация</a>
                        </li>
                        <li class="">
                            <a href="{!! url('/blog'); !!}">Блог</a>
                        </li>
                    </ul>
                    <div class="footer-social">
                        <p>Мы в соцсетях</p>
                        <a class="footer-social-icon" rel="nofollow" target="_blank" title="Мы Вконтакте!" href="https://vk.com/"><i class="fab fa-vk"></i></a>
                        <a class="footer-social-icon" rel="nofollow" target="_blank" title="Мы в Facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                        <a class="footer-social-icon" rel="nofollow" target="_blank" title="Мы в твиттере!" href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a>
                        <a class="footer-social-icon" rel="nofollow" target="_blank" title="Мы в инстаграмме" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>


            <div class="footer-right">
                <div class="footer-contacts" itemscope="" itemtype="https://schema.org/LocalBusiness">
                    <div class="footer-h">Контактная информация</div>
                    <div class="footer-tels">
                        <i class="fas fa-phone-square"></i>
                        <div class="footer-tels-i" itemprop="telephone">044 000-00-00</div>
                        <div class="footer-tels-i" itemprop="telephone">095 000-00-00</div>
                        <a id="call-me2" class="footer-link __small" href="#" >Перезвонить вам?</a>
                    </div>
                    <div class="footer-addr">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="footer-addr-i" itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">Запорожье, ул. Центральная</div>
                        <a class="footer-a __small" href="/contacts/">Карта проезда</a>
                    </div>

                    <div class="footer-msg">
                        <i class="fas fa-address-book"></i>
                        <div class="footer-msg-i" itemprop="email">Эл. почта: <a href="mailto:mail@mail.com">mail@mail.com</a></div>
                        <div class="footer-msg-i">Skype: <a href="skype:skype?call">skype</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/inputmask/inputmask.js') }}"></script>
<script src="{{ URL::asset('js/inputmask/inputmask.extensions.js') }}"></script>
<script src="{{ URL::asset('js/inputmask/inputmask.numeric.extensions.js') }}"></script>
<script src="{{ URL::asset('js/inputmask/inputmask.date.extensions.js') }}"></script>
<script src="{{ URL::asset('js/inputmask/jquery.inputmask.js') }}"></script>
<script src="{{ URL::asset('js/hc-offcanvas-nav.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/slick.min.js') }}"></script>

<script>
window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
</script>

<script>
    $("#call-me").click(function(){
        $("#modal-overlay").show().addClass( "open" );
        $(".popup-block").show();
        $('body').css('overflow','hidden');
    });

    $("#call-me2").click(function(){
        $("#modal-overlay").show().addClass( "open" );
        $(".popup-block").show();
        $('body').css('overflow','hidden');
    });

    $("#close").click(function(){
        $("#modal-overlay").hide().removeClass( "open" );
        $('body').css('overflow','scroll');
    });

    $("#close2").click(function(){
        $("#modal-overlay-login").hide().removeClass( "open" );
        $('body').css('overflow','scroll');
    });

    $('.userbar__button').click(function () {
        $("#modal-overlay-login").show().addClass( "open" );
        $(".popup-block").show();
        $('body').css('overflow','hidden');
    });

    $('#signin').click(function () {
        $("#modal-overlay-login").show().addClass( "open" );
        $(".popup-block").show();
        $('body').css('overflow','hidden');
    });

    $('#logining').click(function () {
        $("#j-popup-tab-auth").show();
        $("#j-popup-tab-signup").hide();
        $("#logining").addClass( "__active" );
        $( "#registration" ).removeClass( "__active" );
    });

    $('#registration').click(function () {
        $("#j-popup-tab-signup").show();
        $("#j-popup-tab-auth").hide();
        $("#registration").addClass( "__active" );
        $( "#logining" ).removeClass( "__active" );
    });

    $('#mobile-login').click(function () {
        $("#mobile-login").show();
        $("#mobile-reg").hide();
    });

    $('#mobile-reg').click(function () {
        $("#mobile-reg").show();
        $("#mobile-login").hide();
    });

    $('#delivery').click(function () {
        $(".delivery").show();
        $(".payment").hide();
        $(".guarantee").hide();

        $("#delivery").addClass( "active_nav" );
        $("#payment").removeClass( "active_nav" );
        $("#guarantee").removeClass( "active_nav" );
    });
    $('#payment').click(function () {
        $(".payment").show();
        $(".delivery").hide();
        $(".guarantee").hide();

        $("#delivery").removeClass( "active_nav" );
        $("#payment").addClass( "active_nav" );
        $("#guarantee").removeClass( "active_nav" );
    });
    $('#description').click(function () {
        $(".description").show();
        $(".comment").hide();

        $("#comment").removeClass( "active_nav" );
        $("#description").addClass( "active_nav" );
    });
    $('#comment').click(function () {
        $(".comment").show();
        $(".description").hide();

        $("#description").removeClass( "active_nav" );
        $("#comment").addClass( "active_nav" );
    });

    $('#guarantee').click(function () {
        $(".guarantee").show();
        $(".delivery").hide();
        $(".payment").hide();

        $("#delivery").removeClass( "active_nav" );
        $("#payment").removeClass( "active_nav" );
        $("#guarantee").addClass( "active_nav" );
    });

    $('#zoom').click(function () {
        $("#popup-image").show();
        $(".popup-block-content").show();
        $('body').css('overflow','hidden');
    });

    $('.close-popup').click(function () {
        $("#popup-image").hide();
        $('body').css('overflow','scroll');
    });

    $('.close-popup-comment').click(function () {
        $("#comment-popup").hide();
        $('body').css('overflow','scroll');
    });

    $('.comment-cancell').click(function () {
        $("#comment-popup").hide();
        $('body').css('overflow','scroll');
    });

    $('#open-comment-popup').click(function () {
        $("#comment-popup").show();
        $('body').css('overflow','hidden');
    });

    $('#basket').click(function () {

        var storedNames = JSON.parse(localStorage.getItem("orders"));

        if(storedNames.order.length != 0){
            $("#orders_popup").show().addClass( "open" );
            $(".popup-orders-content").show();
            $('body').css('overflow','hidden');
        }
    });

    $('.close-popup-orders').click(function () {
        $("#orders_popup").hide().removeClass( "open" );
        $('body').css('overflow','scroll');
    });


    $(document).ready(function(){
        $("#tel").inputmask("+38(0"+"99"+")"+"-999-99-99");
    });

    $("#modal-overlay").click(function(e)
    {
        var container = $(".popup-block");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
            $("#modal-overlay").hide().removeClass( "open" );
            $('body').css('overflow','scroll');
        }
    });

    $("#modal-overlay-login").click(function(e)
    {
        var container = $(".popup-block");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
            $("#modal-overlay-login").hide().removeClass( "open" );
            $('body').css('overflow','scroll');
        }
    });

    $("#popup-image").click(function(e)
    {
        var container = $(".popup-block-content");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
            $("#popup-image").hide();
            $('body').css('overflow','scroll');
        }
    });

    $("#orders_popup").click(function(e)
    {
        var container = $(".popup-orders-content");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
            $("#orders_popup").hide().removeClass( "open" );
            $('body').css('overflow','scroll');
        }
    });

    function getOrdersCount(){
        var storedNames = JSON.parse(localStorage.getItem("orders"));

        if(storedNames){
            var count = storedNames.order.length;
            var result = "";
            result += count;

            document.getElementById("basket__items").innerHTML= result;
        }
    }

    $(document).ready(function(){

        getOrdersCount();

        $('.owl-carousel').owlCarousel({
            loop:true,
            dots: false,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        });

        $('#main-nav').hcOffcanvasNav({
            maxWidth: 1500,
            levelSpacing: 100,
            closeOnClick: false
        });

        $('#header-slider').slick({
            dots: true,
            nextArrow: false,
            prevArrow: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
        });
    });

</script>

</body>
</html>
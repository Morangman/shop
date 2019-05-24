<div id="modal-overlay" class="overlay">
    <section id="call-me" class="popup __password">
        <div class="popup-block login">
            <a id="close"  href="#" class="popup-close">x</a>
            <div class="popup-header">
                <div class="popup-title">Перезвонить вам?</div>
            </div>
            <div class="popup-body j-text">
                <div class="popup-msg j-callback-message">Укажите ваш номер телефона и имя. Мы свяжемся с вами в ближайшее время.</div>
                <form method="post" action="/_widget/contacts/submit-callback/"><div class="j-active-form-message form-error form-error--main"></div>
                    <div class="form">

                        <div class="form-item">
                            <div class="form-head">Имя</div>
                            <input type="text" value="" class="field j-focus" name="form[title]">
                        </div>

                        <div class="form-item">
                            <div class="form-head">Телефон</div>
                            <input  id="tel" data-inputmask-clearmaskonlostfocus="false" value="" class="field j-phone j-phone-masked" name="form[phone]">
                        </div>
                        <div class="form-item __submit">
                        <span class="btn __special callback-btn">
                            <span class="btn-content">Отправить</span>
                            <input type="submit" value="Отправить" class="btn-input">
                        </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<div id="modal-overlay-login" class="overlay">
    <section id="sign-in" class="popup __login">
        <div class="popup-block login">
            <a id="close2" href="#" class="popup-close">x</a>
            <div class="login-header">
                <div class="login-tabs j-auth-tabs">
                    <a href="#j-popup-tab-auth" id="logining" class="login-tabs-i __active"><span class="login-tabs-txt">Вход</span></a>
                    <a href="#j-popup-tab-signup" id="registration" class="login-tabs-i"><span class="login-tabs-txt">Регистрация</span></a>
                </div>
                <div class="socLogin">
                    <div class="socLogin-h">Войти с помощью</div>
                    <div class="socLogin-b">
                        <a rel="nofollow" onclick="OAuth.setScenario('default'); showPopup(this.href, 997, 490); return false;" class="socialIcon" href="/profile/OAuthRedirect/?soc=facebook">
                            <svg id="icon-fb" viewBox="0 0 18 18" width="100%" height="100%"><path d="M15.5 0h-13C1.1 0 0 1.1 0 2.5v13C0 16.9 1.1 18 2.5 18h13c1.4 0 2.5-1.1 2.5-2.5v-13C18 1.1 16.9 0 15.5 0zM15 8.3v2.2h-3V18H9.8v-7.5H8.3V8.3h1.5V5.8c0-1.6.8-2.8 2.7-2.8H15v2.2h-2.3c-.6 0-.7.3-.7.6v2.4h3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="login-body">
                <div class="login-tabs-content" id="j-popup-tab-auth" style="display: block;">
                    <form method="post" id="login_form_id" action="/profile/login/" onsubmit="submit_authorization(this); return false;">
                        <div class="j-login-info-message"></div>
                        <div class="login-error-msg"></div>
                        <div class="form">

                            <div class="form-item">
                                <div class="form-head">Эл. почта</div>
                                <input id="login-email" type="email" name="email" class="field j-focus" tabindex="1">
                            </div>

                            <div class="form-item">
                                <div class="form-head">Пароль</div>
                                <input id="login-password" type="password" name="password" class="field" tabindex="2">
                            </div>
                            <div class="form-item __submit">
                                <span id="login_button_submit" class="btn __special">
                                    <span class="btn-content">Войти</span>
                                    <input type="submit" value="Войти" class="btn-input" tabindex="3">
                                </span>
                                <span class="form-passRecover">
                                    <a href="javascript:void(0);" data-modal="#password-recovery">Забыли пароль?</a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="login-tabs-content" id="j-popup-tab-signup" style="display: none;">
                    <form method="post" id="signup-form" action="/profile/sign_up/">
                        <div class="j-signup-info-message"></div>
                        <div class="reg-error-msg"></div>
                        <div class="form">

                            <div class="form-item">
                                <div class="form-head __name">Имя и фамилия</div>
                                <input id="reg-name" type="text" name="name" class="field" value="" tabindex="1">
                            </div>

                            <div class="form-item">
                                <div class="form-head">Эл. почта</div>
                                <input id="reg-email" type="email" name="email" class="field" value="" tabindex="2">
                            </div>

                            <div class="form-item">
                                <div class="form-head">Пароль</div>
                                <input id="reg-password" type="password" name="password" class="field" value="" tabindex="3">
                            </div>

                            <div class="form-item">
                                <div class="form-head">Подтвердите пароль</div>
                                <input id="reg-password_confirmation" type="password" name="password_confirmation" class="field" value="" tabindex="3">
                            </div>
                            <div class="form-item __submit">
                                <span  id="reg_button_submit" class="btn __special btn_reg">
                                    <span class="btn-content">Зарегистрироваться</span>
                                    <input type="submit" value="Войти" class="btn-input" tabindex="3">
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="popup-image">
    <div class="popup-content">
        <div class="popup-block-content">
            <div class="close-popup"><a href="javascript:"><i class="fas fa-times"></i></a></div>
            <img src="./img/product.jpg">
        </div>
    </div>
</div>

<div id="comment-popup">
    <div class="popup-comment-content">
        <div class="popup-block-content">
            <div class="popup-header-comment">
                <div class="close-popup-comment text"><a href="javascript:"><i class="fas fa-times"></i></a></div>
                <p class="comment-head-title text">Новый отзыв</p>
            </div>
            <div class="popup-body text">
                <input type="text" placeholder="Имя и фамилия" name="form[title]" class="input" value="">
                <input type="text" placeholder="Эл. почта" name="form[email]" class="input" value="">
                <textarea placeholder="Отзыв" class="input input--text" name="form[text]"></textarea>
            </div>
            <div class="comment-buttons text">
                <a href="#" data-button-action="open-panel" class="btn comment-send">Отправить</a>
                <a href="#" data-button-action="open-panel" class="btn comment-cancell">Отмена</a>
            </div>
        </div>
    </div>
</div>

<div id="orders_popup">
    <div class="popup-orders-content">
        <div class="popup-block-content">
            <div class="popup-header-orders">
                <div class="close-popup-orders text"><a href="javascript:"><i class="fas fa-times"></i></a></div>
                <p class="order-head-title text">Корзина</p>
            </div>
        </div>
    </div>
</div>

<script>

$('#reg_button_submit').click(function(){

    if($('#reg-name').val().length === 0){
        $('#reg-name').addClass("error");
    }else{
        $('#reg-name').removeClass("error");
    }

    if( $('#reg-email').val().length === 0){
        $('#reg-email').addClass("error");
    }else{
        $('#reg-email').removeClass("error");
    }

    if( $('#reg-password').val().length === 0){
        $('#reg-password').addClass("error");
    }else{
        $('#reg-password').removeClass("error");
    }

    if( $('#reg-password_confirmation').val().length === 0){
        $('#reg-password_confirmation').addClass("error");
    }else{
        $('#reg-password_confirmation').removeClass("error");
    }

    
    if($('#reg-name').val().length &&  $('#reg-email').val().length && $('#reg-password').val().length && $('#reg-password_confirmation').val().length){

        $( ".reg-error-msg" ).find('p').remove();
        if( $('#reg-password_confirmation').val() != $('#reg-password').val()){
            $('#reg-password_confirmation').addClass("error");
            $('.reg-error-msg').append('<p>'+'Повторите пароль'+'</p>');
        }else{
            $('#reg-password').removeClass("error");
            $('#reg-password_confirmation').removeClass("error");
            $('.reg-error-msg').hide();
        }


        $.ajaxSetup({
            headers: {
                'accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/register',
            method: 'post',
            data: $('#signup-form').serialize(), // prefer use serialize method

            success:function(data){
                if(data){
                    $('.reg-error-msg').hide();
                    $('#modal-overlay-login').hide().removeClass( "open" );
                    $('body').css('overflow','scroll');
                    location.reload();
                }       
            },

            error:function(errors){
                var errors = errors.responseJSON;

                var array = errors.errors;
                $.each( array, function( key, value ) {

                    $('.reg-error-msg').show();

                    if(key === "email"){
                        $('#reg-email').addClass("error");
                        $('.reg-error-msg').append('<p>'+'Неверная почта'+'</p>');
                    }
                    if(key === "password"){
                        $('#reg-password').addClass("error");
                        $('.reg-error-msg').append('<p>'+'Минимальная длина пароля 6 символов'+'</p>');
                    }
                });
            }
        });
    }

});

$('#login_button_submit').click(function(){

    $('.login-error-msg').hide();
    $( ".login-error-msg" ).find('p').remove();

    let email_check = false;
    let password_check = false;

    if($('#login-email').val().length === 0){
        $('.login-error-msg').show();
        $('#login-email').addClass("error");
        $('.login-error-msg').append('<p>'+'Неверная почта'+'</p>');
    }else{
        $('#login-email').removeClass("error");
        email_check = true;
    }

    if( $('#login-password').val().length === 0 || $('#login-password').val().length < 6){
        $('.login-error-msg').show();
        $('#login-password').addClass("error");
        $('.login-error-msg').append('<p>'+'Неверный пароль'+'</p>');
        $('.login-error-msg').append('<p>'+'Минимальная длина пароля 6 символов'+'</p>');
    }else{
        $('#login-password').removeClass("error");
        password_check = true;
    }

    if(email_check && password_check){
        logining();
    }
    
});

function logining(){

    if($('#login-email').val().length &&  $('#login-password').val().length){

        $( ".login-error-msg" ).find('p').remove();
        $.ajaxSetup({
            headers: {
                'accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/login',
            method: 'post',
            data: $('#login_form_id').serialize(), 

            success:function(data){
                if(data){
                    $('.login-error-msg').hide();
                    $('#modal-overlay-login').hide().removeClass( "open" );
                    $('body').css('overflow','scroll');
                    location.reload();
                }       
            },

            error:function(errors){
                var errors = errors.responseJSON;
                var array = errors.errors;
                $.each( array, function( key, value ) {

                    $('.login-error-msg').show();

                    if(key === "email"){
                        $('#login-email').addClass("error");
                        $('#login-password').addClass("error");
                        $('.login-error-msg').append('<p>'+'Неверные данные'+'</p>');
                    }else{
                        $('#login-email').addClass("error");
                        $('#login-password').addClass("error");
                        $('.login-error-msg').append('<p>'+'Неизвестная ошибка'+'</p>');
                    }
                });
            }
        });
    }
}

$('#logout').click(function(){
    $.ajaxSetup({
        headers: {
            'accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/logout',
        method: 'post',

        success:function(data){
            if(data){
                location.reload();
            }       
        },

        error:function(errors){
            var errors = errors.responseJSON;
            console.log(errors.errors);
        }
    });
});

</script>

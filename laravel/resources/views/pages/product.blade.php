@include('layouts.header')

<div class="wrapper">
    <div class="layout">
        <div class="product-grid">
            <div class="product-column-left">
                <a href="#" id="zoom"><img class="responsive-img" src="./img/product.jpg"></a>
                <div class="buy-form text">
                    <div class="amount">4000 грн</div>
                    <div class="buttons-buy">
                        <a class="btn buy" href="#">Купить</a>
                        <a class="btn order-now" href="#">Быстрый заказ</a>
                    </div>
                </div>
                <nav class="product-header-nav">
                    <a id="description" class="active_nav" href="javascript:">Описание</a>
                    <a id="comment" href="javascript:">Новый отзыв или комментарий</a>
                </nav>
                <div class="description text">
                    <p>
                        Аромат, который с первых нот способен покорить любую женщину, разбудив
                        ее фантазию и тайные желания – это Hugo Red от Hugo Boss. Эликсир чувственности может
                        стать секретным оружием мужчины в его арсенале обольщения. Противоречивый и мужественный,
                        таинственный и опасно притягательный запах словно пропитан самыми провокационными сторонами
                        бессонной ночи.
                    </p>
                </div>
                <div class="comment text">
                    <div class="user-ico"><i class="fas fa-user-circle"></i></div>
                    <div class="add-comment-form">
                        <div class="form-top">
                            <div class="form-left">
                                <input class="field" type="text" name="form[title]" placeholder="Имя и фамилия" value="">
                                <input class="field" type="text" name="form[email]" placeholder="Эл. почта" value="">
                            </div>
                            <div class="form-right">
                                <p class="socialIcon-text">Войти с помощью</p>
                                <a class="facebook-ico" href="#"><i class="fab fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <textarea class="field __text" name="form[text]" placeholder="Сообщение"></textarea>
                        <div class="form-buttom">
                            <a class="btn buy" href="#">Отправить</a>
                        </div>
                    </div>
                </div>
                <nav class="product-header-nav">
                    <a id="delivery" class="active_nav" href="javascript:">Доставка</a>
                    <a id="payment" href="javascript:">Оплата</a>
                    <a id="guarantee" href="javascript:">Гарантия</a>
                </nav>
                <div class="delivery text">
                    <ul>
                        <li>- Новой почтой по Украине  — 30 грн.</li>
                        <li>- Курьером к двери по Запорожью — 40 грн.</li>
                    </ul>
                    <p>
                        <a href="#">Подробнее о доставке</a>
                    </p>
                </div>
                <div class="payment text">
                    <ul>
                        <li>- Наличными при получении.</li>
                        <li>- Кредитной картой в privat24, LiqPay.</li>
                        <li>- Через кассу или терминал самообслуживания Приватбанк.</li>
                    </ul>
                </div>
                <div class="guarantee text">
                    <p>Гарантия от производителя 12 месяцев</p>
                </div>
            </div>
            <div class="product-column-right">
                <div class="product-column-right-header">
                    <div class="product-info">
                        <div class="product-title">
                            <p>New collection 2019</p>
                            <div class="product-code">
                                <p class="code-header">Артикул</p>
                                <p>5235612</p>
                            </div>
                        </div>
                        <div class="product_header-row">
                            <p class="product-availability">В наличии</p>
                            <a href="#" class="product-comments-link">Оставить отзыв</a>
                        </div>
                        <div class="price">
                            4000 грн
                        </div>
                    </div>
                    <div class="product-order">
                        <div class="product-buy">
                            <a class="btn buy" href="#">Купить</a>
                        </div>
                        <div class="product-order-now">
                            <a class="btn order-now" href="#">Быстрый заказ</a>
                        </div>
                    </div>
                </div>

                <div class="product-features text">
                    <p class="product-features__header">Характеристики</p>
                    <table class="product-features__table">
                        <tbody>
                        <th class="product-features__cell product-features__cell--h">
                            Производитель
                        </th>
                        <td class="product-features__cell">
                            Франция
                        </td>
                        </tr>
                        <tr class="product-features__row">
                            <th class="product-features__cell product-features__cell--h">
                                Пол
                            </th>
                            <td class="product-features__cell">
                                для женщин
                            </td>
                        </tr>
                        <tr class="product-features__row">
                            <th class="product-features__cell product-features__cell--h">
                                Тип аромата
                            </th>
                            <td class="product-features__cell">
                                восточные, древесные
                            </td>
                        </tr>
                        <tr class="product-features__row">
                            <th class="product-features__cell product-features__cell--h">
                                Классификация
                            </th>
                            <td class="product-features__cell">
                                элитная
                            </td>
                        </tr>
                        <tr class="product-features__row">
                            <th class="product-features__cell product-features__cell--h">
                                Начальная нота
                            </th>
                            <td class="product-features__cell">
                                Бергамот, Лаванда
                            </td>
                        </tr>
                        <tr class="product-features__row">
                            <th class="product-features__cell product-features__cell--h">
                                Конечная нота
                            </th>
                            <td class="product-features__cell">
                                Кумарин, Сандал, Таитянская ваниль
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="comment-form text">
                    <div class="comment-block">
                        <div class="comment-head">Отзывы <span>1</span></div>
                        <div class="comments-list">
                            <div class="comment-header">
                                <div class="avatar">
                                    <img src="./img/avatar.jpg">
                                </div>
                                <div class="info">
                                    <p class="comment-name">Дмитрий Синепольский</p>
                                    <p class="comment-data">22 мая 2019</p>
                                </div>
                            </div>
                            <div class="comment-bottom">
                                <p class="comment-text">Хороший отзыв!</p>
                            </div>
                        </div>
                        <div class="comment-btn">
                            <a href="#" id="open-comment-popup" data-button-action="open-panel" class="btn comment-send">Написать отзыв</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.popups')

@include('layouts.footer')
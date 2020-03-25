<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$subdomain->title}}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$subdomain->ga_id}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{$subdomain->ga_id}}');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym('{{$subdomain->ya_id}}', "init", {
            id:'{{$subdomain->ya_id}}',
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css?123">
</head>
<body>
<noscript><div><img src="https://mc.yandex.ru/watch/{{$subdomain->ya_id}}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>Заполните форму</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" placeholder="Ваше имя" v-model="fields.name">
                        <small class="text-danger">@{{errors.name}}</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="number" class="form-control" id="phone" placeholder="+375 (29) 344 55 44" v-model="fields.phone">
                        <small class="text-danger">@{{errors.phone}}</small>
                    </div>
                    <div class="form-group">
                        <label for="count">Необходимая сумма</label>
                        <input type="number" class="form-control" id="count" placeholder="100" v-model="fields.sum">
                        <small class="text-danger">@{{errors.sum}}</small>
                    </div>

                    <div class="form-group">
                        <label for="count">Город</label>
                        <input type="text" class="form-control" id="city" placeholder="Название города" v-model="fields.city">
                        <small class="text-danger">@{{errors.city}}</small>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-outline-green" @click="send()">Отправить</a>
            </div>
        </div>
    </div>
</div>
<!--header-->
<header class="header">
    <div class="header__wrap">

        <nav class="header__nav nav_bar">
            <div class="nav_bar__item">
                <a href="#one" class="nav_bar__link">Главная</a>
            </div>
            <div class="nav_bar__item">
                <a href="#two" class="nav_bar__link">Как получить деньги</a>
            </div>
            <div class="nav_bar__item">
                <a href="#three" class="nav_bar__link">Почему мы?</a>
            </div>
            <div class="nav_bar__item">
                <a href="#four" class="nav_bar__link">Условия</a>
            </div>
            <div class="nav_bar__item">
                <a href="#five" class="nav_bar__link">Контакты</a>
            </div>
        </nav>
        <div class="nav_bar__toggler"><i class="icon icon-menu2"></i></div>
        <div class="header__contacts">
            <div class="header__phone">
                
                    @if($show_phone)
						<i class="icon icon-phone-square"> </i><a href="tel:‎‎+375292298585" class="btn btn-phone-header" onclick="ym('{{$subdomain->ya_id}}', 'reachGoal', 'TELEPHONE'); ga('send', 'event', 'click', 'telephone', 'telephone'); return true;">
						+375 29 <span class="phone_prefix">‎229-85-85</span></a>
					@endif
					
            </div>
        </div>
    </div>
</header>
<!--end header-->

<!--content-->
<main class="main">
    <section class="home" id="one">
        <div class="home__wrap">
            <div class="home__info">
                <div class="home__contacts">
                    <a href="tel:+375292298585" onclick="ym('{{$subdomain->ya_id}}', 'reachGoal', 'TELEPHONE'); ga('send', 'event', 'click', 'telephone', 'telephone'); return true;" class="home__contacts">
					@if($show_phone)
						+375 29 229-85-85
					@endif
					</a>
                </div>
                <div class="home__contdesc">{{$subdomain->subtitle}}</div>
                <h1 class="home__title">Деньги в долг</h1>
                <div class="home__subtitle">от 100 до 5 000 BYN</div>
                <div class="home__desc">
                    <div class="icongroup">
                        <div class="icongroup__item">

                            <div class="icongroup__desc">
                                Приветствуем вас на сайте пункта выдачи займов! Мы окажем помощь в быстром получении
                                денег в долг: наличные в день обращения, в течение 15-30 минут. Расчеты производятся
                                исключительно в белорусских рублях.
                            </div>
                        </div>
                    </div>
                    <div class="home__action">
                        <a href="#" class="btn btn-outline-green" data-toggle="modal" data-target="#exampleModal">Заказать
                            звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="how" id="two">
        <h2 class="how__title">
            Как получить деньги ?
        </h2>
        <div class="sprint">
            <div class="sprint__item">
                <div class="sprint__icon sprint__icon-1"></div>
                <div class="sprint__title">Оформите заявку</div>
                <div class="sprint__description">
                </div>
            </div>
            <div class="sprint__item">
                <div class="sprint__icon sprint__icon-2"></div>
                <div class="sprint__title">Мы произведем расчет</div>
                <div class="sprint__description">
                </div>
            </div>
            <div class="sprint__item">
                <div class="sprint__icon sprint__icon-3"></div>
                <div class="sprint__title">Вы получите деньги</div>
                <div class="sprint__description">
                </div>
            </div>
        </div>


    </section>
    <section class="policy" id="three">
        <div class="policy__wrap">
            <div class="policy__info">
                <div class="policy__title">
                    Поможем всем!
                </div>

                <div class="policy__item">
                    <div class="policy__num">01</div>
                    <div class="policy__subtitle">
                        Имеющим судимости
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">02</div>
                    <div class="policy__subtitle">
                        Находящимся в декретном отпуске
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">03</div>
                    <div class="policy__subtitle">
                        Пенсионерам, безработным
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">04</div>
                    <div class="policy__subtitle">
                        Студентам
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">05</div>
                    <div class="policy__subtitle">
                        Без официального места работы
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">06</div>
                    <div class="policy__subtitle">
                        С плохой кредитной историей
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">07</div>
                    <div class="policy__subtitle">
                        Без справки о доходах и залога
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">08</div>
                    <div class="policy__subtitle">
                        Лицам от 18 до 60 лет
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">09</div>
                    <div class="policy__subtitle">
                        Срок возврата от 5 месяцев до 2 лет
                    </div>
                </div>
                <div class="policy__item">
                    <div class="policy__num">10</div>
                    <div class="policy__subtitle">
                        Суммы займов от 100 до 5000 BYN
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="conditions" id="four">
        <h3 class="conditions__title">Условия получения быстрых денег</h3>
        <div class="conditions__items">
            <div class="conditions__item">Минимальный и максимальный период погашения долга: от 61 дня до 4 лет.</div>
            <div class="conditions__item">Максимальная годовая процентная ставка, включающая ссудный процент, а также
                все остальные комиссии и расходы за год, или аналогичный период: до 100% годовых.
            </div>
            <div class="conditions__item">Пример расчета общей стоимости займа, включая действующие комиссии:
                При процентной ставке 70% - Взяли 1 рубль на год, вернуть в течение года необходимо 1 руб. 70 коп. равными
                платежами на протяжении оговоренного срока.
            </div>
            <div class="conditions__item">Заем может быть выдан на сумму от 100 до 5000 BYN.</div>
            <div class="conditions__item">Необходимые документы для получение денежных средств: паспорт, вид на
                жительство.
            </div>
            <div class="conditions__item">Методы взыскания задолженности:<br>
                В случае несвоевременной оплаты каждого очередного платежа клиент уплачивает пеню в размере от 0,1 до
                0,5% от суммы каждого неоплаченного очередного платежа за каждый день просрочки.
                Взыскание невыплаченной задолженности проводится в порядке, регулируемом гражданско-правовым
                законодательством Республики Беларусь.
            </div>
            <div class="conditions__item">Последствия неуплаты:<br>
                Невыплата задолженности влечет за собой снижение кредитного рейтинга.
            </div>
            <div class="conditions__item"> Годовая процентная ставка:<br>
                Для всех категорий граждан Республики Беларусь - от 50% годовых.
            </div>
            <div class="conditions__item"> Отсрочка:<br>
                Если возникла форс-мажорная ситуация и вы просрочили выплату по кредиту, не стоит скрываться. Лучше
                спокойно поговорить с представителем, объяснить положение дел и вместе решить, как действовать в
                дальнейшем. Иногда клиент может рассчитывать на небольшую отсрочку. Однако не стоит легкомысленно
                относиться к предоставленной вам отсрочке - сумма должна быть внесена обязательно.
            </div>
        </div>

        <div class="conditions__action">
            <a href="#" class="btn btn-outline-green" data-toggle="modal" data-target="#exampleModal">Оформить
                заказ</a>
        </div>
        <p class="conditions__tagline">Cрочный заем денег - это просто!<br> оставляйте заявку на оформление займа прямо
            сейчас и деньги будут у вас уже сегодня!</p>
    </section>
    <section class="contacts" id="five">
        <h3 class="contacts__title">Контакты</h3>
        <div class="contacts__list">
            <div class="contacts__item">
                <div class="contacts__phone">
					@if($show_phone)
						<i class="icon icon-phone-square"></i>
						+375 29 229-85-85
					@endif
				</div>
                <div class="contacts__adress"><i class="icon icon-compas1"></i>Партизанский просп., 150А,<br> Минск (ТЦ Момо)</div>
            </div>

        </div>
        <div class="icongroup icongroup--contact">
            <div class="icongroup__item">
                <div class="icongroup__desc icongroup__desc--small">
                    <span class="green">*</span>Мы не оказываем услуги по оформлению микрозаймов населению в соответствии с указом Президента № 325.
                    <p class="green">"О привлечении и предоставлении займов, деятельности микрофинансовых организаций"</p>
                </div>
            </div>
        </div>
    </section>
</main>
<!--end content-->

<!--footer-->
<footer class="footer">
    dengi-rb.by 2018 ©
</footer>
<!--end footer-->
<script src="https://unpkg.com/axios/dist/axios.min.js?123"></script>
<script src="js/jquery.js?123"></script>
<script src="js/vue.min.js?123"></script>
<script src="js/bootstrap.min.js?123"></script>
<script src="js/jquery.nav.js?123"></script>
<script src="js/menu.js?123"></script>
<script>
    const form = new Vue({
        el: '#exampleModal',
        data: {
            fields: {
                name: "",
                phone: "",
                sum: "",
                city: "",
            },
            errors: {
                phone: ""
            }
        },
        methods: {
            send: function () {

                if (this.validation()) {
                    return false;
                }

                axios.post('/api/email', this.fields)
                    .then(function (res) {
                        if(res.data.status === true){
                            $('#exampleModal').modal('hide');
                            ym('{{$subdomain->ya_id}}', 'reachGoal', 'ZAYAVKA');
                            ga('send', 'event', 'zayavka', 'zayavka', 'zayavka');
                            alert('Запрос отправлен, ожидайте! В ближайшее время мы с вами свяжемся.');
                        }
                    })
                    .catch(function () {
                        alert('Ошибка попробуйте позже');
                    });
            },
            validation: function () {
                this.errors.phone = this.fields.phone === "" ? "Заполните номер телефона." : "";
                return this.errors.phone.length;
            }
        },
        watch: {
            'fields.phone': function () {
                this.validation();
            }
        }

    });
</script>

</body>
</html>

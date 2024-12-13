<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Black.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Black.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/local/templates/krepiz/fonts/Gilroy-Black.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>              <!-- jquery -->
    <script defer src="js/popper.js"></script>              <!-- popper -->
    <script defer src="js/fancybox.umd.js"></script>        <!-- fancybox -->
    <script defer src="js/swiper-bundle.js"></script>       <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
	<?/* <script defer src="js/jquery.maskedinput.js"></script>  <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>     <!-- validate -->
    <script defer src="js/messages_ru.js"></script>         <!-- validate -->
    <script defer src="js/select2.js"></script>             <!-- select2 -->
    <script defer src="js/readmore.js"></script>            <!-- readmore --> */?>

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="header-top">
                <div class="container">
                    <div class="header-top-content">
                        <ul class="list-reset header-top__list">
                            <li><a href="javascript:;" class="header-top__link">Для производств и инженерных организаций</a></li>
                            <li><a href="javascript:;" class="header-top__link">Для конечных покупателей и частных лиц</a></li>
                            <li><a href="javascript:;" class="header-top__link">Изготовление шпилек - собственное производство</a></li>
                        </ul>
                        <ul class="list-reset header-top__action">
                            <li>
                                <a href="javascript:;" class="header-top__action-item">
                                    <span class="text-content">Сравнение</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#compare"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="header-top__action-item has-data">
                                    <span class="text-content">Избранное</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-main-content">
                        <a href="javascript:;" class="header-logo">
                            <span class="header-logo__view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/sprite.svg#logo-dark"
                                        width="218"
                                        height="38"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="header-logo__text">Оптовая продажа крепежа</span>
                        </a>
                        <div class="header-catalog">
                            <a class="btn-reset btn btn-primary btn-sm header-catalog__link" href="javascript:;">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="text-content">Каталог</span>
                            </a>
                            <div class="header-search">
                                <form id="" method="" action="javascript:;">
                                    <div class="input-wrapper input-wrapper-split">
                                        <input
                                                id="header_search"
                                                class="input-reset input input-search"
                                                type="text"
                                                name=""
                                                value=""
                                                placeholder="Поиск по сайту"
                                        >
                                        <button class="btn-reset btn btn-sm btn-primary header-search__submit" type="submit">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#search"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="header-contacts">
                                <a href="javascript:;" class="header-contacts__item header-contacts__item-tel">
                                    <span class="text-content">8 (499) 638-2-836</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#phone"></use>
                                    </svg>
                                </a>
                                <span class="header-contacts__item">с 9:00 до 18:00, ПН-ПТ</span>
                            </div>
                            <div class="header-invoice">
                                <button class="btn-reset btn btn-sm btn-dark" type="button">
                                    <span class="text-content">Запросить счёт</span>
                                </button>
                            </div>
                        </div>
                        <button
                                class="btn-reset btn header-burger"
                                aria-label="Открыть меню"
                                aria-expanded="false"
                                data-menu-spoiler
                                data-overlay
                        >
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <div class="header-menu-content">
                        <ul class="list-reset header-menu__list">
                            <li><a href="javascript:;" class="header-menu__link">Главная</a></li>
                            <li><a href="javascript:;" class="header-menu__link">О компании</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Прайс-лист</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Оплата</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Доставка</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Документы</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Скидки</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Контакты</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Отзывы</a></li>
                            <li><a href="javascript:;" class="header-menu__link">Блог</a></li>
                        </ul>
                        <?/*<a href="javascript:;" class="header-menu__cart">
                            <span class="text-content">0 товаров</span>
                            <span class="header-menu__cart-view">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#basket"></use>
                                </svg>
                            </span>
                        </a>*/?>
                        <a href="javascript:;" class="header-menu__cart has-data">
                            <span class="text-content">56 товаров - 420 580 ₽</span>
                            <span class="header-menu__cart-view">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#basket"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<?/*
    <div class="burger-menu" data-menu>
        <div class="burger-menu__close" data-menu-close></div>
        <div class="header-search">
            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field">
                    <input
                            class="input-reset form__input"
                            type="search"
                            name="Поиск"
                            placeholder="Что вы хотите найти?"
                    >
                    <button class="btn-reset form__btn">
                        <svg class="icon">
                            <use href="img/sprite.svg#search"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <ul class="list-reset burger-menu__list">
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Пункт</a>
            </li>
            <li class="burger-menu__item-org">
                <a href="javascript:;" class="link link--green">Пункт</a>
            </li>
        </ul>
        <div class="burger-menu__footer">
            <div class="burger-menu__contacts">
                <div class="burger-menu__contacts-item">
                    <div class="burger-menu__contacts-title">Консультационный центр</div>
                    <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                </div>
                <div class="burger-menu__contacts-item">
                    <div class="burger-menu__contacts-title">Поддержка</div>
                    <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                </div>
            </div>
            <ul class="list-reset social social--light burger-menu__social">
                <li class="social__item">
                    <a
                            href="javascript:;"
                            target="_blank"
                            class="social__link social__link--vk"
                            aria-label="Наша страничка в Вконтакте"
                    >
                        <svg class="icon social__icon">
                            <use href="img/sprite.svg#soc-logo-vk"></use>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a
                            href="javascript:;"
                            target="_blank"
                            class="social__link social__link--ok"
                            aria-label="Наша страничка в Одноклассниках"
                    >
                        <svg class="icon social__icon">
                            <use href="img/sprite.svg#soc-logo-ok"></use>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a
                            href="javascript:;"
                            target="_blank"
                            class="social__link social__link--fb"
                            aria-label="Наша страничка в Фэйсбук"
                    >
                        <svg class="icon social__icon">
                            <use href="img/sprite.svg#soc-logo-fb"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    */?>

    <main class="main">
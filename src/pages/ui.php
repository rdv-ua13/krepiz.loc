<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

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
    <link rel="stylesheet" href="css/ui.css" type="text/css">

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
    <div class="ui">
        <div class="container-fluid">
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Colors</h3>

                <div class="ui-row">
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--main-dark-color" style="background-color: var(--main-dark-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--accent-color" style="background-color: var(--accent-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--accent-pale-color" style="background-color: var(--accent-pale-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray1-color" style="background-color: var(--gray1-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray2-color" style="background-color: var(--gray2-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray-dark-color" style="background-color: var(--gray-dark-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--line-dark-color" style="background-color: var(--line-dark-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray-bg-color" style="background-color: var(--gray-bg-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--bg-color" style="background-color: var(--bg-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--green-color" style="background-color: var(--green-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--blue-color" style="background-color: var(--blue-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--yellow-color" style="background-color: var(--yellow-color);"></span>
                    </div>
                </div>
                <div class="ui-row">
                    <div class="ui-title">hover</div>
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--main-dark-hover-color" style="background-color: var(--main-dark-hover-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--accent-hover-color" style="background-color: var(--accent-hover-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--accent-pale-hover-color" style="background-color: var(--accent-pale-hover-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray1-hover-color" style="background-color: var(--gray1-hover-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray2-hover-color" style="background-color: var(--gray2-hover-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray-dark-hover-color" style="background-color: var(--gray-dark-hover-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray-bg-hover-color" style="background-color: var(--gray-bg-hover-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--bg-hover-color" style="background-color: var(--bg-hover-color);"></span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Gaps</h3>

                <div class="ui-row">
                    <div class="fz-sm">
                        <pre>
@media (min-width: 992px) {
    .gap-xxs { margin-bottom: 10px !important; }
    .gap-xs { margin-bottom: 15px !important; }
    .gap-sm { margin-bottom: 20px !important; }
    .gap-md { margin-bottom: 25px !important; }
    .gap-lg { margin-bottom: 30px !important; }
    .gap-xl { margin-bottom: 50px !important; }
    .gap-xl { margin-bottom: 50px !important; }
}
@media (max-width: 991.98px) {
    .gap-xxs { margin-bottom: 5px !important; }
    .gap-xs { margin-bottom: 10px !important; }
    .gap-sm { margin-bottom: 15px !important; }
    .gap-md { margin-bottom: 20px !important; }
    .gap-lg { margin-bottom: 25px !important; }
    .gap-xl { margin-bottom: 40px !important; }
}
                        </pre>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Icons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-md">
                            .icon-fill - строго запрещает свойство "stroke"
                            <br>
                            .icon-stroke - строго запрещает свойство "fill"
                        </div><br>
                        <div class="fz-md">&#60;use&#62; -> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                        <div class="fz-sm">
                            <pre>
.icon-xs { width: 12px!important; height: 12px!important; }
.icon-sm { width: 16px!important; height: 16px!important; } <- default
.icon-md { width: 20px!important; height: 20px!important; }
.icon-lg { width: 24px!important; height: 24px!important; }
                            </pre>
                        </div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="#basket">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#basket"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#catalog">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-right">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#compare">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#compare"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#favorite">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#favorite"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filter">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filter"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#home">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#home"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#minus">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#minus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#plus">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#plus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-extra">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra-2'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-extra-2">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra-3'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-extra-3">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-dark'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-dark">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-more'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-more">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-filter'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-disable">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-disable'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-disable">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#home"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Links</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-secondary'">
                            <!--start ui content-->
                            <a class="link link-secondary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-invert'" style="padding: 0 8px; background-color: var(--black-color);">
                            <!--start ui content-->
                            <a class="link link-invert" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu'">
                            <!--start ui content-->
                            <a class="link link-tdu" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Fields</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-md">input</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper has-icon-l has-icon-r">
                                    <input
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label class="input-icon input-icon-r">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="search">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-search-wrapper has-icon-l">
                                    <input
                                            class="input-reset input input-search"
                                            type="search"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label class="input-search-action">
                                        <button class="btn-reset btn btn-icon input-delete-btn" type="button">
                                            <svg class="icon icon-fill btn__icon">
                                                <use href="img/sprite.svg#filled-tag-cross"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-reset btn btn-sm input-search-btn" type="submit">
                                            <span class="btn__text">Найти</span>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <?/* pass
                        <span class="tooltip" data-tippy-content="class='card' (default)">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Подтверждение пароля</div>
                                <div class="input-wrapper has-icon-r">
                                    <input
                                            class="input-reset input"
                                            type="password"
                                            name=""
                                            value=""
                                            placeholder="Test"
                                            data-password-target
                                            required
                                    >
                                    <label class="input-icon input-icon-btn">
                                        <svg class="icon icon-sm icon-fill icon-default">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                        <svg class="icon icon-sm icon-fill icon-selected">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                        <input
                                                type="checkbox"
                                                class="visually-hidden"
                                                data-password-switcher
                                        >
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>*/?>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <div class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox">
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip" data-tippy-content="disabled">
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip" data-tippy-content="checked">
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip" data-tippy-content="checked">
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                            </div>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h3 class="text-center">Tags</h3>
        <div class="container-ui">
            <div class="col-ui">
                <h4 class="text-center">Tags block (default)</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px;">
                        <!--ui content-->
                        <span class="tag-bar">
                            <span class="tag" style="cursor: not-allowed;">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--text8-color);
                                        background-color: var(--text8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                        <use href="img/sprite.svg#tag-all"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--text6-color);
                                        background-color: var(--text8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                        <use href="img/sprite.svg#tag-all"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--success6-color);
                                        background-color: var(--success8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                        <use href="img/sprite.svg#tag-nature"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--accent-purple4-color);
                                        background-color: var(--accent-purple8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                        <use href="img/sprite.svg#tag-sport"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--accent-ceruleanblue1-color);
                                        background-color: var(--accent-ceruleanblue8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                        <use href="img/sprite.svg#tag-building"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--error4-color);
                                        background-color: var(--error9-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                        <use href="img/sprite.svg#tag-alarm"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--warning5-color);
                                        background-color: var(--warning8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                        <use href="img/sprite.svg#tag-pets"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                </span>
                            </span>
                            <span class="tag">
                                <span
                                        class="tag__content-bg"
                                        style="
                                        border-color: var(--info5-color);
                                        background-color: var(--info8-color);"
                                ></span>
                                <span class="tag__content">
                                    <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                        <use href="img/sprite.svg#tag-science"></use>
                                    </svg>
                                    <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                </span>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                <h4 class="text-center">Tags block (slider)</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px; overflow: hidden;">
                        <!--ui content-->
                        <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--text6-color);
                                            background-color: var(--text8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                            <use href="img/sprite.svg#tag-all"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--success6-color);
                                            background-color: var(--success8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                            <use href="img/sprite.svg#tag-nature"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--accent-purple4-color);
                                            background-color: var(--accent-purple8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                            <use href="img/sprite.svg#tag-sport"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--accent-ceruleanblue1-color);
                                            background-color: var(--accent-ceruleanblue8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                            <use href="img/sprite.svg#tag-building"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--error4-color);
                                            background-color: var(--error9-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                            <use href="img/sprite.svg#tag-alarm"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--warning5-color);
                                            background-color: var(--warning8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                            <use href="img/sprite.svg#tag-pets"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--info5-color);
                                            background-color: var(--info8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                            <use href="img/sprite.svg#tag-science"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                    </span>
                                </span>
                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--max">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--max"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--midi">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--midi"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--mini">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--mini"
                </div>
                Для тегов доделать вариации для mobile/desktop
                <br>
                <h4 class="text-center">Tags-radio</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px;">
                        <!--ui content-->
                        <span class="tag-bar">
                        <label class="tag" style="cursor: not-allowed;">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text8-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][all]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text6-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][urban]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-ceruleanblue1-color);
                                    background-color: var(--accent-ceruleanblue8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                    <use href="img/sprite.svg#tag-building"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][sport]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-purple4-color);
                                    background-color: var(--accent-purple8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                    <use href="img/sprite.svg#tag-sport"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][alarm]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--error4-color);
                                    background-color: var(--error9-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                    <use href="img/sprite.svg#tag-alarm"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][animal]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--warning5-color);
                                    background-color: var(--warning8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                    <use href="img/sprite.svg#tag-pets"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][science]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--info5-color);
                                    background-color: var(--info8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                    <use href="img/sprite.svg#tag-science"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][nature]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </label>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Modal</h3>
        <div class="container-ui">
            <div class="col-ui">
                <a href="https://fancyapps.com/" target="_blank">Using plugin fancybox</a>
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#pencil"></use>
                            </svg>
                            <span class="btn__text">Вызов модалки fancy</span>
                        </button>

                        <div id="modal-test111" class="modal modal-request" style="display:none;">
                            <div class="modal__content">
                                <div class="modal__title">Учет времени волонтера</div>
                                <div class="modal-fields">
                                    <div class="modal-fields__item modal-request__employee">
                                        <div class="modal-request__employee-view">
                                            <picture>
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="Фото карточки"
                                                >
                                            </picture>
                                        </div>
                                        <div class="modal-request__employee-descr">
                                            <div class="modal-request__employee-descr-status">Волонтер</div>
                                            <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item">
                                            <div class="page-content__section-item-title">
                                                <span>Указать время вручную</span>
                                            </div>
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="text"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оценка волонтера</span>
                                        </div>
                                        <div class="form__field">
                                            <div class="page-content__intro-rate">
                                                <div class="page-content__intro-rate-stars">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оставить отзыв</span>
                                        </div>
                                        <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="form__field form__field-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Сохранить</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--gray flex-1">
                                                <span class="btn__text">Сохранить и создать новую задачу</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>

                <br>

                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#pencil"></use>
                            </svg>
                            <span class="btn__text">Вызов модалки fancy</span>
                        </button>

                        <div id="modal-test111" class="modal modal-request" style="display:none;">
                            <div class="modal__content">
                                <div class="modal__title">Учет времени волонтера</div>
                                <div class="modal-fields">
                                    <div class="modal-fields__item modal-request__employee">
                                        <div class="modal-request__employee-view">
                                            <picture>
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="Фото карточки"
                                                >
                                            </picture>
                                        </div>
                                        <div class="modal-request__employee-descr">
                                            <div class="modal-request__employee-descr-status">Волонтер</div>
                                            <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item">
                                            <div class="page-content__section-item-title">
                                                <span>Указать время вручную</span>
                                            </div>
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="text"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оценка волонтера</span>
                                        </div>
                                        <div class="form__field">
                                            <div class="page-content__intro-rate">
                                                <div class="page-content__intro-rate-stars">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оставить отзыв</span>
                                        </div>
                                        <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="form__field form__field-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Сохранить</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--gray flex-1">
                                                <span class="btn__text">Сохранить и создать новую задачу</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

    </div>
</body>
</html>
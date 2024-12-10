document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    /*this.initHeaderScroll();
    this.initBurger();
    this.initOverlay();
    this.initDropdownMenu();*/
    this.initBasicSlider();
    /*this.initBasicTabSlider();
    this.initSliders();
    this.initSticky();
    this.initMiniSlider();
    this.initSelect2();
    this.initSelect2Unsearch();
    this.initReadmore();
    this.initClipboard();*/
    this.initTooltips();
    /*this.initCardActTooltips();
    this.initInputSearch();
    this.initHeaderInputSearch();
    this.initMaskedInput();
    this.initSwitchContent();
    this.initNotification();
    this.initCatalogPriceSlider();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarApplyFilter();
    this.initCatalogContentSort();
    this.initContactsMap();
    this.initBasicTabs();
    this.initAccordion();
    this.initFooterAccordion();
    this.initFancyBehavior();
    this.initPasswordSwitcher();
    this.initDatepicker();
    this.setCardProductMore();
    this.initSmoothScrollTo();*/
    this.initCartQuantity();
};

// Initialization disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialization enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();
    $(window).resize(setHeaderScroll);

    function setHeaderScroll() {
        let sensDistance = 1;

        if (window.matchMedia('(min-width: 1200px)').matches) {
            sensDistance = 50;
        } else if (window.matchMedia('(min-width: 992px) and (max-width: 1199.98px)').matches) {
            sensDistance = 14;
        }

        if ($(window).scrollTop() > sensDistance) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialization dropdown menu
application.prototype.initDropdownMenu = function () {
    if ($('.dropdown-container').length) {
        let spoiler = $('.dropdown-spoiler');
        let dropdown = $('.dropdown-menu');

        spoiler.on('mouseover', function () {
            $(this).addClass('active');
            $(this).next('.dropdown-menu').addClass('active');
        });
        dropdown.on('mouseover', function () {
            $(this).prev('.dropdown-spoiler').addClass('active');
            $(this).addClass('active');
        });
        spoiler.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
        dropdown.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;
        let spaceBetweenMobile = 15;
        let spaceBetweenDesktop = 0;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);
            /*if ($(this).is('[data-bs-gap-sm]')) {
                spaceBetweenDesktop = 16;
                spaceBetweenMobile = 12;
            }*/

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: spaceBetweenMobile,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: spaceBetweenDesktop
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization basic tab slider
application.prototype.initBasicTabSlider = function () {
    if ($('[data-tabs-slider]').length) {
        const slider = $('[data-tabs-slider]');
        let basicTabSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            basicTabSlider = new Swiper('.basic-slider-wrap-' + i + ' [data-tabs-slider]', {
                slidesPerView: 'auto',
                spaceBetween: 24,
                breakpoints: {
                    992: {
                        spaceBetween: 40,
                    },
                }
            });
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.index-slider-wrapper').length) {
        const indexSliderDesktopSettings = new Swiper('.index-slider', {
            slidesPerView: 1,
            autoHeight: true,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.index-slider .swiper-button-next',
                prevEl: '.index-slider .swiper-button-prev',
            },
            pagination: {
                el: '.index-slider .swiper-pagination',
                clickable: true,
            },
        });
    }

    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            slider.eq(i).addClass('tag-bar-slider-' + i);

            let tagbarSlider = new Swiper('.tag-bar-slider-' + i, {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
                breakpoints: {
                    992: {
                        spaceBetween: 8,
                    },
                }
            });
        });
    }

    if ($('[data-tag-bar-slider-mobile]').length) {
        const slider = $('[data-tag-bar-slider-mobile]');
        let tagbarSliderMobile = null;

        slider.each(function (i) {
            slider.eq(i).addClass('tag-bar-slider-' + i);

            const tagbarSliderSettings = {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSliderMobile !== null) tagbarSliderMobile.destroy(true, true);
                    tagbarSliderMobile = null;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    tagbarSliderMobile = new Swiper('[data-tag-bar-slider-mobile].tag-bar-slider-' + i, tagbarSliderSettings);
                }
            }
        });
    }

    if ($('[data-projects-slider]').length) {
        const projectSlider = new Swiper('[data-projects-slider]', {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,
            direction: 'horizontal',
            navigation: {
                nextEl: '.hbk-projects__view .swiper-button-next',
                prevEl: '.hbk-projects__view .swiper-button-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
            }
        });
    }

    if ($('[data-product-category-slider]').length) {
        const productCategorySlider = new Swiper('[data-product-category-slider]', {
            slidesPerView: 'auto',
            spaceBetween: 24,
            direction: 'horizontal',
            navigation: {
                nextEl: '.product-category .swiper-button-next',
                prevEl: '.product-category .swiper-button-prev',
            },
            breakpoints: {
                992: {
                    spaceBetween: 64,
                    scrollbar: {
                        el: '.product-category .swiper-scrollbar',
                        draggable: true,
                    }
                },
            }
        });
    }

    if ($('[data-banner-offer-slider]').length) {
        const bannerOfferSlider = new Swiper('[data-banner-offer-slider]', {
            slidesPerView: 1,
            autoHeight: true,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.banner-offer .swiper-button-next',
                prevEl: '.banner-offer .swiper-button-prev',
            },
            pagination: {
                el: '.banner-offer .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                992: {
                    pagination: {
                        el: '',
                        clickable: false,
                    }
                },
            }
        });
    }

    if ($('[data-colors]').length) {
        const slider = $('[data-colors]');
        let sliderMobile = null;

        slider.each(function (i) {
            slider.eq(i).addClass('choose-color-slider-' + i);

            const sliderSettings = {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(sliderMobile !== null) sliderMobile.destroy(true, true);
                    sliderMobile = null;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    sliderMobile = new Swiper('[data-colors].choose-color-slider-' + i, sliderSettings);
                }
            }
        });
    }

    if ($('.detail-thumb-slider').length) {
        let detailThumbSliderPointer = new Swiper('.detail-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            direction: "horizontal",
            freeMode: true,
            watchSlidesProgress: true
        });
        let detailThumbSlider = new Swiper('.detail-thumb-slider', {
            slidesPerView: 1,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.detail-thumb-slider .swiper-button-next',
                prevEl: '.detail-thumb-slider .swiper-button-prev',
            },
            thumbs: {
                swiper: detailThumbSliderPointer,
            }
        });
    }
};

// Initialization sticky block
application.prototype.initSticky = function () {
    if ($('[data-sticky]').length) {
        let sticky = new Sticky('[data-sticky]');
    }
};

// Initialization mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    let thisOp = $(element).find('.mini-slider__slide').index(this);
                    $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                    $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                    event.stopPropagation();
                    event.preventDefault();
                });
            }
        });
    }
};

// Initialization select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};
// Initialization select2 plagin without search
application.prototype.initSelect2Unsearch = function () {
    if ($('.js-select2-unsearch').length) {
        $('.js-select2-unsearch').select2({
            minimumResultsForSearch: -1
        });
    }
};

// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = $(this).data('spoiler-more');
            let currentLessText = $(this).data('spoiler-less');
            let defaultHeight = 340;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if ($(this).is('[data-spoiler-more]')) {
                currentMoreText = currentMoreText;
                currentLessText = defaultLessText;
            } else if ($(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = currentLessText;
            } else if (!$(this).is('[data-spoiler-more]') && !$(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            if ($(this).find('.spoiler-content').height() > defaultHeight) {
                $(this).addClass('spoiler-scrolled');
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            $('.spoiler-' + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentMoreText + '</span>\n' +
                    '       </a>',
                lessLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentLessText + '</span>\n' +
                    '       </a>',
            });
        });
    }
};

// Initialization clipboard
application.prototype.initClipboard = function () {
    if ($('[data-clipboard]').length) {
        let clipboardBtn = $('.clipboard-trigger');

        clipboardBtn.on('click', function () {
            let clipboardValue = $(this).closest('[data-clipboard]').find('.clipboard-target');
            copyToClipboard(clipboardValue);
        });

        function copyToClipboard(element) {
            let $temp = $('<input>');
            $('body').append($temp);
            $temp.val($(element).text()).select();
            document.execCommand('copy');
            $temp.remove();
        }
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($('.tooltip').length) {
        tippy('.tooltip', {
            allowHTML: true,
            trigger: 'mouseenter click',
        });
    }
};

// Initialization tooltips card__act
application.prototype.initCardActTooltips = function () {
    if ($('.card-tooltip').length) {
        let instance = null;

        reinitTooltip();
        $(window).on('resize', reinitTooltip);

        function reinitTooltip() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                instance = tippy('.card-tooltip', {
                    allowHTML: true,
                    placement: 'bottom',
                    trigger: 'mouseenter click',
                });
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                if (instance != null) {
                    instance.destroy();
                    instance = null;
                }
            }
        }
    }
};

// Initialization input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization header input-search behavior
application.prototype.initHeaderInputSearch = function () {
    if ($('.header-search').length) {
        $('.input-search').on('click', function () {
            if (!$(this).closest('.header-search').is('on-focus')) {
                $('.header-search').addClass('on-focus');
            }
        });

        $(document).on('click', function (e) {
            if (!$('.input-search').is(e.target)) {
                $('.header-search').removeClass('on-focus');
            }
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
};

// Initialization notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        actionNotice
            .fadeOut()
            .removeClass('added');

        if ($(this).hasClass('active')) {
            showNotification();
            setTimeout(hideNotification, 3000);
            return;
        }
    });

    function showNotification() {
        actionNotice
            .addClass('added')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        actionNotice
            .fadeOut('slow')
            .removeClass('added');
    }
};

// Initialization range slider
application.prototype.initCatalogPriceSlider = function () {
    if ($('.range-slider').length) {
        const slider = document.getElementById('range-slider');
        const inputNumMin = document.getElementById('rsf_min');
        const inputNumMax = document.getElementById('rsf_max');
        let inputs = [inputNumMin, inputNumMax];

        noUiSlider.create(slider, {
            start: [10, 60],
            step: 1,
            connect: true,
            range: {
                'min': [0],
                'max': [100],
            }
        });

        slider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                slider.noUiSlider.setHandle(handle, this.value);
            });

            input.addEventListener('keydown', function (e) {
                let values = slider.noUiSlider.get();
                let value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                let steps = slider.noUiSlider.steps();

                // [down, up]
                let step = steps[handle];

                let position;

                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {
                    case 13:
                        slider.noUiSlider.setHandle(handle, this.value);

                        break;
                    case 38:
                        // Get step to go increase slider value (up)
                        position = step[1];

                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }

                        // null = edge of slider
                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value + position);
                        }

                        break;
                    case 40:
                        position = step[0];

                        if (position === false) {
                            position = 1;
                        }

                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value - position);
                        }

                        break;
                }
            });
        });


        // Restricts input for the given textbox to the given inputFilter.
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
                textbox.addEventListener(event, function(e) {
                    if (inputFilter(this.value)) {
                        // Accepted value
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        // Rejected value - restore the previous one
                        this.reportValidity();
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        // Rejected value - nothing to restore
                        this.value = "";
                    }
                });
            });
        }

        // Install input filters.
        setInputFilter(document.querySelector(".range-slider-fields__input"), function(value) {
            return /^-?\d*$/.test(value); });
    }
};

// Initialization catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialization catalog sidebar apply filter
application.prototype.initCatalogSidebarApplyFilter = function () {
    let trigger = null;
    let coordsTrigger = null;
    let wTrigger = null;
    let hTrigger = null;
    let html = '<div class="catalog-sidebar-apply-filter">' +
        '           <div class="catalog-sidebar-apply-filter__title">Показать</div>' +
        '           <div class="catalog-sidebar-apply-filter__value">2 184 товара</div>' +
        '       </div>';

    $(document).on('click', '.catalog-sidebar-filter__item .custom-checkbox__input', '.catalog-sidebar-filter__item .custom-checkbox__label-for', function () {
        let scroll = $(window).scrollTop();
        trigger = $(this).closest('.custom-checkbox');
        coordsTrigger = trigger.offset();
        wTrigger = trigger.outerWidth();
        hTrigger = trigger.outerHeight();

        $('.catalog-sidebar-apply-filter').remove();
        $('body').append(html);
        $('.catalog-sidebar-apply-filter').css({
            'top': parseInt(coordsTrigger.top + (hTrigger * 0.5)) - scroll + 'px',
            'left': parseInt(coordsTrigger.left + (wTrigger - 2)) + 'px',
        });
        setTimeout(function () {
            $('.catalog-sidebar-apply-filter').remove();
        }, 5000);

    });

    $(window).on('scroll', function () {
        $('.catalog-sidebar-apply-filter').remove();
    });
};

// Initialization catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('[data-sort]').length) {
        initSortSwitch();
        setSortSelect();
        $(window).on('resize', setSortSelect);

        $(document).on('click', function (e) {
            if (!$('[data-sort-select]').is(e.target) &&
                !$('[data-sort-options]').is(e.target) &&
                $('[data-sort-options]').has(e.target).length === 0)
            {
                closeSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeSort();
            }
        });

        function initSortSwitch() {
            $('[data-sort-options] input[type="radio"]').on('click', function () {
                let selectPlaceholder = $(this).siblings('.tag').text();

                $(this).closest('[data-sort]').find('[data-sort-select-text]').text(selectPlaceholder);
                closeSort();
            });
        }

        function setSortSelect() {
            $('[data-sort-select]').on('click', function () {
                if (!$(this).hasClass('active')) {
                    $(this).addClass('active');
                    $(this).siblings('[data-sort-options]').addClass('active');
                } /*else if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $(this).siblings('[data-sort-options]').removeClass('active');
                }*/
            });
        }

        function closeSort () {
            $('[data-sort-select]').removeClass('active');
            $('[data-sort-options]').removeClass('active');
        }
    }
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts__map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts__map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialization basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('active');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        let accordions = Array.from(document.querySelectorAll('.accordion'));
        let accordion = new Accordion(accordions, {
            duration: 200,
            /*showMultiple: true,*/
            onlyChildNodes: false,
        });
    }
};

// Initialization footer accordion
application.prototype.initFooterAccordion = function () {
    if ($(".accordion-footer").length) {
        let footerAccordion = null;
        const accordions = Array.from(document.querySelectorAll('.accordion-footer'));
        if (window.matchMedia('(max-width: 991.98px)').matches) {
            initAccordionResponsive();
        }
        $(window).on("resize", initAccordionResponsive);

        function initAccordionResponsive() {
            $(accordions).each(function (i) {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(footerAccordion != null) {
                        if(footerAccordion[i] != null) {
                            footerAccordion[i].destroy();
                            footerAccordion[i] = null;
                        }
                    }
                    return;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    footerAccordion = new Accordion(accordions, {
                        duration: 200,
                        showMultiple: true,
                        onlyChildNodes: false,
                    });
                    footerAccordion[i].closeAll();
                }
            });
        }
    }
};

// Initialization custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            return application.prototype.enableScroll();
        }
    });
};

// Initialization password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialization datepicker
application.prototype.initDatepicker = function () {
    if ($(".flatpickr").length) {
        const dateElem = $(".flatpickr");

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: "d.m.Y",
            disableMobile: "true",
            locale: "ru"
        });
    }
};

// Set behavior to button "more" in card-product
application.prototype.setCardProductMore = function () {
    if ($('[data-card-act-more]').length) {
        $('[data-card-act-more]').on('click', function () {
            if(!$(this).hasClass('active')) {
                $('[data-card-act-more]').not($(this)).removeClass('active');
                $('[data-card-act-content]').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('[data-card-act-content]').addClass('active');
            } else {
                $(this).removeClass('active');
                $(this).siblings('[data-card-act-content]').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if ($('.card__act').is(e.target) || $('.card__act').has(e.target).length === 0) {
                $('[data-card-act-more]').removeClass('active');
                $('[data-card-act-content]').removeClass('active');
            }
        });
    }
};

// Initialization switch content
application.prototype.initSmoothScrollTo = function () {
    $('[data-scroll-to]').on('click', function (e) {
        let currentId = $(this).attr('href');
        let headerSize = null;
        e.preventDefault();
        resizeHeader();
        $('html, body').animate({
            scrollTop: $(currentId).offset().top - headerSize
        }, 200);

        function resizeHeader() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                headerSize = 205;
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                headerSize = 62;
            } else if (window.matchMedia('(min-width: 992px) and (max-width: 1199.98px)').matches) {
                headerSize = 188;
            }
        }
    });
};

// Initialization cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $(document).on('click', '.cart-quantity-btn', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;
            } else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                } else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};
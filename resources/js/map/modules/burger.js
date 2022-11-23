
// Меню бургер
export default function burger(menuBurger) {
    if (menuBurger) {
        $(menuBurger).click(function () {
            $('body').toggleClass('_lock');
            $(menuBurger).toggleClass('_active');
            $('.menu__body').toggleClass('_active');
        });

        $('.menu__link').each(function (index, menuLink) {
            $(menuLink).click(function (e) {
                $('body').removeClass('_lock');
                $(menuBurger).removeClass('_active');
                $('.menu__body').removeClass('_active');
            });
        });

        $(window).click = function (e) {
            if ((e.target !== menuBurger) && ($(menuBurger).hasClass('_active'))) {
                $('body').removeClass('_lock');
                $(menuBurger).removeClass('_active');
                $('.menu__body').removeClass('_active');
            }
        }
    }
}

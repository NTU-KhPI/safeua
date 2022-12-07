
// При клике на кнопку в полдвале плавно поднимаемся вверх
export function GoOnTopbyScroll(startheight = 1500) {
    if ($('body').outerHeight() > startheight) {
        const footerBtn = $('.footer__button').find('a');
        $(footerBtn).click(function () {
            $("body,html").animate({
                scrollTop: 0,
            }, 700);
            return false;
        });
    }
    else {
        $('.footer__button').hide();
    }
};

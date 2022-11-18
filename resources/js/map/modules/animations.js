
// При клике на кнопку в полдвале плавно поднимаемся вверх
export function GoOnTopbyScroll() {
    const footerBtn = $('.footer__button').find('a');
    $(footerBtn).click(function () {
        $("body,html").animate({
            scrollTop: 0
        }, 700);
        return false;
    });
};
